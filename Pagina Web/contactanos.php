<?php require("views/parts/header.php"); ?>


<section class="form_wrap">

<section class="cantact_info">
    <section class="info_title">
        <span class="fa fa-user-circle"></span>
        <h2>INFORMACION<br>DE CONTACTO</h2>
    </section>
    <section class="info_items">
        <div class="txt1">

            <p><span class="fa fa-envelope"></span> hege.aicontact@gmail.com</p>
        </div>
        <div class="txt1">

        <p><span class="fa fa-mobile"></span>+6 278292028</p>
        </div>
        <div class="txt1">

        <p><span></span>Edificio The Green Ray, Blvr. Louis Pasteur, 47, 29010 Málaga</p>
        </div>
        <div class="txt1">

<p><span></span>De lunes a viernes, las 24 horas</p>
</div>
<div class="txt1">
    <p>Ubicacion</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d577283.0218461702!2d-4.744004833438723!3d36.93653565863331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f0bf6166591f%3A0x532593f5d0c967a4!2sVIEWNEXT!5e0!3m2!1ses!2ses!4v1700209983536!5m2!1ses!2ses" width="300px" height="200px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>



        
    </section>
</section>

<form action="" class="form_contact">
    <h2>Envia un mensaje</h2>
    <div class="user_info">
        <div class="center">
        <label for="names">Nombre *</label>
        <input type="text" id="names">
        </div>
        <div class="center">
        <label for="phone">Telefono / Celular</label>
        <input type="text" id="phone">
        </div>
        <div class="center">
        <label for="email">Correo electronico *</label>
        <input type="email" id="email">
        </div>
        <div class="mensaje">
        <label for="mensaje">Mensaje *</label>
        <textarea id="mensaje"></textarea>
        </div>
        <div class="center">
        <input type="button" value="Enviar Mensaje" id="btnSend">
        </div>
    </div>
</form>

</section>

<?php require("views/parts/footer.php"); ?>