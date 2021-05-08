<?php
session_start();
$c = mysqli_connect("127.0.0.1", "qwert", "root", "register-bg");
$q = mysqli_query($c, "SELECT * FROM 1_madeinsakha_ukr WHERE id='{$_GET['id_tov']}'");
$s = $q->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MadeInSakha</title>
    <link rel="stylesheet" href="../lib/bootstrap4.css">
    <link rel="stylesheet" href="../lib/font-awesome.min.css">
    <link rel="stylesheet" href="../lib/main.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
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
                <a href="../pages/regvhod.html" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh;" class="jcc">Регистрация/вход</a>
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

<div style="margin-top: 100px" >
    <div style="margin-left:80px">
            <img src="../img/katalog/<?php echo $s['img'] ?>.png" align="left" width="599px"  height="600px" style=" border: 8px solid #ffffff; border-radius: 15px; margin-left: 100px; margin-top: 30px"/>
        <div class="container">
            <div class="row">
                <div class="col-sm block" style="margin-top: 20px;">
                    <p class="text2"><?php echo $s['name'] ?></p>
                </div>
                <hr style="width: 40%; border: 1px solid #dddddd; margin-top: 0px;">
                <br>
                <div class="col-sm block" style="margin-left: 100px;padding-right: 0; ">
                    <span  class="e68_3"><?php echo $s['text'] ?></span>
                </div>
                <div class="col-sm block" style="margin-left: 20px; padding-right: 0; line-height: 45px; margin-top: 20px">
                    <span style="" class="e68_2"><?php echo $s['par'] ?></span>
                </div>
                    <div class="col-sm block" style="margin-top: 100px">
                        <h1 style="font-weight: bold; font-family: Bitter; font-size: 48px; margin-top: -10px;margin-left: 70px">
                            <?php echo $s['cena'] ?>
                        </h1>
                        <img src="../img/price.png" style="width: 30px; height: 35px; margin-top: -2px; margin-left: 4px">
                        <a  style="margin-left: 100px" href="../utilites/ponr.php?id_ukr=<?php echo $_GET['id_tov'] ?>"><img src="../img/bbb.png" style="width: 30px; height: 35px; margin-top: -2px; margin-left: 4px"></a>
                        <a href="../utilites/korz.php?id_ukr=<?php echo $_GET['id_tov'] ?>" type="button" class="btn-black" style="text-align: center; font-size: 24px;font-family: Montserrat;color: white">
                            Добавить в корзину
                        </a>
                </div>
                <div class="col-sm block" style="margin-top:40px">
                    <hr style="width: 65%; border: 1px solid #dddddd; margin-top: 40px;">
                </div>
            </div>
        </div>
    </div>
</div>
<p>
    <div style="margin-left: 950px">
        <div class="e3_1063">
            <div class="e3_1064"> </div>
            <span  class="e3_1065">Заказ/Оплата</span>
            <span  class="e3_1066">Гарантии</span>
            <span  class="e3_1067">Доставка</span>
            <span  class="e3_1069">Доставка осуществляется по всей территории России, а так же и за ее пределами. Партнеры-перевозчики СДЭК и ФГУП “Главный центр специальной связи”. Обращайтесь к менеджерам MadeInSakha для уточнения стоимости доставки до вашего города.</span>
        </div>
    </div>
</p>
<div class="container">
    <div class="row">
        <div class="col-sm block" style="margin-top: 30px; margin-left: 5px">
            <hr style="width: 40%; border: 1px solid #dddddd; margin-left: 600px">
        </div>
    </div>
</div>
<div class="">
    <div class="">
        <img src="../image/primer/2.jfif" align="left" width="675px"  height="571px" style=" border: 8px solid #ffffff; border-radius: 15px; margin-left: 200px; margin-top: 30px"/>
    </div>
</div>
<div style="margin-top: 100px">
    <div class="col-sm block" >
        <p class="text3"><?php echo $s['name'] ?></p>
    </div>
    <div class="col-sm-block">
        <p class="text4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu varius velit. Quisque volutpat,
            dui vitae porttitor viverra, est tellus suscipit eros, ut convallis dolor urna vel sapien. Cras
            cursus massa sem, vitae ornare mi sollicitudin sed. Aliquam viverra ullamcorper lacus, non
            convallis magna finibus vel. Suspendisse vestibulum felis vitae arcu finibus venenatis.
            Phasellus sodales sem aliquet imperdiet rutrum. Quisque lobortis bibendum mi, id auctor
            erat imperdiet scelerisque. Sed luctus eleifend leo non vulputate. Mauris bibendum risus
            congue lectus tempor faucibus. Pellentesque sed tortor sit amet leo mollis posuere vehicula
            vitae purus.</p>
        <div>
            <p class="text4" style="margin-top: 20px">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                Integer eu eleifend erat. Curabitur eget maximus dui. Nam massa risus, tincidunt convallis
                suscipit non, auctor sit amet massa. Vestibulum bibendum mollis metus quis pretium. Mauris
                a purus laoreet, fringilla augue vitae, congue ante. Ut porta volutpat mauris, nec aliquam orci
                convallis eu. Phasellus pulvinar non sapien eu varius. Aliquar consequat accumsan leo, nec
                euismod augue aliquet non.</p>
        </div>
    </div>
</div>
<div class="jcc" style="width: 100%">
    <div style="width: 60%; display: flex;" class="marg">
        <div class="marg cl" style="font-family: gl; width: 30%; margin-top: 10vh; margin-bottom: 10vh">
            <p style="font-family: gl; margin-top: 3.8vh; font-size: 3vh; margin-bottom: 2vh;">ПОЛЕЗНЫЕ ССЫЛКИ</p>
            <hr style="width: 100%; border: 1px solid #dddddd; background: black; margin-top: 0px;">
            <a href="" style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 1vh;">Доставка</a>
            <a href="" style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 3vh;">Оплата</a>
            <a href="" style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 3vh;">Акции</a>
            <a href="" style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 3vh;">Политика конфиденциальности</a>
        </div>
        <div class="marg cl" style="font-family: gl; width: 30%; margin-top: 10vh; margin-bottom: 10vh">
            <p style="font-family: gl; margin-top: 3.8vh; font-size: 3vh; margin-bottom: 2vh;">ОПЛАТА</p>
            <hr style="width: 100%; border: 1px solid #dddddd; background: black; margin-top: 0px;">
            <a style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 5vh;font-size: 14px; " >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper justo, nec, pellentesque.</a>
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

<hr style="width: 70%; border: 1px solid #dddddd; background: black; margin-top: 0px;">

<div style="margin-left: 15%; margin-bottom: 10vh;">
    <a href="#" style="margin-left: 1vh; text-decoration: none; color: black; font-family: Montserrat">(c) 2021 MadeInSakha</a>
</div>
</body>
</html>