<?php
	session_start();
$c = mysqli_connect("127.0.0.1", "qwert", "root", "register-bg");
	$q = mysqli_query($c, "SELECT * FROM 1_madeinsakha_kat WHERE id_kat='{$_GET['id_kat']}'");
	$s = $q->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MadeInSakha</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style type="text/css">
		.div3{
			width: 27%;
			height: 40vh;
			background: blue;
			margin-top: 4vh;
			text-transform: uppercase;
			font-family: gl;
			transition: 0.8s;
			box-shadow: 0 0 10px rgba(0,0,0,0.5);
		}
		.btn3{
			background-color: rgb(51, 51, 51);
			background-repeat:no-repeat;
			border: solid white;
			cursor:pointer;
			outline:none;
			width: 50%;
			height: 8vh;
			font-family: gl;
			font-size: 2.5vh;
			color: white;
		}

		.modal{
			width: 20vh;
			height: 0vh;
			transition: 0.3s;
		}
		.m{
			display: none;
		}
		.text{
			font-family: gl;
			color: white;
			text-align: center;
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
				<a href="regvhod.html" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh;" class="jcc">Регистрация/вход</a>
			<?php 
				} else{
			?>
				<a href="lich.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="../img/head/human.png"></a>
				<a href="ponr.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="../img/head/serd.png"></a>
				<a href="korzina.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="../img/head/korz.png"></a>
			<?php 	
				}
			?>
			<a href="perevod.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="https://img.icons8.com/small/32/ffffff/internet.png"></a>
		</div>
	</div>

	<div style="width: 30%; background: rgb(51, 51, 51); position: fixed; top: 15vh; left: -30%; transition: 0.8s;" class="kek">
		<div style="height: 10vh; padding-top: 3.5vh;" class="text"><p>ФИЛЬТР И СОРТИРОВКА</p></div>
		<hr style="width: 100%; border: 0.1px solid white; background: white;">
		<div class="text"><a href="" style="color: white; text-decoration: none;">НОВАЯ КОЛЛЕКЦИЯ</a></div>
		<hr style="width: 100%; border: 0.1px solid white; background: white;">
		<div class="text"><a href="" style="color: white; text-decoration: none;">СКИДКИ ДО -30%</a></div>
		<hr style="width: 100%; border: 0.1px solid white; background: white;">
		<form action="katalog2.php?id_kat=<?php echo $_GET['id_kat'] ?>" method="post" style="width: 100%; text-align: center;">
				<div class="text m1"><a style="color: white; text-decoration: none;">МАТЕРИАЛ</a></div>
				<div class="modal" style="margin-left: 10vh;">
					<select style="width: 100%; height: 3vh;" class="m" name="mater">
						<option value="2">Серебро</option>
						<option value="3">Золото</option>
					</select>
				</div>
				<hr style="width: 100%; border: 0.1px solid white; background: white;">
				<div class="text m1"><a style="color: white; text-decoration: none;">ВСТАВКА</a></div>
				<div class="modal" style="margin-left: 10vh;">
					<select style="width: 100%; height: 3vh;" class="m" name="vst">
						<option value="2">Нет</option>
						<option value="3">Бриллиант</option>
						<option value="4">Фианит</option>
					</select>
				</div>
				<hr style="width: 100%; border: 0.1px solid white; background: white;">
				<div class="text m1"><a style="color: white; text-decoration: none;">ЦЕНА</a></div>
				<div class="modal" style="margin-left: 10vh;">
					<input type="text" name="cena" placeholder="От:" class="m" style="width: 90%">
				</div>
				<hr style="width: 100%; border: 0.1px solid white; background: white;">
				<div class="text m1"><a style="color: white; text-decoration: none;">СОРТИРОВКА</a></div>
				<div class="modal" style="margin-left: 10vh;">
					<select style="width: 100%; height: 3vh;" class="m" name="sort">
						<option value="2">От большей цены</option>
						<option value="3">От меньшей цены</option>
					</select>
				</div>
			<hr style="width: 100%; border: 0.1px solid white; background: white;">
			<div style="display: flex; flex-direction: column; width: 100%; margin-bottom: 1vh; margin-left: 15.5vh;" class="marg">
				<button class="btn3">ПРИМЕНИТЬ ФИЛЬТР</button>
			</div>
		</form>
        <a href="../utilites/pr.php?a=<?php echo $_GET['id_kat'] ?>"><button class="btn3">УБРАТЬ ФИЛЬТР</button></a>
	</div>
	<div style="width: 10%; height: 8vh; background: rgb(51, 51, 51); position: fixed; top: 15vh; left: 0.2%; transition: 0.8s;" class="text f"><p>ФИЛЬТР</p></div>
	<h2 style="font-family: gl; margin-top: 20vh; color: rgb(51,51,51); text-decoration: underline rgb(51,51,51); text-align: center;"><?php echo $s['name_kat'] ?></h2>

		<div style="margin-top: 5vh; width: 60%; display: flex; flex-wrap: wrap;" class="marg">
			<?php
			if ($_POST['mater'] == null) {
				$qq = mysqli_query($c, "SELECT * FROM 1_madeinsakha_ukr WHERE tip='{$_GET['id_kat']}'");
			}else{
                $_SESSION['a'] = $_POST['mater'];
				$qq = mysqli_query($c, "SELECT * FROM 1_madeinsakha_ukr WHERE tip='{$_GET['id_kat']}' AND metal='{$_POST['mater']}' AND vstavka='{$_POST['vst']}'");
			}
				for ($i=0; $i < mysqli_num_rows($qq); $i++) { 
					$ss = $qq->fetch_assoc();
			?>
					<div class="div3 marg" style="background-image: url(../img/katalog/<?php echo $ss['img'] ?>.png); background-size: 100%; display: flex; flex-direction: column; align-items: flex-end;">
						<div style="background: white; text-align: center; width: 100%; height: 6vh; margin-top: 30vh;">
							<p style="font-size: 75%;"><?php echo $ss['name'] ?></p>
						</div>
						<div style="background: black; text-align: center; width: 100%; height: 4vh;">
							<a href="primer1.php?id_tov=<?php echo $ss['id'] ?>" style="font-size: 75%; color: white;">смотреть</a>
						</div>
					</div>
			<?php
				}
			 ?>
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
	<script type="text/javascript">

		let kek = document.querySelector(".kek");
		let f = document.querySelector(".f");
		let d = kek.style.left;
		d = d.slice(0,-1);
		f.onclick = function(){
			if (d == -30) {
				kek.style.left = "0%";
				f.style.left = "30.2%";
			}
			else{
				kek.style.left = "-30%";
				f.style.left = "0.2%";
			}
			kek = document.querySelector(".kek");
			f = document.querySelector(".f");
			d = kek.style.left;
			d = d.slice(0,-1);
		};

		let modal1 = document.querySelectorAll(".m");
		let m1 = document.querySelectorAll(".m1");
		let modal = document.querySelectorAll(".modal");
		for (let i = 0; i < 4; i++) {
			m1[i].onmouseover = function(){
				modal[i].style.height = "5vh";
				modal1[i].style.display = "block";
			};
			m1[i].onmouseout = function(){
				modal[i].style.height = "0vh";
				modal1[i].style.display = "none";
			};
			m1[i].onclick = function(){
				modal[i].style.height = "5vh";
				modal1[i].style.display = "block";
				m1[i].onmouseout = function(){
					modal[i].style.height = "5vh";
				};
			};

			modal[i].onmouseover = function(){
				modal[i].style.height = "5vh";
				modal1[i].style.display = "block";
			};
			modal[i].onmouseout = function(){
				modal[i].style.height = "0vh";
				modal1[i].style.display = "none";
			};
		}

		let div = document.querySelectorAll(".div3");
		for (let i = 0; i < <?php echo mysqli_num_rows($qq) ?>; i++) {
			div[i].onmouseover = function(){
				div[i].style.marginTop = "2vh";
			};
			div[i].onmouseout = function(){
				div[i].style.marginTop = "4vh";
			};
		}
	</script>

</body>
</html>