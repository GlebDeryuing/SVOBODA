const c1 = document.getElementById("card1");
const c2 = document.getElementById("card2");
const c3 = document.getElementById("card3");

document.addEventListener("mousemove", function(e) {
    MoveBackground(e);
});

function MoveBackground(e) {
    let offsetX0 = (e.clientX / window.innerWidth * 10);
    let offsetY0 = (e.clientY / window.innerHeight * 10);

    c3.setAttribute("style", "transform-origin: " + offsetY0 + "em " + offsetX0 + "em;");
    c2.setAttribute("style", "transform-origin: " + offsetY0 + "em " + offsetX0 + "em;");
    c1.setAttribute("style", "transform-origin: " + offsetY0 + "em  " + offsetX0 + "em;");

}