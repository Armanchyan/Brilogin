const menuLogin = document.querySelector(".loginInterface");
const interface = document.querySelector(".btn_login");
const menuCancle = document.querySelector(".textCancel");

document.querySelector(".btn_login").onclick = () => {
  menuLogin.classList.toggle("active");
};

document.querySelector(".textCancel").onclick = () => {
  menuLogin.classList.remove("active");
};

document.addEventListener("click", function (e) {
  if (!interface.contains(e.target) && !menuLogin.contains(e.target)) {
    menuLogin.classList.remove("active");
  }
});

function disableScroll() {
  const scrollBarWidth =
    window.innerWidth - document.documentElement.clientWidth;
  document.body.style.overflow = "hidden";
  document.body.style.paddingRight = `${scrollBarWidth}px`;
}

disableScroll();
