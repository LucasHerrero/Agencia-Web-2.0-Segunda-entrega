<?php require("views/parts/header.php"); ?>
<section id="formVentas">

    <form action="#">
        <fieldset>
            <legend>formulario para solicitar presupuesto!</legend>
            <div>
               

                    <label for="Nombre">Nombre</label><br>
                    <input type="text" name="Nombre" id="Nombre" placeholder="Nombre">
                
            </div>
            <div>
                <label for="Apellido">Apellido</label><br>
                <input type="text" name="apellido" id="apellido" placeholder="apellido">
            </div>
            <div class="selectDiv">
    <label for="Paquete">Elige un paquete!</label>
                <select name="paquete" id="paqueteSelector">
                    <option value="" disable selected hidden>Elige un paquete!</option>
                    <option value="Basico">Basico</option>
                    <option value="Medio">Medio</option>
                    <option value="Premiun">Premiun</option>
                </select>
            </div>
            <div>
                <label for="Telefono">Telefono</label><br>
                <input type="number" name="Telefono" id="Telefono" placeholder="Telefono">
            </div>
            <div>
                <label for="email">E-mail</label><br>
                <input type="email" name="email" id="email" placeholder="nombre@mail.com">
            </div>
            <div class="selectDiv">
                <label for="Pais">Pais</label>
                <select name="Pais" id="PaisSelector">
                    <option value="" disable selected hidden>Seleccione su pais!</option>
                    <option value="España">España</option>
                    <option value="Argetina">Argetina</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Alemania">Alemania</option>
                    <option value="Rusia">Rusia</option>
                    <option value="Estados Unidos">Estados Unidos</option>
                    <option value="Estados Unidos">Otro</option>
                </select>
            </div>
            <div>
                <label for="Ciudad">Ciudad</label><br>
                <input type="text" name="Ciudad" id="Ciudad" placeholder="Ciudad">
            </div>
            <div>
                <label for="Sector comercial">Sector comercial</label><br>
                <input type="text" name="SectorComercial" id="SectorComercial" placeholder="Sector Comercial">
            </div>
            <div>
                <label for="TuWeb">¿Tienes WEB? Ponla aquí!</label><br>
                <input type="text" name="TuWeb" id="TuWeb" placeholder="www.miweb.com">
            </div>
            <div class="txtArea">
                <label for="MasInfo">Explica de que va tu negocio!</label><br>
                <textarea name="" id="" cols="30" rows="4" placeholder="Explicalo aquí!"></textarea>
            </div>
        </fieldset>
    </form>
</section>

<?php require("views/parts/footer.php"); ?>