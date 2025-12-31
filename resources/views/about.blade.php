@extends('layouts.app')

@section('title', 'Y C Ads - About Us')

@section('content')
    {{-- Hero Section --}}
    <section class="pt-32 pb-16 bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">About Y C Ads</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                We are a team of digital strategists, creatives, and data analysts passionate about growing businesses.
            </p>
        </div>
    </section>

    {{-- Mission & Vision --}}
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-gray-50 p-10 rounded-3xl">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h2>
                    <p class="text-gray-600 leading-relaxed">
                        To provide businesses with high-quality printing solutions that effectively communicate their brand message. We are committed to speed, precision, and customer satisfaction.
                    </p>
                </div>
                <div class="bg-gray-50 p-10 rounded-3xl">
                    <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-yellow-600"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h2>
                    <p class="text-gray-600 leading-relaxed">
                        To be the leading printing partner in the region, known for our investment in modern technology and our ability to handle any print job, big or small.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Team/History Section --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Journey</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    From a single offset press to a full-service printing facility, our growth is a testament to our quality.
                </p>
            </div>

            <div class="space-y-12">
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="w-full md:w-1/2">
                        <div class="aspect-video bg-gray-200 rounded-2xl overflow-hidden">
                            <img src="/images/offset-printing-process.jpg" alt="Printing House" class="w-full h-full object-cover" />
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">10+ Years of Printing Excellence</h3>
                        <p class="text-gray-600 mb-6">
                            Founded with a passion for print, Y C Ads has evolved into a one-stop shop for all printing needs. Whether it's a complex offset job or a quick digital run, we treat every project with the same level of care and precision.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary mr-3"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                                Advanced Heidelberg Presses
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary mr-3"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                                In-House Design Team
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary mr-3"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                                Eco-Friendly Inks & Papers
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
