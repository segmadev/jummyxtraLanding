<?php
require_once('config/config.php');
$pageTitle = "Page Not Found";
require_once('components/header.php');
?>

<!-- 404 Error Section -->
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full text-center">
        <div class="mb-8">
            <i class="fas fa-exclamation-circle text-6xl text-blue-600"></i>
        </div>
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">404 - Page Not Found</h1>
        <p class="text-xl text-gray-600 mb-8">
            The page you're looking for doesn't exist or has been moved.
        </p>
        <a href="<?php echo $basePath; ?>"
            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full text-white bg-gradient-to-r from-blue-600 to-[#253e7c] hover:shadow-lg transition-all duration-300">
            Back to Home
            <i class="fas fa-home ml-2"></i>
        </a>
    </div>
</div>

<?php require_once('components/footer.php'); ?>