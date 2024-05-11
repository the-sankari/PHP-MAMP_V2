const toastButton = document.querySelector("#show-message");
const toastContent = document.querySelector(".toast");
if (toastButton) {
  const toast = new bootstrap.Toast(toastContent);
  toast.show();
}
const themeToggle = document.getElementById("theme-toggle");
const defaultImg = document.querySelector(".default-img");

const img = document.createElement("img");
img.style.width = "20px";
img.style.height = "20px";

themeToggle.addEventListener("click", () => {
  defaultImg.style.display = "none";
  const html = document.documentElement;
  if (html.getAttribute("data-bs-theme") === "dark") {
    html.setAttribute("data-bs-theme", "light");
    img.src = "./images/light.svg";
    // themeToggle.textContent = 'Dark';
  } else {
    html.setAttribute("data-bs-theme", "dark");
    img.src = "./images/dark.svg";
    // themeToggle.textContent = 'Light';
  }
  themeToggle.appendChild(img);
});
