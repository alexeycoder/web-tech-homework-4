<?php

function printDate(?DateTime $date)
{
  if ($date == null) {
    echo '<span class="w3-tag w3-teal w3-round">Настоящее время</span>';
  } else {
    echo $date->format('M, Y'); //IntlDateFormatter::formatObject($date, "MMM, Y", "ru_RU");
  }
}

$jobs = [
  [
    'name' => 'Оформитель в ТЦ \'Котоляндия\'',
    'startDate' => new DateTime('Jan 2015'),
    'endDate' => null,
    'description' => 'Оформлял витрины и углы в манере декаданса: великолепные абстактные пятна,
    в основном утилитарно бледно-жёлтых оттенков, богатые композиции из мышей.
    Успешно применял технику когтевого живописного состаривания мягкой мебели.',
  ],
  [
    'name' => 'Помощник верстальщика в журнале \'Мурзилка\'',
    'startDate' => new DateTime('Mar 2012'),
    'endDate' => new DateTime('Dec 2014'),
    'description' => 'Осуществлял быстрый набор важных текстов на клавиатуре в обеденные перерывы верстальщика.
    Поддерживал рабочий ноутбук дэзайнёра в рабочем состоянии, обогревая его своим телом.
    Всегда вовремя успевал внести нотку бодрости в рабочий процесс путём опрокидывания чашки ароматного
    кофе на клавиатуру.',
  ],
  [
    'name' => 'Графический дэзайнёр в студии Атремия Куклачёва',
    'startDate' => new DateTime('Jan 2010'),
    'endDate' => new DateTime('Mar 2012'),
    'description' => 'Очень опасная работа. Сплошной лорем ипсум, одним словом.',
  ],
];
$skills = [
  [
    'name' => 'Фотожоп',
    'score' => 30,
  ],
  [
    'name' => 'Иллюстратор',
    'score' => 70,
  ],
  [
    'name' => 'Музыкальное мурчание',
    'score' => 40,
  ],
  [
    'name' => 'Смотрение в окно',
    'score' => 65,
  ],
];
$languages = [
  [
    'name' => 'Русский',
    'score' => 90,
  ],
  [
    'name' => 'Англицкий',
    'score' => 50,
  ],
  [
    'name' => 'Говяжий',
    'score' => 100,
  ],
];
$education = [
  [
    'school' => 'Двор',
    'period' => 'Сколько себя помню',
    'degree' => 'Первый Кот на районе!'
  ],
  [
    'school' => 'gb.ru',
    'period' => '2013 — 2015',
    'degree' => 'Мастер Фломастер'
  ],
  [
    'school' => 'Академия Le Cordon Bleu',
    'period' => '2010 — 2013',
    'degree' => 'Бакалавр Сыроедения'
  ],
];

$name = "Вася";
$profession = "Дэзайнёр";
$city = "Москва";
$country = "Россия";
$email = "vasily@mail.cat";
$phone = "+7-495-123-45-67";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>

<body class="w3-light-grey">

  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

      <!-- Left Column -->
      <div class="w3-third">

        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?php echo $name ?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profession ?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city ?>, <?php echo $country ?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email ?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone ?></p>
            <hr>

            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>

            <?php foreach ($skills as $skill) : ?>
              <p><?php echo $skill['name'] ?></p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skill['score'] ?>%"><?php echo $skill['score'] ?>%</div>
              </div>
            <?php endforeach;
            unset($skill) ?>

            <br>

            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>

            <?php foreach ($languages as $lang) : ?>
              <p><?php echo $lang['name'] ?></p>
              <div class="w3-light-grey w3-round-xlarge">
                <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $lang['score'] ?>%"></div>
              </div>
            <?php endforeach;
            unset($lang) ?>

            <br>
          </div>
        </div><br>

        <!-- End Left Column -->
      </div>

      <!-- Right Column -->
      <div class="w3-twothird">

        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
          <?php foreach ($jobs as $job) : ?>
            <div class="w3-container">
              <h5 class="w3-opacity"><b><?php echo $job['name'] ?></b></h5>
              <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php printDate($job['startDate']) ?> &mdash; <?php printDate($job['endDate']) ?></h6>
              <p><?php echo $job['description'] ?></p>
              <hr>
            </div>
          <?php endforeach;
          unset($job) ?>
        </div>

        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>

          <?php foreach ($education as $eduItem) : ?>
            <div class="w3-container">
              <h5 class="w3-opacity"><b><?php echo $eduItem['school'] ?></b></h5>
              <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $eduItem['period'] ?></h6>
              <p><?php echo $eduItem['degree'] ?></p>
              <hr>
            </div>
          <?php endforeach;
          unset($eduItem) ?>
        </div>

        <!-- End Right Column -->
      </div>

      <!-- End Grid -->
    </div>

    <!-- End Page Container -->
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>

</body>

</html>