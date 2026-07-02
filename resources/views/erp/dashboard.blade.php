@extends('erp.layout')

@section('title', 'Dashboard - RajExpress ERP')

@section('content')
<div class="page-head">
    <div>
        <h1>Dashboard</h1>
        <p>পুরনো EPOS workflow রেখে modern UI-তে RajExpress ERP migrate করা হচ্ছে।</p>
    </div>
    <div class="head-actions">
        <a href="{{ route('erp.products') }}" class="btn primary">Products</a>
        <a href="{{ route('erp.sales') }}" class="btn">Sales</a>
    </div>
</div>

<div class="stats-grid">
    <div class="stat-card green">
        <span class="stat-label">Total Sales</span>
        <h3>৳{{ number_format($stats['sales'] ?? 0, 2) }}</h3>
        <small>Total sell transactions value</small>
    </div>
    <div class="stat-card purple">
        <span class="stat-label">Total Purchase</span>
        <h3>৳{{ number_format($stats['purchase'] ?? 0, 2) }}</h3>
        <small>Total purchase value</small>
    </div>
    <div class="stat-card blue">
        <span class="stat-label">Products</span>
        <h3>{{ number_format($stats['products'] ?? 0) }}</h3>
        <small>Active product records</small>
    </div>
    <div class="stat-card orange">
        <span class="stat-label">Contacts</span>
        <h3>{{ number_format($stats['contacts'] ?? 0) }}</h3>
        <small>Customers & suppliers</small>
    </div>
</div>

<div class="content-grid">
    <div class="panel">
        <div class="panel-head">
            <h3>Recent Sales</h3>
            <a href="{{ route('erp.sales') }}">View all</a>
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
                    </tr>
                </thead>
                <tbody>
                @forelse($recentSales as $sale)
                    <tr>
                        <td>{{ $sale->invoice_no ?: 'INV-'.$sale->id }}</td>
                        <td>{{ $sale->transaction_date ?? '-' }}</td>
                        <td>{{ $sale->status ?? '-' }}</td>
                        <td>{{ $sale->payment_status ?? '-' }}</td>
                        <td>৳{{ number_format((float) $sale->final_total, 2) }}</td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="empty">No sales found</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="stack">
        <div class="panel mini">
            <h3>Business Summary</h3>
            <ul class="summary-list">
                <li><span>Total Invoices</span><b>{{ $stats['invoices'] ?? 0 }}</b></li>
                <li><span>Total Suppliers</span><b>{{ $stats['suppliers'] ?? 0 }}</b></li>
                <li><span>Products</span><b>{{ $stats['products'] ?? 0 }}</b></li>
                <li><span>Contacts</span><b>{{ $stats['contacts'] ?? 0 }}</b></li>
            </ul>
        </div>

        <div class="panel mini">
            <div class="panel-head">
                <h3>Low Stock / Quick View</h3>
            </div>
            <ul class="stock-list">
                @forelse($lowStock as $item)
                    <li>
                        <div>
                            <strong>{{ $item->name ?? 'Product' }}</strong>
                            <small>{{ $item->sku ?? '' }}</small>
                        </div>
                        <span class="pill">{{ $item->alert_quantity ?? 0 }}</span>
                    </li>
                @empty
                    <li class="empty-block">No product data found</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
