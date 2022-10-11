{include file="header.tpl"}

<ul class="list-group">
    {foreach from=$products item=$product}
    <li class="list-group-item list-group-item-warning">{$product->name} </li>
    {/foreach}
 
    <a href="../brands" class="btn btn-outline-success" >Volver a las marcas</a>
 
</ul>



{include file="footer.tpl"}