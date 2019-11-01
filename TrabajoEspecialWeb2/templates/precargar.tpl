        {include file="header.tpl"}

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <form action="editarProducto/{$hola->id_producto}"  method="POST">  
             <select name=id_categoria>
  <option value="{$hola->id_categoria}" >{$hola->id_categoria}</option>
</select>
                <input class="form-control" type="text"  name=nombre placeholder="" value={$hola->nombre}>
                <input class="form-control" type="text"  name=descripcion placeholder="Descripcion" value={$hola->descripcion}>
                <input class="form-control" type="number"  name=precio placeholder="precio" value={$hola->precio}>
                 <input class="form-control" type="text"  name=foto  placeholder="foto"     value={$hola->foto}>
                 <input type="submit"  value=editar;  class="btn btn-primary mr-2"editar>

        </form>

