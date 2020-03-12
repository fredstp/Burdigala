
function myBurger() {
    var x = document.getElementById("burger-links");
    if (x.style.display === "block") {
    x.style.display = "none";
    } else {
    x.style.display = "block";
    }
    var y = document.getElementById("close");
    if (y.style.display === "block") {
    y.style.display = "none";
    } else {
    y.style.display = "block";
    }
    var z = document.getElementById("open");
    if (z.style.display === "none") {
    z.style.display = "";
    } else {
    z.style.display = "none";
    }
}
