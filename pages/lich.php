<?php
	session_start();
	$c = mysqli_connect("127.0.0.1", "qwert", "root", "register-bg");
	$q = mysqli_query($c, "SELECT * FROM 1_madeinsakha_nazv");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MadeInSakha</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style type="text/css">
		.divv{
			width: 40%;
			height: 80vh;
		}
		.divv2{
			width: 50%;
			height: 70vh;
		}
		.divv3{
			width: 95%;
			height: 14vh;
			font-family: gl;
			margin-left: auto;
			margin-right: auto;
		}
		input{
			width: 90%;
			border: 0vh;
			height: 6vh;
			padding: 0 10px;
			background: #ffffff;
			border: 1px solid #DDDDDD;
			font-size: 2.5vh;
			color: #808080;
			outline: none;
			margin-top: 0vh;
		}
		.b{
			border: 1px solid #b4b4b4;
			font-family: gl
		}
        .btn3{
            background-color:#000000;
            background-repeat:no-repeat;
            border: solid white;
            border-radius: 10px;
            cursor:pointer;
            outline:none;
            width: 100px;
            height: 100px;
            font-family: gl;
            font-size: 2.5vh;
            color: white;
            margin-left: -330px;
        }
	</style>
</head>
<body>

	<div style="height: 9vh; width: 100%; background: rgb(51, 51, 51); display: flex; align-items: center; position: fixed; top: 0vh; z-index: 1">
		<a href="../index.php"><img src="../img/logo.png" style="height: 8vh; margin-left: 5vh;"></a>
		<a style="font-family: ns; margin-top: -0.5vh; color: white; margin-left: 2vh; font-size: 3.5vh; text-decoration: none;" href="../index.php">MADE IN SAKHA</a>
		<div style="height: 10vh; width: 40%; margin-left: auto; display: flex; justify-content: space-evenly;">
			<a href="../index.php" style="margin-left: 1vh; text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh;" class="jcc">Главная</a>
			<a href="../kat.php" style="margin-left: 1vh; text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh;" class="jcc">Каталог</a>
			<?php 
				if ($_SESSION['id_pok']==null) {
			?>
				<a href="../pages/regvhod.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh;" class="jcc">Регистрация/вход</a>
			<?php 
				} else{
			?>
				<a href="lich.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="../img/head/human.png"></a>
				<a href="ponr.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="../img/head/serd.png"></a>
				<a href="../pages/korzina.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="../img/head/korz.png"></a>
			<?php 	
				}
			?>
			<a href="perevod.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="https://img.icons8.com/small/32/ffffff/internet.png"></a>
		</div>
	</div>

	<div style="text-align: center;">
	    <p style="text-decoration: none; font-family: gl; font-size: 7vh; margin-top: 20vh; height: 3vh; margin-bottom: 15vh">Личный кабинет</p>
	</div>

	<div style="justify-content: space-evenly; display: flex; width: 90%;" class="marg">
		<div class="divv">
			<p style="text-decoration: none; font-family: gl; font-size: 3.3vh; margin-left: 2vh">Личные данные</p>
			<form style="display: flex;">
				<div class="divv2">
					<div class="divv3">
						<p style="margin: 1vh;">Имя</p>
						<input type="text" class="form-control" id="inputAddress2" value="Айтал">
					</div>
					<div class="divv3">
						<p style="margin: 1vh;">Фамилия</p>
						<input type="text" class="form-control" id="inputAddress2" value="Андреев">
					</div>
					<div class="divv3">
						<p style="margin: 1vh;">Улица</p>
						<input type="text" class="form-control" id="inputAddress2" value="Каландрашвили">
					</div>
					<div class="divv3" style="display: flex;">
						<div style="width: 50%; height: 14vh">
							<p style="margin: 1vh;">Дом/Корпус</p>
							<input type="text" class="form-control" id="inputAddress2" value="6/В">
						</div>
						<div style="width: 35%; height: 14vh; margin-left: 2.8vh;">
							<p style="margin: 1vh;">Квартира</p>
							<input type="text" class="form-control" id="inputAddress2" value="29">
						</div>
					</div>
				</div>
				<div class="divv2">
					<div class="divv3">
						<p style="margin: 1vh;">E-mail</p>
						<input type="text" class="form-control" id="inputAddress2" value="aytalandreew13@gmail.com">
					</div>
					<div class="divv3">
						<p style="margin: 1vh;">Номер телефона</p>
						<input type="text" class="form-control" id="inputAddress2" value="+7(800)-555-35-35">
					</div>
					<div class="divv3">
						<p style="margin: 1vh;">Город</p>
						<input type="text" class="form-control" id="inputAddress2" value="Якутск">
					</div>
					<div class="divv3">
						<p style="margin: 1vh;">Индекс</p>
						<input type="text" class="form-control" id="inputAddress2" value="677000">
					</div>
                    <a class="btn3">Применить</a>
				</div>
			</form>
		</div>
		<div class="divv">
			<p style="text-decoration: none; font-family: gl; font-size: 3.3vh;">Мои заказы</p>
			<div style="display: flex;">
				<div class="b" style="height: 6vh; width: 55%;">
					<p style="margin: 1.5vh;">Товар</p>
				</div>
				<div class="b" style="height: 6vh; width: 15%;">
					<p style="margin: 1.5vh;">Цена</p>
				</div>
				<div class="b" style="height: 6vh; width: 15%;">
					<p style="margin: 1.5vh;">Дата</p>
				</div>
				<div class="b" style="height: 6vh; width: 15%;">
					<p style="margin: 1.5vh;">Статус</p>
				</div>
			</div>
			<div style="display: flex;">
				<div class="b" style="height: 18vh; width: 55%; display: flex;">
					<img src="../img/katalog1/brasl.png" style="height: 10vh; margin-left: 2vh; margin-top: 4vh;">
					<p style="margin-left: 2vh; margin-top: 7vh;">Браслет “Олох”</p>
				</div>
				<div class="b" style="height: 18vh; width: 15%;">
					<p style="margin: 1.5vh; margin-top: 7vh;">5900</p>
				</div>
				<div class="b" style="height: 18vh; width: 15%;">
					<p style="margin: 1.5vh; margin-top: 7vh;">01.05.21</p>
				</div>
				<div class="b" style="height: 18vh; width: 15%;">
					<p style="margin: 1.5vh; margin-top: 7vh;">Ожид</p>
				</div>
			</div>
			<div style="display: flex;">
				<div class="b" style="height: 18vh; width: 55%; display: flex;">
					<img src="../img/image4%202%20(1).png" style="height: 10vh; margin-left: 2vh; margin-top: 4vh;">
					<p style="margin-left: 2vh; margin-top: 7vh;">Серьги “Танцующий чороон”</p>
				</div>
				<div class="b" style="height: 18vh; width: 15%;">
					<p style="margin: 1.5vh; margin-top: 7vh;">3000</p>
				</div>
				<div class="b" style="height: 18vh; width: 15%;">
					<p style="margin: 1.5vh; margin-top: 7vh;">01.05.21</p>
				</div>
				<div class="b" style="height: 18vh; width: 15%;">
					<p style="margin: 1.5vh; margin-top: 7vh;">Оплачено 50%</p>
				</div>
			</div>
			<div style="display: flex;">
				<div class="b" style="height: 18vh; width: 55%; display: flex;">
					<img src="../img/scrn_big_001%202.png" style="height: 10vh; margin-left: 2vh; margin-top: 4vh;">
					<p style="margin-left: 2vh; margin-top: 7vh;">Книга “Якутские народные сказки”</p>
				</div>
				<div class="b" style="height: 18vh; width: 15%;">
					<p style="margin: 1.5vh; margin-top: 7vh;">600</p>
				</div>
				<div class="b" style="height: 18vh; width: 15%;">
					<p style="margin: 1.5vh; margin-top: 7vh;">01.05.21</p>
				</div>
				<div class="b" style="height: 18vh; width: 15%;">
					<p style="margin: 1.5vh; margin-top: 7vh;">Доставлено</p>
				</div>
			</div>
			<div style="display: flex;">
				<div class="b" style="height: 18vh; width: 55%; display: flex;">
					<img src="../img/7f7e5bc16a481d7d036b122c1f4f1577%202.png" style="height: 10vh; margin-left: 2vh; margin-top: 4vh;">
					<p style="margin-left: 2vh; margin-top: 7vh;">Кукла “Северная девочка”</p>
				</div>
				<div class="b" style="height: 18vh; width: 15%;">
					<p style="margin: 1.5vh; margin-top: 7vh;">2000</p>
				</div>
				<div class="b" style="height: 18vh; width: 15%;">
					<p style="margin: 1.5vh; margin-top: 7vh;">01.05.21</p>
				</div>
				<div class="b" style="height: 18vh; width: 15%;">
					<p style="margin: 1.5vh; margin-top: 7vh;">Отменен</p>
				</div>
			</div>
		</div>
	</div>

	<div class="jcc" style="width: 100%;">
	    <div style="width: 60%; display: flex;" class="marg">
	        <div class="marg cl" style="font-family: gl; width: 30%; margin-top: 10vh; margin-bottom: 10vh">
	            <p style="font-family: gl; margin-top: 3.8vh; font-size: 3vh; margin-bottom: 2vh;">ПОЛЕЗНЫЕ ССЫЛКИ</p>
	            <hr style="width: 100%; border: 1px solid #dddddd; background: black; margin-top: 0px;"><a href="" style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 1vh;">Доставка</a>
	            <a href="" style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 3vh;">Оплата</a>
	            <a href="" style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 3vh;">Акции</a>
	            <a href="" style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 3vh;">Политика конфиденциальности</a>
	        </div>
	        <div class="marg cl" style="font-family: gl; width: 30%; margin-top: 10vh; margin-bottom: 10vh">
	            <p style="font-family: gl; margin-top: 3.8vh; font-size: 3vh; margin-bottom: 2vh;">ОПЛАТА</p>
	            <hr style="width: 100%; border: 1px solid #dddddd; background: black; margin-top: 0px;">
	            <a style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 4vh;font-size: 14px; " >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper justo, nec, pellentesque.</a>
	            <div style="margin-top: 10px">
	                <img src="../image/primer/visa.png" style="margin-left: 10px" width="46" height="30">
	                <img src="../image/primer/mastcrd.png" style="margin-left: 10px" width="46" height="30">
	            </div>
	        </div>
	        <div class="marg cl" style="font-family: gl; width: 30%; margin-top: 10vh; margin-bottom: 10vh">
	            <p style="font-family: gl; margin-top: 3.8vh; font-size: 3vh; margin-bottom: 2vh;">КОНТАКТЫ</p>
	            <hr style="width: 100%; border: 1px solid #dddddd; background: black; margin-top: 0px;">
	            <div style="margin-top: 1vh">
	                <div>
	                    <img src="../img/phone.png">
	                    <a style="margin-left: 2vh; text-decoration: none; color: black; margin-top: 5vh;">+7(800)-555-35-35</a>
	                </div>
	                <div style="margin-top: 2vh">
	                    <img src="../img/phone.png">
	                    <a style="margin-left: 2vh; text-decoration: none; color: black; margin-top: 2vh;">+7(800)-555-35-35</a>
	                </div>
	                <div style="margin-top: 2vh">
	                    <img src="../img/mailicon.png">
	                    <a href="" style="margin-left: 2vh; text-decoration: none; color: black; margin-top: 2vh;">MadeInSakha@gmail.com</a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

</body>
</html>