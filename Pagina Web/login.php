<?php require("views/parts/head.php"); ?>
<body id="loginB">
    <header id="loginHeader">
      <a href="index.php"><img src="Static/img/1_bg.png" alt=""></a>
      
    </header>
    <main>
      
    
        <div id="login">
            <div id="h2Inicio">

                <h2>Inicia sesion</h2>    
            </div>
        <form action="" method="post">
            

                    <div class="inputBox">
                    <label for="user">Nombre de usuario:</label>
                    <input type="text" name="user" id="user" >
                    </div>

                    <div class="inputBox">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password">
                    </div>
                    
                    <div class="checkboxDiv">
                    <label for="checkbox"> <input type="checkbox" name="recuerdame" id="recuerdame">Recuerdame </label>
                   <br> 
                   <div id="linkLog">
                       <a href="#">¿Olvidó su contraseña?</a>
                    </div>
                    </div>

                    
                    <input type="submit" value="Acceder" id="submit">
                    <div class="sumbit">
                    <p>¿No tiene cuenta? <a href="register.php">Registrese</a></p>
                    </div>

            

            </form>
        </div>
    </main>

<?php require("views/parts/footer.php"); ?>

