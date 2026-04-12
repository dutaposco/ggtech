<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Primary Meta Tags -->
    <title>GTech | Professional IT Platform & Enterprise Infrastructure</title>
    <meta name="title" content="GTech | Professional IT Platform & Enterprise Infrastructure" />
    <meta name="description" content="Mitra pengembangan teknologi terdepan untuk enterprise. Skalakan operasional bisnis Anda tanpa kendala dengan infrastruktur jaringan, perlindungan siber, dan otomatisasi ERP unggulan dari GTech." />
    <meta name="keywords" content="IT Solutions, Cloud Hosting, Provider Internet Bisnis, ISP Dedicated Fiber, Cybersecurity, Enterprise ERP, HRIS Terintegrated, Software House Indonesia" />
    <meta name="author" content="GTech" />
    <meta name="theme-color" content="#2563eb" />

    <!-- Open Graph / Meta Data untuk Link Sharing -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="GTech | Solusi IT Kelas Enterprise untuk Bisnis Anda" />
    <meta property="og:description" content="Mitra pengembangan teknologi terdepan untuk enterprise. Skalakan operasional bisnis Anda tanpa kendala dengan infrastruktur jaringan, perlindungan siber, dan otomatisasi ERP unggulan dari GTech." />
    <meta property="og:image" content="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=630&q=80" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:site_name" content="GTech" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-outfit text-slate-800 bg-slate-50 antialiased overflow-x-hidden">
    {{ $slot }}

    <style>
        [x-cloak] { display: none !important; }
        
        @keyframes fadeSlideUp {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fade-up {
            animation: fadeSlideUp 0.8s ease both;
        }

        @keyframes marquee {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }

        .animate-marquee {
            animation: marquee 25s linear infinite;
        }
    </style>
</body>
</html>
