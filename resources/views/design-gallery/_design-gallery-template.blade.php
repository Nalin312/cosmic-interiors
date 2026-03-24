@php
    $pageTitle = $pageTitle ?? 'Home Interiors';
    $heroHeading = $heroHeading ?? ($pageTitle . ' Designs');
    $heroImage = $heroImage ?? asset('Images/homelux.jpg');

    $designCards = $designCards ?? [];

    $designerCards = $designerCards ?? [
        ['name' => 'Rhea Kapoor', 'role' => 'Complete home specialist - 8 years', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
        ['name' => 'Arjun Nair', 'role' => 'Modular design expert - 10 years', 'image' => asset('Images/d92e9717-99e7-4510-b01d-2935528e659e.jfif')],
        ['name' => 'Asha Menon', 'role' => 'Storage planning lead - 9 years', 'image' => asset('Images/cd1e9de9-0b61-43ca-a37d-ca746a70993f.jfif')],
        ['name' => 'Vihaan Rao', 'role' => 'Spatial styling specialist - 7 years', 'image' => asset('Images/homelux.jpg')],
    ];

    $storyCards = $storyCards ?? [
        ['title' => 'A warm neutral home with curated luxury details', 'image' => asset('Images/homelux.jpg')],
        ['title' => 'This compact home delivers premium utility without clutter', 'image' => asset('Images/d92e9717-99e7-4510-b01d-2935528e659e.jfif')],
        ['title' => 'Elegant transformation with soft textures and clean lines', 'image' => asset('Images/4f7aed01-057c-4c2b-b5b9-8780354644d2.jfif')],
        ['title' => 'Minimal kitchen updated with practical storage layers', 'image' => asset('Images/2485cf12-1706-456a-a104-a41ad4e21bb0.jfif')],
        ['title' => 'Entry and wardrobe fusion for a space-smart home', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
        ['title' => 'Long storage strategy that keeps visual lines clean', 'image' => asset('Images/c1e19c71-6953-40e3-8002-e64cf1ff3971.jfif')],
    ];

    $testimonialSlides = $testimonialSlides ?? [
        ['chip' => 'Priya', 'name' => 'Priya Sharma', 'meta' => 'Hyderabad - Full Home Design', 'quote' => 'Cosmic Interiors transformed our apartment into a sanctuary. Every detail was thoughtfully considered and the team was incredibly professional throughout.', 'image' => asset('Images/779c4e03-c3bf-42c5-afe4-1138b763f65d.jfif')],
        ['chip' => 'Rahul', 'name' => 'Rahul Mehta', 'meta' => 'Mumbai - Modular Kitchen', 'quote' => 'The kitchen they designed for us is beyond what we imagined. Functional, beautiful and crafted with such precision.', 'image' => asset('Images/dc210543-f742-4489-9812-cd85c989fb08.jfif')],
        ['chip' => 'Ananya', 'name' => 'Ananya Reddy', 'meta' => 'Bengaluru - Living Room', 'quote' => 'From the first consultation to the final reveal, the experience was seamless. Our living room now feels like it belongs in a design magazine.', 'image' => asset('Images/homelux.jpg')],
        ['chip' => 'Vikram', 'name' => 'Vikram Nair', 'meta' => 'Chennai - Master Bedroom', 'quote' => 'They listened to every requirement and delivered a bedroom that feels personal, calm and luxurious at the same time.', 'image' => asset('Images/4f7aed01-057c-4c2b-b5b9-8780354644d2.jfif')],
        ['chip' => 'Sneha', 'name' => 'Sneha Iyer', 'meta' => 'Hyderabad - Wardrobe Design', 'quote' => 'The wardrobe system they built is incredibly smart and elegant. It fits our space perfectly and looks stunning.', 'image' => asset('Images/c1e19c71-6953-40e3-8002-e64cf1ff3971.jfif')],
    ];

    $testimonialSlidesJs = array_map(function ($slide) {
        return [
            'quote' => $slide['quote'],
            'name' => $slide['name'],
            'meta' => $slide['meta'],
            'image' => $slide['image'],
        ];
    }, $testimonialSlides);

    $faqItems = $faqItems ?? [
        ['q' => 'How do I start my project with Cosmic Interiors?', 'a' => 'Book a free design session, share your floor plan and we provide concept direction, estimate and timeline milestones.'],
        ['q' => 'Can I choose only selected rooms?', 'a' => 'Yes, you can pick room-wise packages while keeping one coordinated design direction.'],
        ['q' => 'How long does a complete project take?', 'a' => 'Timeline depends on scope and approvals, but we share a clear schedule from design freeze to handover.'],
    ];

    $cities = $cities ?? [
        ['name' => 'Bangalore', 'route' => route('cities.bangalore')],
        ['name' => 'Hyderabad', 'route' => route('cities.hyderabad')],
        ['name' => 'Chennai', 'route' => route('cities.chennai')],
        ['name' => 'Mumbai', 'route' => route('cities.mumbai')],
    ];

    $heroCtaText = $heroCtaText ?? 'Book Free Design Session';
    $heroSubheading = $heroSubheading ?? null;

    $trendingEyebrow = $trendingEyebrow ?? ('Trending ' . $pageTitle . ' Designs');
    $trendingHeading = $trendingHeading ?? ('Popular concepts for ' . strtolower($pageTitle));
    $trendingDescription = $trendingDescription ?? 'Curated concepts in the same section flow, adapted for Cosmic Interiors.';
    $trendingLoadMoreText = $trendingLoadMoreText ?? null;

    $whyEyebrow = $whyEyebrow ?? "Why Choose Cosmic Interiors? Here's Why!";
    $whyHeading = $whyHeading ?? 'Delivery confidence with premium execution standards';

    $estimateHeading = $estimateHeading ?? 'Get a Free, Instant Estimate for Your Home';
    $estimateDescription = $estimateDescription ?? 'Get a room-wise budget snapshot and connect with a Cosmic design expert today.';

    $designersEyebrow = $designersEyebrow ?? 'Meet Our Expert Designers';
    $designersHeading = $designersHeading ?? 'The minds behind every cosmic transformation';

    $homesEyebrow = $homesEyebrow ?? '55000+ Homes Designed with Love';
    $homesHeading = $homesHeading ?? 'Customer stories from concept to handover';
    $homesDescription = $homesDescription ?? null;

    $processEyebrow = $processEyebrow ?? 'From Design to Move-In';
    $processHeading = $processHeading ?? ('Our 6-step process for complete ' . strtolower($pageTitle));
    $processSteps = $processSteps ?? [
        ['title' => 'Meet Your Designer', 'description' => 'Share ideas and floor plan for concepts and estimate.'],
        ['title' => 'Book Your Order', 'description' => 'Confirm scope by paying initial booking amount.'],
        ['title' => 'Finalize Design', 'description' => 'Freeze materials, finishes and color combinations.'],
        ['title' => 'Factory Production', 'description' => 'Approved design moves to production with checks.'],
        ['title' => 'Dispatch and Install', 'description' => 'Modules are dispatched and installed by experts.'],
        ['title' => 'Handover', 'description' => 'Final quality verification and move-in handover.'],
    ];

    $storiesEyebrow = $storiesEyebrow ?? 'Stories Behind The Designs';
    $storiesHeading = $storiesHeading ?? 'Real homes and real transformation journeys';
    $storiesDescription = $storiesDescription ?? null;

    $citiesEyebrow = $citiesEyebrow ?? 'Find Us In Your City';
    $citiesHeading = $citiesHeading ?? 'Explore our design services across India';
    $citiesDescription = $citiesDescription ?? null;
    $citiesSectionClass = $citiesSectionClass ?? '';

    $faqEyebrow = $faqEyebrow ?? 'FAQs';
    $faqHeading = $faqHeading ?? ('Frequently asked questions about ' . strtolower($pageTitle));
    $faqSectionClass = $faqSectionClass ?? '';

    $ctaHeading = $ctaHeading ?? ('Ready to begin your ' . strtolower($pageTitle) . ' journey?');
    $ctaDescription = $ctaDescription ?? 'Book your free consultation and get a room-by-room concept roadmap from Cosmic Interiors.';
@endphp

@section('styles')
<style>
.ci-dg {
    --c1: #F2EFEA;
    --c2: #D9D3C7;
    --c3: #A5937B;
    --c4: #735646;
    --c5: #40291B;
    background: var(--c1);
}

.ci-dg,
.ci-dg-crumb,
.ci-dg-light,
.ci-dg-light--alt,
.ci-dg-faq,
.ci-dg-cta {
    background: #F2EFEA;
}

.ci-dg [data-reveal] {
    animation: ci-dg-fade 0.7s ease both;
}

@keyframes ci-dg-fade {
    from { opacity: 0; transform: translateY(12px); }
    to { opacity: 1; transform: none; }
}

.ci-dg .sec {
    padding: 74px 0;
    border-top: 1px solid color-mix(in srgb, var(--c3), transparent 76%);
}
.ci-dg .head { text-align: center; max-width: 760px; margin: 0 auto 30px; }
.ci-dg .head h2 { margin: 0 0 8px; }
.ci-dg .head p { margin: 0; line-height: 1.75; }
.ci-dg .eyebrow { color: var(--c4); }
.ci-dg .eyebrow::before { background: var(--c4); }

.ci-dg-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid transparent;
    border-radius: 999px;
    padding: 13px 26px;
    font-family: var(--font-sans);
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.11em;
    text-transform: uppercase;
    transition: transform 0.25s ease, background-color 0.25s ease, border-color 0.25s ease, color 0.25s ease;
}

.ci-dg-btn:hover { transform: translateY(-2px); }
.ci-dg-btn--solid { background: var(--c5); border-color: var(--c5); color: var(--c1); }
.ci-dg-btn--solid:hover { background: var(--c4); border-color: var(--c4); }
.ci-dg-btn--outline { border-color: var(--c4); color: var(--c4); background: transparent; }
.ci-dg-btn--outline:hover { background: var(--c4); color: var(--c1); }

.ci-dg-hero {
    min-height: 66vh;
    padding: 74px 0;
    display: flex;
    align-items: flex-end;
    position: relative;
    isolation: isolate;
    border-bottom: 1px solid var(--c3);
    background: url('{{ $heroImage }}') center / cover no-repeat;
}

.ci-dg-hero::after {
    display: none;
}

.ci-dg-hero h1 {
    margin: 0 0 22px;
    color: var(--c1);
    font-size: clamp(2.2rem, 5vw, 4.2rem);
    line-height: 1.04;
    max-width: 14ch;
    text-shadow: 0 4px 14px rgba(64, 41, 27, 0.4);
}

.ci-dg-hero p {
    margin: -10px 0 18px;
    color: rgba(242, 239, 234, 0.92);
    font: 500 1.02rem/1.6 var(--font-sans);
    max-width: 52ch;
}

.ci-dg-crumb {
    padding: 14px 0;
    background: var(--c1);
    border-bottom: 1px solid var(--c3);
}

.ci-dg-crumb ol {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    color: var(--c4);
    font: 600 11px var(--font-sans);
    letter-spacing: 0.08em;
    text-transform: uppercase;
}

.ci-dg-crumb li+li::before { content: '/'; margin-right: 8px; color: var(--c5); }
.ci-dg-crumb li:last-child { color: var(--c5); }

.ci-dg-light { background: var(--c1); }
.ci-dg-light--alt { background: var(--c1); }
.ci-dg-dark { background: linear-gradient(135deg, var(--c5) 0%, var(--c4) 100%); color: var(--c1); }
.ci-dg-dark .head h2,
.ci-dg-dark .head p,
.ci-dg-dark .eyebrow,
.ci-dg-dark .eyebrow::before { color: var(--c1); }
.ci-dg-dark .eyebrow::before { background: var(--c1); }

.ci-dg-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 14px;
    align-items: stretch;
}

