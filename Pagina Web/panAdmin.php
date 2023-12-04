<?php require("views/parts/header.php"); ?>

<main id="content">

  

    <h2>Mis productos</h2>
    <table id="dailies">
        <colgroup>
         
            <col class="date">
            <col class="type" />
            <col class="hours" />
            <col class="activities" />
            <col class="observations" />
            <col id="modifyActivity">
            <col class="deleteActivity">
        </colgroup>
        <tr>
            <th>Nombre</th>
            <th>Fecha de creacion</th>
            <th>Precio</th>
            <th>Cantidad en stock</th>
            <th>Descripcion</th>
           <th>Editar</th>
           <th>Borrar</th>
        </tr>
        <tr>
            <td>Paquete basico</td>
            <td>13/04/2023</td>
            <td>9.99 / mes</td>
            <td>2 disponibles</td>
            <td>Caracteristicas: 
                Atencion al cliente, gestion de redes, Seo.
            </td>
            <td>
                <a class="editEntry" href="#"><img src="static/img/edit.png" alt="Editar entrada"></a>
            </td>
            <td>
                <a class="deleteEntry" href="#"><img src="static/img/delete.png" alt="Editar entrada"></a>
            </td>
        </tr>
        <tr>
        <td>Paquete medio</td>
            <td>14/04/2023</td>
            <td>19.99 / mes</td>
            <td>1 disponibles</td>
            <td>Caracteristicas: 
                Atencion al cliente, gestion de redes, Seo
                , creacion de paginas web. 
            </td>
            <td>
                <a class="editEntry" href="#"><img src="static/img/edit.png" alt="Editar entrada"></a>
            </td>
            <td>
                <a class="deleteEntry" href="#"><img src="static/img/delete.png" alt="Editar entrada"></a>
            </td>
        </tr>
        <tr>
        <td>Paquete premiun</td>
            <td>15/04/2023</td>
            <td>59.99 / mes</td>
            <td>1 disponibles</td>
            <td>Caracteristicas: 
                Atencion al cliente, gestion de redes, Seo
                , creacion de paginas web, mantenimiento de pagina web.
            </td>
            <td>
                <a class="editEntry" href="#"><img src="static/img/edit.png" alt="Editar entrada"></a>
            </td>
            <td>
                <a class="deleteEntry" href="#"><img src="static/img/delete.png" alt="Editar entrada"></a>
            </td>
        </tr>

    </table>


    <div id="editModal">
        <form class="editActivity">
            <h2>Editar producto</h2>
            <label>Fecha</label>
            <input type="date">
            <label>nombre</label>
            <input type="text">
            <label>precio</label>
            <input type="number">
            <label>cantidad</label>
           <input type="number">
            <label>descripcion</label>
            <textarea></textarea>
            <button type="button" class="submit" id="saveChanges">Guardar</button>
        </form>
    </div>
  
</main>
    



<?php require("views/parts/footer.php"); ?>