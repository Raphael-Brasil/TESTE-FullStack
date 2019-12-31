  <!-- Corpo todo -->
  <?php header('Content-Type: text/html; iso-8859-1');
  $Page = $_POST['int'];
  require(__DIR__.'/../connect.php');
  $qryLista = mysqli_query($con, "SELECT * FROM modulos Where N_Mod = '$Page'");
  while($resultado = mysqli_fetch_array($qryLista)){  
  ?>
  <div class="container container2">
  <div class="row">  
  <div class="title"><h4>Módulo</h4></div>
  <div class="title2"><a href="/" class="btn btn3">Voltar</a></div>
  </div> 
  <div class="row"> 
  <div class="iconbkmodel" style="            
          background-color: <?php echo $resultado['Back_Cor']; ?>;
       ">
    <div class="Titlemodel"  style="
  background-color: <?php echo $resultado['Tit_Cor']; ?>;
  "><?php echo $resultado['Tit_Mod']; ?></div>    
  <i class="<?php echo $resultado['Sign_Mod']; ?>" style="
            font-size: 7rem; 
  "></i>
  </div>
  <div class="descr"><h5 style="font-weight: bold;"><?php echo $resultado['Ref_Mod']; ?></h5>
  <p><?php echo $resultado['Comm_mod']; ?></p>
  <spam class="btn btn2" onclick="contratar(<?php echo $resultado['N_Mod']; ?>)"><?php echo $resultado['Stat_mod']; ?></spam>
  </div>
 
</div>
<div class="row texmodel"> 
</br><h5 style="font-weight: bold;">Sobre o módulo</h5>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et risus in tellus accumsan placerat in interdum justo. Ut et mauris auctor, auctor ex
vitae, faucibus eros. Proin eu est risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec
pellentesque metus. Phasellus cursus suscipit nulla, eget fringilla arcu blandit laoreet. Pellentesque et facilisis tortor, sed sollicitudin risus.</br></br>
Cras cursus enim elit, id tincidunt ligula lacinia vel. Mauris sit amet libero quis justo auctor laoreet. Praesent viverra turpis arcu, in imperdiet nibh
auctor eu. Proin venenatis non justo vel tristique. Donec sed lacus faucibus, sollicitudin risus quis, accumsan elit. Phasellus nec quam vel ligula
ullamcorper maximus a ac massa. Sed diam turpis, placerat at maximus a, eleifend a diam. Aliquam hendrerit mauris elit, et luctus orci blandit sed.
Suspendisse fermentum leo justo, vitae vulputate dolor fringilla id. Vestibulum efficitur, ex a vulputate eleifend, nunc dolor vehicula lorem, a cursus
eros arcu et leo.</p>        
  </div>  
</div><!-- Div do corpo --> 

<?php 
  }
?>
   