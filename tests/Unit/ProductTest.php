<?php

namespace Tests\Unit;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use DatabaseTransactions;
    public function testUpload()
    {
        $user = User::factory()->count(1)->make()->first();
        Auth::login($user);
        $products = Product::count();
        $res = $this->post('/store-products',[
            'file' => new UploadedFile(base_path() . '/resources/file/simple.xlsx', 'simple.xlsx', null, null, true)
        ]);
        $this->assertDatabaseCount('products', $products + 5);
    }
}
