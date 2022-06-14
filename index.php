<?
$data = require_once('data.php');
$startData = $data ['about'];
$massData = $data ['skills'];
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

</head>
<body>
  
  <script language="JavaScript">
    let name=prompt("Введите ваше имя");
    alert ("Привет, " + name + "!");
  </script>

  <button id="toggle-theme-btn"><img src="images/moon.png" alt="dark theme picture" 
   id="toggle-theme-image"></button>

   <div class="slider">
    <img src="images/nature1.jpeg" alt="Фото соискателя" class="block">
    <img src="images/nature2.jpg" alt="Ещё одно фото соискателя">
  </div>
  <button class="btnRight">Right</button>
<script src="js/slides.js" class="btnRight" defer></script>
  
    <div class="container">
    <div class="header">
      <h1>Страница моего резюме</h1>
    </div>
    <div class="menu">
      <ul>
        <li><a href="#aboutme">Обо мне</a></li>
        <li><a href="#myskills">Мои навыки</a></li>
        <li><a href="#mypost">Желаемая должность</a></li>
        <li><a href="#mycontact">Мои контакты</a></li>
      </ul>
    </div>
    <div class="photo">
      <a href="#"><img  src="images/548.jpg" alt="best photo"></a>   
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
          <h2 id="mypost"> Желаемая должность:</h2> 
          <p>
            Специализации:
            <p>Копирайтер, редактор, корректор</p>
            <p>Занятость: частичная занятость</p>
            <p>График работы: удаленная работа, гибкий график</p>
          </p>
          <hr>
          <h2 id="mycontact"> Контактные данные:</h2> 
          <p class="leftstr"><?=$endData['tel']?></p> 
          <p class="rightstr"><?=$endData['email']?></p>
    </div>
    
    
    </div>
    <div class="footer">
      <a href="gb.ru"><p class="leftstr">Все права защищены(c)</a>
      <a href="#top"><p class="rightstr">Перейти вверх страницы</a>
  </div>
</body>
</html>