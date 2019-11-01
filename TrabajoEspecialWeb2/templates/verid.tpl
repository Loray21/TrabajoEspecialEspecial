<div class="container">
<select name=id_categoria>
{foreach from=$cat item=p}
  <option value="{$p->id_categoria}">{$p->nombre}<span>:</span>{$p->id_categoria}</option>
            {/foreach}
</select>

</div>