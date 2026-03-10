@extends('layouts.app')
@section('title', 'Portfolio — Cosmic Interiors')
@section('navclass', 'solid')

@section('styles')
<style>
    #portfolio-hero{height:60vh;min-height:420px;position:relative;display:flex;align-items:flex-end;overflow:hidden;}
    .portfolio-hero-bg{position:absolute;inset:0;background:linear-gradient(to bottom,rgba(26,10,122,0.45) 0%,rgba(26,10,122,0.82) 100%),url('https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1800&q=80') center/cover no-repeat;}
    .portfolio-hero-content{position:relative;z-index:2;padding:0 60px 90px;}
    .page-tag{font-size:0.65rem;letter-spacing:0.35em;text-transform:uppercase;color:rgba(255,255,255,0.7);margin-bottom:16px;display:flex;align-items:center;gap:12px;opacity:0;animation:fadeUp 1s ease 0.3s forwards;}
    .page-tag::before{content:'';width:24px;height:1px;background:rgba(255,255,255,0.5);}
    .page-h1{font-family:var(--font-display);font-size:clamp(3rem,6vw,5.5rem);font-weight:300;color:#fff;line-height:1.05;opacity:0;animation:fadeUp 1s ease 0.5s forwards;}
    .page-h1 em{font-style:italic;}
    /* FILTER */
    #filter-bar{padding:40px 60px;background:var(--bg);border-bottom:1px solid var(--border);display:flex;align-items:center;gap:12px;flex-wrap:wrap;}
    .filter-label{font-size:0.68rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--nav-text);margin-right:8px;}
    .filter-btn{font-size:0.68rem;letter-spacing:0.15em;text-transform:uppercase;padding:8px 20px;border:1px solid var(--border);background:transparent;color:var(--nav-text);cursor:pointer;transition:all 0.3s;}
    .filter-btn.active,.filter-btn:hover{background:var(--primary);border-color:var(--primary);color:#fff;}
    /* PORTFOLIO GRID */
    #portfolio-grid{padding:60px 60px 100px;background:var(--bg);}
    .projects-masonry{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;}
    .project-card{position:relative;overflow:hidden;background:var(--bg-card);cursor:pointer;}
    .project-card:nth-child(3n+1):first-child{grid-column:span 2;height:500px;}
    .project-card.tall{height:480px;}
    .project-card.medium{height:360px;}
    .project-card.wide{grid-column:span 2;height:400px;}
    .project-card img{width:100%;height:100%;object-fit:cover;transition:transform 0.8s ease;filter:brightness(0.82);}
    .project-card:hover img{transform:scale(1.06);filter:brightness(0.5);}
    .project-overlay{position:absolute;inset:0;display:flex;flex-direction:column;justify-content:flex-end;padding:36px;background:linear-gradient(to top,rgba(26,10,122,0.9) 0%,transparent 55%);opacity:0;transition:opacity 0.4s;}
    .project-card:hover .project-overlay{opacity:1;}
    .project-cat{font-size:0.6rem;letter-spacing:0.25em;text-transform:uppercase;color:rgba(255,255,255,0.65);margin-bottom:8px;}
    .project-name{font-family:var(--font-display);font-size:1.5rem;font-weight:300;color:#fff;margin-bottom:8px;}
    .project-loc{font-size:0.72rem;color:rgba(255,255,255,0.55);}
    .project-arrow{position:absolute;top:28px;right:28px;width:40px;height:40px;border:1px solid rgba(255,255,255,0.3);display:flex;align-items:center;justify-content:center;color:#fff;font-size:1rem;opacity:0;transform:translateY(-8px);transition:opacity 0.4s,transform 0.4s;}
    .project-card:hover .project-arrow{opacity:1;transform:translateY(0);}
    /* FEATURED PROJECT */
    #featured{padding:80px 60px;background:var(--bg-soft);}
    .featured-inner{display:grid;grid-template-columns:1fr 1fr;gap:0;overflow:hidden;}
    .featured-img{height:580px;object-fit:cover;width:100%;}
    .featured-content{background:var(--primary);padding:72px 60px;display:flex;flex-direction:column;justify-content:center;}
    .featured-tag{font-size:0.62rem;letter-spacing:0.3em;text-transform:uppercase;color:rgba(255,255,255,0.6);margin-bottom:20px;}
    .featured-title{font-family:var(--font-display);font-size:2.8rem;font-weight:300;color:#fff;line-height:1.1;margin-bottom:24px;}
    .featured-title em{font-style:italic;}
    .featured-desc{font-size:0.88rem;line-height:1.9;color:rgba(255,255,255,0.6);margin-bottom:40px;}
    .featured-stats{display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-bottom:40px;}
    .fstat-label{font-size:0.62rem;letter-spacing:0.2em;text-transform:uppercase;color:rgba(255,255,255,0.45);margin-bottom:6px;}
    .fstat-value{font-family:var(--font-display);font-size:1.3rem;font-weight:300;color:#fff;}
    .featured-link{font-size:0.7rem;letter-spacing:0.2em;text-transform:uppercase;color:rgba(255,255,255,0.8);border:1px solid rgba(255,255,255,0.4);padding:14px 28px;text-decoration:none;display:inline-block;transition:all 0.3s;}
    .featured-link:hover{background:rgba(255,255,255,0.15);color:#fff;}
    /* CTA */
    #port-cta{padding:100px 60px;background:var(--bg);text-align:center;}
    .p-cta-title{font-family:var(--font-display);font-size:clamp(2.2rem,4vw,3.8rem);font-weight:300;color:var(--text);margin-bottom:20px;line-height:1.1;}
    .p-cta-title em{font-style:italic;color:var(--primary);}
    @media(max-width:1024px){.projects-masonry{grid-template-columns:1fr 1fr}.project-card:nth-child(3n+1):first-child{grid-column:span 1;height:360px}.project-card.wide{grid-column:span 2}.featured-inner{grid-template-columns:1fr}}
    @media(max-width:768px){#filter-bar,#portfolio-grid,#featured,#port-cta{padding:40px 24px}.portfolio-hero-content{padding:0 24px 60px}.projects-masonry{grid-template-columns:1fr}.project-card,.project-card.wide,.project-card:nth-child(3n+1):first-child{grid-column:span 1;height:280px}.featured-content{padding:48px 32px}.featured-stats{grid-template-columns:1fr 1fr}}
</style>
@endsection

@section('content')
<section id="portfolio-hero">
    <div class="portfolio-hero-bg"></div>
    <div class="portfolio-hero-content">
        <div class="page-tag">Our Portfolio</div>
        <h1 class="page-h1">Stories told<br>through <em>space</em></h1>
    </div>
</section>

<!-- FILTER -->
<div id="filter-bar">
    <span class="filter-label">Filter by:</span>
    <button class="filter-btn active" data-filter="all">All Projects</button>
    <button class="filter-btn" data-filter="residential">Residential</button>
    <button class="filter-btn" data-filter="commercial">Commercial</button>
    <button class="filter-btn" data-filter="hospitality">Hospitality</button>
</div>

<!-- GRID -->
<section id="portfolio-grid">
    <div class="projects-masonry reveal">
        <div class="project-card tall" data-cat="residential"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800&q=80" alt="Solaris"><div class="project-overlay"><div class="project-cat">Residential</div><div class="project-name">The Solaris Penthouse</div><div class="project-loc">Mumbai, Maharashtra</div></div><div class="project-arrow">↗</div></div>
        <div class="project-card medium" data-cat="hospitality"><img src="https://images.unsplash.com/photo-1618219908412-a29a1bb7b86e?w=800&q=80" alt="Nebula"><div class="project-overlay"><div class="project-cat">Hospitality</div><div class="project-name">Nebula Restaurant</div><div class="project-loc">Bengaluru, Karnataka</div></div><div class="project-arrow">↗</div></div>
        <div class="project-card medium" data-cat="commercial"><img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80" alt="Zenith"><div class="project-overlay"><div class="project-cat">Commercial</div><div class="project-name">Zenith Offices</div><div class="project-loc">Hyderabad, Telangana</div></div><div class="project-arrow">↗</div></div>
        <div class="project-card wide" data-cat="residential"><img src="https://images.unsplash.com/photo-1631679706909-1844bbd07221?w=800&q=80" alt="Aurora"><div class="project-overlay"><div class="project-cat">Residential</div><div class="project-name">Aurora Villa</div><div class="project-loc">Goa</div></div><div class="project-arrow">↗</div></div>
        <div class="project-card tall" data-cat="hospitality"><img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800&q=80" alt="Eclipse"><div class="project-overlay"><div class="project-cat">Hospitality</div><div class="project-name">Eclipse Suite Hotel</div><div class="project-loc">Chennai, Tamil Nadu</div></div><div class="project-arrow">↗</div></div>
        <div class="project-card medium" data-cat="residential"><img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=800&q=80" alt="Orion"><div class="project-overlay"><div class="project-cat">Residential</div><div class="project-name">Orion Loft</div><div class="project-loc">Delhi, NCR</div></div><div class="project-arrow">↗</div></div>
        <div class="project-card medium" data-cat="commercial"><img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=800&q=80" alt="Prism"><div class="project-overlay"><div class="project-cat">Commercial</div><div class="project-name">Prism Coworking</div><div class="project-loc">Pune, Maharashtra</div></div><div class="project-arrow">↗</div></div>
        <div class="project-card medium" data-cat="residential"><img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=800&q=80" alt="Nova"><div class="project-overlay"><div class="project-cat">Residential</div><div class="project-name">Nova Residence</div><div class="project-loc">Bengaluru, Karnataka</div></div><div class="project-arrow">↗</div></div>
        <div class="project-card medium" data-cat="hospitality"><img src="https://images.unsplash.com/photo-1560448204-603b3fc33ddc?w=800&q=80" alt="Luna"><div class="project-overlay"><div class="project-cat">Hospitality</div><div class="project-name">Luna Spa Resort</div><div class="project-loc">Jaipur, Rajasthan</div></div><div class="project-arrow">↗</div></div>
    </div>
</section>

<!-- FEATURED PROJECT -->
<section id="featured">
    <div class="featured-inner reveal">
        <img class="featured-img" src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1000&q=80" alt="Featured">
        <div class="featured-content">
            <div class="featured-tag">Featured Project</div>
            <h2 class="featured-title">The Solaris<br><em>Penthouse</em></h2>
            <p class="featured-desc">A 4,200 sq ft sky residence in Mumbai that redefines luxury apartment living — where every room tells a story of calm sophistication and curated beauty.</p>
            <div class="featured-stats">
                <div><div class="fstat-label">Area</div><div class="fstat-value">4,200 sq ft</div></div>
                <div><div class="fstat-label">Location</div><div class="fstat-value">Mumbai</div></div>
                <div><div class="fstat-label">Category</div><div class="fstat-value">Residential</div></div>
                <div><div class="fstat-label">Duration</div><div class="fstat-value">6 months</div></div>
            </div>
            <a href="{{ url('/contact') }}" class="featured-link">Start a Similar Project</a>
        </div>
    </div>
</section>

<!-- CTA -->
<section id="port-cta">
    <div class="reveal">
        <div class="section-tag center">Your Project</div>
        <h2 class="p-cta-title">Ready to create<br>your <em>masterpiece</em>?</h2>
        <p class="section-desc" style="max-width:460px;margin:0 auto 44px;text-align:center">Every project in our portfolio began with a single conversation. Let's start yours.</p>
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
            <a href="{{ url('/contact') }}" class="btn-primary">Book Consultation</a>
            <a href="{{ url('/services') }}" class="btn-outline">View Our Services</a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.querySelectorAll('.filter-btn').forEach(btn=>{
        btn.addEventListener('click',()=>{
            document.querySelectorAll('.filter-btn').forEach(b=>b.classList.remove('active'));
            btn.classList.add('active');
            const filter=btn.dataset.filter;
            document.querySelectorAll('.project-card').forEach(card=>{
                if(filter==='all'||card.dataset.cat===filter){card.style.display='block';}
                else{card.style.display='none';}
            });
        });
    });
</script>
@endsection
