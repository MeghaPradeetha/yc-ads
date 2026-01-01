@php
$stats = [
  ['label' => 'Prints Delivered', 'value' => '1B+'],
  ['label' => 'Happy Clients', 'value' => '1M+'],
  ['label' => 'Years Experience', 'value' => '25+'],
];

$features = [
  [
    'title' => 'Rapid Turnaround',
    'description' => 'Same-day printing available for select digital products. We respect your deadlines.',
    'icon' => 'clock',
  ],
  [
    'title' => 'State-of-the-Art Machinery',
    'description' => 'Using the latest Heidelberg and HP Indigo presses for flawless results.',
    'icon' => 'zap',
  ],
  [
    'title' => 'Quality Guarantee',
    'description' => 'Every print is inspected for color accuracy and finish before it leaves our shop.',
    'icon' => 'award',
  ],
];
@endphp

<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
      {{-- Left Content --}}
      <div>
        <h2 class="text-base font-semibold text-primary tracking-wide uppercase mb-2">Why Choose Us</h2>
        <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          The Y C Ads Advantage
        </h3>
        <p class="text-lg text-gray-600 mb-8">
          We combine traditional craftsmanship with modern technology to deliver prints that make a lasting impression.
        </p>

        <div class="space-y-8">
          @foreach($features as $feature)
            <div class="flex">
              <div class="flex-shrink-0">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-red-100 text-primary">
                  @if($feature['icon'] === 'clock')
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                  @elseif($feature['icon'] === 'zap')
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap"><path d="M4 14a1 1 0 0 0-1 2.83L6.14 21a1 1 0 0 0 1.83-.88l-1.37-4.17a1 1 0 0 1 .95-1.31H12a1 1 0 0 0 .84-1.61L9.12 3.56A1 1 0 0 0 7.37 4.19l1.17 3.62a1 1 0 0 1-.94 1.34H4Z"/></svg>
                  @elseif($feature['icon'] === 'award')
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
                  @endif
                </div>
              </div>
              <div class="ml-4">
                <h4 class="text-lg font-medium text-gray-900">{{ $feature['title'] }}</h4>
                <p class="mt-2 text-base text-gray-500">{{ $feature['description'] }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      {{-- Right Stats/Image --}}
      <div class="relative">
        <div class="absolute inset-0 bg-gradient-to-r from-yellow-100 to-red-50 rounded-3xl transform rotate-3"></div>
        <div class="relative bg-white border border-gray-100 rounded-3xl shadow-xl p-8 md:p-12">
          <div class="grid grid-cols-1 gap-8">
            @foreach($stats as $stat)
              <div class="text-center p-6 bg-gray-50 rounded-2xl border border-gray-100">
                <div class="text-4xl md:text-5xl font-bold text-primary mb-2">{{ $stat['value'] }}</div>
                <div class="text-sm md:text-base font-medium text-gray-500 uppercase tracking-wider">{{ $stat['label'] }}</div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
