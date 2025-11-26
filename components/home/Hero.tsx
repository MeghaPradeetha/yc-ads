'use client';

import Link from 'next/link';
import { ArrowRight } from 'lucide-react';
import { motion } from 'framer-motion';

const Hero = () => {
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
                Premium Apparel & Branding
              </span>
            </div>
            
            <h1 className="text-6xl md:text-8xl font-bold tracking-tighter text-white mb-8 leading-[1.1]">
              Print Your <br />
              <span className="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-red-500">
                Style.
              </span>
            </h1>
            
            <p className="text-xl md:text-2xl text-gray-300 mb-10 max-w-xl leading-relaxed font-light border-l-4 border-primary pl-6">
              From high-fashion lookbooks to custom apparel and vibrant promotional materials. We bring your brand&apos;s aesthetic to life.
            </p>
            
            <div className="flex flex-col sm:flex-row gap-6">
              <Link
                href="/#services"
                className="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-300 bg-primary rounded-full overflow-hidden hover:shadow-2xl hover:shadow-red-600/40"
              >
                <span className="absolute inset-0 w-full h-full bg-gradient-to-r from-red-600 to-orange-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                <span className="relative flex items-center">
                  Start Your Project
                  <ArrowRight className="ml-2 transition-transform group-hover:translate-x-1" size={20} />
                </span>
              </Link>
              <Link
                href="/contact"
                className="inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-300 border border-white/30 rounded-full hover:bg-white hover:text-gray-900 backdrop-blur-sm"
              >
                View Lookbook
              </Link>
            </div>
          </motion.div>
        </div>
      </div>

      {/* Floating Elements for Modern Feel */}
      <motion.div 
        animate={{ y: [0, -20, 0] }}
        transition={{ duration: 4, repeat: Infinity, ease: "easeInOut" }}
        className="absolute bottom-10 right-10 z-20 hidden md:block"
      >
        <div className="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20 max-w-xs">
          <p className="text-white font-medium mb-2">&quot;The colors are incredibly vivid. Y C Ads nailed our summer collection launch.&quot;</p>
          <div className="flex items-center gap-3">
            <div className="w-8 h-8 rounded-full bg-accent"></div>
            <span className="text-sm text-gray-300">Fashion Weekly</span>
          </div>
        </div>
      </motion.div>
    </section>
  );
};

export default Hero;
