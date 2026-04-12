<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>GTech | IT Solutions & Enterprise Software Systems</title>
    <meta name="title" content="GTech | Premium IT Solutions & Enterprise Software Systems" />
    <meta name="description"
        content="Empowering global enterprises with high-performance IT infrastructure, bespoke software development, and advanced cybersecurity. Scale your business with GTech's cutting-edge cloud and ERP solutions." />
    <meta name="keywords"
        content="IT Consulting, Custom Software Development, Enterprise ERP, Cloud Infrastructure, Cybersecurity Solutions, Managed IT Services, Digital Transformation, Business Automation" />
    <meta name="author" content="GTech" />
    <meta name="theme-color" content="#2563eb" />
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%232563eb%22/><path d=%22M30 45l20 10 20-10M50 55v20%22 stroke=%22white%22 stroke-width=%228%22 fill=%22none%22 stroke-linecap=%22round%22/></svg>">

    <!-- Open Graph / Meta Data for Social Sharing -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="GTech | Accelerate Your Digital Transformation" />
    <meta property="og:description"
        content="Leading-edge technology partner for enterprises. Seamlessly scale your operations with GTech's superior network infrastructure, cyber protection, and ERP automation." />
    <meta property="og:image"
        content="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=630&q=80" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:site_name" content="GTech" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-outfit text-slate-800 bg-slate-50 antialiased overflow-x-hidden">
    {{ $slot }}

    <style>
        [x-cloak] {
            display: none !important;
        }

        @keyframes fadeSlideUp {
            from {
                opacity: 0;
                transform: translateY(24px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-up {
            animation: fadeSlideUp 0.8s ease both;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            animation: marquee 25s linear infinite;
        }
    </style>
</body>

</html>