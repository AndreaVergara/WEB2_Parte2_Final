{include file="templates/header.tpl" }
<h1>{$titulo}</h1>

<div class="container">

<table class="table table-hover tabla">
    <thead>
        <tr>
            <th>Libro</th>
            <th>Autor</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$biblioteca item=$libro}
            <tr>
                <td>
                    <a href="viewBook/{$libro ->id_libro}/{$libro->nombre}/{$libro->apellido}">{$libro->titulo}</a>
                </td>
                <td>
                    {$libro->nombre} {$libro->apellido}
                </td>

            </tr>
        {/foreach}


    </tbody>
</table>
</div>
{include file="templates/footer.tpl" }