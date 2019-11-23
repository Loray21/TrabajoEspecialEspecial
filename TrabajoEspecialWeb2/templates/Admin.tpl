{include file="header.tpl"}
<ul class="list-group">
{foreach from=$usuarios item=u}

  <li class="list-group-item">{$u->username}{if !$u->admin==1} - <a href='AsignarAdmin/{$u->id}'>hacer admin</a>{/if}- {if $u->admin==1}<a href='QuitarAdmin/{$u->id}'>eliminar admin</a>{/if}</li>

             {/foreach}

</ul>
