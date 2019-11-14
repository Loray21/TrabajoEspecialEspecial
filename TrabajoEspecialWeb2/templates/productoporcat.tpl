{include 'templates/header.tpl'}
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
{foreach from=$Categoria item=p}

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{$p->foto}" alt=""></a>
                            </div>

              <div class="card-body">
                <h4 class="card-title">
                  <a href="producto/{$p->id_producto}">{$p->nombre} </a> 
                </h4>
                <h5>{$p->precio}</h5>
               <h5>{$p->nombre}</h5>
                <p class="card-text"{$p->descripcion}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
            {/foreach}
                 </div>
