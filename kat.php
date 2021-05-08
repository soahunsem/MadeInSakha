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
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div style="height: 9vh; width: 100%; background: rgb(51, 51, 51); display: flex; align-items: center; position: fixed; top: 0vh; z-index: 1">
    <a href="index.php"><img src="../img/logo.png" style="height: 8vh; margin-left: 5vh;"></a>
    <a style="font-family: ns; margin-top: -0.5vh; color: white; margin-left: 2vh; font-size: 3.5vh; text-decoration: none;" href="../index.php">MADE IN SAKHA</a>
    <div style="height: 10vh; width: 40%; margin-left: auto; display: flex; justify-content: space-evenly;">
        <a href="index.php" style="margin-left: 1vh; text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh;" class="jcc">Главная</a>
        <a href="#head1" style="margin-left: 1vh; text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh;" class="jcc">Каталог</a>
        <?php
        if ($_SESSION['id_pok']==null) {
            ?>
            <a href="pages/regvhod.html" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh;" class="jcc">Регистрация/вход</a>
            <?php
        } else{
            ?>
            <a href="pages/lich.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="img/head/human.png"></a>
            <a href="pages/ponr.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="img/head/serd.png"></a>
            <a href="pages/korzina.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="img/head/korz.png"></a>
            <?php
        }
        ?>
        <a href="perevod.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="https://img.icons8.com/small/32/ffffff/internet.png"></a>
    </div>
</div>



<div class="div1 cl" style="padding-bottom: 5vh; background: #f9f9f9; " id="head1">
    <div style="justify-content: center; width: 40%;" class="marg jcc">
        <h2 style="font-family: ns; margin-top: 200px; color: rgb(51,51,51); text-decoration: underline rgb(51,51,51);">ЯКУТСКИЕ ИЗДЕЛИЯ</h2>
    </div>
    <div style="margin-top: 2vh; width: 60%; display: flex; flex-wrap: wrap;" class="marg">
        <?php
        for ($i=0; $i < mysqli_num_rows($q)-2; $i++) {
            $s = $q->fetch_assoc();
            ?>
            <div class="div2 marg jcc" style="background: url(img/index/ukr/<?php echo $s['img_nazv'] ?>); background-size: 100% 100%">
                <p style="margin-top: 25vh; color: white; font-size: 125%;"><?php echo $s['name_nazv'] ?></p>
            </div>
            <?php
        }
        ?>
        <div class="div2 marg jcc" style="width: 97%; height: 20vh; background: url(img/index/ukr/<?php $s = $q->fetch_assoc(); echo $s['img_nazv'] ?>); background-size: 100% 100%;">
            <p style="margin-top: 12vh; color: white; font-size: 125%;"><?php echo $s['name_nazv'] ?></p>
        </div>

        <div class="div2 marg jcc" style="width: 97%; height: 20vh; background: url(img/index/ukr/<?php $s = $q->fetch_assoc(); echo $s['img_nazv'] ?>); background-size: 100% 100%;">
            <p style="margin-top: 12vh; color: white; font-size: 125%;"><?php echo $s['name_nazv'] ?></p>
        </div>
    </div>

</div>

<div class="jcc" style="width: 100%;margin-top: 250px">
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
                    <img src="img/phone.png">
                    <a style="margin-left: 2vh; text-decoration: none; color: black; margin-top: 5vh;">+7(800)-555-35-35</a>
                </div>
                <div style="margin-top: 2vh">
                    <img src="img/phone.png">
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

    const anchors = document.querySelectorAll('a[href*="#"]')

    for (let anchor of anchors) {
        anchor.addEventListener('click', function (e) {
            e.preventDefault()
            const blockID = anchor.getAttribute('href').substr(1)
            document.getElementById(blockID).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            })
        })
    }

    let div = document.querySelectorAll(".div2");
    for (let i = 0; i < <?php echo mysqli_num_rows($q) ?>; i++) {
        div[i].onmouseover = function(){
            div[i].style.marginTop = "1vh";
        };
        div[i].onmouseout = function(){
            div[i].style.marginTop = "3vh";
        };
        div[i].onclick = function() {
            f = i + 1;
            document.location.href = "pages/katalog.php?id_nazv=" + f;
        };
    }

    div[4].onclick = function() {
        document.location.href = "pages/softpoc.php";
    };
</script>