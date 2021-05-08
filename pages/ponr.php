<?php
    session_start();
    $c = mysqli_connect("127.0.0.1", "qwert", "root", "register-bg");
    $q = mysqli_query($c, "SELECT * FROM ponr WHERE id_pok='{$_SESSION['id_pok']}'");
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
    <style type="text/css">
        .div3{
            width: 27%;
            height: 40vh;
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

        .kek{
            width: 100%;
            height: 20vh;
            border-bottom: 1px solid #b4b4b4;
            display: flex;
            align-items: center;
            color: black;
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
                <a href="regvhod.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh;" class="jcc">Регистрация/вход</a>
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
<div style="text-align: center;">
    <p style="text-decoration: none; font-family: gl; font-size: 7vh; margin-top: 20vh; height: 3vh; margin-bottom: 5vh">Понравившиеся <img src="../img/bbb.png"></p>
</div>

<div style="margin-top: 15vh; width: 60%; display: flex; flex-direction: column;" class="marg">
    <?php
    for ($i=0; $i < mysqli_num_rows($q); $i++) { 
        $s = $q->fetch_assoc();
        $qq = mysqli_query($c, "SELECT * FROM 1_madeinsakha_ukr WHERE id='{$s['id_ukr']}'");
        $ss = $qq->fetch_assoc();
    ?>
        <div style="width: 100%; display: flex; justify-content: center; height: 30vh;">
            <a href="primer1.php?id_tov=<?php echo $ss['id'] ?>" class="kek">
                <div style="width: 20vh; height: 20vh;"><img src="../img/katalog/<?php echo $ss['img'] ?>.png" style="width: 15vh; height: 15vh; margin-top: 2.5vh; margin-left: 2.5vh"></div>
                <div style="width: 70vh; height: 20vh; margin-left: 6vh; margin-top: 15vh; font-size: 3.5vh"><?php echo $ss['name'] ?></div>

                <div style="width: 10vh; height: 20vh; margin-left: 6vh; margin-top: 17vh; font-size: 2.5vh"><?php echo $ss['cena']; ?></div>
            </a>
            <div style="margin-top: 50px; font-size: 12px"><a href="../utilites/addtokorz.php?id_ukr=<?php echo $ss['id'] ?><?php echo $_GET['id_tov'] ?>">Добавить в корзину</a></div>
            <a href="../utilites/delete2.php?id=<?php echo $s['id_lol'] ?>" style="width: 10vh; height: 20vh; margin-top: 9vh; font-size: 2.5vh"><img src="../img/katalog/krest.png" style="width: 3vh; height: 3vh; margin-top: 0vh; margin-left: 2.5vh" class="kr"></a>
        </div>
    <?php
        }
     ?>
</div>
<div>
    <span style="margin-left:100px ">Вам может понравиться</span>
    <div class="container" style="margin-top:50px ">
        <div   class="col-lg-4 col-md-4 col-xs-4 thumb" style="text-align: center">
            <img src="../img/scrn_big_001%202.png">
            <div class="center-block" style="text-align: center"><span>Книга “Якутские народные сказки”</span></div>
        </div>
        <div   class="col-lg-4 col-md-4 col-xs-4 thumb" style="text-align: center">
            <img src="../img/7f7e5bc16a481d7d036b122c1f4f1577%202.png">
            <div class="center-block" style="text-align: center;padding-top: 10px"><span>Кукла “Северная девочка”</span></div>
        </div>
        <div   class="col-lg-4 col-md-4 col-xs-4 thumb" style="text-align: center">
            <img src="../img/image1%203.png">
            <div class="center-block" style="text-align: center;padding-top: 30px"><span>Браслет “Олох”</span></div>
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