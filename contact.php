<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問合せ | SAZAREISHI FUND</title>
    <link rel="stylesheet" href="./dist/output.css" />
    <link rel="icon" type="image/png" href="./assets/img/common/favicon.png" />

    <!-- 国際電話番号ライブラリ -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.19/build/css/intlTelInput.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.19/build/js/intlTelInput.min.js"></script>

    <style>
      .iti {
        width: 100%;
        position: relative;
      }

      /* 初期アイコンをSVGに変更 */
      .iti__selected-flag {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 45px !important;
        background-color: #fff;
        border-right: 1px solid #ccc;
        position: relative;
      }
      .iti__selected-flag::before {
        content: "";
        display: inline-block;
        width: 18px;
        height: 18px;
        mask: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 20 20'><path fill-rule='evenodd' d='M11.5,19 C11.331,19 11.166,18.985 11,18.975 L11,16.5 C11,16.224 10.776,16 10.5,16 L9.5,16 C9.224,16 9,15.775 9,15.5 L9,12.5 C9,12.366 8.947,12.238 8.852,12.145 L4.804,8.14 C6.04,5.688 8.573,4 11.5,4 C12.76,4 13.946,4.315 14.989,4.866 L15,6.497 C15.001,6.631 14.949,6.757 14.855,6.853 C14.76,6.947 14.634,7 14.5,7 L12.339,7 C12.207,7 12.08,7.053 11.986,7.146 L10.146,8.983 C10.053,9.077 10,9.204 10,9.337 L10,10.5 C10,11.325 10.672,11.999 11.499,12 L15.293,12 L17,13.707 L17,16.582 C15.629,18.064 13.674,19 11.5,19 M4,11.5 C4,10.673 4.14,9.879 4.388,9.135 L8,12.709 L8,15.5 C8,16.327 8.673,17 9.5,17 L10,17 L10,18.849 C6.581,18.152 4,15.122 4,11.5 M19,11.5 C19,12.856 18.632,14.127 18,15.226 L18,13.5 C18,13.367 17.947,13.24 17.854,13.146 L15.854,11.146 C15.76,11.053 15.633,11 15.5,11 L11.5,11 C11.224,11 11,10.775 11,10.5 L11,9.544 L12.546,8 L14.5,8 C14.902,8 15.281,7.843 15.564,7.557 C15.848,7.271 16.003,6.892 16,6.49 L15.993,5.51 C17.814,6.879 19,9.051 19,11.5 M11.5,3 C6.813,3 3,6.813 3,11.5 C3,16.187 6.813,20 11.5,20 C16.187,20 20,16.187 20,11.5 C20,6.813 16.187,3 11.5,3'/></svg>") center/contain no-repeat;
        background-color: #6b7280;
      }

      /* ドロップダウン全体 */
      .iti__country-list {
        width: 370px !important;
        max-height: 270px !important;
        background: #fff !important;
        border: 1px solid #999;
        color: #000;
        overflow-y: auto;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        position: absolute !important;
        top: 110%;
        right: 0;
        z-index: 9999 !important;
        border-radius: 8px;
      }

      /* 検索バー + SVG */
      .iti__search {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 6px 10px;
        background: #f9f9f9;
        border-bottom: 1px solid #ccc;
      }
      .iti__search input {
        border: none;
        outline: none;
        flex: 1;
        font-size: 14px;
        background: transparent;
      }

      .iti__country-name {
        font-family: "Noto Sans JP", sans-serif;
      }
      .iti__country:hover {
        background-color: rgba(0, 0, 0, 0.1);
      }
    </style>
  </head>

  <body>
    <?php include './includes/header.php'; ?>

    <main class="mt-14 mb-[43vw] px-[4vw] pt-[19vw] font-['myfont',serif] text-sm text-[#484747] w-full">
      <h1 class="text-base">お問合わせ</h1>

      <form action="send_mail.php" method="post" class="mt-10 max-w-full space-y-6">
        <div class="form-row flex justify-between">
          <div class="form-group flex flex-col space-y-2 w-[40vw]">
            <label for="first_name">名</label>
            <input type="text" id="first_name" class="h-10 pl-3 border text-base" name="first_name" placeholder="First name" required />
          </div>
          <div class="form-group flex flex-col space-y-2 w-[40vw]">
            <label for="last_name">姓</label>
            <input type="text" id="last_name" class="h-10 pl-3 border text-base" name="last_name" placeholder="Last name" required />
          </div>
        </div>

        <div class="form-row flex justify-between">
          <div class="form-group flex flex-col space-y-2 w-[40vw]">
            <label for="email">Email<span class="required">*</span></label>
            <input type="email" id="email" class="h-10 pl-3 border text-base" name="email" placeholder="Email" required />
          </div>

          <!-- 電話番号欄 -->
          <div class="form-group flex flex-col space-y-2 w-[40vw] relative phone-wrapper">
            <label for="phone">電話番号</label>
            <input type="tel" id="phone" class="h-10 pl-3 border text-base w-full" name="phone" placeholder="phone" />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group flex flex-col space-y-2 w-full">
            <label for="message">お問合せ内容<span class="required">*</span></label>
            <textarea id="message" class="pt-2 pl-3 border text-base" name="message" rows="6" placeholder="Message" required></textarea>
          </div>
        </div>

        <div class="form-row center">
          <button type="submit" class="btn-submit bg-[#316745C4] text-white text-base py-2 px-8 rounded hover:bg-[#274E35] transition">送信</button>
        </div>
      </form>
    </main>

    <?php include './includes/footer.php'; ?>

    <script>
      async function initIntlTel() {
        const input = document.querySelector("#phone");
        const iti = window.intlTelInput(input, {
          initialCountry: "jp",
          preferredCountries: ["jp", "us", "gb", "cn", "kr"],
          utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.19/build/js/utils.js",
        });

        const observer = new MutationObserver(() => {
          const searchWrapper = document.querySelector(".iti__search");
          if (searchWrapper && !searchWrapper.dataset.modified) {
            searchWrapper.dataset.modified = true;

            // SVG アイコンを追加
            const svg = document.createElement("span");
            svg.innerHTML = `
              <svg viewBox="0 0 24 24" fill="currentColor" width="18" height="18" style="color:#666">
                <path fill-rule="evenodd" d="M6.6108,14.3887 C5.5718,13.3497 4.9998,11.9687 4.9998,10.4997 C4.9998,9.0317 5.5718,7.6507 6.6108,6.6117 C7.6498,5.5727 9.0308,4.9997 10.4998,4.9997 C11.9688,4.9997 13.3498,5.5727 14.3888,6.6117 C15.4278,7.6507 15.9998,9.0317 15.9998,10.4997 C15.9998,11.9687 15.4278,13.3497 14.3888,14.3887 C13.3498,15.4277 11.9688,15.9997 10.4998,15.9997 C9.0308,15.9997 7.6498,15.4277 6.6108,14.3887 L6.6108,14.3887 Z M20.0028,19.2957 L15.4328,14.7247 C16.4438,13.5477 16.9998,12.0687 16.9998,10.4997 C16.9998,8.7637 16.3238,7.1317 15.0958,5.9047 C13.8688,4.6767 12.2358,3.9997 10.4998,3.9997 C8.7638,3.9997 7.1318,4.6767 5.9038,5.9047 C4.6758,7.1317 3.9998,8.7637 3.9998,10.4997 C3.9998,12.2367 4.6758,13.8677 5.9038,15.0957 C7.1318,16.3237 8.7638,16.9997 10.4998,16.9997 C12.0688,16.9997 13.5478,16.4437 14.7258,15.4317 L19.2958,20.0027 L20.0028,19.2957 Z"></path>
              </svg>
            `;
            searchWrapper.prepend(svg);

            // placeholder を日本語化
            const inputField = searchWrapper.querySelector("input");
            if (inputField) inputField.placeholder = "検索";
          }
        });
        observer.observe(document.body, { childList: true, subtree: true });
      }

      initIntlTel();
    </script>
  </body>
</html>
