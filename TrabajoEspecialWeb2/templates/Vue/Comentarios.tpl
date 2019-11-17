{literal}
<section id="template-vue-Comentarios">

    <h3> {{ subtitle }} </h3>

    <ul>
       <li v-for="task in tasks">

         <strike>{{ task.titulo }} - {{task.descripcion}} </strike></span>
           <span v-else> {{ task.titulo }} - {{task.descripcion}} </span> 

           <span v-if="task.finalizada == 0 && auth">
                <a data-id="{{task.id}}" class="btn-eliminar" href="#">eliminar</a>
                <a data-id="{{task.id}}" class="btn-completar" href="#">completar</a>
           </span>
       </li> 
    </ul>

</section>
{/literal}