@php
    $slides = [
        [
            'title' => __('A connectivity that\'s really fast.'),
            'desc' => __('Connectivity Hub Desc'),
            'color' => 'orange',
            'layers' => ['Dedicated Fiber', 'NVMe Cloud', 'Global Node'],
            'icons' => [
                '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>',
                '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>',
                '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9" /></svg>'
            ]
        ],
        [
            'title' => __('An automation that\'s really efficient.'),
            'desc' => __('Operational Hub Desc'),
            'color' => 'emerald',
            'layers' => ['Smart ERP', 'HRIS Center', 'Business Automate'],
            'icons' => [
                '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a2 2 0 012-2h2a2 2 0 012 2v2m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>',
                '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>',
                '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>'
            ]
        ],
        [
            'title' => __('A gateway that\'s really secure.'),
            'desc' => __('Security Hub Desc'),
            'color' => 'indigo',
            'layers' => ['PayGate Pro', 'SecureShield', 'Threat Mitigation'],
            'icons' => [
                '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>',
                '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>',
                '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>'
            ]
        ]
    ];
@endphp

<section class="py-24 bg-white relative overflow-hidden" id="services" x-data="{ active: 0 }">
    <div class="max-w-7xl mx-auto px-6">
        {{-- Section Header --}}
        <div class="text-center mb-20 max-w-3xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-6 tracking-tight">
                {{ __('The GTech Solutions Platform') }}
            </h2>
            <p class="text-lg text-slate-500 font-medium">
                {{ __('Solutions Platform Subtitle') }}
            </p>
        </div>

        {{-- Carousel Container --}}
        <div
            class="relative bg-slate-50/50 rounded-[3rem] p-8 md:p-16 pb-28 md:pb-16 border border-slate-100 min-h-[550px] md:min-h-[500px] flex items-center shadow-sm">

            @foreach($slides as $index => $s)
                <div x-show="active === {{ $index }}" x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0"
                    class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center w-full" style="display: none;">

                    {{-- Text Content --}}
                    <div class="order-2 lg:order-1 text-center lg:text-left px-2">
                        <h3 class="text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 mb-4 md:mb-6 leading-tight">
                            {{ $s['title'] }}
                        </h3>
                        <p
                            class="text-[16px] md:text-[17px] text-slate-500 font-medium leading-relaxed mb-8 md:mb-10 max-w-xl mx-auto lg:mx-0">
                            {{ $s['desc'] }}
                        </p>
                        <a href="#contact"
                            @click.prevent="document.querySelector('#contact')?.scrollIntoView({ behavior: 'smooth' })"
                            class="inline-flex items-center gap-2 font-bold text-slate-900 border-b-2 border-slate-900 pb-1 hover:text-blue-600 hover:border-blue-600 transition-all">
                            {{ __('Learn More') }}
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>

                    {{-- Visual Layering (3D Effect) --}}
                    <div class="order-1 lg:order-2 relative h-[280px] md:h-[400px] perspective-1000 mb-8 lg:mb-0">
                        <div
                            class="relative w-full h-full flex items-center justify-center translate-z-10 scale-[0.85] md:scale-100">

                            {{-- Base Layer (Largest Card) --}}
                            <div
                                class="absolute w-56 h-56 md:w-80 md:h-80 rounded-[2rem] transform rotate-[-12deg] skew-x-[12deg] transition-all duration-500
                                    @if($s['color'] == 'orange') bg-orange-600 shadow-2xl shadow-orange-500/40 @elseif($s['color'] == 'emerald') bg-emerald-600 shadow-2xl shadow-emerald-500/40 @else bg-indigo-600 shadow-2xl shadow-indigo-500/40 @endif">

                                {{-- Mini Icons Grid on Base Layer --}}
                                <div class="grid grid-cols-2 gap-4 p-8 opacity-40">
                                    @foreach(range(0, 3) as $i)
                                        <div class="w-10 h-10 md:w-12 md:h-12 bg-white/20 rounded-xl"></div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Middle Layer (Glass Effect) --}}
                            <div
                                class="absolute w-48 h-48 md:w-72 md:h-72 rounded-[1.5rem] bg-white/80 backdrop-blur-xl border border-white/40 shadow-xl transform rotate-[-12deg] skew-x-[12deg] translate-x-8 -translate-y-4 md:translate-x-12 md:-translate-y-8 flex flex-col justify-end p-5 md:p-8 hover:translate-x-14 hover:-translate-y-10 transition-all duration-300">
                                <span
                                    class="text-[10px] uppercase font-black tracking-widest text-slate-400 mb-1">Hubs</span>
                                <span
                                    class="text-xl md:text-2xl font-black text-slate-900 tracking-tight leading-none">{{ $s['layers'][1] }}</span>
                            </div>

                            {{-- Top Layer (Front Focus Card) --}}
                            <div
                                class="absolute w-40 h-40 md:w-64 md:h-64 rounded-[1.2rem] bg-white/90 backdrop-blur-2xl border border-white/60 shadow-2xl transform rotate-[-12deg] skew-x-[12deg] translate-x-16 -translate-y-8 md:translate-x-24 md:-translate-y-16 flex flex-col justify-end p-5 md:p-8 hover:translate-x-28 hover:-translate-y-20 transition-all duration-300">
                                <div
                                    class="w-10 h-10 md:w-12 md:h-12 rounded-xl @if($s['color'] == 'orange') bg-orange-100 text-orange-600 @elseif($s['color'] == 'emerald') bg-emerald-100 text-emerald-600 @else bg-indigo-100 text-indigo-600 @endif flex items-center justify-center mb-4 md:mb-6 shadow-sm">
                                    <div class="w-5 h-5 md:w-6 md:h-6">{!! $s['icons'][0] !!}</div>
                                </div>
                                <span
                                    class="text-[10px] uppercase font-black tracking-widest text-slate-400 mb-1">{{ __('The Platform') }}</span>
                                <span
                                    class="text-lg md:text-2xl font-black text-slate-900 tracking-tight leading-none">{{ $s['layers'][0] }}</span>
                            </div>

                        </div>
                    </div>

                </div>
            @endforeach

            {{-- Navigation Controls (Dots & Arrows) --}}
            <div class="absolute bottom-10 left-0 w-full px-6 md:px-16 flex items-center justify-between z-30">
                {{-- Prev Arrow --}}
                <button @click="active = (active - 1 + {{ count($slides) }}) % {{ count($slides) }}"
                    class="w-10 h-10 md:w-12 md:h-12 rounded-full border border-slate-200 bg-white shadow-md flex items-center justify-center text-slate-400 hover:text-slate-900 transition-all active:scale-95">
                    <svg width="20" height="20" md:width="24" md:height="24" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                {{-- Pagination Dots --}}
                <div class="flex gap-2 md:gap-3">
                    @foreach($slides as $index => $s)
                        <button @click="active = {{ $index }}" class="w-2.5 h-2.5 rounded-full transition-all duration-300"
                            :class="active === {{ $index }} ? 'bg-slate-900 w-8' : 'bg-slate-300'"></button>
                    @endforeach
                </div>

                {{-- Next Arrow --}}
                <button @click="active = (active + 1) % {{ count($slides) }}"
                    class="w-10 h-10 md:w-12 md:h-12 rounded-full border border-slate-200 bg-white shadow-md flex items-center justify-center text-slate-400 hover:text-slate-900 transition-all active:scale-95">
                    <svg width="20" height="20" md:width="24" md:height="24" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<style>
    .perspective-1000 {
        perspective: 1500px;
    }

    .translate-z-10 {
        transform-style: preserve-3d;
    }
</style>
</section>