$(function () {
    const togglePassword = $('[data-bs-toggle="togglePassword"]')

    if (togglePassword) {
        togglePassword.on('click', function (e) {
            if ($(e.currentTarget).siblings('input').attr('type') === 'password') {
                $(e.currentTarget).siblings('input').attr('type', 'text')
                $(e.currentTarget).find('i').toggleClass('mdi mdi-eye-off');
                $(e.currentTarget).find('i').toggleClass('mdi mdi-eye');
            } else {
                $(e.currentTarget).siblings('input').attr('type', 'password')
                $(e.currentTarget).find('i').toggleClass('mdi mdi-eye-off');
                $(e.currentTarget).find('i').toggleClass('mdi mdi-eye');
            }
        })
    }
})
