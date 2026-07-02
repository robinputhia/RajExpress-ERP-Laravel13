@extends('erp.layout')

@section('title', 'People - RajExpress ERP')

@section('content')
<div class="page-head">
    <div>
        <h1>People</h1>
        <p>Customers, suppliers এবং contacts modern view.</p>
    </div>
    <button class="btn primary">+ Add Contact</button>
</div>

<div class="panel">
    <div class="panel-head">
        <h3>Contact List</h3>
        <div class="table-actions">
            <input class="table-search" placeholder="Search contact...">
            <button class="btn">Filter</button>
        </div>
    </div>
    <div class="table-wrap">
        <table class="erp-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <tbody>
            @forelse($contacts as $contact)
                <tr>
                    <td>{{ $contact->name ?? $contact->supplier_business_name ?? '-' }}</td>
                    <td><span class="pill">{{ $contact->type ?? '-' }}</span></td>
                    <td>{{ $contact->mobile ?? $contact->contact_no ?? '-' }}</td>
                    <td>{{ $contact->email ?? '-' }}</td>
                    <td>৳{{ number_format((float)($contact->balance ?? 0), 2) }}</td>
                </tr>
            @empty
                <tr><td colspan="5" class="empty">No contacts found</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
