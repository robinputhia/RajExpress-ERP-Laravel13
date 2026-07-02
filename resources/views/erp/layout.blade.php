<!doctype html>
<html lang="bn">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'RajExpress ERP')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('erp/css/app.css') }}">
</head>
<body>
<div class="erp-shell">
    <aside class="erp-sidebar">
        <div class="brand">
            <div class="brand-logo">✿</div>
            <div>
                <div class="brand-name">RajExpress ERP</div>
                <div class="brand-sub">Modern Business Suite</div>
            </div>
        </div>

        <nav class="menu">
            <a class="{{ request()->routeIs('erp.dashboard') ? 'active' : '' }}" href="{{ route('erp.dashboard') }}">🏠 Dashboard</a>
            <a class="{{ request()->routeIs('erp.pos') ? 'active' : '' }}" href="{{ route('erp.pos') }}">🛒 POS System</a>
            <a class="{{ request()->routeIs('erp.products') ? 'active' : '' }}" href="{{ route('erp.products') }}">📦 Products</a>
            <a class="{{ request()->routeIs('erp.sales') ? 'active' : '' }}" href="{{ route('erp.sales') }}">📊 Sales</a>
            <a class="{{ request()->routeIs('erp.purchase') ? 'active' : '' }}" href="{{ route('erp.purchase') }}">🧾 Purchase</a>
            <a class="{{ request()->routeIs('erp.people') ? 'active' : '' }}" href="{{ route('erp.people') }}">👥 People</a>
            <a class="{{ request()->routeIs('erp.reports') ? 'active' : '' }}" href="{{ route('erp.reports') }}">📈 Reports</a>
            <a class="{{ request()->routeIs('erp.settings') ? 'active' : '' }}" href="{{ route('erp.settings') }}">⚙ Settings</a>

            <div class="menu-title">Next Modules</div>
            <a href="#">🚚 Courier</a>
            <a href="#">☎ Call Center</a>
            <a href="#">👨‍💼 HRM / Salary</a>
            <a href="#">🌐 WooCommerce</a>
            <a href="#">🧩 Landing Builder</a>
        </nav>
    </aside>

    <main class="erp-main">
        <header class="topbar">
            <div class="search-wrap">
                <input class="search" placeholder="Search products, invoice, customer...">
            </div>
            <div class="top-actions">
                <a href="{{ route('erp.pos') }}" class="btn primary">POS</a>
                <button class="icon-btn">🔔</button>
                <button class="icon-btn">⚙</button>
                <div class="user-box">
                    <div class="avatar">R</div>
                    <div>
                        <div class="user-name">RajExpress</div>
                        <div class="user-role">Admin</div>
                    </div>
                </div>
            </div>
        </header>

        <section class="content">
            @yield('content')
        </section>
    </main>
</div>
</body>
</html>
