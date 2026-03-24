@extends('layouts.app')
@section('title', 'Portfolio | Cosmic Interiors')

@section('content')
<section class="hero">
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="eyebrow">Portfolio</span>
            <h1>A portfolio shaped by warm minimal luxury.</h1>
            <p class="lead">Selected residential, commercial, and hospitality projects that reflect our consistent design system and execution rigor.</p>
            <div class="inline-cluster inline-cluster--sm">
                <span class="badge">Residential</span>
                <span class="badge">Commercial</span>
                <span class="badge">Hospitality</span>
            </div>
        </div>
        <figure class="hero-media">
            <img src="https://images.unsplash.com/photo-1616594039964-2d0bf6e98fe2?w=1400&q=80" alt="Luxury interior portfolio showcase">
        </figure>
    </div>
</section>

<section class="section">
    <div class="container">
        <header class="section-header">
            <span class="eyebrow">Selected Projects</span>
            <h2 class="section-title">Recent transformations across cities.</h2>
        </header>

        <div class="grid-3">
            <article class="project-card">
                <div class="project-card__media"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1000&q=80" alt="Penthouse interior"></div>
                <div class="project-card__body">
                    <p class="project-meta">Residential | Mumbai</p>
                    <h3 class="card-title">Solaris Penthouse</h3>
                    <p class="card-text">Curated textures and layered lighting for a calm, premium residence.</p>
                </div>
            </article>
            <article class="project-card">
                <div class="project-card__media"><img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1000&q=80" alt="Office interior"></div>
                <div class="project-card__body">
                    <p class="project-meta">Commercial | Hyderabad</p>
                    <h3 class="card-title">Zenith Corporate Floor</h3>
                    <p class="card-text">Brand-led workplace planning with warm material strategy and acoustic zoning.</p>
                </div>
            </article>
            <article class="project-card">
                <div class="project-card__media"><img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1000&q=80" alt="Restaurant interior"></div>
                <div class="project-card__body">
                    <p class="project-meta">Hospitality | Bengaluru</p>
                    <h3 class="card-title">Nebula Dining Club</h3>
                    <p class="card-text">A hospitality environment with high visual recall and smooth operations.</p>
                </div>
            </article>
            <article class="project-card">
                <div class="project-card__media"><img src="https://images.unsplash.com/photo-1631679706909-1844bbd07221?w=1000&q=80" alt="Villa interior"></div>
                <div class="project-card__body">
                    <p class="project-meta">Residential | Goa</p>
                    <h3 class="card-title">Aurora Villa</h3>
                    <p class="card-text">A refined coastal expression with robust indoor-outdoor continuity.</p>
                </div>
            </article>
            <article class="project-card">
                <div class="project-card__media"><img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=1000&q=80" alt="Co-working space"></div>
                <div class="project-card__body">
                    <p class="project-meta">Commercial | Pune</p>
                    <h3 class="card-title">Prism Work Hub</h3>
                    <p class="card-text">Flexible office layout strategy with premium yet durable specifications.</p>
                </div>
            </article>
            <article class="project-card">
                <div class="project-card__media"><img src="https://images.unsplash.com/photo-1560448204-603b3fc33ddc?w=1000&q=80" alt="Hotel suite"></div>
                <div class="project-card__body">
                    <p class="project-meta">Hospitality | Jaipur</p>
                    <h3 class="card-title">Luna Suite Collection</h3>
                    <p class="card-text">Guest-first suite interiors with a warm layered luxury identity.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container content-block">
        <figure class="content-block__media">
            <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=1200&q=80" alt="Featured interior project">
        </figure>
        <div class="content-block__copy">
            <span class="eyebrow">Featured Project</span>
            <h2>The Solaris Penthouse, Mumbai.</h2>
            <p class="section-desc">A complete 4,200 sq ft transformation combining natural stone, custom woodwork, ambient lighting, and soft architectural curves.</p>
            <div class="grid-2">
                <div class="card">
                    <h3 class="card-title">Area</h3>
                    <p class="card-text">4,200 sq ft</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Duration</h3>
                    <p class="card-text">6 months</p>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="btn btn--primary">Start a Similar Project</a>
        </div>
    </div>
</section>

<section class="section section--dark dark-invert section--tight">
    <div class="container section-header section-header--center section-header--flush">
        <span class="eyebrow">Next Project</span>
        <h2 class="section-title">Ready to create your own signature space?</h2>
        <p class="section-desc">Share your brief with our team and we will map the right direction for your project scope and timeline.</p>
        <a href="{{ route('contact') }}" class="btn btn--secondary mt-4">Book Consultation</a>
    </div>
</section>
@endsection

