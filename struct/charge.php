  <!-- Corpo todo -->
  <?php header('Content-Type: text/html; iso-8859-1');
  $Page = $_POST['int'];
  $Status = $_POST['verification'];
  if($Status=="Ativar"){$Status="Desativar";}Elseif($Status=="Desativar"){$Status="Ativar";}
  require(__DIR__.'/../connect.php');
  $qryLista = mysqli_query($con, 
  "UPDATE modulos
  SET Stat_mod='$Status' 
  where N_Mod = '$Page'"
  );
  ?>
  <spam id="Botao<?php echo $Page; ?>" class="btn btn1" onclick="acton(<?php echo $Page; ?>,'<?php echo $Status; ?>');"><?php echo $Status; ?></a></div></div>
   