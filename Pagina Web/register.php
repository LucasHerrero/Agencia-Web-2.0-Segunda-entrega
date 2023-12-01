<?php require("views/parts/head.php"); ?>
<body id="loginB">
    <header id="loginHeader">
      <a href="index.php"><img src="Static/img/1_bg.png" alt=""></a>
      
    </header>
    <main>
      
    
        <div id="login">
            <div id="h2Inicio">

                <h2>Registrese aqui!</h2>    
            </div>
        <form action="" method="post">
            
                    <div class="inputBox">
                    <label for="password">Email </label>
                    <input type="email" name="email" id="email">
                    </div>

                    <div class="inputBox">
                    <label for="user">Nombre de usuario: *</label>
                    <input type="text" name="user" id="user" >
                    </div>

                    <div class="inputBox">
                    <label for="password">Contraseña: *</label>
                    <input type="password" name="password" id="password">
                    </div>
                    <div class="inputBox">
                    <label for="password">Repita contraseña: *</label>
                    <input type="password" name="password" id="password">
                    </div>
                    <div id="sumbitBtn">

                        <input type="submit" value="Acceder" id="submit">
                    </div>
                    <div id="linkLog">
                       <a href="login.php">¿Tiene cuenta? Inicie sesion</a>
                    </div>
                    

            

            </form>
        </div>
    </main>

<?php require("views/parts/footer.php"); ?>

