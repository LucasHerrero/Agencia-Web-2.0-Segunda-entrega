
console.log("HOlaA");

console.log("HOlaA");
const offcanvas = document.querySelector("nav.offcanvas");
const enlace_menu_usuario = document.querySelector("a#menu_usuario");

if(enlace_menu_usuario) enlace_menu_usuario.addEventListener("click", function(){
    offcanvas.classList.toggle("reveal");
    
    console.log("HOlaAREVEAL");
})