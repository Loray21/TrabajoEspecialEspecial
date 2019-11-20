{include 'templates/header.tpl'}

  <!-- Page Content -->
  <div class="container-fluid">
  <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ordenar por
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="OrdenarPorPrecio">precio de menor a mayor</a>
  </div>
</div>
  <div class="container">


    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Supermecado Marano</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

        <div class="row">
{foreach from=$lista_Productos item=p}
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="producto/{$p->id_producto}"><img class="card-img-top" src="{$p->imagen}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="producto/{$p->id_producto}">{$p->nombre} </a> 
                  {if isset($userName)}
- <a href='borrar/{$p->id_producto}'>Borrar</a></td><td>
<a href='precargar/{$p->id_producto}'>editar</a></td></tr>
{/if}
                </h4>
                <h5><span>$</span>{$p->precio}</h5>
               <h5>{$p->categoria}</h5>
                <p class="card-text"{$p->descripcion}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          {/foreach}

        </div>
</div>
</div>

{if isset($userName)}

<form action="agregar"  method="POST" enctype="multipart/form-data">  
<div class="container">
<select name=id_categoria>
{foreach from=$cat item=p}
  <option value="{$p->id_categoria}">{$p->nombre}</option> 
            {/foreach}
</select>
</div>
        <input class="form-control" type="text"  name="nombre" placeholder="nombre">
        <input class="form-control" type="number"  name="precio" placeholder="precio">
        <input class="form-control" type="text"   name="descripcion" placeholder="Descripcion">
        <input class="form-control" type="file"   name="imagen" placeholder="foto">
        <input type="submit"  value=agregar; class="btn btn-primary mr-2"Agregar>

</form>
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
