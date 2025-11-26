'use client';

import Link from 'next/link';
import { useState, useEffect } from 'react';
import { Menu, X } from 'lucide-react';
import { motion, AnimatePresence } from 'framer-motion';

const Header = () => {
  const [isOpen, setIsOpen] = useState(false);
  const [isScrolled, setIsScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 20);
    };
    
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const toggleMenu = () => setIsOpen(!isOpen);

  const navLinks = [
    { name: 'Home', href: '/' },
    { name: 'About', href: '/about' },
    { name: 'Services', href: '/#services' }, 
    { name: 'Clients', href: '/#clients' },  
    { name: 'Contact', href: '/contact' },
  ];

  return (
    <header className={`fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 transition-all duration-300 ${
      isScrolled ? '' : 'md:pt-4'
    }`}>
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center h-20">
          {/* Logo */}
          <div className="flex-shrink-0 flex items-center">
            <Link href="/" className="flex items-center">
              <img 
                src="/images/logo.png" 
                alt="Y C Ads" 
                className={`w-auto transition-all duration-300 h-12 ${
                  isScrolled ? 'md:h-12' : 'md:h-32 md:mt-4'
                }`}
              />
            </Link>
          </div>

          {/* Desktop Navigation */}
          <nav className="hidden md:flex space-x-8 items-center">
            {navLinks.map((link) => (
              <Link
                key={link.name}
                href={link.href}
                className="text-gray-600 hover:text-primary font-medium transition-colors"
              >
                {link.name}
              </Link>
            ))}
            <Link
              href="/contact"
              className="bg-accent hover:bg-yellow-500 text-white px-6 py-2.5 rounded-full font-semibold transition-all shadow-lg hover:shadow-yellow-500/30"
            >
              Get a Print Quote
            </Link>
          </nav>

          {/* Mobile Menu Button */}
          <div className="md:hidden flex items-center">
            <button
              onClick={toggleMenu}
              className="text-gray-600 hover:text-primary focus:outline-none"
            >
              {isOpen ? <X size={28} /> : <Menu size={28} />}
            </button>
          </div>
        </div>
      </div>

      {/* Mobile Navigation */}
      <AnimatePresence>
        {isOpen && (
          <motion.div
            initial={{ opacity: 0, height: 0 }}
            animate={{ opacity: 1, height: 'auto' }}
            exit={{ opacity: 0, height: 0 }}
            className="md:hidden bg-white border-b border-gray-100 overflow-hidden"
          >
            <div className="px-4 pt-2 pb-6 space-y-2">
              {navLinks.map((link) => (
                <Link
                  key={link.name}
                  href={link.href}
                  onClick={() => setIsOpen(false)}
                  className="block px-3 py-3 text-base font-medium text-gray-600 hover:text-primary hover:bg-gray-50 rounded-md"
                >
                  {link.name}
                </Link>
              ))}
              <div className="pt-4">
                <Link
                  href="/contact"
                  onClick={() => setIsOpen(false)}
                  className="block w-full text-center bg-accent hover:bg-yellow-500 text-white px-6 py-3 rounded-full font-semibold transition-all"
                >
                  Get a Print Quote
                </Link>
              </div>
            </div>
          </motion.div>
        )}
      </AnimatePresence>
    </header>
  );
};

export default Header;
