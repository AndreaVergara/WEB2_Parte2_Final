{literal}
    <h1 v-if="comentarios.length>0">{{titulo}}</h1>
    
    <div class="card mx-auto mt-3 detalleLibro colorFondo colorLetra" v-for="comentario in comentarios">
        <div class="card-body">
            <p>Fecha: {{comentario.fecha}}<p>
            <h4 class="card-title">Usuario {{comentario.email}} dice:</h4>
            <p class="card-text">{{comentario.comentario}}</p>
        </div>
        <ul class="list-group list-group-flush ">
            <h6 class="list-group-item colorFondo colorLetra">Puntuacion: {{comentario.puntuacion}}/5</h6>
        </ul>
        <div class="mx-auto">
            <button class="btn btn-outline-dark"  v-bind:id="comentario.id_comentario"  name="btnEliminar" >Eliminar</button>
        </div>
    </div>

{/literal}