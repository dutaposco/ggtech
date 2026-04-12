<section class="py-24 bg-slate-50 relative overflow-hidden" id="contact" x-data="{ loading: false, sent: false }">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-blue-100/50 blur-[120px] rounded-full pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-6 relative z-10 w-full mt-4">
        <div class="text-center mb-10">
            <h2 class="text-4xl md:text-[44px] font-black text-slate-900 mb-5 tracking-tight flex items-center justify-center gap-2">
                {{ __('Contact') }} <span class="text-blue-500">{{ __('Our Team') }}</span>
            </h2>
            <p class="text-[17px] text-slate-500 max-w-[700px] mx-auto font-medium leading-relaxed">
                {{ __('Contact Description') }}
            </p>
        </div>

        <div class="bg-white border border-slate-200 rounded-[28px] p-8 md:p-12 shadow-sm relative">
            <form 
                x-show="!sent" 
                @submit.prevent="loading = true; setTimeout(() => { loading = false; sent = true }, 1500)" 
                class="flex flex-col gap-8"
            >
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="flex flex-col gap-2.5">
                        <label class="text-[14px] font-bold text-slate-800">{{ __('Full Name') }} *</label>
                        <input type="text" placeholder="{{ __('Enter your name') }}" class="w-full h-[52px] px-5 bg-slate-50/50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-[15px] font-medium text-slate-800 outline-none placeholder:text-slate-400 placeholder:font-medium" required />
                    </div>
                    <div class="flex flex-col gap-2.5">
                        <label class="text-[14px] font-bold text-slate-800">{{ __('Business Email') }} *</label>
                        <input type="email" placeholder="nama@perusahaan.com" class="w-full h-[52px] px-5 bg-slate-50/50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-[15px] font-medium text-slate-800 outline-none placeholder:text-slate-400 placeholder:font-medium" required />
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="flex flex-col gap-2.5">
                        <label class="text-[14px] font-bold text-slate-800">{{ __('Company Name') }}</label>
                        <input type="text" placeholder="{{ __('Optional') }}" class="w-full h-[52px] px-5 bg-slate-50/50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-[15px] font-medium text-slate-800 outline-none placeholder:text-slate-400 placeholder:font-medium" />
                    </div>
                    <div class="flex flex-col gap-2.5">
                        <label class="text-[14px] font-bold text-slate-800">{{ __('Service Required') }}</label>
                        <div class="relative">
                            <select class="w-full h-[52px] px-5 bg-slate-50/50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-[15px] font-medium text-slate-800 appearance-none outline-none">
                                <option value="" disabled selected>{{ __('Select Service') }}</option>
                                <option value="hosting">{{ __('Hosting & Cloud') }}</option>
                                <option value="payment">{{ __('Payment Systems') }}</option>
                                <option value="security">{{ __('Cybersecurity') }}</option>
                                <option value="dev">{{ __('Software Development') }}</option>
                            </select>
                            <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">
                                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-2.5">
                    <label class="text-[14px] font-bold text-slate-800">{{ __('Message Details') }}</label>
                    <textarea rows="5" placeholder="{{ __('Tell us about your project...') }}" class="w-full p-5 bg-slate-50/50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-[15px] font-medium text-slate-800 outline-none resize-y min-h-[140px] placeholder:text-slate-400 placeholder:font-medium" required></textarea>
                </div>

                <div class="flex justify-end w-full mt-2">
                    <button type="submit" :disabled="loading" class="h-14 px-8 bg-blue-600 hover:bg-blue-700 disabled:opacity-70 text-white font-bold text-[16px] rounded-xl transition-all w-full md:w-auto">
                        <span x-show="!loading">{{ __('Send Inquiry Now') }}</span>
                        <span x-show="loading">{{ __('Sending message...') }}</span>
                    </button>
                </div>
            </form>

            <div x-show="sent" x-cloak class="flex flex-col items-center justify-center py-20 text-center rounded-xl bg-slate-50/50 border border-slate-100">
                <div class="w-20 h-20 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-6">
                    <svg width="40" height="40" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                </div>
                <h3 class="text-[26px] font-black text-slate-900 mb-3">{{ __('Success!') }}</h3>
                <p class="text-[16px] text-slate-500 font-medium max-w-sm mx-auto leading-relaxed">
                    {{ __('Message Sent Successfully') }}
                </p>
            </div>
        </div>
    </div>
</section>
