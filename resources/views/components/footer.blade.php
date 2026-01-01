<footer class="bg-gradient-to-b from-black to-gray-900 text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            {{-- Company Info --}}
            <div>
                <a href="{{ route('home') }}" class="inline-block mb-6">
                    <img
                        src="/images/logo.png"
                        alt="Y C Ads"
                        class="h-20 w-auto"
                    />
                </a>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Driving measurable growth through innovative media planning, creative strategy, and data-driven execution.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-accent transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-accent transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-accent transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
                <ul class="space-y-4">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-400 hover:text-accent transition-colors">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-gray-400 hover:text-accent transition-colors">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#services" class="text-gray-400 hover:text-accent transition-colors">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-gray-400 hover:text-accent transition-colors">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <h3 class="text-lg font-semibold mb-6">Services</h3>
                <ul class="space-y-4">
                    <li class="text-gray-400">Digital Printing</li>
                    <li class="text-gray-400">Offset Printing</li>
                    <li class="text-gray-400">Promotional Items</li>
                    <li class="text-gray-400">Custom Solutions</li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div>
                <h3 class="text-lg font-semibold mb-6">Contact Us</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent mr-3 mt-1 flex-shrink-0 lucide lucide-map-pin"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span class="text-gray-400">291/E Mohottigoda Road, Koralaima, Gonapola 12410, Sri Lanka</span>
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent mr-3 flex-shrink-0 lucide lucide-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <span class="text-gray-400">+94 77 503 6000</span>
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent mr-3 flex-shrink-0 lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        <span class="text-gray-400">ycnads@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 text-center">
            <p class="text-gray-500 text-sm">
                &copy; {{ date('Y') }} Y C Ads. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>
