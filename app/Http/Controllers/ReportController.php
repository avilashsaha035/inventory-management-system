<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $from = $request->from ? Carbon::parse($request->from)->startOfDay() : now()->startOfMonth();
        $to = $request->to ? Carbon::parse($request->to)->endOfDay() : now()->endOfMonth();

        $sales = Sale::whereBetween('sale_date', [$from, $to])->get();

        // Calculate totals
        $totalSell = $sales->sum('total_amount');
        $totalExpense = Expense::whereBetween('expense_date', [$from, $to])->sum('amount');

        return view('report.index', compact('sales','totalSell','totalExpense','from','to'));
    }
}
