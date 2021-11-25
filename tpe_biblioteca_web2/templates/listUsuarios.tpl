{include file="templates/header.tpl" }

<h1>{$titulo}</h1>
<div class="container">
<p class="container bg-light text-danger">ADVERTENCIA: Al borrar un usuario se borrarán todos sus comentarios.</p>


    <table class="table table-hover tabla">
    
        <thead>
            <tr>
                <th>id_Usuario</th>
                <th>Email</th>
                <th>Rol</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$usuarios item=$usuario}
                <tr>
                    <td>
                        {$usuario->id_usuario}
                    </td>
                    <td>
                        {$usuario->email} 
                    </td>
                    <td>
                    {if $usuario->esAdministrador==1}  
                        Administrador
                    {else}
                        Usuario
                    {/if}
                    </td>
                    <td>
                    {if $userName != $usuario->email}
                        <a href="cambiarRol/{$usuario ->id_usuario}" class="btn btn-outline-dark">Cambiar Rol</a>
                        <a href="deleteUsuario/{$usuario ->id_usuario}" class="btn btn-outline-dark">Eliminar Usuario</a> 
                    {/if}
                    </td>

                </tr>
            {/foreach}


        </tbody>
    </table>
</div>

{include file="templates/footer.tpl" }