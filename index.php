<?php 
    @$alas = $_GET['alas'];
    @$tinggi = $_GET['tinggi'];
    @$sisi_miring = $_GET['sisi_miring'];
    @$luas = 1/2 * $alas * $tinggi;
    @$keliling = $tinggi + $sisi_miring + $alas;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>SEGITIGA SIKU-SIKU</title>
    </head>
    <body>
	<h3>SEGITIGA SIKU-SIKU</h3>
        <form method="GET">
            <table>
                <tr>
                    <td>alas</td>
                    <td>=</td>
                    <td><input type="text" name="alas" value="<?php echo $alas; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>tinggi</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>sisi miring</td>
                    <td>=</td>
                    <td><input type="text" name="sisi_miring" value="<?php echo $sisi_miring; ?>"/>cm<br/></td>
                </tr>
                
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Luas Segitiga = ".$luas." cm^2<br/>";
                echo "Keliling Segitiga = ".$keliling." cm";
            ?>
        </form>
    </body>
</hmtl>
