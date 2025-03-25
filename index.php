<?php
require_once('config/config.php');
$pageTitle = "Home";
require_once('components/header.php');
?>

<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-[#253e7c] to-[#22b34c] overflow-hidden">
    <div class="absolute inset-0">
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iZ3JpZCIgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNIDIwIDAgTCAwIDAgMCAyMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLW9wYWNpdHk9IjAuMSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyaWQpIi8+PC9zdmc+')] opacity-20">
        </div>
    </div>
    <div class="max-w-7xl mx-auto pt-32 pb-24 px-4 sm:px-6 lg:px-8">
        <div class="text-center" data-aos="fade-up">
            <h1 class="text-5xl font-extrabold text-white sm:text-6xl md:text-7xl">
                Powering Tomorrow's
                <span class="block mt-2">Business Success</span>
            </h1>
            <p class="mt-6 max-w-md mx-auto text-lg text-blue-100 sm:text-xl md:mt-8 md:max-w-3xl">
                Revolutionizing business growth through cutting-edge financial solutions, global trade expertise, and
                innovative digital marketing strategies.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#solutions"
                    class="inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-white text-[#253e7c] hover:bg-gray-100 text-base sm:text-lg font-medium rounded-full transition-all duration-300">
                    Our Solutions
                    <i class="fas fa-chevron-right ml-2"></i>
                </a>
                <a href="https://logistics.jummyxtra.com" target="_blank"
                    class="inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 border-2 border-white text-base sm:text-lg font-medium rounded-full text-white hover:bg-white hover:text-[#253e7c] transition-all duration-300">
                    Visit Our Logistics Platform
                    <i class="fas fa-external-link-alt ml-2"></i>
                </a>
            </div>
        </div>
        <div class="mt-16 flex justify-center space-x-16">
            <div class="text-white/70 hover:text-white transition-all duration-300">
                <i class="fas fa-building text-5xl"></i>
            </div>
            <div class="text-white/70 hover:text-white transition-all duration-300">
                <i class="fas fa-industry text-5xl"></i>
            </div>
            <div class="text-white/70 hover:text-white transition-all duration-300">
                <i class="fas fa-landmark text-5xl"></i>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-24 bg-white" id="solutions">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-primary font-semibold text-lg">Our Solutions</span>
            <h2 class="mt-2 text-4xl font-extrabold text-secondary">Comprehensive Financial Solutions</h2>
            <p class="mt-6 text-xl text-gray-600 max-w-3xl mx-auto">Empowering businesses with innovative financial
                tools and solutions designed for the modern economy.</p>
        </div>
        <div class="mt-20">
            <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3">
                <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up">
                    <div
                        class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center group-hover:bg-blue-600 transition-all duration-300">
                        <i class="fas fa-globe text-2xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-gray-900">Multi-Currency Support</h3>
                    <p class="mt-4 text-gray-600 leading-relaxed">Process transactions seamlessly in over 130
                        currencies. Real-time exchange rates and automated currency conversion.</p>
                    <a href="#" class="mt-6 inline-flex items-center text-blue-600 hover:text-blue-700">
                        Learn more <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center group-hover:bg-blue-600 transition-all duration-300">
                        <i class="fas fa-shield-alt text-2xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-gray-900">Advanced Fraud Protection</h3>
                    <p class="mt-4 text-gray-600 leading-relaxed">AI-powered fraud detection system with real-time
                        monitoring and automated risk assessment protocols.</p>
                    <a href="#" class="mt-6 inline-flex items-center text-blue-600 hover:text-blue-700">
                        Learn more <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center group-hover:bg-blue-600 transition-all duration-300">
                        <i class="fas fa-chart-line text-2xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-gray-900">Real-Time Analytics</h3>
                    <p class="mt-4 text-gray-600 leading-relaxed">Advanced reporting dashboard with customizable
                        metrics, predictive analytics, and business intelligence tools.</p>
                    <a href="#" class="mt-6 inline-flex items-center text-blue-600 hover:text-blue-700">
                        Learn more <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Trade Services Section -->
<div class="py-24 bg-gray-50" id="trade">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-primary font-semibold text-lg">Global Trade</span>
            <h2 class="mt-2 text-4xl font-extrabold text-secondary">Seamless Global Trade Solutions</h2>
            <p class="mt-6 text-xl text-gray-600 max-w-3xl mx-auto">Navigate international markets with confidence using
                our comprehensive trade services.</p>
        </div>
        <div class="mt-20">
            <div class="py-24">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">
                        <!-- Customs Clearance -->
                        <div class="relative group" data-aos="fade-up">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-secondary to-primary rounded-2xl opacity-0 group-hover:opacity-100 transition-all duration-300">
                            </div>
                            <div
                                class="relative p-8 bg-white rounded-2xl shadow-lg group-hover:bg-transparent transition-all duration-300">
                                <div
                                    class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center group-hover:bg-white/20 transition-all duration-300">
                                    <i
                                        class="fas fa-box text-3xl text-primary group-hover:text-white transition-all duration-300"></i>
                                </div>
                                <h3
                                    class="mt-6 text-2xl font-semibold text-secondary group-hover:text-white transition-all duration-300">
                                    Customs Clearance</h3>
                                <p class="mt-4 text-gray-600 group-hover:text-white/90 transition-all duration-300">
                                    Expert handling of documentation and regulatory compliance for smooth international
                                    trade.
                                </p>
                                <ul class="mt-6 space-y-3">
                                    <li
                                        class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                                        <i
                                            class="fas fa-check-circle text-primary group-hover:text-white mr-2 transition-all duration-300"></i>
                                        Documentation Support
                                    </li>
                                    <li
                                        class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                                        <i
                                            class="fas fa-check-circle text-primary group-hover:text-white mr-2 transition-all duration-300"></i>
                                        Duty Calculation
                                    </li>
                                    <li
                                        class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                                        <i
                                            class="fas fa-check-circle text-primary group-hover:text-white mr-2 transition-all duration-300"></i>
                                        Compliance Management
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Freight Management -->
                        <div class="relative group" data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-secondary to-primary rounded-2xl opacity-0 group-hover:opacity-100 transition-all duration-300">
                            </div>
                            <div
                                class="relative p-8 bg-white rounded-2xl shadow-lg group-hover:bg-transparent transition-all duration-300">
                                <div
                                    class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center group-hover:bg-white/20 transition-all duration-300">
                                    <i
                                        class="fas fa-truck text-3xl text-primary group-hover:text-white transition-all duration-300"></i>
                                </div>
                                <h3
                                    class="mt-6 text-2xl font-semibold text-secondary group-hover:text-white transition-all duration-300">
                                    Freight Management</h3>
                                <p class="mt-4 text-gray-600 group-hover:text-white/90 transition-all duration-300">
                                    End-to-end logistics solutions with real-time tracking and optimization.
                                </p>
                                <ul class="mt-6 space-y-3">
                                    <li
                                        class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                                        <i
                                            class="fas fa-check-circle text-primary group-hover:text-white mr-2 transition-all duration-300"></i>
                                        Global Shipping
                                    </li>
                                    <li
                                        class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                                        <i
                                            class="fas fa-check-circle text-primary group-hover:text-white mr-2 transition-all duration-300"></i>
                                        Warehouse Management
                                    </li>
                                    <li
                                        class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                                        <i
                                            class="fas fa-check-circle text-primary group-hover:text-white mr-2 transition-all duration-300"></i>
                                        Last-Mile Delivery
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Market Entry -->
                        <div class="relative group" data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-secondary to-primary rounded-2xl opacity-0 group-hover:opacity-100 transition-all duration-300">
                            </div>
                            <div
                                class="relative p-8 bg-white rounded-2xl shadow-lg group-hover:bg-transparent transition-all duration-300">
                                <div
                                    class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center group-hover:bg-white/20 transition-all duration-300">
                                    <i
                                        class="fas fa-globe-americas text-3xl text-primary group-hover:text-white transition-all duration-300"></i>
                                </div>
                                <h3
                                    class="mt-6 text-2xl font-semibold text-secondary group-hover:text-white transition-all duration-300">
                                    Market Entry</h3>
                                <p class="mt-4 text-gray-600 group-hover:text-white/90 transition-all duration-300">
                                    Strategic guidance and support for successful international market expansion.
                                </p>
                                <ul class="mt-6 space-y-3">
                                    <li
                                        class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                                        <i
                                            class="fas fa-check-circle text-primary group-hover:text-white mr-2 transition-all duration-300"></i>
                                        Market Analysis
                                    </li>
                                    <li
                                        class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                                        <i
                                            class="fas fa-check-circle text-primary group-hover:text-white mr-2 transition-all duration-300"></i>
                                        Strategy Development
                                    </li>
                                    <li
                                        class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                                        <i
                                            class="fas fa-check-circle text-primary group-hover:text-white mr-2 transition-all duration-300"></i>
                                        Local Partnership
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Logistics Platform Section -->
<div class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="lg:w-1/2" data-aos="fade-right">
                <span class="text-primary font-semibold text-lg">Logistics Platform</span>
                <h2 class="mt-2 text-4xl font-extrabold text-secondary">
                    Streamline Your Global Logistics
                </h2>
                <p class="mt-4 text-xl text-gray-600">
                    Access our dedicated logistics platform for real-time tracking, shipment management, and end-to-end
                    supply chain visibility.
                </p>
                <div class="mt-8 space-y-4">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-3 text-xl"></i>
                        <span class="text-gray-700">Real-time shipment tracking</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-3 text-xl"></i>
                        <span class="text-gray-700">Automated customs documentation</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-3 text-xl"></i>
                        <span class="text-gray-700">Supply chain analytics</span>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="https://logistics.jummyxtra.com" target="_blank"
                        class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-secondary to-primary hover:shadow-lg text-white rounded-full transition-all duration-300">
                        Access Logistics Platform
                        <i class="fas fa-external-link-alt ml-2"></i>
                    </a>
                </div>
            </div>
            <div class="mt-10 lg:mt-0 lg:w-1/2" data-aos="fade-left">
                <div class="relative">
                    <div
                        class="aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden bg-gradient-to-r from-blue-100 to-[#253e7c]-100 p-8">
                        <div class="flex items-center justify-center h-full">
                            <div class="text-center">
                                <i class="fas fa-truck-moving text-6xl text-blue-600 mb-4"></i>
                                <i class="fas fa-globe text-6xl text-[#253e7c]"></i>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-4 -right-4 w-24 h-24 bg-gradient-to-r from-blue-600 to-[#253e7c] rounded-full flex items-center justify-center">
                        <i class="fas fa-shipping-fast text-3xl text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Marketing Solutions Section -->
<div class="py-24 bg-white" id="marketing">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-primary font-semibold text-lg">Digital Marketing</span>
            <h2 class="mt-2 text-4xl font-extrabold text-secondary">Innovative Marketing Solutions</h2>
            <p class="mt-6 text-xl text-gray-600 max-w-3xl mx-auto">Transform your digital presence with our
                comprehensive marketing strategies.</p>
        </div>
        <div class="mt-20">
            <div class="grid grid-cols-1 gap-12 sm:grid-cols-3">
                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up">
                    <div class="bg-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-search text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">SEO & Content Marketing</h3>
                    <p class="mt-4 text-gray-600">Data-driven SEO strategies and engaging content creation to boost your
                        online visibility.</p>
                    <ul class="mt-6 space-y-3">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                            Keyword Research
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                            Content Strategy
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                            Performance Tracking
                        </li>
                    </ul>
                </div>
                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-share-alt text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Social Media Management</h3>
                    <p class="mt-4 text-gray-600">Strategic social media campaigns to enhance brand awareness and
                        engagement.</p>
                    <ul class="mt-6 space-y-3">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                            Platform Strategy
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                            Content Calendar
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                            Community Management
                        </li>
                    </ul>
                </div>
                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-envelope text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Email Marketing</h3>
                    <p class="mt-4 text-gray-600">Personalized email campaigns that drive engagement and conversions.
                    </p>
                    <ul class="mt-6 space-y-3">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                            Campaign Design
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                            Automation
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check-circle text-blue-600 mr-2"></i>
                            Analytics & Reporting
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="relative bg-gradient-to-r from-[#253e7c] to-[#22b34c] py-24" id="contact">
    <div
        class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iZ3JpZCIgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNIDIwIDAgTCAwIDAgMCAyMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLW9wYWNpdHk9IjAuMSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyaWQpIi8+PC9zdmc+')] opacity-20">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-4xl font-extrabold text-white sm:text-5xl">Ready to Transform Your Business?</h2>
            <p class="mt-4 text-xl text-white/90">Let's discuss how JummyXtra can help accelerate your growth.</p>
        </div>
        <div class="mt-12 max-w-lg mx-auto bg-white rounded-2xl shadow-xl p-8" data-aos="fade-up" data-aos-delay="100">
            <form id="contactForm" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" required
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring-primary">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring-primary">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" required
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring-primary"></textarea>
                </div>
                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg text-white bg-gradient-to-r from-secondary to-primary hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all duration-300">
                        Send Message
                    </button>
                </div>
                <div id="formMessage" class="text-center hidden">
                    <p class="text-primary"></p>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.getElementById('contactForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const form = e.target;
    const submitButton = form.querySelector('button[type="submit"]');
    const formMessage = document.getElementById('formMessage');
    const messageText = formMessage.querySelector('p');

    // Disable submit button and show loading state
    submitButton.disabled = true;
    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Sending...';

    try {
        const formData = new FormData(form);
        const response = await fetch('/handlers/contact.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();

        // Show message
        formMessage.classList.remove('hidden');
        messageText.textContent = result.message;

        if (result.success) {
            messageText.classList.remove('text-red-500');
            messageText.classList.add('text-green-500');
            form.reset(); // Clear form on success
        } else {
            messageText.classList.remove('text-green-500');
            messageText.classList.add('text-red-500');
        }
    } catch (error) {
        formMessage.classList.remove('hidden');
        messageText.textContent = 'An error occurred. Please try again later.';
        messageText.classList.remove('text-green-500');
        messageText.classList.add('text-red-500');
    } finally {
        // Reset button state
        submitButton.disabled = false;
        submitButton.innerHTML = 'Send Message';
    }
});
</script>

<!-- Rest of your page content -->

<?php require_once('components/footer.php'); ?>
</div>