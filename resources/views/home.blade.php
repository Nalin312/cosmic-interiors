<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cosmic Interiors — Luxury Interior Design Studio</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap');

  :root {
    --primary: #1a0a7a;
    --primary-light: #2d1ab5;
    --text: #000000;
    --text-muted: #555555;
    --bg: #faf9f7;
    --bg-soft: #f4f1ec;
    --white: #ffffff;
    --font-display: 'Cormorant Garamond', Georgia, serif;
    --font-body: Arial, Helvetica, sans-serif;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body { font-family: var(--font-body); background: var(--bg); color: var(--text); overflow-x: hidden; }

  /* NAV */
  #navbar {
    position: fixed; top: 0; left: 0; right: 0; z-index: 100;
    padding: 20px 7vw;
    display: flex; align-items: center; justify-content: space-between;
    transition: all .5s ease;
  }
  #navbar.scrolled {
    background: rgba(250,249,247,.97);
    backdrop-filter: blur(20px);
    padding: 14px 7vw;
    border-bottom: 1px solid rgba(26,10,122,.1);
    box-shadow: 0 2px 30px rgba(26,10,122,.05);
  }
  .nav-logo { text-decoration: none; display: flex; align-items: center; }
  .nav-logo-img {
    height: 52px; width: auto; object-fit: contain;
    filter: brightness(0) invert(1);
    transition: filter .4s;
  }
  #navbar.scrolled .nav-logo-img { filter: none; }
  .nav-links { display: flex; gap: 36px; list-style: none; }
  .nav-links a {
    font-family: var(--font-body); font-size: .65rem;
    letter-spacing: .2em; text-transform: uppercase;
    color: rgba(255,255,255,.7); text-decoration: none; transition: color .3s;
  }
  .nav-links a:hover { color: #fff; }
  #navbar.scrolled .nav-links a { color: #888888; }
  #navbar.scrolled .nav-links a:hover { color: var(--primary); }
  .nav-cta {
    font-family: var(--font-body); font-size: .6rem;
    letter-spacing: .22em; text-transform: uppercase;
    color: rgba(255,255,255,.85);
    border: 1px solid rgba(255,255,255,.35);
    padding: 11px 28px; text-decoration: none; transition: all .3s;
  }
  .nav-cta:hover { background: rgba(255,255,255,.12); }
  #navbar.scrolled .nav-cta { background: var(--primary); color: #fff; border-color: var(--primary); }

  /* HERO */
  #hero { height: 100vh; position: relative; overflow: hidden; display: flex; align-items: center; }
  .hero-bg { position: absolute; inset: 0; }
  .hero-bg img { width: 100%; height: 100%; object-fit: cover; transform: scale(1.07); animation: hzoom 16s ease forwards; }
  @keyframes hzoom { to { transform: scale(1); } }
  .hero-bg::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(105deg, rgba(10,5,40,.9) 0%, rgba(10,5,40,.7) 45%, rgba(10,5,40,.25) 100%);
  }
  .hero-inner { position: relative; z-index: 2; padding: 0 7vw; max-width: 780px; }
  .hero-eyebrow {
    display: flex; align-items: center; gap: 16px; margin-bottom: 36px;
    opacity: 0; animation: aUp .8s ease .3s forwards;
  }
  .hero-eyebrow-line { width: 40px; height: 1px; background: rgba(255,255,255,.4); }
  .hero-eyebrow span {
    font-family: var(--font-body); font-size: .58rem; letter-spacing: .45em;
    text-transform: uppercase; color: rgba(255,255,255,.6);
  }
  .hero-title {
    font-family: var(--font-display); font-size: clamp(3.2rem, 5.5vw, 6.4rem);
    font-weight: 300; line-height: 1.08; color: #fff; margin-bottom: 30px;
    opacity: 0; animation: aUp .9s ease .5s forwards;
  }
  .hero-title em { font-style: italic; color: rgba(255,255,255,.6); }
  .hero-desc {
    font-family: var(--font-body); font-size: .85rem; line-height: 1.95;
    color: rgba(255,255,255,.5); max-width: 400px; margin-bottom: 52px;
    opacity: 0; animation: aUp .9s ease .7s forwards;
  }
  .hero-btns { display: flex; gap: 16px; flex-wrap: wrap; opacity: 0; animation: aUp .9s ease .9s forwards; }
  .btn-fill {
    font-family: var(--font-body); font-size: .62rem; letter-spacing: .22em; text-transform: uppercase;
    background: var(--primary); color: #fff;
    padding: 16px 44px; text-decoration: none; font-weight: 700;
    transition: all .3s; display: inline-block;
  }
  .btn-fill:hover { background: var(--primary-light); transform: translateY(-2px); }
  .btn-ghost {
    font-family: var(--font-body); font-size: .62rem; letter-spacing: .22em; text-transform: uppercase;
    color: rgba(255,255,255,.75); border: 1px solid rgba(255,255,255,.3);
    padding: 16px 44px; text-decoration: none; transition: all .3s; display: inline-block;
  }
  .btn-ghost:hover { border-color: rgba(255,255,255,.75); color: #fff; }
  .hero-stats-bar {
    position: absolute; bottom: 0; left: 0; right: 0; z-index: 2;
    display: flex; opacity: 0; animation: aFade 1s ease 1.3s forwards;
  }
  .hero-stat {
    flex: 1; padding: 28px 0; text-align: center;
    background: rgba(10,5,40,.85); backdrop-filter: blur(12px);
    border-right: 1px solid rgba(255,255,255,.08);
  }
  .hero-stat:last-child { border-right: none; }
  .hero-stat-num { font-family: var(--font-display); font-size: 2.2rem; font-weight: 300; color: #fff; line-height: 1; }
  .hero-stat-label { font-family: var(--font-body); font-size: .55rem; letter-spacing: .2em; text-transform: uppercase; color: rgba(255,255,255,.35); margin-top: 7px; }

  /* MARQUEE */
  #marquee { background: var(--primary); padding: 14px 0; overflow: hidden; }
  .mq-track { display: flex; animation: mq 32s linear infinite; white-space: nowrap; }
  .mq-item {
    font-family: var(--font-body); font-size: .55rem; letter-spacing: .38em; text-transform: uppercase;
    color: rgba(255,255,255,.4); padding: 0 52px; flex-shrink: 0;
    display: flex; align-items: center; gap: 24px;
  }
  .mq-item::after { content: '✦'; font-size: .35rem; color: rgba(255,255,255,.2); }
  @keyframes mq { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  /* COMMON */
  .section-tag {
    font-family: var(--font-body); font-size: .56rem; letter-spacing: .42em; text-transform: uppercase;
    color: var(--primary); margin-bottom: 20px;
    display: flex; align-items: center; gap: 14px;
  }
  .section-tag::before { content: ''; width: 28px; height: 1px; background: var(--primary); }
  .section-tag.light { color: rgba(255,255,255,.6); }
  .section-tag.light::before { background: rgba(255,255,255,.4); }
  .section-tag.center { justify-content: center; }
  .section-tag.center::before { display: none; }
  .section-title { font-family: var(--font-display); font-size: clamp(2.2rem, 3.2vw, 3.8rem); font-weight: 300; line-height: 1.13; color: var(--text); }
  .section-title em { font-style: italic; color: var(--primary); }
  .btn-primary {
    font-family: var(--font-body); font-size: .62rem; letter-spacing: .22em; text-transform: uppercase;
    background: var(--primary); color: #fff; padding: 15px 40px;
    text-decoration: none; display: inline-block; transition: all .3s; font-weight: 500;
  }
  .btn-primary:hover { background: var(--primary-light); transform: translateY(-2px); }
  .btn-outline {
    font-family: var(--font-body); font-size: .62rem; letter-spacing: .22em; text-transform: uppercase;
    color: var(--primary); border: 1px solid rgba(26,10,122,.3);
    padding: 13px 36px; text-decoration: none; display: inline-block; transition: all .3s;
  }
  .btn-outline:hover { background: var(--primary); color: #fff; border-color: var(--primary); }
  .btn-white {
    font-family: var(--font-body); font-size: .62rem; letter-spacing: .22em; text-transform: uppercase;
    background: #fff; color: var(--primary); padding: 15px 40px;
    text-decoration: none; display: inline-block; font-weight: 600; transition: all .3s;
  }
  .btn-white:hover { background: #e8e8f5; }

  /* ABOUT */
  #about { padding: 130px 7vw; background: var(--bg); display: grid; grid-template-columns: 1fr 1fr; gap: 90px; align-items: center; }
  .about-images { position: relative; }
  .about-img-main { width: 100%; height: 580px; object-fit: cover; display: block; }
  .about-img-small { position: absolute; width: 210px; height: 270px; object-fit: cover; bottom: -44px; right: -44px; border: 6px solid var(--bg); box-shadow: 0 20px 60px rgba(0,0,0,.14); }
  .about-badge { position: absolute; top: -28px; left: -28px; background: var(--primary); width: 108px; height: 108px; border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; z-index: 1; box-shadow: 0 12px 40px rgba(26,10,122,.3); }
  .about-badge-num { font-family: var(--font-display); font-size: 2.1rem; font-weight: 300; color: #fff; line-height: 1; }
  .about-badge-txt { font-family: var(--font-body); font-size: .47rem; letter-spacing: .12em; text-transform: uppercase; color: rgba(255,255,255,.5); margin-top: 3px; }
  .about-h2 { font-family: var(--font-display); font-size: clamp(2.2rem, 3vw, 3.6rem); font-weight: 300; line-height: 1.1; color: var(--text); margin: 22px 0 26px; }
  .about-h2 em { font-style: italic; color: var(--primary); }
  .about-p { font-family: var(--font-body); font-size: .84rem; line-height: 2; color: var(--text-muted); margin-bottom: 14px; }
  .about-rule { width: 48px; height: 1.5px; background: var(--primary); opacity: .25; margin: 36px 0; }
  .about-stats { display: flex; gap: 44px; margin-bottom: 44px; }
  .ab-stat-num { font-family: var(--font-display); font-size: 2.6rem; font-weight: 300; color: var(--primary); line-height: 1; }
  .ab-stat-label { font-family: var(--font-body); font-size: .58rem; letter-spacing: .16em; text-transform: uppercase; color: var(--text-muted); margin-top: 6px; }

  /* SERVICES */
  #services { padding: 130px 7vw; background: var(--bg-soft); }
  .sec-header { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 60px; }
  .svc-cards { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; }
  .svc-c { background: var(--white); overflow: hidden; transition: transform .4s, box-shadow .4s; }
  .svc-c:hover { transform: translateY(-8px); box-shadow: 0 28px 70px rgba(26,10,122,.11); }
  .svc-c-img { width: 100%; height: 270px; object-fit: cover; transition: transform .8s ease; display: block; }
  .svc-c:hover .svc-c-img { transform: scale(1.07); }
  .svc-c-body { padding: 34px 30px; }
  .svc-c-num { font-family: var(--font-body); font-size: .58rem; letter-spacing: .22em; color: var(--primary); text-transform: uppercase; margin-bottom: 14px; }
  .svc-c-name { font-family: var(--font-display); font-size: 1.75rem; font-weight: 300; color: var(--text); margin-bottom: 14px; line-height: 1.2; }
  .svc-c-desc { font-family: var(--font-body); font-size: .8rem; line-height: 1.85; color: var(--text-muted); margin-bottom: 26px; }
  .svc-c-link { font-family: var(--font-body); font-size: .6rem; letter-spacing: .18em; text-transform: uppercase; color: var(--primary); text-decoration: none; display: flex; align-items: center; gap: 8px; transition: gap .3s; }
  .svc-c-link:hover { gap: 18px; }

  /* PORTFOLIO */
  #portfolio { padding: 130px 7vw; background: var(--bg); }
  .port-header { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 52px; }
  .port-grid { display: grid; grid-template-columns: 1.5fr 1fr 1fr; grid-template-rows: 400px 270px; gap: 14px; }
  .port-cell { position: relative; overflow: hidden; }
  .port-cell:first-child { grid-row: span 2; }
  .port-cell img { width: 100%; height: 100%; object-fit: cover; transition: transform .9s ease; display: block; }
  .port-cell:hover img { transform: scale(1.08); }
  .port-info { position: absolute; inset: 0; background: linear-gradient(to top, rgba(10,5,40,.92) 0%, transparent 55%); display: flex; flex-direction: column; justify-content: flex-end; padding: 30px; opacity: 0; transition: opacity .4s; }
  .port-cell:hover .port-info { opacity: 1; }
  .port-cat { font-family: var(--font-body); font-size: .55rem; letter-spacing: .26em; text-transform: uppercase; color: rgba(255,255,255,.6); margin-bottom: 7px; }
  .port-name { font-family: var(--font-display); font-size: 1.5rem; font-weight: 300; color: #fff; }
  .port-cell:first-child .port-name { font-size: 2.2rem; }

  /* WHY */
  #why { padding: 130px 7vw; background: var(--primary); display: grid; grid-template-columns: 1fr 1fr; gap: 90px; align-items: center; }
  .why-img img { width: 100%; height: 540px; object-fit: cover; }
  .why-h2 { font-family: var(--font-display); font-size: clamp(2.2rem, 3vw, 3.6rem); font-weight: 300; color: #fff; line-height: 1.1; margin: 20px 0 52px; }
  .why-h2 em { font-style: italic; color: rgba(255,255,255,.55); }
  .why-list { list-style: none; }
  .why-li { display: flex; gap: 26px; padding: 26px 0; border-bottom: 1px solid rgba(255,255,255,.07); transition: padding-left .3s; }
  .why-li:first-child { border-top: 1px solid rgba(255,255,255,.07); }
  .why-li:hover { padding-left: 10px; }
  .why-li-n { font-family: var(--font-display); font-size: 1.5rem; font-weight: 300; color: rgba(255,255,255,.3); flex-shrink: 0; min-width: 38px; line-height: 1.2; }
  .why-li-title { font-family: var(--font-body); font-size: .72rem; letter-spacing: .12em; text-transform: uppercase; color: #fff; font-weight: 600; margin-bottom: 7px; }
  .why-li-desc { font-family: var(--font-body); font-size: .79rem; line-height: 1.85; color: rgba(255,255,255,.42); }

  /* TESTIMONIALS */
  #testimonials { padding: 130px 7vw; background: var(--bg-soft); }
  .testi-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; margin-top: 60px; }
  .testi-card { background: var(--white); padding: 46px 38px; border: 1px solid transparent; transition: border-color .3s, box-shadow .3s; }
  .testi-card:hover { border-color: rgba(26,10,122,.15); box-shadow: 0 14px 44px rgba(26,10,122,.07); }
  .testi-q { font-family: var(--font-display); font-size: 6rem; font-weight: 300; color: var(--primary); opacity: .12; line-height: 1; margin-bottom: 18px; }
  .testi-stars { display: flex; gap: 4px; margin-bottom: 22px; }
  .testi-stars span { color: var(--primary); font-size: .7rem; }
  .testi-text { font-family: var(--font-body); font-size: .86rem; line-height: 1.95; font-style: italic; color: var(--text-muted); margin-bottom: 32px; }
  .testi-rule { width: 32px; height: 1px; background: var(--primary); opacity: .2; margin-bottom: 26px; }
  .testi-name { font-family: var(--font-body); font-size: .7rem; letter-spacing: .12em; text-transform: uppercase; color: var(--text); font-weight: 600; margin-bottom: 4px; }
  .testi-loc { font-family: var(--font-body); font-size: .68rem; color: var(--text-muted); }

  /* PROCESS */
  #process { padding: 130px 7vw; background: var(--bg); }
  .proc-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 32px; margin-top: 76px; position: relative; }
  .proc-grid::before { content: ''; position: absolute; top: 40px; left: 10%; right: 10%; height: 1px; background: repeating-linear-gradient(90deg, rgba(26,10,122,.2) 0, rgba(26,10,122,.2) 8px, transparent 8px, transparent 22px); }
  .proc-card { text-align: center; padding: 0 14px; }
  .proc-num-wrap { width: 80px; height: 80px; border-radius: 50%; border: 1.5px solid rgba(26,10,122,.2); display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; background: var(--bg); position: relative; z-index: 1; transition: all .4s; }
  .proc-card:hover .proc-num-wrap { background: var(--primary); border-color: var(--primary); }
  .proc-num { font-family: var(--font-display); font-size: 1.7rem; font-weight: 300; color: var(--primary); transition: color .4s; }
  .proc-card:hover .proc-num { color: #fff; }
  .proc-title { font-family: var(--font-body); font-size: .68rem; letter-spacing: .16em; text-transform: uppercase; color: var(--text); font-weight: 700; margin-bottom: 14px; }
  .proc-desc { font-family: var(--font-body); font-size: .79rem; line-height: 1.9; color: var(--text-muted); }

  /* CTA */
  #cta { background: var(--primary); padding: 110px 7vw; display: grid; grid-template-columns: 1fr 1fr; gap: 90px; align-items: center; }
  .cta-left h2 { font-family: var(--font-display); font-size: clamp(2.6rem, 4.2vw, 4.4rem); font-weight: 300; color: #fff; line-height: 1.08; margin-bottom: 22px; }
  .cta-left h2 em { font-style: italic; color: rgba(255,255,255,.55); }
  .cta-left p { font-family: var(--font-body); font-size: .84rem; line-height: 1.95; color: rgba(255,255,255,.45); margin-bottom: 42px; }
  .cta-panel { background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.15); padding: 46px; }
  .cta-panel-title { font-family: var(--font-body); font-size: .56rem; letter-spacing: .34em; text-transform: uppercase; color: rgba(255,255,255,.5); margin-bottom: 30px; }
  .cta-row { display: flex; gap: 18px; align-items: flex-start; padding: 18px 0; border-bottom: 1px solid rgba(255,255,255,.05); }
  .cta-row:last-of-type { border-bottom: none; }
  .cta-row-icon { font-size: 1rem; flex-shrink: 0; margin-top: 2px; }
  .cta-row-label { font-family: var(--font-body); font-size: .53rem; letter-spacing: .2em; text-transform: uppercase; color: rgba(255,255,255,.28); margin-bottom: 4px; }
  .cta-row-val { font-family: var(--font-body); font-size: .84rem; color: #fff; }
  .cta-panel-btn { display: block; width: 100%; text-align: center; margin-top: 30px; font-family: var(--font-body); font-size: .62rem; letter-spacing: .22em; text-transform: uppercase; background: #fff; color: var(--primary); padding: 17px; text-decoration: none; font-weight: 700; transition: all .3s; }
  .cta-panel-btn:hover { background: #e8e8f5; }

  /* FOOTER */
  #footer { background: #080420; padding: 70px 7vw 32px; border-top: 1px solid rgba(255,255,255,.08); }
  .footer-top { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 60px; margin-bottom: 60px; }
  .footer-logo-img { height: 50px; width: auto; object-fit: contain; margin-bottom: 16px; display: block; filter: brightness(0) invert(1); }
  .footer-brand-desc { font-family: var(--font-body); font-size: .78rem; line-height: 1.9; color: rgba(255,255,255,.32); }
  .footer-col-title { font-family: var(--font-body); font-size: .58rem; letter-spacing: .28em; text-transform: uppercase; color: rgba(255,255,255,.5); margin-bottom: 24px; }
  .footer-links { list-style: none; }
  .footer-links li { margin-bottom: 12px; }
  .footer-links a { font-family: var(--font-body); font-size: .79rem; color: rgba(255,255,255,.35); text-decoration: none; transition: color .3s; }
  .footer-links a:hover { color: #fff; }
  .footer-bottom { border-top: 1px solid rgba(255,255,255,.07); padding-top: 28px; display: flex; justify-content: space-between; align-items: center; }
  .footer-copy { font-family: var(--font-body); font-size: .65rem; color: rgba(255,255,255,.2); }

  /* REVEAL */
  .reveal { opacity: 0; transform: translateY(30px); transition: opacity .8s ease, transform .8s ease; }
  .reveal.visible { opacity: 1; transform: translateY(0); }

  @keyframes aUp { from { opacity:0; transform:translateY(28px); } to { opacity:1; transform:translateY(0); } }
  @keyframes aFade { from { opacity:0; } to { opacity:1; } }

  /* RESPONSIVE */
  @media(max-width:1100px) {
    #about, #why { grid-template-columns: 1fr; gap: 50px; }
    .about-img-small, .about-badge, .why-img { display: none; }
    .svc-cards { grid-template-columns: 1fr 1fr; }
    .proc-grid { grid-template-columns: 1fr 1fr; }
    .proc-grid::before { display: none; }
    #cta { grid-template-columns: 1fr; gap: 50px; }
    .port-grid { grid-template-columns: 1fr 1fr; grid-template-rows: auto; }
    .port-cell:first-child { grid-row: span 1; height: 320px; }
    .port-cell { height: 230px; }
    .testi-grid { grid-template-columns: 1fr 1fr; }
    .footer-top { grid-template-columns: 1fr 1fr; gap: 40px; }
  }
  @media(max-width:768px) {
    .nav-links, .nav-cta { display: none; }
    .hero-title { font-size: 2.5rem; }
    .hero-btns { flex-direction: column; align-items: flex-start; }
    .hero-stats-bar { display: none; }
    .svc-cards, .testi-grid { grid-template-columns: 1fr; }
    .proc-grid { grid-template-columns: 1fr 1fr; }
    .port-grid { grid-template-columns: 1fr; }
    .port-cell, .port-cell:first-child { height: 260px; }
    #about, #services, #portfolio, #why, #testimonials, #process, #cta { padding: 80px 6vw; }
    .sec-header, .port-header { flex-direction: column; gap: 22px; align-items: flex-start; }
    .footer-top { grid-template-columns: 1fr; }
    .footer-bottom { flex-direction: column; gap: 12px; text-align: center; }
  }
</style>
</head>
<body>

<!-- NAV -->
<nav id="navbar">
  <a href="#" class="nav-logo">
    <img src="/Images/Cosmic Logos (8) (1) (1).png" alt="Cosmic Interiors" class="nav-logo-img">
  </a>
  <ul class="nav-links">
    <li><a href="#about">About</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#process">Process</a></li>
    <li><a href="#cta">Contact</a></li>
  </ul>
  <a href="#cta" class="nav-cta">Book Consultation</a>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="hero-bg">
    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=1800&q=90" alt="Luxury Interior">
  </div>
  <div class="hero-inner">
    <div class="hero-eyebrow">
      <div class="hero-eyebrow-line"></div>
      <span>Luxury Interior Design Studio · Since 2012</span>
    </div>
    <h1 class="hero-title">Spaces designed<br>to reflect <em>who<br>you truly are</em></h1>
    <p class="hero-desc">India's most awarded interior design studio — crafting extraordinary homes and commercial spaces for those who refuse to settle for ordinary.</p>
    <div class="hero-btns">
      <a href="#portfolio" class="btn-fill">Explore Our Work</a>
      <a href="#cta" class="btn-ghost">Book Consultation →</a>
    </div>
  </div>
  <div class="hero-stats-bar">
    <div class="hero-stat"><div class="hero-stat-num">500+</div><div class="hero-stat-label">Homes Designed</div></div>
    <div class="hero-stat"><div class="hero-stat-num">12+</div><div class="hero-stat-label">Years of Excellence</div></div>
    <div class="hero-stat"><div class="hero-stat-num">48</div><div class="hero-stat-label">Design Awards</div></div>
    <div class="hero-stat"><div class="hero-stat-num">98%</div><div class="hero-stat-label">Client Satisfaction</div></div>
  </div>
</section>

<!-- MARQUEE -->
<div id="marquee"><div class="mq-track">
  <span class="mq-item">Luxury Residential</span><span class="mq-item">Commercial Spaces</span><span class="mq-item">Hospitality Design</span><span class="mq-item">Turnkey Projects</span><span class="mq-item">Custom Furniture</span><span class="mq-item">Space Planning</span><span class="mq-item">Art Curation</span><span class="mq-item">Smart Homes</span>
  <span class="mq-item">Luxury Residential</span><span class="mq-item">Commercial Spaces</span><span class="mq-item">Hospitality Design</span><span class="mq-item">Turnkey Projects</span><span class="mq-item">Custom Furniture</span><span class="mq-item">Space Planning</span><span class="mq-item">Art Curation</span><span class="mq-item">Smart Homes</span>
</div></div>

<!-- ABOUT -->
<section id="about">
  <div class="about-images reveal">
    <img class="about-img-main" src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=900&q=85" alt="Studio">
    <img class="about-img-small" src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=400&q=80" alt="Detail">
    <div class="about-badge"><div class="about-badge-num">12</div><div class="about-badge-txt">Years of craft</div></div>
  </div>
  <div class="reveal">
    <div class="section-tag">About Cosmic Interiors</div>
    <h2 class="about-h2">Design rooted in<br><em>listening</em> and<br>obsessive craft</h2>
    <p class="about-p">We don't follow trends — we follow your truth. Every space we create is a precise translation of who you are, how you live, and what brings you joy.</p>
    <p class="about-p">For over 12 years, our team of architects, designers, and craftspeople have been transforming spaces across India into places people never want to leave.</p>
    <div class="about-rule"></div>
    <div class="about-stats">
      <div><div class="ab-stat-num">500+</div><div class="ab-stat-label">Homes Done</div></div>
      <div><div class="ab-stat-num">98%</div><div class="ab-stat-label">Satisfaction</div></div>
      <div><div class="ab-stat-num">10yr</div><div class="ab-stat-label">Warranty</div></div>
    </div>
    <a href="#why" class="btn-primary">Meet Our Studio</a>
  </div>
</section>

<!-- SERVICES -->
<section id="services">
  <div class="sec-header reveal">
    <div>
      <div class="section-tag">What We Do</div>
      <h2 class="section-title">Crafting <em>excellence</em><br>across every space</h2>
    </div>
    <a href="#" class="btn-outline">View All Services</a>
  </div>
  <div class="svc-cards reveal">
    <div class="svc-c">
      <img class="svc-c-img" src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=800&q=85" alt="Residential">
      <div class="svc-c-body">
        <div class="svc-c-num">01 — Residential</div>
        <h3 class="svc-c-name">Homes that<br>reflect you</h3>
        <p class="svc-c-desc">From intimate apartments to sprawling villas — we design living spaces that are unmistakably, beautifully yours.</p>
        <a href="#" class="svc-c-link">Explore Service →</a>
      </div>
    </div>
    <div class="svc-c">
      <img class="svc-c-img" src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=85" alt="Commercial">
      <div class="svc-c-body">
        <div class="svc-c-num">02 — Commercial</div>
        <h3 class="svc-c-name">Workspaces that<br>inspire</h3>
        <p class="svc-c-desc">Offices designed to attract great talent, impress clients, and help people do their best work every day.</p>
        <a href="#" class="svc-c-link">Explore Service →</a>
      </div>
    </div>
    <div class="svc-c">
      <img class="svc-c-img" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800&q=85" alt="Hospitality">
      <div class="svc-c-body">
        <div class="svc-c-num">03 — Hospitality</div>
        <h3 class="svc-c-name">Experiences guests<br>remember</h3>
        <p class="svc-c-desc">Hotels and restaurants reimagined as immersive destinations where the space itself becomes the story.</p>
        <a href="#" class="svc-c-link">Explore Service →</a>
      </div>
    </div>
  </div>
</section>

<!-- PORTFOLIO -->
<section id="portfolio">
  <div class="port-header reveal">
    <div>
      <div class="section-tag">Selected Works</div>
      <h2 class="section-title">Spaces that speak<br><em>for themselves</em></h2>
    </div>
    <a href="#" class="btn-primary">View Full Portfolio</a>
  </div>
  <div class="port-grid reveal">
    <div class="port-cell"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=900&q=85" alt="Solaris"><div class="port-info"><div class="port-cat">Residential · Hyderabad</div><div class="port-name">The Solaris Penthouse</div></div></div>
    <div class="port-cell"><img src="https://images.unsplash.com/photo-1618219908412-a29a1bb7b86e?w=700&q=80" alt="Nebula"><div class="port-info"><div class="port-cat">Hospitality · Mumbai</div><div class="port-name">Nebula Restaurant</div></div></div>
    <div class="port-cell"><img src="https://images.unsplash.com/photo-1631679706909-1844bbd07221?w=700&q=80" alt="Aurora"><div class="port-info"><div class="port-cat">Residential · Bengaluru</div><div class="port-name">Aurora Villa</div></div></div>
    <div class="port-cell"><img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=700&q=80" alt="Zenith"><div class="port-info"><div class="port-cat">Commercial · Hyderabad</div><div class="port-name">Zenith HQ</div></div></div>
    <div class="port-cell"><img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=700&q=80" alt="Orion"><div class="port-info"><div class="port-cat">Residential · Delhi</div><div class="port-name">Orion Loft</div></div></div>
  </div>
</section>

<!-- WHY -->
<section id="why">
  <div class="why-img reveal"><img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=800&q=85" alt="Why Cosmic"></div>
  <div class="reveal">
    <div class="section-tag light">Why Choose Us</div>
    <h2 class="why-h2">What makes Cosmic<br><em>truly different</em></h2>
    <ul class="why-list">
      <li class="why-li"><span class="why-li-n">01</span><div><div class="why-li-title">We Listen First</div><div class="why-li-desc">Before a single sketch, we invest deep time truly understanding your life, preferences, and vision.</div></div></li>
      <li class="why-li"><span class="why-li-n">02</span><div><div class="why-li-title">Obsessive Craft</div><div class="why-li-desc">We partner with master craftspeople and source premium materials — no shortcuts, ever.</div></div></li>
      <li class="why-li"><span class="why-li-n">03</span><div><div class="why-li-title">90-Day Delivery</div><div class="why-li-desc">Our delivery promise is a commitment we take personally. Always on time, every time.</div></div></li>
      <li class="why-li"><span class="why-li-n">04</span><div><div class="why-li-title">10 Year Warranty</div><div class="why-li-desc">Every installation is backed by our 10-year warranty — because quality should last a decade.</div></div></li>
    </ul>
    <div style="margin-top:44px"><a href="#about" class="btn-white">Learn More About Us</a></div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials">
  <div class="reveal">
    <div class="section-tag">Client Stories</div>
    <h2 class="section-title">Words from those<br>who <em>live our work</em></h2>
  </div>
  <div class="testi-grid reveal">
    <div class="testi-card">
      <div class="testi-q">"</div>
      <div class="testi-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
      <p class="testi-text">Cosmic Interiors turned our apartment into a sanctuary. Every morning feels like waking up in a five-star hotel. The attention to detail is truly extraordinary.</p>
      <div class="testi-rule"></div>
      <div class="testi-name">Riya & Arjun Mehta</div>
      <div class="testi-loc">Mumbai · Residential Project</div>
    </div>
    <div class="testi-card">
      <div class="testi-q">"</div>
      <div class="testi-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
      <p class="testi-text">Our restaurant bookings tripled in a month. Guests come just for the experience of the space. Cosmic Interiors is pure magic and excellence.</p>
      <div class="testi-rule"></div>
      <div class="testi-name">Sanjay Khanna</div>
      <div class="testi-loc">Bengaluru · Hospitality Project</div>
    </div>
    <div class="testi-card">
      <div class="testi-q">"</div>
      <div class="testi-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
      <p class="testi-text">They delivered a workspace that energises everyone who walks through the door. This is what world-class design truly feels like.</p>
      <div class="testi-rule"></div>
      <div class="testi-name">Priya Venkatesh</div>
      <div class="testi-loc">Hyderabad · Commercial Project</div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section id="process">
  <div class="reveal" style="text-align:center">
    <div class="section-tag center">How We Work</div>
    <h2 class="section-title">From <em>conversation</em> to creation</h2>
  </div>
  <div class="proc-grid reveal">
    <div class="proc-card"><div class="proc-num-wrap"><span class="proc-num">01</span></div><div class="proc-title">Discovery</div><p class="proc-desc">We listen deeply — your lifestyle, aspirations, and what home truly means to you shapes everything.</p></div>
    <div class="proc-card"><div class="proc-num-wrap"><span class="proc-num">02</span></div><div class="proc-title">Concept & Design</div><p class="proc-desc">Stunning 3D renders, moodboards, and curated material selections before a single nail is driven.</p></div>
    <div class="proc-card"><div class="proc-num-wrap"><span class="proc-num">03</span></div><div class="proc-title">Execution</div><p class="proc-desc">Skilled craftspeople bring every detail to life with obsessive precision — on time, on budget.</p></div>
    <div class="proc-card"><div class="proc-num-wrap"><span class="proc-num">04</span></div><div class="proc-title">Your New Life</div><p class="proc-desc">A perfect handover backed by our 10-year warranty and dedicated aftercare support.</p></div>
  </div>
</section>

<!-- CTA -->
<section id="cta">
  <div class="cta-left reveal">
    <div class="section-tag light">Begin Your Journey</div>
    <h2>Let's create something<br><em>extraordinary</em> together</h2>
    <p>The first consultation is always free. Tell us about your dream space and we'll show you exactly how to make it real — beautifully, on time, and within budget.</p>
    <a href="#" class="btn-white">Book Free Consultation</a>
  </div>
  <div class="cta-panel reveal">
    <div class="cta-panel-title">Get In Touch With Us</div>
    <div class="cta-row"><div class="cta-row-icon">📞</div><div><div class="cta-row-label">Call Us</div><div class="cta-row-val">+91 99999 99999</div></div></div>
    <div class="cta-row"><div class="cta-row-icon">✉️</div><div><div class="cta-row-label">Email Us</div><div class="cta-row-val">hello@cosmicinteriors.in</div></div></div>
    <div class="cta-row"><div class="cta-row-icon">📍</div><div><div class="cta-row-label">Our Studios</div><div class="cta-row-val">Hyderabad · Mumbai · Bengaluru</div></div></div>
    <div class="cta-row"><div class="cta-row-icon">🕐</div><div><div class="cta-row-label">Working Hours</div><div class="cta-row-val">Mon – Sat, 9AM – 7PM</div></div></div>
    <a href="#" class="cta-panel-btn">Start Your Project →</a>
  </div>
</section>

<!-- FOOTER -->
<footer id="footer">
  <div class="footer-top">
    <div>
      <img src="/Images/Cosmic Logos (8) (1) (1).png" alt="Cosmic Interiors" class="footer-logo-img">
      <p class="footer-brand-desc">India's most awarded interior design studio, crafting extraordinary homes and commercial spaces since 2012.</p>
    </div>
    <div>
      <div class="footer-col-title">Navigate</div>
      <ul class="footer-links">
        <li><a href="#about">About Us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#process">Process</a></li>
      </ul>
    </div>
    <div>
      <div class="footer-col-title">Services</div>
      <ul class="footer-links">
        <li><a href="#">Residential</a></li>
        <li><a href="#">Commercial</a></li>
        <li><a href="#">Hospitality</a></li>
        <li><a href="#">Turnkey</a></li>
      </ul>
    </div>
    <div>
      <div class="footer-col-title">Studios</div>
      <ul class="footer-links">
        <li><a href="#">Hyderabad</a></li>
        <li><a href="#">Mumbai</a></li>
        <li><a href="#">Bengaluru</a></li>
        <li><a href="#">hello@cosmicinteriors.in</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span class="footer-copy">© 2024 Cosmic Interiors. All rights reserved.</span>
    <span class="footer-copy">Privacy Policy · Terms of Service</span>
  </div>
</footer>

<script>
  const nb = document.getElementById('navbar');
  window.addEventListener('scroll', () => { nb.classList.toggle('scrolled', window.scrollY > 80); });

  const revealEls = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((e, i) => {
      if (e.isIntersecting) {
        e.target.style.transitionDelay = (i * 0.08) + 's';
        e.target.classList.add('visible');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });
  revealEls.forEach(el => observer.observe(el));
</script>
</body>
</html>