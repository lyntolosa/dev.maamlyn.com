<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Discovery | Ronalyn Tolosa</title>
    <meta name="description" content="Start a conversation about a full-stack system, custom integration, or workflow automation project.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        :root{--ink:#111;--muted:#4b5563;--line:#e5e7eb;--soft:#f6f8fa;--blue:#155eef;--navy:#111827}*{box-sizing:border-box}body{margin:0;color:var(--ink);font:16px/1.6 'DM Sans',Arial,sans-serif;background:linear-gradient(135deg,#fff,#f7faff)}h1,h2{font-family:'Space Grotesk',Arial,sans-serif;line-height:1.12;letter-spacing:-.035em}a{color:inherit;text-decoration:none}.wrap{width:min(1160px,calc(100% - 48px));margin:auto}.nav{min-height:78px;padding:16px 0;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid var(--line)}.brand{display:flex;gap:10px;align-items:center;font-weight:700}.brand-avatar{width:40px;height:40px;display:block;flex:0 0 40px;object-fit:cover;border:2px solid #fff;border-radius:50%;box-shadow:0 4px 14px #1b3a6a1a}.brand small{display:block;color:var(--muted);font-size:10px;letter-spacing:.1em;text-transform:uppercase}.back{color:var(--blue);font-weight:700;font-size:14px}.page{display:grid;grid-template-columns:.85fr 1.15fr;gap:72px;align-items:start;padding:88px 0}.eyebrow{display:inline-flex;align-items:center;gap:9px;color:var(--blue);font-size:12px;font-weight:700;letter-spacing:.14em;text-transform:uppercase}.eyebrow:before{content:'';width:24px;height:2px;background:var(--blue)}h1{margin:16px 0 20px;font-size:clamp(42px,6vw,72px)}.lead{max-width:520px;color:#1f2937;font-size:19px}.promise{display:grid;gap:12px;margin-top:34px}.promise div{padding:16px 18px;border:1px solid var(--line);border-radius:10px;background:#fff}.promise strong{display:block;font-family:'Space Grotesk';font-size:18px}.promise span{color:var(--muted);font-size:14px}.form-card{padding:34px;border:1px solid #dbe3ee;border-radius:16px;background:#fff;box-shadow:0 18px 50px #1b3a6a1a}.form-card h2{margin:0 0 8px;font-size:30px}.form-card>p{margin:0 0 24px;color:var(--muted)}form{display:grid;gap:16px}.fields{display:grid;grid-template-columns:1fr 1fr;gap:16px}label{display:grid;gap:6px;color:#1a1a1a;font-size:13px;font-weight:700}input,select,textarea{width:100%;padding:12px 13px;border:1px solid #cbd5e1;border-radius:8px;background:#fff;color:#111;font:inherit}textarea{min-height:130px;resize:vertical}input:focus,select:focus,textarea:focus{outline:2px solid #b9cdfd;border-color:var(--blue)}button{border:0;border-radius:8px;padding:13px 18px;color:#fff;background:var(--blue);font:700 14px 'DM Sans';cursor:pointer}button:hover{background:#0d47c7}.notice{margin-bottom:18px;padding:12px 14px;border-radius:8px;background:#e9f1ff;color:#124cc4;font-weight:600}@media(max-width:850px){.page{grid-template-columns:1fr;gap:40px;padding:64px 0}.fields{grid-template-columns:1fr}}@media(max-width:520px){.wrap{width:calc(100% - 28px)}.nav{min-height:68px}.brand small{max-width:220px}.form-card{padding:24px}}
    </style>
</head>
<body>
    <header><div class="wrap nav"><a class="brand" href="{{ route('home') }}"><img class="brand-avatar" src="{{ asset('images/profile-pic.png') }}" alt="Ronalyn Tolosa professional tech portrait" width="40" height="40"><span>Ronalyn Tolosa<small>Full-Stack Developer &amp; Integration Engineer</small></span></a><a class="back" href="{{ route('home') }}">← Back to portfolio</a></div></header>
    <main class="wrap page">
        <section>
            <div class="eyebrow">Project discovery</div>
            <h1>Build the system your business has been missing.</h1>
            <p class="lead">Tell me where manual work, disconnected tools, or slow handoffs are limiting your team. I’ll help identify the right full-stack system or custom integration to move the operation forward.</p>
            <div class="promise"><div><strong>Business-first scope</strong><span>We start with the operational outcome, not a technology shopping list.</span></div><div><strong>Production-minded delivery</strong><span>Clear architecture, controlled iterations, and a path to a reliable launch.</span></div><div><strong>Complete ownership</strong><span>You receive the code, repository, and deployment knowledge behind the system.</span></div></div>
        </section>
        <section class="form-card">
            @if(session('contact_success'))<div class="notice">{{ session('contact_success') }}</div>@endif
            <h2>Discuss your system</h2>
            <p>Share enough context for a focused first conversation.</p>
            <form method="POST" action="{{ route('generate') }}">
                @csrf
                <div class="fields"><label>Name<input type="text" name="name" value="{{ old('name') }}" required></label><label>Business email<input type="email" name="email" value="{{ old('email') }}" required></label></div>
                <div class="fields"><label>Business or brand<input type="text" name="business_type" value="{{ old('business_type') }}" required></label><label>What do you need?<select name="service" required><option value="">Select a focus</option><option>Full-stack web application</option><option>Workflow automation</option><option>Custom integration</option><option>Infrastructure and deployment</option></select></label></div>
                <label>Desired business outcome<input type="text" name="goal" value="{{ old('goal') }}" placeholder="What should the system improve or replace?" required></label>
                <label>Project context<textarea name="details" placeholder="Describe the current process, tools involved, timeline, or constraints." required>{{ old('details') }}</textarea></label>
                <button type="submit">Send Project Inquiry →</button>
            </form>
        </section>
    </main>
</body>
</html>
