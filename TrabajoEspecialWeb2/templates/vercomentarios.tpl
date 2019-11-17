{include file="header.tpl"}
            
            
            {include file="vue/Comentarios.tpl"}

            

            <form id="form-comentario" action="insertar" method="post">
                <input type="text" name="usuario" placeholder="usuario">
                <input type="text" name="comentario" placeholder="comentario">
                <input type="text" name="id_producto" placeholder="id">

                <input type="submit" value="Insertar">
            </form>

        <script src="js/comentarios.js"></script>
    </body>
</html>