@extends('layouts.app')
@section('title', 'Cosmic Interiors | Thoughtful Interiors Crafted for Modern Living')
@section('styles')
<style>
.ci-why {
    background: #FFFFFF;
    padding: 64px 0;
    border-top: 1px solid #E8DDD4;
    border-bottom: 1px solid #E8DDD4;
}

.ci-why__header {
    text-align: center;
    margin-bottom: 48px;
}

.ci-why__label {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: #8B5E3C;
    margin-bottom: 10px;
}

.ci-why__heading {
    font-family: var(--font-serif);
    font-size: clamp(1.8rem, 3vw, 2.6rem);
    color: #2C1509;
    font-weight: 600;
    line-height: 1.2;
}

.ci-why__marquee {
    width: 100%;
    overflow: hidden;
    -webkit-mask-image: linear-gradient(to right, transparent 0%, black 10%, black 90%, transparent 100%);
    mask-image: linear-gradient(to right, transparent 0%, black 10%, black 90%, transparent 100%);
}

.ci-why__track {
    display: inline-flex;
    align-items: center;
    width: max-content;
    animation: ci-why-scroll 28s linear infinite;
}

.ci-why__marquee:hover .ci-why__track {
    animation-play-state: paused;
}

.ci-why__set {
    display: inline-flex;
    align-items: center;
    gap: 18px;
    padding-inline: 18px;
}

.ci-why__item {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    white-space: nowrap;
}

.ci-why__icon-wrap {
    width: 46px;
    height: 46px;
    border-radius: 999px;
    background: #F5EDE4;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.ci-why__icon-wrap svg {
    width: 24px;
    height: 24px;
    color: #8B5E3C;
}

.ci-why__name {
    font-size: 13px;
    font-weight: 700;
    color: #2C1509;
    letter-spacing: 0.03em;
    text-transform: uppercase;
    margin: 0;
}

.ci-why__dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #CFAE88;
    margin-inline: 10px;
    flex-shrink: 0;
}

@keyframes ci-why-scroll {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(-50%);
    }
}

.ci-video {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.ci-video video {
    width: 100%;
    aspect-ratio: 16 / 7;
    object-fit: cover;
    display: block;
}

.ci-video::after {
    content: '';
    position: absolute;
    inset: 0;
    background:
        linear-gradient(to bottom, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0) 26%, rgba(0, 0, 0, 0) 74%, rgba(0, 0, 0, 0.35)),
        linear-gradient(to right, rgba(0, 0, 0, 0.28), rgba(0, 0, 0, 0) 18%, rgba(0, 0, 0, 0) 82%, rgba(0, 0, 0, 0.28));
    pointer-events: none;
}

.ci-video__badge {
    position: absolute;
    left: 50%;
    bottom: 22px;
    transform: translateX(-50%);
    padding: 7px 16px;
    border-radius: 999px;
    border: 1px solid rgba(255, 255, 255, 0.35);
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(8px);
    color: #FAF6F1;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    white-space: nowrap;
    z-index: 1;
}
</style>
@endsection

@section('content')
<section class="ci-hero">
    <div class="ci-hero__bg">
        <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?w=2200&q=80" alt="Warm luxury interior by Cosmic Interiors">
    </div>

    <div class="container ci-hero__content">
        <div class="ci-hero__left">
            <span class="eyebrow">Cosmic Interiors</span>
            <h1 class="display">Interiors designed around your life.</h1>
            <p class="lead">From modular kitchens to full-home design, we shape calm, refined spaces that feel distinctly yours.</p>
            <div class="ci-hero__trust">500+ homes crafted with care.</div>
            <div class="inline-cluster">
                <a href="#" class="btn btn--outline btn--outline-light">Explore Design Gallery</a>
                <a href="{{ route('contact') }}" class="btn btn--secondary">Speak to a Designer</a>
            </div>
        </div>

        <aside class="ci-hero__form" aria-label="Start your project form">
            <h2 class="ci-hero__form-title">Start your project</h2>
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <input id="hero_name" name="name" type="text" placeholder="Enter your name" required>
                <input id="hero_phone" name="phone" type="tel" placeholder="Enter your mobile number" required>
                <select id="hero_city" name="city" required>
                    <option value="">Select your property city</option>
                    <option>Hyderabad</option>
                    <option>Mumbai</option>
                    <option>Bengaluru</option>
                    <option>Chennai</option>
                    <option>Pune</option>
                    <option>Delhi NCR</option>
                </select>
                <button type="submit">Book Consultation</button>
            </form>
        </aside>
    </div>
</section>

