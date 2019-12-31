  <!-- Corpo todo -->
  <?php header('Content-Type: text/html; iso-8859-1');
  $Page = $_POST['int'];
  $Status = "Ativar";
  require(__DIR__.'/../connect.php');
  $qryLista = mysqli_query($con, 
  "UPDATE modulos
  SET Stat_mod='$Status' 
  where N_Mod = '$Page'"
  );
  ?>
  <script type="text/javascript" charset="utf-8">
  location.reload();
  </script>
   