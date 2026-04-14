<section class="relative h-screen w-full flex flex-col items-center justify-center overflow-hidden" id="home">

    {{-- Background Image full-bleed --}}
    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat"
        style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2850&q=80')">
        {{-- HubSpot style dark multiply overlay for contrast --}}
        <div class="absolute inset-0 bg-black/50 mix-blend-multiply"></div>
        {{-- Gradient for text readability --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-black/30"></div>
    </div>

    <div class="relative z-10 flex flex-col items-center justify-center text-center px-6 w-full max-w-4xl pt-16">

        {{-- Top Badge --}}
        <div class="text-white text-[11px] font-bold tracking-[0.15em] uppercase mb-6 animate-fade-up">
            {{ __('GTech Customer Platform') }}
        </div>

        {{-- Serif Headline perfectly centered --}}
        <h1 class="text-5xl md:text-7xl lg:text-[84px] font-serif font-medium text-white tracking-tight leading-[1.05] mb-6 animate-fade-up"
            style="animation-delay: 0.1s">
            {{ __('Where digital-first teams go to scale') }}<span class="text-blue-500">.</span>
        </h1>

        {{-- Subtitle --}}
        <p class="text-[17px] md:text-[19px] text-white font-medium mb-10 leading-relaxed max-w-2xl animate-fade-up"
            style="animation-delay: 0.2s">
            {{ __('Hero Description') }}
        </p>

        {{-- CTAs --}}
        <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto animate-fade-up"
            style="animation-delay: 0.3s">
            <a href="#contact"
                @click.prevent="document.querySelector('#contact')?.scrollIntoView({ behavior: 'smooth' })"
                class="flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white px-8 py-3.5 rounded-[4px] font-bold text-[16px] transition-colors w-full sm:w-auto shadow-md">
                {{ __('Get a demo') }}
            </a>
            <a href="#services"
                @click.prevent="document.querySelector('#services')?.scrollIntoView({ behavior: 'smooth' })"
                class="flex items-center justify-center bg-white hover:bg-slate-50 text-blue-600 px-8 py-3.5 rounded-[4px] font-bold text-[16px] transition-colors w-full sm:w-auto shadow-md">
                {{ __('Get started free') }}
            </a>
        </div>

    </div>
</section>