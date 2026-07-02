@extends('erp.layout')

@section('title', 'Sales - RajExpress ERP')

@section('content')
<div class="page-head">
    <div>
        <h1>Sales</h1>
        <p>পুরনো EPOS sales transactions থেকে modern sales list.</p>
    </div>
    <div class="head-actions">
        <button class="btn primary">+ Add Sale</button>
        <a href="{{ route('erp.pos') }}" class="btn">Open POS</a>
    </div>
</div>

<div class="panel">
    <div class="panel-head">
        <h3>All Sales</h3>
        <div class="table-actions">
            <input class="table-search" placeholder="Search invoice...">
            <button class="btn">Export</button>
        </div>
    </div>
    <div class="table-wrap">
        <table class="erp-table">
            <thead>
                <tr>
                    <th>Invoice</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Payment</th>
                    <th>Total</th>
                    <th>Due</th>
                </tr>
            </thead>
            <tbody>
            @forelse($sales as $sale)
                <tr>
                    <td>{{ $sale->invoice_no ?? $sale->ref_no ?? 'INV-'.$sale->id }}</td>
                    <td>{{ $sale->transaction_date ?? $sale->created_at ?? '-' }}</td>
                    <td><span class="pill">{{ $sale->status ?? '-' }}</span></td>
                    <td>{{ $sale->payment_status ?? '-' }}</td>
                    <td>৳{{ number_format((float)($sale->final_total ?? 0), 2) }}</td>
                    <td>৳{{ number_format((float)($sale->total_before_tax ?? 0), 2) }}</td>
                </tr>
            @empty
                <tr><td colspan="6" class="empty">No sales found</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
