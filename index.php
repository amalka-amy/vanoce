<?php 
    session_start();
    $_SESSION["count"] = "0";

    date_default_timezone_set('Europe/Prague');
    $actual_time = date('H:i');
    $actual_date = date('Y-m-d');
    $christmas_date = date('Y').'-12-11';
    $christmas_time = '18:30';

    if (($actual_date === $christmas_date)){
        if (($actual_time >= $christmas_time) and ($actual_time <= '23:59')){
            $value = "Dočkal si se! Gratuluji <3";
        }else{
            $value = "Tak snad to vydržíš až do večera ne?";
        }
    }else{
        $value = "Ještě si počkej!";
    }
    
    if (isset ($_POST["odeslano"])){
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (($_POST["odeslano"]) == "1"){
                $_SESSION["count"] = "1";
                $value = "Ha, přemýšlela jsem, čím ti udělám radost...";
            }if (($_POST["odeslano"]) == "2"){
                $_SESSION["count"] = "2";
                $value = "... nerada dávám obyčejný dárečky...";
            }if (($_POST["odeslano"]) == "3"){
                $_SESSION["count"] = "3";
                $value = "... ale zároveň nechci dávat moc peněz, abych koupila něco cool...";
            }if (($_POST["odeslano"]) == "4"){
                $_SESSION["count"] = "4";
                $value = "... poslední dobou si dost uvědomuju, jak ráda trávím čas s přáteli, ať se jim to líbí nebo ne...";
            }if (($_POST["odeslano"]) == "5"){
                $_SESSION["count"] = "5";
                $value = "... no že si to ty, tak tě samozřejmě taky nechci ochudit o společně strávený čas...";
            }if (($_POST["odeslano"]) == "6"){
                $_SESSION["count"] = "6";
                $value = "... tak jsem nám koupila lístky na Viktora <3 ...";
            }if (($_POST["odeslano"]) == "7"){
                $_SESSION["count"] = "7";
                $value = ".... hah dělám si srandu, klikni dál...";
            }if (($_POST["odeslano"]) == "8"){
                $_SESSION["count"] = "8";
                $value = "... už tě to sere co? ...";
            }if (($_POST["odeslano"]) == "9"){
                $_SESSION["count"] = "9";
                $value = "... no dobře, tak naposledy klikni na dáreček ;)";
            }if (($_POST["odeslano"]) == "10"){
                $_SESSION["count"] = "10";
                $value = "Haha nachytal si se :D...";
            }if (($_POST["odeslano"]) == "11"){
                $_SESSION["count"] = "11";
                $value = "... ne, teď už fakt naposledy. Mám tě ráda! <3 ";
            }if (($_POST["odeslano"]) == "12"){
                $_SESSION["count"] = "last";
                $value = "konec";
            }
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dáreček k Vánocům</title>
    <meta http-equiv="refresh" content="60">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <?php if (($_SESSION["count"] <= "12")):?>
        <h1> <?php echo $value; ?> </h1>
        <?php else: ?>
        <h1>HEY YENDO</h1>
        <h2> BATIKOVACÍ SESSION </h2>
        <p> Pokud budeš mít zájem, jsem domluvená, že se začátkem roku 2024 můžeme přidat na batikovací session ve Zlíně s Yendou, prý nás moc rádi uvidí. Přesný datum domluvíme podle zkoušek. Plus jsem si říkala, že, když už tam pojedem (snad autem), tak bychom tam mohli zůstat přes noc ;). </p>
        <?php endif; ?>
        

        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method ="POST">
            <?php if (($_SESSION["count"]) == "0"):?>
            <input type="submit" value="1" name = "odeslano">
            <?php endif; ?>
            <?php if (($_SESSION["count"] == "1")):?>
            <input type="submit" value="2" name = "odeslano">
            <?php endif; ?>
            <?php if (($_SESSION["count"] == "2")):?>
            <input type="submit" value="3" name = "odeslano">
            <?php endif; ?>
            <?php if (($_SESSION["count"] == "3")):?>
            <input type="submit" value="4" name = "odeslano">
            <?php endif; ?>
            <?php if (($_SESSION["count"] == "4")):?>
            <input type="submit" value="5" name = "odeslano">
            <?php endif; ?>
            <?php if (($_SESSION["count"] == "5")):?>
            <input type="submit" value="6" name = "odeslano">
            <?php endif; ?>
            <?php if (($_SESSION["count"] == "6")):?>
            <input type="submit" value="7" name = "odeslano">
            <?php endif; ?>
            <?php if (($_SESSION["count"] == "7")):?>
            <input type="submit" value="8" name = "odeslano">
            <?php endif; ?>
            <?php if (($_SESSION["count"] == "8")):?>
            <input type="submit" value="9" name = "odeslano">
            <?php endif; ?>
            <?php if (($_SESSION["count"] == "9")):?>
            <input type="submit" value="10" name = "odeslano">
            <?php endif; ?>
            <?php if (($_SESSION["count"] == "10")):?>
            <input type="submit" value="11" name = "odeslano">
            <?php endif; ?>
            <?php if (($_SESSION["count"] == "11")):?>
            <input type="submit" value="12" name = "odeslano">
            <?php endif; ?>
            <?php if (($_SESSION["count"] == "12")):?>
            <input type="submit" value="last" name = "odeslano">
            <?php endif; ?>
        </form>


    </main>
    
</body>
</html>