<?php

namespace App\Http\Controllers;

use App\Exports\IncomeExport;
use App\Services\IncomeService;
use App\Services\StoreService;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class InComeController extends Controller
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
        $store = $this->storeService->getById(session('idStore'));
        return  view('income-expense.income', ['store' => $store]);
    }

    /**
     *
     * tìm kiếm từ ngày bắt đầu và ngày kết thúc
     * @return returnHTML : view mới cập nhật
     */
    public function search(Request $request)
    {
        try {
            //gán view table
            // $returnHTML = view('income-expense.table', ['list' => $list])->render();
            return response()->json("returnHTML");
        } catch (Exception $e) {
            Log::error($e);
            return response()->json("Error", 500);
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
