<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $data = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('*',)
            ->get();
        return response()->json(['store' => $data]);
    }

    public function create(Request $request)
    {
        try {

            return Redirect::back()->with('success', 'Thêm loại sản phẩm thành công');
        } catch (Exception $e) {
            echo $e;
        }
    }
}
