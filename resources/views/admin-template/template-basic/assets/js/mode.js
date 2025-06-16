$(function () {
    setTimeout(function () {
        $('.main-panel.page-loading').fadeOut(100, function () {
            $(this).remove(); // Xoá khỏi DOM sau khi ẩn xong
        });
    }, 500);

    setTimeout(function () {
        $('.main-panel').show()
    }, 500)
})