<section class="ci-why" aria-label="Why Choose Cosmic Interiors">
    <div class="container">
        <div class="ci-why__header">
            <p class="ci-why__label">Why Choose Cosmic Interiors</p>
            <h2 class="ci-why__heading">
                Designed for confidence,<br>delivered with precision.
            </h2>
        </div>
    </div>
    <div class="ci-why__marquee">
        <div class="ci-why__track">
            <div class="ci-why__set">
                <div class="ci-why__item">
                    <div class="ci-why__icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 3h12l4 6-10 13L2 9z"/>
                            <path d="M2 9h20M6 3l4 6m4 0 4-6"/>
                        </svg>
                    </div>
                    <p class="ci-why__name">Premium Craftsmanship</p>
                </div>
                <div class="ci-why__item">
                    <div class="ci-why__icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 9V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v2"/>
                            <path d="M2 11a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5H2z"/>
                            <path d="M4 16v2M20 16v2"/>
                        </svg>
                    </div>
                    <p class="ci-why__name">Functional Luxury</p>
                </div>
                <div class="ci-why__item">
                    <div class="ci-why__icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="3" width="14" height="18" rx="1.5"/>
                            <path d="M12 3v18"/>
                            <path d="M10 12h.01M14 12h.01"/>
                        </svg>
                    </div>
                    <p class="ci-why__name">Tailored Storage</p>
                </div>
                <div class="ci-why__item">
                    <div class="ci-why__icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 7-7 7 5 5 7-7"/>
                            <path d="m14 4 6 6-2 2-6-6z"/>
                            <path d="m2 21 3-3"/>
                        </svg>
                    </div>
                    <p class="ci-why__name">Personalised Design</p>
                </div>
                <div class="ci-why__item">
                    <div class="ci-why__icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2"/>
                            <path d="M16 2v4M8 2v4M3 10h18"/>
                            <path d="m9 16 2 2 4-4"/>
                        </svg>
                    </div>
                    <p class="ci-why__name">Timely Delivery</p>
                </div>
            </div>
            <span class="ci-why__dot" aria-hidden="true"></span>
            <div class="ci-why__set" aria-hidden="true">
                <div class="ci-why__item">
                    <div class="ci-why__icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 3h12l4 6-10 13L2 9z"/>
                            <path d="M2 9h20M6 3l4 6m4 0 4-6"/>
                        </svg>
                    </div>
                    <p class="ci-why__name">Premium Craftsmanship</p>
                </div>
                <div class="ci-why__item">
                    <div class="ci-why__icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 9V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v2"/>
                            <path d="M2 11a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5H2z"/>
                            <path d="M4 16v2M20 16v2"/>
                        </svg>
                    </div>
                    <p class="ci-why__name">Functional Luxury</p>
                </div>
                <div class="ci-why__item">
                    <div class="ci-why__icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="3" width="14" height="18" rx="1.5"/>
                            <path d="M12 3v18"/>
                            <path d="M10 12h.01M14 12h.01"/>
                        </svg>
                    </div>
                    <p class="ci-why__name">Tailored Storage</p>
                </div>
                <div class="ci-why__item">
                    <div class="ci-why__icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 7-7 7 5 5 7-7"/>
                            <path d="m14 4 6 6-2 2-6-6z"/>
                            <path d="m2 21 3-3"/>
                        </svg>
                    </div>
                    <p class="ci-why__name">Personalised Design</p>
                </div>
                <div class="ci-why__item">
                    <div class="ci-why__icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2"/>
                            <path d="M16 2v4M8 2v4M3 10h18"/>
                            <path d="m9 16 2 2 4-4"/>
                        </svg>
                    </div>
                    <p class="ci-why__name">Timely Delivery</p>
                </div>
            </div>
            <span class="ci-why__dot" aria-hidden="true"></span>
        </div>
    </div>
</section>

<section class="ci-video" aria-label="Cosmic Interiors cinematic showcase">
    <video autoplay muted loop playsinline>
        <source src="{{ asset('Images/homepagevideo.mp4') }}" type="video/mp4">
    </video>
    <div class="ci-video__badge">COSMIC INTERIORS</div>
</section>

<section class="ci-about" aria-label="About Cosmic Interiors">
    <div class="container">
        <div class="ci-about__content">
            <div class="ci-about__text">
                <span class="eyebrow">About Cosmic Interiors</span>
                <h2 class="section-title">Crafting Spaces That Reflect Your Essence</h2>
                <p>At Cosmic Interiors, we believe that exceptional design goes beyond aesthetics—it's about creating environments that harmonize beauty, functionality, and the unique rhythm of your life. With over a decade of expertise, our team of passionate designers transforms homes into sanctuaries of warmth and sophistication.</p>
            </div>

            <div class="ci-about__images">
                <div class="ci-about__image-card">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=400&q=80" alt="Modern living room interior design">
                </div>
                <div class="ci-about__image-card ci-about__image-card--small">
                    <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?w=350&q=80" alt="Luxury interior design details">
                </div>
            </div>
        </div>

        <div class="ci-about__shapes">
            <svg viewBox="0 0 1200 180" class="ci-about__shape-svg" aria-hidden="true">
                <defs>
                    <linearGradient id="shapeGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#735646;stop-opacity:0.15" />
                        <stop offset="50%" style="stop-color:#A5937B;stop-opacity:0.12" />
                        <stop offset="100%" style="stop-color:#735646;stop-opacity:0.15" />
                    </linearGradient>
                </defs>
                <!-- Architectural base line -->
                <line x1="0" y1="120" x2="1200" y2="120" stroke="#A5937B" stroke-width="1" opacity="0.3" />
                <!-- Left architectural frame -->
                <g opacity="0.25">
                    <rect x="80" y="40" width="140" height="100" fill="none" stroke="#735646" stroke-width="1.5" />
                    <line x1="80" y1="70" x2="220" y2="70" stroke="#735646" stroke-width="1" />
                    <line x1="80" y1="90" x2="220" y2="90" stroke="#735646" stroke-width="1" />
                </g>
                <!-- Center decorative arch -->
                <g opacity="0.2">
                    <path d="M 550 140 Q 600 80 650 140" stroke="#A5937B" stroke-width="2" fill="none" stroke-linecap="round" />
                    <circle cx="600" cy="140" r="3" fill="#735646" opacity="0.5" />
                </g>
                <!-- Right modern lines -->
                <g opacity="0.25">
                    <line x1="900" y1="50" x2="900" y2="130" stroke="#735646" stroke-width="1.5" />
                    <line x1="930" y1="60" x2="930" y2="120" stroke="#735646" stroke-width="1" />
                    <line x1="960" y1="70" x2="960" y2="130" stroke="#735646" stroke-width="1" />
                </g>
                <!-- Subtle geometric accents -->
                <circle cx="300" cy="130" r="5" fill="none" stroke="#A5937B" stroke-width="1" opacity="0.3" />
                <circle cx="1000" cy="145" r="4" fill="none" stroke="#735646" stroke-width="1" opacity="0.3" />
            </svg>
        </div>
    </div>
</section>

