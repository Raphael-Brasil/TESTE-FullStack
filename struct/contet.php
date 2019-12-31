<!-- Corpo todo -->
<div class="container">
  <!-- Quatros itens de cima -->
  <div class="row">
  <?php
  $qryLista = mysqli_query($con, "SELECT * FROM modulos");  
   while($resultado = mysqli_fetch_array($qryLista)){     
  if($resultado['N_Mod']==5){
  ?>
  </div> <!-- Div da row de cima -->  
  <div class="row"><!-- Div da row de baixo -->  
  <?php
  }
  ?>

                    <script type="text/javascript" charset="utf-8">
                    preencher("<?php echo $resultado['N_Mod']; ?>",
                              "<?php echo $resultado['Tit_Cor']; ?>",
                              "<?php echo $resultado['Tit_Mod']; ?>",
                              "<?php echo $resultado['Back_Cor']; ?>",
                              "<?php echo $resultado['Sign_Mod']; ?>",
                              "<?php echo $resultado['Ref_Mod']; ?>",
                              "<?php echo $resultado['Comm_mod']; ?>",
                              "<?php echo $resultado['Stat_mod']; ?>"
                              );
                    </script>
                    <div class="col" id="col<?php echo $resultado['N_Mod']; ?>">    
                   </div>
                   <?php
  }
 
  
?>
 </div> <!-- Div da row de baixo --> 
</div><!-- Div do corpo --> 