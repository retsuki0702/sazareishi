<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>チーム紹介 | SAZAREISHI FUND</title>
    <link rel="stylesheet" href="./dist/output.css" />
    <!-- favicon -->
    <link rel="icon" type="image/png" href="./assets/img/common/favicon.png">
  </head>

  <body>
    <!-- header -->
    <?php include './includes/header.php'; ?>

    <main class="mt-[70px] pt-16 px-[4vw] mb-[50vw] font-['myfont',serif] h-auto bg-[url(../assets/img/common/bg.png)] bg-cover md:mb-[18vw] lg:mb-[16vw]">
      <h1 class="mb-[27vw] text-xl font-black md:mb-[18vw] md:text-4xl lg:mb-[12vw]">OUR TEAM</h1>

      <?php
        // メンバーデータを読み込み
        include __DIR__ . '/includes/members.php';
      ?>
      <div class="flex mb-[90px] flex-col w-full lg:mb-[3vw]">
        <?php foreach ($members as $member): ?>
            <div class="mx-[1vw] mb-[27vw] md:mx-[18vw] md:mb-[20vw] lg:mb-[12vw]" id="<?= ($member['id']) ?>">
                <div class="grid grid-cols-2 gap-18 md:flex md:gap-8">
                    <img src="./assets/img/team/<?= htmlspecialchars($member['team_img'], ENT_QUOTES) ?>" 
                        alt="<?= htmlspecialchars($member['jp_name'], ENT_QUOTES) ?>" 
                        class="w-[50vw] max-w-[400px] mb-[3vw] md:w-[18vw]">
                    <div class="flex flex-col items-start">
                        <p class="text-[18px] text-base text-black font-['myfont2',sans-serif] md:mb-[1vw]"><?= htmlspecialchars($member['post']) ?></p>
                        <p class="mb-[1vw] text-[6vw] text-[#316745] font-bold md:mb-0 md:text-[3vw]"><?= htmlspecialchars($member['jp_name']) ?></p>
                        <p class="text-[18px] text-base text-black mb-[4vw] font-['myfont2',sans-serif]"><?= htmlspecialchars($member['en_name']) ?></p>
                    </div>
                </div>
                <p class="text-[5vw] text-center text-[#484747] mb-[4vw] leading-[9vw] md:text-[4vw] md:text-left md:leading-[6vw] lg:mb-[3vw] lg:text-[3vw] lg:leading-[4vw]"><?= ($member['catchphrase']) ?></p>
                <p class="text-[4vw] text-[#484747] mb-[4vw] md:text-[2vw] md:leading-[4vw] lg:text-[22px] lg:leading-11"><?= htmlspecialchars($member['main']) ?></p>
                <p class="text-[4vw] text-[#484747] md:text-[2vw] md:leading-[4vw] lg:text-[22px] lg:leading-11">＜プロフィール＞<br><?= htmlspecialchars($member['profile']) ?></p>
            </div>
        <?php endforeach; ?>
      </div>
      <h2 class="mb-8 text-[23px] text-center font-['myfont',serif] leading-6 md:text-left md:mx-[18vw] md:text-[4vw] md:leading-[4vw] lg:mb-20 lg:pl-20 lg:text-[2vw] lg:leading-[2vw]">私たちが、<br>SAZAREISHI FUNDです。</h2>



        <!-- movie -->
        <div class="relative w-[91vw] mx-auto mb-39 md:w-auto md:mx-[18vw] lg:mx-[21vw]">
        <!-- 動画（muted を付けておくと script 発火の再生ブロックが減る） -->
        <video id="customVideo" src="./assets/video/file.mp4" poster="./assets/img/top/thumbnail.png" playsinline muted preload="metadata" class="w-full h-auto object-cover">
        </video>

        <!-- ▶ 再生ボタン（停止中のみ表示） -->
        <button id="playBtn" class="absolute inset-0 z-30 flex items-center justify-center transition-all duration-300" aria-label="再生">
            <svg width="90" height="90" viewBox="0 0 90 90" xmlns="http://www.w3.org/2000/svg" class="transition-transform duration-300 hover:scale-110 pointer-events-none">
            <path d="M41 10c-17.121 0-31 13.879-31 31 0 17.121 13.879 31 31 31 17.121 0 31-13.879 31-31 0-17.121-13.879-31-31-31zm2.008 35.268l-7.531 4.268V32.465l7.531 4.268L50.539 41l-7.531 4.268z" fill="rgba(0,0,0,0.6)" data-color="1"></path>
            </svg>
        </button>

        <!-- ■■ 停止アイコン（再生中にホバーしたときのみ表示） -->
        <button id="pauseBtn" class="absolute inset-0 z-30 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-000" aria-label="停止">
            <div class="p-6 flex space-x-3 pointer-events-none">
            <div class="w-2 h-8 bg-[rgba(0,0,0,0.6)]"></div>
            <div class="w-2 h-8 bg-[rgba(0,0,0,0.6)]"></div>
            </div>
        </button>

        <!-- ミュートボタン（下部中央。ホバーでフェードイン） -->
        <button id="muteBtn" class="absolute bottom-6 left-1/2 -translate-x-1/2 z-30 opacity-0 transition-opacity duration-200" aria-label="ミュート切替" type="button">
            <!-- ミュートOFF時（音あり） -->
            <svg id="soundOnIcon" class="w-10 h-10" viewBox="0 0 32 32" fill="white">
            <defs>
                    <filter id="4e358e3c-c4cc-411c-8da6-747bbbb99bfa_audioOn-comp-mcclvmr17" height="200%" width="200%" y="-50%" x="-50%">
                        <feOffset result="out-offset" in="SourceAlpha"></feOffset>
                        <feGaussianBlur result="out-blur" in="out-offset" stdDeviation="2"></feGaussianBlur>
                        <feColorMatrix result="out-matrix" in="out-blur" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.4 0"></feColorMatrix>
                        <feMerge>
                            <feMergeNode in="out-matrix"></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                    </filter>
                </defs>
            <path filter="url(#4e358e3c-c4cc-411c-8da6-747bbbb99bfa_audioOn-comp-mcclvmr17)" d="M23 6.616a.625.625 0 0 0-.727-.609l-10.241 1.54a.62.62 0 0 0-.535.609l-.006 10.016c0 .892-.276 1.319-1.971 1.319C7.646 19.49 7 20.631 7 21.748 7 22.655 7.507 24 9.516 24c2.249 0 3.236-1.44 3.236-2.713l.006-9.719 8.98-1.454v6.87c-.045.763-.401 1.13-1.973 1.13-1.874 0-2.52 1.141-2.52 2.258 0 .907.507 2.252 2.516 2.252 2.249 0 3.236-1.44 3.236-2.713L23 6.616z"></path>
            </svg>

            <!-- ミュートON時（音符アイコン） -->
            <svg id="soundOffIcon" class="w-10 h-10 hidden" viewBox="0 0 32 32" fill="white">
            <defs>
                <filter id="b0f9f707-af61-4336-bcea-c2fee482e562_audioOff-comp-mcclvmr17">
                <feColorMatrix in="SourceGraphic" type="matrix"
                    values="1 0 0 0 0
                            0 1 0 0 0
                            0 0 1 0 0
                            0 0 0 1 0" />
                </filter>
            </defs>
            <path d="M27.39 17.535a.478.478 0 0 1 .306.615v.001a.51.51 0 0 1-.641.292L6.074 12.471a.478.478 0 0 1-.325-.605.505.505 0 0 1 .661-.302l20.98 5.971zm-6.211.375c1.911-.377 1.812 2.001 1.813 2.001 0 1.273-.986 2.713-3.235 2.713-2.009 0-2.515-1.345-2.515-2.252 0-1.117.646-2.258 2.519-2.258.671-.001 1.095-.141 1.418-.204zm-8.427-1.643v.013h.001l-.005 5.007c0 1.273-.985 2.713-3.233 2.713C7.506 24 7 22.655 7 21.748c0-1.117.646-2.258 2.519-2.258 1.696 0 1.972-.427 1.972-1.319l.001-1.934a.513.513 0 0 1 .512-.477h.23c.285 0 .518.228.518.507zm-.537-4.642a.666.666 0 0 1-.506-.141.61.61 0 0 1-.22-.468l.006-2.86c0-.304.227-.562.535-.609l10.238-1.54a.629.629 0 0 1 .726.609L23 13.591c0 .013-.006.024-.007.036a.49.49 0 0 1-.094.248.516.516 0 0 1-.416.222h-.229a.51.51 0 0 1-.517-.505l-.004-3.479-9.518 1.512z"></path>
            </svg>
        </button>

        </div>
        <script src="./assets/js/movie.js"></script>
    </main>
    <!-- footer -->
    <?php include './includes/footer.php'; ?>
  </body>
</html>
