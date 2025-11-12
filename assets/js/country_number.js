const input = document.querySelector("#phone");
const iti = window.intlTelInput(input, {
initialCountry: "jp",
preferredCountries: ["jp", "us", "gb", "sg", "cn"],
nationalMode: false,
formatOnDisplay: true,
utilsScript:
    "https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.19/build/js/utils.js",
});

// ✅ ドロップダウンを電話欄の中に移動
setTimeout(() => {
const countryList = document.querySelector(".iti__country-list");
const wrapper = document.querySelector(".phone-wrapper");
if (countryList && wrapper && !wrapper.contains(countryList)) {
    wrapper.appendChild(countryList);
}
}, 200);

// ✅ 送信時：国番号付き電話番号を hidden で送信
const form = document.querySelector("form");
form.addEventListener("submit", function () {
const fullNumber = iti.getNumber();
const hiddenInput = document.createElement("input");
hiddenInput.type = "hidden";
hiddenInput.name = "full_phone";
hiddenInput.value = fullNumber;
form.appendChild(hiddenInput);
});