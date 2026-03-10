@extends('layouts.app')
@section('title', 'About Us — Cosmic Interiors')
@section('styles')
<style>
#about-hero{padding:180px 60px 100px;background:var(--primary);position:relative;overflow:hidden}
#about-hero::before{content:'';position:absolute;top:-40%;right:-5%;width:700px;height:700px;border-radius:50%;background:rgba(255,255,255,.03)}
.ah-content{position:relative;z-index:1;max-width:700px}

#story{padding:120px 60px;background:var(--bg);display:grid;grid-template-columns:1fr 1fr;gap:100px;align-items:center}
.story-img img{width:100%;height:600px;object-fit:cover}
.story-img{position:relative}
.story-img::after{content:'';position:absolute;top:30px;left:30px;right:-30px;bottom:-30px;border:2px solid var(--border);z-index:-1}

#values{padding:120px 60px;background:var(--bg-soft)}
.values-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:32px;margin-top:60px}
.val-card{padding:48px 40px;background:#fff;border:1px solid var(--border);transition:transform .3s,box-shadow .3s,border-color .3s}
.val-card:hover{transform:translateY(-8px);box-shadow:0 20px 60px rgba(26,10,122,.1);border-color:var(--primary)}
.val-num{font-family:var(--font-display);font-size:3rem;font-weight:300;color:var(--primary);opacity:.2;line-height:1;margin-bottom:20px}
.val-t{font-size:.85rem;letter-spacing:.15em;text-transform:uppercase;color:var(--text);font-weight:500;margin-bottom:16px}
.val-d{font-size:.88rem;line-height:1.9;color:var(--text-muted)}

#team{padding:120px 60px;background:var(--bg)}
.team-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:60px}
.team-card{text-align:center}
.team-img{height:320px;overflow:hidden;margin-bottom:24px;position:relative;background:var(--bg-card)}
.team-img img{width:100%;height:100%;object-fit:cover;transition:transform .6s}
.team-card:hover .team-img img{transform:scale(1.06)}
.team-overlay{position:absolute;inset:0;background:rgba(26,10,122,.6);display:flex;align-items:center;justify-content:center;opacity:0;transition:opacity .3s}
.team-card:hover .team-overlay{opacity:1}
.team-social{display:flex;gap:12px}
.team-social a{width:40px;height:40px;border:1px solid rgba(255,255,255,.5);display:flex;align-items:center;justify-content:center;color:#fff;text-decoration:none;font-size:.7rem;transition:background .3s}
.team-social a:hover{background:rgba(255,255,255,.2)}
.team-name{font-family:var(--font-display);font-size:1.3rem;font-weight:300;color:var(--text);margin-bottom:6px}
.team-role{font-size:.7rem;letter-spacing:.2em;text-transform:uppercase;color:var(--primary)}

#awards{padding:120px 60px;background:var(--primary)}
.awards-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;margin-top:60px}
.award-item{padding:48px 32px;background:rgba(255,255,255,.05);text-align:center;transition:background .3s}
.award-item:hover{background:rgba(255,255,255,.1)}
.award-year{font-size:.68rem;letter-spacing:.2em;text-transform:uppercase;color:rgba(255,255,255,.4);margin-bottom:16px}
.award-name{font-family:var(--font-display);font-size:1.4rem;font-weight:300;color:#fff;margin-bottom:10px}
.award-org{font-size:.78rem;color:rgba(255,255,255,.5)}

#cta-about{padding:120px 60px;background:var(--bg-soft);text-align:center}
.cta-a-title{font-family:var(--font-display);font-size:clamp(2rem,4vw,3.5rem);font-weight:300;color:var(--text);margin-bottom:20px;line-height:1.1}
.cta-a-title em{font-style:italic;color:var(--primary)}
.cta-a-desc{font-size:.9rem;color:var(--text-muted);margin-bottom:48px;max-width:480px;margin-left:auto;margin-right:auto;line-height:1.8}
.cta-a-btns{display:flex;gap:20px;justify-content:center}

@media(max-width:1024px){#story{grid-template-columns:1fr;gap:60px} .team-grid{grid-template-columns:repeat(2,1fr)} .awards-grid{grid-template-columns:repeat(2,1fr)} .values-grid{grid-template-columns:1fr 1fr}}
@media(max-width:768px){#about-hero,#story,#values,#team,#awards,#cta-about{padding:80px 24px} .values-grid,.team-grid{grid-template-columns:1fr} .cta-a-btns{flex-direction:column;align-items:center}}
</style>
@endsection

@section('content')
<section id="about-hero">
    <div class="ah-content">
        <div class="page-hero-tag">Our Story</div>
        <h1 class="page-hero-title">Designing <em>spaces</em><br>that tell your story</h1>
        <p class="page-hero-desc">Founded in 2012, Cosmic Interiors was born from a simple belief: that great design transforms not just spaces, but lives. We are a collective of passionate designers, craftsmen, and storytellers.</p>
    </div>
</section>

<section id="story">
    <div class="story-img reveal">
        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=900&q=80" alt="Our Story">
    </div>
    <div class="reveal">
        <div class="section-tag">Who We Are</div>
        <h2 class="section-title">More than design —<br>a <em>philosophy</em></h2>
        <p class="section-desc">We started Cosmic Interiors with one vision: to create spaces that feel as extraordinary as the people who live in them. Over 12 years, we have grown into a team of 50+ designers, architects, and craftspeople united by a shared passion for transformative design.</p>
        <p class="section-desc" style="margin-top:20px">Every project we take on begins not with a pencil, but with a conversation. We listen deeply, observe keenly, and only then begin to design — ensuring that every space we create is a true reflection of its inhabitants.</p>
        <p class="section-desc" style="margin-top:20px">From intimate apartments in Hyderabad to sprawling villas in Mumbai, from boutique hotels in Bengaluru to corporate offices across India — our work spans geographies, but our commitment remains singular: design that lives beautiful.</p>
        <div style="display:flex;gap:20px;margin-top:48px">
            <a href="{{ route('portfolio') }}" class="btn-primary">See Our Work</a>
            <a href="{{ route('contact') }}" class="btn-outline">Get In Touch</a>
        </div>
    </div>
</section>

<section id="values">
    <div class="reveal" style="text-align:center">
        <div class="section-tag center">What Drives Us</div>
        <h2 class="section-title">Our core <em>values</em></h2>
    </div>
    <div class="values-grid reveal">
        <div class="val-card"><div class="val-num">01</div><div class="val-t">Human-First Design</div><div class="val-d">Every design decision is made with the human experience at its centre. We design for how spaces feel, not just how they look.</div></div>
        <div class="val-card"><div class="val-num">02</div><div class="val-t">Uncompromising Quality</div><div class="val-d">We believe in doing things right the first time. From materials to craftsmanship, we maintain the highest standards throughout.</div></div>
        <div class="val-card"><div class="val-num">03</div><div class="val-t">Radical Listening</div><div class="val-d">We start every project by listening — deeply and without assumptions — to understand the unique story we are being asked to tell.</div></div>
        <div class="val-card"><div class="val-num">04</div><div class="val-t">Sustainable Beauty</div><div class="val-d">Beautiful design and responsible sourcing are not opposites. We are committed to sustainable practices in every project we undertake.</div></div>
        <div class="val-card"><div class="val-num">05</div><div class="val-t">Timeless Aesthetics</div><div class="val-d">We resist trends and design for longevity — creating spaces that will feel as relevant and beautiful in 20 years as they do today.</div></div>
        <div class="val-card"><div class="val-num">06</div><div class="val-t">Transparent Partnership</div><div class="val-d">We believe in honest, open relationships with our clients. No surprises — just clear communication and delivered promises.</div></div>
    </div>
</section>

<section id="team">
    <div class="reveal" style="text-align:center">
        <div class="section-tag center">The People</div>
        <h2 class="section-title">Meet our <em>team</em></h2>
    </div>
    <div class="team-grid reveal">
        <div class="team-card">
            <div class="team-img"><img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80" alt="Ananya Sharma"><div class="team-overlay"><div class="team-social"><a href="#">In</a><a href="#">Ig</a></div></div></div>
            <div class="team-name">Ananya Sharma</div><div class="team-role">Founder & Creative Director</div>
        </div>
        <div class="team-card">
            <div class="team-img"><img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&q=80" alt="Rohan Mehta"><div class="team-overlay"><div class="team-social"><a href="#">In</a><a href="#">Ig</a></div></div></div>
            <div class="team-name">Rohan Mehta</div><div class="team-role">Principal Architect</div>
        </div>
        <div class="team-card">
            <div class="team-img"><img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80" alt="Priya Nair"><div class="team-overlay"><div class="team-social"><a href="#">In</a><a href="#">Ig</a></div></div></div>
            <div class="team-name">Priya Nair</div><div class="team-role">Head of Interiors</div>
        </div>
        <div class="team-card">
            <div class="team-img"><img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&q=80" alt="Vikram Reddy"><div class="team-overlay"><div class="team-social"><a href="#">In</a><a href="#">Ig</a></div></div></div>
            <div class="team-name">Vikram Reddy</div><div class="team-role">Head of Commercial Design</div>
        </div>
    </div>
</section>

<section id="awards">
    <div style="text-align:center" class="reveal">
        <div class="section-tag light-tag center">Recognition</div>
        <h2 class="section-title white-title">Awards & <em>accolades</em></h2>
    </div>
    <div class="awards-grid reveal">
        <div class="award-item"><div class="award-year">2024</div><div class="award-name">Best Luxury Interior</div><div class="award-org">India Design Forum</div></div>
        <div class="award-item"><div class="award-year">2023</div><div class="award-name">Designer of the Year</div><div class="award-org">Elle Décor India</div></div>
        <div class="award-item"><div class="award-year">2022</div><div class="award-name">Commercial Space Award</div><div class="award-org">Architectural Digest</div></div>
        <div class="award-item"><div class="award-year">2021</div><div class="award-name">Hospitality Excellence</div><div class="award-org">Hospitality Design Awards</div></div>
    </div>
</section>

<section id="cta-about">
    <div class="reveal">
        <div class="section-tag center">Work With Us</div>
        <h2 class="cta-a-title">Let's create something<br><em>extraordinary</em> together</h2>
        <p class="cta-a-desc">Whether you have a clear vision or just a feeling, we'd love to hear your story. Book a free consultation today.</p>
        <div class="cta-a-btns">
            <a href="{{ route('contact') }}" class="btn-primary">Book Consultation</a>
            <a href="{{ route('portfolio') }}" class="btn-outline">View Our Work</a>
        </div>
    </div>
</section>
@endsection
