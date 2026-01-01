@php
$testimonials = [
  [
    'quote' => "The quality of their offset printing is unmatched. Our catalogs looked absolutely professional.",
    'author' => "Sadhun Jayakody",
    'title' => "Marketing Director, TechFlow",
  ],
  [
    'quote' => "Fastest turnaround in the city. They saved our event with same-day flyer printing.",
    'author' => "Sathish",
    'title' => "Event Manager, CityEvents",
  ],
  [
    'quote' => "We love our branded mugs and t-shirts! The print quality has held up perfectly.",
    'author' => "M.S Perera",
    'title' => "Founder, GreenLife",
  ],
];

$brandLogos = [
  ['src' => '/images/brands/flexicare.png', 'alt' => 'Flexicare'],
  ['src' => '/images/brands/hirdaramani.png', 'alt' => 'Hirdaramani'],
  ['src' => '/images/brands/leisure.png', 'alt' => 'Leisure'],
];
@endphp

<section class="relative py-24 bg-primary text-white overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent z-0"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Clients Strip - Animated Logo Carousel --}}
        <div class="mb-20" x-data="{
            currentLogoIndex: 0,
            init() {
                setInterval(() => {
                    this.currentLogoIndex = (this.currentLogoIndex + 1) % {{ count($brandLogos) }};
                }, 3000);
            }
        }">
            <p class="text-center text-gray-400 text-sm font-semibold uppercase tracking-widest mb-8">Trusted by Industry Leaders</p>
            <div class="flex justify-center items-center gap-8 h-40">
                @foreach($brandLogos as $index => $logo)
                    <img
                        src="{{ $logo['src'] }}"
                        alt="{{ $logo['alt'] }}"
                        :class="currentLogoIndex === {{ $index }} ? 'scale-100 opacity-100' : 'scale-50 opacity-40'"
                        @click="currentLogoIndex = {{ $index }}"
                        class="h-32 md:h-40 w-auto object-contain cursor-pointer transition-all duration-500 ease-in-out"
                    />
                @endforeach
            </div>
        </div>

        {{-- Testimonials Slider --}}
        <div class="max-w-4xl mx-auto text-center relative" x-data="{
            currentIndex: 0,
            init() {
                setInterval(() => {
                    this.currentIndex = (this.currentIndex + 1) % {{ count($testimonials) }};
                }, 5000);
            }
        }">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote text-accent opacity-20 w-24 h-24 absolute -top-12 -left-4 md:-left-12"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1Z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1Z"/></svg>
            
            <div class="relative h-64 md:h-48"> {{-- Fixed height to prevent layout shift --}}
                @foreach($testimonials as $index => $testimonial)
                    <div
                        x-show="currentIndex === {{ $index }}"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-y-6"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-500"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-6"
                        class="absolute inset-0 flex flex-col justify-center items-center"
                        style="display: none;" 
                    >
                        <blockquote class="text-2xl md:text-4xl font-medium leading-relaxed mb-8">
                            &quot;{{ $testimonial['quote'] }}&quot;
                        </blockquote>
                        <cite class="not-italic">
                            <div class="font-bold text-lg">{{ $testimonial['author'] }}</div>
                            <div class="text-accent">{{ $testimonial['title'] }}</div>
                        </cite>
                    </div>
                @endforeach
            </div>

            {{-- Dots --}}
            <div class="flex justify-center space-x-2 mt-8">
                @foreach($testimonials as $index => $testimonial)
                    <button
                        @click="currentIndex = {{ $index }}"
                        :class="currentIndex === {{ $index }} ? 'bg-accent' : 'bg-gray-700 hover:bg-gray-600'"
                        class="w-3 h-3 rounded-full transition-colors"
                        aria-label="Go to testimonial {{ $index + 1 }}"
                    ></button>
                @endforeach
            </div>
        </div>
    </div>
</section>
