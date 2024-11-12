let faq = document.getElementsByClassName("faq-content");

const onClick = (e) => {
  if (
    e.target.className == "q" &&
    e.target.parentElement.children[1].style.display == "none"
  ) {
    e.target.parentElement.children[1].style.display = "block";
  } else if (
    e.target.parentElement.children[1].style.display == "block" &&
    e.target.parentElement.children[1].className == "a"
  ) {
    e.target.parentElement.children[1].style.display = "none";
  }
};

for (let index = 0; index < faq.length; index++) {
  faq[index].addEventListener("click", onClick);
}
