{include file="header.tpl"}

<!-- tabla de marcas -->
<table class="table">
  <thead>
      <tr>
        <th scope="col">Brand</th>
        <th scope="col">Country</th>
        <th scope="col">Foundation</th>
        <th scope="col">Website</th>
        {if !isset($smarty.session.USER_ID)} 
          {else}
          <th scope="col">Borrar</th>
          <th scope="col">Editar</th>
        {/if}
      </tr>
  </thead>
  <tbody>
    {foreach from=$cafe item=$brand}
        <tr>
        <th scope="row"><a href="viewBrandProducts/{$brand->brand_ID}" class="mylists"> {$brand->name} </a></th>
        <td>{$brand->country}</td>
        <td>{$brand->foundation}</td>
        <td>{$brand->website}</td>
        {if !isset($smarty.session.USER_ID)} 
          {else}
          <td><a class="btn btn-outline-danger" href="deleteBrand/{$brand->brand_ID}">Borrar</a> </td>
          <td><a class="btn btn-outline-success" href="editBrandForm/{$brand->brand_ID}">Editar</a></td>
        {/if}
        </tr>
    {/foreach}
  </tbody>
</table>

{include file="footer.tpl"}