// Show the button when the user scrolls down 100px from the top of the document
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    const backToTopButton = document.getElementById("back-to-top");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
document.getElementById("back-to-top").onclick = function() {
    scrollToTop();
};

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}
