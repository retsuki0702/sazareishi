document.addEventListener("DOMContentLoaded", () => {
  const naviOpen = document.querySelector(".navi-open");
  const naviClose = document.querySelector(".navi-close");
  const navSp = document.querySelector(".navigation-sp"); // ✅ SPナビのみ制御
  const overlay = document.querySelector(".overlay");
  const headerWrapper = document.querySelector(".header-wrapper");

  // ===== ハンバーガーメニュー開閉 =====
  function openMenu() {
    navSp.classList.remove("translate-x-full");
    navSp.classList.add("translate-x-0");
    overlay.classList.remove("hidden");
    requestAnimationFrame(() => overlay.classList.add("opacity-100"));
    document.body.style.overflow = "hidden";
  }

  function closeMenu() {
    navSp.classList.remove("translate-x-0");
    navSp.classList.add("translate-x-full");
    overlay.classList.remove("opacity-100");
    overlay.addEventListener(
      "transitionend",
      () => overlay.classList.add("hidden"),
      { once: true }
    );
    document.body.style.overflow = "auto";
  }

  naviOpen.addEventListener("click", openMenu);
  naviClose.addEventListener("click", closeMenu);
  overlay.addEventListener("click", closeMenu);
  navSp.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", closeMenu);
  });

  // ===== 現在ページに "active" クラス付与 =====
  const currentPage = window.location.pathname.split("/").pop();
  const allLinks = document.querySelectorAll(".navigation-pc a, .navigation-sp a");

  allLinks.forEach((link) => {
    const linkPage = link.getAttribute("href").split("/").pop();
    if (linkPage === currentPage) {
      link.classList.add("active");
    }
  });

  // ===== スクロール方向によるヘッダー透過 =====
  let lastScrollTop = 0;

  window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    // 下スクロール → ヘッダー非表示
    if (currentScroll > lastScrollTop && currentScroll > 50) {
      headerWrapper.style.opacity = "0";
      headerWrapper.style.pointerEvents = "none";
    }
    // 上スクロール → ヘッダー再表示
    else {
      headerWrapper.style.opacity = "1";
      headerWrapper.style.pointerEvents = "auto";
    }

    lastScrollTop = Math.max(currentScroll, 0);
  });
});
