import { Printer, Coffee, Layers, Tag } from 'lucide-react';
import ServiceCard from './ServiceCard';

const services = [
  {
    title: 'Offset Printing',
    description: 'High-volume printing for magazines, brochures, and catalogs with superior color accuracy and cost-efficiency.',
    icon: Layers,
    imageSrc: '/images/man-working-printing-house-with-paper-paints.jpg'
  },
  {
    title: 'Digital Printing',
    description: 'Fast turnaround for business cards, flyers, and short-run projects. Crisp quality on demand.',
    icon: Printer,
    imageSrc: '/images/digital.jpg'
  },
  {
    title: 'Promotional Items',
    description: 'Custom branded mugs, pens, plate, granite, T-shirts, caps, and corporate gifts to keep your brand top-of-mind.',
    icon: Coffee,
    imageSrc: '/images/mugs.jpg'
  },
  {
    title: 'Label & Tag Printing',
    description: 'Custom labels and tags for packaging, shipping, and inventory management.',
    icon: Tag,
    imageSrc: '/images/lable.jpg'
  },
];

const Services = () => {
  return (
    <section id="services" className="py-24 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center max-w-3xl mx-auto mb-16">
          <h2 className="text-base font-semibold text-primary tracking-wide uppercase mb-2">Our Capabilities</h2>
          <p className="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
            Comprehensive Printing Solutions
          </p>
          <p className="text-lg text-gray-600">
            From paper to merchandise, we print it all with unmatched quality and speed.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {services.map((service, index) => (
            <ServiceCard key={index} {...service} />
          ))}
        </div>
      </div>
    </section>
  );
};

export default Services;
