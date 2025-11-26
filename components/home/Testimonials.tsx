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

const brandLogos = [
  { src: '/images/brands/flexicare.png', alt: 'Flexicare' },
  { src: '/images/brands/hirdaramani.png', alt: 'Hirdaramani' },
  { src: '/images/brands/leisure.png', alt: 'Leisure' },
];

const Testimonials = () => {
  const [currentIndex, setCurrentIndex] = useState(0);
  const [currentLogoIndex, setCurrentLogoIndex] = useState(0);

  useEffect(() => {
    const timer = setInterval(() => {
      setCurrentIndex((prev) => (prev + 1) % testimonials.length);
    }, 5000);
    return () => clearInterval(timer);
  }, []);

  useEffect(() => {
    const logoTimer = setInterval(() => {
      setCurrentLogoIndex((prev) => (prev + 1) % brandLogos.length);
    }, 3000); 
    return () => clearInterval(logoTimer);
  }, []);

  return (
    <section className="py-24 bg-primary text-white overflow-hidden">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* Clients Strip - Animated Logo Carousel */}
        <div className="mb-20">
          <p className="text-center text-gray-400 text-sm font-semibold uppercase tracking-widest mb-8">Trusted by Industry Leaders</p>
          <div className="flex justify-center items-center gap-8 h-40">
             {brandLogos.map((logo, index) => (
               <motion.img
                 key={index}
                 src={logo.src}
                 alt={logo.alt}
                 animate={{
                   scale: currentLogoIndex === index ? 1 : 0.5,
                   opacity: currentLogoIndex === index ? 1 : 0.4,
                 }}
                 transition={{ 
                   duration: 0.5,
                   ease: "easeInOut"
                 }}
                 className="h-32 md:h-40 w-auto object-contain cursor-pointer"
                 onClick={() => setCurrentLogoIndex(index)}
               />
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
