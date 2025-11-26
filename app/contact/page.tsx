import Header from "@/components/Header";
import Footer from "@/components/Footer";
import CTAForm from "@/components/home/CTAForm";
import { Mail, MapPin, Phone } from "lucide-react";

export default function ContactPage() {
  return (
    <main className="min-h-screen bg-white">
      <Header />
      
      {/* Hero Section */}
      <section className="pt-32 pb-16 bg-primary text-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h1 className="text-4xl md:text-6xl font-bold mb-6">Contact Us</h1>
          <p className="text-xl text-gray-100 max-w-3xl mx-auto">
            Ready to start your next print project? Get a quote or visit our facility.
          </p>
        </div>
      </section>

      {/* Contact Info Grid */}
      <section className="py-20">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <div className="text-center p-8 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition-shadow">
              <div className="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <Phone className="text-accent" size={32} />
              </div>
              <h3 className="text-xl font-bold text-primary mb-2">Call Us</h3>
              <p className="text-gray-600">+94 11 234 5678</p>
              <p className="text-gray-500 text-sm mt-1">Mon-Fri from 8am to 5pm</p>
            </div>
            
            <div className="text-center p-8 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition-shadow">
              <div className="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <Mail className="text-accent" size={32} />
              </div>
              <h3 className="text-xl font-bold text-primary mb-2">Email Us</h3>
              <p className="text-gray-600">hello@ycads.com</p>
              <p className="text-gray-500 text-sm mt-1">We&apos;ll respond within 24 hours</p>
            </div>

            <div className="text-center p-8 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition-shadow">
              <div className="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <MapPin className="text-accent" size={32} />
              </div>
              <h3 className="text-xl font-bold text-primary mb-2">Visit Us</h3>
              <p className="text-gray-600">123 Business Avenue</p>
              <p className="text-gray-600">Colombo 03, Sri Lanka</p>
            </div>
          </div>

          {/* Map Placeholder */}
          <div className="w-full h-96 bg-gray-200 rounded-3xl mb-20 flex items-center justify-center">
            <p className="text-gray-500 font-medium">Map Placeholder (Google Maps Integration)</p>
          </div>
        </div>
      </section>

      {/* Reuse CTA Form */}
      <CTAForm />

      <Footer />
    </main>
  );
}
