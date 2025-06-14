// Initialize Alpine.js
document.addEventListener('alpine:init', () => {
    // Create global store for modernCarousel
    Alpine.store('modernCarousel', {
        transitionDuration: 800, // Duration of transition animation (ms) - 0.8 seconds
    });
});

window.Alpine = Alpine;

// Register modernCarousel component
window.modernCarousel = function () {
  return {
    currentSlide: 0,
    totalSlides: 5, // Adjust based on your slide count
    autoplaySpeed: 7000, // Time between slides (ms) - 7 seconds
    transitionDuration: 800, // Duration of transition animation (ms) - 0.8 seconds
    autoplayTimeout: null,

    init() {
      if (this.totalSlides > 1) {
        this.startAutoplay();

        // Stop autoplay when user interacts with the carousel
        document.querySelector("section").addEventListener("mouseenter", () => {
          this.stopAutoplay();
        });

        document.querySelector("section").addEventListener(
          "touchstart",
          () => {
            this.stopAutoplay();
          },
          { passive: true }
        );

        // Resume autoplay when user leaves
        document.querySelector("section").addEventListener("mouseleave", () => {
          this.startAutoplay();
        });

        document.querySelector("section").addEventListener(
          "touchend",
          () => {
            this.startAutoplay();
          },
          { passive: true }
        );
      }
    },

    nextSlide() {
      this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
    },

    prevSlide() {
      this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
    },

    startAutoplay() {
      this.stopAutoplay();
      this.autoplayTimeout = setTimeout(() => {
        this.nextSlide();
        this.startAutoplay();
      }, this.autoplaySpeed);
    },

    stopAutoplay() {
      clearTimeout(this.autoplayTimeout);
    },
  };
};

// Register counter component
Alpine.data("counter", function (target) {
  return {
    value: 0,
    target: target,
    init() {
      // Will be triggered by Intersection Observer
    },
  };
});

// Register tabNavigation component for profile page
Alpine.data("tabNavigation", () => ({
  activeTab: "about",
  init() {
    // Set active tab from URL hash if available
    const hash = window.location.hash.substring(1);
    if (["about", "vision", "history", "structure", "geography"].includes(hash)) {
      this.activeTab = hash;
      this.$nextTick(() => this.scrollToActiveTab());
    }

    // Update URL when tab changes
    this.$watch("activeTab", (value) => {
      history.replaceState(null, null, value ? `#${value}` : window.location.pathname);
      this.scrollToActiveTab();
    });
  },
  scrollToActiveTab() {
    setTimeout(() => {
      const activeTabEl = document.getElementById("tab-" + this.activeTab);
      if (activeTabEl) {
        // Scroll the tab into center view
        const container = document.getElementById("tabPills");
        const containerWidth = container.offsetWidth;
        const tabWidth = activeTabEl.offsetWidth;
        const tabLeft = activeTabEl.offsetLeft;

        container.scrollTo({
          left: tabLeft - containerWidth / 2 + tabWidth / 2,
          behavior: "smooth",
        });
      }
    }, 50);
  },
}));

// Register imageSlider component
Alpine.data("imageSlider", () => ({
  currentIndex: 0,
  totalImages: 1, // Default value
  touchStartX: 0,
  touchEndX: 0,

  init() {
    // Get totalImages from data attribute
    this.totalImages = parseInt(this.$el.dataset.totalImages || 1);

    // Auto-advance slides every 5 seconds if there are multiple images
    if (this.totalImages > 1) {
      this.startAutoSlide();
    }
  },

  startAutoSlide() {
    this.autoSlideInterval = setInterval(() => {
      this.next();
    }, 5000);
  },

  stopAutoSlide() {
    if (this.autoSlideInterval) {
      clearInterval(this.autoSlideInterval);
    }
  },

  next() {
    this.stopAutoSlide();
    this.currentIndex = (this.currentIndex + 1) % this.totalImages;
    this.startAutoSlide();
  },

  prev() {
    this.stopAutoSlide();
    this.currentIndex = (this.currentIndex - 1 + this.totalImages) % this.totalImages;
    this.startAutoSlide();
  },

  touchStart(e) {
    this.touchStartX = e.changedTouches[0].screenX;
  },

  touchEnd(e) {
    this.touchEndX = e.changedTouches[0].screenX;
    this.handleSwipe();
  },

  handleSwipe() {
    const threshold = 50;
    const swipeDistance = this.touchEndX - this.touchStartX;

    if (swipeDistance > threshold) {
      // Swiped right, go to previous
      this.prev();
    } else if (swipeDistance < -threshold) {
      // Swiped left, go to next
      this.next();
    }
  },
}));

// Make copyToClipboard globally accessible
window.copyToClipboard = function (text) {
  navigator.clipboard
    .writeText(text)
    .then(() => {
      // Show success toast
      const toast = document.createElement("div");
      toast.className = "fixed bottom-4 right-4 bg-gray-900 text-white px-4 py-2 rounded-lg shadow-lg flex items-center gap-2 animate-fade-in z-50";
      toast.innerHTML = `
          <i class="fas fa-check text-emerald-400"></i>
          <span>Link berhasil disalin!</span>
      `;
      document.body.appendChild(toast);

      // Remove toast after 2 seconds
      setTimeout(() => {
        toast.classList.add("animate-fade-out");
        setTimeout(() => toast.remove(), 300);
      }, 2000);
    })
    .catch(console.error);
};

