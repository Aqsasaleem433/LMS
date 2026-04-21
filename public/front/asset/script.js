const menuBtn = document.getElementById("menuBtn");
const navMenu = document.getElementById("navMenu");
const header = document.querySelector(".site-header");

if (menuBtn && navMenu) {
  menuBtn.addEventListener("click", () => {
    navMenu.classList.toggle("open");
  });

  navMenu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      navMenu.classList.remove("open");
    });
  });
}

window.addEventListener("scroll", () => {
  if (header) {
    header.classList.toggle("scrolled", window.scrollY > 8);
  }
});

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
    }
  });
}, { threshold: 0.15 });

document.querySelectorAll(".section-reveal")
  .forEach(el => observer.observe(el));

// Form
const demoForm = document.getElementById("demoForm");
const formStatus = document.getElementById("formStatus");

if (demoForm) {
  demoForm.addEventListener("submit", (event) => {
    event.preventDefault();

    if (!demoForm.checkValidity()) {
      formStatus.textContent = "Please complete all required fields.";
      formStatus.style.color = "red";
      return;
    }

    const data = new FormData(demoForm);
    const name = (data.get("name") || "there").toString().trim();

    formStatus.textContent = `Thanks ${name}, request received.`;
    formStatus.style.color = "green";

    demoForm.reset();
  });
}