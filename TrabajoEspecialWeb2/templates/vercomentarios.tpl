{include file="header.tpl"}
            
            
            {include file="vue/Comentarios.tpl"}

            

            <form id="form-comentario" action="insertar" method="post">
                    {if isset($userName)}

                <input type="text" name="usuario" placeholder="usuario">
                <input type="text" name="comentario" placeholder="comentario">
                <input type="text" name="id_producto" placeholder="id">
                <select name="puntaje">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>


                <input type="submit" value="agregar">

            </form>
            {/if}

        <script src="js/comentarios.js"></script>
    </body>
</html>