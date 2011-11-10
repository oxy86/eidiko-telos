 <?php

function calculate_telos($tetragwnika, $ilikia, $timi_zonis){
        if ($bmi < 19.5) {
                echo " <br /> <br /> ?????? ?????????? ???? ????!";
        }
        elseif ($bmi > 19.5 && $bmi < 24.9 ) {
                        echo " <br /> <br /> ?? ????? ??? ????? ????????.";
        }
        elseif ($bmi > 24.9 && $bmi < 29.9 ) {
                echo " <br /> <br /> ????? ???? ???????? ????. ???? ?? ???? ??????? ?? ?? ???????...";
        }
        elseif ($bmi > 29.9 && $bmi < 40 ) {
                echo " <br /> <br />????? ?????? ???????? ????! ?????????? ???? ??? ??????????? ??????...";
        }
        else {
                echo " <br /><br /> ????? ????? ???????? ???? ??? ??? ?? ???????? ?????? ??? ?? ???? ???! ????????? ??????...";
        }
}


        if (! isset($_POST['tetragwnika'])) {
                echo ' Υπολογιστής Ειδικού τέλους ακινήτων'; 
        }
?>



<?php

   if (isset($_POST['tetragwnika'])) {
     if ( isset($_POST['ilikia']) && isset($_POST['timi_zonis']) ) {
        calculate_telos($_POST['tetragwnika'],$_POST['ilikia'], $_POST['timi_zonis']  );
     } else {
       echo "<br /><span style=\"color: red;\">Συμπληρώστε σωστά όλα τα πεδία</span>";
        $_POST['tetragwnika'] == '';
     }
   } else {
        $_POST['tetragwnika'] == '';
 ?>

 <form method="post">
         Τετραγωνικά: <input type="text" name="tetragwnika" size="4" maxlength="3" class="form"><br><br>
	 Ηλικία ακινήτου: <select name="ilikia" class="form">
				  <option value="0-4">0 ως 4 έτη</option>
				  <option value="5-9">5 ως 9 έτη</option>
				  <option value="10-14">10 ως 14 έτη</option>
				  <option value="15-19">15 ως 19 έτη</option>
				  <option value="20-25">20 ως 25 έτη</option>
				  <option value="26">πάνω από 26 έτη</option>
				</select>
	<br />
	Τιμή Ζώνης: <select name="timi_zonis" class="form">
				  <option value="500">έως €500</option>
				  <option value="1000">€501 έως €1000</option>
				  <option value="1500">€1001 έως €1500</option>
				  <option value="2000">€1501 έως €2000</option>
				  <option value="2500">€2001 έως €3000</option>
				  <option value="3000">€3001 έως €4000</option>
				  <option value="4000">€4001 έως €5000</option>
				  <option value="5000">πάνω €5001</option>
				</select>
	<br />
	Βρείτε την τιμή ζώνης για το ακίνητο σας <a href="http://www.gsis.gr/ANTIKEIMENIKES_AXIES_2007/PERIFEREIES.html">ΕΔΩ</a>
        <br /><br />
        <input type="submit" name="submit0" value="submit" class="formbtn" onClick="Enter()" style="margin-bottom:5px;">
</form>




<?  } ?>