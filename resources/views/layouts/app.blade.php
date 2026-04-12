<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Dashboard - LAPAS')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ["Poppins", "sans-serif"],
          },
          colors: {
            navy: {
              DEFAULT: "#0b1929",
              light: "#16304d",
            },
            teal: {
              DEFAULT: "#1a6b5e",
              light: "#228b7a",
            },
            amber: {
              DEFAULT: "#c07d20",
              light: "#e09a35",
            },
            sand: "#f5f0e8",
            pearl: "#fdfaf5",
            mist: "#8298af",
          },
        },
      },
    };
  </script>

  <!-- Safelist for dynamic classes (to ensure Tailwind JIT includes them) -->
  <div
    class="hidden from-teal to-teal-light from-amber to-amber-light from-navy to-navy-light bg-teal bg-amber bg-navy bg-navy-light bg-teal-light bg-amber-light text-teal text-amber text-navy text-pearl text-white/60 bg-white/10">
  </div>

</head>

<body class="bg-sand min-h-screen font-poppins">
  @include('partials.sidebar')

  <!-- Main Content -->
  <main class="lg:ml-64 min-h-screen">
    @include('partials.header-app')

    <!-- Content -->
    <div class="p-4 lg:p-8">
      @yield('content')
    </div>
  </main>

  <script>
    // Data (will be overwritten by dashboard if on that page)
    let monthlyData = [];
    let recentVisits = [];

    // Initialize
    document.addEventListener("DOMContentLoaded", function() {
      // Check for data from dashboard view
      if (window.dashboardData) {
        monthlyData = window.dashboardData.monthly;
        recentVisits = window.dashboardData.recent;
      }

      if (document.getElementById("chartContainer")) {
        renderChart();
      }
      if (document.getElementById("recentVisits")) {
        renderRecentVisits();
      }
    });

    // Render Bar Chart
    function renderChartWithData(data) {
      const container = document.getElementById("chartContainer");
      if (!container) return;
      if (!data || !data.length) {
        container.innerHTML = '<p style="color:#8298af;font-size:0.875rem;text-align:center;width:100%;">Belum ada data untuk tahun ini.</p>';
        return;
      }

      const maxValue = Math.max(...data.map((d) => d.value)) || 10;
      const average = data.reduce((sum, d) => sum + d.value, 0) / data.length;
      const averageHeight = (average / maxValue) * 100;

      container.innerHTML = data
        .map((item, index) => {
          const height = item.value > 0 ? (item.value / maxValue) * 100 : 3;
          const isCurrentMonth = (index + 1) === new Date().getMonth() + 1 &&
            window.dashboardData && window.dashboardData.defaultYear === new Date().getFullYear();
          const barColor = isCurrentMonth ? "#1a6b5e" : "rgba(26,107,94,0.5)";

          return `
            <div class="flex-1 flex flex-col items-center gap-2">
              <div class="w-full flex flex-col items-center justify-end h-56 relative">
                <div class="absolute w-full border-t-2 border-dashed" style="bottom: ${averageHeight}%; border-color: rgba(192,125,32,0.4);"></div>
                <div
                  class="bar w-full max-w-8 rounded-t-lg cursor-pointer transition-all duration-500 hover:opacity-75"
                  style="height: 0%; background-color: ${barColor};"
                  data-height="${height}"
                  data-value="${item.value}"
                  data-month="${item.month}"
                  onmouseenter="showTooltip(this)"
                  onmouseleave="hideTooltip(this)"
                ></div>
              </div>
              <span style="color: #8298af; font-size: 0.7rem; font-weight:500;">${item.month}</span>
            </div>
          `;
        })
        .join("");

      setTimeout(() => {
        document.querySelectorAll(".bar").forEach((bar) => {
          bar.style.height = bar.dataset.height + "%";
        });
      }, 150);
    }

    function renderChart() {
      renderChartWithData(monthlyData);
    }

    // Tooltip
    function showTooltip(bar) {
      const tooltip = document.createElement("div");
      tooltip.className = "tooltip";
      tooltip.style.cssText = "position:absolute;top:-2.5rem;left:50%;transform:translateX(-50%);background:#0b1929;color:#fdfaf5;font-size:0.7rem;font-weight:600;padding:0.25rem 0.5rem;border-radius:0.375rem;white-space:nowrap;z-index:10;";
      tooltip.textContent = `${parseInt(bar.dataset.value).toLocaleString('id-ID')} kunjungan`;
      bar.style.position = "relative";
      bar.appendChild(tooltip);
    }

    function hideTooltip(bar) {
      const tooltip = bar.querySelector(".tooltip");
      if (tooltip) tooltip.remove();
    }

    // Render Recent Visits
    function renderRecentVisits() {
      const container = document.getElementById("recentVisits");
      if (!recentVisits.length) {
        container.innerHTML = '<p style="color:#8298af;font-size:0.875rem;text-align:center;padding:1rem 0;">Belum ada kunjungan.</p>';
        return;
      }

      // Color pallete with actual hex values (no Tailwind dependency)
      const avatarColors = [
        { bg: "linear-gradient(135deg, #1a6b5e, #228b7a)" }, // teal
        { bg: "linear-gradient(135deg, #c07d20, #e09a35)" }, // amber
        { bg: "linear-gradient(135deg, #0b1929, #16304d)" }, // navy
      ];

      container.innerHTML = recentVisits
        .map((visit, idx) => {
          const palette = avatarColors[idx % avatarColors.length];
          const statusColor = visit.status === "Disetujui" ? "#1a6b5e" : "#c07d20";
          return `
            <div style="display:flex;align-items:center;gap:0.75rem;padding:0.75rem;border-radius:0.75rem;cursor:pointer;transition:background 0.2s;" onmouseenter="this.style.background='rgba(245,240,232,0.5)'" onmouseleave="this.style.background='transparent'">
              <div style="width:2.5rem;height:2.5rem;border-radius:50%;background:${palette.bg};display:flex;align-items:center;justify-content:center;color:#fdfaf5;font-weight:700;font-size:0.8rem;flex-shrink:0;">
                ${visit.initials}
              </div>
              <div style="flex:1;min-width:0;">
                <p style="color:#0b1929;font-weight:500;font-size:0.875rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">${visit.name}</p>
                <p style="color:#8298af;font-size:0.75rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">Mengunjungi: ${visit.napi}</p>
              </div>
              <div style="text-align:right;flex-shrink:0;">
                <p style="color:#0b1929;font-weight:500;font-size:0.875rem;">${visit.time}</p>
                <span style="color:${statusColor};font-size:0.7rem;font-weight:600;">${visit.status}</span>
              </div>
            </div>
          `;
        })
        .join("");
    }

    // Sidebar Toggle
    function toggleSidebar() {
      const sidebar = document.getElementById("sidebar");
      const overlay = document.getElementById("overlay");

      sidebar.classList.toggle("-translate-x-full");
      overlay.classList.toggle("hidden");
    }

    // Dropdown Toggle
    function toggleDropdown() {
      const menu = document.getElementById("dropdownMenu");
      menu.classList.toggle("hidden");
      menu.classList.toggle("show");
    }

    // Close dropdown when clicking outside
    document.addEventListener("click", function(e) {
      const profileBtn = document.getElementById("profileBtn");
      const dropdownMenu = document.getElementById("dropdownMenu");

      if (
        !profileBtn.contains(e.target) &&
        !dropdownMenu.contains(e.target)
      ) {
        dropdownMenu.classList.add("hidden");
        dropdownMenu.classList.remove("show");
      }
    });



    // Handle resize
    window.addEventListener("resize", function() {
      const sidebar = document.getElementById("sidebar");
      const overlay = document.getElementById("overlay");

      if (window.innerWidth >= 1024) {
        sidebar.classList.remove("-translate-x-full");
        overlay.classList.add("hidden");
      } else {
        sidebar.classList.add("-translate-x-full");
      }
    });
  </script>
</body>

</html>
