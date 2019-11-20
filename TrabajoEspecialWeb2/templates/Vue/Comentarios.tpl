{literal}
<section id="template-vue-Comentarios">

    <h3> {{ subtitle }} </h3>

    <ul>
       <li v-for="coment in comentarios">

        {{ coment.usuario }} - {{coment.comentario}}

           </span>
       </li> 
    </ul>

</section>
{/literal}