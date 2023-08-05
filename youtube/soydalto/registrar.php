<?php

      include("con_db.php");

      // if ($conex) {
      //       echo "todo correcto";            
      // } else{
      //       echo "ha ocurrido algo mal";
      // }

      if (isset($_POST['register'])) {
            if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
                  $name = trim($_POST['name']);
                  $email = trim($_POST['email']);
                  //con trim removemos el espacio del inicio y el final
                  $fechareg = date("d/m/y");
                  $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name', '$email', '$fechareg')";
                  $resultado = mysqli_query($conex,$consulta);
                  if ($resultado) {
                              ?>
                              <h3 class="ok">TE HAS INSCRITO PERFECTAMENTE</h3>
                        <?php
                  } else {
                              ?>
                              <h3 class=bad>LO SENTIMOS HA OCCURRIDO UN ERROR</h3>
                        <?php
                        }
            }     else {
                              ?>
                              <h3 class=bad>POR FAVOR COMPLETE LOS CAMPOS</h3>
                        <?php                 
            }
      }
?>