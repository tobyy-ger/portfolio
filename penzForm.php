<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Penzion Pod Lípou</title>
</head>
<body>
<h1>PENZION POD LÍPOU</h1>
<form action="" method="post">
    <fieldset>
        <legend><b>Objednávka ubytování</b></legend>
        <p>
            <label for="jmeno">Jméno *:</label>
            <input type="text" id="jmeno" name="jmeno" required>
        </p>
        <p>
            <label for="prijmeni">Příjmení *:</label>
            <label for="prijmeni">Příjmení *:</label>
            <input type="text" id="prijmeni" name="prijmeni" required>
        </p>
        <p>
            <label for="mail">E-mail *:</label>
            <input type="email" id="mail" name="mail" required>
        </p>
        <p>
            <label for="ubyt">Ubytování:</label>
            <select id="ubyt" name="ubyt">
                <option value="pokoj">Pokoj</option>
                <option value="chatka">Chatka</option>
                <option value="apartman">Apartmán</option>
            </select>
        </p>
        <p>
            Stravování:
            <input type="radio" id="polopenze" name="strava" value="polopenze">
            <label for="polopenze">polopenze</label>
            <input type="radio" id="snidane" name="strava" value="snidane">
            <label for="snidane">snídaně</label>
            <input type="radio" id="bez" name="strava" value="bez stravy" checked>
            <label for="bez">bez stravy</label>
        </p>
        <p>
            <label for="datum">Datum příjezdu :</label>
            <input type="date" id="datum" name="datum">
        </p>
        <p>
            <label for="noci">Počet nocí:</label>
            <input type="number" id="noci" name="noci" min="1" max="30">
        </p>
        <p>
            <label for="lidi">Počet lidí:</label>
            <input type="number" id="lidi" name="lidi" min="1" max="20">
        </p>
        <p>
            <label for="parkovani">Parkování:</label>
            <input type="checkbox" id="parkovani" name="parkovani">
        </p>
        <p>
            <label for="heslo">Heslo pro přístup *:</label>
            <input type="password" id="heslo" name="heslo" required minlength="5">
        </p>
        <p>
            <label for="hheslo">Zopakujte heslo *:</label>
            <input type="password" id="hheslo" name="hheslo" required minlength="5" maxlength="15">
        </p>
        <p>
            <input type="submit" value="odeslat" name="odeslat">
            <input type="reset" value="Vymazat formulář">
        </p>
        <p><i>Údaje označeny hvězdičkou je nutno vyplnit.</i></p>
    </fieldset>
</form>
    <?php

    if (isset($_POST["odeslat"])){
        if ($_POST["heslo"]!==$_POST["hheslo"]){
            echo "Hesla se neshodují, zkuste to znovu.";
        }else{
            $jmeno=$_POST["jmeno"];
            $prijmeni=$_POST["prijmeni"];
            $mail=$_POST["mail"];
            $ubyt=$_POST["ubyt"];
            $strava=$_POST["strava"];
            $datum=$_POST["datum"];
            $noci=$_POST["noci"];
            $lidi=$_POST["lidi"];
            $parkovani=$_POST["parkovani"];

            echo "<fieldset> <legend><b>Shrnutí</b></legend>";
            echo "<p>".strtoupper($jmeno)." ".strtoupper($prijmeni)."</p>";
            echo "<p>".$mail."</p>";
            echo "<p>pokoj: ".$ubyt."</p>";
            echo "<p>Stravování :".$strava."</p>";
            echo "<p>Datum příjezdu:".$datum."</p>";
            echo "<p>Počet nocí :".$noci."</p>";
            echo "<p>Počet lidí :".$lidi."</p>";
            if (isset($parkovani)){
                echo"<p>S parkováním</p>";
            }else{echo"<p>Bez parkování</p>";}

            if ($ubyt="pokoj"){
                $cenaubyt=600*$noci;
            }elseif ($ubyt="chatka"){
                $cenaubyt=400*$noci;
            }else{
                $cenaubyt=400*$noci;
            }
            if ($strava="snidane"){
                $cenastravy=150*$noci*$lidi;
            }elseif($strava="polopenze"){
                $cenastravy=500*$noci*$lidi;
            }else{
                $cenastravy=0;
            }
            if (isset($parkovani)){
                $cenapark=100*$noci;
            }
            $cenacelk=$cenastravy+$cenaubyt+$cenapark;

            echo "<p><b>Ceny</b></p>";
            echo"<p>Cena ubytování: ".$cenaubyt."Kč</p>";
            echo"<p>Cena stravy: ".$cenastravy."Kč</p>";
            if (isset($parkovani)){
                echo"<p>Cena parkování: ".$cenapark."Kč</p>";
            }
            echo"<p>Celková cena: ".$cenacelk."Kč</p></fieldset>";
        }
    }
    ?>
</body>
</html>