@extends('erp.layout')

@section('title', 'Purchase - RajExpress ERP')

@section('content')
<div class="page-head">
    <div>
        <h1>Purchase</h1>
        <p>পুরনো EPOS purchase transactions থেকে modern purchase list.</p>
    </div>
    <button class="btn primary">+ Add Purchase</button>
</div>

<div class="panel">
    <div class="panel-head">
        <h3>Purchase List</h3>
        <div class="table-actions">
            <input class="table-search" placeholder="Search reference...">
            <button class="btn">Filter</button>
        </div>
    </div>
    <div class="table-wrap">
        <table class="erp-table">
            <thead>
                <tr>
                    <th>Reference</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Payment</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
            @forelse($purchases as $purchase)
                <tr>
                    <td>{{ $purchase->ref_no ?? 'PUR-'.$purchase->id }}</td>
                    <td>{{ $purchase->transaction_date ?? $purchase->created_at ?? '-' }}</td>
                    <td><span class="pill">{{ $purchase->status ?? '-' }}</span></td>
                    <td>{{ $purchase->payment_status ?? '-' }}</td>
                    <td>৳{{ number_format((float)($purchase->final_total ?? 0), 2) }}</td>
                </tr>
            @empty
                <tr><td colspan="5" class="empty">No purchases found</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
