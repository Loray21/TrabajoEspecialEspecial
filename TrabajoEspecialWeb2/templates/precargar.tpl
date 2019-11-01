        {include file="header.tpl"}
        <form action="editarProducto/{$hola->id_producto}"  method="POST">  
             <select name=id_categoria>
             {foreach from=$cat item=p}
  <option value="{$hola->id_categoria}" >{$p->nombre}</option>
              {/foreach}

</select>
                <input class="form-control" type="text"  name=nombre placeholder="" value={$hola->nombre}>
                <input class="form-control" type="text"  name=descripcion placeholder="Descripcion" value={$hola->descripcion}>
                <input class="form-control" type="number"  name=precio placeholder="precio" value={$hola->precio}>
                 <input class="form-control" type="text"  name=foto  placeholder="foto"     value={$hola->foto}>
                 <input type="submit"  value=editar;  class="btn btn-primary mr-2"editar>

        </form>

