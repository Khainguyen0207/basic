$(function () {
    setTimeout(function () {
        $('.main-panel.page-loading').fadeOut(100, function () {
            $(this).remove();
        });
    }, 300);

    setTimeout(function () {
        $('.main-panel').show()
    }, 500)
})
