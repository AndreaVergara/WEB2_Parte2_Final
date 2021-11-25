{include file="templates/header.tpl" }
<h1>{$titulo}</h1>

<div class="container">

    <table class="table table-hover tabla">
        <thead>
            <tr>
                <th>Libro</th>
                <th>Autor</th>
                <th></th>
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
                    <td>
                        <a href="updateBook/{$libro ->id_libro}" class="btn btn-outline-dark">Editar</a>
                        <a href="deleteBook/{$libro ->id_libro}" class="btn btn-outline-dark">Borrar</a>

                    </td>

                </tr>
            {/foreach}


        </tbody>
    </table>
</div>

<div class="container border p-5 colorFondo" >

    <h2> Agregar nuevo libro</h2>


    <form action="addLibro" method="POST" >

        <div class="row">
            <div class="col">
                <div>
                    <label for="" class="form-label">Título</label>
                </div>
                <input type="text" class="form-control" name="titulo" placeholder="Título" required>
            </div>

            <div class="col">
                <div>
                    <label for="" class="form-label">Año de publicación</label>
                </div>
                <input type="text" class="form-control" placeholder="Año publicación" name="anio" required>
            </div>


            <div class="col">
                <div>
                    <label for="" class="form-label"> Autor:</label>
                </div>

                <select name="autor" class="form-select">
                    {foreach from=$autores item=$autor}

                        <option value="{$autor->id_autor}">{$autor->nombre} {$autor->apellido}</option>
                    {/foreach}

                </select>
            </div>
        </div>

        <p class="pt-4"> Sinopsis: </p>

        <textarea name="sinopsis" class="form-control" cols="40" rows="3"></textarea>
        <div class="pt-4">
            <input type="submit" class="btn btn-success" value="Agregar">
        </div>

    </form>
</div>


{include file="templates/footer.tpl" }