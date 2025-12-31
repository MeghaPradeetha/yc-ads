<section class="relative h-screen min-h-[800px] flex flex-col justify-center items-center md:flex-row md:items-center overflow-hidden bg-gray-900">
    {{-- Background Image with Parallax-like effect --}}
    <div
        class="absolute inset-0 z-0"
        x-data
        x-init="$el.animate([{ transform: 'scale(1.1)' }, { transform: 'scale(1)' }], { duration: 10000, iterations: Infinity, direction: 'alternate', easing: 'linear' })"
    >
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent z-10"></div>
        <img
            src="/images/hero-printing-apparel.jpg"
            alt="Fashion Printing"
            class="w-full h-full object-cover opacity-80 blur-sm"
        />
    </div>

    {{-- Floating Animated Image Carousel --}}
    <div
        x-data="{
            currentImageIndex: 0,
            images: [
                { src: '/images/DTF.png', alt: 'DTF Printing' },
                { src: '/images/digital.png', alt: 'Digital Printing' },
                { src: '/images/kord.png', alt: 'Kord Printing' }
            ],
            init() {
                setInterval(() => {
                    this.currentImageIndex = (this.currentImageIndex + 1) % this.images.length;
                }, 3000);
            }
        }"
        class="relative z-20 block w-[250px] h-[250px] mb-8 md:absolute md:mb-0 md:bottom-20 md:right-10 md:w-[600px] md:h-[400px] flex items-end justify-end pointer-events-none"
    >
        <template x-for="(image, index) in images" :key="index">
            <img
                x-show="currentImageIndex === index"
                :src="image.src"
                :alt="image.alt"
                x-transition:enter="transition ease-in-out duration-500"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in-out duration-500"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                class="w-full h-auto max-h-[70vh] object-contain drop-shadow-2xl absolute bottom-0 right-0"
                style="display: none;" 
            />
        </template>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full">
        <div class="max-w-3xl">
            {{-- Content --}}
            <div
                x-data
                x-init="$el.classList.remove('opacity-0', '-translate-x-12'); $el.classList.add('opacity-100', 'translate-x-0')"
                class="opacity-0 -translate-x-12 transition-all duration-1000 ease-out delay-200"
            >
                <div class="flex items-center gap-4 mb-6">
                    <span class="h-1 w-12 bg-accent rounded-full"></span>
                    <span class="text-accent font-bold tracking-widest uppercase text-sm">
                        Premium Prints & Designs
                    </span>
                </div>

                <h1 class="text-6xl md:text-8xl font-bold tracking-tighter text-white mb-8 leading-[1.1]">
                    Print Your <br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-red-500">
                        Style.
                    </span>
                </h1>

                <p class="text-xl md:text-2xl text-gray-300 mb-10 max-w-xl leading-relaxed font-light border-l-4 border-primary pl-6">
                    The Solution to your Printing Needs.
                </p>

                <div class="flex flex-col sm:flex-row gap-6">
                    <a
                        href="{{ route('contact') }}"
                        class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-300 bg-orange-600 rounded-full overflow-hidden hover:shadow-2xl hover:shadow-orange-600/40"
                    >
                        <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-red-600 to-orange-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <span class="relative flex items-center">
                            Contact Us
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
