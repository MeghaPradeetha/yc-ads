'use client';

import { useState, useEffect } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { Quote } from 'lucide-react';

const testimonials = [
  {
    quote: "The quality of their offset printing is unmatched. Our catalogs looked absolutely professional.",
    author: "Sarah Jenkins",
    title: "Marketing Director, TechFlow",
  },
  {
    quote: "Fastest turnaround in the city. They saved our event with same-day flyer printing.",
    author: "Michael Chen",
    title: "Event Manager, CityEvents",
  },
  {
    quote: "We love our branded mugs and t-shirts! The print quality has held up perfectly.",
    author: "Emma Rodriguez",
    title: "Founder, GreenLife",
  },
];

const clients = [
  'TechFlow', 'RetailOne', 'GreenLife', 'StartUpX', 'GlobalCorp', 'NextGen'
];

const Testimonials = () => {
  const [currentIndex, setCurrentIndex] = useState(0);

  useEffect(() => {
    const timer = setInterval(() => {
      setCurrentIndex((prev) => (prev + 1) % testimonials.length);
    }, 5000);
    return () => clearInterval(timer);
  }, []);

  return (
    <section className="py-24 bg-primary text-white overflow-hidden">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* Clients Strip */}
        <div className="mb-20">
          <p className="text-center text-gray-400 text-sm font-semibold uppercase tracking-widest mb-8">Trusted by Industry Leaders</p>
          <div className="flex flex-wrap justify-center gap-8 md:gap-16 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
             {/* Placeholder Logos - using text for now as requested */}
             {clients.map((client, i) => (
               <div key={i} className="text-xl md:text-2xl font-bold text-white">{client}</div>
             ))}
          </div>
        </div>

        {/* Testimonials Slider */}
        <div className="max-w-4xl mx-auto text-center relative">
          <Quote className="text-accent opacity-20 w-24 h-24 absolute -top-12 -left-4 md:-left-12" />
          
          <div className="relative h-64 md:h-48"> {/* Fixed height to prevent layout shift */}
            <AnimatePresence mode="wait">
              <motion.div
                key={currentIndex}
                initial={{ opacity: 0, y: 20 }}
                animate={{ opacity: 1, y: 0 }}
                exit={{ opacity: 0, y: -20 }}
                transition={{ duration: 0.5 }}
                className="absolute inset-0 flex flex-col justify-center items-center"
              >
                <blockquote className="text-2xl md:text-4xl font-medium leading-relaxed mb-8">
                  &quot;{testimonials[currentIndex].quote}&quot;
                </blockquote>
                <cite className="not-italic">
                  <div className="font-bold text-lg">{testimonials[currentIndex].author}</div>
                  <div className="text-accent">{testimonials[currentIndex].title}</div>
                </cite>
              </motion.div>
            </AnimatePresence>
          </div>

          {/* Dots */}
          <div className="flex justify-center space-x-2 mt-8">
            {testimonials.map((_, index) => (
              <button
                key={index}
                onClick={() => setCurrentIndex(index)}
                className={`w-3 h-3 rounded-full transition-colors ${
                  index === currentIndex ? 'bg-accent' : 'bg-gray-700 hover:bg-gray-600'
                }`}
                aria-label={`Go to testimonial ${index + 1}`}
              />
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default Testimonials;
