<section id="contact" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-xl overflow-hidden">
            <div class="bg-primary py-10 px-8 text-center">
                <h2 class="text-3xl font-bold text-white mb-2">Ready to Vibrant Your Business?</h2>
                <p class="text-blue-100">Call us today.</p>
            </div>

            <div class="p-8 md:p-12" x-data="{
                formData: {
                    name: '',
                    company: '',
                    email: '',
                    phone: '',
                    details: ''
                },
                submitForm() {
                    const subject = `New Inquiry from ${this.formData.name}`;
                    const body = `
Name: ${this.formData.name}
Company: ${this.formData.company}
Email: ${this.formData.email}
Phone: ${this.formData.phone}

Details:
${this.formData.details}
                    `.trim();

                    const mailtoLink = `mailto:ycnads@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
                    window.location.href = mailtoLink;
                }
            }">
                <form @submit.prevent="submitForm" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label htmlFor="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                required
                                x-model="formData.name"
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-accent focus:ring-2 focus:ring-orange-200 outline-none transition-all"
                                placeholder="John Doe"
                            />
                        </div>
                        <div>
                            <label htmlFor="company" class="block text-sm font-medium text-gray-700 mb-1">Company Name</label>
                            <input
                                type="text"
                                id="company"
                                name="company"
                                x-model="formData.company"
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-accent focus:ring-2 focus:ring-orange-200 outline-none transition-all"
                                placeholder="Your Company Ltd"
                            />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label htmlFor="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                x-model="formData.email"
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-accent focus:ring-2 focus:ring-orange-200 outline-none transition-all"
                                placeholder="john@example.com"
                            />
                        </div>
                        <div>
                            <label htmlFor="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                x-model="formData.phone"
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-accent focus:ring-2 focus:ring-orange-200 outline-none transition-all"
                                placeholder="+94 77 123 4567"
                            />
                        </div>
                    </div>

                    <div>
                        <label htmlFor="details" class="block text-sm font-medium text-gray-700 mb-1">Project Details</label>
                        <textarea
                            id="details"
                            name="details"
                            rows="4"
                            x-model="formData.details"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-accent focus:ring-2 focus:ring-orange-200 outline-none transition-all"
                            placeholder="Tell us about your goals..."
                        ></textarea>
                    </div>

                    <div class="text-center pt-4">
                        <button
                            type="submit"
                            class="inline-flex items-center justify-center px-8 py-4 text-base font-bold text-white transition-all duration-200 bg-accent rounded-full hover:bg-orange-600 hover:shadow-lg hover:shadow-orange-500/30 w-full md:w-auto"
                        >
                            Contact Us
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send ml-2 -mr-1"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
