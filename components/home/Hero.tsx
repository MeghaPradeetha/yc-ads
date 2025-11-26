'use client';

import Link from 'next/link';
import { ArrowRight } from 'lucide-react';
import { motion, AnimatePresence } from 'framer-motion';
import { useState, useEffect } from 'react';

const printingImages = [
  { src: '/images/DTF.png', alt: 'DTF Printing' },
  { src: '/images/digital.png', alt: 'Digital Printing' },
  { src: '/images/kord.png', alt: 'Kord Printing' }
];

const Hero = () => {
  const [currentImageIndex, setCurrentImageIndex] = useState(0);

  useEffect(() => {
    const imageTimer = setInterval(() => {
      setCurrentImageIndex((prev) => (prev + 1) % printingImages.length);
    }, 3000); // Change image every 3 seconds
    return () => clearInterval(imageTimer);
  }, []);
  return (
    <section className="relative h-screen min-h-[800px] flex items-center overflow-hidden bg-gray-900">
      {/* Background Image with Parallax-like effect */}
      <motion.div 
        initial={{ scale: 1.1 }}
        animate={{ scale: 1 }}
        transition={{ duration: 10, repeat: Infinity, repeatType: "reverse", ease: "linear" }}
        className="absolute inset-0 z-0"
      >
        <div className="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent z-10"></div>
        <img 
          src="/images/hero-printing-apparel.jpg" 
          alt="Fashion Printing" 
          className="w-full h-full object-cover opacity-80"
        />
      </motion.div>
      
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full">
        <div className="max-w-3xl">
          <motion.div
            initial={{ opacity: 0, x: -50 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.8, delay: 0.2 }}
          >
            <div className="flex items-center gap-4 mb-6">
              <span className="h-1 w-12 bg-accent rounded-full"></span>
              <span className="text-accent font-bold tracking-widest uppercase text-sm">
                Premium Prints & Designs
              </span>
            </div>
            
            <h1 className="text-6xl md:text-8xl font-bold tracking-tighter text-white mb-8 leading-[1.1]">
              Print Your <br />
              <span className="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-red-500">
                Style.
              </span>
            </h1>
            
            <p className="text-xl md:text-2xl text-gray-300 mb-10 max-w-xl leading-relaxed font-light border-l-4 border-primary pl-6">
              The Solution to your Printing Needs.
            </p>
            
            <div className="flex flex-col sm:flex-row gap-6">
              <Link
                href="/#services"
                className="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-300 bg-primary rounded-full overflow-hidden hover:shadow-2xl hover:shadow-red-600/40"
              >
                <span className="absolute inset-0 w-full h-full bg-gradient-to-r from-red-600 to-orange-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                <span className="relative flex items-center">
                 Contact Us
                </span>
              </Link>
            </div>
          </motion.div>
        </div>
      </div>

      {/* Floating Animated Image Carousel */}
      <div className="absolute bottom-20 right-10 z-20 hidden md:block w-[600px] h-[400px] flex items-end justify-end pointer-events-none">
        <AnimatePresence mode="wait">
          <motion.img
            key={currentImageIndex}
            src={printingImages[currentImageIndex].src}
            alt={printingImages[currentImageIndex].alt}
            initial={{ opacity: 0, scale: 0.8 }}
            animate={{ opacity: 1, scale: 1, y: [0, -5, 0] }}
            exit={{ opacity: 0, scale: 0.8 }}
            transition={{ 
              opacity: { duration: 0.5 },
              scale: { duration: 0.5 },
              y: { duration: 4, repeat: Infinity, ease: "easeInOut" }
            }}
            className="w-full h-auto max-h-[70vh] object-contain drop-shadow-2xl absolute bottom-0 right-0"
          />
        </AnimatePresence>
      </div>
    </section>
  );
};

export default Hero;
