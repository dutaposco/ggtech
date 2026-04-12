@php
    $links = [
        ['href' => '#products', 'label' => __('Products')],
        ['href' => '#services', 'label' => __('Solutions')],
        ['href' => '#pricing', 'label' => __('Pricing')],
        ['href' => '#resources', 'label' => __('Resources')],
    ];
@endphp

<nav x-data="{ scrolled: false, open: false }" @scroll.window="scrolled = window.scrollY > 10"
    :class="scrolled ? 'bg-white/90 backdrop-blur-md py-3 shadow-md' : 'bg-white py-4 shadow-[0_2px_10px_rgba(0,0,0,0.05)]'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b border-slate-100 h-[76px] flex items-center">
    <div class="w-full max-w-[1400px] mx-auto px-6 flex items-center justify-between">

        {{-- LOGO AND LINKS --}}
        <div class="flex items-center gap-8 lg:gap-10">
            <a href="#home"
                @click.prevent="document.querySelector('#home')?.scrollIntoView({ behavior: 'smooth' }); open = false"
                class="flex items-center text-[32px] font-black tracking-tighter text-slate-900 transition-colors pr-2">
                G<span class="text-blue-600">Tech</span>
            </a>

            {{-- DESKTOP LINKS --}}
            <ul class="hidden lg:flex items-center gap-8">
                @foreach($links as $link)
                    <li>
                        <a href="{{ $link['href'] }}"
                            @click.prevent="document.querySelector('{{ $link['href'] }}')?.scrollIntoView({ behavior: 'smooth' }); open = false"
                            class="text-[17px] font-semibold text-slate-800 hover:text-blue-600 flex items-center gap-1.5 transition-colors">
                            {{ $link['label'] }}
                            @if($link['label'] !== __('Pricing'))
                                <svg width="10" height="10" fill="none" stroke="currentColor" strokeWidth="3"
                                    viewBox="0 0 24 24" class="mt-0.5 text-slate-500">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- CTAs & Language --}}
        <div class="flex items-center gap-3 lg:gap-6">
            {{-- Language Switcher (Desktop) --}}
            <div class="hidden lg:block relative" x-data="{ langOpen: false }" @click.away="langOpen = false">
                <button @click="langOpen = !langOpen"
                    class="flex items-center gap-2 text-[14px] font-bold text-slate-600 hover:text-blue-600 transition-colors">
                    @if(app()->getLocale() == 'en')
                        <span class="flex items-center gap-2">🇺🇸 <span>EN</span></span>
                    @else
                        <span class="flex items-center gap-2">🇮🇩 <span>ID</span></span>
                    @endif
                    <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"
                        :class="langOpen ? 'rotate-180' : ''" class="transition-transform">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div x-show="langOpen" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    class="absolute top-10 right-0 w-36 bg-white border border-slate-100 shadow-xl rounded-lg py-2 z-50"
                    style="display: none;">
                    <a href="{{ route('lang.switch', 'en') }}"
                        class="flex items-center gap-3 px-4 py-2 text-sm {{ app()->getLocale() == 'en' ? 'font-bold text-blue-600 bg-blue-50' : 'font-semibold text-slate-600 hover:bg-slate-50' }} transition-colors">
                        <span>🇺🇸</span> English
                    </a>
                    <a href="{{ route('lang.switch', 'id') }}"
                        class="flex items-center gap-3 px-4 py-2 text-sm {{ app()->getLocale() == 'id' ? 'font-bold text-blue-600 bg-blue-50' : 'font-semibold text-slate-600 hover:bg-slate-50' }} transition-colors">
                        <span>🇮🇩</span> Indonesia
                    </a>
                </div>
            </div>

            <a href="#contact"
                @click.prevent="document.querySelector('#contact')?.scrollIntoView({ behavior: 'smooth' })"
                class="hidden lg:inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white font-bold text-[14px] px-5 py-2.5 rounded-[3px] transition-all">
                {{ __('Get a demo') }}
            </a>
            <a href="#contact"
                @click.prevent="document.querySelector('#contact')?.scrollIntoView({ behavior: 'smooth' })"
                class="hidden lg:inline-flex items-center justify-center bg-white border border-blue-600 text-blue-600 hover:bg-blue-50 font-bold text-[14px] px-5 py-2.5 rounded-[3px] transition-all">
                {{ __('Get started free') }}
            </a>

            <button class="lg:hidden flex flex-col gap-1.5 p-2" @click="open = !open">
                <span class="block w-6 h-0.5 bg-slate-800 transition-transform"
                    :class="open ? 'rotate-45 translate-y-2' : ''"></span>
                <span class="block w-6 h-0.5 bg-slate-800 transition-opacity" :class="open ? 'opacity-0' : ''"></span>
                <span class="block w-6 h-0.5 bg-slate-800 transition-transform"
                    :class="open ? '-rotate-45 -translate-y-2' : ''"></span>
            </button>
        </div>

        {{-- MOBILE MENU --}}
        <div x-show="open" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            class="absolute top-[76px] left-0 right-0 bg-white border-b border-slate-200 shadow-xl p-6 flex flex-col gap-2 lg:hidden"
            style="display: none;">
            @foreach($links as $link)
                <a href="{{ $link['href'] }}"
                    @click.prevent="document.querySelector('{{ $link['href'] }}')?.scrollIntoView({ behavior: 'smooth' }); open = false"
                    class="py-3 text-lg font-bold border-b border-slate-100 text-slate-800">
                    {{ $link['label'] }}
                </a>
            @endforeach
            <div class="flex flex-col gap-2 mt-4">
                <a href="#contact"
                    @click.prevent="document.querySelector('#contact')?.scrollIntoView({ behavior: 'smooth' }); open = false"
                    class="text-center bg-blue-600 text-white font-bold text-lg px-6 py-3 rounded-[3px]">
                    {{ __('Get a demo') }}
                </a>
                <a href="#contact"
                    @click.prevent="document.querySelector('#contact')?.scrollIntoView({ behavior: 'smooth' }); open = false"
                    class="text-center bg-white border border-blue-600 text-blue-600 font-bold text-lg px-6 py-3 rounded-[3px]">
                    {{ __('Get started free') }}
                </a>
            </div>

            {{-- Mobile Language --}}
            <div class="flex items-center justify-center gap-6 mt-6 pt-6 border-t border-slate-100">
                <a href="{{ route('lang.switch', 'en') }}"
                    class="flex items-center gap-2 text-sm {{ app()->getLocale() == 'en' ? 'font-bold text-blue-600' : 'font-semibold text-slate-500' }}">
                    🇺🇸 English
                </a>
                <span class="text-slate-200">|</span>
                <a href="{{ route('lang.switch', 'id') }}"
                    class="flex items-center gap-2 text-sm {{ app()->getLocale() == 'id' ? 'font-bold text-blue-600' : 'font-semibold text-slate-500' }}">
                    🇮🇩 Indonesia
                </a>
            </div>
        </div>

    </div>
</nav>