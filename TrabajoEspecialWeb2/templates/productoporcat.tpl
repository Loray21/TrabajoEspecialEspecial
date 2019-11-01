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
            {foreach from=$Categoria item=h}
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{$h->foto}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{$h->nombre} </a> 
                </h4>
                <p class="card-text"{$h->descripcion}</p>
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

<div class="row">
  <div class="col-sm-6 col-md-3">
              {foreach from=$Categoria item=h}

    <a href="#" class="thumbnail">
      <img data-src="{$h->foto}" alt="...">
                  {/foreach}

    </a>
  </div>
  ...
</div>
          <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Supermecado mrh</p>
    </div>
    <!-- /.container -->
  </footer>