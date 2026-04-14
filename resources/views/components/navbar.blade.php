@php
    $menuData = [
        'products' => [
            'title' => __('The GTech Innovation Hub'),
            'subtitle' => __('Integrated technology solutions to scale your enterprise efficiently.'),
            'items' => [
                ['title' => 'Cloud Infrastructure', 'desc' => 'High-performance cloud & NVMe storage.', 'icon' => '☁️', 'href' => '#products'],
                ['title' => 'Managed Services', 'desc' => '24/7 proactive monitoring & maintenance.', 'icon' => '🛠️', 'href' => '#products'],
                ['title' => 'Cybersecurity', 'desc' => 'Next-gen protection for your digital assets.', 'icon' => '🛡️', 'href' => '#products'],
                ['title' => 'Enterprise ERP', 'desc' => 'Streamline business operations in one place.', 'icon' => '📊', 'href' => '#products'],
            ],
            'bottom_links' => [
                ['label' => 'Overview of all products', 'href' => '#products'],
                ['label' => 'Free IT Audit', 'href' => '#contact'],
            ]
        ],
        'solutions' => [
            'use_case' => [
                ['name' => 'By Industry', 'items' => ['Government', 'Financial Services', 'Healthcare', 'Manufacturing']],
                ['name' => 'By Need', 'items' => ['Digital Transformation', 'Data Analytics', 'Business Continuity', 'Cloud Migration']],
            ],
            'team_size' => [
                [
                    'title' => 'For Small Businesses & Startups',
                    'desc' => "GTech's integrated starter platform helps your growing startup find and win customers from day one.",
                    'image' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=400',
                    'href' => '#contact'
                ],
                [
                    'title' => 'For Enterprises',
                    'desc' => "With GTech's integrated Enterprise Platform, you don't have to sacrifice power for ease of use.",
                    'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=400',
                    'href' => '#contact'
                ]
            ]
        ],
        'resources' => [
            'columns' => [
                ['title' => 'Knowledge', 'links' => ['Case Studies', 'Documentation', 'Blog', 'System Status']],
                ['title' => 'Support', 'links' => ['Help Center', 'Community', 'Security Advisories', 'Contact Sales']],
            ]
        ]
    ];
@endphp

