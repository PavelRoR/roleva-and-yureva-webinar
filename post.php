<?php
      //=============================
          // <h2><span>Даты проведения: 9 - 13 января</span></h2>
          //2 Июля, понедельник | в 17:15 мск
          $CH = $CH0 = date('H');
          $CM = $CM0 =date('i');          
          //$CH = 2;
          //$CM = 35;
          $CM2 = (intval(intval($CM) / 15) + 1) * 15;
          if ($CM2 >= 60) {
            $CM2 -= 60;
            $CH += 1;
          }
          if ($CH >= 24)
          {
            $CH -= 24;
          }
          $RAZNICA = abs(($CH0*60 + $CM0) - ($CH*60 + $CM2));
          //echo "$CH0:$CM0 - $RAZNICA";
          $DTS = '';          
            $monthes = array(
                1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
                5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
                9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
            );
            $days = array(
                'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
                'Четверг', 'Пятница', 'Суббота'
            );
            $DTS .= intval(date('d ')) . ' ' . $monthes[(date('n'))]; // . date(' Y, H:i'));
            $DTS .= ", ". $days[(date('w'))];
            $DTS1 = $DTS;             
            // Вывод дня недели
            $DTS .= (' | ');
            $DTS .= ( $DTS2 =  ''.sprintf('%02d', $CH).':'.sprintf('%02d', $CM2).'');
            $NNN = $CH*60 + $CM2;
            //echo "$NNN | ";
            $NNN = intval($NNN / 15);
            if ($NNN > 9) $NNN = $NNN % (9); 
$LST = (explode("\n", file_get_contents('lst.csv')));
$LINK = trim($LST[$NNN]);
$LINK = explode(';',$LINK);
$LINK = $LINK[1];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Master Vision" />
    <meta name="description" content="Ваша ссылка для доступа на вебинар &amp;laquo;Любовь и отношения в Дизайне человека&amp;raqou;" />
    <title>Ваша ссылка для доступа на вебинар "Любовь и отношения в Дизайне человека"</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body id="post">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter35450015 = new Ya.Metrika({
                        id: 35450015,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true
                    });
                } catch (e) {}
            });
            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js";
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");
    </script><noscript>
        <div><img src="https://mc.yandex.ru/watch/35450015" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript><!-- /Yandex.Metrika counter -->
    <div id="main_screen">
        <div class="container">
            <h1 class="post_title">Ваша ссылка для доступа на вебинар:</h1><a class="link_for" href="<?=$LINK;?>" target="_blank"><?=$LINK;?></a>
            <p class="begin_date">Начало в <span><?=$CH;?>:<?php if ($CM2 == 0) {echo "$CM2$CM2";} else {echo "$CM2";} ?></span> - через <span><?=$RAZNICA;?></span> минут</p><img src="img/flower_main.png"
                alt="Цветы" id="last_flower" />
        </div>
    </div>
</body>

</html>