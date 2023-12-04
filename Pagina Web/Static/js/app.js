console.log("loading...");
// SELECTORES

var editModal = document.getElementById('editModal');
var botonesBorrar = document.querySelectorAll('table#dailies .deleteEntry');
var botonesEditar = document.querySelectorAll('table#dailies .editEntry');
var botonGuardar = document.getElementById('saveChanges');

const offcanvas = document.querySelector("nav.offcanvas");
const enlace_menu_usuario = document.querySelector("a#menu_usuario");

if(enlace_menu_usuario) enlace_menu_usuario.addEventListener("click", function(){
    offcanvas.classList.toggle("reveal");
    
    console.log("HOlaAREVEAL");
})


// LOGICA BORRAR 

botonesBorrar.forEach(function (botonBorrar) {
    botonBorrar.addEventListener('click', function () {
        var confirmacion = confirm("¿Estás seguro de que deseas borrar el registro?");
        if (confirmacion) {
            alert("Registro borrado exitosamente");
        } else {
            alert("Acción de borrado cancelada");
        }
    });
});


// CAMBIO DE ESTILO PARA VER EL MODAL EDICION ACTIVIDADES

function toggleEditModal() {
    if (editModal.style.display === 'none') {
        editModal.style.display = 'block';
    } else {
        editModal.style.display = 'none';
    }
}


botonesEditar.forEach(function (botonEditar) {
    botonEditar.addEventListener('click', toggleEditModal());
    console.log("botono editar")
});

