<?php
require_once(__DIR__.'/../connect.php');
header('Content-Type: text/html; iso-8859-1');
$Page = $_POST['int'];
$Status = $_POST['verification'];
$verification = $_POST['tip'];
if($verification=="charge"){
require_once(__DIR__.'/charge.php');
}else if($verification=="contratar"){
require_once(__DIR__.'/contratar.php');
}else if($verification=="contet"){
$qryLista = mysqli_query($con, 
"UPDATE modulos
SET Stat_mod='Ativar' 
where N_Mod = '$Page'");
require_once(__DIR__.'/contet.php');
}else if($verification=="voltar"){
require_once(__DIR__.'/contet.php');
}else{
echo "Ação inválida.";
}
?>
   




 <!-- Corpo todo -->

 
      