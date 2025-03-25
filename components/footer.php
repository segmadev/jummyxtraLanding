    <footer class="bg-secondary text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-2xl font-bold text-primary mb-4">JummyXtra</h3>
                    <p class="text-gray-300">We are forward-thinking business solutions provider specializing in
                        secure digital payments, global trade facilitation, and innovative digital marketing services.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="<?php echo $basePath; ?>services/financial-solutions.php"
                                class="text-gray-300 hover:text-primary transition-all duration-300">Financial
                                Solutions</a></li>
                        <li><a href="<?php echo $basePath; ?>services/trade-services.php"
                                class="text-gray-300 hover:text-primary transition-all duration-300">Trade Services</a>
                        </li>
                        <li><a href="<?php echo $basePath; ?>services/marketing-solutions.php"
                                class="text-gray-300 hover:text-primary transition-all duration-300">Marketing
                                Solutions</a></li>
                        <li><a href="https://logistics.jummyxtra.com" target="_blank"
                                class="text-gray-300 hover:text-primary transition-all duration-300">Logistics
                                Platform</a></li>
                        <li><a href="<?php echo $basePath; ?>terms-and-conditions.php"
                                class="text-gray-300 hover:text-primary transition-all duration-300">Terms &
                                Conditions</a></li>
                        <li><a href="<?php echo $basePath; ?>policies.php"
                                class="text-gray-300 hover:text-primary transition-all duration-300">Policies</a></li>
                        <li><a href="<?php echo $basePath; ?>#contact"
                                class="text-gray-300 hover:text-primary transition-all duration-300">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-envelope mr-2"></i>
                            info@jummyxtra.com
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-phone mr-2"></i>
                            +234 706 150 1076
                        </li>
                    </ul>
                </div>

                <!-- Social Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-primary transition-all duration-300">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <!-- More social links -->
                    </div>
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> JummyXtra. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
AOS.init();

// Mobile menu functionality
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuIcon = mobileMenuButton.querySelector('i');

mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    if (mobileMenuIcon.classList.contains('fa-bars')) {
        mobileMenuIcon.classList.remove('fa-bars');
        mobileMenuIcon.classList.add('fa-times');
    } else {
        mobileMenuIcon.classList.remove('fa-times');
        mobileMenuIcon.classList.add('fa-bars');
    }
});

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    if (!mobileMenuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
        mobileMenu.classList.add('hidden');
        mobileMenuIcon.classList.remove('fa-times');
        mobileMenuIcon.classList.add('fa-bars');
    }
});
    </script>
    </body>

    </html>