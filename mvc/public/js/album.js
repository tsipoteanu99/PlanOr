let classes = document.getElementsByClassName("fa-heart");
console.log(classes);
for (let i = 0; i < classes.length; i++) {
  classes[i].addEventListener("click", function () {
    if (classes[i].classList.contains("far")) {
      classes[i].classList.remove("far");
      classes[i].classList.add("fas");
    } else {
      classes[i].classList.remove("fas");
      classes[i].classList.add("far");
    }
  });
}
