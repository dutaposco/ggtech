@php
    $logos = [
        ['name' => 'Krakatau Posco', 'url' => 'https://depopipa.co.id/wp-content/uploads/2015/12/PT.-Krakatau-Posco-1.png'],
        ['name' => 'Bank BNI', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Bank_Negara_Indonesia_logo_%282004%29.svg/1280px-Bank_Negara_Indonesia_logo_%282004%29.svg.png'],
        ['name' => 'Bank Mandiri', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/a/ad/Bank_Mandiri_logo_2016.svg'],
        ['name' => 'Gaisar', 'url' => 'https://banten.apjii.or.id/wp-content/uploads/2025/03/pt-gaisar-teknologi-bersama.png'],
    ];
    $doubled = array_merge($logos, $logos, $logos, $logos, $logos, $logos);
@endphp

<section class="py-14 border-b border-slate-200 bg-white overflow-hidden relative">
    <div
        class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none">
    </div>
    <div
        class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-6">
        <p class="text-center font-bold text-xs text-slate-400 uppercase tracking-widest mb-10">
            {{ __('Trusted by Leading Government Institutions & Enterprises') }}
        </p>
    </div>

    {{-- Marquee Wrapper --}}
    <div class="flex w-[200%] animate-marquee items-center gap-24 px-12 hover:[animation-play-state:paused]">
        @foreach($doubled as $brand)
            <div class="flex-shrink-0 cursor-default flex items-center justify-center w-36 h-16">
                <img src="{{ $brand['url'] }}" alt="Logo {{ $brand['name'] }}" class="max-w-full max-h-full object-contain"
                    loading="lazy" />
            </div>
        @endforeach
    </div>
</section>