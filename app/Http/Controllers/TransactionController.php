<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class TransactionController extends Controller
{
    public function index()
    {
        if (!Gate::allows('manage-transaction')) {
            abort(403);
        }

        $transactions =
            Transaction::with(['customer', 'items', 'items.product'])
                ->orderBy('tanggal', 'desc')
                ->get();
        $totalSales = $transactions->sum(fn($t) => $t->total);
        return view(
            'transaction.index',
            [
                'transactions' => $transactions,
                'totalSales' => $totalSales,
            ]
        );
    }

    public function items_popover(Transaction $transaction)
    {
        if (!Gate::allows('manage-transaction')) {
            abort(403);
        }

        $transaction->load(['items', 'items.product']);
        return view(
            'transaction.items_popover',
            [
                'items' => $transaction->items,
            ],
        );
    }

    public function alert()
    {
        if (!Gate::allows('manage-transaction')) {
            abort(403);
        }

        return view('transaction/alert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function top()
    {
        if (!Gate::allows('manage-transaction')) {
            abort(403);
        }

        $customers = DB::table('transactions')
            ->selectRaw('SUM(transactions.total) AS total, customers.nama_depan, customers.nama_belakang, customers.email, customers.nomor_whatsapp')
            ->join('customers', 'customers.idcustomers', '=', 'transactions.customer_id')
            ->groupBy('transactions.customer_id', 'customers.nama_depan', 'customers.nama_belakang', 'customers.email', 'customers.nomor_whatsapp')
            ->orderByDesc('total')
            ->get();

        return view('report.largest_transaction', compact('customers'));
    }
}
