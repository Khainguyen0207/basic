$(function () {
    const togglePassword = $('[data-bs-toggle="togglePassword"]')

    if (togglePassword) {
        togglePassword.on('click', function (e) {
            const $btn = $(this)
            if ($btn.siblings('input').attr('type') === 'password') {
                $btn.siblings('input').attr('type', 'text')
            } else {
                $btn.siblings('input').attr('type', 'password')
            }

            $btn.find('i').toggleClass('mdi mdi-eye-off');
            $btn.find('i').toggleClass('mdi mdi-eye');
        })
    }

    $('.toggle-password').on('click', function (e) {
        const target = $(this).data('bb-target');
        const passwordField = $(`[data-bb-toggle="${target}"]`);

        if (passwordField.attr('type') === 'password') {
            passwordField.attr('type', 'text');
            $(this).find('svg').removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            $(this).find('svg').removeClass('fa-eye-slash').addClass('fa-eye');
            passwordField.attr('type', 'password');
        }
    });
})
