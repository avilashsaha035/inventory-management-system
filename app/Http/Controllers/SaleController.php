<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JournalEntry;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $products = Product::all();
        return view('sales.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id'       => 'required|exists:products,id',
            'quantity'         => 'required|integer',
            'discount'         => 'nullable|numeric',
            'customer_payment' => 'required|numeric',
        ]);

        $product = Product::find($validated['product_id']);
        $quantity = $validated['quantity'];
        $gross = $product->sell_price * $quantity;
        $discount = $validated['discount'] ?? 0;
        $vat = ($gross * 0.05);
        $net = $gross - $discount + $vat;

        $payment = $validated['customer_payment'];
        $due = $net - $payment;

        $sale = new Sale();
        $sale->product_id = $product->id;
        $sale->quantity = $quantity;
        $sale->discount = $discount;
        $sale->vat = $vat;
        $sale->total_amount = $net;
        $sale->customer_payment = $payment;
        $sale->due_amount = $due;
        $sale->sale_date = now();
        $sale->save();

        // Journal Entries
        JournalEntry::create(['date'=>now(),'account'=>'Accounts Receivable','debit'=>$net,'credit'=>0,'reference_id'=>$sale->id]);
        JournalEntry::create(['date'=>now(),'account'=>'Sales Revenue','debit'=>0,'credit'=>$gross,'reference_id'=>$sale->id]);
        JournalEntry::create(['date'=>now(),'account'=>'Discount Allowed','debit'=>$discount,'credit'=>0,'reference_id'=>$sale->id]);
        JournalEntry::create(['date'=>now(),'account'=>'VAT Payable','debit'=>0,'credit'=>$vat,'reference_id'=>$sale->id]);
        JournalEntry::create(['date'=>now(),'account'=>'Cash','debit'=>$payment,'credit'=>0,'reference_id'=>$sale->id]);
        JournalEntry::create(['date'=>now(),'account'=>'Accounts Receivable','debit'=>0,'credit'=>$payment,'reference_id'=>$sale->id]);

        return redirect()->route('report.index')->with('success','Sale recorded successfully');
    }
}

