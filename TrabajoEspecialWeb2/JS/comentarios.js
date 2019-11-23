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
    let p=document.getElementById("producto");
    let id=p.dataset.producto;
    fetch('api/producto/comentarios '+"/"+id)
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

    fetch('api/producto/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
         getComentarios();
     })
     .catch(error => console.log(error));
}


async function borrar(id){ 
    try{
        let r = await fetch('api/producto/comentario'+"/"+id,{
            "method": "DELETE"
        });
        let json = await r.json();
        console.log(json);
    
        }catch(e){
            console.log(e);
        } 
}
getComentarios();

// obtiene las tareas al iniciio
