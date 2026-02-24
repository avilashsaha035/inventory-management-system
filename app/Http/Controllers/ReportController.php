<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use App\Models\Sale;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $from = $request->from ?? now()->startOfMonth()->toDateString();
        $to = $request->to ?? now()->endOfMonth()->toDateString();

        $sales = Sale::whereBetween('sale_date', [$from, $to])->get();
        $totalSell = $sales->sum('total_amount');
        $totalExpense = Expense::whereBetween('expense_date', [$from, $to])->sum('amount');

        return view('report.index', compact('sales','totalSell','totalExpense','from','to'));
    }
}
