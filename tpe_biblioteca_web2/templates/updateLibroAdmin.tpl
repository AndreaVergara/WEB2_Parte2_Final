{include file="templates/header.tpl" }


<div class="card mx-auto mt-3 detalleLibro colorFondo">
    <form action="edicionLibro/{$libro->id_libro}" method="POST">
        <div class="card-body">
            <h1 class="card-title"> Título: 
            <input class="form-control" type="text" name="titulo" value="{$libro->titulo}" required>
            </h1>  
            <p class="card-text"> Sinopsis: 
                <textarea class="form-control" name="sinopsis" id="" cols="50" rows="7">{$libro -> sinopsis}</textarea>
            </p>
        </div>
        <ul class="list-group list-group-flush">

            <li class="list-group-item border-top colorFondo"> Autor: 
                <select name="autor" class="form-select">
                    {foreach from=$autores item=$autor}

                        <option value="{$autor->id_autor}" {if {$libro->id_autor}=={$autor->id_autor}} selected {/if}>
                            {$autor->nombre}
                            {$autor->apellido}</option>
                    {/foreach}

                </select>
            </li>

            <li class="list-group-item colorFondo"> Año de publicación: <input type="text" name="anio" class="form-control" value="{$libro->anio}" required></li>
            <li class="list-group-item mx-auto colorFondo"><input type="submit" class="btn btn-success " value="Editar"></li>
            
        </ul>

    </form>
</div>

{include file="templates/footer.tpl" }