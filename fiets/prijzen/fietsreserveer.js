function myFunction() {
    var x = document.getElementsById("fietsen");
    var a = document.getElementById("button1");
    if (x.style.display === "block") {
        x.style.display = "none";
        a.innerHTML = "Meer tonen";
    } else {
        x.style.display = "block";
        a.innerHTML = "Minder tonen";
    }
}