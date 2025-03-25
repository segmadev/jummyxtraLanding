<?php
require_once('../config/config.php');
$pageTitle = "Trade Services";
require_once('../components/header.php');
?>

<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-secondary to-primary overflow-hidden">
    <div class="absolute inset-0">
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iZ3JpZCIgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNIDIwIDAgTCAwIDAgMCAyMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLW9wYWNpdHk9IjAuMSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyaWQpIi8+PC9zdmc+')] opacity-20">
        </div>
    </div>
    <div class="max-w-7xl mx-auto pt-32 pb-24 px-4 sm:px-6 lg:px-8">
        <div class="text-center" data-aos="fade-up">
            <h1 class="text-5xl font-extrabold text-white sm:text-6xl">
                Global Trade Services
            </h1>
            <p class="mt-6 max-w-3xl mx-auto text-lg text-white/90">
                Comprehensive trade solutions to help your business thrive in international markets.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="https://logistics.jummyxtra.com" target="_blank"
                    class="inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-white text-secondary hover:bg-gray-100 text-base sm:text-lg font-medium rounded-full transition-all duration-300">
                    Visit Our Logistics Platform
                    <i class="fas fa-external-link-alt ml-2"></i>
                </a>
                <a href="#contact"
                    class="inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 border-2 border-white text-base sm:text-lg font-medium rounded-full text-white hover:bg-white hover:text-secondary transition-all duration-300">
                    Contact Us
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Detailed Services Section -->
<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">
            <!-- Customs Clearance -->
            <div class="relative group" data-aos="fade-up">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-blue-600 to-[#253e7c] rounded-2xl opacity-0 group-hover:opacity-100 transition-all duration-300">
                </div>
                <div
                    class="relative p-8 bg-white rounded-2xl shadow-lg group-hover:bg-transparent transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center group-hover:bg-white/20 transition-all duration-300">
                        <i
                            class="fas fa-box text-3xl text-blue-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3
                        class="mt-6 text-2xl font-semibold text-gray-900 group-hover:text-white transition-all duration-300">
                        Customs Clearance</h3>
                    <p class="mt-4 text-gray-600 group-hover:text-white/90 transition-all duration-300">
                        Expert handling of documentation and regulatory compliance for smooth international trade.
                    </p>
                    <ul class="mt-6 space-y-3">
                        <li
                            class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                            <i
                                class="fas fa-check-circle text-blue-600 group-hover:text-white mr-2 transition-all duration-300"></i>
                            Documentation Support
                        </li>
                        <li
                            class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                            <i
                                class="fas fa-check-circle text-blue-600 group-hover:text-white mr-2 transition-all duration-300"></i>
                            Duty Calculation
                        </li>
                        <li
                            class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                            <i
                                class="fas fa-check-circle text-blue-600 group-hover:text-white mr-2 transition-all duration-300"></i>
                            Compliance Management
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Freight Management -->
            <div class="relative group" data-aos="fade-up" data-aos-delay="100">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-blue-600 to-[#253e7c] rounded-2xl opacity-0 group-hover:opacity-100 transition-all duration-300">
                </div>
                <div
                    class="relative p-8 bg-white rounded-2xl shadow-lg group-hover:bg-transparent transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center group-hover:bg-white/20 transition-all duration-300">
                        <i
                            class="fas fa-truck text-3xl text-blue-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3
                        class="mt-6 text-2xl font-semibold text-gray-900 group-hover:text-white transition-all duration-300">
                        Freight Management</h3>
                    <p class="mt-4 text-gray-600 group-hover:text-white/90 transition-all duration-300">
                        End-to-end logistics solutions with real-time tracking and optimization.
                    </p>
                    <ul class="mt-6 space-y-3">
                        <li
                            class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                            <i
                                class="fas fa-check-circle text-blue-600 group-hover:text-white mr-2 transition-all duration-300"></i>
                            Global Shipping
                        </li>
                        <li
                            class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                            <i
                                class="fas fa-check-circle text-blue-600 group-hover:text-white mr-2 transition-all duration-300"></i>
                            Warehouse Management
                        </li>
                        <li
                            class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                            <i
                                class="fas fa-check-circle text-blue-600 group-hover:text-white mr-2 transition-all duration-300"></i>
                            Last-Mile Delivery
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Market Entry -->
            <div class="relative group" data-aos="fade-up" data-aos-delay="200">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-blue-600 to-[#253e7c] rounded-2xl opacity-0 group-hover:opacity-100 transition-all duration-300">
                </div>
                <div
                    class="relative p-8 bg-white rounded-2xl shadow-lg group-hover:bg-transparent transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center group-hover:bg-white/20 transition-all duration-300">
                        <i
                            class="fas fa-globe-americas text-3xl text-blue-600 group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3
                        class="mt-6 text-2xl font-semibold text-gray-900 group-hover:text-white transition-all duration-300">
                        Market Entry</h3>
                    <p class="mt-4 text-gray-600 group-hover:text-white/90 transition-all duration-300">
                        Strategic guidance and support for successful international market expansion.
                    </p>
                    <ul class="mt-6 space-y-3">
                        <li
                            class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                            <i
                                class="fas fa-check-circle text-blue-600 group-hover:text-white mr-2 transition-all duration-300"></i>
                            Market Analysis
                        </li>
                        <li
                            class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                            <i
                                class="fas fa-check-circle text-blue-600 group-hover:text-white mr-2 transition-all duration-300"></i>
                            Strategy Development
                        </li>
                        <li
                            class="flex items-center text-gray-600 group-hover:text-white/90 transition-all duration-300">
                            <i
                                class="fas fa-check-circle text-blue-600 group-hover:text-white mr-2 transition-all duration-300"></i>
                            Local Partnership
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">Ready to Go Global?</h2>
            <p class="mt-4 text-lg text-gray-600">Contact us today to learn more about our trade services.</p>
            <a href="../index.html#contact"
                class="mt-8 inline-flex items-center px-8 py-4 border border-transparent text-lg font-medium rounded-full text-white bg-blue-600 hover:bg-blue-700">
                Contact Us
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</div>

<!-- Rest of your page content -->

<?php require_once('../components/footer.php'); ?>