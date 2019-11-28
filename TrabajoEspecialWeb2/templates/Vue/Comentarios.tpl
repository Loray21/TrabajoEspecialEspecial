{literal}

<section id="template-vue-Comentarios">

    <h3> {{ subtitle }} </h3>

    <ul id=comentario  > 
       <li v-for="coment in comentarios">
        {{ coment.usuario }} - {{coment.id_comentario}} - {{coment.comentario}}- {{coment.puntaje}}-   
        <button 
           @click="borrar2(coment.id_comentario);">borrar</button>


       </li> 
    </ul>

</section>
{/literal}