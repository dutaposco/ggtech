@php
    $products = [
        [
            'title' => __('GTech Cloud Panel'),
            'desc' => __('Integrated hosting panel to manage all your servers, domains, and business emails in one elegant and intuitive dashboard.'),
            'features' => [__('One-click Deployment'), __('Multi-region Support')],
            'color' => 'orange',
            'icon' => '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>'
        ],
        [
            'title' => __('PayGate Pro'),
            'desc' => __('All-in-one payment gateway with support for over 50 local and international payment methods.'),
            'features' => [__('Secure QRIS & VA'), __('Auto Reconciliation')],
            'color' => 'blue',
            'icon' => '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>'
        ],
        [
            'title' => __('SecureShield'),
            'desc' => __('Enterprise cybersecurity protection — WAF, IDS/IPS, and real-time threat monitoring for your business.'),
            'features' => [__('DDoS Mitigation'), __('Real-time Analytics')],
            'color' => 'emerald',
            'icon' => '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>'
        ],
        [
            'title' => __('Analytics Hub'),
            'desc' => __('Advanced business analytics dashboard — track conversions, traffic, and performance in real-time.'),
            'features' => [__('Visual Reporting'), __('Custom Dashboards')],
            'color' => 'rose',
            'icon' => '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>'
        ],
        [
            'title' => __('GTech Dedicated Fiber'),
            'desc' => __('Dedicated internet provider specifically for businesses and corporations, with 99.9% SLA and ultra-low latency.'),
            'features' => [__('99.9% SLA'), __('Redundant Backbone')],
            'color' => 'cyan',
            'icon' => '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" /></svg>'
        ],
        [
            'title' => __('Enterprise ERP & HRIS'),
            'desc' => __('Comprehensive system for managing Human Resources, central attendance, and fully automated Enterprise Resource Planning.'),
            'features' => [__('Auto Payroll'), __('HRIS Management')],
            'color' => 'violet',
            'icon' => '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>'
        ],
    ];
@endphp

<section class="py-24 bg-white" id="products">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            {{-- Left Side: Heading (HubSpot Style) --}}
            <div class="lg:col-span-5 lg:sticky lg:top-32 mb-12 lg:mb-0">
                <div class="inline-flex items-center gap-2 bg-slate-100 text-slate-800 text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-6">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span> {{ __('Innovation Hub') }}
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 mb-6 md:mb-8 tracking-tight leading-[1.1]">
                    {{ __('IT Solutions First Part') }} <span class="text-blue-600">{{ __('Ready-to-Use') }}</span>
                </h2>
                <p class="text-base md:text-lg text-slate-500 font-medium leading-relaxed mb-8 md:mb-10 max-w-md">
                    {{ __('Our IT products are designed for immediate deployment, easy configuration, and can be customized to your specific operational needs.') }}
                </p>
                <div class="flex flex-wrap gap-4 justify-start">
                    <a href="#contact" class="flex-1 md:flex-none text-center px-8 py-3.5 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-all shadow-lg shadow-blue-500/20">
                        {{ __('Contact Us') }}
                    </a>
                    <a href="#services" class="flex-1 md:flex-none text-center px-8 py-3.5 bg-white border-2 border-slate-200 text-slate-700 font-bold rounded-xl hover:border-slate-900 transition-all">
                        {{ __('View Platforms') }}
                    </a>
                </div>
            </div>

            {{-- Right Side: Products Grid (HubSpot Style Cards) --}}
            <div class="lg:col-span-7">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($products as $p)
                        <div class="bg-white border border-slate-200 p-8 rounded-3xl hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-6 transition-transform group-hover:scale-110
                                @if($p['color'] == 'orange') bg-orange-50 text-orange-600 @elseif($p['color'] == 'blue') bg-blue-50 text-blue-600 @elseif($p['color'] == 'emerald') bg-emerald-50 text-emerald-600 @elseif($p['color'] == 'rose') bg-rose-50 text-rose-600 @elseif($p['color'] == 'cyan') bg-cyan-50 text-cyan-600 @else bg-violet-50 text-violet-600 @endif">
                                <div class="w-6 h-6">{!! $p['icon'] !!}</div>
                            </div>
                            
                            <h3 class="text-xl font-bold text-slate-900 mb-2 truncate">{{ $p['title'] }}</h3>
                            <div class="h-1 w-8 bg-slate-100 mb-4 group-hover:w-16 transition-all"></div>
                            
                            <ul class="flex flex-col gap-2.5 mb-6">
                                @foreach($p['features'] as $f)
                                    <li class="flex items-center gap-2 text-sm font-semibold text-slate-600 group-hover:text-slate-900 transition-colors">
                                        <svg class="shrink-0 @if($p['color'] == 'orange') text-orange-500 @elseif($p['color'] == 'blue') text-blue-500 @elseif($p['color'] == 'emerald') text-emerald-500 @elseif($p['color'] == 'rose') text-rose-500 @elseif($p['color'] == 'cyan') text-cyan-500 @else text-violet-500 @endif" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        {{ $f }}
                                    </li>
                                @endforeach
                            </ul>

                            <a href="#contact" @click.prevent="document.querySelector('#contact')?.scrollIntoView({ behavior: 'smooth' })" 
                               class="inline-flex items-center gap-2 text-sm font-bold text-slate-400 group-hover:text-blue-600 transition-all">
                                {{ __('Learn More') }}
                                <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
