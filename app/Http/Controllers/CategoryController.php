<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Services\ProductService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        // dd($category);
        return  view('sanpham1', ["category" => $category]);
    }

    public function create(Request $request)
    {
        try {
            $data = $request->all();
            Category::create($data);
            return Redirect::back()->with('success', 'Thêm loại sản phẩm thành công');
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function update(Request $request)
    {
        try {
            $data = $request->all();
            $category = Category::find($data['id']);
            $category->category_name = $data['category_name'];
            $category->save();
            return Redirect::back()->with('success', 'Cập nhật loai sản phẩm thành công');
        } catch (Exception $e) {
            return Redirect::back()->with('success', 'Error');
        }
    }
}
