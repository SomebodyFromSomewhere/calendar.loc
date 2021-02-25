$(document).ready(function () {
    let menuBtn = $('.sbr-btn');
    menuBtn.click(function () {
        $('.sbr-menu').toggle();
    });
    $('input[type = "color"]').change(function () {
        let elem = $(this).attr('name');
        let changingVal = $(this).attr('changingVal');
        $('#' + elem + '_color_choose').text($(this).val());
        $('label[name ="' + elem + '_col"]').css({'background': $(this).val()});
        if (changingVal == 'background') {
            $('.' + elem).css({'background': $(this).val()});
        } else if (changingVal == 'font') {
            if (elem == 'body') {
                $('body').css({'color': $(this).val()});
            } else {
                $('.' + elem).css({'color': $(this).val()});
            }
        }
    });
})
;