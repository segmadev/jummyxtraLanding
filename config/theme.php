<?php
// Theme configuration
$theme = [
    'colors' => [
        'primary' => '#22b34c',
        'primary-dark' => '#1a8f3d', // Darker shade of green for hover states
        'secondary' => '#253e7c',
        'secondary-dark' => '#1c2f5d', // Darker shade of blue for hover states
    ]
];
?>

<script>
// Add theme colors to Tailwind config
tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: '#22b34c',
                'primary-dark': '#1a8f3d',
                secondary: '#253e7c',
                'secondary-dark': '#1c2f5d',
            }
        }
    }
}
</script>