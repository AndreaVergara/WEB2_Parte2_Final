{include file="templates/header.tpl" }

<div class="row">

    <div class="col-sm-3 card mx-auto mt-3 detalleLibro colorFondo colorLetra">
        <div class="card-body">
            <h1 class="card-title">{$titulo}</h1>
            <p class="card-text">{$libro -> sinopsis}</p>
        </div>
        <ul class="list-group list-group-flush ">
            <li class="list-group-item colorFondo colorLetra">Autor: {$autor}</li>
            <li class="list-group-item colorFondo colorLetra">Año de publicación: {$libro->anio}</li>
        </ul>

    </div>




    {if isset($userRol)} {* si no está vacio *}
        <div class="col-sm-3 card mx-auto mt-3 detalleLibro colorFondo">
            <h3>Ingrese Comentario</h2>
                <form id="form-comentario">
                    <div class="card-body">
                        <h3 class="card-title"> Puntuación: </h1>

                            <input type="radio" name="puntuacion" value="1" required>
                            <label for="1">1</label>
                            <input type="radio" name="puntuacion" value="2">
                            <label for="2">2</label>
                            <input type="radio" name="puntuacion" value="3">
                            <label for="3">3</label>
                            <input type="radio" name="puntuacion" value="4">
                            <label for="4">4</label>
                            <input type="radio" name="puntuacion" value="5">
                            <label for="5">5</label>

                            <h3 class="card-title"> Comentario: </h1>
                                <textarea class="form-control" name="comentario" id="" cols="10" rows="4"
                                    required></textarea>
                                <input type="submit" class="btn btn-success " value="Comentar">
                    </div>
                </form>
        </div>


    {/if}
</div>
<div id="appComentarios" class="{$libro->id_libro}/{$userId}/{$userRol}">
    {include file="templates/vue/comentariosList.tpl" }
    
</div>

<script type="text/javascript" src="js/app.js"></script>
{include file="templates/footer.tpl" }