<nav x-data="{ scrolled: false, open: false, activeMenu: null, solutionsTab: 'use_case', mobileSub: null }"
    @scroll.window="scrolled = window.scrollY > 10" @mouseleave="activeMenu = null"
    :class="scrolled ? 'bg-white/95 backdrop-blur-md py-3 shadow-md' : 'bg-white py-4 shadow-[0_2px_10px_rgba(0,0,0,0.05)]'"
    class="fixed top-0 left-0 right-0 z-[100] transition-all duration-300 border-b border-slate-100 h-[76px] flex items-center">

    <div class="w-full max-w-[1440px] mx-auto px-10 lg:px-28 flex items-center justify-between">

        {{-- LEFT SIDE: LOGO & NAV --}}
        <div class="flex items-center gap-10 lg:gap-14 lg:pl-4">
            <a href="#home" @click="activeMenu = null; open = false"
                class="flex items-center text-[30px] font-black tracking-tighter text-slate-900 transition-colors">
                G<span class="text-blue-600">Tech</span>
            </a>

            {{-- DESKTOP MENU ITEMS --}}
            <ul class="hidden lg:flex items-center gap-8 translate-y-[1px]">
                {{-- Products --}}
                <li class="relative group" @mouseenter="activeMenu = 'products'">
                    <a href="javascript:void(0)" @click.prevent=""
                        class="text-[17px] font-semibold text-slate-700 hover:text-blue-600 flex items-center gap-1.5 py-6 transition-colors"
                        :class="activeMenu === 'products' ? 'text-blue-600' : ''">
                        {{ __('Products') }}
                        <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="3"
                            viewBox="0 0 24 24" class="transition-transform duration-300"
                            :class="activeMenu === 'products' ? 'rotate-180' : ''">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                </li>

                {{-- Solutions --}}
                <li class="relative group" @mouseenter="activeMenu = 'solutions'">
                    <a href="javascript:void(0)" @click.prevent=""
                        class="text-[17px] font-semibold text-slate-700 hover:text-blue-600 flex items-center gap-1.5 py-6 transition-colors"
                        :class="activeMenu === 'solutions' ? 'text-blue-600' : ''">
                        {{ __('Solutions') }}
                        <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="3"
                            viewBox="0 0 24 24" class="transition-transform duration-300"
                            :class="activeMenu === 'solutions' ? 'rotate-180' : ''">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                </li>

                {{-- Pricing --}}
                <li>
                    <a href="#pricing" @mouseenter="activeMenu = null"
                        class="text-[17px] font-semibold text-slate-700 hover:text-blue-600 py-6 transition-colors font-sans">
                        {{ __('Pricing') }}
                    </a>
                </li>

                {{-- Resources --}}
                <li class="relative group" @mouseenter="activeMenu = 'resources'">
                    <a href="javascript:void(0)" @click.prevent=""
                        class="text-[17px] font-semibold text-slate-700 hover:text-blue-600 flex items-center gap-1.5 py-6 transition-colors"
                        :class="activeMenu === 'resources' ? 'text-blue-600' : ''">
                        {{ __('Resources') }}
                        <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="3"
                            viewBox="0 0 24 24" class="transition-transform duration-300"
                            :class="activeMenu === 'resources' ? 'rotate-180' : ''">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        {{-- RIGHT SIDE: CTA --}}
        <div class="flex items-center gap-4 lg:gap-6">
            <div class="hidden lg:block relative" x-data="{ langOpen: false }" @click.away="langOpen = false">
                <button @click="langOpen = !langOpen"
                    class="flex items-center gap-2 text-[15px] font-bold text-slate-600 hover:text-blue-600">
                    <span class="flex items-center gap-2">🌐 <span>{{ strtoupper(app()->getLocale()) }}</span></span>
                    <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"
                        :class="langOpen ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="langOpen"
                    class="absolute top-10 right-0 w-36 bg-white border border-slate-100 shadow-xl rounded-lg py-2">
                    <a href="{{ route('lang.switch', 'en') }}"
                        class="block px-4 py-2 text-sm font-semibold hover:bg-blue-50">English</a>
                    <a href="{{ route('lang.switch', 'id') }}"
                        class="block px-4 py-2 text-sm font-semibold hover:bg-blue-50">Indonesia</a>
                </div>
            </div>

            <a href="#contact"
                class="hidden lg:inline-flex bg-blue-600 hover:bg-blue-700 text-white font-bold text-[14px] px-6 py-2.5 rounded-[4px] transition-all">
                {{ __('Get a demo') }}
            </a>
            <a href="#contact"
                class="hidden lg:inline-flex border border-blue-600 text-blue-600 hover:bg-blue-50 font-bold text-[14px] px-6 py-2.5 rounded-[4px] transition-all">
                {{ __('Get started free') }}
            </a>

            {{-- MOBILE BURGER --}}
            <button class="lg:hidden flex flex-col gap-1.5 p-2" @click="open = !open">
                <span class="block w-6 h-0.5 bg-slate-800 transition-all"
                    :class="open ? 'rotate-45 translate-y-2' : ''"></span>
                <span class="block w-6 h-0.5 bg-slate-800 transition-all" :class="open ? 'opacity-0' : ''"></span>
                <span class="block w-6 h-0.5 bg-slate-800 transition-all"
                    :class="open ? '-rotate-45 -translate-y-2' : ''"></span>
            </button>
        </div>
    </div>

    {{-- MEGA MENU PANELS (DESKTOP) --}}

    {{-- 1. PRODUCTS --}}
    <div x-show="activeMenu === 'products'" x-transition @mouseenter="activeMenu = 'products'"
        class="absolute top-[76px] left-0 right-0 bg-white border-b border-slate-200 shadow-2xl z-40 hidden lg:block">
        <div class="max-w-[1440px] mx-auto grid grid-cols-12 p-10 gap-x-12">
            <div class="col-span-3">
                <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $menuData['products']['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-6">{{ $menuData['products']['subtitle'] }}</p>
                <div class="flex flex-col gap-3">
                    @foreach($menuData['products']['bottom_links'] as $link)
                        <a href="{{ $link['href'] }}"
                            class="text-blue-600 font-bold text-sm hover:underline flex items-center gap-2">
                            {{ $link['label'] }} <span class="text-lg">→</span>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-span-9 grid grid-cols-2 gap-8 border-l border-slate-100 pl-12">
                @foreach($menuData['products']['items'] as $item)
                    <a href="{{ $item['href'] }}"
                        class="group/item flex gap-4 p-4 rounded-xl hover:bg-blue-50 transition-all">
                        <div
                            class="w-12 h-12 bg-white shadow-sm border border-slate-100 rounded-lg flex items-center justify-center text-2xl group-hover/item:scale-110 transition-transform">
                            {{ $item['icon'] }}
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 group-hover/item:text-blue-600 transition-colors">
                                {{ $item['title'] }}</h4>
                            <p class="text-sm text-slate-500">{{ $item['desc'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- 2. SOLUTIONS (INTERACTIVE TABS) --}}
    <div x-show="activeMenu === 'solutions'" x-transition @mouseenter="activeMenu = 'solutions'"
        class="absolute top-[76px] left-0 right-0 bg-white border-b border-slate-200 shadow-2xl z-40 hidden lg:block">
        <div class="max-w-[1440px] mx-auto flex h-[480px]">
            {{-- Tab Selectors --}}
            <div class="w-1/4 bg-slate-50 p-10 border-r border-slate-200">
                <div class="flex flex-col gap-3">
                    <button @click="solutionsTab = 'use_case'"
                        class="flex items-center justify-between font-bold p-4 rounded-lg transition-all"
                        :class="solutionsTab === 'use_case' ? 'text-blue-600 bg-white shadow-sm' : 'text-slate-500 hover:bg-white/50'">
                        {{ __('By Use Case') }} <span class="text-lg">›</span>
                    </button>
                    <button @click="solutionsTab = 'team_size'"
                        class="flex items-center justify-between font-bold p-4 rounded-lg transition-all"
                        :class="solutionsTab === 'team_size' ? 'text-blue-600 bg-white shadow-sm' : 'text-slate-500 hover:bg-white/50'">
                        {{ __('By Team Size') }} <span class="text-lg">›</span>
                    </button>
                </div>
            </div>

            {{-- Tab Content --}}
            <div class="w-3/4 p-10 overflow-y-auto">
                {{-- Use Case Content --}}
                <div x-show="solutionsTab === 'use_case'" class="grid grid-cols-3 gap-10">
                    @foreach($menuData['solutions']['use_case'] as $cat)
                        <div>
                            <h4 class="text-xs font-black uppercase tracking-widest text-slate-400 mb-6">{{ $cat['name'] }}
                            </h4>
                            <ul class="flex flex-col gap-4">
                                @foreach($cat['items'] as $item)
                                    <li>
                                        <a href="#services" @click="activeMenu = null" class="group block">
                                            <span
                                                class="font-bold text-slate-800 group-hover:text-blue-600 transition-colors">{{ $item }}</span>
                                            <p class="text-xs text-slate-400">Tailored implementation for
                                                {{ strtolower($item) }} organizations.</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>

                {{-- Team Size Content --}}
                <div x-show="solutionsTab === 'team_size'" class="grid grid-cols-2 gap-8">
                    @foreach($menuData['solutions']['team_size'] as $card)
                        <a href="{{ $card['href'] }}" @click="activeMenu = null"
                            class="group/card block bg-white border border-slate-100 rounded-2xl overflow-hidden hover:shadow-xl transition-all">
                            <img src="{{ $card['image'] }}"
                                class="w-full h-40 object-cover group-hover/card:scale-105 transition-transform duration-500" />
                            <div class="p-6">
                                <h4 class="font-bold text-slate-900 mb-2 group-hover/card:text-blue-600">
                                    {{ $card['title'] }}</h4>
                                <p class="text-sm text-slate-500 mb-4">{{ $card['desc'] }}</p>
                                <span class="text-blue-600 font-bold text-sm flex items-center gap-2">
                                    Learn more <span class="text-lg">→</span>
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- 3. RESOURCES --}}
    <div x-show="activeMenu === 'resources'" x-transition @mouseenter="activeMenu = 'resources'"
        class="absolute top-[76px] left-0 right-0 bg-white border-b border-slate-200 shadow-2xl z-40 hidden lg:block">
        <div class="max-w-[1440px] mx-auto grid grid-cols-4 p-10 gap-10">
            @foreach($menuData['resources']['columns'] as $col)
                <div>
                    <h4 class="text-sm font-bold text-slate-900 mb-6 border-b border-slate-100 pb-2">{{ $col['title'] }}
                    </h4>
                    <ul class="flex flex-col gap-4">
                        @foreach($col['links'] as $link)
                            <li>
                                <a href="#"
                                    class="text-slate-600 font-semibold hover:text-blue-600 transition-colors flex items-center gap-2">
                                    {{ $link }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
            <div class="col-span-2 bg-blue-600 rounded-2xl p-8 text-white relative overflow-hidden group">
                <div class="relative z-10">
                    <h4 class="text-2xl font-bold mb-2">GTech Community</h4>
                    <p class="text-blue-100 mb-6 text-sm">Join over 5,000+ IT professionals sharing knowledge daily.</p>
                    <a href="#"
                        class="inline-flex items-center bg-white text-blue-600 font-bold px-6 py-3 rounded-lg hover:shadow-lg transition-all">Join
                        Now</a>
                </div>
            </div>
        </div>
    </div>

    {{-- MOBILE MENU (ACCORDION) --}}
    <div x-show="open" x-transition
        class="absolute top-[76px] left-0 right-0 bg-white border-b border-slate-200 shadow-xl lg:hidden overflow-y-auto max-h-[calc(100vh-76px)]">
        <div class="flex flex-col">
            {{-- Mobile Products --}}
            <div class="border-b border-slate-100">
                <button @click="mobileSub = mobileSub === 'products' ? null : 'products'"
                    class="w-full flex justify-between items-center p-5 font-bold text-slate-800">
                    Products <span :class="mobileSub === 'products' ? 'rotate-180' : ''"
                        class="transition-transform">▾</span>
                </button>
                <div x-show="mobileSub === 'products'" class="bg-slate-50 p-4 grid grid-cols-1 gap-2">
                    @foreach($menuData['products']['items'] as $item)
                        <a href="{{ $item['href'] }}" class="flex items-center gap-3 p-3 bg-white rounded-lg shadow-sm">
                            <span>{{ $item['icon'] }}</span> <span class="font-semibold text-sm">{{ $item['title'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Mobile Solutions --}}
            <div class="border-b border-slate-100">
                <button @click="mobileSub = mobileSub === 'solutions' ? null : 'solutions'"
                    class="w-full flex justify-between items-center p-5 font-bold text-slate-800">
                    Solutions <span :class="mobileSub === 'solutions' ? 'rotate-180' : ''"
                        class="transition-transform">▾</span>
                </button>
                <div x-show="mobileSub === 'solutions'" class="bg-slate-50 p-4 flex flex-col gap-4">
                    <div class="font-bold text-blue-600 text-xs uppercase tracking-widest">{{ __('By Team Size') }}
                    </div>
                    @foreach($menuData['solutions']['team_size'] as $card)
                        <a href="{{ $card['href'] }}" class="font-semibold text-slate-700 p-2">{{ $card['title'] }}</a>
                    @endforeach
                </div>
            </div>

            {{-- Mobile Resources --}}
            <div class="border-b border-slate-100">
                <button @click="mobileSub = mobileSub === 'resources' ? null : 'resources'"
                    class="w-full flex justify-between items-center p-5 font-bold text-slate-800">
                    Resources <span :class="mobileSub === 'resources' ? 'rotate-180' : ''"
                        class="transition-transform">▾</span>
                </button>
                <div x-show="mobileSub === 'resources'" class="bg-slate-50 p-4 flex flex-col gap-2">
                    @foreach($menuData['resources']['columns'] as $col)
                        <div class="text-[10px] font-black uppercase tracking-widest text-slate-400 mt-2">
                            {{ $col['title'] }}</div>
                        @foreach($col['links'] as $link)
                            <a href="#" class="font-semibold text-slate-700 p-2 pl-0 text-sm italic">{{ $link }}</a>
                        @endforeach
                    @endforeach
                </div>
            </div>

            <a href="#pricing" class="p-5 font-bold text-slate-800 border-b border-slate-100">Pricing</a>
            <div class="p-5 flex flex-col gap-3">
                <a href="#contact" class="text-center bg-blue-600 text-white font-bold py-3 rounded-lg">Get a demo</a>
                <a href="#contact"
                    class="text-center border border-blue-600 text-blue-600 font-bold py-3 rounded-lg">Get started</a>
            </div>
        </div>
    </div>
</nav>