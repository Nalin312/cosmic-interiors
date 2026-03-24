import './bootstrap';

// Showcase tabbed gallery functionality
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.ci-showcase__tab');
    const panels = document.querySelectorAll('.ci-showcase__panel');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const tabName = tab.getAttribute('data-tab');

            // Remove active state from all tabs and panels
            tabs.forEach(t => {
                t.classList.remove('ci-showcase__tab--active');
                t.setAttribute('aria-selected', 'false');
            });

            panels.forEach(panel => {
                panel.classList.remove('ci-showcase__panel--active');
            });

            // Add active state to clicked tab and corresponding panel
            tab.classList.add('ci-showcase__tab--active');
            tab.setAttribute('aria-selected', 'true');

            const activePanel = document.getElementById(`tab-${tabName}`);
            if (activePanel) {
                activePanel.classList.add('ci-showcase__panel--active');
            }
        });
    });
});

// Design Process stepper functionality
document.addEventListener('DOMContentLoaded', () => {
    const circles = document.querySelectorAll('.ci-design-process__circle');
    const steps = document.querySelectorAll('.ci-design-process__step');
    const prevBtn = document.querySelector('.ci-design-process__nav--prev');
    const nextBtn = document.querySelector('.ci-design-process__nav--next');

    if (!circles.length || !steps.length || !prevBtn || !nextBtn) {
        return;
    }

    let currentStep = 1;

    function updateStepper(step) {
        // Update circles
        circles.forEach((circle, index) => {
            const stepNumber = index + 1;
            circle.classList.toggle('ci-design-process__circle--active', stepNumber === step);
        });

        // Update steps
        steps.forEach((stepEl, index) => {
            const stepNumber = index + 1;
            stepEl.classList.toggle('ci-design-process__step--active', stepNumber === step);
        });

        // Update navigation buttons
        prevBtn.disabled = step === 1;
        nextBtn.disabled = step === 6;

        currentStep = step;
    }

    // Circle click handlers
    circles.forEach(circle => {
        circle.addEventListener('click', () => {
            const step = parseInt(circle.getAttribute('data-step'));
            updateStepper(step);
        });
    });

    // Navigation button handlers
    prevBtn.addEventListener('click', () => {
        if (currentStep > 1) {
            updateStepper(currentStep - 1);
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentStep < 6) {
            updateStepper(currentStep + 1);
        }
    });

    // Initialize first step
    updateStepper(1);
});

// Testimonials auto-rotation
document.addEventListener('DOMContentLoaded', () => {
    const testimonialsSection = document.querySelector('.ci-testimonials');
    const testimonialsRoot = document.querySelector('[data-ci-testimonials]');

    if (!testimonialsSection || !testimonialsRoot) {
        return;
    }

    const rows = Array.from(testimonialsRoot.querySelectorAll('.ci-testimonials__row'));
    const quoteEl = testimonialsRoot.querySelector('[data-ci-testimonials-quote]');
    const authorEl = testimonialsRoot.querySelector('[data-ci-testimonials-author]');
    const projectEl = testimonialsRoot.querySelector('[data-ci-testimonials-project]');
    const quoteContentEl = testimonialsRoot.querySelector('[data-ci-testimonials-content]');

    if (!rows.length || !quoteEl || !authorEl || !projectEl || !quoteContentEl) {
        return;
    }

    const testimonialsData = [
        {
            name: 'Priya Sharma',
            location: 'Hyderabad',
            project: 'Full Home Design',
            quote: 'Cosmic Interiors transformed our apartment into a sanctuary. Every detail was thoughtfully considered and the team was incredibly professional throughout.',
        },
        {
            name: 'Rahul Mehta',
            location: 'Mumbai',
            project: 'Modular Kitchen',
            quote: 'The kitchen they designed for us is beyond what we imagined. Functional, beautiful and crafted with such precision. Truly world class work.',
        },
        {
            name: 'Ananya Reddy',
            location: 'Bengaluru',
            project: 'Living Room',
            quote: 'From the first consultation to the final reveal, the experience was seamless. Our living room now feels like it belongs in a design magazine.',
        },
        {
            name: 'Vikram Nair',
            location: 'Chennai',
            project: 'Master Bedroom',
            quote: 'They listened to every requirement and delivered a bedroom that feels personal, calm and luxurious at the same time. Outstanding team.',
        },
        {
            name: 'Sneha Iyer',
            location: 'Hyderabad',
            project: 'Wardrobe Design',
            quote: 'The wardrobe system they built is incredibly smart and elegant. It fits our space perfectly and looks stunning. Highly recommend Cosmic Interiors.',
        },
    ];

    let currentIndex = rows.findIndex((row) => row.classList.contains('ci-testimonials__row--active'));
    if (currentIndex < 0) {
        currentIndex = 0;
    }

    let autoRotateId = null;
    let fadeTimeoutId = null;

    const applySlide = (index, withFade = true) => {
        const slide = testimonialsData[index];
        if (!slide) {
            return;
        }

        rows.forEach((row, rowIndex) => {
            row.classList.toggle('ci-testimonials__row--active', rowIndex === index);
            row.setAttribute('aria-current', rowIndex === index ? 'true' : 'false');
        });

        const updateText = () => {
            quoteEl.textContent = slide.quote;
            authorEl.textContent = slide.name;
            projectEl.textContent = `${slide.location} | ${slide.project}`;
        };

        if (withFade) {
            quoteContentEl.classList.add('is-fading');
            if (fadeTimeoutId) {
                window.clearTimeout(fadeTimeoutId);
            }

            fadeTimeoutId = window.setTimeout(() => {
                updateText();
                quoteContentEl.classList.remove('is-fading');
            }, 250);
        } else {
            updateText();
        }

        currentIndex = index;
    };

    const clearAutoRotate = () => {
        if (!autoRotateId) {
            return;
        }

        window.clearInterval(autoRotateId);
        autoRotateId = null;
    };

    const startAutoRotate = () => {
        clearAutoRotate();
        autoRotateId = window.setInterval(() => {
            const nextIndex = (currentIndex + 1) % testimonialsData.length;
            applySlide(nextIndex, true);
        }, 2000);
    };

    const onSelect = (index) => {
        if (Number.isNaN(index) || index === currentIndex) {
            return;
        }

        applySlide(index, true);
        startAutoRotate();
    };

    rows.forEach((row) => {
        row.addEventListener('click', () => {
            const selectedIndex = Number.parseInt(row.dataset.index || '', 10);
            onSelect(selectedIndex);
        });
    });

    applySlide(currentIndex, false);
    startAutoRotate();
});
