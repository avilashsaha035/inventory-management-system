<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function create()
    {
        return view('expenses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description'  => 'required|string',
            'amount'       => 'required|numeric',
            'expense_date' => 'required|date',
        ]);

        $expense = new Expense();
        $expense->description = $request->description;
        $expense->amount = $request->amount;
        $expense->expense_date = $request->expense_date;
        $expense->save();

        return redirect()->route('report.index')->with('success','Expense recorded successfully');
    }
}


