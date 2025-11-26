import Link from 'next/link';
import { Facebook, Instagram, Linkedin, Mail, MapPin, Phone } from 'lucide-react';

const Footer = () => {
  const currentYear = new Date().getFullYear();

  return (
    <footer className="bg-gradient-to-b from-black to-gray-900 text-white pt-16 pb-8">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
          {/* Company Info */}
          <div>
            <Link href="/" className="text-2xl font-bold tracking-tighter mb-6 inline-block">
              Y C <span className="text-accent">Ads</span>
            </Link>
            <p className="text-gray-400 mb-6 leading-relaxed">
              Driving measurable growth through innovative media planning, creative strategy, and data-driven execution.
            </p>
            <div className="flex space-x-4">
              <a href="#" className="text-gray-400 hover:text-accent transition-colors">
                <Facebook size={20} />
              </a>
              <a href="#" className="text-gray-400 hover:text-accent transition-colors">
                <Instagram size={20} />
              </a>
              <a href="#" className="text-gray-400 hover:text-accent transition-colors">
                <Linkedin size={20} />
              </a>
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h3 className="text-lg font-semibold mb-6">Quick Links</h3>
            <ul className="space-y-4">
              <li>
                <Link href="/" className="text-gray-400 hover:text-accent transition-colors">
                  Home
                </Link>
              </li>
              <li>
                <Link href="/about" className="text-gray-400 hover:text-accent transition-colors">
                  About Us
                </Link>
              </li>
              <li>
                <Link href="/#services" className="text-gray-400 hover:text-accent transition-colors">
                  Services
                </Link>
              </li>
              <li>
                <Link href="/contact" className="text-gray-400 hover:text-accent transition-colors">
                  Contact
                </Link>
              </li>
            </ul>
          </div>

          {/* Services */}
          <div>
            <h3 className="text-lg font-semibold mb-6">Services</h3>
            <ul className="space-y-4">
              <li className="text-gray-400">Digital Printing</li>
              <li className="text-gray-400">Offset Printing</li>
              <li className="text-gray-400">Promotional Items</li>
              <li className="text-gray-400">Custom Solutions</li>
            </ul>
          </div>

          {/* Contact Info */}
          <div>
            <h3 className="text-lg font-semibold mb-6">Contact Us</h3>
            <ul className="space-y-4">
              <li className="flex items-start">
                <MapPin size={20} className="text-accent mr-3 mt-1 flex-shrink-0" />
                <span className="text-gray-400">291/E Mohottigoda Road, Koralaima, Gonapola 12410, Sri Lanka</span>
              </li>
              <li className="flex items-center">
                <Phone size={20} className="text-accent mr-3 flex-shrink-0" />
                <span className="text-gray-400">+94 77 503 6000</span>
              </li>
              <li className="flex items-center">
                <Mail size={20} className="text-accent mr-3 flex-shrink-0" />
                <span className="text-gray-400">ycnads@gmail.com</span>
              </li>
            </ul>
          </div>
        </div>

        <div className="border-t border-gray-800 pt-8 text-center">
          <p className="text-gray-500 text-sm">
            &copy; {currentYear} Y C Ads. All Rights Reserved.
          </p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
