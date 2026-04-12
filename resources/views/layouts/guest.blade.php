<!doctype html>
<html lang="id" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Sistem Kunjungan Online')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ["Poppins", "sans-serif"]
          },
          colors: {
            navy: {
              DEFAULT: "#0b1929",
              light: "#16304d"
            },
            teal: {
              DEFAULT: "#1a6b5e",
              light: "#228b7a"
            },
            amber: {
              DEFAULT: "#c07d20",
              light: "#e09a35"
            },
            sand: "#f5f0e8",
            pearl: "#fdfaf5",
            mist: "#8298af",
          },
        },
      },
    };
  </script>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-pearl text-navy overflow-x-hidden">
  <!-- NAVBAR -->
  @include('partials.navbar')

  @yield('content')

  @include('partials.footer')
  <script>
    // Navbar scroll effect
    const navbar = document.getElementById("navbar");
    const scrollTop = document.getElementById("scrollTop");

    window.addEventListener("scroll", () => {
      const scrollY = window.scrollY;

      if (scrollY > 50) {
        navbar.style.background = "rgba(11, 25, 41, 0.97)";
        navbar.style.backdropFilter = "blur(16px)";
        navbar.style.boxShadow = "0 2px 20px rgba(0,0,0,0.3)";
        navbar.style.paddingTop = "0.75rem";
        navbar.style.paddingBottom = "0.75rem";
      } else {
        navbar.style.background = "transparent";
        navbar.style.backdropFilter = "";
        navbar.style.boxShadow = "";
        navbar.style.paddingTop = "1rem";
        navbar.style.paddingBottom = "1rem";
      }

      // Scroll to top button
      if (scrollY > 400) {
        scrollTop.style.opacity = "1";
        scrollTop.style.pointerEvents = "auto";
        scrollTop.style.transform = "translateY(0)";
      } else {
        scrollTop.style.opacity = "0";
        scrollTop.style.pointerEvents = "none";
        scrollTop.style.transform = "translateY(1rem)";
      }
    });

    scrollTop.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    });

    // Mobile menu toggle
    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    const menuIcon = menuBtn.querySelector(".menu-icon");
    const closeIcon = menuBtn.querySelector(".close-icon");

    menuBtn.addEventListener("click", () => {
      const isOpen = !mobileMenu.classList.contains("hidden");
      mobileMenu.classList.toggle("hidden");
      mobileMenu.classList.toggle("flex");
      menuIcon.classList.toggle("hidden");
      closeIcon.classList.toggle("hidden");
    });

    // Close mobile menu on link click
    document.querySelectorAll(".mobile-link").forEach((link) => {
      link.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");
        mobileMenu.classList.remove("flex");
        menuIcon.classList.remove("hidden");
        closeIcon.classList.add("hidden");
      });
    });

    // Scroll reveal
    const revealObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry, index) => {
          if (entry.isIntersecting) {
            setTimeout(() => {
              entry.target.classList.add("visible");
            }, index * 50);
            revealObserver.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1,
        rootMargin: "0px 0px -40px 0px"
      },
    );

    document
      .querySelectorAll(".reveal")
      .forEach((el) => revealObserver.observe(el));

    // Upload zone
    const uploadZone = document.getElementById("uploadZone");
    const fileInput = document.getElementById("fileInput");
    const uploadText = document.getElementById("uploadText");
    const uploadIcon = document.getElementById("uploadIcon");

    uploadZone.addEventListener("click", () => fileInput.click());

    fileInput.addEventListener("change", function() {
      if (this.files[0]) {
        uploadText.textContent = this.files[0].name;
        uploadText.classList.add("text-teal", "font-medium");
        uploadIcon.style.color = "#1a6b5e";
        uploadZone.classList.add("active");
      }
    });

    uploadZone.addEventListener("dragover", (e) => {
      e.preventDefault();
      uploadZone.classList.add("active");
    });

    uploadZone.addEventListener("dragleave", () => {
      uploadZone.classList.remove("active");
    });

    uploadZone.addEventListener("drop", (e) => {
      e.preventDefault();
      const file = e.dataTransfer.files[0];
      if (file) {
        fileInput.files = e.dataTransfer.files;
        uploadText.textContent = file.name;
        uploadText.classList.add("text-teal", "font-medium");
        uploadIcon.style.color = "#1a6b5e";
        uploadZone.classList.add("active");
      }
    });
  </script>
</body>

</html>
