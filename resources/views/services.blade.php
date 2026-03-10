@extends('layouts.app')
@section('title', 'Services — Cosmic Interiors')
@section('styles')
<style>
#svc-hero{padding:180px 60px 100px;background:var(--primary);position:relative;overflow:hidden}
#svc-hero::before{content:'';position:absolute;top:-40%;right:-5%;width:700px;height:700px;border-radius:50%;background:rgba(255,255,255,.03)}

#main-services{padding:120px 60px;background:var(--bg)}
.ms-grid{display:grid;grid-template-columns:1fr 1fr;gap:2px;margin-top:80px}
.ms-item{display:grid;grid-template-columns:1fr 1fr;gap:0}
.ms-img{height:500px;overflow:hidden;position:relative}
.ms-img img{width:100%;height:100%;object-fit:cover;transition:transform .8s;filter:brightness(.7)}
.ms-item:hover .ms-img img{transform:scale(1.06)}
.ms-content{background:var(--bg-soft);padding:60px 48px;display:flex;flex-direction:column;justify-content:center}
.ms-num{font-family:var(--font-display);font-size:4rem;font-weight:300;color:var(--primary);opacity:.15;line-height:1;margin-bottom:20px}
.ms-t{font-family:var(--font-display);font-size:2rem;font-weight:300;color:var(--text);margin-bottom:16px}
.ms-d{font-size:.88rem;line-height:1.9;color:var(--text-muted);margin-bottom:32px}
.ms-list{list-style:none;margin-bottom:36px}
.ms-list li{font-size:.82rem;line-height:1.8;color:var(--text-muted);padding:8px 0;border-bottom:1px solid var(--border);display:flex;align-items:center;gap:12px}
.ms-list li::before{content:'✦';color:var(--primary);font-size:.6rem}
.ms-item:nth-child(even) .ms-img{order:1}
.ms-item:nth-child(even) .ms-content{order:0}

#process-svc{padding:120px 60px;background:var(--primary)}
.ps-steps{display:grid;grid-template-columns:repeat(4,1fr);gap:32px;margin-top:80px}
.ps-step{padding:40px 32px;background:rgba(255,255,255,.06);transition:background .3s}
.ps-step:hover{background:rgba(255,255,255,.1)}
.ps-n{font-family:var(--font-display);font-size:3rem;font-weight:300;color:rgba(255,255,255,.2);line-height:1;margin-bottom:20px}
.ps-t{font-size:.8rem;letter-spacing:.15em;text-transform:uppercase;color:rgba(255,255,255,.85);margin-bottom:16px;font-weight:500}
.ps-d{font-size:.85rem;line-height:1.8;color:rgba(255,255,255,.5)}