<section class="ci-showcase" aria-label="Cosmic Interiors Design Showcase">
    <div class="container">
        <header class="ci-showcase__header">
            <span class="eyebrow">Design Showcase</span>
            <h2 class="section-title">Curated Collections of Inspired Spaces</h2>
            <p class="ci-showcase__intro">Explore our diverse portfolio of meticulously designed interiors, from modular kitchens to complete home transformations.</p>
        </header>

        <div class="ci-showcase__tabs" role="tablist">
            <button class="ci-showcase__tab ci-showcase__tab--active" role="tab" aria-selected="true" aria-controls="tab-end-to-end" data-tab="end-to-end">
                End-to-end offerings
            </button>
            <button class="ci-showcase__tab" role="tab" aria-selected="false" aria-controls="tab-modular-kitchen" data-tab="modular-kitchen">
                Modular Kitchen Designs
            </button>
            <button class="ci-showcase__tab" role="tab" aria-selected="false" aria-controls="tab-living-room" data-tab="living-room">
                Living Room Designs
            </button>
            <button class="ci-showcase__tab" role="tab" aria-selected="false" aria-controls="tab-wardrobe" data-tab="wardrobe">
                Wardrobe Designs
            </button>
        </div>

        <div class="ci-showcase__content">
            <!-- End-to-end offerings -->
            <div class="ci-showcase__panel ci-showcase__panel--active" id="tab-end-to-end" role="tabpanel">
                <div class="ci-showcase__gallery">
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=500&q=80" alt="Complete home transformation with modern interiors">
                        <h3 class="ci-showcase__card-title">Full Home Transformation</h3>
                    </div>
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?w=500&q=80" alt="Luxury living space design by Cosmic Interiors">
                        <h3 class="ci-showcase__card-title">Luxury Living Spaces</h3>
                    </div>
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=500&q=80" alt="Contemporary apartment interior design">
                        <h3 class="ci-showcase__card-title">Contemporary Apartments</h3>
                    </div>
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=500&q=80" alt="Premium residential design project">
                        <h3 class="ci-showcase__card-title">Premium Projects</h3>
                    </div>
                </div>
            </div>

            <!-- Modular Kitchen Designs -->
            <div class="ci-showcase__panel" id="tab-modular-kitchen" role="tabpanel">
                <div class="ci-showcase__gallery">
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=500&q=80" alt="Modern modular kitchen design">
                        <h3 class="ci-showcase__card-title">Modern Kitchen Layout</h3>
                    </div>
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=500&q=80" alt="Minimalist kitchen interiors">
                        <h3 class="ci-showcase__card-title">Minimalist Kitchens</h3>
                    </div>
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=500&q=80" alt="Custom modular kitchen solution">
                        <h3 class="ci-showcase__card-title">Custom Solutions</h3>
                    </div>
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?w=500&q=80" alt="Premium kitchen with luxury finishes">
                        <h3 class="ci-showcase__card-title">Luxury Finishes</h3>
                    </div>
                </div>
            </div>

            <!-- Living Room Designs -->
            <div class="ci-showcase__panel" id="tab-living-room" role="tabpanel">
                <div class="ci-showcase__gallery">
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=500&q=80" alt="Contemporary living room design">
                        <h3 class="ci-showcase__card-title">Contemporary Spaces</h3>
                    </div>
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?w=500&q=80" alt="Warm and elegant living area">
                        <h3 class="ci-showcase__card-title">Warm Elegance</h3>
                    </div>
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=500&q=80" alt="Minimalist living room interiors">
                        <h3 class="ci-showcase__card-title">Minimalist Living</h3>
                    </div>
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=500&q=80" alt="Luxury living room design">
                        <h3 class="ci-showcase__card-title">Luxury Interiors</h3>
                    </div>
                </div>
            </div>

            <!-- Wardrobe Designs -->
            <div class="ci-showcase__panel" id="tab-wardrobe" role="tabpanel">
                <div class="ci-showcase__gallery">
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=500&q=80" alt="Modern wardrobe storage solution">
                        <h3 class="ci-showcase__card-title">Modern Storage</h3>
                    </div>
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=500&q=80" alt="Luxury walk-in wardrobe design">
                        <h3 class="ci-showcase__card-title">Walk-in Wardrobes</h3>
                    </div>
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=500&q=80" alt="Contemporary wardrobe interiors">
                        <h3 class="ci-showcase__card-title">Contemporary Designs</h3>
                    </div>
                    <div class="ci-showcase__card">
                        <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?w=500&q=80" alt="Premium wardrobe system">
                        <h3 class="ci-showcase__card-title">Premium Systems</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="ci-showcase__footer">
            <a href="#" class="btn btn--outline">View Full Gallery</a>
        </div>
    </div>
</section>

