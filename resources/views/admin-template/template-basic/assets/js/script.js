$(document).ready(function () {
    $('button[type="reset"][data-bb-toggle="btn-with-href"]').on('click', function (e) {
        e.preventDefault();

        window.location.href = $(this).data('url');
    })
})

$(document).ready(function () {
    const html = $('html');

    const savedTheme = localStorage.getItem('theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
        html.removeClass('light');
        html.addClass('dark');
    }

    // Toggle dark mode
    $('#darkModeToggle').on('click', function () {
        if (html.hasClass('dark')) {
            html.removeClass('dark');
            html.addClass('light');
            localStorage.setItem('theme', 'light');
        } else {
            html.removeClass('light');
            html.addClass('dark');
            localStorage.setItem('theme', 'dark');
        }
    });
});
