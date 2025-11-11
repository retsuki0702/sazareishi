document.addEventListener("DOMContentLoaded", () => {
  const naviOpen = document.querySelector(".navi-open");
  const naviClose = document.querySelector(".navi-close");
  const navigation = document.querySelector(".navigation");
  const overlay = document.querySelector(".overlay");
  const header = document.querySelector("header");

  // ===== ハンバーガーメニュー開閉 =====
  function openMenu() {
    navigation.classList.remove("translate-x-full");
    navigation.classList.add("translate-x-0");
    overlay.classList.remove("hidden");
    requestAnimationFrame(() => overlay.classList.add("opacity-100"));
    document.body.style.overflow = "hidden";
  }

  function closeMenu() {
    navigation.classList.remove("translate-x-0");
    navigation.classList.add("translate-x-full");
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
  navigation.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", closeMenu);
  });

  // ===== 現在ページに "active" クラス付与 =====
  const currentPage = window.location.pathname.split("/").pop();
  const links = document.querySelectorAll(".navigation a");

  links.forEach((link) => {
    const linkPage = link.getAttribute("href").split("/").pop();
    if (linkPage === currentPage) {
      link.classList.add("active");
    }
  });

  // ===== スクロール方向によるヘッダー透過 =====
  let lastScrollTop = 0;
  const headerWrapper = document.querySelector(".header-wrapper");

  window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    // 下スクロール → ヘッダー非表示
    if (currentScroll > lastScrollTop && currentScroll > 50) {
      headerWrapper.style.opacity = "0";
      headerWrapper.style.pointerEvents = "none";
    }
    // 上スクロール → ヘッダー表示
    else {
      headerWrapper.style.opacity = "1";
      headerWrapper.style.pointerEvents = "auto";
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
  });
});
