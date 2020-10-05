$(document).ready(() => {
    $("#mega-shop").mouseover(() =>
        $(".mega-shop-menu").addClass("mega-active")
    );
    $("#mega-shop").mouseleave(() =>
        $(".mega-shop-menu").removeClass("mega-active")
    );
});

$(document).ready(() => {
    $("#mega-sup").mouseover(() => $(".mega-sup-menu").addClass("mega-active"));
    $("#mega-sup").mouseleave(() =>
        $(".mega-sup-menu").removeClass("mega-active")
    );
});

$(document).ready(() => {
    $("#mega-learn").mouseover(() =>
        $(".mega-learn-menu").addClass("mega-active")
    );
    $("#mega-learn").mouseleave(() =>
        $(".mega-learn-menu").removeClass("mega-active")
    );
});
