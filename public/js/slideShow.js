$(documnt).ready(function() {
    var slideItem = $(".slideItem"),
        slideIndex = 1; // Variables;

    // Plus function
    function nextSlide(n) {
        // Add to index
        showSlide((slideIndex += n));
    }

    // Current function
    function currentSlide(n) {
        showSlide((slideIndex = n));
    }

    // Show function
    function showSlide(n) {
        var i,
            dots = $(".slideDemo"); // Variables

        if (n > slideItem.length) {
            // If number greater than slide images
            slideIndex = 1;
        } // Set index

        if (n < 1) {
            // If number less than 1
            slideIndex = slideItem.length;
        }

        for (i = 0; i < slideItem.length; i++) {
            // For length of slide images
            slideItem[i].style.display = "none"; // Set display
        }

        // Dots
        for (i = 0; i < dots.length; i++) {
            // For each dot
            dots[i].classList.remove("w3-black");
        } // Remove class

        slideItem[slideIndex - 1].style.display = "block"; // Set display
        dots[slideIndex - 1].classList.add("w3-black"); // Set color
    }

    $("#prev").click(function() {
        // On click function
        nextSlide(-1); // Previous slide
    });

    $("#next").click(function() {
        // On click function
        nextSlide(+1); // Next slide
    });

    showSlide(slideIndex); // On click function
});
