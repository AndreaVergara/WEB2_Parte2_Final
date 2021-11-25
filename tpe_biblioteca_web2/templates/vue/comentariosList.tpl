{literal}
    <div class="container mt-3">
        <h1 v-if="cantComentarios>0">{{titulo}}</h1>

        <div v-if="cantComentarios>0" class="container card colorFondo detalleLibro colorLetra mx-auto mt-3">

            <div>
                <p>Ordenar comentarios por: </p>
                <div>
                    <input type="radio" name="ordenPuntuacion" value="desc">
                    <label for="desc">Mayor Puntuación</label>
                </div>
                <div>
                    <input type="radio" name="ordenPuntuacion" value="asc">
                    <label for="asc">Menor Puntuación</label>
                </div>
                <div>
                    <input type="radio" name="ordenFecha" value="desc">
                    <label for="desc">Los más actuales</label>
                </div>
                <div>
                    <input type="radio" name="ordenFecha" value="asc">
                    <label for="asc">Los más antiguos</label>
                </div>

            </div>

            <div class="mt-3">
                <p>Filtrar comentarios por puntuación: </p>
                <div class="d-flex justify-content-around">
                    <div>
                        <input type="radio" name="puntuacionFiltro" value="1">
                        <label for="1">1</label>
                    </div>
                    <div>
                        <input type="radio" name="puntuacionFiltro" value="2">
                        <label for="2">2</label>
                    </div>
                    <div>
                        <input type="radio" name="puntuacionFiltro" value="3">
                        <label for="3">3</label>
                    </div>
                    <div>
                        <input type="radio" name="puntuacionFiltro" value="4">
                        <label for="4">4</label>
                    </div>
                    <div>
                        <input type="radio" name="puntuacionFiltro" value="5">
                        <label for="5">5</label>
                    </div>
                    <div>
                        <input type="radio" name="puntuacionFiltro" value="todos">
                        <label for="todos">Todos</label>
                    </div>
                </div>
            </div>


        </div>


        <div class="card mx-auto mt-3 detalleLibro colorFondo colorLetra" v-for="comentario in comentarios">
            <div class="card-body">
                <p>Fecha: {{comentario.fecha}}</p>
                <h4 class="card-title">Usuario {{comentario.email}} dice:</h4>

                <p class="card-text">{{comentario.comentario}}</p>
            </div>
            <ul class="list-group list-group-flush ">
                <h6 class="list-group-item colorFondo  colorLetra ">Puntuación: {{comentario.puntuacion}}/5</h6>
            </ul>

        </div>




    </div>
{/literal}