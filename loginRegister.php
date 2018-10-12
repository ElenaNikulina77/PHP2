<?php

//session_start();
//if (isset($_Get["logout"])) {
 //   setcookie("login");
  //  setcookie("pass");
  //  unset($SESSION["login"]);
  //  unset($SESSION["pass"]);
  //  header("Location: loginRegister.php");
    
//}

//function checkPass ($login, $pass) {
    //$connect=mysqli_connect("biz-support.ru/loginRegister.php", "root", "", "shop");
    //$login=strip_tags(mysqli_real_escape_string($connect, $login));
    //$pass=strip_tags(mysqli_real_escape_string($connect, $pass));
    //return($login=="admin") && ($pass=="123");
//}
//$login=$_POST["login"];
/*$pass=$_POST["pass"];


if ($login=="admin") 
{
    setcookie("login", $login, time()+3600);
    echo $_COOKIE["login"];
}

if ($login=="admin" && $pass="125") {
echo "Привет, {$login}";


}
else echo
"
<div style=\"margin-left: 70%;\">
<form action=\"\" method=\"POST\">
Авторизация<br>
Логин
<input style=\"margin-left: 11px;\" type=\"text\" name=\"login\" value=\"\">
<br>
Пароль
<input type=\"password\" name=\"pass\" value=\"\">
<br>
<input type=\"checkbox\" name=\"check\">
Запомнить<br>
<input type=\"submit\" name=\"submit\" value=\"Войти\">
</form>
</div>"*/
include login.class.php;



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>proba</title>
	<link rel="stylesheet" href="proba2.css">
</head>
<body>
	<div class="container">
  

<nav class="top">
					<ul class="left">
						<li> 
							<a href="#">Мой аккаунт</a>
						</li>
						<li>
							<a href="#">Мой список желаний (0)</a>
						</li>
						<li>
							<a href="#">Заказы</a>
						</li>
						<li>
							<a href="loginRegister.php">Логин или регистрация</a>
						</li>
					</ul>
					<ul class="right">
						<li>
							<a href="#">Рубль</a>
						</li>
						<li>
							<a href="#">Русский</a>
						</li>
						<li>
							<a href="basketBilet.php">Моя корзина: 0 товаров</a>
						</li>
					</ul>
				</nav>
        </div>
        
            <h2>КЛУБ ЛЮБИТЕЛЕЙ ОПЕРЫ И БАЛЕТА ПРЕДСТАВЛЯЕТ</h2>
            <h1>ФОТООТЧЕТ О ПОЕЗДКЕ В НОВОСИБИРСК</h1>
       
			<section>
  <div class="bigInside">
    <div class="slaiderTop">
        <img src="imgZ/cinderella_01.jpg" width="770" height="430" alt="ballet">
    </div>
    <div class="morePictures">
      <div class="twoPic">
        <div class="onePic">
            <img src="imgZ/cinderella_02.jpg" width="355" height="250"  alt="ballet">
        </div>
        <div class="onePic">
            <img src="imgZ/cinderella_03.jpg" width="355" height="250" alt="ballet">
        </div>
      </div>
      <div class="rightPic">
          <img src="imgZ/cinderella_04.jpg" width="355" height="530" alt="ballet">
      </div>
    </div>
  </div>
  <div class="smallColumn">
    <div class="columnTop">
      <img src="imgZ/cinderella_09.jpg" width="370" height="710" alt="ballet">
    </div>
    <div class="columnBot">
      <img src="imgZ/cinderella_06.jpg" width="370" height="250" alt="ballet">
    </div>
  </div>
</section>
<div style="width: 1170px; margin: 0 auto;" class="content">
<h3>На фото выше</h3>
<p>
    известный балет «Золушка» (музыка Сергея Прокофьева) в Новосибирском академическом театре оперы и балета. Единственный балет театра, который получил премию «Золотую маску» как лучший балетный спектакль года в России. «Золушка» в постановке Кирилла Симонова изящно балансирует между лирикой и иронией. На сцене Новосибирского театра знаменитый балет Сергея Прокофьева обнаруживает вполне голливудскую мелодраматичность и почти детскую искренность. Главную партию танцует – Анна Жарова (обладательница премии «Золотая маска» за лучшую балетную партию, народная артистка России).
</p>
<h3 style="padding-left: 150px;">Посетили также Новосибирский зоопарк</h3>
<p>
    Крупнейший зоопарк России. Занимает площадь 63 га, в нём содержится около 11 000 особей 756 видов. Более 350 видов занесены в Международную красную книгу. Около 180 видов внесено в Красную книгу России и Региональные Красные Книги. В Новосибирском зоопарке занимаются разведением кошачьих и куньих, поэтому здесь одна из лучших в мире коллекций представителей этих семейств. 
</p>
</div>
<section class="wrap">
  <div class="card">
      <img src="imgZ/1.jpg" width="270" height="350" alt="zoo">
  </div>
  <div class="card">
      <img src="imgZ/2.jpg" width="270" height="350" alt="zoo">
  </div>
  <div class="card">
      <img src="imgZ/3.jpg" width="270" height="350" alt="zoo">
  </div>
  <div class="card">
      <img src="imgZ/4.jpg" width="270" height="350" alt="zoo">
  </div>
  <div class="card">
      <img src="imgZ/5.jpg" width="270" height="350" alt="zoo">
  </div>
  <div class="card">
      <img src="imgZ/6.jpg" width="270" height="350" alt="zoo">
  </div>
  <div class="card">
      <img src="imgZ/7.jpg" width="270" height="350" alt="zoo">
  </div>
  <div class="card">
      <img src="imgZ/8.jpg" width="270" height="350" alt="zoo">
  </div>
  
</section>
<h2>Организаторы и вдохновители</h2>
<footer class="about">
    <h3 style="padding-left: 0; margin-left: 0;">Кротов Александр Викторович</h3>
    <p>
        доцент географического факультета АлтГУ, к.г.н.<br>
        8-913-217-24-93, 8-913-025-1661.
    </p>
    <h3>Никулина Елена Геннадьевна</h3>
    <p>
        инженер ТОиПП АлтГУ,<br>
        8-962-795-03-75.
    </p>
    <p>&copy;2018.</p>
</footer>

</body>
</html>