<section class="ci-estimator" aria-label="Estimate Your Project">
    <div class="container">
        <header class="ci-estimator__header">
            <span class="eyebrow">Estimate Your Project</span>
            <h2 class="section-title">Begin with a clearer sense of your investment</h2>
            <p class="ci-estimator__intro">Choose a calculator to explore interior pricing for your space and get a preliminary estimate.</p>
        </header>

        <div class="ci-estimator__cards">
            <div class="ci-estimator__card ci-estimator__card--home">
                <div class="ci-estimator__card-bg">
                    <svg viewBox="0 0 400 300" aria-hidden="true" class="ci-estimator__abstract">
                        <!-- Soft architectural shapes -->
                        <defs>
                            <linearGradient id="homeGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#D9D3C7;stop-opacity:0.1" />
                                <stop offset="100%" style="stop-color:#A5937B;stop-opacity:0.05" />
                            </linearGradient>
                        </defs>

                        <!-- Background gradient -->
                        <rect width="400" height="300" fill="url(#homeGradient)" />

                        <!-- Architectural elements -->
                        <rect x="50" y="80" width="120" height="80" rx="8" fill="none" stroke="#735646" stroke-width="1" opacity="0.15" />
                        <rect x="60" y="90" width="100" height="60" rx="4" fill="none" stroke="#A5937B" stroke-width="1" opacity="0.1" />

                        <!-- Arched elements -->
                        <path d="M 200 60 Q 250 40 300 60" fill="none" stroke="#40291B" stroke-width="1" opacity="0.08" />
                        <path d="M 220 70 Q 250 50 280 70" fill="none" stroke="#735646" stroke-width="1" opacity="0.12" />

                        <!-- Wall panels -->
                        <rect x="320" y="100" width="60" height="40" rx="2" fill="none" stroke="#D9D3C7" stroke-width="1" opacity="0.1" />
                        <rect x="330" y="110" width="40" height="20" rx="1" fill="none" stroke="#A5937B" stroke-width="1" opacity="0.08" />

                        <!-- Diagonal light shadows -->
                        <path d="M 0 200 L 100 150 L 150 180 L 50 230 Z" fill="#40291B" opacity="0.03" />
                        <path d="M 350 50 L 400 30 L 400 80 L 370 70 Z" fill="#735646" opacity="0.04" />

                        <!-- Soft curves -->
                        <path d="M 150 250 Q 200 220 250 250" fill="none" stroke="#A5937B" stroke-width="1" opacity="0.06" />
                    </svg>
                </div>

                <div class="ci-estimator__card-content">
                    <div class="ci-estimator__card-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M3 10.5 12 3l9 7.5"/>
                            <path d="M5.5 9.5V21h13V9.5"/>
                            <rect x="8" y="12" width="8" height="4" rx="1" fill="none" stroke="currentColor" stroke-width="1"/>
                        </svg>
                    </div>
                    <h3 class="ci-estimator__card-title">Home Interior Price Calculator</h3>
                    <p class="ci-estimator__card-desc">Calculate costs for complete home transformations and room renovations.</p>
                    <a href="{{ route('price-calculators.home-interior-price-calculator') }}" class="btn btn--primary">Start Estimating</a>
                </div>
            </div>

            <div class="ci-estimator__card ci-estimator__card--kitchen">
                <div class="ci-estimator__card-bg">
                    <svg viewBox="0 0 400 300" aria-hidden="true" class="ci-estimator__abstract">
                        <defs>
                            <linearGradient id="kitchenGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#A5937B;stop-opacity:0.08" />
                                <stop offset="100%" style="stop-color:#735646;stop-opacity:0.06" />
                            </linearGradient>
                        </defs>

                        <!-- Background gradient -->
                        <rect width="400" height="300" fill="url(#kitchenGradient)" />

                        <!-- Kitchen cabinet shapes -->
                        <rect x="40" y="120" width="80" height="60" rx="4" fill="none" stroke="#40291B" stroke-width="1" opacity="0.12" />
                        <rect x="50" y="130" width="60" height="40" rx="2" fill="none" stroke="#735646" stroke-width="1" opacity="0.08" />

                        <rect x="280" y="140" width="90" height="50" rx="4" fill="none" stroke="#A5937B" stroke-width="1" opacity="0.1" />
                        <rect x="290" y="150" width="70" height="30" rx="2" fill="none" stroke="#D9D3C7" stroke-width="1" opacity="0.07" />

                        <!-- Countertop lines -->
                        <line x1="40" y1="180" x2="120" y2="180" stroke="#40291B" stroke-width="1" opacity="0.1" />
                        <line x1="280" y1="190" x2="370" y2="190" stroke="#735646" stroke-width="1" opacity="0.08" />

                        <!-- Island shape -->
                        <ellipse cx="200" cy="220" rx="60" ry="30" fill="none" stroke="#A5937B" stroke-width="1" opacity="0.06" />

                        <!-- Wall units -->
                        <rect x="150" y="60" width="100" height="30" rx="2" fill="none" stroke="#D9D3C7" stroke-width="1" opacity="0.09" />
                        <rect x="160" y="70" width="80" height="10" rx="1" fill="none" stroke="#735646" stroke-width="1" opacity="0.06" />

                        <!-- Soft curves and arches -->
                        <path d="M 180 100 Q 200 80 220 100" fill="none" stroke="#40291B" stroke-width="1" opacity="0.05" />
                        <path d="M 160 250 Q 200 230 240 250" fill="none" stroke="#A5937B" stroke-width="1" opacity="0.04" />

                        <!-- Light shadows -->
                        <path d="M 0 280 L 80 240 L 120 260 L 40 300 Z" fill="#735646" opacity="0.03" />
                    </svg>
                </div>

                <div class="ci-estimator__card-content">
                    <div class="ci-estimator__card-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="3" y="6" width="18" height="12" rx="2" fill="none" stroke="currentColor" stroke-width="1"/>
                            <rect x="7" y="10" width="10" height="4" rx="1" fill="none" stroke="currentColor" stroke-width="1"/>
                            <circle cx="9" cy="16" r="1" fill="currentColor"/>
                            <circle cx="15" cy="16" r="1" fill="currentColor"/>
                        </svg>
                    </div>
                    <h3 class="ci-estimator__card-title">Kitchen Price Calculator</h3>
                    <p class="ci-estimator__card-desc">Get estimates for modular kitchens, cabinets, and kitchen renovations.</p>
                    <a href="{{ route('price-calculators.kitchen-price-calculator') }}" class="btn btn--primary">Start Estimating</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ci-process" aria-label="Our Design Process">
    <div class="container">
        <header class="ci-process__header">
            <span class="eyebrow">How We Work</span>
            <h2 class="section-title">A thoughtful journey, designed around you</h2>
            <p class="ci-process__intro">From our first conversation to your final design, we guide you through each step with care and clarity.</p>
        </header>

        <div class="ci-process__steps">
            <!-- Connecting line -->
            <div class="ci-process__connector" aria-hidden="true"></div>

            <div class="ci-process__step ci-process__step--1" data-step="1">
                <div class="ci-process__step-visual">
                    <div class="ci-process__step-icon">
                        <img src="/Images/Business merger-bro.svg" alt="Connect with designer illustration" />
                    </div>
                    <div class="ci-process__step-bg">
                        <svg viewBox="0 0 120 80" aria-hidden="true">
                            <defs>
                                <linearGradient id="step1Gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#D9D3C7;stop-opacity:0.1" />
                                    <stop offset="100%" style="stop-color:#A5937B;stop-opacity:0.05" />
                                </linearGradient>
                            </defs>
                            <rect width="120" height="80" rx="8" fill="url(#step1Gradient)" />
                            <circle cx="30" cy="25" r="8" fill="none" stroke="#735646" stroke-width="1" opacity="0.15" />
                            <circle cx="90" cy="55" r="6" fill="none" stroke="#40291B" stroke-width="1" opacity="0.1" />
                            <path d="M 15 40 Q 60 30 105 40" fill="none" stroke="#A5937B" stroke-width="1" opacity="0.08" />
                        </svg>
                    </div>
                </div>
                <div class="ci-process__step-number">01</div>
                <h3 class="ci-process__step-title">Connect with your designer</h3>
                <p class="ci-process__step-desc">We begin with a warm conversation to understand your vision, lifestyle, and what makes your space feel like home.</p>
            </div>

            <div class="ci-process__step ci-process__step--2" data-step="2">
                <div class="ci-process__step-visual">
                    <div class="ci-process__step-icon">
                        <img src="/Images/Interior design-bro.svg" alt="Explore your space illustration" />
                    </div>
                    <div class="ci-process__step-bg">
                        <svg viewBox="0 0 120 80" aria-hidden="true">
                            <defs>
                                <linearGradient id="step2Gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#A5937B;stop-opacity:0.08" />
                                    <stop offset="100%" style="stop-color:#735646;stop-opacity:0.06" />
                                </linearGradient>
                            </defs>
                            <rect width="120" height="80" rx="8" fill="url(#step2Gradient)" />
                            <rect x="20" y="25" width="35" height="20" rx="2" fill="none" stroke="#40291B" stroke-width="1" opacity="0.12" />
                            <rect x="65" y="35" width="30" height="15" rx="2" fill="none" stroke="#735646" stroke-width="1" opacity="0.1" />
                            <line x1="20" y1="50" x2="95" y2="50" stroke="#D9D3C7" stroke-width="1" opacity="0.08" />
                        </svg>
                    </div>
                </div>
                <div class="ci-process__step-number">02</div>
                <h3 class="ci-process__step-title">Explore your space</h3>
                <p class="ci-process__step-desc">Together we walk through your home, discussing layout, functionality, and the atmosphere you wish to create.</p>
            </div>

            <div class="ci-process__step ci-process__step--3" data-step="3">
                <div class="ci-process__step-visual">
                    <div class="ci-process__step-icon">
                        <img src="/Images/Website Creator-bro.svg" alt="Review design concepts illustration" />
                    </div>
                    <div class="ci-process__step-bg">
                        <svg viewBox="0 0 120 80" aria-hidden="true">
                            <defs>
                                <linearGradient id="step3Gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#735646;stop-opacity:0.07" />
                                    <stop offset="100%" style="stop-color:#40291B;stop-opacity:0.05" />
                                </linearGradient>
                            </defs>
                            <rect width="120" height="80" rx="8" fill="url(#step3Gradient)" />
                            <path d="M 25 20 Q 60 15 95 20" fill="none" stroke="#D9D3C7" stroke-width="1" opacity="0.1" />
                            <path d="M 30 35 Q 60 30 90 35" fill="none" stroke="#A5937B" stroke-width="1" opacity="0.08" />
                            <path d="M 35 50 Q 60 45 85 50" fill="none" stroke="#735646" stroke-width="1" opacity="0.06" />
                            <circle cx="50" cy="30" r="3" fill="none" stroke="#40291B" stroke-width="1" opacity="0.12" />
                            <circle cx="70" cy="45" r="2" fill="none" stroke="#A5937B" stroke-width="1" opacity="0.1" />
                        </svg>
                    </div>
                </div>
                <div class="ci-process__step-number">03</div>
                <h3 class="ci-process__step-title">Review design concepts</h3>
                <p class="ci-process__step-desc">We present beautiful visualisations and mood boards, refining the design until it perfectly captures your vision.</p>
            </div>

            <div class="ci-process__step ci-process__step--4" data-step="4">
                <div class="ci-process__step-visual">
                    <div class="ci-process__step-icon">
                        <img src="/Images/Cohort analysis-bro.svg" alt="Receive your estimate illustration" />
                    </div>
                    <div class="ci-process__step-bg">
                        <svg viewBox="0 0 120 80" aria-hidden="true">
                            <defs>
                                <linearGradient id="step4Gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#40291B;stop-opacity:0.06" />
                                    <stop offset="100%" style="stop-color:#735646;stop-opacity:0.08" />
                                </linearGradient>
                            </defs>
                            <rect width="120" height="80" rx="8" fill="url(#step4Gradient)" />
                            <rect x="25" y="25" width="70" height="30" rx="2" fill="none" stroke="#D9D3C7" stroke-width="1" opacity="0.12" />
                            <line x1="35" y1="35" x2="85" y2="35" stroke="#A5937B" stroke-width="1" opacity="0.1" />
                            <line x1="35" y1="42" x2="75" y2="42" stroke="#735646" stroke-width="1" opacity="0.08" />
                            <line x1="35" y1="49" x2="80" y2="49" stroke="#40291B" stroke-width="1" opacity="0.06" />
                        </svg>
                    </div>
                </div>
                <div class="ci-process__step-number">04</div>
                <h3 class="ci-process__step-title">Receive your estimate</h3>
                <p class="ci-process__step-desc">We provide a transparent, detailed estimate with clear timelines and next steps to bring your vision to life.</p>
            </div>
        </div>

        <div class="ci-process__cta">
            <a href="{{ route('contact') }}" class="btn btn--primary">Start Your Journey</a>
        </div>
    </div>
