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

// Load saved mode
if (localStorage.getItem('theme') === 'dark') {
    body.classList.add('dark');
}

// toggleBtn.addEventListener('click', () => {
//     body.classList.toggle('dark');

    // if (body.classList.contains('dark')) {
    //     localStorage.setItem('theme', 'dark');
    //     toggleBtn.innerHTML = '☀️';
    // } else {
    //     localStorage.setItem('theme', 'light');
    //     toggleBtn.innerHTML = '🌙';
    // }

const toggleBtn = document.getElementById('themeToggle');
const body = document.body;

if (toggleBtn) {

    // Load saved theme
    const savedTheme = localStorage.getItem('theme');

    if (savedTheme === 'dark') {
        body.classList.add('dark');
        toggleBtn.innerHTML = '☀️';
    } else {
        toggleBtn.innerHTML = '🌙';
    }

    // Toggle theme
    toggleBtn.addEventListener('click', () => {
        body.classList.toggle('dark');

        const isDark = body.classList.contains('dark');

        toggleBtn.innerHTML = isDark ? '☀️' : '🌙';

        localStorage.setItem('theme', isDark ? 'dark' : 'light');
    });
}