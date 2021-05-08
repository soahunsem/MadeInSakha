<?php
session_start();
$c = mysqli_connect("127.0.0.1", "qwert", "root", "register-bg");
$q = mysqli_query($c, "SELECT * FROM 1_madeinsakha_nazv");
$q1 = mysqli_query($c, "SELECT * FROM 1_madeinsakha_nazv");
$q2 = mysqli_query($c, "SELECT * FROM 1_madeinsakha_nazv");
$q3 = mysqli_query($c, "SELECT * FROM 1_madeinsakha_kat WHERE tip_kat='{$_GET['id_nazv']}'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MadeInSakha</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../softpokup.css">
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
        <a href="perevod.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc" ><img src="https://img.icons8.com/small/32/ffffff/internet.png"></a>
    </div>
</div>

<div>
    <p style="margin-top: 150px" class="text" align="center" >Совместная покупка</p>
    <div align="center">
    <p style="margin-top: 5px; width: 717px" class="m"  >Совместная Покупка (СП) – это объединение группы людей с целью купить товар с максимальной экономией.</p>
    </div>
</div>

<div class="center-block" align="center" style="margin-top: 85px; display:flex;justify-content: space-evenly ">
        <div style="flex-direction: column;display: flex; height: 348px;width: 364px">
        <img src="../img/1.png" style="border: 1px solid #d3d3d3; border-bottom: 0px">
            <div style="border: 1px solid #d3d3d3; border-top: 0px; display: flex">
                <div style="width: 25%">

                </div>
                <div class="" style="width: 50%">
                    <p class="m">Танцующие чорооны</p>
                </div>
                <div style="width: 25%;">
                    <img src="../img/Vector.png" style="margin-top: 20px">
                </div>
            </div>
            <a class="btn-black" style="width: 365px; height: 1000px; margin-left: -1px; border-radius: 0px; font-family: Montserrat">Смотреть</a>
        </div>
        <div style="flex-direction: column;display: flex; height: 348px;width: 364px">
        <img src="../img/2.png" style="border: 1px solid #d3d3d3; border-bottom: 0px">
            <div style="border: 1px solid #d3d3d3; border-top: 0px; display: flex; height: 80px">
                <div style="width: 25%">

                </div>
                <div class="" style="width: 50%">
                    <p class="m">Илин Кэбиhэр</p>
                </div>
                <div style="width: 25%;">
                    <img src="../img/Vector.png" style="margin-top: 20px">
                </div>
            </div>
            <a class="btn-black" style="width: 365px; height: 1000px; margin-left: -1px; border-radius: 0px; font-family: Montserrat">Смотреть</a>
        </div>

        <div style="flex-direction: column;display: flex; height: 348px;width: 364px">
        <img src="../img/3.png" style="border: 1px solid #d3d3d3; border-bottom: 0px">
            <div style="border: 1px solid #d3d3d3; border-top: 0px; display: flex; height: 80px">
                <div style="width: 25%">

                </div>
                <div class="" style="width: 50%">
                    <p class="m">Блеск</p>
                </div>
                <div style="width: 25%;">
                    <img src="../img/Vector.png" style="margin-top: 20px">
                </div>
            </div>
            <a class="btn-black" style="width: 365px; margin-left: -1px; border-radius: 0px; font-family: Montserrat">Смотреть</a>
        </div>
</div>
<div class="jcc" style="width: 100%; margin-top: 100px">
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



<div>

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

    let div = document.querySelectorAll(".div2");
    for (let i = 0; i < <?php echo mysqli_num_rows($q3) ?>; i++) {
        div[i].onmouseover = function(){
            div[i].style.marginTop = "1vh";
        };
        div[i].onmouseout = function(){
            div[i].style.marginTop = "3vh";
        };
    }
</script>

</body>
</html>