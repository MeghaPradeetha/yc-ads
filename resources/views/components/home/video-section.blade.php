<section class="py-24 bg-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Text Content --}}
            <div class="relative z-10 order-2 lg:order-1">
                <div class="inline-block px-4 py-2 bg-purple-100 text-primary font-semibold rounded-full text-sm mb-6">
                    Precision & Quality
                </div>
                
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    Bringing Your Vision <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">To Life In Motion</span>
                </h2>
                
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Watch our advanced printing processes in action. We combine state-of-the-art technology with expert craftsmanship to deliver results that exceed expectations every time.
                </p>

                <div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-gray-900 text-white rounded-full font-semibold hover:bg-primary transition-colors duration-300 group">
                        Start Your Project
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Video Content --}}
            <div class="relative w-full mx-auto lg:mx-0 lg:ml-auto order-1 lg:order-2" style="max-width: 350px;">
                {{-- Decorative Elements --}}
                <div class="absolute -top-8 -right-8 w-40 h-40 bg-yellow-400/20 rounded-full blur-2xl filter"></div>
                <div class="absolute -bottom-8 -left-8 w-40 h-40 bg-primary/20 rounded-full blur-2xl filter"></div>

                <div class="relative rounded-[2rem] overflow-hidden shadow-2xl transform hover:scale-[1.02] transition-transform duration-500 ease-out border-4 border-white">
                    <video class="w-full h-auto object-contain bg-gray-900" autoplay muted loop playsinline>
                        <source src="{{ asset('videos/1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
