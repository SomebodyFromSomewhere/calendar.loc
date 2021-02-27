$(document).ready(function () {
    let menuBtn = $('.sbr-btn');
    menuBtn.click(function () {
        $('.sbr-menu').toggle();
    });
    initColors();
    $('input[type = "color"]').change(function () {
        let elem = $(this).attr('name');
        $('#' + elem + '_color_choose').text($(this).val());
        $('label[name ="' + elem + '_col"]').css({'background': $(this).val()});
        if (elem == "main") {
            document.documentElement.style.cssText = "--main-background: " + $(this).val();

        } else if (elem == "side_block") {
            document.documentElement.style.cssText = "--menu-background: " + $(this).val();
        } else if (elem == "font") {
            document.documentElement.style.cssText = "--main-font-color: " + $(this).val();
        } else if (elem == "empty") {
            $('.empty').css({'background': $(this).val()});
        } else if (elem == "busy") {
            $('.busy').css({'background': $(this).val()});
        } else if (elem == "active") {
            $('.active').css({'background': $(this).val()});
        } else if (elem == "hover") {
            document.documentElement.style.cssText = "--hover-color: " + $(this).val();
        } else if (elem == "event") {
            $('.event').css({'background': $(this).val()});
        }
    });

    // function initColors() {
    //     for (let i = 0; i < ($('input[type = "color"]').length); i++) {
    //         let elem = $('input[type = "color"]').eq(i).attr('name');
    //         if (elem == "font") {
    //             let value = $("body").css('--main-font-color');
    //             $('#' + elem + '_color_choose').text(value);
    //             $('label[name ="' + elem + '_col"]').css({'color': value});
    //         } else {
    //             let value = $('.' + elem).css("background");
    //             $('#' + elem + '_color_choose').text(value);
    //             $('label[name ="' + elem + '_col"]').css({'color': value});
    //         }
    //
    //
    //     }
    //
    // } //TODO me add initialisation of color menu
});