<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Producer;
use App\Services\ProductService;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{

    protected $productService;
    // public function __construct(ProductService $productService)
    // {
    //     $this->productService = $productService;
    // }


    public function index()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('producers', 'products.producer_id', '=', 'producers.id')
            ->select('*',)
            ->get();
        $categories = Category::all();
        $producer = Producer::all();
        return  view('sanpham', ["products" => $products, "categories" => $categories, "producers" => $producer]);
    }


    public function create(Request $request)
    {
        try {
            $data = $request->all();
            Product::create($data);
            redirect()->back()->with('success', 'Thêm sản phẩm thành công');
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function update(Request $request)
    {
        try {
            $data = $request->all();
            $product = Product::find($data['id']);
            $product->description = $data['description'];
            $product->origin = $data['origin']; //
            $product->name = $data['name'];
            $product->category_id = $data['category_id'];
            $product->producer_id = $data['producer_id'];
            $product->price = $data['price'];
            // $product->status = $data['status'];
            $product->code = $data['code'];
            $product->save();
            return Redirect::back()->with('success', 'Cập nhật sản phẩm thành công');
        } catch (Exception $e) {
            return Redirect::back()->with('success', 'Error');
        }
    }


    public function delete($id)
    {
        try {
            Product::find($id)->delete();
            return Redirect::back()->with('success', 'Xóa sản phẩm thành công');
        } catch (Exception $e) {
            Log::error($e);
            return response()->json("Error", 500);
        }
    }
}
