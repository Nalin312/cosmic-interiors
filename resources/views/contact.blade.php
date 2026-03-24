@extends('layouts.app')
@section('title', 'Contact Cosmic Interiors')

@section('content')
<section class="hero section--alt">
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="eyebrow">Contact</span>
            <h1>Discuss your interior project with our studio.</h1>
            <p class="lead">Share your project scope, location, and timeline. We will respond with the next practical step.</p>
        </div>
        <figure class="hero-media">
            <img src="https://images.unsplash.com/photo-1497366754035-f200586c4bd4?w=1400&q=80" alt="Interior consultation space">
        </figure>
    </div>
</section>

<section class="section">
    <div class="container content-block content-block--start">
        <div class="content-block__copy">
            <span class="eyebrow">Studios</span>
            <h2>Reach us directly.</h2>
            <p class="section-desc">We work across Hyderabad, Mumbai, Bengaluru, and remote locations through a structured project delivery model.</p>

            <div class="grid-2">
                <article class="card">
                    <h3 class="card-title">Email</h3>
                    <p class="card-text"><a href="mailto:hello@cosmicinteriors.in">hello@cosmicinteriors.in</a></p>
                </article>
                <article class="card">
                    <h3 class="card-title">Phone</h3>
                    <p class="card-text"><a href="tel:+919999999999">+91 99999 99999</a></p>
                </article>
            </div>

            <article class="card">
                <h3 class="card-title">Primary Office</h3>
                <p class="card-text">302 Design Hub, Banjara Hills, Hyderabad, Telangana 500034</p>
                <p class="text-small text-muted mt-2">Monday to Saturday | 9:00 AM - 7:00 PM IST</p>
            </article>
        </div>

        <article class="card">
            <h2 class="form-title">Book a consultation</h2>

            @if(session('success'))
                <p class="badge meta-line--md">{{ session('success') }}</p>
            @endif

            <form class="form" action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label class="label" for="first_name">First Name</label>
                        <input class="input" id="first_name" name="first_name" type="text" placeholder="First name" required>
                    </div>
                    <div class="form-group">
                        <label class="label" for="last_name">Last Name</label>
                        <input class="input" id="last_name" name="last_name" type="text" placeholder="Last name" required>
                    </div>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label class="label" for="email">Email</label>
                        <input class="input" id="email" name="email" type="email" placeholder="you@example.com" required>
                    </div>
                    <div class="form-group">
                        <label class="label" for="phone">Phone</label>
                        <input class="input" id="phone" name="phone" type="tel" placeholder="+91">
                    </div>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label class="label" for="project_type">Project Type</label>
                        <select class="select" id="project_type" name="project_type">
                            <option value="">Select service</option>
                            <option value="Residential">Residential</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Hospitality">Hospitality</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="label" for="city">City</label>
                        <select class="select" id="city" name="city">
                            <option value="">Select city</option>
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Bengaluru">Bengaluru</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="label" for="message">Project Brief</label>
                    <textarea class="textarea" id="message" name="message" placeholder="Tell us about your scope, timeline, and preferences."></textarea>
                    <p class="field-note">We typically respond within one business day.</p>
                </div>

                <button type="submit" class="btn btn--primary">Send Inquiry</button>
            </form>
        </article>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <header class="section-header">
            <span class="eyebrow">Office Presence</span>
            <h2 class="section-title">Where we currently operate.</h2>
        </header>

        <div class="grid-3">
            <article class="card">
                <h3 class="card-title">Hyderabad</h3>
                <p class="card-text">Main studio and execution command center.</p>
            </article>
            <article class="card">
                <h3 class="card-title">Mumbai</h3>
                <p class="card-text">Residential and hospitality project management team.</p>
            </article>
            <article class="card">
                <h3 class="card-title">Bengaluru</h3>
                <p class="card-text">Commercial interior and design engineering support.</p>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <header class="section-header section-header--center">
            <span class="eyebrow">FAQ</span>
            <h2 class="section-title">Contact and consultation questions.</h2>
        </header>

        <div class="faq" data-faq>
            <article class="faq-item">
                <button class="faq-trigger" type="button"><span>What happens after I submit the form?</span><span class="faq-icon">+</span></button>
                <div class="faq-panel"><div class="faq-panel__inner">Our team reviews your brief and schedules a discovery call with the appropriate design lead.</div></div>
            </article>
            <article class="faq-item">
                <button class="faq-trigger" type="button"><span>Can meetings happen online?</span><span class="faq-icon">+</span></button>
                <div class="faq-panel"><div class="faq-panel__inner">Yes. Initial consultations can be conducted remotely for both local and outstation projects.</div></div>
            </article>
            <article class="faq-item">
                <button class="faq-trigger" type="button"><span>Do you take urgent timeline projects?</span><span class="faq-icon">+</span></button>
                <div class="faq-panel"><div class="faq-panel__inner">Yes, subject to scope and current scheduling. We confirm feasibility during the first consultation call.</div></div>
            </article>
        </div>
    </div>
</section>
@endsection