.ci-dg-trending {
    background: #fff;
}

.ci-dg-trending__wrap {
    background: #fff;
    border: 1px solid var(--c2);
    border-radius: 18px;
    padding: 34px 26px;
}

.ci-dg-trending .ci-dg-card {
    background: var(--c1);
}

.ci-dg-card {
    border: 1px solid var(--c2);
    border-radius: 12px;
    overflow: hidden;
    background: #fff;
    transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.ci-dg-card:hover { transform: translateY(-4px); border-color: var(--c4); box-shadow: 0 14px 24px rgba(64, 41, 27, 0.12); }
.ci-dg-card img { width: 100%; aspect-ratio: 4/3; object-fit: cover; }
.ci-dg-card__body { padding: 12px; }
.ci-dg-card h3 { margin: 0 0 5px; color: var(--c5); font-size: 1.08rem; }
.ci-dg-card p { margin: 0 0 10px; color: var(--c4); font-size: 0.85rem; }

.ci-dg-card--estimate {
    background: color-mix(in srgb, #fff, var(--c1) 70%);
    border-color: var(--c2);
    color: var(--c5);
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: 320px;
}

.ci-dg-card--estimate .ci-dg-card__body {
    padding: 22px 18px;
    text-align: left;
}

.ci-dg-card--estimate h3 {
    color: var(--c5);
    font-size: 1.08rem;
    margin-bottom: 8px;
}

.ci-dg-card--estimate p {
    color: var(--c4);
    font-size: 0.9rem;
    margin-bottom: 16px;
}

.ci-dg-card--estimate .ci-dg-q {
    color: var(--c1);
    border-color: var(--c5);
    background: var(--c5);
}

.ci-dg-card--estimate .ci-dg-q:hover {
    background: var(--c4);
    color: var(--c1);
    border-color: var(--c4);
}

.ci-dg-card__icon {
    width: 58px;
    height: 58px;
    margin-bottom: 12px;
    border-radius: 14px;
    border: 1px solid var(--c2);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: var(--c5);
    background: #fff;
}

.ci-dg-card__icon svg {
    width: 34px;
    height: 34px;
    stroke: currentColor;
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.ci-dg-trending__more {
    margin-top: 18px;
    display: flex;
    justify-content: center;
}

.ci-dg-white {
    background: #fff !important;
}

.ci-dg-q {
    display: inline-flex;
    border: 1px solid var(--c4);
    border-radius: 999px;
    padding: 7px 12px;
    color: var(--c4);
    font: 600 10px var(--font-sans);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    transition: 0.25s ease;
}

.ci-dg-q:hover { background: var(--c4); color: var(--c1); }

.ci-dg-pill-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 12px; }
.ci-dg-pill {
    border: 1px solid rgba(242, 239, 234, 0.26);
    border-radius: 12px;
    padding: 18px 14px;
    text-align: center;
    background: rgba(242, 239, 234, 0.08);
}

.ci-dg-pill strong { display: block; margin-bottom: 4px; color: var(--c1); }
.ci-dg-pill span { color: rgba(242, 239, 234, 0.82); font-size: 0.85rem; }

.ci-dg-estimate {
    border: 1px solid rgba(242, 239, 234, 0.28);
    border-radius: 16px;
    padding: 32px;
    background: rgba(242, 239, 234, 0.06);
    max-width: 940px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 18px;
}

.ci-dg-estimate h3 { margin: 0 0 8px; color: var(--c1); font-size: clamp(1.5rem, 2.6vw, 2.2rem); }
.ci-dg-estimate p { margin: 0; color: rgba(242, 239, 234, 0.84); }
.ci-dg-estimate .ci-dg-btn { background: var(--c1); border-color: var(--c1); color: var(--c5); }
.ci-dg-estimate .ci-dg-btn:hover { background: var(--c2); border-color: var(--c2); }

.ci-dg-designers-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 14px; }
.ci-dg-designer { border: 1px solid var(--c2); border-radius: 12px; overflow: hidden; background: #fff; }
.ci-dg-designer img { width: 100%; aspect-ratio: 4/3; object-fit: cover; }
.ci-dg-designer__body { padding: 12px; }
.ci-dg-designer h3 { margin: 0 0 4px; color: var(--c5); font-size: 1.05rem; }
.ci-dg-designer p { margin: 0; color: var(--c4); font-size: 0.84rem; }
.ci-dg-designer__stats {
    display: flex;
    gap: 14px;
    margin-top: 10px;
}
.ci-dg-designer__stat {
    border-top: 1px solid var(--c2);
    padding-top: 8px;
    min-width: 0;
}
.ci-dg-designer__stat b {
    display: block;
    color: var(--c5);
    font: 700 0.86rem var(--font-sans);
    letter-spacing: 0.02em;
}
.ci-dg-designer__stat span {
    display: block;
    color: var(--c4);
    font: 600 0.62rem var(--font-sans);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    line-height: 1.45;
}

.ci-dg-homes { background: var(--c4); border-top: 1px solid var(--c5); border-bottom: 1px solid var(--c5); }
.ci-dg-homes .head h2,
.ci-dg-homes .head p,
.ci-dg-homes .eyebrow { color: var(--c1); }
.ci-dg-homes .eyebrow::before { background: var(--c1); }
.ci-dg-homes__card {
    display: grid;
    grid-template-columns: 0.9fr 1.1fr;
    height: 350px;
    border: 1px solid var(--c3);
    border-radius: 14px;
    overflow: hidden;
    background: #fff;
}

.ci-dg-homes__card img { width: 100%; height: 100%; object-fit: cover; }
.ci-dg-homes__card img {
    display: block;
    object-fit: cover;
    object-position: center;
}

.ci-dg-homes__body {
    padding: 24px 28px;
    display: grid;
    grid-template-rows: minmax(0, 1fr) auto auto auto;
    min-height: 0;
}

.ci-dg-homes__quote {
    margin: 0;
    color: var(--c5);
    font: italic clamp(1.08rem, 1.8vw, 1.48rem) var(--font-serif);
    line-height: 1.58;
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
    transition: opacity 0.35s ease;
}

.ci-dg-homes__quote.fade { opacity: 0; }
.ci-dg-homes__name { margin: 12px 0 4px; color: var(--c4); font: 700 13px var(--font-sans); }
.ci-dg-homes__meta { margin: 0; color: var(--c3); font: 600 11px var(--font-sans); letter-spacing: 0.1em; text-transform: uppercase; }
.ci-dg-homes__chips { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 14px; }
.ci-dg-homes__chip {
    border: 1px solid var(--c3);
    border-radius: 999px;
    background: rgba(165, 147, 123, 0.14);
    color: var(--c4);
    padding: 7px 10px;
    font: 600 10px var(--font-sans);
    letter-spacing: 0.06em;
    text-transform: uppercase;
    cursor: pointer;
}

.ci-dg-homes__chip.is-active { background: var(--c5); border-color: var(--c5); color: var(--c1); }

.ci-dg-steps { display: grid; grid-template-columns: repeat(6, minmax(0, 1fr)); gap: 10px; }
.ci-dg-step {
    border: 1px solid var(--c2);
    border-radius: 12px;
    background: #fff;
    padding: 14px;
    min-height: 168px;
    transition: 0.25s ease;
}

.ci-dg-step.is-active { border-color: var(--c4); transform: translateY(-3px); }
.ci-dg-step b {
    display: inline-flex;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    align-items: center;
    justify-content: center;
    background: var(--c5);
    color: var(--c1);
    font: 700 11px var(--font-sans);
    margin-bottom: 9px;
}

.ci-dg-step h3 { margin: 0 0 6px; color: var(--c5); font-size: 1rem; }
.ci-dg-step p { margin: 0; color: var(--c4); font-size: 0.83rem; line-height: 1.6; }

.ci-dg-stories { background: var(--c5); color: var(--c1); }
.ci-dg-stories .head h2,
.ci-dg-stories .head p,
.ci-dg-stories .eyebrow,
.ci-dg-stories .eyebrow::before { color: var(--c1); }
.ci-dg-stories .eyebrow::before { background: var(--c1); }
.ci-dg-stories__grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 14px; }
.ci-dg-story { border: 1px solid rgba(242, 239, 234, 0.28); border-radius: 12px; overflow: hidden; background: rgba(242, 239, 234, 0.08); }
.ci-dg-story img { width: 100%; aspect-ratio: 16/10; object-fit: cover; }
.ci-dg-story__body { padding: 12px; }
.ci-dg-story h3 { margin: 0; color: var(--c1); font-size: 1rem; line-height: 1.45; }
.ci-dg-story__meta {
    margin-top: 8px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
}
.ci-dg-story__meta span {
    color: rgba(242, 239, 234, 0.78);
    font: 600 0.68rem var(--font-sans);
    text-transform: uppercase;
    letter-spacing: 0.1em;
}
.ci-dg-story__meta a {
    color: var(--c1);
    font: 700 0.7rem var(--font-sans);
    letter-spacing: 0.08em;
    text-transform: uppercase;
}

.ci-dg-cities__grid { display: grid; grid-template-columns: repeat(6, minmax(0, 1fr)); gap: 10px; }
.ci-dg-city {
    border: 1px solid var(--c2);
    border-radius: 999px;
    padding: 9px 12px;
    text-align: center;
    color: var(--c4);
    font: 600 11px var(--font-sans);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    transition: 0.25s ease;
}

.ci-dg-city:hover { background: var(--c5); border-color: var(--c5); color: var(--c1); }

.ci-dg-faq { background: var(--c1); }
.ci-dg-faq__list { max-width: 900px; margin: 0 auto; }
.ci-dg-faq__item { border-bottom: 1px solid var(--c3); }
.ci-dg-faq__item:first-child { border-top: 1px solid var(--c3); }
.ci-dg-faq__trigger {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
    gap: 16px;
    border: 0;
    background: transparent;
    text-align: left;
    cursor: pointer;
}

.ci-dg-faq__q { color: var(--c5); font: 500 15px var(--font-sans); }
.ci-dg-faq__chev { width: 18px; height: 18px; color: var(--c4); transition: transform 0.3s; }
.ci-dg-faq__item.is-open .ci-dg-faq__chev { transform: rotate(180deg); }
.ci-dg-faq__panel { max-height: 0; overflow: hidden; transition: max-height 0.4s; }
.ci-dg-faq__a { padding: 0 0 20px; color: var(--c4); font: 14px var(--font-sans); line-height: 1.75; }

.ci-dg-cta { padding: 76px 0; background: var(--c1); }
.ci-dg-cta__box {
    border: 1px solid var(--c4);
    border-radius: 16px;
    padding: 34px;
    background: linear-gradient(135deg, var(--c5), var(--c4));
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 18px;
}

.ci-dg-cta h2 { margin: 0 0 8px; color: var(--c1); font-size: clamp(1.6rem, 3vw, 2.4rem); }
.ci-dg-cta p { margin: 0; color: rgba(242, 239, 234, 0.84); }
.ci-dg-cta .ci-dg-btn { background: rgba(242, 239, 234, 0.12); border-color: rgba(242, 239, 234, 0.74); color: var(--c1); }
.ci-dg-cta .ci-dg-btn:hover { background: var(--c1); border-color: var(--c1); color: var(--c5); }

@media (max-width: 1120px) {
    .ci-dg-grid,
    .ci-dg-designers-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }

    .ci-dg-pill-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .ci-dg-homes__card { grid-template-columns: 1fr; height: auto; }
    .ci-dg-steps { grid-template-columns: repeat(3, minmax(0, 1fr)); }
    .ci-dg-stories__grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .ci-dg-cities__grid { grid-template-columns: repeat(4, minmax(0, 1fr)); }
    .ci-dg-estimate { flex-direction: column; align-items: flex-start; }
}

