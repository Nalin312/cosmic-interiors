<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cosmic Interiors')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Dancing+Script:wght@600;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>
<body>
<header class="ci-header">
    <div class="ci-utility">
        <div class="container ci-utility__inner">
            <ul class="ci-utility__links">
                <li><a href="#">Partner with HomeLane</a></li>
                <li><a href="#">Refer and Earn</a></li>
                <li><a href="#">Join Us</a></li>
            </ul>
            <ul class="ci-utility__links ci-utility__links--right">
                <li><a href="tel:18001024663">1800-102-4663</a></li>
                <li><a href="#">Customer Support</a></li>
                <li><a href="#">Store Locator</a></li>
                <li><a href="#">Login/Register</a></li>
            </ul>
        </div>
    </div>

    <div class="ci-main-nav-wrap">
        <div class="container ci-main-nav">
            <a href="{{ route('home') }}" class="ci-brand" aria-label="Cosmic Interiors home">
                <img src="{{ asset('Images/Cosmic Logos (8) (1) (1).png') }}" alt="Cosmic Interiors">
            </a>

            <nav aria-label="Primary Navigation" class="ci-nav-desktop">
                <ul class="ci-nav-list">
                    <li class="ci-nav-item has-mega" data-menu-item>
                        <button class="ci-nav-link {{ request()->routeIs('design-gallery.*') ? 'is-active' : '' }}" type="button" data-mega-trigger aria-expanded="false" aria-controls="design-gallery-mega">Design Gallery</button>
                        <div id="design-gallery-mega" class="ci-mega" data-mega-menu>
                            <div class="ci-mega__grid">
                                <a href="{{ route('design-gallery.home-interiors') }}" class="ci-mega__item {{ request()->routeIs('design-gallery.home-interiors') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 10.5 12 3l9 7.5"/><path d="M5.5 9.5V21h13V9.5"/><path d="M9 21v-6h6v6"/></svg></span><span>Home Interiors</span></a>
                                <a href="{{ route('design-gallery.modular-kitchen') }}" class="ci-mega__item {{ request()->routeIs('design-gallery.modular-kitchen') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 8h18v5H3z"/><path d="M3 13v8h18v-8"/><path d="M8 16h3M13 16h3"/><path d="M18 8V5h2"/></svg></span><span>Modular Kitchen</span></a>
                                <a href="{{ route('design-gallery.living-room') }}" class="ci-mega__item {{ request()->routeIs('design-gallery.living-room') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 12h18v6H3z"/><path d="M6 12V9h5v3"/><path d="M13 12V9h5v3"/><path d="M5 18v3M19 18v3"/></svg></span><span>Living Room</span></a>
                                <a href="{{ route('design-gallery.bedroom') }}" class="ci-mega__item {{ request()->routeIs('design-gallery.bedroom') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16v6H4z"/><path d="M4 12V9a2 2 0 0 1 2-2h5a2 2 0 0 1 2 2v3"/><path d="M7 18v3M17 18v3"/></svg></span><span>Bedroom</span></a>
                                <a href="{{ route('design-gallery.wardrobe') }}" class="ci-mega__item {{ request()->routeIs('design-gallery.wardrobe') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="3" width="14" height="18" rx="1.5"/><path d="M12 3v18"/><path d="M10 12h.01M14 12h.01"/></svg></span><span>Wardrobe</span></a>
                                <a href="{{ route('design-gallery.space-saving-furniture') }}" class="ci-mega__item {{ request()->routeIs('design-gallery.space-saving-furniture') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h9v4H4z"/><path d="M4 12V9a2 2 0 0 1 2-2h5a2 2 0 0 1 2 2v3"/><path d="M15 7h5v9h-5z"/><path d="M8 16v2M18 16v2"/></svg></span><span>Space Saving Furniture</span></a>
                                <a href="{{ route('design-gallery.home-office') }}" class="ci-mega__item {{ request()->routeIs('design-gallery.home-office') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="5" width="16" height="10" rx="1.5"/><path d="M9 19h6"/><path d="M12 15v4"/><path d="M3 21h18"/></svg></span><span>Home Office</span></a>
                                <a href="{{ route('design-gallery.bathroom') }}" class="ci-mega__item {{ request()->routeIs('design-gallery.bathroom') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 13h18v4a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3z"/><path d="M6 13V9a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3v4"/><path d="M16 8h.01"/></svg></span><span>Bathroom</span></a>
                            </div>
                        </div>
                    </li>
                    <li class="ci-nav-item has-mega" data-menu-item>
                        <button class="ci-nav-link {{ request()->routeIs('guides.*') ? 'is-active' : '' }}" type="button" data-mega-trigger aria-expanded="false" aria-controls="guides-mega">Guides</button>
                        <div id="guides-mega" class="ci-mega" data-mega-menu>
                            <div class="ci-mega__grid">
                                <a href="{{ route('guides.modular-kitchen-design-ideas') }}" class="ci-mega__item {{ request()->routeIs('guides.modular-kitchen-design-ideas') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 8h18v5H3z"/><path d="M3 13v8h18v-8"/><path d="M8 16h3M13 16h3"/></svg></span><span>Modular Kitchen Design Ideas</span></a>
                                <a href="{{ route('guides.bedroom-design-ideas') }}" class="ci-mega__item {{ request()->routeIs('guides.bedroom-design-ideas') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16v6H4z"/><path d="M4 12V9a2 2 0 0 1 2-2h5a2 2 0 0 1 2 2v3"/><path d="M7 18v3M17 18v3"/></svg></span><span>Bedroom Design Ideas</span></a>
                                <a href="{{ route('guides.home-interior-design-ideas') }}" class="ci-mega__item {{ request()->routeIs('guides.home-interior-design-ideas') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 10.5 12 3l9 7.5"/><path d="M5.5 9.5V21h13V9.5"/></svg></span><span>Home Interior Design Ideas</span></a>
                                <a href="{{ route('guides.bathroom-design-ideas') }}" class="ci-mega__item {{ request()->routeIs('guides.bathroom-design-ideas') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 13h18v4a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3z"/><path d="M6 13V9a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3v4"/></svg></span><span>Bathroom Design Ideas</span></a>
                                <a href="{{ route('guides.wardrobe-design-ideas') }}" class="ci-mega__item {{ request()->routeIs('guides.wardrobe-design-ideas') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="3" width="14" height="18" rx="1.5"/><path d="M12 3v18"/></svg></span><span>Wardrobe Design Ideas</span></a>
                                <a href="{{ route('guides.living-room-interior-design-ideas') }}" class="ci-mega__item {{ request()->routeIs('guides.living-room-interior-design-ideas') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 12h18v6H3z"/><path d="M6 12V9h5v3"/><path d="M13 12V9h5v3"/></svg></span><span>Living Room Interior Design Ideas</span></a>
                                <a href="{{ route('guides.home-decor-trends') }}" class="ci-mega__item {{ request()->routeIs('guides.home-decor-trends') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m12 3 2.5 5 5.5.8-4 4 .9 5.7-4.9-2.5-4.9 2.5.9-5.7-4-4 5.5-.8z"/></svg></span><span>Home Decor Trends</span></a>
                            </div>
                        </div>
                    </li>
                    <li class="ci-nav-item has-mega" data-menu-item>
                        <button class="ci-nav-link {{ request()->routeIs('cities.*') ? 'is-active' : '' }}" type="button" data-mega-trigger aria-expanded="false" aria-controls="cities-mega">Cities</button>
                        <div id="cities-mega" class="ci-mega ci-mega--single" data-mega-menu>
                            <div class="ci-mega__grid">
                                <a href="{{ route('cities.bangalore') }}" class="ci-mega__item {{ request()->routeIs('cities.bangalore') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-6-5.7-6-11a6 6 0 1 1 12 0c0 5.3-6 11-6 11Z"/><path d="M12 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/></svg></span><span>Bangalore</span></a>
                                <a href="{{ route('cities.hyderabad') }}" class="ci-mega__item {{ request()->routeIs('cities.hyderabad') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-6-5.7-6-11a6 6 0 1 1 12 0c0 5.3-6 11-6 11Z"/><path d="M12 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/></svg></span><span>Hyderabad</span></a>
                                <a href="{{ route('cities.chennai') }}" class="ci-mega__item {{ request()->routeIs('cities.chennai') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-6-5.7-6-11a6 6 0 1 1 12 0c0 5.3-6 11-6 11Z"/><path d="M12 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/></svg></span><span>Chennai</span></a>
                                <a href="{{ route('cities.mumbai') }}" class="ci-mega__item {{ request()->routeIs('cities.mumbai') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-6-5.7-6-11a6 6 0 1 1 12 0c0 5.3-6 11-6 11Z"/><path d="M12 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/></svg></span><span>Mumbai</span></a>
                            </div>
                        </div>
                    </li>
                    <li class="ci-nav-item"><a class="ci-nav-link {{ request()->routeIs('offerings') ? 'is-active' : '' }}" href="{{ route('offerings') }}">Offerings</a></li>
                    <li class="ci-nav-item has-mega" data-menu-item>
                        <button class="ci-nav-link {{ request()->routeIs('price-calculators.*') ? 'is-active' : '' }}" type="button" data-mega-trigger aria-expanded="false" aria-controls="price-mega">Price Calculators</button>
                        <div id="price-mega" class="ci-mega ci-mega--single" data-mega-menu>
                            <div class="ci-mega__grid">
                                <a href="{{ route('price-calculators.home-interior-price-calculator') }}" class="ci-mega__item {{ request()->routeIs('price-calculators.home-interior-price-calculator') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="3" width="14" height="18" rx="1.5"/><path d="M8 8h8M8 12h8M8 16h5"/></svg></span><span>Home Interior Price Calculator</span></a>
                                <a href="{{ route('price-calculators.kitchen-price-calculator') }}" class="ci-mega__item {{ request()->routeIs('price-calculators.kitchen-price-calculator') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="3" width="16" height="18" rx="1.5"/><path d="M8 7h8"/><path d="M8 11h8"/><path d="M8 15h2M12 15h2M16 15h.01"/></svg></span><span>Kitchen Price Calculator</span></a>
                            </div>
                        </div>
                    </li>
                    <li class="ci-nav-item has-mega" data-menu-item>
                        <button class="ci-nav-link {{ request()->routeIs('more.*') ? 'is-active' : '' }}" type="button" data-mega-trigger aria-expanded="false" aria-controls="more-mega">More</button>
                        <div id="more-mega" class="ci-mega ci-mega--single" data-mega-menu>
                            <div class="ci-mega__grid">
                                <a href="{{ route('more.customer-stories') }}" class="ci-mega__item {{ request()->routeIs('more.customer-stories') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 6h16v12H4z"/><path d="M8 10h8M8 14h5"/></svg></span><span>Customer Stories</span></a>
                                <a href="{{ route('more.blogs') }}" class="ci-mega__item {{ request()->routeIs('more.blogs') ? 'is-active' : '' }}"><span class="ci-mega__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 4h14v16H5z"/><path d="M8 8h8M8 12h8M8 16h5"/></svg></span><span>Blogs</span></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="ci-main-nav__actions">
                <a href="{{ route('contact') }}" class="btn btn--primary btn--sm">Book Consultation</a>
                <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav" data-nav-toggle>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round">
                        <path d="M4 7h16M4 12h16M4 17h16" />
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-nav" class="ci-mobile" data-mobile-nav>
        <div class="container">
            <ul class="ci-mobile__menu">
                <li class="ci-mobile__item">
                    <button type="button" class="ci-mobile__toggle" data-mobile-accordion aria-expanded="false">Design Gallery</button>
                    <div class="ci-mobile__panel">
                        <a href="{{ route('design-gallery.home-interiors') }}">Home Interiors</a>
                        <a href="{{ route('design-gallery.modular-kitchen') }}">Modular Kitchen</a>
                        <a href="{{ route('design-gallery.living-room') }}">Living Room</a>
                        <a href="{{ route('design-gallery.bedroom') }}">Bedroom</a>
                        <a href="{{ route('design-gallery.wardrobe') }}">Wardrobe</a>
                        <a href="{{ route('design-gallery.space-saving-furniture') }}">Space Saving Furniture</a>
                        <a href="{{ route('design-gallery.home-office') }}">Home Office</a>
                        <a href="{{ route('design-gallery.bathroom') }}">Bathroom</a>
                    </div>
                </li>
                <li class="ci-mobile__item">
                    <button type="button" class="ci-mobile__toggle" data-mobile-accordion aria-expanded="false">Guides</button>
                    <div class="ci-mobile__panel">
                        <a href="{{ route('guides.modular-kitchen-design-ideas') }}">Modular Kitchen Design Ideas</a>
                        <a href="{{ route('guides.bedroom-design-ideas') }}">Bedroom Design Ideas</a>
                        <a href="{{ route('guides.home-interior-design-ideas') }}">Home Interior Design Ideas</a>
                        <a href="{{ route('guides.bathroom-design-ideas') }}">Bathroom Design Ideas</a>
                        <a href="{{ route('guides.wardrobe-design-ideas') }}">Wardrobe Design Ideas</a>
                        <a href="{{ route('guides.living-room-interior-design-ideas') }}">Living Room Interior Design Ideas</a>
                        <a href="{{ route('guides.home-decor-trends') }}">Home Decor Trends</a>
                    </div>
                </li>
                <li class="ci-mobile__item">
                    <button type="button" class="ci-mobile__toggle" data-mobile-accordion aria-expanded="false">Cities</button>
                    <div class="ci-mobile__panel">
                        <a href="{{ route('cities.bangalore') }}">Bangalore</a>
                        <a href="{{ route('cities.hyderabad') }}">Hyderabad</a>
                        <a href="{{ route('cities.chennai') }}">Chennai</a>
                        <a href="{{ route('cities.mumbai') }}">Mumbai</a>
                    </div>
                </li>
                <li><a href="{{ route('offerings') }}" class="ci-mobile__link">Offerings</a></li>
                <li class="ci-mobile__item">
                    <button type="button" class="ci-mobile__toggle" data-mobile-accordion aria-expanded="false">Price Calculators</button>
                    <div class="ci-mobile__panel">
                        <a href="{{ route('price-calculators.home-interior-price-calculator') }}">Home Interior Price Calculator</a>
                        <a href="{{ route('price-calculators.kitchen-price-calculator') }}">Kitchen Price Calculator</a>
                    </div>
                </li>
                <li class="ci-mobile__item">
                    <button type="button" class="ci-mobile__toggle" data-mobile-accordion aria-expanded="false">More</button>
                    <div class="ci-mobile__panel">
                        <a href="{{ route('more.customer-stories') }}">Customer Stories</a>
                        <a href="{{ route('more.blogs') }}">Blogs</a>
                    </div>
                </li>
            </ul>
            <div class="ci-mobile__utility">
                <a href="#">Partner with HomeLane</a>
                <a href="#">Refer and Earn</a>
                <a href="#">Join Us</a>
                <a href="#">Store Locator</a>
                <a href="#">Login/Register</a>
            </div>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div>
                <a href="{{ route('home') }}" class="brand" aria-label="Cosmic Interiors home">
                    <img src="{{ asset('Images/Cosmic Logos (8) (1) (1).png') }}" alt="Cosmic Interiors">
                </a>
                <p class="text-small footer-brand-copy max-30ch">Cosmic Interiors designs warm, refined, and deeply personal spaces for residential, commercial, and hospitality clients.</p>
            </div>

            <div>
                <h4 class="footer-title">Services</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('services') }}">Residential Interiors</a></li>
                    <li><a href="{{ route('services') }}">Commercial Spaces</a></li>
                    <li><a href="{{ route('services') }}">Hospitality Design</a></li>
                    <li><a href="{{ route('services') }}">Turnkey Delivery</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-title">Company</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-title">Connect</h4>
                <ul class="footer-links">
                    <li><a href="mailto:hello@cosmicinteriors.in">hello@cosmicinteriors.in</a></li>
                    <li><a href="tel:+919999999999">+91 99999 99999</a></li>
                    <li><a href="#">Hyderabad | Mumbai | Bengaluru</a></li>
                </ul>
                <div class="social-list social-top">
                    <a href="#" class="icon-btn" aria-label="Instagram">
                        <span>IG</span>
                    </a>
                    <a href="#" class="icon-btn" aria-label="Pinterest">
                        <span>PI</span>
                    </a>
                    <a href="#" class="icon-btn" aria-label="LinkedIn">
                        <span>IN</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <span>© 2026 Cosmic Interiors. All rights reserved.</span>
            <span>Warm modern luxury, designed with clarity.</span>
        </div>
    </div>
