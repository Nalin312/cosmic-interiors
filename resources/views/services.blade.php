@extends('layouts.app')
@section('title', 'Services | Cosmic Interiors')

@section('content')
<section class="hero section--alt">
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="eyebrow">Services</span>
            <h1>Interior services designed for quality and continuity.</h1>
            <p class="lead">We offer full-spectrum interior design and execution services with one consistent visual and technical standard.</p>
            <div class="inline-cluster">
                <a href="{{ route('contact') }}" class="btn btn--primary">Request Consultation</a>
                <a href="{{ route('portfolio') }}" class="btn btn--outline">See Completed Work</a>
            </div>
        </div>
        <figure class="hero-media">
            <img src="https://images.unsplash.com/photo-1554995207-c18c203602cb?w=1400&q=80" alt="Interior design service by Cosmic Interiors">
        </figure>
    </div>
</section>

<section class="section">
    <div class="container">
        <header class="section-header">
            <span class="eyebrow">Service Scope</span>
            <h2 class="section-title">Three categories, one premium standard.</h2>
            <p class="section-desc">All service lines use the same process structure: discovery, concept, detailing, procurement, and controlled execution.</p>
        </header>

        <div class="grid-3">
            <article class="card service-card">
                <span class="badge">01 Residential</span>
                <h3 class="card-title">Residential Interiors</h3>
                <p class="card-text">Full-home planning, modular systems, lighting design, styling, and project handover support.</p>
                <ul class="text-small text-muted list-spec">
                    <li>Apartment and villa interiors</li>
                    <li>Custom wardrobes and kitchens</li>
                    <li>Material and furniture curation</li>
                </ul>
            </article>

            <article class="card service-card">
                <span class="badge">02 Commercial</span>
                <h3 class="card-title">Commercial Interiors</h3>
                <p class="card-text">Workspaces and retail interiors shaped for brand identity, visitor flow, and team performance.</p>
                <ul class="text-small text-muted list-spec">
                    <li>Corporate and startup offices</li>
                    <li>Retail and experience zones</li>
                    <li>Brand-forward material direction</li>
                </ul>
            </article>

            <article class="card service-card">
                <span class="badge">03 Hospitality</span>
                <h3 class="card-title">Hospitality Interiors</h3>
                <p class="card-text">High-touch guest environments balancing visual identity, comfort, and long-term maintainability.</p>
                <ul class="text-small text-muted list-spec">
                    <li>Restaurants and lounges</li>
                    <li>Hotel suites and public zones</li>
                    <li>Lighting and atmosphere strategy</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="section section--dark dark-invert">
    <div class="container">
        <header class="section-header section-header--center">
            <span class="eyebrow">Delivery Process</span>
            <h2 class="section-title">Structured steps from first brief to final handover.</h2>
        </header>
        <div class="grid-4">
            <article class="card">
                <h3 class="card-title">01 Discovery</h3>
                <p class="card-text">Site study, requirement mapping, and budget framework.</p>
            </article>
            <article class="card">
                <h3 class="card-title">02 Concept</h3>
                <p class="card-text">Layout strategy, design language, and finish palette direction.</p>
            </article>
            <article class="card">
                <h3 class="card-title">03 Detail Development</h3>
                <p class="card-text">Working drawings, specifications, and execution schedules.</p>
            </article>
            <article class="card">
                <h3 class="card-title">04 Build and Handover</h3>
                <p class="card-text">Site supervision, quality checks, and final project closure.</p>
            </article>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <header class="section-header">
            <span class="eyebrow">Packages</span>
            <h2 class="section-title">Service bands based on project depth.</h2>
        </header>

        <div class="grid-3">
            <article class="card">
                <h3 class="card-title">Essential</h3>
                <p class="text-small text-muted meta-line--md">Design-first package</p>
                <p class="card-text">Best for focused scope projects with clear timelines and selected customization.</p>
                <a href="{{ route('contact') }}" class="btn btn--outline mt-4">Choose Essential</a>
            </article>
            <article class="card card--featured">
                <span class="badge meta-line--md">Most Selected</span>
                <h3 class="card-title">Premium</h3>
                <p class="text-small text-muted meta-line--md">Design + execution package</p>
                <p class="card-text">Our most common engagement model with complete design and execution delivery.</p>
                <a href="{{ route('contact') }}" class="btn btn--primary mt-4">Choose Premium</a>
            </article>
            <article class="card">
                <h3 class="card-title">Bespoke Luxury</h3>
                <p class="text-small text-muted meta-line--md">High customization package</p>
                <p class="card-text">For large or high-detail projects requiring custom fabrication and curated procurement.</p>
                <a href="{{ route('contact') }}" class="btn btn--outline mt-4">Discuss Bespoke</a>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <header class="section-header section-header--center">
            <span class="eyebrow">FAQ</span>
            <h2 class="section-title">Services and delivery questions.</h2>
        </header>

        <div class="faq" data-faq>
            <article class="faq-item">
                <button class="faq-trigger" type="button"><span>Do you provide turnkey execution?</span><span class="faq-icon">+</span></button>
                <div class="faq-panel"><div class="faq-panel__inner">Yes, we provide turnkey delivery with site management, coordination, and quality control.</div></div>
            </article>
            <article class="faq-item">
                <button class="faq-trigger" type="button"><span>Can we engage only for concept design?</span><span class="faq-icon">+</span></button>
                <div class="faq-panel"><div class="faq-panel__inner">Yes. Design-only scope can include layouts, 3D views, and complete specifications.</div></div>
            </article>
            <article class="faq-item">
                <button class="faq-trigger" type="button"><span>How are project costs estimated?</span><span class="faq-icon">+</span></button>
                <div class="faq-panel"><div class="faq-panel__inner">Costs are derived from approved drawings, finish selections, scope level, and site constraints.</div></div>
            </article>
        </div>
    </div>
</section>
@endsection

