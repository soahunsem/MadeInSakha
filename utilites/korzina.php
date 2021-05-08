<?php
session_start();
$c = mysqli_connect("127.0.0.1", "qwert", "root", "register-bg");
$q = mysqli_query($c, "SELECT * FROM 1_madeinsakha_nazv");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MadeInSakha</title>
</head>
<body>
    <div style="margin-top: 5vh; width: 60%; display: flex; flex-wrap: wrap;" class="marg">
        <?php
        for ($i=0; $i < mysqli_num_rows($q)-1; $i++) {
            $s = $q->fetch_assoc();
            ?>
            <div class="div2 marg jcc" style="background: url(img/index/ukr/<?php echo $s['img_nazv'] ?>);">
                <p style="margin-top: 25vh; color: white; font-size: 125%;"><?php echo $s['name_nazv'] ?></p>
            </div>
            <?php
        }
        ?>
        <div class="div2 marg jcc" style="width: 97%; height: 20vh; background: url(img/index/ukr/<?php $s = $q->fetch_assoc(); echo $s['img_nazv'] ?>); background-size: cover;">
            <p style="margin-top: 12vh; color: white; font-size: 125%;"><?php echo $s['name_nazv'] ?></p>
        </div>
</body>
</html>