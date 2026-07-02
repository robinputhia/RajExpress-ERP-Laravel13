<!doctype html>
<html lang="bn">
<head>
<meta charset="utf-8">
<title>RajExpress ERP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{box-sizing:border-box}body{margin:0;font-family:Inter,Arial;background:#f7f9fc;color:#111827}.wrap{display:flex;min-height:100vh}.side{width:290px;background:#071225;color:white;padding:20px;position:fixed;inset:0 auto 0 0;overflow:auto}.brand{font-size:22px;font-weight:900;margin-bottom:25px}.side a{display:block;color:#e5edff;text-decoration:none;padding:12px 14px;border-radius:13px;margin:5px 0;font-weight:600}.side a:hover,.side .active{background:linear-gradient(135deg,#3b63ff,#7d3cff)}.main{margin-left:290px;flex:1}.top{height:70px;background:white;border-bottom:1px solid #e8eef6;display:flex;align-items:center;gap:15px;padding:0 24px;position:sticky;top:0}.search{height:42px;border:1px solid #e1e7f0;border-radius:13px;padding:0 15px;flex:1;max-width:430px}.btn{background:#6d4aff;color:white;border:0;border-radius:12px;padding:12px 18px;font-weight:800}.content{padding:25px}.head{display:flex;justify-content:space-between;align-items:center;margin-bottom:20px}.head h1{margin:0;font-size:28px}.muted{color:#64748b}.cards{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}.card{background:white;border:1px solid #e8eef6;border-radius:22px;padding:20px;box-shadow:0 12px 35px #0000000d}.card h2{margin:8px 0 0;font-size:25px}.icon{width:50px;height:50px;border-radius:15px;display:grid;place-items:center;color:white;font-size:22px}.grid{display:grid;grid-template-columns:2fr 1fr;gap:16px;margin-top:18px}.chart{height:260px;border-radius:18px;background:linear-gradient(180deg,#f4efff,#fff);display:grid;place-items:center;color:#6d4aff;font-weight:900}table{width:100%;border-collapse:collapse}th,td{padding:13px;border-bottom:1px solid #eef2f7;text-align:left;font-size:13px}.badge{background:#e9fbef;color:#079455;padding:6px 10px;border-radius:10px;font-weight:800;font-size:12px}@media(max-width:900px){.side{position:static;width:auto}.main{margin-left:0}.wrap{display:block}.cards,.grid{grid-template-columns:1fr}.content{padding:15px}.top{padding:0 12px}.head{display:block}.search{max-width:none}.btn{padding:10px 13px}}
</style>
</head>
<body>
<div class="wrap">
<aside class="side">
<div class="brand">🌱 RajExpress ERP</div>
<a class="active" href="/admin">🏠 Dashboard</a>
<a href="#">🛒 POS System</a>
<a href="#">📦 Products</a>
<a href="#">📊 Sales</a>
<a href="#">🧾 Purchases</a>
<a href="#">👥 Contacts</a>
<a href="#">↩ Sell Return</a>
<a href="#">🚚 Courier</a>
<a href="#">☎ Call Center</a>
<a href="#">👨‍💼 Staff / HRM</a>
<a href="#">৳ Salary</a>
<a href="#">📈 Reports</a>
<a href="#">🌐 Website</a>
<a href="#">WooCommerce</a>
<a href="#">⚙ Settings</a>
</aside>

<main class="main">
<header class="top">
<input class="search" placeholder="Search products, invoices, customers...">
<button class="btn">POS</button>
<button class="btn">+ Add</button>
</header>

<section class="content">
<div class="head">
<div>
<h1>Modern Dashboard</h1>
<p class="muted">EPOS functions migrate হবে, UI হবে modern premium.</p>
</div>
<button class="btn">Refresh</button>
</div>

<div class="cards">
<div class="card"><div class="icon" style="background:#16c768">৳</div><b>Total Sales</b><h2>৳{{ number_format($stats['sales'] ?? 0,2) }}</h2><p class="muted">Live database summary</p></div>
<div class="card"><div class="icon" style="background:#6d4aff">🛒</div><b>Total Purchase</b><h2>৳{{ number_format($stats['purchase'] ?? 0,2) }}</h2><p class="muted">Purchase overview</p></div>
<div class="card"><div class="icon" style="background:#3b82f6">📦</div><b>Products</b><h2>{{ number_format($stats['products'] ?? 0) }}</h2><p class="muted">Product database</p></div>
<div class="card"><div class="icon" style="background:#f97316">👥</div><b>Contacts</b><h2>{{ number_format($stats['contacts'] ?? 0) }}</h2><p class="muted">Customer & supplier</p></div>
</div>

<div class="grid">
<div class="card">
<h3>Sales Overview</h3>
<div class="chart">Chart Area</div>
</div>
<div class="card">
<h3>Quick Modules</h3>
<table>
<tr><td>POS</td><td><span class="badge">Next</span></td></tr>
<tr><td>Products</td><td><span class="badge">Next</span></td></tr>
<tr><td>Sales</td><td><span class="badge">Next</span></td></tr>
<tr><td>Purchase</td><td><span class="badge">Next</span></td></tr>
<tr><td>Reports</td><td><span class="badge">Next</span></td></tr>
</table>
</div>
</div>
</section>
</main>
</div>
</body>
</html>
