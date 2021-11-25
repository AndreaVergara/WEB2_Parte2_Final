{include file="templates/header.tpl" }
<h1>{$titulo}</h1>
 
<div class="container">
    <table class="table table-hover tabla tablaAncho mx-auto" >
        <thead>
        <tr>
            <th>Autores</th>
        </tr>
        </thead>
        <tbody>
            {foreach from=$autores item=$autor}
                <tr>
                    <td><a href="viewBooksOfAuthor/{$autor->id_autor}/{$autor->nombre}/{$autor->apellido}">{$autor->nombre} {$autor->apellido}</a></td>
                </tr>
            {/foreach}
        </tbody>
  </table>
</div>

    
    

{include file="templates/footer.tpl" }