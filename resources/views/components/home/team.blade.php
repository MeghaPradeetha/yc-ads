<section class="py-24 bg-gray-900 relative overflow-hidden">
    {{-- Background Accents --}}
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 bg-accent/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative rounded-3xl overflow-hidden bg-gray-800 shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-5">
                {{-- Image Side (60% width) --}}
                <div class="relative h-96 lg:h-auto min-h-[500px] overflow-hidden group lg:col-span-3">
                    <img src="{{ asset('images/hero-printing-apparel.jpg') }}" 
                         alt="Our Team" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>

                {{-- Content Side (40% width) --}}
                <div class="relative p-12 lg:p-16 flex flex-col justify-center lg:col-span-2 bg-gray-800/50 backdrop-blur-md">
                    <div class="absolute top-0 right-0 p-6 opacity-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>

                    <h4 class="text-accent font-bold tracking-widest uppercase mb-3 text-xs flex items-center gap-2">
                        <span class="w-8 h-[2px] bg-accent"></span>
                        Behind the Scenes
                    </h4>
                    
                    <h2 class="text-4xl md:text-5xl font-black text-white mb-6 leading-none">
                        MEET THE <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-purple-400 to-accent">TEAM</span>
                    </h2>
                    
                    <p class="text-gray-400 text-base mb-8 leading-relaxed border-l-2 border-gray-700 pl-4">
                        A collective of passionate designers and skilled technicians working seamlessly to turn your ideas into high-quality impact.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
