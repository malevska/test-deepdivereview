/**
 * File functions.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 */

function showPopup() {
    document.getElementById("popup").classList.remove("overlay-hidden");
    document.getElementById("popup").classList.add("overlay-visible");
}

function closePopup() {
    document.getElementById("popup").classList.remove("overlay-visible");
    document.getElementById("popup").classList.add("overlay-hidden");
}
