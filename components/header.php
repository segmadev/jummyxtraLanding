<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - JummyXtra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#22b34c', // Green
                    secondary: '#253e7c', // Blue
                },
            },
        },
    }
    </script>
    <link rel="stylesheet" href="<?php echo $basePath; ?>styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gradient-to-b from-gray-50 to-white">
    <!-- Header/Navigation -->
    <header class="bg-white/80 backdrop-blur-md fixed w-full z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="<?php echo $basePath; ?>" class="flex items-center">
                        <img src="https://logistics.jummyxtra.com/images/logo.png" alt="JummyXtra Logo"
                            class="h-12 w-auto" style="max-height: 48px; object-fit: contain;">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="<?php echo $basePath; ?>"
                        class="text-secondary hover:text-primary px-3 py-2 text-sm font-medium transition-all duration-300">Home</a>
                    <a href="<?php echo $basePath; ?>services/financial-solutions"
                        class="text-secondary hover:text-primary px-3 py-2 text-sm font-medium transition-all duration-300">Financial
                        Solutions</a>
                    <a href="<?php echo $basePath; ?>services/trade-services"
                        class="text-secondary hover:text-primary px-3 py-2 text-sm font-medium transition-all duration-300">Trade
                        Services</a>
                    <a href="<?php echo $basePath; ?>services/marketing-solutions"
                        class="text-secondary hover:text-primary px-3 py-2 text-sm font-medium transition-all duration-300">Marketing</a>
                    <a href="#contact"
                        class="bg-gradient-to-r from-secondary to-primary text-white px-6 py-2 rounded-full text-sm font-medium hover:shadow-lg transition-all duration-300">Contact
                        Us</a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-secondary hover:text-primary p-2">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-6">
                <div class="flex flex-col space-y-4">
                    <a href="<?php echo $basePath; ?>"
                        class="text-secondary hover:text-primary px-3 py-2 text-sm font-medium transition-all duration-300">Home</a>
                    <a href="<?php echo $basePath; ?>services/financial-solutions"
                        class="text-secondary hover:text-primary px-3 py-2 text-sm font-medium transition-all duration-300">Financial
                        Solutions</a>
                    <a href="<?php echo $basePath; ?>services/trade-services"
                        class="text-secondary hover:text-primary px-3 py-2 text-sm font-medium transition-all duration-300">Trade
                        Services</a>
                    <a href="<?php echo $basePath; ?>services/marketing-solutions"
                        class="text-secondary hover:text-primary px-3 py-2 text-sm font-medium transition-all duration-300">Marketing</a>
                    <a href="#contact"
                        class="bg-gradient-to-r from-secondary to-primary text-white px-6 py-2 rounded-full text-sm font-medium hover:shadow-lg transition-all duration-300 inline-block text-center">Contact
                        Us</a>
                </div>
            </div>
        </div>
    </header>
</body>

</html>