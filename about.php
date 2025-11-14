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
    <!-- main -->
    <main class="relative mt-[67px] mb-[43vw] pt-[19vw] font-['myfont',serif] text-sm text-[#484747] w-full md:mt-0 md:mb-[25vw] md:pt-[14vw] md:text-base lg:grid lg:grid-cols-2 lg:mt-0 lg:mb-0 lg:pt-[13vw]">
        <div class="flex flex-col items-center lg:order-2">
            <h1 class="text-2xl mb-5 md:mb-4 lg:mt-12 lg:mb-24 lg:text-4xl">会社概要</h1>
            <table>
                <tr class="flex gap-[42px] h-[35px] items-center md:h-[40px]">
                    <th class="w-[14vw] min-w-[70px] font-normal text-justify [text-align-last:justify] md:w-[8vw] md:min-w-[80px] lg:w-[6vw]">社名</th>
                    <td class="w-[59vw] lg:w-[30vw] lg:w-[30vw]">株式会社SAZAREISHI</td>
                </tr>
                <tr class="flex gap-[42px] h-[35px] items-center md:h-[40px]">
                    <th class="w-[14vw] min-w-[70px] font-normal text-justify [text-align-last:justify] md:w-[8vw] md:min-w-[80px] lg:w-[6vw]">創業年月日</th>
                    <td class="w-[59vw] lg:w-[30vw]">平成25年7月3日</td>
                </tr>
                <tr class="flex gap-[42px] h-[35px] items-center md:h-[40px]">
                    <th class="w-[14vw] min-w-[70px] font-normal text-justify [text-align-last:justify] md:w-[8vw] md:min-w-[80px] lg:w-[6vw]">代表取締役</th>
                    <td class="w-[59vw] lg:w-[30vw]">堀江義明</td>
                </tr>
                <tr class="flex gap-[42px] h-[35px] items-center md:h-[40px]">
                    <th class="w-[14vw] min-w-[70px] font-normal text-justify [text-align-last:justify] md:w-[8vw] md:min-w-[80px] lg:w-[6vw]">本店所在地</th>
                    <td class="w-[59vw] lg:w-[30vw]">東京都港区虎ノ門5-11-11-7階</td>
                </tr>
                <tr class="flex gap-[42px] h-[35px] items-center md:h-[40px]">
                    <th class="w-[14vw] min-w-[70px] font-normal text-justify [text-align-last:justify] md:w-[8vw] md:min-w-[80px] lg:w-[6vw]">資本金</th>
                    <td class="w-[59vw] lg:w-[30vw]">990万円</td>
                </tr>
            </table>
            <p class="flex flex-col w-[calc(73vw+40px)] leading-[35px] md:w-[calc(67vw+40px)] md:leading-[40px] lg:w-[calc(100%-11vw)]">
                <span>主たる事業内容</span>
                <span>・有価証券の保有及び管理</span>
                <span>・先物及びオプション等のデリバティブ取引</span>
                <span>・投資事業組合の組成、運営及び管理</span>
            </p>
        </div>
        <img src="./assets/img/common/bg.png" class="absolute h-[100vh] w-[50vw] top-0 left-0 object-cover z-[-5] overflow-hidden max-md:hidden lg:static lg:order-1">
    </main>
    <!-- footer -->
    <?php include './includes/footer.php'; ?>
  </body>
</html>
