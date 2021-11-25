{include file="templates/header.tpl" }
<h1>Libros del autor</h1>
<div class="container">
    <table class="table table-hover  tabla tablaAncho mx-auto" >
        <thead>
        <tr>
            <th>{$nombre} {$apellido}</th>
        </tr>
        </thead>
        <tbody>
            {foreach from=$librosAutor item=$libro}
                <tr>
                    <td><a href="viewBook/{$libro->id_libro}/{$nombre}/{$apellido}"> {$libro->titulo} </a></td>
                </tr>
            {/foreach}
        </tbody>
  </table>
</div>

    
    

{include file="templates/footer.tpl" }