</section>

<section class="ci-design-process" aria-label="From Design to Move-In Process">
    <div class="container">
        <header class="ci-design-process__header">
            <span class="eyebrow">From Design to Move-In</span>
            <h2 class="section-title">Your complete interior journey</h2>
            <p class="ci-design-process__intro">Six thoughtful steps that transform your vision into reality, from initial concept to final move-in.</p>
        </header>

        <div class="ci-design-process__stepper">
            <!-- Step indicators -->
            <div class="ci-design-process__indicators">
                <div class="ci-design-process__line" aria-hidden="true"></div>
                <div class="ci-design-process__circles">
                    <button class="ci-design-process__circle ci-design-process__circle--active" data-step="1" aria-label="Step 1: Initial Consultation">
                        <span class="ci-design-process__circle-number">1</span>
                    </button>
                    <button class="ci-design-process__circle" data-step="2" aria-label="Step 2: Design Concept">
                        <span class="ci-design-process__circle-number">2</span>
                    </button>
                    <button class="ci-design-process__circle" data-step="3" aria-label="Step 3: Detailed Planning">
                        <span class="ci-design-process__circle-number">3</span>
                    </button>
                    <button class="ci-design-process__circle" data-step="4" aria-label="Step 4: Execution">
                        <span class="ci-design-process__circle-number">4</span>
                    </button>
                    <button class="ci-design-process__circle" data-step="5" aria-label="Step 5: Installation">
                        <span class="ci-design-process__circle-number">5</span>
                    </button>
                    <button class="ci-design-process__circle" data-step="6" aria-label="Step 6: Move-In Ready">
                        <span class="ci-design-process__circle-number">6</span>
                    </button>
                </div>
            </div>

            <!-- Navigation arrows -->
            <button class="ci-design-process__nav ci-design-process__nav--prev" aria-label="Previous step" disabled>
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M15 18L9 12L15 6"/>
                </svg>
            </button>
            <button class="ci-design-process__nav ci-design-process__nav--next" aria-label="Next step">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M9 18L15 12L9 6"/>
                </svg>
            </button>

            <!-- Step content -->
            <div class="ci-design-process__content">
                <!-- Step 1 -->
                <div class="ci-design-process__step ci-design-process__step--active" data-step="1">
                    <div class="ci-design-process__step-text">
                        <h3 class="ci-design-process__step-title">Initial Consultation</h3>
                        <p class="ci-design-process__step-desc">We begin with a comprehensive discussion about your lifestyle, preferences, and vision for your space. This helps us understand what makes your home uniquely yours.</p>
                    </div>
                    <div class="ci-design-process__step-visual">
                        <div class="ci-design-process__illustration-card">
                            <img src="/Images/Business merger-bro.svg" alt="Initial consultation illustration" />
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="ci-design-process__step" data-step="2">
                    <div class="ci-design-process__step-text">
                        <h3 class="ci-design-process__step-title">Design Concept</h3>
                        <p class="ci-design-process__step-desc">Our designers create initial mood boards and concept sketches that capture your style preferences and functional requirements.</p>
                    </div>
                    <div class="ci-design-process__step-visual">
                        <div class="ci-design-process__illustration-card">
                            <img src="/Images/Interior design-bro.svg" alt="Design concept illustration" />
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="ci-design-process__step" data-step="3">
                    <div class="ci-design-process__step-text">
                        <h3 class="ci-design-process__step-title">Detailed Planning</h3>
                        <p class="ci-design-process__step-desc">We develop detailed floor plans, elevations, and specifications. This includes material selections, color palettes, and furniture layouts.</p>
                    </div>
                    <div class="ci-design-process__step-visual">
                        <div class="ci-design-process__illustration-card">
                            <img src="/Images/Website Creator-bro.svg" alt="Detailed planning illustration" />
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="ci-design-process__step" data-step="4">
                    <div class="ci-design-process__step-text">
                        <h3 class="ci-design-process__step-title">Execution</h3>
                        <p class="ci-design-process__step-desc">Our project management team coordinates with craftsmen and suppliers to bring your design to life with precision and care.</p>
                    </div>
                    <div class="ci-design-process__step-visual">
                        <div class="ci-design-process__illustration-card">
                            <img src="/Images/Cohort analysis-bro.svg" alt="Execution illustration" />
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="ci-design-process__step" data-step="5">
                    <div class="ci-design-process__step-text">
                        <h3 class="ci-design-process__step-title">Installation</h3>
                        <p class="ci-design-process__step-desc">Professional installation ensures every element is placed perfectly. We maintain quality control throughout the entire process.</p>
                    </div>
                    <div class="ci-design-process__step-visual">
                        <div class="ci-design-process__illustration-card">
                            <img src="/Images/Interior design-bro.svg" alt="Installation illustration" />
                        </div>
                    </div>
                </div>

                <!-- Step 6 -->
                <div class="ci-design-process__step" data-step="6">
                    <div class="ci-design-process__step-text">
                        <h3 class="ci-design-process__step-title">Move-In Ready</h3>
                        <p class="ci-design-process__step-desc">Your space is complete and ready for you to enjoy. We provide final walkthroughs and ensure everything meets our high standards.</p>
                    </div>
                    <div class="ci-design-process__step-visual">
                        <div class="ci-design-process__illustration-card">
                            <img src="/Images/Business merger-bro.svg" alt="Move-in ready illustration" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ci-design-process__cta">
            <a href="{{ route('contact') }}" class="btn btn--primary">Begin Your Transformation</a>
        </div>
    </div>