// Start Alpine.js
Alpine.start();

// Lazy load komponen yang tidak segera dibutuhkan
const loadOptionalDependencies = () => {
  // Import Font Awesome hanya jika belum dimuat
  if (!document.querySelector('link[href*="font-awesome"]')) {
    import("@fortawesome/fontawesome-free/css/all.css");
  }
};

// Fungsi untuk memuat AOS dengan lazy loading
const initAOS = async () => {
  // Check if AOS is already loaded globally
  if (window.AOS) {
    window.AOS.init({
      duration: 800,
      once: true,
      offset: 100,
      // Mengurangi animasi pada perangkat mobile untuk performa lebih baik
      disable: window.innerWidth < 768 && "phone",
      // Mempercepat render dengan membatasi jumlah item yang dianimasikan
      startEvent: "DOMContentLoaded",
    });

    // Untuk memperbaiki AOS pada halaman-halaman Livewire
    document.addEventListener("livewire:navigated", () => {
      window.AOS.refresh();
    });
  } else {
    console.warn("AOS not detected. Make sure it's properly loaded.");
  }
};

// Deteksi jika pengguna memilih preferensi reduced motion
const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

// Saat dokumen sudah siap
document.addEventListener("DOMContentLoaded", () => {
  // Inisialisasi fitur utama

  // Jika pengguna tidak memilih reduced motion, inisialisasi AOS
  if (!prefersReducedMotion) {
    // Delay AOS initialization slightly to prioritize critical rendering
    setTimeout(() => {
      initAOS();
    }, 100);
  }

  // Intersection Observer for counting animation when scrolled into view
  const counterObserver = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // Check if we've already triggered the animation
          if (!entry.target._x_isShown) {
            entry.target._x_isShown = true;

            // Get the Alpine component instance
            const component = Alpine.$data(entry.target);

            // Set up the animation
            const duration = 1000;
            let startTime = null;

            function step(timestamp) {
              if (!startTime) startTime = timestamp;
              const progress = Math.min((timestamp - startTime) / duration, 1);
              component.value = Math.floor(progress * component.target);

              if (progress < 1) {
                window.requestAnimationFrame(step);
              } else {
                component.value = component.target; // Ensure we end at exactly the target
              }
            }

            // Start the animation
            window.requestAnimationFrame(step);

            // Unobserve after animation starts
            observer.unobserve(entry.target);
          }
        }
      });
    },
    {
      threshold: 0.1, // Trigger when at least 10% of the element is visible
      rootMargin: "0px 0px -50px 0px", // Adjust the trigger point
    }
  );

  // Observe all counter elements
  document.querySelectorAll(".counter-item").forEach((counter) => {
    counterObserver.observe(counter);
  });

  // Initialize Swiper for berita and umkm sliders
  if (window.Swiper) {
    // Berita Slider Initialization
    if (document.querySelector(".berita-slider")) {
      new Swiper(".berita-slider", {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".berita-pagination",
          clickable: true,
          dynamicBullets: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 24,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    }

    // UMKM Slider Initialization
    if (document.querySelector(".umkm-slider")) {
      new Swiper(".umkm-slider", {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".umkm-pagination",
          clickable: true,
          dynamicBullets: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 24,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    }
  } else {
    console.warn("Swiper not detected. Make sure it's properly loaded.");
  }

  // Map loader handling
  setTimeout(function () {
    const loader = document.querySelector(".map-loader");
    if (loader) {
      loader.style.display = "none";
    }
  }, 5000);

  // Back to top button functionality
  const backToTopButton = document.getElementById("back-to-top");
  if (backToTopButton) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
        backToTopButton.classList.remove("opacity-0", "pointer-events-none");
        backToTopButton.classList.add("opacity-100");
      } else {
        backToTopButton.classList.remove("opacity-100");
        backToTopButton.classList.add("opacity-0", "pointer-events-none");
      }
    });

    backToTopButton.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: prefersReducedMotion ? "auto" : "smooth",
      });
    });
  }

  // Tambahkan smooth scrolling dengan performa yang lebih baik
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        // Gunakan scrollIntoView dengan opsi behavior: 'smooth' hanya jika pengguna tidak memilih reduced motion
        target.scrollIntoView({
          behavior: prefersReducedMotion ? "auto" : "smooth",
          block: "start",
        });
      }
    });
  });

  // Mulai memuat komponen non-kritis setelah komponen utama dimuat
  if ("requestIdleCallback" in window) {
    requestIdleCallback(() => {
      loadOptionalDependencies();
    });
  } else {
    // Fallback untuk browser yang tidak mendukung requestIdleCallback
    setTimeout(loadOptionalDependencies, 1000);
  }
});

// Aktifkan resource hints untuk preconnect dan preload
const addResourceHints = () => {
  // Preconnect untuk domain font dan CDN
  ["https://fonts.googleapis.com", "https://fonts.gstatic.com", "https://cdnjs.cloudflare.com"].forEach((domain) => {
    if (!document.querySelector(`link[rel="preconnect"][href="${domain}"]`)) {
      const link = document.createElement("link");
      link.rel = "preconnect";
      link.href = domain;
      link.crossOrigin = "anonymous";
      document.head.appendChild(link);
    }
  });
};

// Tambahkan resource hints saat ada waktu idle
if ("requestIdleCallback" in window) {
  requestIdleCallback(addResourceHints);
} else {
  setTimeout(addResourceHints, 500);
}


