<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{

    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }


    public function index()
    {
        $products = Product::all();
        return  view('sanpham', ["products" => $products]);
    }

    /**
     *
     * tìm kiếm từ ngày bắt đầu và ngày kết thúc
     * @return returnHTML : view mới cập nhật
     */
    public function create(Request $request)
    {
        try {
            //gán view table
            // $returnHTML = view('income-expense.table', ['list' => $list])->render();
            $data = $request->all();
            Product::create($data);
            redirect()->back()->with('success', 'Thêm sản phẩm thành công')->compact("");
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function update(Request $request)
    {
        try {
            //gán view table
            // $returnHTML = view('income-expense.table', ['list' => $list])->render();
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
            return Redirect::back()->with('success', 'Cập nhật sản phẩm thất bại');
        }
    }

    /**
     * Xóa dựa theo ID
     * @return message
     */
    public function delete($id)
    {
        try {
            // Delete và lấy list mới cho table
            // $this->incomeService->delete($id);
            return response()->json("Success");
        } catch (Exception $e) {
            Log::error($e);
            return response()->json("Error", 500);
        }
    }
}
