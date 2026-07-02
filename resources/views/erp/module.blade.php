@extends('erp.layout')

@section('title', $title . ' - RajExpress ERP')

@section('content')
<div class="page-head">
    <div>
        <h1>{{ $title }}</h1>
        <p>এই module-এ পুরনো EPOS functionality Laravel 13 modern UI-তে migrate হবে।</p>
    </div>
</div>

<div class="panel">
    <h3>{{ $title }} Module</h3>
    <p class="module-note">
        Structure ready. Next sprint-এ এই module-এ real data table / form / workflow বসানো হবে।
    </p>
</div>
@endsection
