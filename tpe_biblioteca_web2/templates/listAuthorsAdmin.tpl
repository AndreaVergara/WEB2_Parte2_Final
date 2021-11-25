{include file="templates/header.tpl" }
<h1>{$titulo}</h1>
<div class="container">
    <table class="table table-hover tabla">
        <tbody>
            {foreach from=$autores item=$autor}

                {if {$idAutor}=={$autor->id_autor}}
                    <tr>
                        <form action="updateAuthorSave/{$autor->id_autor}" method="POST">
                            <td>
                                <div class="d-flex justify-content-start col-md-8">
                                    <input type="text" class="form-control" name="nombre" value="{$autor->nombre}" required>
                                    <input type="text" class="form-control" name="apellido" value="{$autor->apellido}" required>
                                </div>
                            </td>
                            <td class="d-flex justify-content-end">
                            <div class="d-flex justify-content-around anchoCeldaBtn" >
                                <input type="submit" class="btn btn-outline-success" value="Guardar">
                            </div>
                            </td>
                        </form>
                    </tr>
                {else}
                    <tr>
                        <td>
                            {$autor->nombre} {$autor->apellido}
                        </td>
                        <td class="d-flex justify-content-end">
                        <div class="d-flex justify-content-around anchoCeldaBtn" >
                            <a href="updateAuthor/{$autor ->id_autor}" class="btn btn-outline-dark">Editar</a>
                            <input type="button" id="botonAutor{$autor ->id_autor}" name="{$autor ->id_autor}"
                                class="btn btn-outline-dark" value="Borrar">
                        </div>
                        </td>
                    </tr>
                {/if}

            {/foreach}


        </tbody>
    </table>
</div>

<div class="container border p-5 colorFondo tablaAncho">
    <h2>Agregar Nuevo Autor </h2>

    <form action="addAutor" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="col">
                <input type="text" name="apellido" class="form-control" placeholder="Apellido" required>
            </div>
        </div>
        <div class="pt-4">
            <input type="submit" class="btn btn-success" value="Agregar">
        </div>
    </form>
</div>


<dialog id="deleteConfirm" class="border border-danger">
    <p>Advertencia. Al borrar el autor se borrarán todos sus libros. </p>
    <div>
        <input type="button" id="btn-cancelar" class="btn btn-secondary" value="Cancelar">
        <a href="deleteAuthor/" id="btnBorrardoDefinitivo" class="btn btn-danger">Borrar</a>
        
    </div>
</dialog>


<script type="text/javascript" src="js/main.js"></script>


{include file="templates/footer.tpl" }