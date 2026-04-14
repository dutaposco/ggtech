<div x-data="{ 
    open: false, 
    messages: [
        { role: 'bot', text: 'Hi! I\'m GTech Virtual Assistant. How can I help you today?' }
    ],
    typing: false,
    questions: [
        { q: 'What services do you offer?', a: 'We offer Dedicated Internet (ISP), Web & Mobile App Development, Payment Gateway & Virtual Account (VA) integration, ERP Systems, and Managed IT Services.' },
        { q: 'What is GTech?', a: 'GTech is a multi-service technology provider. We specialize in building robust Web Platforms, Mobile Apps, and integrating secure Payment Gateways (VA), all backed by our own reliable Internet Infrastructure.' },
        { q: 'What services do you offer?', a: 'Our core expertise includes Custom Web & Mobile Development, Payment Gateway integration, Dedicated Internet (ISP), and Enterprise Software solutions.' },
        { q: 'Why choose GTech?', a: 'We bridge the gap between software and infrastructure. By managing both your applications and the network they run on, we ensure your digital systems are exceptionally fast, secure, and stable.' }
    ],
    ask(question, answer) {
        this.messages.push({ role: 'user', text: question });
        this.typing = true;
        
        setTimeout(() => {
            this.typing = false;
            this.messages.push({ role: 'bot', text: answer });
            
            // Auto scroll to bottom
            setTimeout(() => {
                const el = document.getElementById('chat-contents');
                el.scrollTop = el.scrollHeight;
            }, 50);
        }, 1200);
    }
}" class="fixed bottom-6 right-6 z-[999]">

    {{-- Floating Button --}}
    <button @click="open = !open"
        class="w-16 h-16 bg-blue-600 rounded-full shadow-2xl flex items-center justify-center hover:scale-110 transition-transform cursor-pointer relative group">
        <svg x-show="!open" width="30" height="30" fill="white" viewBox="0 0 24 24">
            <path
                d="M12 2C6.48 2 2 6.48 2 12c0 1.61.38 3.12 1.05 4.47L2.01 21l4.65-1.04C8.07 20.64 9.96 21 12 21c5.52 0 10-4.48 10-10S17.52 2 12 2zm0 17c-1.84 0-3.53-.41-5.02-1.12l-.36-.18-2.67.6.61-2.73-.2-.36C3.64 14.73 3 13.12 3 11c0-4.97 4.03-9 9-9s9 4.03 9 9-4.03 9-9 9z" />
        </svg>
        <svg x-show="open" width="30" height="30" fill="white" viewBox="0 0 24 24" style="display: none;">
            <path
                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
        </svg>

        {{-- Tooltip --}}
        <div
            class="absolute right-20 bg-slate-800 text-white text-[12px] px-3 py-1.5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">
            GTech Assistant
        </div>
    </button>

    {{-- Chat Window --}}
    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-10 scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-10 scale-95"
        class="absolute bottom-20 right-0 w-[350px] md:w-[400px] h-[500px] bg-white rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.15)] border border-slate-100 flex flex-col overflow-hidden"
        style="display: none;">

        {{-- Header --}}
        <div class="bg-blue-600 p-6 text-white">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center text-xl">🤖</div>
                <div>
                    <h4 class="font-bold leading-none mb-1 text-[16px]">GTech AI</h4>
                    <span class="text-[12px] opacity-80 flex items-center gap-1.5">
                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span> Online
                    </span>
                </div>
            </div>
        </div>

        {{-- Messages Area --}}
        <div id="chat-contents" class="flex-1 overflow-y-auto p-4 space-y-4 bg-slate-50">
            <template x-for="msg in messages">
                <div :class="msg.role === 'bot' ? 'flex justify-start' : 'flex justify-end'">
                    <div :class="msg.role === 'bot' ? 'bg-white text-slate-700 shadow-sm border border-slate-100' : 'bg-blue-600 text-white'"
                        class="max-w-[80%] px-4 py-2.5 rounded-2xl text-[14px]">
                        <span x-text="msg.text"></span>
                    </div>
                </div>
            </template>

            {{-- Typing Indicator --}}
            <div x-show="typing" class="flex justify-start">
                <div class="bg-white px-4 py-2.5 rounded-2xl shadow-sm border border-slate-100 flex gap-1">
                    <span class="w-1.5 h-1.5 bg-slate-300 rounded-full animate-bounce"></span>
                    <span class="w-1.5 h-1.5 bg-slate-300 rounded-full animate-bounce [animation-delay:0.2s]"></span>
                    <span class="w-1.5 h-1.5 bg-slate-300 rounded-full animate-bounce [animation-delay:0.4s]"></span>
                </div>
            </div>
        </div>

        {{-- Suggestions --}}
        <div class="p-4 bg-white border-t border-slate-100">
            <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">Quick Questions</p>
            <div class="flex flex-wrap gap-2">
                <template x-for="item in questions">
                    <button @click="ask(item.q, item.a)"
                        class="text-[12px] bg-slate-100 hover:bg-blue-50 hover:text-blue-600 text-slate-600 px-3 py-1.5 rounded-full transition-colors border border-slate-200">
                        <span x-text="item.q"></span>
                    </button>
                </template>
            </div>
        </div>

        {{-- Footer --}}
        <div class="p-4 bg-slate-50 border-t border-slate-100 flex flex-col gap-3">
            <a href="https://wa.me/6281234567890" target="_blank"
                class="flex items-center justify-center gap-2 bg-green-500 hover:bg-green-600 text-white font-bold py-2.5 rounded-xl transition-all shadow-md text-sm">
                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                </svg>
                Contact via WhatsApp
            </a>
            <div class="text-center font-bold text-[10px] text-slate-400 uppercase tracking-widest">Powered by GTech AI
            </div>
        </div>
    </div>
</div>