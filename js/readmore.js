function myFunction(num) {
    var dots = document.getElementById("dots"+num);
    var moreText = document.getElementById("more"+num);
    var btnText = document.getElementById("myBtn"+num);

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
 
}
