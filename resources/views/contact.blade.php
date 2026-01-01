@extends('layouts.app')

@section('title', 'Y C Ads - Contact Us')

@section('content')
    {{-- Hero Section --}}
    <section class="pt-32 pb-16 bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Contact Us</h1>
            <p class="text-xl text-gray-100 max-w-3xl mx-auto">
                Ready to start your next print project? Get a quote or visit our facility.
            </p>
        </div>
    </section>

    {{-- Contact Info Grid --}}
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
                <div class="text-center p-8 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-2">Call Us</h3>
                    <p class="text-gray-600">+94 77 503 6000</p>
                    <p class="text-gray-500 text-sm mt-1">Mon-Fri from 8am to 5pm</p>
                </div>

                <div class="text-center p-8 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-2">Email Us</h3>
                    <p class="text-gray-600">ycnads@gmail.com</p>
                    <p class="text-gray-500 text-sm mt-1">We'll respond within 24 hours</p>
                </div>

                <div class="text-center p-8 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-2">Visit Us</h3>
                    <p class="text-gray-600">291/E Mohottigoda Road, Koralaima</p>
                    <p class="text-gray-600">Gonapola 12410, Sri Lanka</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Reuse CTA Form --}}
    <x-home.cta-form />
@endsection
