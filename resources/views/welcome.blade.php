@extends('layouts.app')
@section('title', 'Cosmic Interiors — Where Space Meets Soul')
@section('nav-class', '')
@section('logo-class', 'white-logo')
@section('navlinks-class', 'white-links')
@section('cta-class', 'white-cta')
@section('hamburger-class', 'white-ham')

@section('styles')
<style>
#hero{height:100vh;position:relative;display:flex;align-items:flex-end;overflow:hidden}
.hero-page{position:absolute;inset:0;background:linear-gradient(to bottom,rgba(26,10,122,.45) 0%,rgba(26,10,122,.75) 100%),url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=1800&q=80') center/cover no-repeat}
.hero-content{position:relative;z-index:2;padding:0 60px 100px;max-width:900px}
.hero-tag{font-size:.68rem;letter-spacing:.35em;text-transform:uppercase;color:rgba(255,255,255,.75);margin-bottom:28px;display:flex;align-items:center;gap:16px;opacity:0;animation:fadeUp 1s ease .3s forwards}
.hero-tag::before{content:'';width:40px;height:1px;background:rgba(255,255,255,.6)}
.hero-title{font-family:var(--font-display);font-size:clamp(3.5rem,7vw,6.5rem);font-weight:300;line-height:1.08;color:#fff;margin-bottom:32px;opacity:0;animation:fadeUp 1s ease .5s forwards}
.hero-title em{font-style:italic;text-decoration:underline;text-decoration-color:rgba(255,255,255,.3);text-underline-offset:6px}
.hero-sub{font-size:.95rem;line-height:1.8;color:rgba(255,255,255,.65);max-width:520px;margin-bottom:52px;opacity:0;animation:fadeUp 1s ease .7s forwards}
.hero-actions{display:flex;gap:24px;align-items:center;opacity:0;animation:fadeUp 1s ease .9s forwards}
.hero-scroll{position:absolute;right:60px;bottom:100px;font-size:.65rem;letter-spacing:.3em;text-transform:uppercase;color:rgba(255,255,255,.4);writing-mode:vertical-rl;display:flex;align-items:center;gap:16px;opacity:0;animation:fadeIn 1s ease 1.2s forwards}
.hero-scroll::after{content:'';width:1px;height:60px;background:linear-gradient(to bottom,rgba(255,255,255,.5),transparent);animation:sl 2s ease-in-out infinite}
@keyframes sl{0%,100%{opacity:.4}50%{opacity:1}}
.btn-ghost{font-size:.72rem;letter-spacing:.2em;text-transform:uppercase;color:rgba(255,255,255,.8);text-decoration:none;display:flex;align-items:center;gap:12px;transition:color .3s}
.btn-ghost::after{content:'→';transition:transform .3s}
.btn-ghost:hover{color:#fff}
.btn-ghost:hover::after{transform:translateX(6px)}

#stats{background:var(--primary);padding:60px;display:grid;grid-template-columns:repeat(4,1fr)}
.stat-item{text-align:center;padding:20px;border-right:1px solid rgba(255,255,255,.15)}
.stat-item:last-child{border-right:none}
.stat-num{font-family:var(--font-display);font-size:3rem;font-weight:300;color:#fff;line-height:1;margin-bottom:10px}
.stat-lbl{font-size:.7rem;letter-spacing:.2em;text-transform:uppercase;color:rgba(255,255,255,.6)}

#services{padding:120px 60px;background:var(--bg)}
.svc-header{display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:80px}
.svc-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2px}
.svc-card{position:relative;height:520px;overflow:hidden}
.svc-card img{width:100%;height:100%;object-fit:cover;transition:transform .8s cubic-bezier(.25,.46,.45,.94),filter .8s;filter:brightness(.55)}
.svc-card:hover img{transform:scale(1.08);filter:brightness(.35)}
.svc-info{position:absolute;inset:0;display:flex;flex-direction:column;justify-content:flex-end;padding:48px 40px;background:linear-gradient(to top,rgba(26,10,122,.9) 0%,transparent 60%)}
.svc-n{font-family:var(--font-display);font-size:4rem;font-weight:300;color:rgba(255,255,255,.12);position:absolute;top:32px;right:32px;line-height:1;transition:color .4s}
.svc-card:hover .svc-n{color:rgba(255,255,255,.3)}
.svc-t{font-family:var(--font-display);font-size:1.9rem;font-weight:300;color:#fff;margin-bottom:12px}
.svc-d{font-size:.82rem;line-height:1.8;color:rgba(255,255,255,.65);margin-bottom:24px;max-height:0;overflow:hidden;transition:max-height .5s,opacity .5s;opacity:0}
.svc-card:hover .svc-d{max-height:100px;opacity:1}
.svc-link{font-size:.65rem;letter-spacing:.2em;text-transform:uppercase;color:rgba(255,255,255,.8);text-decoration:none;display:flex;align-items:center;gap:10px;transition:gap .3s,color .3s}
.svc-link:hover{gap:18px;color:#fff}

#about{padding:120px 60px;background:var(--bg-soft);display:grid;grid-template-columns:1fr 1fr;gap:100px;align-items:center}
.ab-img{position:relative}
.ab-img img{width:100%;height:580px;object-fit:cover}
.ab-badge{position:absolute;bottom:-30px;right:-30px;width:160px;height:160px;background:var(--primary);display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center}
.ab-badge-n{font-family:var(--font-display);font-size:2.5rem;font-weight:300;color:#fff;line-height:1}
.ab-badge-t{font-size:.65rem;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.7);margin-top:6px}
.ab-feats{margin-top:48px;display:grid;grid-template-columns:1fr 1fr;gap:24px}
.ab-feat{padding:24px;border:1px solid var(--border);background:#fff;transition:border-color .3s,box-shadow .3s}
.ab-feat:hover{border-color:var(--primary);box-shadow:0 4px 20px rgba(26,10,122,.08)}
.feat-icon{font-size:1.4rem;color:var(--primary);margin-bottom:12px}
.feat-t{font-size:.8rem;letter-spacing:.1em;text-transform:uppercase;color:var(--primary);margin-bottom:8px;font-weight:500}
.feat-d{font-size:.8rem;line-height:1.7;color:var(--text-muted)}

#portfolio{padding:120px 60px;background:var(--bg)}
.port-header{display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:60px}
.port-filter{display:flex;gap:8px}
.filter-btn{font-size:.68rem;letter-spacing:.15em;text-transform:uppercase;padding:8px 20px;border:1px solid var(--border);background:transparent;color:var(--nav-text);cursor:pointer;transition:all .3s}
.filter-btn.active,.filter-btn:hover{background:var(--primary);border-color:var(--primary);color:#fff}
.port-grid{display:grid;grid-template-columns:repeat(12,1fr);gap:12px}
.port-item{overflow:hidden;position:relative;background:var(--bg-card)}
.port-item:nth-child(1){grid-column:span 7;grid-row:span 2;height:600px}
.port-item:nth-child(2){grid-column:span 5;height:290px}
.port-item:nth-child(3){grid-column:span 5;height:290px}
.port-item:nth-child(4){grid-column:span 4;height:340px}
.port-item:nth-child(5){grid-column:span 4;height:340px}
.port-item:nth-child(6){grid-column:span 4;height:340px}
.port-item img{width:100%;height:100%;object-fit:cover;transition:transform .8s;filter:brightness(.8)}
.port-item:hover img{transform:scale(1.06);filter:brightness(.5)}
.port-ov{position:absolute;inset:0;display:flex;flex-direction:column;justify-content:flex-end;padding:32px;background:linear-gradient(to top,rgba(26,10,122,.85) 0%,transparent 60%);opacity:0;transition:opacity .4s}
.port-item:hover .port-ov{opacity:1}
.port-cat{font-size:.62rem;letter-spacing:.25em;text-transform:uppercase;color:rgba(255,255,255,.7);margin-bottom:8px}
.port-name{font-family:var(--font-display);font-size:1.4rem;font-weight:300;color:#fff}

#process{padding:120px 60px;background:var(--primary)}
.proc-steps{display:grid;grid-template-columns:repeat(4,1fr);gap:0;position:relative}
.proc-steps::before{content:'';position:absolute;top:36px;left:calc(12.5% + 20px);right:calc(12.5% + 20px);height:1px;background:rgba(255,255,255,.2)}
.proc-step{padding:0 32px;text-align:center}
.proc-num{width:72px;height:72px;border:1px solid rgba(255,255,255,.4);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 32px;font-family:var(--font-display);font-size:1.4rem;font-weight:300;color:#fff;background:var(--primary);position:relative;z-index:1;transition:all .3s}
.proc-step:hover .proc-num{background:#fff;color:var(--primary);border-color:#fff}
.proc-t{font-size:.78rem;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.9);margin-bottom:16px;font-weight:500}
.proc-d{font-size:.82rem;line-height:1.8;color:rgba(255,255,255,.55)}

#testimonials{padding:120px 60px;background:var(--bg-soft)}
.test-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:60px}
.test-card{padding:48px 40px;border:1px solid var(--border);background:#fff;transition:border-color .3s,transform .3s,box-shadow .3s}
.test-card:hover{border-color:var(--primary);transform:translateY(-6px);box-shadow:0 12px 40px rgba(26,10,122,.1)}
.test-q{font-family:var(--font-display);font-size:5rem;font-weight:300;color:var(--primary);opacity:.2;line-height:.8;margin-bottom:24px}
.test-text{font-size:.9rem;line-height:1.9;color:var(--text-muted);margin-bottom:36px;font-style:italic}
.test-auth{display:flex;align-items:center;gap:16px}
.test-av{width:44px;height:44px;border-radius:50%;background:var(--primary);display:flex;align-items:center;justify-content:center;font-family:var(--font-display);font-size:1.1rem;color:#fff}
.test-name{font-size:.8rem;letter-spacing:.08em;text-transform:uppercase;color:var(--text);font-weight:500}
.test-loc{font-size:.72rem;color:var(--nav-text);margin-top:2px}

#cta{padding:140px 60px;background:var(--bg);text-align:center;position:relative;overflow:hidden}
#cta::before{content:'';position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:600px;height:600px;border-radius:50%;background:radial-gradient(ellipse,rgba(26,10,122,.05) 0%,transparent 70%)}
.cta-c{position:relative;z-index:1}
.cta-title{font-family:var(--font-display);font-size:clamp(2.5rem,5vw,4.5rem);font-weight:300;color:var(--text);margin-bottom:24px;line-height:1.1}
.cta-title em{font-style:italic;color:var(--primary)}
.cta-desc{font-size:.9rem;color:var(--text-muted);margin-bottom:52px;max-width:480px;margin-left:auto;margin-right:auto;line-height:1.8}
.cta-btns{display:flex;gap:20px;justify-content:center;align-items:center}

@media(max-width:1024px){#about{grid-template-columns:1fr;gap:60px} .ab-img{order:-1} #stats{grid-template-columns:repeat(2,1fr)} .stat-item:nth-child(2){border-right:none} .port-item:nth-child(1){grid-column:span 12;height:420px} .port-item:nth-child(2),.port-item:nth-child(3){grid-column:span 6} .port-item:nth-child(4),.port-item:nth-child(5),.port-item:nth-child(6){grid-column:span 4} .proc-steps{grid-template-columns:repeat(2,1fr);gap:48px} .proc-steps::before{display:none} .test-grid{grid-template-columns:1fr 1fr}}
@media(max-width:768px){.hero-content{padding:0 24px 80px} .hero-scroll{display:none} #stats{padding:40px 24px} #services,#about,#portfolio,#process,#testimonials,#cta{padding:80px 24px} .svc-header,.port-header{flex-direction:column;gap:32px;align-items:flex-start} .svc-grid{grid-template-columns:1fr} .svc-card{height:400px} .port-item{grid-column:span 12 !important;height:280px !important} .proc-steps{grid-template-columns:1fr} .test-grid{grid-template-columns:1fr} .cta-btns{flex-direction:column} .ab-feats{grid-template-columns:1fr} .ab-badge{width:120px;height:120px;bottom:-20px;right:-10px}}
</style>
@endsection

@section('content')
<section id="hero">
    <div class="hero-page"></div>
    <div class="hero-content">
        <div class="hero-tag">Luxury Interior Design</div>
        <h1 class="hero-title">Where <em>Space</em><br>Meets Soul</h1>
        <p class="hero-sub">We craft living experiences that transcend the ordinary — blending cosmic elegance with deeply personal storytelling in every corner of your home.</p>
        <div class="hero-actions">
            <a href="{{ route('portfolio') }}" class="btn-white">Explore Our Work</a>
            <a href="{{ route('about') }}" class="btn-ghost">Our Philosophy</a>
        </div>
    </div>
    <div class="hero-scroll">Scroll</div>
</section>

<section id="stats">
    <div class="stat-item"><div class="stat-num" data-count="500">0</div><div class="stat-lbl">Homes Transformed</div></div>
    <div class="stat-item"><div class="stat-num" data-count="12">0</div><div class="stat-lbl">Years of Excellence</div></div>
    <div class="stat-item"><div class="stat-num" data-count="48">0</div><div class="stat-lbl">Design Awards</div></div>
    <div class="stat-item"><div class="stat-num" data-count="98">0</div><div class="stat-lbl">% Client Satisfaction</div></div>
</section>

<section id="services">
    <div class="svc-header reveal">
        <div><div class="section-tag">What We Do</div><h2 class="section-title">Design for every<br><em>dimension of life</em></h2></div>
        <p class="section-desc">From intimate residences to grand commercial spaces, we bring our cosmic vision to every project.</p>
    </div>
    <div class="svc-grid reveal">
        <div class="svc-card"><img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=800&q=80" alt="Residential"><div class="svc-info"><div class="svc-n">01</div><h3 class="svc-t">Residential</h3><p class="svc-d">High-end interiors for homes that reflect your personality — from eclectic to contemporary, every detail handcrafted.</p><a href="{{ route('services') }}" class="svc-link">Discover More →</a></div></div>
        <div class="svc-card"><img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80" alt="Commercial"><div class="svc-info"><div class="svc-n">02</div><h3 class="svc-t">Commercial</h3><p class="svc-d">Elegant spaces that inspire productivity and leave lasting impressions on every visitor and client.</p><a href="{{ route('services') }}" class="svc-link">Discover More →</a></div></div>
        <div class="svc-card"><img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800&q=80" alt="Hospitality"><div class="svc-info"><div class="svc-n">03</div><h3 class="svc-t">Hospitality</h3><p class="svc-d">Charming, immersive atmospheres for hotels, restaurants, and resorts that guests never want to leave.</p><a href="{{ route('services') }}" class="svc-link">Discover More →</a></div></div>
    </div>
</section>

<section id="about">
    <div class="ab-img reveal">
        <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=800&q=80" alt="About">
        <div class="ab-badge"><div class="ab-badge-n">12+</div><div class="ab-badge-t">Years of Excellence</div></div>
    </div>
    <div class="reveal">
        <div class="section-tag">Our Philosophy</div>
        <h2 class="section-title">Design that <em>lives</em><br>and breathes with you</h2>
        <p class="section-desc">At Cosmic Interiors, we believe a home is a living entity — it grows with you, holds your stories, and reflects your evolution.</p>
        <p class="section-desc" style="margin-top:16px">We begin by listening. Understanding how you live, how you gather, how you find peace.</p>
        <div class="ab-feats">
            <div class="ab-feat"><div class="feat-icon">✦</div><div class="feat-t">Bespoke Design</div><div class="feat-d">Every project is entirely unique, crafted to your exact vision.</div></div>
            <div class="ab-feat"><div class="feat-icon">◈</div><div class="feat-t">Premium Materials</div><div class="feat-d">We source only the finest materials from trusted artisans worldwide.</div></div>
            <div class="ab-feat"><div class="feat-icon">⬡</div><div class="feat-t">90-Day Delivery</div><div class="feat-d">A promise we keep — your transformed home, on time, every time.</div></div>
            <div class="ab-feat"><div class="feat-icon">◉</div><div class="feat-t">10-Year Warranty</div><div class="feat-d">Quality that stands the test of time, backed by our full guarantee.</div></div>
        </div>
    </div>
</section>

<section id="portfolio">
    <div class="port-header reveal">
        <div><div class="section-tag">Our Work</div><h2 class="section-title">Stories told<br>through <em>space</em></h2></div>
        <div class="port-filter">
            <button class="filter-btn active">All</button>
            <button class="filter-btn">Residential</button>
            <button class="filter-btn">Commercial</button>
            <button class="filter-btn">Hospitality</button>
        </div>
    </div>
    <div class="port-grid reveal">
        <div class="port-item"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1000&q=80" alt="Solaris"><div class="port-ov"><div class="port-cat">Residential</div><div class="port-name">The Solaris Penthouse</div></div></div>
        <div class="port-item"><img src="https://images.unsplash.com/photo-1618219908412-a29a1bb7b86e?w=800&q=80" alt="Nebula"><div class="port-ov"><div class="port-cat">Hospitality</div><div class="port-name">Nebula Restaurant</div></div></div>
        <div class="port-item"><img src="https://images.unsplash.com/photo-1631679706909-1844bbd07221?w=800&q=80" alt="Aurora"><div class="port-ov"><div class="port-cat">Residential</div><div class="port-name">Aurora Villa</div></div></div>
        <div class="port-item"><img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=800&q=80" alt="Zenith"><div class="port-ov"><div class="port-cat">Commercial</div><div class="port-name">Zenith Offices</div></div></div>
        <div class="port-item"><img src="https://images.unsplash.com/photo-1560448204-603b3fc33ddc?w=800&q=80" alt="Eclipse"><div class="port-ov"><div class="port-cat">Hospitality</div><div class="port-name">Eclipse Suite</div></div></div>
        <div class="port-item"><img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=800&q=80" alt="Orion"><div class="port-ov"><div class="port-cat">Residential</div><div class="port-name">Orion Loft</div></div></div>
    </div>
</section>

<section id="process">
    <div style="text-align:center;margin-bottom:80px" class="reveal">
        <div class="section-tag light-tag center">How We Work</div>
        <h2 class="section-title white-title">A journey from <em>vision</em> to reality</h2>
    </div>
    <div class="proc-steps reveal">
        <div class="proc-step"><div class="proc-num">01</div><div class="proc-t">Discovery</div><p class="proc-d">We begin with a deep conversation — understanding your life and the feeling you want your home to evoke.</p></div>
        <div class="proc-step"><div class="proc-num">02</div><div class="proc-t">Concept Design</div><p class="proc-d">Our designers craft a bespoke concept — moodboards, spatial plans, and material palettes tailored to you.</p></div>
        <div class="proc-step"><div class="proc-num">03</div><div class="proc-t">Execution</div><p class="proc-d">Our master craftsmen bring the design to life with meticulous attention to every detail.</p></div>
        <div class="proc-step"><div class="proc-num">04</div><div class="proc-t">Handover</div><p class="proc-d">We walk you through your transformed space, ensuring every element is perfect before you step in.</p></div>
    </div>
</section>

<section id="testimonials">
    <div class="reveal"><div class="section-tag">Client Stories</div><h2 class="section-title">Words from those<br>we've <em>transformed</em></h2></div>
    <div class="test-grid reveal">
        <div class="test-card"><div class="test-q">"</div><p class="test-text">Cosmic Interiors didn't just redesign our home — they redesigned how we experience it. Every morning feels like waking up in a five-star sanctuary.</p><div class="test-auth"><div class="test-av">R</div><div><div class="test-name">Riya & Arjun Mehta</div><div class="test-loc">Mumbai, Residential</div></div></div></div>
        <div class="test-card"><div class="test-q">"</div><p class="test-text">Our restaurant went from ordinary to iconic. Guests now come just to experience the space. Bookings tripled within the first month of the redesign.</p><div class="test-auth"><div class="test-av">S</div><div><div class="test-name">Sanjay Khanna</div><div class="test-loc">Bengaluru, Hospitality</div></div></div></div>
        <div class="test-card"><div class="test-q">"</div><p class="test-text">Working with Cosmic Interiors was effortless. They listened, understood, and delivered beyond what we imagined. Our office now inspires everyone.</p><div class="test-auth"><div class="test-av">P</div><div><div class="test-name">Priya Venkatesh</div><div class="test-loc">Hyderabad, Commercial</div></div></div></div>
    </div>
</section>

<section id="cta">
    <div class="cta-c reveal">
        <div class="section-tag center">Begin Your Journey</div>
        <h2 class="cta-title">Ready to transform<br>your <em>space</em>?</h2>
        <p class="cta-desc">Book a complimentary consultation with one of our senior designers. Let's start with a conversation about your dream.</p>
        <div class="cta-btns">
            <a href="{{ route('contact') }}" class="btn-primary">Book Free Consultation</a>
            <a href="tel:+919999999999" class="btn-outline">Call Us Today</a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
const cobs=new IntersectionObserver(entries=>{entries.forEach(entry=>{if(entry.isIntersecting){const el=entry.target,t=parseInt(el.dataset.count);let c=0;const inc=t/60;const ti=setInterval(()=>{c+=inc;if(c>=t){c=t;clearInterval(ti);}el.textContent=Math.floor(c)+(el.dataset.count==='98'?'%':'+');},25);cobs.unobserve(el);}});},{threshold:.5});
document.querySelectorAll('[data-count]').forEach(el=>cobs.observe(el));
document.querySelectorAll('.filter-btn').forEach(btn=>btn.addEventListener('click',()=>{document.querySelectorAll('.filter-btn').forEach(b=>b.classList.remove('active'));btn.classList.add('active');}));
</script>
@endsection
