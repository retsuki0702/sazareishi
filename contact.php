<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問合せ | SAZAREISHI FUND</title>
    <link rel="stylesheet" href="./dist/output.css" />
    <link rel="icon" type="image/png" href="./assets/img/common/favicon.png" />
  </head>

  <body>
    <?php include './includes/header.php'; ?>

    <main class="mt-14 mb-[43vw] px-[4vw] pt-[19vw] font-['myfont',serif] text-sm text-[#484747] w-full">
      <h1 class="text-base mb-8">お問合わせ</h1>

      <form action="send_mail.php" method="post" class="space-y-6">
        <!-- 名前 -->
        <div class="flex justify-between">
          <div class="flex flex-col space-y-2 w-[40vw]">
            <label for="first_name">名</label>
            <input type="text" id="first_name" name="first_name" placeholder="First name" class="h-10 pl-3 border text-base" required />
          </div>
          <div class="flex flex-col space-y-2 w-[40vw]">
            <label for="last_name">姓</label>
            <input type="text" id="last_name" name="last_name" placeholder="Last name" class="h-10 pl-3 border text-base" required />
          </div>
        </div>

        <!-- メール -->
        <div class="flex justify-between">
          <div class="flex flex-col space-y-2 w-[40vw]">
            <label for="email">Email<span class="required">*</span></label>
            <input type="email" id="email" name="email" placeholder="Email" class="h-10 pl-3 border text-base" required />
          </div>

          <!-- 電話番号 -->
          <div class="flex flex-col space-y-2 w-[40vw]">
            <label for="phone">電話番号</label>
            <div class="flex border h-10 items-center">
              <!-- ▼ カスタムドロップダウン -->
              <div class="relative w-[40%]">
                <button type="button" id="dropdownBtn" class="flex items-center justify-between w-full h-10 px-3 bg-white">
                  <span class="flex items-center gap-2">
                    <div class="sNA6Tp0"><div class="skGp13x"><svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path fill-rule="evenodd" d="M11.5,19 C11.331,19 11.166,18.985 11,18.975 L11,16.5 C11,16.224 10.776,16 10.5,16 L9.5,16 C9.224,16 9,15.775 9,15.5 L9,12.5 C9,12.366 8.947,12.238 8.852,12.145 L4.804,8.14 C6.04,5.688 8.573,4 11.5,4 C12.76,4 13.946,4.315 14.989,4.866 L15,6.497 C15.001,6.631 14.949,6.757 14.855,6.853 C14.76,6.947 14.634,7 14.5,7 L12.339,7 C12.207,7 12.08,7.053 11.986,7.146 L10.146,8.983 C10.053,9.077 10,9.204 10,9.337 L10,10.5 C10,11.325 10.672,11.999 11.499,12 L15.293,12 L17,13.707 L17,16.582 C15.629,18.064 13.674,19 11.5,19 M4,11.5 C4,10.673 4.14,9.879 4.388,9.135 L8,12.709 L8,15.5 C8,16.327 8.673,17 9.5,17 L10,17 L10,18.849 C6.581,18.152 4,15.122 4,11.5 M19,11.5 C19,12.856 18.632,14.127 18,15.226 L18,13.5 C18,13.367 17.947,13.24 17.854,13.146 L15.854,11.146 C15.76,11.053 15.633,11 15.5,11 L11.5,11 C11.224,11 11,10.775 11,10.5 L11,9.544 L12.546,8 L14.5,8 C14.902,8 15.281,7.843 15.564,7.557 C15.848,7.271 16.003,6.892 16,6.49 L15.993,5.51 C17.814,6.879 19,9.051 19,11.5 M11.5,3 C6.813,3 3,6.813 3,11.5 C3,16.187 6.813,20 11.5,20 C16.187,20 20,16.187 20,11.5 C20,6.813 16.187,3 11.5,3"></path></svg></div><div class="svqg2c5"><svg viewBox="0 0 20 20" fill="currentColor" width="20" height="20"><path fill-rule="evenodd" d="M10.3495235,6.64669148 L10.3527131,6.65069148 L10.3561771,6.64781987 L11.0632839,7.35492665 L11.0597131,7.35769148 L16.3549267,12.6478199 L15.6478199,13.3549267 L10.3527131,8.06469148 L5.06181987,13.3549267 L4.35471309,12.6478199 L9.64571309,7.35769148 L9.64241676,7.35379826 L10.3495235,6.64669148 Z"></path></svg></div></div>
                  </span>
                </button>

                <ul id="dropdownMenu" class="absolute hidden z-10 w-[40vw] bg-white border max-h-48 overflow-y-auto">
                  <li data-code="+81" data-flag="./assets/img/contact/japan.png" class="flex items-center gap-2 px-3 py-2 hover:bg-gray-100 cursor-pointer">
                    <img src="./assets/img/contact/japan.png" class="w-5 h-4 object-cover border" /> 日本 (+81)
                  </li>
                  <li data-code="+1" data-flag="./assets/img/contact/usa.png" class="flex items-center gap-2 px-3 py-2 hover:bg-gray-100 cursor-pointer">
                    <img src="./assets/img/contact/usa.png" class="w-5 h-4 object-cover border" /> アメリカ (+1)
                  </li>
                  <li data-code="+44" data-flag="./assets/img/contact/uk.png" class="flex items-center gap-2 px-3 py-2 hover:bg-gray-100 cursor-pointer">
                    <img src="./assets/img/contact/uk.png" class="w-5 h-4 object-cover border" /> イギリス (+44)
                  </li>
                  <li data-code="+65" data-flag="./assets/img/contact/singapore.png" class="flex items-center gap-2 px-3 py-2 hover:bg-gray-100 cursor-pointer">
                    <img src="./assets/img/contact/singapore.png" class="w-5 h-4 object-cover border" /> シンガポール (+65)
                  </li>
                  <li data-code="+852" data-flag="./assets/img/contact/hongkong.png" class="flex items-center gap-2 px-3 py-2 hover:bg-gray-100 cursor-pointer">
                    <img src="./assets/img/contact/hongkong.png" class="w-5 h-4 object-cover border" /> 香港 (+852)
                  </li>
                  <li data-code="+86" data-flag="./assets/img/contact/china.png" class="flex items-center gap-2 px-3 py-2 hover:bg-gray-100 cursor-pointer">
                    <img src="./assets/img/contact/china.png" class="w-5 h-4 object-cover border" /> 中国 (+86)
                  </li>
                </ul>
                <input type="hidden" name="country_code" id="countryCode" value="+81" />
              </div>

              <input type="tel" id="phone" name="phone" class="w-[60%] h-full pl-3 text-base border-l" placeholder="Phone" />
            </div>
          </div>
        </div>

        <!-- 問い合わせ内容 -->
        <div class="flex flex-col space-y-2 w-full">
          <label for="message">お問合せ内容<span class="required">*</span></label>
          <textarea id="message" name="message" class="h-[19vw] pt-2 pl-3 border text-base" placeholder="Message" required></textarea>
        </div>

        <div class="text-center flex justify-start">
          <button type="submit" class="w-[40vw] h-[8vw] bg-[#316745C4] text-white text-base">送信</button>
        </div>
      </form>
    </main>

    <script>
      const dropdownBtn = document.getElementById("dropdownBtn");
      const dropdownMenu = document.getElementById("dropdownMenu");
      const selectedFlag = document.getElementById("selectedFlag");
      const selectedLabel = document.getElementById("selectedLabel");
      const countryCode = document.getElementById("countryCode");

      dropdownBtn.addEventListener("click", () => {
        dropdownMenu.classList.toggle("hidden");
      });

      dropdownMenu.querySelectorAll("li").forEach(item => {
        item.addEventListener("click", () => {
          selectedFlag.src = item.dataset.flag;
          selectedLabel.textContent = item.dataset.code;
          countryCode.value = item.dataset.code;
          dropdownMenu.classList.add("hidden");
        });
      });

      document.addEventListener("click", e => {
        if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
          dropdownMenu.classList.add("hidden");
        }
      });
    </script>

    <?php include './includes/footer.php'; ?>
  </body>
</html>
