import { Clock, Zap, Award } from 'lucide-react';

const stats = [
  { label: 'Prints Delivered', value: '1M+' },
  { label: 'Happy Clients', value: '500+' },
  { label: 'Years Experience', value: '10+' },
];

const features = [
  {
    title: 'Rapid Turnaround',
    description: 'Same-day printing available for select digital products. We respect your deadlines.',
    icon: Clock,
  },
  {
    title: 'State-of-the-Art Machinery',
    description: 'Using the latest Heidelberg and HP Indigo presses for flawless results.',
    icon: Zap,
  },
  {
    title: 'Quality Guarantee',
    description: 'Every print is inspected for color accuracy and finish before it leaves our shop.',
    icon: Award,
  },
];

const WhyUs = () => {
  return (
    <section className="py-24 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          {/* Left Content */}
          <div>
            <h2 className="text-base font-semibold text-primary tracking-wide uppercase mb-2">Why Choose Us</h2>
            <h3 className="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
              The Y C Ads Advantage
            </h3>
            <p className="text-lg text-gray-600 mb-8">
              We combine traditional craftsmanship with modern technology to deliver prints that make a lasting impression.
            </p>

            <div className="space-y-8">
              {features.map((feature, index) => (
                <div key={index} className="flex">
                  <div className="flex-shrink-0">
                    <div className="flex items-center justify-center h-12 w-12 rounded-md bg-red-100 text-primary">
                      <feature.icon size={24} />
                    </div>
                  </div>
                  <div className="ml-4">
                    <h4 className="text-lg font-medium text-gray-900">{feature.title}</h4>
                    <p className="mt-2 text-base text-gray-500">{feature.description}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>

          {/* Right Stats/Image */}
          <div className="relative">
            <div className="absolute inset-0 bg-gradient-to-r from-yellow-100 to-red-50 rounded-3xl transform rotate-3"></div>
            <div className="relative bg-white border border-gray-100 rounded-3xl shadow-xl p-8 md:p-12">
              <div className="grid grid-cols-1 gap-8">
                {stats.map((stat, index) => (
                  <div key={index} className="text-center p-6 bg-gray-50 rounded-2xl border border-gray-100">
                    <div className="text-4xl md:text-5xl font-bold text-primary mb-2">{stat.value}</div>
                    <div className="text-sm md:text-base font-medium text-gray-500 uppercase tracking-wider">{stat.label}</div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default WhyUs;
