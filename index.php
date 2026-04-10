<?php 
    try {
        include_once 'includes/templates/header.php';  
        require_once 'includes/funciones/conexion.php';
    } catch(Exception $e) {
        echo "Error : " . $e->getMessage();
    }
 ?>

        <form method="post" action="index.php">
            <div class="contenedor">
                <h2>LOGIN</h2>
                
                <div class="info-login">    
                    <div class="campo clearfix">
                        <label for="usuario">Usuario:</label>
                        <input type="text" name="usuario" id="usuario" placeholder="Ingrese su Usuario" required="">

                    </div><!--.campo-->

                    <div class="campo">
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password" id="password" placeholder="****************" required="">

                    </div><!--.campo-->

                    <div class="campo">
                        <input type="submit" class="button" value="INGRESAR">
                    </div><!--.campo-->

                </div><!--.info-login-->

            </div><!--.contenedor-->
            
        </form><!--.login-->        

<?php include_once 'includes/templates/footer.php'; ?>
