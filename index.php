<?
$data = require_once('data.php');
$startData = $data ['about'];
$massData = $data ['skills'];
$postData = $data ['specialization'];
$endData = $data ['contacts'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Мое резюме</title>
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/scripts.js" defer></script>
  <script src="js/slider.js" defer></script>

</head>
<body>
<!--   
  <script language="JavaScript">
    let name=prompt("Введите ваше имя");
    alert ("Привет, " + name + "!");
  </script> -->

  <button id="toggle-theme-btn"><img src="images/moon.png" alt="dark theme picture" 
   id="toggle-theme-image"></button>

   <div class="slider">
    <img src="images/332.jpg" class="block" alt="Первое фото соискателя">
    <img src="images/403.jpg" alt="Ещё фото соискателя" >
    <img src="images/107.jpg" alt="Ещё фото соискателя">
    <img src="images/694.jpg" alt="Ещё фото соискателя">
    <img src="images/361.jpg" alt="Последнее одно фото соискателя">
  </div>
  <button class="btnSlide">Следующее изображение</button>
  
    <div class="container">
    <div class="header">
      <h1>Страница моего резюме</h1>
    </div>
    <div class="menu">
      <ul>
        <li><a href="#aboutme">Обо мне</a></li>
        <li><a href="#myskills">Мои навыки</a></li>
        <li><a href="#mypost">Желаемые условия</a></li>
        <li><a href="#mycontact">Мои контакты</a></li>
      </ul>
    </div>

    <div class="content">
      <hr>
      <p id="aboutme">
        <h2> Елизавета Алексеева</h2>
        <h3>Россия, г. Вырица, 21 год, пол:женский</h3>
        <a href="#mycontact">Контактный номер и почта для связи</a>
        <p><?=$startData['edu']?></p>
        <p><?=$startData['info']?></p>
        <p><?=$startData['active']?></p>
      </p>
      <hr>
      <h2 id="myskills"> Ключевые навыки:</h2>
      <? foreach($massData as $value) {?>
      <ol>
        <li><?=$value['1']?></li>
        <li><?=$value['2']?></li>
        <li><?=$value['3']?></li>
        <li><?=$value['4']?></li>
        <li><?=$value['5']?></li>
        <li><?=$value['6']?></li>
        <li><?=$value['7']?></li>
        <li><?=$value['8']?></li>
      </ol>
      <? } ?> 
        </p>
          <hr>
          <h2 id="mypost"> Желаемые условия работы:</h2> 
          <p>
            <p><?=$postData['specializations']?></p>
            <p><?=$postData['post']?></p>
            <p><?=$postData['work schedule']?></p>
          </p>
          <hr>
          <h2 id="mycontact"> Контактные данные:</h2> 
          <p class="leftstr"><?=$endData['tel']?></p> 
          <p class="rightstr"><?=$endData['email']?></p>
          <p></p>
    </div>
    
    
    </div>
    <div class="footer">
      <a href="gb.ru"><p class="leftstr">Все права защищены(c)</a>
      <a href="#top"><p class="rightstr">Перейти вверх страницы</a>
  </div>
</body>
</html>