</section>

<section class="ci-luxe" aria-label="Cosmic Interiors Luxe">
    <div class="ci-luxe__bg" aria-hidden="true">
        <img src="/Images/homelux.jpg" alt="Cosmic Interiors Luxe space">
    </div>
    <div class="ci-luxe__card">
        <p class="ci-luxe__intro">Introducing</p>
        <div class="ci-luxe__brand" aria-label="Cosmic Interiors luxe">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M12 2L15 9H22L16.5 13.5L18.5 21L12 17L5.5 21L7.5 13.5L2 9H9L12 2Z" fill="currentColor"/>
            </svg>
            <span class="ci-luxe__brand-name">Cosmic Interiors</span>
            <span class="ci-luxe__brand-script">luxe</span>
        </div>
        <a href="{{ route('contact') }}" class="ci-luxe__btn">Enter the world of Luxe</a>
    </div>
</section>

<section class="ci-solutions" aria-label="End-to-end interior solutions">
    <div class="container">
        <h2 class="ci-solutions__heading">End-to-end interior solutions</h2>

        <div class="ci-solutions__grid">
            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="10" y="10" width="16" height="8"/>
                        <rect x="30" y="10" width="24" height="8"/>
                        <path d="M10 30h44v14H34V34H10z"/>
                        <line x1="24" y1="34" x2="24" y2="44"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">Modular Kitchen</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="14" y="8" width="36" height="48"/>
                        <line x1="32" y1="8" x2="32" y2="56"/>
                        <line x1="28" y1="30" x2="28" y2="36"/>
                        <line x1="36" y1="30" x2="36" y2="36"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">Storage &amp; Wardrobe</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="10" y="8" width="44" height="48"/>
                        <line x1="10" y1="24" x2="54" y2="24"/>
                        <line x1="10" y1="40" x2="54" y2="40"/>
                        <line x1="32" y1="8" x2="32" y2="56"/>
                        <path d="M16 34c2-3 6-3 8 0"/>
                        <path d="M36 34h10v6H36z"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">Crockery Units</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="10" y="24" width="44" height="16" rx="3"/>
                        <rect x="18" y="40" width="28" height="10" rx="2"/>
                        <line x1="14" y1="40" x2="14" y2="48"/>
                        <line x1="50" y1="40" x2="50" y2="48"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">Space Saving Furniture</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="12" y="30" width="40" height="18" rx="2"/>
                        <rect x="20" y="10" width="24" height="14" rx="1"/>
                        <line x1="32" y1="24" x2="32" y2="30"/>
                        <line x1="24" y1="38" x2="40" y2="38"/>
                        <line x1="32" y1="30" x2="32" y2="48"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">TV Units</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="12" y="24" width="40" height="6"/>
                        <line x1="16" y1="30" x2="16" y2="52"/>
                        <line x1="48" y1="30" x2="48" y2="52"/>
                        <rect x="34" y="12" width="14" height="10"/>
                        <rect x="20" y="34" width="14" height="16"/>
                        <line x1="20" y1="42" x2="34" y2="42"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">Study Tables</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M10 18h44"/>
                        <path d="M14 18 20 34h24l6-16"/>
                        <circle cx="32" cy="28" r="3"/>
                        <path d="M24 42h16"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">False Ceiling</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="32" y1="8" x2="32" y2="20"/>
                        <circle cx="32" cy="8" r="3"/>
                        <path d="M18 26h28l-4 12H22z"/>
                        <line x1="24" y1="42" x2="40" y2="42"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">Lights</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M16 20h24a6 6 0 0 1 6 6v24H22"/>
                        <path d="M16 20a6 6 0 0 0 0 12h8"/>
                        <line x1="30" y1="28" x2="32" y2="28"/>
                        <line x1="36" y1="34" x2="38" y2="34"/>
                        <line x1="30" y1="40" x2="32" y2="40"/>
                        <line x1="36" y1="46" x2="38" y2="46"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">Wallpaper</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="18" y="12" width="24" height="10" rx="2"/>
                        <path d="M42 17h6v8l-10 8"/>
                        <rect x="20" y="34" width="8" height="16" rx="1"/>
                        <line x1="28" y1="38" x2="38" y2="30"/>
                        <path d="M14 24v8"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">Wall Paint</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="16" y="34" width="32" height="16" rx="2"/>
                        <rect x="20" y="10" width="24" height="14" rx="1"/>
                        <path d="M24 38c0 4 16 4 16 0"/>
                        <line x1="32" y1="30" x2="32" y2="34"/>
                        <path d="M32 30h6"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">Bathroom</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M16 52V26a16 16 0 0 1 32 0v26"/>
                        <line x1="12" y1="52" x2="52" y2="52"/>
                        <line x1="16" y1="46" x2="48" y2="46"/>
                        <line x1="20" y1="40" x2="44" y2="40"/>
                        <path d="M28 32h8"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">Pooja Unit</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="24" y="8" width="16" height="14" rx="1"/>
                        <rect x="14" y="30" width="36" height="6"/>
                        <line x1="18" y1="36" x2="18" y2="52"/>
                        <line x1="46" y1="36" x2="46" y2="52"/>
                        <line x1="24" y1="33" x2="40" y2="33"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">Foyer Designs</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M16 26h20a4 4 0 0 1 4 4v10H16z"/>
                        <path d="M16 26v-8h18a4 4 0 0 1 4 4v4"/>
                        <line x1="40" y1="30" x2="46" y2="30"/>
                        <line x1="46" y1="30" x2="46" y2="38"/>
                        <circle cx="18" cy="44" r="2"/>
                        <circle cx="28" cy="44" r="2"/>
                        <circle cx="38" cy="44" r="2"/>
                        <circle cx="48" cy="44" r="2"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">Movable Furniture</p>
            </div>

            <div class="ci-solutions__item">
                <div class="ci-solutions__icon">
                    <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="14" y="34" width="34" height="12" rx="2"/>
                        <line x1="50" y1="24" x2="50" y2="46"/>
                        <line x1="56" y1="24" x2="56" y2="46"/>
                        <line x1="50" y1="30" x2="56" y2="30"/>
                        <line x1="50" y1="36" x2="56" y2="36"/>
                        <line x1="50" y1="42" x2="56" y2="42"/>
                        <path d="M22 14l2 4h4l-3 3 1 4-4-2-4 2 1-4-3-3h4z"/>
                    </svg>
                </div>
                <p class="ci-solutions__label">Kids Bedroom</p>
            </div>
        </div>

        <div class="ci-solutions__cta">
            <a href="{{ route('contact') }}" class="btn btn--primary">BOOK FREE DESIGN SESSION</a>
        </div>
    </div>