@media (max-width: 768px) {
    .ci-dg .sec,
    .ci-dg-cta { padding: 62px 0; }

    .ci-dg-hero { min-height: 44vh; padding: 56px 0; }
    .ci-dg-grid,
    .ci-dg-designers-grid,
    .ci-dg-pill-grid,
    .ci-dg-steps,
    .ci-dg-stories__grid,
    .ci-dg-cities__grid { grid-template-columns: 1fr; }

    .ci-dg-cta__box { flex-direction: column; align-items: flex-start; padding: 26px 20px; }
    .ci-dg-btn { width: 100%; }
    .ci-dg-trending__wrap { padding: 24px 16px; border-radius: 14px; }
}
</style>
@endsection

@section('content')
<div class="ci-dg">
    <section class="ci-dg-hero"><div class="container"><div data-reveal><h1>{{ $heroHeading }}</h1>@if($heroSubheading)<p>{{ $heroSubheading }}</p>@endif<a href="{{ route('contact') }}" class="ci-dg-btn ci-dg-btn--solid">{{ $heroCtaText }}</a></div></div></section>

    <section class="ci-dg-crumb"><div class="container"><ol><li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('design-gallery.home-interiors') }}">Design Gallery</a></li><li>{{ $pageTitle }}</li></ol></div></section>

    <section class="sec ci-dg-trending">
        <div class="container">
            <div class="ci-dg-trending__wrap">
                <header class="head" data-reveal>
                    <span class="eyebrow">{{ $trendingEyebrow }}</span>
                    <h2>{{ $trendingHeading }}</h2>
                    <p>{{ $trendingDescription }}</p>
                </header>
                <div class="ci-dg-grid">
                    @foreach($designCards as $card)
                        @if(($card['type'] ?? 'design') === 'estimate')
                            <article class="ci-dg-card ci-dg-card--estimate" data-reveal><div class="ci-dg-card__body"><span class="ci-dg-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 12v6h18v-6"/><path d="M5 12V9a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v3"/><path d="M9 18v3M15 18v3"/><path d="M7 14h10"/></svg></span><h3>{{ $card['title'] }}</h3><p>{{ $card['subtitle'] }}</p><a href="{{ route('contact') }}" class="ci-dg-q">{{ $card['button'] ?? 'Get Free Estimate' }}</a></div></article>
                        @else
                            <article class="ci-dg-card" data-reveal><img src="{{ $card['image'] }}" alt="{{ $card['title'] }}"><div class="ci-dg-card__body"><h3>{{ $card['title'] }}</h3><p>{{ $card['subtitle'] }}</p><a href="{{ route('contact') }}" class="ci-dg-q">{{ $card['button'] ?? 'Get Quote' }}</a></div></article>
                        @endif
                    @endforeach
                </div>
                @if($trendingLoadMoreText)
                    <div class="ci-dg-trending__more" data-reveal><a href="{{ route('contact') }}" class="ci-dg-btn ci-dg-btn--outline">{{ $trendingLoadMoreText }}</a></div>
                @endif
            </div>
        </div>
    </section>

    <section class="sec ci-dg-dark">
        <div class="container">
            <header class="head" data-reveal>
                <span class="eyebrow">{{ $whyEyebrow }}</span>
                <h2>{{ $whyHeading }}</h2>
            </header>
            <div class="ci-dg-pill-grid">
                <div class="ci-dg-pill" data-reveal><strong>Delivery in 45 days*</strong><span>Structured milestone tracking</span></div>
                <div class="ci-dg-pill" data-reveal><strong>No hidden costs</strong><span>Scope-first pricing clarity</span></div>
                <div class="ci-dg-pill" data-reveal><strong>10-year assurance</strong><span>Material and workmanship support</span></div>
                <div class="ci-dg-pill" data-reveal><strong>Easy EMI options</strong><span>Flexible payments by project stage</span></div>
            </div>
        </div>
    </section>

    <section class="sec ci-dg-dark" style="padding-top:0;">
        <div class="container">
            <div class="ci-dg-estimate" data-reveal>
                <div>
                    <h3>{{ $estimateHeading }}</h3>
                    <p>{{ $estimateDescription }}</p>
                </div>
                <a href="{{ route('contact') }}" class="ci-dg-btn">Get Free Estimate</a>
            </div>
        </div>
    </section>

    <section class="sec ci-dg-light ci-dg-light--alt">
        <div class="container">
            <header class="head" data-reveal><span class="eyebrow">{{ $designersEyebrow }}</span><h2>{{ $designersHeading }}</h2></header>
            <div class="ci-dg-designers-grid">
                @foreach($designerCards as $designer)
                    <article class="ci-dg-designer" data-reveal><img src="{{ $designer['image'] }}" alt="{{ $designer['name'] }}"><div class="ci-dg-designer__body"><h3>{{ $designer['name'] }}</h3><p>{{ $designer['role'] }}</p>@if(!empty($designer['projects']) || !empty($designer['experience']))<div class="ci-dg-designer__stats">@if(!empty($designer['projects']))<div class="ci-dg-designer__stat"><b>{{ $designer['projects'] }}</b><span>Completed Projects</span></div>@endif @if(!empty($designer['experience']))<div class="ci-dg-designer__stat"><b>{{ $designer['experience'] }}</b><span>Years Experience</span></div>@endif</div>@endif</div></article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="sec ci-dg-homes">
        <div class="container">
            <header class="head" data-reveal>
                <span class="eyebrow">{{ $homesEyebrow }}</span>
                <h2>{{ $homesHeading }}</h2>
                @if($homesDescription)
                    <p>{{ $homesDescription }}</p>
                @endif
            </header>
            @if(count($testimonialSlides))
                <div class="ci-dg-homes__card" data-ci-dg-homes data-reveal>
                    <img src="{{ $testimonialSlides[0]['image'] }}" alt="Customer project" data-ci-dg-homes-image>
                    <div class="ci-dg-homes__body">
                        <p class="ci-dg-homes__quote" data-ci-dg-homes-quote>"{{ $testimonialSlides[0]['quote'] }}"</p>
                        <p class="ci-dg-homes__name" data-ci-dg-homes-name>{{ $testimonialSlides[0]['name'] }}</p>
                        <p class="ci-dg-homes__meta" data-ci-dg-homes-meta>{{ $testimonialSlides[0]['meta'] }}</p>
                        <div class="ci-dg-homes__chips">
                            @foreach($testimonialSlides as $index => $slide)
                                <button type="button" class="ci-dg-homes__chip {{ $index === 0 ? 'is-active' : '' }}" data-index="{{ $index }}">{{ $slide['chip'] }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="sec ci-dg-light">
        <div class="container">
            <header class="head" data-reveal><span class="eyebrow">{{ $processEyebrow }}</span><h2>{{ $processHeading }}</h2></header>
            <div class="ci-dg-steps" data-ci-dg-steps>
                @foreach($processSteps as $index => $step)
                    <article class="ci-dg-step {{ $index === 0 ? 'is-active' : '' }}" data-reveal><b>{{ $index + 1 }}</b><h3>{{ $step['title'] }}</h3><p>{{ $step['description'] }}</p></article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="sec ci-dg-stories">
        <div class="container">
            <header class="head" data-reveal>
                <span class="eyebrow">{{ $storiesEyebrow }}</span>
                <h2>{{ $storiesHeading }}</h2>
                @if($storiesDescription)
                    <p>{{ $storiesDescription }}</p>
                @endif
            </header>
            <div class="ci-dg-stories__grid">
                @foreach($storyCards as $story)
                    <article class="ci-dg-story" data-reveal><img src="{{ $story['image'] }}" alt="{{ $story['title'] }}"><div class="ci-dg-story__body"><h3>{{ $story['title'] }}</h3><div class="ci-dg-story__meta"><span>{{ $story['category'] ?? 'Interior Design' }}</span><a href="{{ route('contact') }}">Read More</a></div></div></article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="sec ci-dg-light ci-dg-light--alt {{ $citiesSectionClass }}">
        <div class="container">
            <header class="head" data-reveal>
                <span class="eyebrow">{{ $citiesEyebrow }}</span>
                <h2>{{ $citiesHeading }}</h2>
                @if($citiesDescription)
                    <p>{{ $citiesDescription }}</p>
                @endif
            </header>
            <div class="ci-dg-cities__grid" data-reveal>
                @foreach($cities as $city)
                    <a href="{{ $city['route'] }}" class="ci-dg-city">{{ $city['name'] }}</a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="sec ci-dg-faq {{ $faqSectionClass }}">
        <div class="container">
            <header class="head" data-reveal><span class="eyebrow">{{ $faqEyebrow }}</span><h2>{{ $faqHeading }}</h2></header>
            <div class="ci-dg-faq__list" data-faq>
                @foreach($faqItems as $faq)
                    <article class="ci-dg-faq__item faq-item"><button type="button" class="ci-dg-faq__trigger faq-trigger"><span class="ci-dg-faq__q">{{ $faq['q'] }}</span><svg class="ci-dg-faq__chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg></button><div class="ci-dg-faq__panel faq-panel"><div class="ci-dg-faq__a faq-panel__inner">{{ $faq['a'] }}</div></div></article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ci-dg-cta">
        <div class="container">
            <div class="ci-dg-cta__box" data-reveal>
                <div><h2>{{ $ctaHeading }}</h2><p>{{ $ctaDescription }}</p></div>
                <a href="{{ route('contact') }}" class="ci-dg-btn">{{ $heroCtaText }}</a>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script>
(() => {
    const homes = document.querySelector('[data-ci-dg-homes]');
    if (homes) {
        const q = homes.querySelector('[data-ci-dg-homes-quote]');
        const n = homes.querySelector('[data-ci-dg-homes-name]');
        const m = homes.querySelector('[data-ci-dg-homes-meta]');
        const i = homes.querySelector('[data-ci-dg-homes-image]');
        const chips = Array.from(homes.querySelectorAll('.ci-dg-homes__chip'));

        const slides = @json($testimonialSlidesJs);

        let cur = 0;
        let id = null;
        let fd = null;

        const apply = (x, fade = true) => {
            const s = slides[x];
            if (!s) return;

            chips.forEach((c, ix) => c.classList.toggle('is-active', ix === x));

            const write = () => {
                q.textContent = `"${s.quote}"`;
                n.textContent = s.name;
                m.textContent = s.meta;
                i.src = s.image;
            };

            if (fade) {
                q.classList.add('fade');
                if (fd) clearTimeout(fd);
                fd = setTimeout(() => {
                    write();
                    q.classList.remove('fade');
                }, 180);
            } else {
                write();
            }

            cur = x;
        };

        const start = () => {
            if (id) clearInterval(id);
            id = setInterval(() => apply((cur + 1) % slides.length, true), 2600);
        };

        chips.forEach((c) => c.addEventListener('click', () => {
            const x = Number.parseInt(c.dataset.index || '', 10);
            if (Number.isNaN(x)) return;
            apply(x, true);
            start();
        }));

        homes.addEventListener('mouseenter', () => { if (id) clearInterval(id); });
        homes.addEventListener('mouseleave', start);

        apply(0, false);
        start();
    }

    const steps = document.querySelectorAll('[data-ci-dg-steps] .ci-dg-step');
    if (steps.length) {
        let a = 0;
        setInterval(() => {
            steps.forEach((s, ix) => s.classList.toggle('is-active', ix === a));
            a = (a + 1) % steps.length;
        }, 1800);
    }
})();
</script>
@endsection
