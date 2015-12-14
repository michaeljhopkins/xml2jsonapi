$(function () {
    $.material.init();
    $(".shor").noUiSlider({
        start: 40,
        connect: "lower",
        range: {
            min: 0,
            max: 100
        }
    });

    $(".svert").noUiSlider({
        orientation: "vertical",
        start: 40,
        connect: "lower",
        range: {
            min: 0,
            max: 100
        }
    });
});