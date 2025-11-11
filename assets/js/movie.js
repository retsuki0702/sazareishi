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