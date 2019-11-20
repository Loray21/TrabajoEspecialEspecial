"use strict"

// event listeners
document.querySelector("#form-comentario").addEventListener('submit', AgregarComentario);

// define la app Vue
//inicia vue;
let app = new Vue({
    el: "#template-vue-Comentarios",
    data: {
        subtitle: "Comentarios",
        comentarios: [], 
    }
});

/**
 * Obtiene la lista de tareas de la API y las renderiza con Vue.
 */
function getComentarios() {
    fetch("api/comentarios")

    .then(response => response.json())
    .then(comentarios => {
        app.comentarios = comentarios; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}

/**
 * Inserta una tarea usando la API REST.
 */
function AgregarComentario() {
    
    let data = {
        usuario:  document.querySelector("input[name=usuario]").value,
        comentario:  document.querySelector("input[name=comentario]").value,
        id:  document.querySelector("input[name=id_producto]").value,

    }
    console.log(data);

    fetch('api/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
         getComentarios();
     })
     .catch(error => console.log(error));
}

// obtiene las tareas al iniciio
getComentarios();
