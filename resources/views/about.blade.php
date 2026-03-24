@extends('layouts.app')
@section('title', 'About Cosmic Interiors')

@section('content')
<section class="hero section--alt">
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="eyebrow">About Cosmic Interiors</span>
            <h1>Design practice rooted in listening and precision.</h1>
            <p class="lead">We build interior environments that are warm, modern, and enduring, guided by structured process and handcrafted detail.</p>
        </div>
        <figure class="hero-media">
            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1400&q=80" alt="Cosmic Interiors design studio">
        </figure>
    </div>
</section>

<section class="section">
    <div class="container content-block">
        <figure class="content-block__media">
            <img src="https://images.unsplash.com/photo-1616486029423-aaa4789e8c9a?w=1200&q=80" alt="Material palette and interiors">
        </figure>
        <div class="content-block__copy">
            <span class="eyebrow">Our Story</span>
            <h2>Founded to deliver calm, premium interiors with integrity.</h2>
            <p class="section-desc">Since 2012, our team of designers, architects, and execution specialists has delivered projects that blend editorial aesthetics with everyday usability.</p>
            <p class="section-desc">Every project starts with context: site, lifestyle, operations, and long-term maintenance. This clarity drives better design and fewer compromises.</p>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <header class="section-header section-header--center">
            <span class="eyebrow">Core Values</span>
            <h2 class="section-title">Principles we use on every project.</h2>
        </header>

        <div class="grid-3">
            <article class="card">
                <h3 class="card-title">Human-Centered Planning</h3>
                <p class="card-text">Design decisions are driven by real routines and interactions, not just visual trends.</p>
            </article>
            <article class="card">
                <h3 class="card-title">Material Honesty</h3>
                <p class="card-text">We specify finishes that age well and maintain character over time.</p>
            </article>
            <article class="card">
                <h3 class="card-title">Execution Discipline</h3>
                <p class="card-text">Clear timelines, approved details, and strong site coordination protect final quality.</p>
            </article>
            <article class="card">
                <h3 class="card-title">Transparent Communication</h3>
                <p class="card-text">Clients get clear updates on progress, cost, and dependencies through each phase.</p>
            </article>
            <article class="card">
                <h3 class="card-title">Timeless Aesthetic Direction</h3>
                <p class="card-text">We create interiors that remain relevant and desirable beyond short design cycles.</p>
            </article>
            <article class="card">
                <h3 class="card-title">Long-Term Support</h3>
                <p class="card-text">Post-handover support ensures performance and quality after occupancy.</p>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <header class="section-header">
            <span class="eyebrow">Leadership</span>
            <h2 class="section-title">Studio team with cross-functional expertise.</h2>
        </header>
        <div class="grid-4">
            <article class="card">
                <h3 class="card-title">Ananya Sharma</h3>
                <p class="text-small text-muted meta-line--sm">Founder and Creative Director</p>
                <p class="card-text">Leads overall creative direction and brand-level project language.</p>
            </article>
            <article class="card">
                <h3 class="card-title">Rohan Mehta</h3>
                <p class="text-small text-muted meta-line--sm">Principal Architect</p>
                <p class="card-text">Heads architectural planning, detailing, and on-site technical integration.</p>
            </article>
            <article class="card">
                <h3 class="card-title">Priya Nair</h3>
                <p class="text-small text-muted meta-line--sm">Head of Interiors</p>
                <p class="card-text">Owns interior specifications, styling, and final interior curation.</p>
            </article>
            <article class="card">
                <h3 class="card-title">Vikram Reddy</h3>
                <p class="text-small text-muted meta-line--sm">Head of Execution</p>
                <p class="card-text">Drives project delivery quality, scheduling, and vendor coordination.</p>
            </article>
        </div>
    </div>
</section>

<section class="stats-strip">
    <div class="container stats-grid">
        <div class="stat">
            <p class="stat-value">50+</p>
            <p class="stat-label">Design Professionals</p>
        </div>
        <div class="stat">
            <p class="stat-value">3</p>
            <p class="stat-label">Studio Locations</p>
        </div>
        <div class="stat">
            <p class="stat-value">90</p>
            <p class="stat-label">Day Signature Delivery</p>
        </div>
        <div class="stat">
            <p class="stat-value">10</p>
            <p class="stat-label">Year Warranty Support</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <header class="section-header section-header--center">
            <span class="eyebrow">FAQ</span>
            <h2 class="section-title">About our practice and process.</h2>
        </header>

        <div class="faq" data-faq>
            <article class="faq-item">
                <button class="faq-trigger" type="button"><span>What type of projects do you prioritize?</span><span class="faq-icon">+</span></button>
                <div class="faq-panel"><div class="faq-panel__inner">We handle full-scope residential, commercial, and hospitality interiors where design and execution both matter.</div></div>
            </article>
            <article class="faq-item">
                <button class="faq-trigger" type="button"><span>Do you provide design-only consulting?</span><span class="faq-icon">+</span></button>
                <div class="faq-panel"><div class="faq-panel__inner">Yes, we offer design-only packages with detailed drawings and curated specification schedules.</div></div>
            </article>
            <article class="faq-item">
                <button class="faq-trigger" type="button"><span>How involved is the client during development?</span><span class="faq-icon">+</span></button>
                <div class="faq-panel"><div class="faq-panel__inner">Clients review milestone submissions at each phase so decisions remain clear and aligned.</div></div>
            </article>
        </div>
    </div>
</section>
@endsection

