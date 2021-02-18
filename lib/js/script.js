$( document ).ready(function () {
    let sideBlock = $("#side_block");
    let sideBtn = $("#side_btn");
    sideBtn.click(function () {
        sideBlock.animate({left: "-12vw"}, 250, "swing", function () {
            sideBlock.css("left", "-12vw");
        })
    });
});