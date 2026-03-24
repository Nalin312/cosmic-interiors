@extends('layouts.app')
@section('title', 'Living Room | Cosmic Interiors')

@php
    $pageTitle = 'Living Room';
    $heroHeading = 'Living Room Designs';
    $heroSubheading = 'Shaped Around You';
    $heroImage = asset('Images/homelux.jpg');
    $heroCtaText = 'Book Free Design Session';

    $trendingEyebrow = 'Trending Living Room Designs';
    $trendingHeading = 'Popular Living Room Designs';
    $trendingDescription = 'Discover modern, traditional and open-plan living room concepts reimagined with Cosmic Interiors tones and materials.';
    $trendingLoadMoreText = 'Load More';

    $whyEyebrow = "Why Choose Cosmic Interiors? Here's Why!";
    $whyHeading = 'Delivery in 45 days*, no hidden costs, flat 10-year warranty and easy EMI options.';

    $estimateHeading = 'Get a Free, Instant Estimate for Your Home';
    $estimateDescription = 'Share your living room dimensions and style direction to receive a quick budget estimate from our team.';

    $designersEyebrow = 'Meet Our Expert Designers';
    $designersHeading = 'The minds behind the magic';

    $homesEyebrow = '55000+ Homes Designed with Love';
    $homesHeading = 'Customer stories from concept to handover';
    $homesDescription = 'Every living room here was shaped around real routines, real personalities and real family moments. Let these stories inspire your own space.';

    $processEyebrow = 'From Design to Move-In';
    $processHeading = 'Our 6-step process for complete living room interiors';
    $processSteps = [
        ['title' => 'Meet Your Designer', 'description' => 'Share your ideas and floor plan to receive personalised 3D designs and an instant quote.'],
        ['title' => 'Book Your Order', 'description' => 'Pay 10% of the woodwork and home decor services to confirm your booking and project timeline.'],
        ['title' => 'Finalise Your Design', 'description' => 'Choose materials, finishes and colours. Pay the next 10% to lock designs and begin site masking and checks.'],
        ['title' => 'Send Designs to Factory', 'description' => 'Pay 30% of woodwork and 80% of home decor services to start production at our quality-controlled factory.'],
        ['title' => 'Kick Off Dispatch', 'description' => 'Pay the remaining 50% of woodwork to dispatch your order post-production and begin site installation.'],
        ['title' => 'Complete Installation & Handover', 'description' => 'Our team installs, completes final checks and hands over your home for a smooth move-in.'],
    ];

    $storiesEyebrow = 'Stories Behind the Designs';
    $storiesHeading = 'Real homes and meaningful living room transformations';
    $storiesDescription = 'Behind each room is a unique way of living, with colours, memories and practical needs shaped into soulful spaces.';

    $citiesEyebrow = 'Find Us In Your City';
    $citiesHeading = 'Explore our presence across India';
    $citiesDescription = 'Click your city to start your living room design consultation with Cosmic Interiors.';

    $faqEyebrow = 'FAQs on Living Room Design';
    $faqHeading = 'FAQs on Living Room Design';

    $designCards = [
        ['title' => 'Chic Contrast Open-Plan Living Room Design', 'subtitle' => 'Balanced zoning with layered neutral textures', 'image' => asset('Images/homelux.jpg')],
        ['title' => 'Retro Revival Living Room Design', 'subtitle' => 'Warm wood notes with nostalgic accents', 'image' => asset('Images/779c4e03-c3bf-42c5-afe4-1138b763f65d.jfif')],
        ['title' => 'Pastel Paradise Open-Plan Living Room Design', 'subtitle' => 'Soft tones with daylight-friendly styling', 'image' => asset('Images/2488a4ab-bbe3-488a-a4ed-d359e3cfdc41.jfif')],
        ['title' => 'Teal Treasures Living Room Design', 'subtitle' => 'Accent color palette with clean geometry', 'image' => asset('Images/972af4fc-04c3-441e-ad50-2ba20ae0d3ba.jfif')],
        ['type' => 'estimate', 'title' => 'Instant Estimate', 'subtitle' => 'Experience living room interiors crafted for your home and to host your parties.', 'button' => 'Get Free Estimate'],
        ['title' => 'Sylvan Oasis Balcony Design', 'subtitle' => 'Green transition from lounge to balcony edge', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
        ['title' => 'Bohemian Jungle Living Room Design', 'subtitle' => 'Indoor greens with artisanal decor layers', 'image' => asset('Images/f7d24c7a-6cd8-424a-927a-6cd4fea2b9a1.jfif')],
        ['title' => 'Urban Sunshine Living Room Design', 'subtitle' => 'Bright compact layout with cozy corners', 'image' => asset('Images/4f7aed01-057c-4c2b-b5b9-8780354644d2.jfif')],
        ['title' => 'Mediterranean Escape Living Room Design', 'subtitle' => 'Textured walls and airy composition', 'image' => asset('Images/cd1e9de9-0b61-43ca-a37d-ca746a70993f.jfif')],
        ['type' => 'estimate', 'title' => 'Instant Estimate', 'subtitle' => 'The most colourful living room interiors and designer-curated furniture at great prices.', 'button' => 'Get Free Estimate'],
        ['title' => 'Artsy Opulence Living Room Design', 'subtitle' => 'Statement art and luxe material accents', 'image' => asset('Images/homelux.jpg')],
        ['title' => 'Modern Oasis Living Room Design', 'subtitle' => 'Minimal luxury with integrated media wall', 'image' => asset('Images/779c4e03-c3bf-42c5-afe4-1138b763f65d.jfif')],
        ['title' => 'Curvaceously Yours Living Room Design', 'subtitle' => 'Rounded furniture language with soft flow', 'image' => asset('Images/2488a4ab-bbe3-488a-a4ed-d359e3cfdc41.jfif')],
        ['title' => 'Wood and Bricks Contemporary Living Room Design', 'subtitle' => 'Earthy textures with urban contrast', 'image' => asset('Images/972af4fc-04c3-441e-ad50-2ba20ae0d3ba.jfif')],
        ['type' => 'estimate', 'title' => 'Instant Estimate', 'subtitle' => 'Looking for simple interiors for living rooms? Get trendy interiors delivered in 45 days*.', 'button' => 'Get Free Estimate'],
        ['title' => 'Moody Browns Contemporary Studio Design', 'subtitle' => 'Rich tones for compact city studio living', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
        ['title' => 'Confetti and Sunshine Unisex Kids Room Design', 'subtitle' => 'Playful connected family lounge extension', 'image' => asset('Images/f7d24c7a-6cd8-424a-927a-6cd4fea2b9a1.jfif')],
        ['title' => 'Neutral Wonder Modern Living Room Design', 'subtitle' => 'Calm textures with layered neutrals', 'image' => asset('Images/4f7aed01-057c-4c2b-b5b9-8780354644d2.jfif')],
        ['title' => 'Brilliantly White Living Room Design', 'subtitle' => 'Light-centric composition with subtle warmth', 'image' => asset('Images/cd1e9de9-0b61-43ca-a37d-ca746a70993f.jfif')],
        ['type' => 'estimate', 'title' => 'Instant Estimate', 'subtitle' => 'Choose traditional or modern living room interiors with a 10-year Cosmic warranty.', 'button' => 'Get Free Estimate'],
        ['title' => 'Contemporary and Bright Living Room Design', 'subtitle' => 'Open layout tuned for family hosting', 'image' => asset('Images/homelux.jpg')],
        ['title' => 'Perfect Flaws Rustic Living Room Design', 'subtitle' => 'Raw textures and refined rustic balance', 'image' => asset('Images/779c4e03-c3bf-42c5-afe4-1138b763f65d.jfif')],
        ['title' => 'Grey Matters Contemporary Living Room Design', 'subtitle' => 'Monochrome layering with warm undertones', 'image' => asset('Images/2488a4ab-bbe3-488a-a4ed-d359e3cfdc41.jfif')],
        ['title' => 'Fabulously White Contemporary Studio Design', 'subtitle' => 'Compact studio lounge with elegant light palette', 'image' => asset('Images/972af4fc-04c3-441e-ad50-2ba20ae0d3ba.jfif')],
    ];

    $designerCards = [
        ['name' => 'Manusha R', 'role' => 'Living room interior design expert - Chennai', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif'), 'projects' => '200+', 'experience' => '12+'],
        ['name' => 'Lohith N Chandukar', 'role' => 'Living room interior design expert - Bengaluru', 'image' => asset('Images/d92e9717-99e7-4510-b01d-2935528e659e.jfif'), 'projects' => '100+', 'experience' => '6+'],
        ['name' => 'Shikha Gupta', 'role' => 'Living room design specialist - Bengaluru', 'image' => asset('Images/cd1e9de9-0b61-43ca-a37d-ca746a70993f.jfif'), 'projects' => '140+', 'experience' => '20+'],
        ['name' => 'Pritha Chakraborty', 'role' => 'Modern living room design expert - Kolkata', 'image' => asset('Images/4f7aed01-057c-4c2b-b5b9-8780354644d2.jfif'), 'projects' => '150+', 'experience' => '8+'],
    ];

    $testimonialSlides = [
        ['chip' => 'Nithila', 'name' => "Dr. Nithilavalli and Uday's Villa", 'meta' => 'Kadaieswarar Garden - Coimbatore', 'quote' => 'If you leave things to Cosmic Interiors, everything will surely be taken care of.', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
        ['chip' => 'Prateek', 'name' => "Prateek and Aastha's Home", 'meta' => 'Pioneer Presidia - Gurugram', 'quote' => 'I highly recommend to everyone. If you are looking for quality wooden work, go to Cosmic Interiors.', 'image' => asset('Images/4f7aed01-057c-4c2b-b5b9-8780354644d2.jfif')],
        ['chip' => 'Karishma', 'name' => "Karishma Sharma's Home", 'meta' => 'Lashkaria Empress - Mumbai', 'quote' => 'As an actor-influencer, getting a photoshoot-ready home was very easy with Cosmic Interiors.', 'image' => asset('Images/779c4e03-c3bf-42c5-afe4-1138b763f65d.jfif')],
        ['chip' => 'Anupam', 'name' => "Anupam and Archana's Home", 'meta' => 'Prestige Lakeside Habitat - Bengaluru', 'quote' => 'Our first 2BHK was with Cosmic Interiors. When we bought this home, Cosmic came to mind again.', 'image' => asset('Images/homelux.jpg')],
        ['chip' => 'Megha', 'name' => "Megha and Rohan's Home", 'meta' => 'Narsingi - Hyderabad', 'quote' => 'The living room now reflects our lifestyle exactly. It feels warm in the mornings and elegant for evening hosting.', 'image' => asset('Images/972af4fc-04c3-441e-ad50-2ba20ae0d3ba.jfif')],
    ];

    $storyCards = [
        ['title' => 'Discover the Charm of Pastels in This Hyderabad Home!', 'image' => asset('Images/2488a4ab-bbe3-488a-a4ed-d359e3cfdc41.jfif')],
        ['title' => 'Innately Warm and Expertly Crafted, This Hyderabad Home Is a Visual Delight!', 'image' => asset('Images/779c4e03-c3bf-42c5-afe4-1138b763f65d.jfif')],
        ['title' => 'This Stunning Chennai Home Channels Nuanced Character and Tonality', 'image' => asset('Images/972af4fc-04c3-441e-ad50-2ba20ae0d3ba.jfif')],
        ['title' => 'Tour a Sophisticated Chennai Home That Maximises Space with Minimalist Designs', 'image' => asset('Images/homelux.jpg')],
        ['title' => 'A Rainbow of Pastels Invigorates this Delightful Mumbai Abode!', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
        ['title' => 'This Mumbai Home Delivers Luxe Style in a Compact Footprint', 'image' => asset('Images/f7d24c7a-6cd8-424a-927a-6cd4fea2b9a1.jfif')],
        ['title' => 'Utilitarian and Comfortable, This Mumbai Home Is All About Thoughtfully Designed Spaces', 'image' => asset('Images/4f7aed01-057c-4c2b-b5b9-8780354644d2.jfif')],
        ['title' => 'Luxe Details Enhance the Style Quotient of This Modern Noida Home!', 'image' => asset('Images/cd1e9de9-0b61-43ca-a37d-ca746a70993f.jfif')],
        ['title' => 'This Bangalore Home Uses a Playful Palette to Redefine Luxe Living', 'image' => asset('Images/2488a4ab-bbe3-488a-a4ed-d359e3cfdc41.jfif')],
        ['title' => 'A Bangalore Home That Celebrates Clean Lines and Neutral Hues', 'image' => asset('Images/779c4e03-c3bf-42c5-afe4-1138b763f65d.jfif')],
        ['title' => 'This Bangalore Villa Infuses Vibrant Hues and Metallic Accents into a Modern Canvas', 'image' => asset('Images/972af4fc-04c3-441e-ad50-2ba20ae0d3ba.jfif')],
        ['title' => 'This Contemporary Hyderabad Home is Designer Eye Candy!', 'image' => asset('Images/homelux.jpg')],
    ];

    $cities = [
        ['name' => 'Bangalore', 'route' => route('cities.bangalore')],
        ['name' => 'Hyderabad', 'route' => route('cities.hyderabad')],
        ['name' => 'Chennai', 'route' => route('cities.chennai')],
        ['name' => 'Mumbai', 'route' => route('cities.mumbai')],
    ];

    $faqItems = [
        [
            'q' => 'How can I design a living room interior that truly feels like home?',
            'a' => 'Start with how you actually use the space, then build around that with a clear color direction, comfortable seating, layered lighting and personal decor accents. A good living room plan balances aesthetics and daily function.',
        ],
        [
            'q' => 'What are the essential elements of a thoughtfully designed living room?',
            'a' => 'A strong focal point, flexible seating layout, layered lighting, soft furnishings, and practical storage are the core elements. When these work together, the room feels both inviting and efficient.',
        ],
        [
            'q' => 'How do I decide the best layout for my living room?',
            'a' => 'Evaluate circulation first, then choose a layout style: symmetrical, asymmetrical, zoned, or L-shaped. Keep at least three feet of movement space between major furniture pieces for comfort.',
        ],
        [
            'q' => 'What living room design trends are most relevant right now?',
            'a' => 'Warm earthy palettes, textural layering, multifunctional furniture, statement lighting, and nature-led styling are currently strong trends. These choices improve both comfort and visual depth.',
        ],
        [
            'q' => 'How can I create a luxurious living room without making it feel heavy?',
            'a' => 'Use a clean base palette, then add luxury through materials and detail: rich fabrics, curated lighting, thoughtful metallic accents, and custom joinery. Keep forms refined and clutter low.',
        ],
        [
            'q' => 'How do I choose the right colors for my living room?',
            'a' => 'Pick a primary base tone, a secondary support tone and one accent. Test colors in daylight and evening light before finalizing. The final palette should align with your furniture and flooring materials.',
        ],
        [
            'q' => 'What are some popular living room design styles?',
            'a' => 'Modern minimal, contemporary luxe, Scandinavian calm, and earthy transitional styles are most requested. We map style direction to your lifestyle and room proportions before finalizing.',
        ],
        [
            'q' => 'How can I make a small living room feel more spacious?',
            'a' => 'Use compact proportions, light-reflective finishes, wall-mounted storage, and clear circulation paths. Multi-functional furniture and layered lighting also make the room feel larger.',
        ],
        [
            'q' => 'How much should I budget for living room interior design in India?',
            'a' => 'Budgets vary by scope, carpentry depth, finishes and furnishings. We provide an instant room-wise estimate and then a transparent detailed quote after concept freeze.',
        ],
        [
            'q' => 'Can I create a stylish living room on a budget without sacrificing quality?',
            'a' => 'Yes. Prioritise layout, lighting, and core joinery quality first. We then phase accessories and premium upgrades to achieve a refined result within your budget.',
        ],
        [
            'q' => 'How can I choose the perfect furniture for my living room?',
            'a' => 'Start with your room size and use case, then choose sofa depth, coffee table proportion and storage pieces accordingly. Durable upholstery and easy-maintenance finishes are key for Indian homes.',
        ],
        [
            'q' => 'What smart technology integrations work well for modern living rooms?',
            'a' => 'Smart dimmers, layered scene lighting, concealed wiring for media units, automated curtains and integrated charging points are practical upgrades for a future-ready lounge.',
        ],
        [
            'q' => 'Does Cosmic Interiors offer living room interior design services near me?',
            'a' => 'Yes. We work across major Indian cities with design consultation, execution planning, factory production, installation and post-handover support.',
        ],
    ];

    $ctaHeading = 'Ready to design your living room with Cosmic Interiors?';
    $ctaDescription = 'Book your free consultation to get design direction, material recommendations and a transparent estimate.';
@endphp

@include('design-gallery._design-gallery-template')
