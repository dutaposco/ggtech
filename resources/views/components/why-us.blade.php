@php
    $features = [
        [
            'title' => __('Cloud Infrastructure'),
            'desc' => __('High-performance NVMe storage with global scalability.'),
            'icon' => '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>',
            'bg' => 'bg-blue-600'
        ],
        [
            'title' => __('Direct Fiber Link'),
            'desc' => __('Dedicated internet with 99.9% uptime and ultra-low latency.'),
            'icon' => '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>',
            'bg' => 'bg-orange-600'
        ],
        [
            'title' => __('Expert Support Team'),
            'desc' => __('Real engineers available 24/7 to solve your complex IT issues.'),
            'icon' => '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" /></svg>',
            'bg' => 'bg-indigo-600'
        ],
    ];
@endphp

<section class="py-24 bg-gradient-to-br from-blue-50 to-white relative overflow-hidden" id="why-us">
    {{-- Decorative Background Elements --}}
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-blue-100/50 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-indigo-100/30 rounded-full blur-[100px] translate-y-1/2 -translate-x-1/2"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        {{-- Section Heading --}}
        <div class="text-center mb-20 max-w-4xl mx-auto">
            <div class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm border border-blue-100 text-blue-600 text-[11px] font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-8 shadow-sm">
                {{ __('Infrastructure & Support') }}
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 mb-8 tracking-tighter leading-[1.05]">
                {{ __('Technology that works for your business 24/7.') }}
            </h2>
            <p class="text-[19px] text-slate-500 font-medium max-w-2xl mx-auto leading-relaxed">
                {{ __('Breeze Subtitle') }}
            </p>
        </div>

        {{-- Card Showcase (HubSpot style) --}}
        <div class="relative max-w-5xl mx-auto" x-data="{ active: 1 }">
            <div class="flex items-center justify-center gap-6 md:gap-10 py-10 overflow-visible">
                @foreach($features as $index => $f)
                    <div 
                        class="shrink-0 w-[300px] md:w-[380px] bg-white border border-slate-200 rounded-[2.5rem] p-10 shadow-sm transition-all duration-500 cursor-pointer flex flex-col items-center text-center group"
                        :class="{ 
                            'scale-110 shadow-2xl z-20 border-blue-100': active === {{ $index }}, 
                            'scale-90 opacity-40 blur-[1px] hover:opacity-100 hover:blur-0': active !== {{ $index }} 
                        }"
                        @click="active = {{ $index }}"
                    >
                        {{-- Card Icon --}}
                        <div class="w-20 h-20 rounded-3xl {{ $f['bg'] }} text-white flex items-center justify-center mb-10 shadow-xl shadow-{{ substr($f['bg'], 3, -4) }}-500/20 group-hover:scale-110 transition-transform duration-300">
                            <div class="w-10 h-10">{!! $f['icon'] !!}</div>
                        </div>

                        <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight">{{ $f['title'] }}</h3>
                        <p class="text-[16px] text-slate-500 font-medium leading-relaxed mb-8">
                            {{ $f['desc'] }}
                        </p>

                        <a href="#contact" class="inline-flex items-center gap-2 text-sm font-bold text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition-all pb-1 mt-auto">
                            {{ __('Learn More') }}
                            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                        </a>
                    </div>
                @endforeach
            </div>

            {{-- Slider Navigation --}}
            <div class="flex items-center justify-center gap-4 mt-12">
                <button @click="active = (active - 1 + {{ count($features) }}) % {{ count($features) }}" class="w-12 h-12 rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-400 hover:text-slate-900 transition-all shadow-sm">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <div class="flex gap-2.5">
                    @foreach($features as $index => $f)
                        <button @click="active = {{ $index }}" class="h-2 rounded-full transition-all duration-300" :class="active === {{ $index }} ? 'bg-slate-900 w-8' : 'bg-slate-200 w-2'"></button>
                    @endforeach
                </div>
                <button @click="active = (active + 1) % {{ count($features) }}" class="w-12 h-12 rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-400 hover:text-slate-900 transition-all shadow-sm">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" /></svg>
                </button>
            </div>
        </div>
    </div>
</section>
