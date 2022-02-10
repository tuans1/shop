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

    // protected $incomeService;
    // protected $storeService;
    // public function __construct(IncomeService $incomeService, StoreService $storeService)
    // {
    //     $this->incomeService = $incomeService;
    //     $this->storeService = $storeService;
    // }

    public function index()
    {
        $category = Category::all();
        // dd($category);
        return  view('sanpham1', ["category" => $category]);
    }

    public function create(Request $request)
    {
        try {
            //gán view table
            // $returnHTML = view('income-expense.table', ['list' => $list])->render();
            $data = $request->all();
            Category::create($data);
            return Redirect::back()->with('success', 'Cập nhật sản phẩm thành công');
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
            $category = Category::find($data['id']);
            $category->description = $data['description'];
            $category->save();
            return Redirect::back()->with('success', 'Cập nhật loai sản phẩm thành công');
        } catch (Exception $e) {
            return Redirect::back()->with('success', 'Cập nhật loai sản phẩm thất bại');
        }
    }
}
