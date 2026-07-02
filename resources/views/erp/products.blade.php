@extends('erp.layout')

@section('title', 'Products - RajExpress ERP')

@section('content')
<div class="page-head">
    <div>
        <h1>Products</h1>
        <p>পুরনো products table থেকে data read করে modern product management view.</p>
    </div>
    <div class="head-actions">
        <button class="btn primary">+ Add Product</button>
    </div>
</div>

<div class="panel">
    <div class="panel-head">
        <h3>Product List</h3>
        <div class="table-actions">
            <input class="table-search" placeholder="Search product...">
            <button class="btn">Filter</button>
        </div>
    </div>

    <div class="table-wrap">
        <table class="erp-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>SKU</th>
                    <th>Selling Price</th>
                    <th>Current Stock</th>
                    <th>Alert Qty</th>
                </tr>
            </thead>
            <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->name ?? '-' }}</td>
                    <td>{{ $product->sku ?? '-' }}</td>
                    <td>৳{{ number_format((float) ($product->selling_price ?? 0), 2) }}</td>
                    <td>{{ $product->current_stock ?? 0 }}</td>
                    <td>{{ $product->alert_quantity ?? 0 }}</td>
                </tr>
            @empty
                <tr><td colspan="5" class="empty">No products found</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
