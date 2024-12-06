jQuery(document).ready(function($) {
    // Check Local Storage for Dark Mode Preference
    if (localStorage.getItem('darkMode') === 'enabled') {
        $('body').addClass('dark-mode');
    }

    // Toggle Dark Mode
    $('#dark-mode-toggle').on('click', function() {
        $('body').toggleClass('dark-mode');
        if ($('body').hasClass('dark-mode')) {
            localStorage.setItem('darkMode', 'enabled');
        } else {
            localStorage.setItem('darkMode', 'disabled');
        }
    });
});