</section>

<section class="ci-testimonials" aria-label="Client testimonials">
    <div class="ci-testimonials__circle" aria-hidden="true"></div>
    <div class="container" data-ci-testimonials>
        <header class="ci-testimonials__header">
            <span class="eyebrow">What Our Clients Say</span>
            <h2 class="section-title">Stories from the homes we've shaped</h2>
        </header>

        <div class="ci-testimonials__card">
            <div class="ci-testimonials__left">
                <svg class="ci-testimonials__curve" viewBox="0 0 240 520" preserveAspectRatio="none" aria-hidden="true">
                    <path d="M78 24 C170 120, 170 220, 78 320 C22 380, 24 450, 96 500" />
                </svg>

                <div class="ci-testimonials__rows" aria-label="Client list">
                    <button type="button" class="ci-testimonials__row ci-testimonials__row--active" data-index="0" aria-label="Show testimonial from Priya Sharma">
                        <img class="ci-testimonials__avatar-image" src="https://i.pravatar.cc/60?img=1" alt="Priya Sharma">
                        <span class="ci-testimonials__row-body">
                            <span class="ci-testimonials__name">Priya Sharma</span>
                            <span class="ci-testimonials__meta"><span class="ci-testimonials__star">★</span> 4.9 | 29 Aug 2017</span>
                        </span>
                    </button>

                    <button type="button" class="ci-testimonials__row" data-index="1" aria-label="Show testimonial from Rahul Mehta">
                        <img class="ci-testimonials__avatar-image" src="https://i.pravatar.cc/60?img=2" alt="Rahul Mehta">
                        <span class="ci-testimonials__row-body">
                            <span class="ci-testimonials__name">Rahul Mehta</span>
                            <span class="ci-testimonials__meta"><span class="ci-testimonials__star">★</span> 4.9 | 29 Aug 2017</span>
                        </span>
                    </button>

                    <button type="button" class="ci-testimonials__row" data-index="2" aria-label="Show testimonial from Ananya Reddy">
                        <img class="ci-testimonials__avatar-image" src="https://i.pravatar.cc/60?img=3" alt="Ananya Reddy">
                        <span class="ci-testimonials__row-body">
                            <span class="ci-testimonials__name">Ananya Reddy</span>
                            <span class="ci-testimonials__meta"><span class="ci-testimonials__star">★</span> 4.9 | 29 Aug 2017</span>
                        </span>
                    </button>

                    <button type="button" class="ci-testimonials__row" data-index="3" aria-label="Show testimonial from Vikram Nair">
                        <img class="ci-testimonials__avatar-image" src="https://i.pravatar.cc/60?img=4" alt="Vikram Nair">
                        <span class="ci-testimonials__row-body">
                            <span class="ci-testimonials__name">Vikram Nair</span>
                            <span class="ci-testimonials__meta"><span class="ci-testimonials__star">★</span> 4.9 | 29 Aug 2017</span>
                        </span>
                    </button>

                    <button type="button" class="ci-testimonials__row" data-index="4" aria-label="Show testimonial from Sneha Iyer">
                        <img class="ci-testimonials__avatar-image" src="https://i.pravatar.cc/60?img=5" alt="Sneha Iyer">
                        <span class="ci-testimonials__row-body">
                            <span class="ci-testimonials__name">Sneha Iyer</span>
                            <span class="ci-testimonials__meta"><span class="ci-testimonials__star">★</span> 4.9 | 29 Aug 2017</span>
                        </span>
                    </button>
                </div>
            </div>

            <div class="ci-testimonials__right">
                <p class="ci-testimonials__label">Customer Reviews</p>
                <span class="ci-testimonials__label-line" aria-hidden="true"></span>

                <span class="ci-testimonials__quote-mark">“</span>
                <div class="ci-testimonials__quote-content" data-ci-testimonials-content>
                    <p class="ci-testimonials__quote" data-ci-testimonials-quote>Cosmic Interiors transformed our apartment into a sanctuary. Every detail was thoughtfully considered and the team was incredibly professional throughout.</p>
                    <p class="ci-testimonials__author" data-ci-testimonials-author>Priya Sharma</p>
                    <p class="ci-testimonials__project" data-ci-testimonials-project>Hyderabad | Full Home Design</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ci-faq" aria-label="Frequently Asked Questions">
    <div class="container">
        <h2 class="ci-faq__heading">Frequently Asked Questions</h2>

        <div class="ci-faq__list" data-faq>
            <article class="ci-faq__item faq-item">
                <button type="button" class="ci-faq__trigger faq-trigger">
                    <span class="ci-faq__question">How do I get started with Cosmic Interiors?</span>
                    <svg class="ci-faq__chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#8B5E3C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 9l6 6 6-6"/>
                    </svg>
                </button>
                <div class="ci-faq__panel faq-panel">
                    <div class="ci-faq__answer faq-panel__inner">Simply book a free consultation through our website or give us a call. One of our experienced designers will reach out to understand your vision, space requirements, and budget. From there we take care of everything — design, execution and delivery.</div>
                </div>
            </article>

            <article class="ci-faq__item faq-item">
                <button type="button" class="ci-faq__trigger faq-trigger">
                    <span class="ci-faq__question">How long does a typical interior project take?</span>
                    <svg class="ci-faq__chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#8B5E3C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 9l6 6 6-6"/>
                    </svg>
                </button>
                <div class="ci-faq__panel faq-panel">
                    <div class="ci-faq__answer faq-panel__inner">Timelines vary based on the scope of work. A modular kitchen typically takes 4 to 6 weeks, while a complete home transformation can take between 10 and 14 weeks. We share a detailed project timeline at the start so you always know what to expect.</div>
                </div>
            </article>

            <article class="ci-faq__item faq-item">
                <button type="button" class="ci-faq__trigger faq-trigger">
                    <span class="ci-faq__question">What does the Cosmic Interiors design process look like?</span>
                    <svg class="ci-faq__chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#8B5E3C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 9l6 6 6-6"/>
                    </svg>
                </button>
                <div class="ci-faq__panel faq-panel">
                    <div class="ci-faq__answer faq-panel__inner">We follow a thoughtful 6-step journey — initial consultation, design concept, detailed planning, execution, installation, and final move-in. At every stage your dedicated designer keeps you informed, involved, and confident.</div>
                </div>
            </article>

            <article class="ci-faq__item faq-item">
                <button type="button" class="ci-faq__trigger faq-trigger">
                    <span class="ci-faq__question">Can I visit a Cosmic Interiors experience centre?</span>
                    <svg class="ci-faq__chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#8B5E3C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 9l6 6 6-6"/>
                    </svg>
                </button>
                <div class="ci-faq__panel faq-panel">
                    <div class="ci-faq__answer faq-panel__inner">Yes, we have experience centres in Hyderabad, Mumbai, and Bengaluru. You can explore material swatches, furniture samples, and full design mockups in person. Simply book a visit through our contact page and we will have a designer ready for you.</div>
                </div>
            </article>

            <article class="ci-faq__item faq-item">
                <button type="button" class="ci-faq__trigger faq-trigger">
                    <span class="ci-faq__question">What services does Cosmic Interiors offer?</span>
                    <svg class="ci-faq__chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#8B5E3C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 9l6 6 6-6"/>
                    </svg>
                </button>
                <div class="ci-faq__panel faq-panel">
                    <div class="ci-faq__answer faq-panel__inner">We offer complete end-to-end interior solutions — modular kitchens, wardrobes, living rooms, bedrooms, home offices, bathrooms, false ceilings, lighting design, wall treatments, pooja units, and more. Everything is handled under one roof with a single point of contact.</div>
                </div>
            </article>

            <article class="ci-faq__item faq-item">
                <button type="button" class="ci-faq__trigger faq-trigger">
                    <span class="ci-faq__question">Are your designs fully customisable to my taste?</span>
                    <svg class="ci-faq__chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#8B5E3C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 9l6 6 6-6"/>
                    </svg>
                </button>
                <div class="ci-faq__panel faq-panel">
                    <div class="ci-faq__answer faq-panel__inner">Absolutely. Every space we design is created entirely around you — your lifestyle, your preferences, and your personality. We do not work with pre-built templates. From layout and materials to colours and finishes, every single decision is made with your unique vision in mind.</div>
                </div>
            </article>
        </div>
    </div>
</section>