</footer>

<script>
(() => {
    const navToggle = document.querySelector('[data-nav-toggle]');
    const mobileNav = document.querySelector('[data-mobile-nav]');
    const megaTriggers = document.querySelectorAll('[data-mega-trigger]');

    if (navToggle && mobileNav) {
        navToggle.addEventListener('click', () => {
            const isOpen = mobileNav.classList.toggle('open');
            navToggle.setAttribute('aria-expanded', String(isOpen));
        });
    }

    if (megaTriggers.length) {
        const closeAllMegas = () => {
            megaTriggers.forEach((trigger) => {
                const menu = trigger.parentElement.querySelector('[data-mega-menu]');
                if (menu) {
                    menu.classList.remove('open');
                }
                trigger.setAttribute('aria-expanded', 'false');
            });
        };

        megaTriggers.forEach((trigger) => {
            const menu = trigger.parentElement.querySelector('[data-mega-menu]');
            if (!menu) {
                return;
            }

            trigger.addEventListener('click', (event) => {
                event.stopPropagation();
                const isOpen = menu.classList.contains('open');
                closeAllMegas();
                if (!isOpen) {
                    menu.classList.add('open');
                    trigger.setAttribute('aria-expanded', 'true');
                }
            });
        });

        document.addEventListener('click', (event) => {
            const clickedTrigger = event.target.closest('[data-mega-trigger]');
            const clickedMenu = event.target.closest('[data-mega-menu]');
            if (!clickedTrigger && !clickedMenu) {
                closeAllMegas();
            }
        });
    }

    document.querySelectorAll('[data-mobile-accordion]').forEach((trigger) => {
        trigger.addEventListener('click', () => {
            const item = trigger.closest('.ci-mobile__item');
            const panel = item?.querySelector('.ci-mobile__panel');
            const isOpen = item?.classList.contains('is-open');

            document.querySelectorAll('.ci-mobile__item').forEach((otherItem) => {
                otherItem.classList.remove('is-open');
                const otherTrigger = otherItem.querySelector('[data-mobile-accordion]');
                if (otherTrigger) {
                    otherTrigger.setAttribute('aria-expanded', 'false');
                }
            });

            if (!item || !panel) {
                return;
            }

            if (!isOpen) {
                item.classList.add('is-open');
                trigger.setAttribute('aria-expanded', 'true');
            }
        });
    });

    document.querySelectorAll('[data-faq]').forEach((faqRoot) => {
        faqRoot.querySelectorAll('.faq-item').forEach((item, idx) => {
            const trigger = item.querySelector('.faq-trigger');
            const panel = item.querySelector('.faq-panel');
            if (!trigger || !panel) {
                return;
            }

            const panelId = `faq-panel-${Math.random().toString(36).slice(2, 10)}-${idx}`;
            trigger.setAttribute('aria-controls', panelId);
            trigger.setAttribute('aria-expanded', 'false');
            panel.id = panelId;

            trigger.addEventListener('click', () => {
                const isOpen = item.classList.contains('is-open');
                faqRoot.querySelectorAll('.faq-item').forEach((otherItem) => {
                    otherItem.classList.remove('is-open');
                    const otherTrigger = otherItem.querySelector('.faq-trigger');
                    const otherPanel = otherItem.querySelector('.faq-panel');
                    if (otherTrigger && otherPanel) {
                        otherTrigger.setAttribute('aria-expanded', 'false');
                        otherPanel.style.maxHeight = '0px';
                    }
                });

                if (!isOpen) {
                    item.classList.add('is-open');
                    trigger.setAttribute('aria-expanded', 'true');
                    panel.style.maxHeight = `${panel.scrollHeight}px`;
                }
            });
        });
    });
})();
</script>
@yield('scripts')
</body>
</html>

