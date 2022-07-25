<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class productController extends Controller
{

    public function index(Request $request)
    {
        $products = Product::storage($request->get('storage'))
            ->ram($request->get('ram'))
            ->hddType($request->get('hard'))
            ->location($request->get('location'))
            ->paginate(20)
            ->withQueryString();
        $locations = Product::all()->groupBy('location')->keys();
        return view('product.index', compact('products', 'locations'));
    }

    public function store(Request $request)
    {
//        validation
        $request->validate([
            'file' => ['required', 'file', 'mimes:xlsx,xls']
        ]);
//        read file
        $file = IOFactory::load($request->file('file'));
        $rows = $file->getActiveSheet();
        $data = $rows->rangeToArray("A2:E" . count($rows->toArray()));
        $newData = [];
        foreach ($data as $p){
            if (
            Product::where('model','=', $p[0])
                ->where('ram','=', $p[1])
                ->where('hdd','=', $p[2])
                ->where('location','=', $p[3])
                ->count()
            ){
                continue;
            }
            //ram
            $ram = $p[1];
            preg_match('/(\d+)\w+/', $ram, $matches);
            $ram_capacity = $matches[1];
            //hdd
            $hdd = $p[2];
            preg_match('/(\S+)(GB|TB)(\w+)/', $hdd, $matches);
            $hdd_type = $matches[3];
            if (strpos($matches[1], 'x') !== false){
                $hdd_capacity = explode('x', $matches[1]);
                $hdd_capacity = $hdd_capacity[0] * $hdd_capacity[1];
            }else{
                $hdd_capacity = $matches[1];
            }
            if ($matches[2] == 'TB'){
                $hdd_capacity *= 1000;
            }
            $newData[] = [
                'model' => $p[0],
                'ram' => $ram,
                'ram_capacity' => $ram_capacity,
                'hdd' => $hdd,
                'hdd_type' => $hdd_type,
                'hdd_capacity' => $hdd_capacity,
                'location' => $p[3],
                'price' => (float) filter_var( $p[4], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ),
                'unit' => strpos($p[4], '$') !== false ? '$' : '€'
            ];
        }
//        save data
        Product::insert($newData);
        return back()->with('success', 'products saved successfully.');
    }

    public function delete(Product $product)
    {
        $product->delete();
        return back();
    }

    public function deleteAll()
    {
        Product::truncate();
        return back()->with('success', 'all records deleted');
    }
}
