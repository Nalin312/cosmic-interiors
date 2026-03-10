<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cosmic Interiors')</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@200;300;400;500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        *,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
        :root{
            --primary:#1a0a7a;
            --primary-light:#2d1aad;
            --primary-dark:#0f0550;
            --white:#fff;
            --bg:#fff;
            --bg-soft:#f7f7fc;
            --bg-card:#f2f2fa;
            --text:#000;
            --text-muted:#555;
            --nav-text:#888;
            --border:rgba(26,10,122,0.15);
            --font-display:'Cormorant Garamond',serif;
            --font-body:'Jost',sans-serif
        }
        html{scroll-behavior:smooth}
        body{background:var(--bg);color:var(--text);font-family:var(--font-body);font-weight:300;overflow-x:hidden;cursor:none}

        /* CURSOR */
        .cursor{width:8px;height:8px;background:var(--primary);border-radius:50%;position:fixed;top:0;left:0;pointer-events:none;z-index:9999}
        .cursor-follower{width:32px;height:32px;border:1.5px solid rgba(26,10,122,0.4);border-radius:50%;position:fixed;top:0;left:0;pointer-events:none;z-index:9998;transition:width .3s,height .3s,border-color .3s}

        /* NAV */
        nav{position:fixed;top:0;left:0;right:0;z-index:1000;padding:12px 60px;display:flex;align-items:center;justify-content:space-between;transition:all .5s}
        nav.solid{background:rgba(255,255,255,.97);backdrop-filter:blur(20px);padding:10px 60px;border-bottom:1px solid var(--border);box-shadow:0 2px 20px rgba(26,10,122,.06)}
        nav.scrolled{background:rgba(255,255,255,.97);backdrop-filter:blur(20px);padding:10px 60px;border-bottom:1px solid var(--border);box-shadow:0 2px 20px rgba(26,10,122,.06)}

        /* LOGO */
        .nav-logo{text-decoration:none;display:flex;align-items:center}
        .nav-logo img{height:100px;width:180px;object-fit:contain;display:block}

        /* NAV LINKS */
        .nav-links{display:flex;gap:40px;list-style:none}
        .nav-links a{font-size:.72rem;font-weight:400;letter-spacing:.2em;text-transform:uppercase;color:rgba(255,255,255,.75);text-decoration:none;transition:color .3s;position:relative}
        .nav-links a::after{content:'';position:absolute;bottom:-4px;left:0;right:0;height:1.5px;background:#fff;transform:scaleX(0);transition:transform .3s}
        .nav-links a:hover,.nav-links a.active{color:#fff}
        .nav-links a:hover::after,.nav-links a.active::after{transform:scaleX(1)}
        nav.scrolled .nav-links a,nav.solid .nav-links a{color:var(--nav-text)}
        nav.scrolled .nav-links a::after,nav.solid .nav-links a::after{background:var(--primary)}
        nav.scrolled .nav-links a:hover,nav.solid .nav-links a:hover,
        nav.scrolled .nav-links a.active,nav.solid .nav-links a.active{color:var(--primary)}

        /* NAV CTA */
        .nav-cta{font-size:.72rem;font-weight:500;letter-spacing:.2em;text-transform:uppercase;color:rgba(255,255,255,.85);border:1px solid rgba(255,255,255,.4);padding:12px 28px;text-decoration:none;transition:all .3s}
        .nav-cta:hover{background:rgba(255,255,255,.15)}
        nav.scrolled .nav-cta,nav.solid .nav-cta{color:#fff;background:var(--primary);border-color:var(--primary)}
        nav.scrolled .nav-cta:hover,nav.solid .nav-cta:hover{background:var(--primary-light)}

        /* HAMBURGER */
        .hamburger{display:none;flex-direction:column;gap:5px;cursor:pointer}
        .hamburger span{width:24px;height:1px;background:#fff;display:block;transition:background .4s}
        nav.scrolled .hamburger span,nav.solid .hamburger span{background:var(--text)}

        /* COMMON COMPONENTS */
        .section-tag{font-size:.65rem;letter-spacing:.35em;text-transform:uppercase;color:var(--primary);margin-bottom:20px;display:flex;align-items:center;gap:16px}
        .section-tag::before{content:'';width:30px;height:1.5px;background:var(--primary)}
        .section-tag.center{justify-content:center}
        .section-tag.center::before{display:none}
        .section-tag.light-tag{color:rgba(255,255,255,.7)}
        .section-tag.light-tag::before{background:rgba(255,255,255,.5)}
        .section-title{font-family:var(--font-display);font-size:clamp(2.2rem,4vw,3.5rem);font-weight:300;line-height:1.15;color:var(--text);margin-bottom:20px}
        .section-title em{font-style:italic;color:var(--primary)}
        .section-title.white-title{color:#fff}
        .section-title.white-title em{color:rgba(255,255,255,.7)}
        .section-desc{font-size:.9rem;line-height:1.9;color:var(--text-muted);max-width:520px}

        /* PAGE HERO (inner pages) */
        .page-hero{padding:180px 60px 100px;background:var(--primary);position:relative;overflow:hidden}
        .page-hero::before{content:'';position:absolute;top:-50%;right:-10%;width:600px;height:600px;border-radius:50%;background:rgba(255,255,255,.03);pointer-events:none}
        .page-hero-tag{font-size:.65rem;letter-spacing:.35em;text-transform:uppercase;color:rgba(255,255,255,.6);margin-bottom:20px;display:flex;align-items:center;gap:16px}
        .page-hero-tag::before{content:'';width:30px;height:1px;background:rgba(255,255,255,.4)}
        .page-hero-title{font-family:var(--font-display);font-size:clamp(3rem,6vw,5.5rem);font-weight:300;color:#fff;line-height:1.05;margin-bottom:24px}
        .page-hero-title em{font-style:italic;color:rgba(255,255,255,.7)}
        .page-hero-desc{font-size:.95rem;line-height:1.9;color:rgba(255,255,255,.6);max-width:560px}

        /* BUTTONS */
        .btn-primary{font-size:.72rem;letter-spacing:.2em;text-transform:uppercase;color:#fff;background:var(--primary);padding:16px 40px;text-decoration:none;font-weight:500;transition:all .3s;display:inline-block}
        .btn-primary:hover{background:var(--primary-light);transform:translateY(-2px)}
        .btn-outline{font-size:.72rem;letter-spacing:.2em;text-transform:uppercase;color:var(--primary);border:1.5px solid var(--primary);padding:16px 40px;text-decoration:none;font-weight:500;transition:all .3s;display:inline-block}
        .btn-outline:hover{background:var(--primary);color:#fff}
        .btn-white{font-size:.72rem;letter-spacing:.2em;text-transform:uppercase;color:var(--primary);background:#fff;padding:16px 40px;text-decoration:none;font-weight:500;transition:all .3s;display:inline-block}
        .btn-white:hover{background:#f0f0f0;transform:translateY(-2px)}

        /* REVEAL ANIMATION */
        .reveal{opacity:0;transform:translateY(40px);transition:opacity .8s ease,transform .8s ease}
        .reveal.visible{opacity:1;transform:translateY(0)}
        @keyframes fadeUp{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
        @keyframes fadeIn{from{opacity:0}to{opacity:1}}

        /* FOOTER */
        footer{background:var(--primary-dark);padding:80px 60px 40px}
        .footer-top{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:60px;margin-bottom:60px}
        .footer-logo{text-decoration:none;display:block}
        .footer-logo img{height:80px;width:auto;object-fit:contain;filter:brightness(0) invert(1)}
        .footer-brand p{font-size:.82rem;line-height:1.9;color:rgba(255,255,255,.45);margin-top:16px;max-width:280px}
        .footer-col h4{font-size:.68rem;letter-spacing:.25em;text-transform:uppercase;color:rgba(255,255,255,.35);margin-bottom:24px}
        .footer-col ul{list-style:none}
        .footer-col ul li{margin-bottom:12px}
        .footer-col ul li a{font-size:.82rem;color:rgba(255,255,255,.5);text-decoration:none;transition:color .3s}
        .footer-col ul li a:hover{color:#fff}
        .footer-bottom{display:flex;justify-content:space-between;align-items:center;padding-top:32px;border-top:1px solid rgba(255,255,255,.08)}
        .footer-bottom p{font-size:.72rem;color:rgba(255,255,255,.3)}
        .social-links{display:flex;gap:20px}
        .social-links a{font-size:.65rem;letter-spacing:.2em;text-transform:uppercase;color:rgba(255,255,255,.35);text-decoration:none;transition:color .3s}
        .social-links a:hover{color:#fff}

        /* RESPONSIVE */
        @media(max-width:1024px){
            nav,nav.scrolled,nav.solid{padding:12px 32px}
            .nav-links{gap:24px}
            .footer-top{grid-template-columns:1fr 1fr}
        }
        @media(max-width:768px){
            nav,nav.scrolled,nav.solid{padding:10px 24px}
            .nav-links,.nav-cta{display:none}
            .hamburger{display:flex}
            .page-hero{padding:140px 24px 80px}
            footer{padding:60px 24px 32px}
            .footer-top{grid-template-columns:1fr}
            .footer-bottom{flex-direction:column;gap:16px;text-align:center}
        }
    </style>
    @yield('styles')
</head>
<body>

<div class="cursor" id="cursor"></div>
<div class="cursor-follower" id="cursorFollower"></div>

<nav id="navbar" class="@yield('nav-class', '')">
    <a href="{{ route('home') }}" class="nav-logo">
        <img src="{{ asset('images/Cosmic Logos (8) (1) (1).png') }}" alt="Cosmic Interiors">
    </a>
    <ul class="nav-links @yield('navlinks-class', '')">
        <li><a href="{{ route('home') }}"      @class(['active' => request()->routeIs('home')])>Home</a></li>
        <li><a href="{{ route('about') }}"     @class(['active' => request()->routeIs('about')])>About</a></li>
        <li><a href="{{ route('services') }}"  @class(['active' => request()->routeIs('services')])>Services</a></li>
        <li><a href="{{ route('portfolio') }}" @class(['active' => request()->routeIs('portfolio')])>Portfolio</a></li>
        <li><a href="{{ route('contact') }}"   @class(['active' => request()->routeIs('contact')])>Contact</a></li>
    </ul>
    <a href="{{ route('contact') }}" class="nav-cta @yield('cta-class', '')">Book Consultation</a>
    <div class="hamburger" onclick="toggleMenu()"><span></span><span></span><span></span></div>
</nav>

@yield('content')

<footer>
    <div class="footer-top">
        <div class="footer-brand">
            <a href="{{ route('home') }}" class="footer-logo">
                <img src="{{ asset('images/Cosmic Logos (8) (1) (1).png') }}" alt="Cosmic Interiors">
            </a>
            <p>Crafting extraordinary spaces that transcend the ordinary. Where cosmic elegance meets deeply personal design.</p>
        </div>
        <div class="footer-col">
            <h4>Services</h4>
            <ul>
                <li><a href="{{ route('services') }}">Residential Design</a></li>
                <li><a href="{{ route('services') }}">Commercial Spaces</a></li>
                <li><a href="{{ route('services') }}">Hospitality</a></li>
                <li><a href="{{ route('services') }}">Turnkey Projects</a></li>
                <li><a href="{{ route('services') }}">Space Planning</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Company</h4>
            <ul>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Careers</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Contact</h4>
            <ul>
                <li><a href="#">Hyderabad</a></li>
                <li><a href="#">Mumbai</a></li>
                <li><a href="#">Bengaluru</a></li>
                <li><a href="mailto:hello@cosmicinteriors.in">hello@cosmicinteriors.in</a></li>
                <li><a href="tel:+919999999999">+91 99999 99999</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2026 Cosmic Interiors. All rights reserved.</p>
        <div class="social-links">
            <a href="#">Instagram</a>
            <a href="#">Pinterest</a>
            <a href="#">Houzz</a>
            <a href="#">LinkedIn</a>
        </div>
    </div>
</footer>

<script>
// Custom cursor
const cursor = document.getElementById('cursor');
const follower = document.getElementById('cursorFollower');
let mX = 0, mY = 0, fX = 0, fY = 0;
document.addEventListener('mousemove', e => {
    mX = e.clientX; mY = e.clientY;
    cursor.style.transform = `translate(${mX - 4}px,${mY - 4}px)`;
});
(function af() {
    fX += (mX - fX) * .12;
    fY += (mY - fY) * .12;
    follower.style.transform = `translate(${fX - 16}px,${fY - 16}px)`;
    requestAnimationFrame(af);
})();
document.querySelectorAll('a,button').forEach(el => {
    el.addEventListener('mouseenter', () => {
        follower.style.width = '50px';
        follower.style.height = '50px';
        follower.style.borderColor = 'rgba(26,10,122,.8)';
    });
    el.addEventListener('mouseleave', () => {
        follower.style.width = '32px';
        follower.style.height = '32px';
        follower.style.borderColor = 'rgba(26,10,122,.4)';
    });
});

// Navbar scroll
const nb = document.getElementById('navbar');
const isHero = document.querySelector('.hero-page');
if (!isHero) nb.classList.add('solid');
window.addEventListener('scroll', () => {
    if (isHero) nb.classList.toggle('scrolled', window.scrollY > 60);
});

// Scroll reveal
const obs = new IntersectionObserver(entries => {
    entries.forEach((e, i) => {
        if (e.isIntersecting) {
            setTimeout(() => e.target.classList.add('visible'), i * 80);
            obs.unobserve(e.target);
        }
    });
}, { threshold: .1 });
document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

// Mobile menu toggle
function toggleMenu() {
    const l = document.querySelector('.nav-links');
    const isOpen = l.style.display === 'flex';
    l.style.cssText = isOpen ? '' : 'display:flex;flex-direction:column;position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(255,255,255,.98);align-items:center;justify-content:center;gap:40px;z-index:999;';
    if (!isOpen) {
        l.querySelectorAll('a').forEach(a => {
            a.style.color = '#888';
            a.style.fontSize = '1rem';
        });
    }
}
</script>
@yield('scripts')
</body>
</html>