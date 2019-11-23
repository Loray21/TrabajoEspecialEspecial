{literal}
<section id="template-vue-Comentarios">

    <h3> {{ subtitle }} </h3>

    <ul id=comentario   data-comentario= {{coment.id_comentario}}> 
       <li v-for="coment in comentarios">

        {{ coment.usuario }} - {{coment.comentario}}-{{coment.puntaje}}<button id="borrar" v-bind:disabled="isButtonDisabled">borrar</button>


           </span>
       </li> 
    </ul>

</section>
{/literal}