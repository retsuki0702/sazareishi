<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問合せ | SAZAREISHI FUND</title>
    <link rel="stylesheet" href="./dist/output.css" />
    <link rel="icon" type="image/png" href="./assets/img/common/favicon.png" />

    <style>
      /* ✅ ドロップダウン全体のスタイル */
      #country-dropdown {
        width: 370px;
        max-height: 270px;
        background: #fff;
        border: 1px solid #999;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        overflow-y: auto;
        border-radius: 10px;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 9999;
      }

      /* ✅ スクロールバーも調整 */
      #country-dropdown::-webkit-scrollbar {
        width: 8px;
      }
      #country-dropdown::-webkit-scrollbar-thumb {
        background: rgba(0, 0, 0, 0.2);
        border-radius: 4px;
      }
    </style>
  </head>

  <body>
    <?php include './includes/header.php'; ?>

    <main class="mt-14 mb-[43vw] px-[4vw] pt-[19vw] font-['myfont',serif] text-sm text-[#484747] w-full">
      <h1 class="text-base">お問合わせ</h1>

      <form action="send_mail.php" method="post" class="mt-10 max-w-full space-y-6">

        <!-- 名前 -->
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

        <!-- Email + 電話 -->
        <div class="form-row flex justify-between">
          <div class="form-group flex flex-col space-y-2 w-[40vw]">
            <label for="email">Email<span class="required">*</span></label>
            <input type="email" id="email" class="h-10 pl-3 border text-base" name="email" placeholder="Email" required />
          </div>

          <!-- ✅ 電話番号 + 国選択 -->
          <div class="form-group flex flex-col space-y-2 w-[40vw] relative">
            <label for="phone">電話番号</label>
            <div class="relative inline-block">
              <button id="selected-flag" class="flex items-center justify-center w-10 h-10 border rounded">
                <!-- 初期表示アイコン -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-gray-500">
                  <path fill-rule="evenodd" d="M11.5,19 C11.331,19 11.166,18.985 11,18.975 L11,16.5 C11,16.224 10.776,16 10.5,16 L9.5,16 C9.224,16 9,15.775 9,15.5 L9,12.5 C9,12.366 8.947,12.238 8.852,12.145 L4.804,8.14 C6.04,5.688 8.573,4 11.5,4 C12.76,4 13.946,4.315 14.989,4.866 L15,6.497 C15.001,6.631 14.949,6.757 14.855,6.853 C14.76,6.947 14.634,7 14.5,7 L12.339,7 C12.207,7 12.08,7.053 11.986,7.146 L10.146,8.983 C10.053,9.077 10,9.204 10,9.337 L10,10.5 C10,11.325 10.672,11.999 11.499,12 L15.293,12 L17,13.707 L17,16.582 C15.629,18.064 13.674,19 11.5,19 M4,11.5 C4,10.673 4.14,9.879 4.388,9.135 L8,12.709 L8,15.5 C8,16.327 8.673,17 9.5,17 L10,17 L10,18.849 C6.581,18.152 4,15.122 4,11.5 M19,11.5 C19,12.856 18.632,14.127 18,15.226 L18,13.5 C18,13.367 17.947,13.24 17.854,13.146 L15.854,11.146 C15.76,11.053 15.633,11 15.5,11 L11.5,11 C11.224,11 11,10.775 11,10.5 L11,9.544 L12.546,8 L14.5,8 C14.902,8 15.281,7.843 15.564,7.557 C15.848,7.271 16.003,6.892 16,6.49 L15.993,5.51 C17.814,6.879 19,9.051 19,11.5 M11.5,3 C6.813,3 3,6.813 3,11.5 C3,16.187 6.813,20 11.5,20 C16.187,20 20,16.187 20,11.5 C20,6.813 16.187,3 11.5,3"></path>
                </svg>
              </button>
              <input type="text" id="country-search" placeholder="国名を検索" class="w-full p-2 border border-gray-300 rounded mb-2"/>
              <div id="country-dropdown" class="absolute top-12 left-0 z-50 hidden"></div>
            </div>

            <input type="tel" id="phone" class="h-10 pl-3 border text-base ml-2" placeholder="電話番号">
            <script src="./assets/js/countries.js"></script>
          </div>
        </div>

        <!-- メッセージ -->
        <div class="form-row">
          <div class="form-group full flex flex-col space-y-2 w-full">
            <label for="message">お問合せ内容<span class="required">*</span></label>
            <textarea id="message" class="pt-2 pl-3 border text-base" name="message" rows="6" placeholder="Message" required></textarea>
          </div>
        </div>

        <div class="form-row center">
          <button type="submit" class="bg-[#316745C4] text-white text-base py-2 px-8 rounded hover:bg-[#274E35] transition">
            送信
          </button>
        </div>
      </form>
    </main>

    <?php include './includes/footer.php'; ?>

    <script>

      function selectCountry(c) {
        document.getElementById("selected-flag").src = c.flags.svg;
        document.getElementById("selected-flag").classList.remove("hidden");
        document.getElementById("selected-country").textContent = c.name.common;
        document.getElementById("selected-dial").textContent = `${c.idd.root}${c.idd.suffixes?.[0] || ""}`;
        document.getElementById("country-dropdown").classList.add("hidden");
      }

      document.getElementById("selected-flag").onclick = () => {
        document.getElementById("country-dropdown").classList.toggle("hidden");
      };

      document.getElementById("country-search").oninput = e => {
        const term = e.target.value.toLowerCase();
        document.querySelectorAll("#country-list li").forEach(li => {
          li.style.display = li.textContent.toLowerCase().includes(term) ? "" : "none";
        });
      };

    </script>
  </body>
</html>