#packages{padding:120px 60px;background:var(--bg-soft)}
.pkg-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:60px}
.pkg-card{background:#fff;border:1px solid var(--border);padding:48px 40px;position:relative;transition:border-color .3s,transform .3s,box-shadow .3s}
.pkg-card.featured{border-color:var(--primary);border-width:2px}
.pkg-card:hover{transform:translateY(-8px);box-shadow:0 20px 60px rgba(26,10,122,.1)}
.pkg-badge{position:absolute;top:-14px;left:50%;transform:translateX(-50%);background:var(--primary);color:#fff;font-size:.65rem;letter-spacing:.2em;text-transform:uppercase;padding:6px 20px}
.pkg-name{font-family:var(--font-display);font-size:1.8rem;font-weight:300;color:var(--text);margin-bottom:8px}
.pkg-tagline{font-size:.8rem;color:var(--text-muted);margin-bottom:32px}
.pkg-price{font-family:var(--font-display);font-size:2.5rem;font-weight:300;color:var(--primary);margin-bottom:8px}
.pkg-unit{font-size:.75rem;color:var(--text-muted);margin-bottom:32px;letter-spacing:.1em}
.pkg-features{list-style:none;margin-bottom:40px}
.pkg-features li{font-size:.83rem;line-height:1.8;color:var(--text-muted);padding:10px 0;border-bottom:1px solid var(--border);display:flex;align-items:center;gap:12px}
.pkg-features li::before{content:'✓';color:var(--primary);font-weight:500}

#faq{padding:120px 60px;background:var(--bg)}
.faq-grid{display:grid;grid-template-columns:1fr 1fr;gap:60px;margin-top:60px;align-items:start}
.faq-list{display:flex;flex-direction:column;gap:16px}
.faq-item{border:1px solid var(--border);overflow:hidden}
.faq-q{padding:24px 28px;display:flex;justify-content:space-between;align-items:center;cursor:pointer;transition:background .3s}
.faq-q:hover{background:var(--bg-soft)}
.faq-q-text{font-size:.88rem;font-weight:400;color:var(--text)}
.faq-icon{font-size:1.2rem;color:var(--primary);transition:transform .3s;flex-shrink:0}
.faq-item.open .faq-icon{transform:rotate(45deg)}
.faq-a{padding:0 28px;max-height:0;overflow:hidden;transition:max-height .4s ease,padding .4s}
.faq-item.open .faq-a{max-height:200px;padding:0 28px 24px}
.faq-a p{font-size:.85rem;line-height:1.9;color:var(--text-muted)}
.faq-img img{width:100%;height:100%;object-fit:cover}
.faq-img{height:500px;overflow:hidden}

@media(max-width:1024px){.ms-grid{grid-template-columns:1fr} .ms-item{grid-template-columns:1fr} .ms-img{height:360px} .ms-item:nth-child(even) .ms-img,.ms-item:nth-child(even) .ms-content{order:unset} .ps-steps{grid-template-columns:repeat(2,1fr)} .pkg-grid{grid-template-columns:1fr 1fr} .faq-grid{grid-template-columns:1fr}}
@media(max-width:768px){#svc-hero,#main-services,#process-svc,#packages,#faq{padding:80px 24px} .pkg-grid{grid-template-columns:1fr} .ps-steps{grid-template-columns:1fr}}
</style>
@endsection

@section('content')
<section id="svc-hero">
    <div style="position:relative;z-index:1;max-width:700px">
        <div class="page-hero-tag">What We Offer</div>
        <h1 class="page-hero-title">Services crafted<br>for <em>every space</em></h1>
        <p class="page-hero-desc">From intimate residential interiors to large-scale commercial and hospitality projects, our range of services is designed to transform every space into something extraordinary.</p>
    </div>
</section>

<section id="main-services">
    <div class="reveal">
        <div class="section-tag">Our Expertise</div>
        <h2 class="section-title">Three <em>disciplines</em>,<br>one philosophy</h2>
    </div>
    <div class="ms-grid reveal">
        <div class="ms-item">
            <div class="ms-img"><img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=800&q=80" alt="Residential"></div>
            <div class="ms-content">
                <div class="ms-num">01</div>
                <h3 class="ms-t">Residential Design</h3>
                <p class="ms-d">Your home is a living portrait of who you are. We create bespoke residential interiors that balance beauty with deep functionality.</p>
                <ul class="ms-list">
                    <li>Full-home interior design</li>
                    <li>Modular kitchen & wardrobe</li>
                    <li>Living & bedroom design</li>
                    <li>Lighting & decor curation</li>
                    <li>3D visualization & walkthroughs</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn-primary">Get a Quote</a>
            </div>
        </div>
        <div class="ms-item">
            <div class="ms-content" style="background:var(--primary)">
                <div class="ms-num" style="color:rgba(255,255,255,.15)">02</div>
                <h3 class="ms-t" style="color:#fff">Commercial Design</h3>
                <p class="ms-d" style="color:rgba(255,255,255,.6)">Workplaces that inspire. Spaces that tell your brand story and make every client feel the difference the moment they walk in.</p>
                <ul class="ms-list" style="border-color:rgba(255,255,255,.1)">
                    <li style="color:rgba(255,255,255,.6);border-color:rgba(255,255,255,.1)">Office & co-working spaces</li>
                    <li style="color:rgba(255,255,255,.6);border-color:rgba(255,255,255,.1)">Retail & showroom design</li>
                    <li style="color:rgba(255,255,255,.6);border-color:rgba(255,255,255,.1)">Corporate headquarters</li>
                    <li style="color:rgba(255,255,255,.6);border-color:rgba(255,255,255,.1)">Brand environment design</li>
                    <li style="color:rgba(255,255,255,.6);border-color:rgba(255,255,255,.1)">Space planning & optimization</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn-white">Get a Quote</a>
            </div>
            <div class="ms-img"><img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80" alt="Commercial"></div>
        </div>
        <div class="ms-item" style="grid-column:span 2">
            <div class="ms-img" style="height:400px"><img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1200&q=80" alt="Hospitality"></div>
            <div class="ms-content">
                <div class="ms-num">03</div>
                <h3 class="ms-t">Hospitality Design</h3>
                <p class="ms-d">Spaces that invite, delight, and linger in memory. We design hotels, restaurants, and resorts that become destinations in themselves.</p>
                <ul class="ms-list">
                    <li>Hotel & resort interiors</li>
                    <li>Restaurant & café design</li>
                    <li>Spa & wellness spaces</li>
                    <li>Lobby & public area design</li>
                    <li>Guest room concepts</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn-primary">Get a Quote</a>
            </div>
        </div>
    </div>
</section>

<section id="process-svc">
    <div style="text-align:center" class="reveal">
        <div class="section-tag light-tag center">How It Works</div>
        <h2 class="section-title white-title">From first call to<br><em>final reveal</em></h2>
    </div>
    <div class="ps-steps reveal">
        <div class="ps-step"><div class="ps-n">01</div><div class="ps-t">Consultation</div><p class="ps-d">A free 60-minute call where we listen, explore your vision, and assess the project scope.</p></div>
        <div class="ps-step"><div class="ps-n">02</div><div class="ps-t">Concept & Quote</div><p class="ps-d">We present a mood board, concept direction, and detailed project quote within 5 working days.</p></div>
        <div class="ps-step"><div class="ps-n">03</div><div class="ps-t">Design & Approve</div><p class="ps-d">Full design development with 3D renders. We iterate until you love every single detail.</p></div>
        <div class="ps-step"><div class="ps-n">04</div><div class="ps-t">Build & Deliver</div><p class="ps-d">Our craftsmen bring the design to life on schedule, with weekly progress updates throughout.</p></div>
    </div>
</section>

<section id="packages">
    <div style="text-align:center" class="reveal">
        <div class="section-tag center">Pricing</div>
        <h2 class="section-title">Simple, <em>transparent</em> pricing</h2>
    </div>
    <div class="pkg-grid reveal">
        <div class="pkg-card">
            <div class="pkg-name">Essential</div>
            <div class="pkg-tagline">Perfect for single-room projects</div>
            <div class="pkg-price">₹ 1.2L</div>
            <div class="pkg-unit">per room, onwards</div>
            <ul class="pkg-features">
                <li>2D floor plan & layout</li>
                <li>Material & colour palette</li>
                <li>Furniture selection</li>
                <li>1 design revision</li>
                <li>On-site supervision</li>
            </ul>
            <a href="{{ route('contact') }}" class="btn-outline" style="width:100%;text-align:center">Get Started</a>
        </div>
        <div class="pkg-card featured">
            <div class="pkg-badge">Most Popular</div>
            <div class="pkg-name">Premium</div>
            <div class="pkg-tagline">Ideal for full-home projects</div>
            <div class="pkg-price">₹ 3.5L</div>
            <div class="pkg-unit">per room, onwards</div>
            <ul class="pkg-features">
                <li>3D visualization & renders</li>
                <li>Custom furniture design</li>
                <li>Lighting design plan</li>
                <li>3 design revisions</li>
                <li>Dedicated project manager</li>
                <li>90-day delivery guarantee</li>
            </ul>
            <a href="{{ route('contact') }}" class="btn-primary" style="width:100%;text-align:center">Get Started</a>
        </div>
        <div class="pkg-card">
            <div class="pkg-name">Luxury</div>
            <div class="pkg-tagline">For bespoke, high-end projects</div>
            <div class="pkg-price">Custom</div>
            <div class="pkg-unit">tailored to your project</div>
            <ul class="pkg-features">
                <li>Everything in Premium</li>
                <li>Celebrity designer access</li>
                <li>Imported material sourcing</li>
                <li>Unlimited revisions</li>
                <li>White-glove handover</li>
                <li>10-year warranty included</li>
            </ul>
            <a href="{{ route('contact') }}" class="btn-outline" style="width:100%;text-align:center">Talk to Us</a>
        </div>
    </div>
</section>

<section id="faq">
    <div class="reveal">
        <div class="section-tag">FAQ</div>
        <h2 class="section-title">Common <em>questions</em></h2>
    </div>
    <div class="faq-grid reveal">
        <div class="faq-list">
            <div class="faq-item open">
                <div class="faq-q" onclick="toggleFaq(this)"><span class="faq-q-text">How long does a typical interior project take?</span><span class="faq-icon">+</span></div>
                <div class="faq-a"><p>Most residential projects are completed within 60–90 days from design approval. Commercial projects vary based on scale. We provide a detailed timeline at the start of every project.</p></div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)"><span class="faq-q-text">Do you work outside Hyderabad?</span><span class="faq-icon">+</span></div>
                <div class="faq-a"><p>Yes! We have active projects in Mumbai, Bengaluru, Chennai, and Delhi. We also work with clients internationally on a case-by-case basis.</p></div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)"><span class="faq-q-text">Can I be involved in the design process?</span><span class="faq-icon">+</span></div>
                <div class="faq-a"><p>Absolutely — we encourage it! We collaborate closely with our clients throughout the process, from initial concept to final selection of materials and furniture.</p></div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)"><span class="faq-q-text">What is included in the 10-year warranty?</span><span class="faq-icon">+</span></div>
                <div class="faq-a"><p>Our warranty covers all modular furniture, custom joinery, and structural work undertaken by our team. We repair or replace any defective elements at no cost to you.</p></div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)"><span class="faq-q-text">How do I get started?</span><span class="faq-icon">+</span></div>
                <div class="faq-a"><p>Simply fill out our contact form or call us. We'll schedule a free 60-minute consultation — either at our studio or your space — to discuss your project and vision.</p></div>
            </div>
        </div>
        <div class="faq-img">
            <img src="https://images.unsplash.com/photo-1618219740975-d40978bb7378?w=800&q=80" alt="Interior Design Process">
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
function toggleFaq(el){const item=el.parentElement;const isOpen=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(i=>i.classList.remove('open'));if(!isOpen)item.classList.add('open');}
</script>
@endsection
