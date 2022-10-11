{include file="header.tpl"}


<!-- tabla de productos -->
<table class="table">
  <thead>
      <tr>
        <th scope="col">Product</th>
        <th scope="col">Milliliters(ml)</th>
        <th scope="col">Price</th>
        <th scope="col">Brand</th>
        {if !isset($smarty.session.USER_ID)}
          {else}
        <th scope="col">Borrar</th>
        <th scope="col">Editar</th>
          {/if}
    </tr>
  </thead>
  <tbody>
    {foreach from=$products item=$product}
        <tr>
        <th scope="row"><a href="viewProduct/{$product->product_ID}" class="mylists" >{$product->name}</a></th>
        <td>{$product->milliliters}</td>
        <td>${$product->price}</td>
        <td>{$product->brands}</td>
        {if !isset($smarty.session.USER_ID)} 
          {else}
          <td><a class="btn btn-outline-danger" href="deleteProduct/{$product->product_ID}">Borrar</a> </td>
          <td><a class="btn btn-outline-success" href="updateProduct/{$product->product_ID}">Editar</a></td>
        {/if}
        
        </tr>
    {/foreach}
  </tbody>
</table>
{include file="footer.tpl"}
