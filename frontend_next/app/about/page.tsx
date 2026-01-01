import Header from "@/components/Header";
import Footer from "@/components/Footer";
import { CheckCircle2, Award, Target } from "lucide-react";

export default function AboutPage() {
  return (
    <main className="min-h-screen bg-white">
      <Header />
      
      {/* Hero Section */}
      <section className="pt-32 pb-16 bg-primary text-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h1 className="text-4xl md:text-6xl font-bold mb-6">About Y C Ads</h1>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            We are a team of digital strategists, creatives, and data analysts passionate about growing businesses.
          </p>
        </div>
      </section>

      {/* Mission & Vision */}
      <section className="py-20">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div className="bg-gray-50 p-10 rounded-3xl">
              <div className="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                <Target className="text-primary" size={24} />
              </div>
              <h2 className="text-2xl font-bold text-gray-900 mb-4">Our Mission</h2>
              <p className="text-gray-600 leading-relaxed">
                To provide businesses with high-quality printing solutions that effectively communicate their brand message. We are committed to speed, precision, and customer satisfaction.
              </p>
            </div>
            <div className="bg-gray-50 p-10 rounded-3xl">
              <div className="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center mb-6">
                <Award className="text-yellow-600" size={24} />
              </div>
              <h2 className="text-2xl font-bold text-gray-900 mb-4">Our Vision</h2>
              <p className="text-gray-600 leading-relaxed">
                To be the leading printing partner in the region, known for our investment in modern technology and our ability to handle any print job, big or small.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* Team/History Section */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-3xl font-bold text-gray-900 mb-4">Our Journey</h2>
            <p className="text-gray-600 max-w-2xl mx-auto">
              From a single offset press to a full-service printing facility, our growth is a testament to our quality.
            </p>
          </div>

          <div className="space-y-12">
            <div className="flex flex-col md:flex-row gap-8 items-center">
              <div className="w-full md:w-1/2">
                <div className="aspect-video bg-gray-200 rounded-2xl overflow-hidden">
                   <img src="/images/offset-printing-process.jpg" alt="Printing House" className="w-full h-full object-cover" />
                </div> 
              </div>
              <div className="w-full md:w-1/2">
                <h3 className="text-2xl font-bold text-gray-900 mb-4">10+ Years of Printing Excellence</h3>
                <p className="text-gray-600 mb-6">
                  Founded with a passion for print, Y C Ads has evolved into a one-stop shop for all printing needs. Whether it&apos;s a complex offset job or a quick digital run, we treat every project with the same level of care and precision.
                </p>
                <ul className="space-y-3">
                  <li className="flex items-center text-gray-700">
                    <CheckCircle2 className="text-primary mr-3" size={20} />
                    Advanced Heidelberg Presses
                  </li>
                  <li className="flex items-center text-gray-700">
                    <CheckCircle2 className="text-primary mr-3" size={20} />
                    In-House Design Team
                  </li>
                  <li className="flex items-center text-gray-700">
                    <CheckCircle2 className="text-primary mr-3" size={20} />
                    Eco-Friendly Inks & Papers
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </main>
  );
}
