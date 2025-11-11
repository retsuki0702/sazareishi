<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会社概要 | SAZAREISHI FUND</title>
    <link rel="stylesheet" href="./dist/output.css" />
    <!-- favicon -->
    <link rel="icon" type="image/png" href="./assets/img/common/favicon.png">
  </head>

  <body>
    <!-- header -->
    <?php include './includes/header.php'; ?>

    <div class="mt-[67px] mb-[43vw] pt-[19vw] font-['myfont',serif] text-sm text-[#484747] w-full flex flex-col items-center">
        <h2 class="text-2xl mb-5">会社概要</h2>
        <table>
            <tr class="flex gap-[42px] h-[35px] items-center">
                <th class="w-[14vw] font-normal text-justify [text-align-last:justify]">社名</th>
                <td class="w-[59vw]">株式会社SAZAREISHI</td>
            </tr>
            <tr class="flex gap-[42px] h-[35px] items-center">
                <th class="w-[14vw] font-normal text-justify [text-align-last:justify]">創業年月日</th>
                <td class="w-[59vw]">平成25年7月3日</td>
            </tr>
            <tr class="flex gap-[42px] h-[35px] items-center">
                <th class="w-[14vw] font-normal text-justify [text-align-last:justify]">代表取締役</th>
                <td class="w-[59vw]">堀江義明</td>
            </tr>
            <tr class="flex gap-[42px] h-[35px] items-center">
                <th class="w-[14vw] font-normal text-justify [text-align-last:justify]">本店所在地</th>
                <td class="w-[59vw]">東京都港区虎ノ門5-11-11-7階</td>
            </tr>
            <tr class="flex gap-[42px] h-[35px] items-center">
                <th class="w-[14vw] font-normal text-justify [text-align-last:justify]">資本金</th>
                <td class="w-[59vw]">990万円</td>
            </tr>
        </table>
        <p class="flex flex-col w-[calc(73vw+40px)] leading-[35px]">
            <span>主たる事業内容</span>
            <span>・有価証券の保有及び管理</span>
            <span>・先物及びオプション等のデリバティブ取引</span>
            <span>・投資事業組合の組成、運営及び管理</span>
        </p>
    </div>
    <!-- footer -->
    <?php include './includes/footer.php'; ?>
  </body>
</html>
