@extends('layouts.app')
@section('title', 'Contact Us — Cosmic Interiors')
@section('navclass', 'solid')

@section('styles')
<style>
    #contact-hero{height:55vh;min-height:380px;position:relative;display:flex;align-items:flex-end;overflow:hidden;}
    .contact-hero-bg{position:absolute;inset:0;background:linear-gradient(to bottom,rgba(26,10,122,0.5) 0%,rgba(26,10,122,0.85) 100%),url('https://images.unsplash.com/photo-1497366754035-f200586c4bd4?w=1800&q=80') center/cover no-repeat;}
    .contact-hero-content{position:relative;z-index:2;padding:0 60px 80px;}
    .page-tag{font-size:0.65rem;letter-spacing:0.35em;text-transform:uppercase;color:rgba(255,255,255,0.7);margin-bottom:16px;display:flex;align-items:center;gap:12px;opacity:0;animation:fadeUp 1s ease 0.3s forwards;}
    .page-tag::before{content:'';width:24px;height:1px;background:rgba(255,255,255,0.5);}
    .page-h1{font-family:var(--font-display);font-size:clamp(3rem,6vw,5.5rem);font-weight:300;color:#fff;line-height:1.05;opacity:0;animation:fadeUp 1s ease 0.5s forwards;}
    .page-h1 em{font-style:italic;}
    /* CONTACT MAIN */
    #contact-main{padding:100px 60px;background:var(--bg);display:grid;grid-template-columns:1fr 1.4fr;gap:80px;}
    /* INFO SIDE */
    .contact-info{}
    .contact-intro{font-size:1rem;line-height:1.9;color:var(--text-muted);margin-bottom:52px;}
    .info-block{margin-bottom:40px;}
    .info-label{font-size:0.65rem;letter-spacing:0.25em;text-transform:uppercase;color:var(--primary);margin-bottom:12px;font-weight:500;}
    .info-value{font-size:0.95rem;color:var(--text);line-height:1.7;}
    .info-value a{color:var(--text);text-decoration:none;transition:color 0.3s;}
    .info-value a:hover{color:var(--primary);}
    .office-cards{display:flex;flex-direction:column;gap:20px;margin-top:48px;}
    .office-card{padding:28px 24px;border:1px solid var(--border);background:var(--bg-soft);transition:border-color 0.3s;}
    .office-card:hover{border-color:var(--primary);}
    .office-city{font-size:0.75rem;letter-spacing:0.15em;text-transform:uppercase;color:var(--primary);margin-bottom:8px;font-weight:500;}
    .office-addr{font-size:0.82rem;line-height:1.7;color:var(--text-muted);}
    /* FORM SIDE */
    .contact-form-wrap{}
    .form-header{margin-bottom:40px;}
    .contact-form{display:flex;flex-direction:column;gap:20px;}
    .form-row{display:grid;grid-template-columns:1fr 1fr;gap:20px;}
    .form-group{display:flex;flex-direction:column;gap:8px;}
    .form-label{font-size:0.68rem;letter-spacing:0.15em;text-transform:uppercase;color:var(--text);font-weight:500;}
    .form-input,.form-select,.form-textarea{padding:14px 18px;border:1px solid var(--border);background:var(--bg-soft);font-family:var(--font-body);font-size:0.88rem;color:var(--text);outline:none;transition:border-color 0.3s,box-shadow 0.3s;-webkit-appearance:none;}
    .form-input:focus,.form-select:focus,.form-textarea:focus{border-color:var(--primary);box-shadow:0 0 0 3px rgba(26,10,122,0.06);}
    .form-input::placeholder,.form-textarea::placeholder{color:rgba(0,0,0,0.3);}
    .form-textarea{resize:vertical;min-height:140px;}
    .form-submit{font-size:0.72rem;letter-spacing:0.2em;text-transform:uppercase;color:#fff;background:var(--primary);padding:18px 48px;border:none;cursor:pointer;font-family:var(--font-body);font-weight:500;transition:all 0.3s;align-self:flex-start;}
    .form-submit:hover{background:var(--primary-light);transform:translateY(-2px);}
    .form-note{font-size:0.75rem;color:var(--text-muted);margin-top:4px;}
    /* MAP AREA */
    #map-section{padding:0 60px 100px;background:var(--bg);}
    .map-inner{background:var(--bg-soft);border:1px solid var(--border);overflow:hidden;position:relative;}
    .map-placeholder{height:400px;background:linear-gradient(135deg,var(--bg-card) 0%,rgba(26,10,122,0.05) 100%);display:flex;align-items:center;justify-content:center;flex-direction:column;gap:16px;}
    .map-icon{font-size:3rem;opacity:0.3;}
    .map-text{font-size:0.8rem;letter-spacing:0.15em;text-transform:uppercase;color:var(--nav-text);}
    /* FAQ */
    #faq{padding:100px 60px;background:var(--bg-soft);}
    .faq-grid{display:grid;grid-template-columns:1fr 1fr;gap:0;margin-top:60px;border-top:1px solid var(--border);}
    .faq-item{padding:32px 28px 32px 0;border-bottom:1px solid var(--border);cursor:pointer;}
    .faq-item:nth-child(even){padding:32px 0 32px 28px;border-left:1px solid var(--border);}
    .faq-q{font-size:0.92rem;font-weight:500;color:var(--text);margin-bottom:0;display:flex;justify-content:space-between;align-items:center;gap:16px;}
    .faq-q::after{content:'+';font-size:1.2rem;color:var(--primary);flex-shrink:0;transition:transform 0.3s;}
    .faq-item.open .faq-q::after{transform:rotate(45deg);}
    .faq-a{font-size:0.82rem;line-height:1.8;color:var(--text-muted);margin-top:16px;display:none;}
    .faq-item.open .faq-a{display:block;}
    @media(max-width:1024px){#contact-main{grid-template-columns:1fr;gap:60px}.faq-grid{grid-template-columns:1fr}.faq-item:nth-child(even){padding:32px 0 32px 0;border-left:none}}
    @media(max-width:768px){#contact-main,#map-section,#faq{padding:70px 24px}.contact-hero-content{padding:0 24px 60px}.form-row{grid-template-columns:1fr}.form-submit{width:100%;text-align:center}}
</style>
@endsection

@section('content')
<section id="contact-hero">
    <div class="contact-hero-bg"></div>
    <div class="contact-hero-content">
        <div class="page-tag">Reach Out</div>
        <h1 class="page-h1">Let's begin your<br><em>story together</em></h1>
    </div>
</section>

<!-- CONTACT MAIN -->
<section id="contact-main">
    <div class="contact-info reveal">
        <div class="section-tag">Get In Touch</div>
        <h2 class="section-title">We'd love to<br><em>hear from you</em></h2>
        <p class="contact-intro">Whether you have a project in mind, a question about our services, or just want to see if we're the right fit — reach out. Every great space starts with a conversation.</p>
        <div class="info-block"><div class="info-label">Email</div><div class="info-value"><a href="mailto:hello@cosmicinteriors.in">hello@cosmicinteriors.in</a></div></div>
        <div class="info-block"><div class="info-label">Phone</div><div class="info-value"><a href="tel:+919999999999">+91 99999 99999</a></div></div>
        <div class="info-block"><div class="info-label">Working Hours</div><div class="info-value">Monday – Saturday<br>9:00 AM – 7:00 PM IST</div></div>
        <div class="office-cards">
            <div class="office-card"><div class="office-city">Hyderabad (HQ)</div><div class="office-addr">302, Design Hub, Banjara Hills<br>Hyderabad, Telangana 500034</div></div>
            <div class="office-card"><div class="office-city">Mumbai</div><div class="office-addr">14/A, Studio Row, Worli<br>Mumbai, Maharashtra 400018</div></div>
            <div class="office-card"><div class="office-city">Bengaluru</div><div class="office-addr">8, Lavelle Road, Ashok Nagar<br>Bengaluru, Karnataka 560025</div></div>
        </div>
    </div>

    <div class="contact-form-wrap reveal">
        <div class="form-header">
            <div class="section-tag">Book a Consultation</div>
            <h2 class="section-title">Tell us about<br>your <em>project</em></h2>
        </div>
        <form class="contact-form" action="#" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group"><label class="form-label">First Name</label><input class="form-input" type="text" name="first_name" placeholder="Priya" required></div>
                <div class="form-group"><label class="form-label">Last Name</label><input class="form-input" type="text" name="last_name" placeholder="Sharma" required></div>
            </div>
            <div class="form-row">
                <div class="form-group"><label class="form-label">Email</label><input class="form-input" type="email" name="email" placeholder="priya@example.com" required></div>
                <div class="form-group"><label class="form-label">Phone</label><input class="form-input" type="tel" name="phone" placeholder="+91 98765 43210"></div>
            </div>
            <div class="form-group">
                <label class="form-label">Project Type</label>
                <select class="form-select" name="project_type">
                    <option value="">Select a service</option>
                    <option>Residential — Full Home</option>
                    <option>Residential — Single Room</option>
                    <option>Commercial — Office</option>
                    <option>Commercial — Retail</option>
                    <option>Hospitality — Hotel/Resort</option>
                    <option>Hospitality — Restaurant/Café</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">City</label>
                    <select class="form-select" name="city">
                        <option value="">Select city</option>
                        <option>Hyderabad</option><option>Mumbai</option><option>Bengaluru</option>
                        <option>Delhi NCR</option><option>Chennai</option><option>Pune</option><option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Budget Range</label>
                    <select class="form-select" name="budget">
                        <option value="">Select range</option>
                        <option>₹5L – ₹15L</option><option>₹15L – ₹30L</option>
                        <option>₹30L – ₹60L</option><option>₹60L+</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Tell Us About Your Project</label>
                <textarea class="form-textarea" name="message" placeholder="Share your vision, requirements, timeline, or any questions you have..."></textarea>
            </div>
            <div>
                <button type="submit" class="form-submit">Send Message</button>
                <p class="form-note" style="margin-top:12px">We typically respond within 24 hours.</p>
            </div>
        </form>
    </div>
</section>

<!-- MAP -->
<section id="map-section">
    <div class="map-inner reveal">
        <div class="map-placeholder">
            <div class="map-icon">📍</div>
            <div class="map-text">Hyderabad, Telangana — Our Home</div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq">
    <div class="reveal"><div class="section-tag">Common Questions</div><h2 class="section-title">Everything you<br>want to <em>know</em></h2></div>
    <div class="faq-grid reveal">
        <div class="faq-item"><div class="faq-q">How do we start a project with you?</div><p class="faq-a">Simply fill out the contact form or call us. We'll schedule a free 30-minute discovery call to understand your project and check if we're the right fit.</p></div>
        <div class="faq-item"><div class="faq-q">What is your minimum project size?</div><p class="faq-a">We work on projects starting from single-room redesigns. However, our Signature and Cosmic Full packages are designed for full-home or full-property transformations.</p></div>
        <div class="faq-item"><div class="faq-q">How long does a typical project take?</div><p class="faq-a">A full-home project typically takes 90 days from design sign-off to handover. Larger commercial or hospitality projects may take 4–9 months depending on scope.</p></div>
        <div class="faq-item"><div class="faq-q">Do you work outside Hyderabad?</div><p class="faq-a">Yes! We have studios in Hyderabad, Mumbai, and Bengaluru, and we take on projects across India. We've also completed projects internationally.</p></div>
        <div class="faq-item"><div class="faq-q">Can I see physical samples before deciding?</div><p class="faq-a">Absolutely. Our design studios are open for appointments where you can see and feel material samples, finishes, and furniture options in person.</p></div>
        <div class="faq-item"><div class="faq-q">What is included in the 10-year warranty?</div><p class="faq-a">Our warranty covers all modular furniture, built-in cabinetry, and structural interior elements. It covers manufacturing defects and wear under normal use conditions.</p></div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.querySelectorAll('.faq-item').forEach(item=>{
        item.addEventListener('click',()=>{
            const isOpen=item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i=>i.classList.remove('open'));
            if(!isOpen)item.classList.add('open');
        });
    });
</script>
@endsection
