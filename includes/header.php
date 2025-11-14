<script src="./assets/js/navigation.js"></script>

<!-- ラッパー（オーバーレイ＋ヘッダー＋ナビ） -->
<div class="header-wrapper fixed top-0 left-0 w-full z-60 transition-opacity duration-500">

  <!-- オーバーレイ（全画面を暗くする） -->
  <div class="overlay fixed inset-0 bg-[rgba(0,0,0,0.6)] hidden opacity-0 transition-opacity duration-300 z-60"></div>

  <!-- ヘッダー本体（overlayの下になるようにz-40） -->
  <header class="relative z-40 w-full h-auto bg-white/90 backdrop-blur-md transition-opacity duration-500">
    <div class="relative flex px-4 pt-3 pb-1 justify-center items-center md:justify-between lg:px-6">

      <!-- ロゴ -->
      <a href="./index.php">
        <img src="./assets/img/common/logo.png" alt="SAZAREISHI FUND ロゴ" class="w-auto h-[11vw] md:h-[5vw] lg:h-[4vw]">
      </a>

      <!-- ハンバーガーボタン（SPのみ） -->
      <button class="absolute right-5 navi-open flex flex-col justify-between w-6.5 h-6 cursor-pointer md:static lg:hidden
        before:block before:w-full before:h-[3px] before:bg-[#5C5C5C]
        after:block after:w-full after:h-[3px] after:bg-[#5C5C5C]">
        <span class="w-full h-[3px] bg-[#5C5C5C]"></span>
      </button>

      <!-- ✅ PCナビゲーション -->
      <ul class="navigation-pc flex items-center gap-5 font-['myfont',serif] text-sm hidden lg:flex lg:mx-6 lg:p-2.5">
        <li><a href="./index.php" class="scroll-in-page">ホーム</a></li>
        <li><a href="./team.php" class="scroll-in-page">チーム紹介</a></li>
        <li><a href="./about.php" class="scroll-in-page">会社概要</a></li>
        <li><a href="./contact.php" class="scroll-in-page">お問合せ</a></li>
      </ul>

    </div>
  </header>

  <!-- ✅ SPナビゲーション -->
  <nav class="navigation-sp fixed top-0 right-0 z-70 translate-x-full font-['myfont',serif] w-[320px] bg-white shadow-[-4px_0_8px_rgba(0,0,0,0.2)] pt-8.5 transition-transform ease-in-out duration-300 md:w-[400px] md:h-full">
    <button class="navi-close absolute right-3 w-5 h-5 cursor-pointer md:right-10
      before:block before:absolute before:top-1/2 before:left-1/2 before:-translate-1/2 before:rotate-45 before:w-7 before:h-0.5 before:bg-[#5C5C5C]
      after:block after:absolute after:top-1/2 after:left-1/2 after:w-7 after:-translate-1/2 after:-rotate-45 after:h-0.5 after:bg-[#5C5C5C]">
    </button>
    <ul class="flex flex-col items-center pt-12 pl-8 pb-50 gap-5 text-sm md:pt-20 md:pl-0">
      <li class="h-[42px]"><a href="./index.php" class="scroll-in-page">ホーム</a></li>
      <li class="h-[42px]"><a href="./team.php" class="scroll-in-page">チーム紹介</a></li>
      <li class="h-[42px]"><a href="./about.php" class="scroll-in-page">会社概要</a></li>
      <li class="h-[42px]"><a href="./contact.php" class="scroll-in-page">お問合せ</a></li>
    </ul>
  </nav>
</div>

<style>
  /* ✅ 現在ページのアクティブ装飾 */
  .navigation-pc a.active,
  .navigation-sp a.active {
    color: rgba(49, 103, 69, 1);
    position: relative;
  }

  .navigation-pc a.active::after,
  .navigation-sp a.active::after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: -4px;
    transform: translateX(-50%);
    width: 100%;
    height: 1px;
    background-color: rgba(49, 103, 69, 1);
  }
</style>
