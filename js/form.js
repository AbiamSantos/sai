const nombre = document.getElementsByName('nombre');
const correo = document.getElementsByName('correo');
const contrasenia = document.getElementsByName('contrasenia');
const form = document.getElementsByName('formulario');
//const listImputs = document.querySelectorAll('');
form.addEventListener("submit", (e) => {
    e.preventDefault();
    if(nombre.value.length < 1 || nombre.value.trim() == ''){
        
    }
    if(correo.value.length < 1 || correo.value.trim() == ''){
        
    }
});