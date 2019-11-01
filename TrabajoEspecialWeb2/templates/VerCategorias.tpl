{include file="header.tpl"}

<div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categorias
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              {foreach from=$lista_categoria item=p}

    <a class="dropdown-item" href="Categoria/{$p->id_categoria}">{$p->nombre}</a>              
    {if isset($userName)}
- <a href='borrarCat/{$p->id_categoria}'>Borrar</a></td><td> 
- <a href='precargarcat/{$p->id_categoria}'>editar</a></td><td> 

{/if}

             {/foreach}

  </div>
</div>

              {if isset($userName)}
            
            <form action="AgregarCategoria" method="POST">
    <div class="container">
        <input class="form-control" type="text"  name="nombre" placeholder="nombre">
        <input class="form-control" type="text"  name="foto" placeholder="ponga la url de la imagen">
        <input class="form-control" type="text"   name="descripcion" placeholder="Descripcion">
        <input type="submit"  value=Agregar  class="btn btn-primary mr-2">
</form>

    </div>
 {/if}

             <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Supermecado mrh</p>
    </div>
    <!-- /.container -->
  </footer>
            
   </body>
        </html>
