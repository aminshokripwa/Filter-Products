<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use DatabaseTransactions;
    public function testIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testUpload()
    {
        $user = User::factory()->count(1)->make()->first();
        Auth::login($user);
        $products = Product::count();
        //product saved or not
        $res = $this->post('/store-products',[
            'file' => new UploadedFile(base_path() . '/resources/file/simple.xlsx', 'simple.xlsx', null, null, true)
        ]);
        $this->assertDatabaseCount('products', $products + 5);
        //test repeated products
        $res = $this->post('/store-products',[
            'file' => new UploadedFile(base_path() . '/resources/file/simple.xlsx', 'simple.xlsx', null, null, true)
        ]);
        $this->assertDatabaseCount('products', $products + 5);
        //test filter
        $res = $this->get('/?hard=fake');
        $res->assertSeeText('no products available');
    }
}
