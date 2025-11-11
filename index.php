<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホーム | SAZAREISHI FUND | 金融庁承認 | 日本株ヘッジファンド</title>
    <link rel="stylesheet" href="./dist/output.css" />
    <!-- favicon -->
    <link rel="icon" type="image/png" href="./assets/img/common/favicon.png">
  </head>

  <body>
    <!-- header -->
    <?php include './includes/header.php'; ?>

     <main>
      <!-- kv -->
      <div class="flex justify-end font-['myfont',serif] pt-46 pb-65 mr-[12vw]">
        <h1 class="order-3 mt-[2vw] text-[6.5vw] leading-10 [writing-mode:vertical-rl]">日本人を、</h1>
        <h1 class="order-2 text-[10.5vw] leading-16 [writing-mode:vertical-rl]">「日本株」</h1>
        <h1 class="text-[6.5vw] leading-10 [writing-mode:vertical-rl] mt-[19vw] mr-[1vw]">で強くする。</h1>
      </div>

      <!-- main_contents_1 -->
      <div class="px-[4vw] pb-[4vw] mb-[70vw] font-['myfont',serif] h-auto bg-[url(../assets/img/common/bg.png)] bg-cover">
        <h1 class="mb-[6vw] text-[5vw] font-black">VISION</h1>
        <div class="text-[#316745] text-xl mb-7">
          <p class="pb-2.5">日本人の資産を、</p>
          <p class="pb-2.5">​日本株で増やす使命がある。</p>
        </div>
        <div class="mb-18 text-[3.5vw] text-[#484747] leading-[6.5vw]">
          <p>世の中には、無数の金融商品が存在します。</p>
          <p>世界市場を牽引するテック企業の株式もあれば、</p>
          <p>成長が見込まれる新興国への投資もある。</p>
          <p>不動産や債券、金先物や外貨預金という選択肢もある。</p>
          <p>しかし、愛や誇りを育んでくれる金融商品は、</p>
          <p class="pb-3.5 mb-[8vw]">さほどありません。</p>

          <p>日本を代表する１０社があります。</p>
          <p>少子高齢化、労働力不足、生産性の伸び悩み。</p>
          <p>​長らく停滞を余儀なくされている日本経済の中にあって、安定的に成長を続ける、厳選の１０社です。</p>
        </div>
        <div class="text-[#316745] text-xl mb-7">
          <p class="pb-2.5">​日本上場株式１００％</p>
          <p class="pb-2.5">オプションを組み合わせた、</p>
          <p class="pb-2.5">デリバティブ戦略で</p>
          <p class="pb-2.5">唯一無二の成果へ。</p>
        </div>
        <div class="mb-18 text-[3.5vw] text-[#484747] leading-[6.5vw]">
          <p>私たちSAZAREISHI FUNDは、この１０社を核にする</p>
          <p>日本上場株式１００％のファンドです。</p>
          <p>オプションを組み合わせ、デリバティブ戦略を駆使しながら、</p>
          <p>唯一無二の革新性と堅実性を両立する。</p>
          <p>私たちはここから、日本企業の真のポテンシャルを世界に示し、千代に八千代に、継続的な収益化を目指します。</p>
          <p>この国を愛する、限られた投資家のためだけに。</p>
          <p>​日本で生まれた投資プラットフォームです。</p>
        </div>
        <h1 class="mb-[6vw] text-[5vw] font-black">VALUE</h1>
        <div class="text-[#316745] text-xl mb-7">
          <p class="pb-2.5">堅く、強く、新しく。</p>
          <p class="pb-2.5">​投資家を守り抜くことこそ、</p>
          <p class="pb-2.5">私たちの責任です。</p>
        </div>
        <div class="text-[3.5vw] text-[#484747] leading-[6.5vw]">
          <p>強い競争力で、日本のデリバティブ市場を活性化させる。</p>
          <p>そして長い年月をかけて、投資家の皆様に安定的な収益をもたらす。</p>
          <p>そのためにSAZAREISHI FUNDでは、国際水準の透明性を確保し、厳格なリスク管理を実施しています。</p>
          <p>​革新は、堅牢な土台があって初めて生まれる。市場の変動に左右されないこともまた、私たちの責任です。</p>
        </div>
      </div>

      <!-- main_contents_2 -->
      <div class="px-[4vw] pb-[40vw] font-['myfont',serif] h-auto bg-[url(../assets/img/common/bg.png)] bg-cover">
        <h1 class="mb-[6vw] text-xl font-black">OUR TEAM</h1>
        <div class="text-[#316745] text-[5vw] mb-7">
          <p class="pb-2.5">日本人を、強くする。</p>
        </div>
        <div class="mb-18 text-[3.5vw] text-[#484747] leading-[6.5vw]">
          <p>この国を、この国で暮らす人々を、強く豊かにする。</p>
          <p>そのために各領域で第一線を走る専門家が集結しました。</p>
          <p>私たちが、SAZAREISHI FUNDです。</p>
        </div>
        <img src="./assets/img/top/member.png" class="w-[75vw] mx-auto">
        <!-- members -->
        <?php
          // メンバーデータを読み込み
          include __DIR__ . '/includes/members.php';
        ?>

        <div class="flex mt-[16vw] mb-[90px] flex-col items-center space-y-[10vw]">
          <?php foreach ($members as $member): ?>
            <div class="flex flex-col items-start text-center">
              <img src="./assets/img/top/<?= htmlspecialchars($member['img'], ENT_QUOTES) ?>" 
                  alt="<?= htmlspecialchars($member['jp_name'], ENT_QUOTES) ?>" 
                  class="w-[56vw] max-w-[400px] mb-[3vw]">
              <p class="text-[22px] text-black mb-5"><?= htmlspecialchars($member['jp_name']) ?></p>
              <p class="text-base text-black mb-[4vw] font-['myfont2',sans-serif]"><?= htmlspecialchars($member['en_name']) ?></p>
              <div class="w-full h-0.5 bg-[#47885e] mb-[4vw]"></div>
              <p class="mb-[1vw] text-base text-black font-['myfont2',sans-serif]"><?= htmlspecialchars($member['post']) ?></p>
              <div class="flex justify-end w-full">
                <a href="team.php#<?= ($member['id']) ?>"
                  class="w-19 h-7.5 bg-[#6E6E6E] text-xs text-white leading-7.5 rounded-full font-['myfont2',sans-serif] text-center">
                  MORE
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <!-- movie -->
        <div class="relative w-[91vw] mx-auto mb-39">
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

        <script>
        document.addEventListener('DOMContentLoaded', () => {
          const video = document.getElementById('customVideo');
          const playBtn = document.getElementById('playBtn');
          const pauseBtn = document.getElementById('pauseBtn');
          const muteBtn = document.getElementById('muteBtn');
          const soundOn = document.getElementById('soundOnIcon');
          const soundOff = document.getElementById('soundOffIcon');

          let isPlaying = false;
          let wasPlayingBeforeHide = false;

          // helper: try play and report promise error
          async function tryPlay() {
            try {
              await video.play();
              isPlaying = !video.paused && !video.ended;
            } catch (err) {
              console.warn('video.play() failed:', err);
              isPlaying = false;
            }
          }

          // ▶ 再生（停止中に表示）
          playBtn.addEventListener('click', async (e) => {
            e.preventDefault();
            await tryPlay();
            if (isPlaying) {
              // hide play button visually and keep it clickable area disabled
              playBtn.classList.add('opacity-0');
              playBtn.style.pointerEvents = 'none';
            }
          });

          // ■■ 停止（再生中のホバーで表示。実行はこのボタンで）
          pauseBtn.addEventListener('click', (e) => {
            e.preventDefault();
            video.pause();
            isPlaying = false;
            // show play again
            playBtn.classList.remove('opacity-0');
            playBtn.style.pointerEvents = 'auto';
            pauseBtn.classList.add('opacity-0');
            pauseBtn.style.pointerEvents = 'none';
          });

          // ホバー挙動：video 要素にmouseenter/leave（動画内ホバーでミュート＆pause表示）
          // note: mouseenter on video element is OK; also support parent container if you prefer
          const container = video.parentElement;

          container.addEventListener('mouseenter', () => {
            // show mute always on hover
            muteBtn.classList.remove('opacity-0');
            // if playing, reveal pause button (and enable its pointer events)
            if (isPlaying) {
              pauseBtn.classList.remove('opacity-0');
              pauseBtn.style.pointerEvents = 'auto';
            }
          });

          container.addEventListener('mouseleave', () => {
            muteBtn.classList.add('opacity-0');
            if (isPlaying) {
              pauseBtn.classList.add('opacity-0');
              pauseBtn.style.pointerEvents = 'none';
            }
          });

          // ミュート切替
          muteBtn.addEventListener('click', (e) => {
            e.preventDefault();
            video.muted = !video.muted;
            soundOn.classList.toggle('hidden', video.muted);
            soundOff.classList.toggle('hidden', !video.muted);
          });

          // visibilitychange: タブ離脱時に一時停止、復帰時は離脱前に再生していたら再生を試みる
          document.addEventListener('visibilitychange', async () => {
            if (document.hidden) {
              // record state and pause
              wasPlayingBeforeHide = !video.paused && !video.ended;
              if (wasPlayingBeforeHide) {
                video.pause();
                isPlaying = false;
                playBtn.classList.remove('opacity-0');
                playBtn.style.pointerEvents = 'auto';
                pauseBtn.classList.add('opacity-0');
                pauseBtn.style.pointerEvents = 'none';
              }
            } else {
              // returned to tab
              if (wasPlayingBeforeHide) {
                await tryPlay(); // try to resume
                if (isPlaying) {
                  playBtn.classList.add('opacity-0');
                  playBtn.style.pointerEvents = 'none';
                  // keep pauseBtn hidden until hover
                  pauseBtn.classList.add('opacity-0');
                  pauseBtn.style.pointerEvents = 'none';
                }
                wasPlayingBeforeHide = false;
              }
            }
          });

          // 再生/一時停止の実際のイベントで isPlaying を同期
          video.addEventListener('play', () => {
            isPlaying = true;
            // hide play overlay
            playBtn.classList.add('opacity-0');
            playBtn.style.pointerEvents = 'none';
          });
          video.addEventListener('pause', () => {
            isPlaying = false;
            // show play overlay
            playBtn.classList.remove('opacity-0');
            playBtn.style.pointerEvents = 'auto';
            pauseBtn.classList.add('opacity-0');
            pauseBtn.style.pointerEvents = 'none';
          });

          // safety: initialize pointer-events state
          pauseBtn.style.pointerEvents = 'none';
        });
        </script>
        <!-- RECRUIT -->
        <h1 class="mb-[6vw] text-xl font-black">RECRUIT</h1>
        <div class="text-[#316745] text-[5vw] mb-7">
          <p class="pb-2.5">誇りある仕事で、</p>
          <p class="pb-2.5">実りある将来を描く。</p>
          <p class="pb-2.5">​私たちは仲間をつねに</p>
          <p class="pb-2.5">募集しています。</p>
        </div>
        <div class="mb-10 text-[3.5vw] text-[#484747] leading-[6.5vw]">
          <p>最先端の戦略で、緻密に大胆に日本株を運用する。</p>
          <p>そのための専門家をSAZAREISHI FUNDでは常に募集しています。</p>
          <p>​まずはお気軽に、お問合せください。</p>
        </div>
        <div class="flex w-30 h-11.5 justify-center items-center bg-black rounded-md font-['myfont2',sans-serif]">
          <a href="contact.php" class="text-sm text-white">RECRUIT</a>
        </div>
      </div>
     </main>


    <!-- footer -->
    <?php include './includes/footer.php'; ?>
  </body>
</html>
