"use strict"

// event listeners
document.querySelector("#form-comentario").addEventListener('submit',AgregarComentario);
// define la app Vue
//inicia vue;
let app = new Vue({
    el: "#template-vue-Comentarios",
    data: {
        subtitle: "Comentarios",
        comentarios: [], 
    },
    methods: {
        borrar: function(id) {
            fetch('api/producto/comentarios/Borrar'+'/'+id, {
                method: 'DELETE',
                })
                .then(function(data){
                    getComentarios();
                  console.log(data);
                });
              
        }
    }

    
});


async function promedio(){

        let r = await fetch('api/producto/comentarios');
        let json = await r.json();
        let cant=0;

        for (let elem of json){
            let cant=0;
            let promedio=0;
             promedio+=elem.puntaje;
              cant++;
              console.log(promedio/cant);
             
              document.getElementById('resultado').innerHTML = cant;

    }
      let resultado=promedio/cant;
      document.getElementById('resultado').innerHTML = resultado;

}
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

console.log("llego");
    let data = {
        usuario:  document.querySelector("input[name=usuario]").value,
        comentario:  document.querySelector("input[name=comentario]").value,
        id:    document.querySelector("input[name=id_producto]").value,


    }

    fetch('api/producto/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })

     .then(response => {
    

         getComentarios();
         console.log(data);
         console.log("llego");
     })
     .catch(error => console.log(error));
}


getComentarios();
promedio();
// obtiene las tareas al iniciio
