<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問合せ | SAZAREISHI FUND</title>
    <link rel="stylesheet" href="./dist/output.css" />
    <!-- favicon -->
    <link rel="icon" type="image/png" href="./assets/img/common/favicon.png">
  </head>

  <body>
    <!-- header -->
    <?php include './includes/header.php'; ?>

    <!-- main -->
    <main class="mt-[67px] mb-[43vw] px-[4vw] pt-[19vw] font-['myfont',serif] text-sm text-[#484747] w-full">
        <h1 class="text-base">お問合わせ</h1>

        <form action="send_mail.php" method="post" class="contact-form">
            <div class="form-row">
            <div class="form-group half">
                <label for="first_name">名</label>
                <input type="text" id="first_name" name="first_name" placeholder="（First Name）" required>
            </div>
            <div class="form-group half">
                <label for="last_name">姓（Last Name）</label>
                <input type="text" id="last_name" name="last_name" placeholder="姓" required>
            </div>
            </div>

            <div class="form-row">
            <div class="form-group half">
                <label for="email">Email<span class="required">*</span></label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group half">
                <label for="phone">電話番号</label>
                <input type="tel" id="phone" name="phone" placeholder="電話番号">
            </div>
            </div>

            <div class="form-row">
            <div class="form-group full">
                <label for="message">お問合せ内容<span class="required">*</span></label>
                <textarea id="message" name="message" rows="6" placeholder="ご自由にお書きください" required></textarea>
            </div>
            </div>

            <div class="form-row center">
            <button type="submit" class="btn-submit">送信する</button>
            </div>
        </form>
    </main>
    
    <!-- footer -->
    <?php include './includes/footer.php'; ?>
  </body>
</html>
