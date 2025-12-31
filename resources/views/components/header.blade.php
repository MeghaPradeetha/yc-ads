<header
    x-data="{
        isOpen: false,
        isScrolled: false,
        init() {
            this.isScrolled = window.scrollY > 20;
        }
    }"
    @scroll.window="isScrolled = (window.scrollY > 20)"
    class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 transition-all duration-300"
    :class="{ 'md:pt-4': !isScrolled }"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            {{-- Logo --}}
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img
                        src="/images/logo.png"
                        alt="Y C Ads"
                        class="w-auto transition-all duration-300"
                        :class="isScrolled ? 'h-12 md:h-12' : 'h-12 md:h-32 md:mt-4'"
                    />
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <nav class="hidden md:flex space-x-8 items-center">
                @foreach([
                    ['name' => 'Home', 'href' => route('home')],
                    ['name' => 'About Us', 'href' => route('about')],
                    ['name' => 'Services', 'href' => route('home') . '#services'],
                    ['name' => 'Contact Us', 'href' => route('contact')],
                ] as $link)
                    <a
                        href="{{ $link['href'] }}"
                        class="text-gray-600 hover:text-primary font-medium transition-colors"
                    >
                        {{ $link['name'] }}
                    </a>
                @endforeach
            </nav>

            {{-- Mobile Menu Button --}}
            <div class="md:hidden flex items-center">
                <button
                    @click="isOpen = !isOpen"
                    class="text-gray-600 hover:text-primary focus:outline-none"
                >
                    <template x-if="!isOpen">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
                    </template>
                    <template x-if="isOpen">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 18 18"/></svg>
                    </template>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Navigation --}}
    <div
        x-show="isOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden bg-white border-b border-gray-100 overflow-hidden"
        style="display: none;"
    >
        <div class="px-4 pt-2 pb-6 space-y-2">
            @foreach([
                ['name' => 'Home', 'href' => route('home')],
                ['name' => 'About Us', 'href' => route('about')],
                ['name' => 'Services', 'href' => route('home') . '#services'],
                ['name' => 'Contact Us', 'href' => route('contact')],
            ] as $link)
                <a
                    href="{{ $link['href'] }}"
                    @click="isOpen = false"
                    class="block px-3 py-3 text-base font-medium text-gray-600 hover:text-primary hover:bg-gray-50 rounded-md"
                >
                    {{ $link['name'] }}
                </a>
            @endforeach
        </div>
    </div>
</header>
