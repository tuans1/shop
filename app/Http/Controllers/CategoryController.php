<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{

    // protected $incomeService;
    // protected $storeService;
    // public function __construct(IncomeService $incomeService, StoreService $storeService)
    // {
    //     $this->incomeService = $incomeService;
    //     $this->storeService = $storeService;
    // }

    /**
     * @param store : lấy cửa hàng hiện tại
     * @return view kèm cửa hàng
     */
    public function index()
    {
        return  view('sanpham1');
    }
}
