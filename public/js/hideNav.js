"use strict";

function getWidth() {
    var w =
        window.innerWidth ||
        document.documentElement.clientWidth ||
        document.body.clientWidth;
    return w;
}

function addNavClass(width) {
    $(window).resize(function () {
        while (width <= 990) {
            $("a").addClass("w3-text-red");
            $(".accountnav").addClass(".w3-red");
        }

        while (width > 990) {
            $("a").removeClass("w3-text-red");
            $("a").addClass("w3-text-green");
        }
    });
}

function init() {}

window.onload = init(); /* On load call navigation function */
