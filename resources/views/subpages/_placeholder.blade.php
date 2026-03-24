<section class="section section--alt section--tight">
    <div class="container">
        <header class="section-header">
            <span class="eyebrow">{{ $category }}</span>
            <h1 class="section-title">{{ $pageTitle }}</h1>
            <p class="section-desc">{{ $pageSubtitle }}</p>
        </header>
    </div>
</section>

<section class="section">
    <div class="container">
        <header class="section-header">
            <span class="eyebrow">Overview</span>
            <h2 class="section-title">Page structure placeholder</h2>
            <p class="section-desc">This section is reserved for future curated content specific to {{ strtolower($pageTitle) }}.</p>
        </header>

        <div class="grid-3">
            <article class="card">
                <h3 class="card-title">Featured Inspirations</h3>
                <p class="card-text">Placeholder module for curated inspiration highlights and visual references.</p>
            </article>
            <article class="card">
                <h3 class="card-title">Design Highlights</h3>
                <p class="card-text">Placeholder module for key planning, layout, and material notes.</p>
            </article>
            <article class="card">
                <h3 class="card-title">Project Insights</h3>
                <p class="card-text">Placeholder module for practical insights and implementation guidance.</p>
            </article>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container content-block">
        <div class="content-block__copy">
            <span class="eyebrow">Why Cosmic Interiors</span>
            <h2>Consistent premium standards across every page.</h2>
            <p class="section-desc">This placeholder block can be replaced later with page-specific messaging, comparisons, and conversion content.</p>
            <a href="{{ route('contact') }}" class="btn btn--primary">Book Consultation</a>
        </div>
        <div class="grid-2">
            <article class="card">
                <h3 class="card-title">Consultation Ready</h3>
                <p class="card-text">Space for lead-oriented content and quick qualification prompts.</p>
            </article>
            <article class="card">
                <h3 class="card-title">Expandable Modules</h3>
                <p class="card-text">Space for galleries, FAQs, tools, or downloadable resources.</p>
            </article>
        </div>
    </div>
</section>

<section class="section section--dark dark-invert section--tight">
    <div class="container container--narrow">
        <header class="section-header section-header--center">
            <span class="eyebrow">FAQ Placeholder</span>
            <h2 class="section-title">Common questions for this page</h2>
            <p class="section-desc">Reserved for future FAQ entries tailored to {{ strtolower($pageTitle) }}.</p>
        </header>
    </div>
</section>
