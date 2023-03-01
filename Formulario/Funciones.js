
const formulario = document.querySelector("#formulario");

//crea el evento
formulario.addEventListener( "submit", validarFormulario )


//mis funciones
function validarFormulario(e){
    e.preventDefault();
    const nombre = document.querySelector("#nombre").value
    const edad = document.querySelector("#edad").value
    const direccion = document.querySelector("#direccion").value
    const carrera = document.querySelector("#carrera").value

    const Datos = document.getElementById("Datos");
    Datos.textContent = `Hola ${nombre}, tienes la edad de ${edad} años, vives en ${direccion} y estudias la carrera de ${carrera}`
    
}