@php
$services = [
  [
    'title' => 'Offset Printing',
    'description' => 'High-volume printing for magazines, brochures, and catalogs with superior color accuracy and cost-efficiency.',
    'icon' => 'layers', // Lucide icon name
    'imageSrc' => '/images/offset-printing-process.jpg'
  ],
  [
    'title' => 'Digital Printing',
    'description' => 'Fast turnaround for business cards, flyers, and short-run projects. Crisp quality on demand.',
    'icon' => 'printer',
    'imageSrc' => '/images/digital-printing-machine.jpg'
  ],
  [
    'title' => 'Promotional Items',
    'description' => 'Custom branded mugs, pens, plate, granite, T-shirts, caps, and corporate gifts to keep your brand top-of-mind.',
    'icon' => 'coffee',
    'imageSrc' => '/images/promotional-mugs.jpg'
  ],
  [
    'title' => 'Label & Tag Printing',
    'description' => 'Custom labels and tags for packaging, shipping, and inventory management.',
    'icon' => 'tag',
    'imageSrc' => '/images/custom-labels.jpg'
  ],
];
@endphp

<section id="services" class="py-24 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <h2 class="text-base font-semibold text-primary tracking-wide uppercase mb-2">Our Capabilities</h2>
      <p class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
        Comprehensive Printing Solutions
      </p>
      <p class="text-lg text-gray-600">
        From paper to merchandise, we print it all with unmatched quality and speed.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      @foreach($services as $service)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group flex flex-col h-full">
            <div class="relative h-48 overflow-hidden">
                <img 
                    src="{{ $service['imageSrc'] }}" 
                    alt="{{ $service['title'] }}"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                />
                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300"></div>
                <div class="absolute bottom-4 left-4 bg-white/90 p-2 rounded-lg backdrop-blur-sm">
                    {{-- Icon rendering based on name --}}
                    @if($service['icon'] === 'layers')
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>
                    @elseif($service['icon'] === 'printer')
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6"/><rect x="6" y="14" width="12" height="8" rx="1"/></svg>
                    @elseif($service['icon'] === 'coffee')
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M10 2v2"/><path d="M14 2v2"/><path d="M16 8a1 1 0 0 1 1 1v8a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V9a1 1 0 0 1 1-1h14a4 4 0 0 1 4 4 1 1 0 0 1-1 1h-3"/><line x1="6" x2="6.01" y1="2" y2="2"/></svg>
                    @elseif($service['icon'] === 'tag')
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l5 5a2 2 0 0 0 2.828 0l7.172-7.172a2 2 0 0 0 0-2.828l-5-5Z"/><circle cx="7.5" cy="7.5" r=".5" fill="currentColor"/></svg>
                    @endif
                </div>
            </div>
            
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                    {{ $service['title'] }}
                </h3>
                <p class="text-gray-600 leading-relaxed flex-grow">
                    {{ $service['description'] }}
                </p>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <span class="inline-flex items-center text-sm font-semibold text-primary">
                        Learn More <span class="ml-1 transition-transform group-hover:translate-x-1">&rarr;</span>
                    </span>
                </div>
            </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
