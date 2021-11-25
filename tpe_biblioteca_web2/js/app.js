"use strict";

document.addEventListener("DOMContentLoaded",cargardom);
function cargardom(){ 
    let url='api/comentarios';


    let app = new Vue({
        el: "#appComentarios",
        data: {
            titulo: "Comentarios del Libro",
            comentarios: [],
            rol:"",
            cantComentarios:"",
        },
        
    });


    function inicio() {
        let secccionComentarios = document.querySelector("#appComentarios");
        let atributosPagina = secccionComentarios.className;
        let idsPagina = atributosPagina.split("/");
        let idLibro=idsPagina[0];
        let idUsuario=idsPagina[1];
        let usuarioRol= idsPagina[2];
        app.rol="";
        app.rol=usuarioRol;
        if(app.rol!=""){
            habilitarFormulario(idsPagina);
        }
        cargarSeccionComentarios();
    }

    async  function cargarSeccionComentarios(){
        let secccionComentarios = document.querySelector("#appComentarios");
        let atributosPagina = secccionComentarios.className;
        let idsPagina = atributosPagina.split("/");
        let idLibro=idsPagina[0];
        let idUsuario=idsPagina[1];
        let usuarioRol= idsPagina[2];
        app.rol="";
        app.rol=usuarioRol;
        await getComentarios(idLibro);
        ordenarPorPuntuacion(idsPagina);
        ordenarPorFecha(idsPagina);
        filtrarPorPuntuacion(idsPagina);
       
    }

    function ordenarPorPuntuacion(idsPagina){
        let inputOrdenPuntos = document.getElementsByName('ordenPuntuacion');
        for(let i = 0; i<inputOrdenPuntos.length; i++){
            inputOrdenPuntos[i].addEventListener("change", function(e){
                resetRadio("puntuacionFiltro");
                resetRadio("ordenFecha");
                let orden=e.currentTarget.value;
                getComentariosOrdenados(idsPagina[0], orden,"puntuacion");
               
             });
        }
        
    }

    function ordenarPorFecha(idsPagina){
        let inputOrdenPuntos = document.getElementsByName('ordenFecha');
        for(let i = 0; i<inputOrdenPuntos.length; i++){
            inputOrdenPuntos[i].addEventListener("change", function(e){
                resetRadio("puntuacionFiltro");
                resetRadio("ordenPuntuacion");
                let orden=e.currentTarget.value;
                getComentariosOrdenados(idsPagina[0], orden,"fecha");
                
             });
        }
        
    }

    function filtrarPorPuntuacion(idsPagina){
        let puntosFiltro = document.getElementsByName('puntuacionFiltro');
        for(let i = 0; i<puntosFiltro.length; i++){
            puntosFiltro[i].addEventListener("change", function(e){
                resetRadio("ordenPuntuacion");
                resetRadio("ordenFecha");
                let punto=e.currentTarget.value;
                if(punto!="todos"){
                    getComentariosFiltrados(idsPagina[0], punto)
                }else{
                    getComentarios(idsPagina[0]);
                }
               
             });
        }
        
    }

    function resetRadio(atributo){
        let elementos = document.getElementsByName(atributo);
        for(let i = 0; i<elementos.length; i++){
            elementos[i].checked = false;
        }

    }

    function  habilitarFormulario(idsPagina){
        let form = document.querySelector("#form-comentario");
        form.addEventListener("submit",function(e){
            cargarNuevoComentario(e,form,idsPagina);
            resetRadio("puntuacionFiltro");
            resetRadio("ordenFecha");
            resetRadio("ordenPuntuacion");
        });

    }

    
    

    async  function cargarNuevoComentario(e,form,idsPagina){
        e.preventDefault();
        let infoComentario = leerDatosForm(form,idsPagina);
        await cargarComentarioAPI(infoComentario,form);
        cargarSeccionComentarios();

    }

    function leerDatosForm(form,idsPagina) {
        let formData = new FormData(form);
        let puntuacion = formData.get("puntuacion");
        let comentario = formData.get("comentario");
        let hoy = new Date();
        let infoComentario = {
            "comentario": comentario,
            "puntuacion": puntuacion,
            "id_usuario": idsPagina[1],
            "id_libro": idsPagina[0],
            "fecha": hoy
        }
        return infoComentario;
    }

    async function cargarComentarioAPI(infoComentario, form) {
        try {
            let res = await fetch(url, {
                'method': 'POST',
                'headers': { 'Content-Type': 'application/json' },
                'body': JSON.stringify(infoComentario)

            })
            if (res.ok) {
                console.log(res);
                form.reset();
        

            } else {
                console.log(res);
                
            }
        } catch (error) {
            console.log(error);
        }

    }


    async function getComentarios(idLibro){
        try{
            let response = await fetch(`${url}?idLibro=${idLibro}`);
            let comentarios = await response.json();
            app.comentarios=[];
            app.comentarios = comentarios;
           
            for(let i=0; i<comentarios.length; i++){
                let aux = new Date(app.comentarios[i].fecha);
                console.log(aux);
                aux.setHours(aux.getHours()-3);
                console.log(aux.toDateString());
                app.comentarios[i].fecha=aux.getDate()+"/"+aux.getMonth()+"/"+aux.getFullYear()+" - "+ aux.getHours()+":"+aux.getMinutes()+":"+aux.getSeconds();
            }
            app.cantComentarios="";
            app.cantComentarios=comentarios.length;
        }catch (e){
            console.log(e);
    
        }
        
    }

    async function getComentariosOrdenados(idLibro,orden,atributo){
        
        try{
            let response = await fetch(`${url}?idLibro=${idLibro}&sortBy=${atributo}&order=${orden}`);
            let comentarios = await response.json();

            app.comentarios=[];
            app.comentarios = comentarios;
            for(let i=0; i<comentarios.length; i++){
                let aux = new Date(app.comentarios[i].fecha);
                console.log(aux);
                aux.setHours(aux.getHours()-3);
                console.log(aux.toDateString());
                app.comentarios[i].fecha=aux.getDate()+"/"+aux.getMonth()+"/"+aux.getFullYear()+" - "+ aux.getHours()+":"+aux.getMinutes()+":"+aux.getSeconds();
            }
        }catch (e){
            console.log(e);
    
        }
        
    }


    async function  getComentariosFiltrados(idLibro, punto){
        try{
            let response = await fetch(`${url}?idLibro=${idLibro}&puntuacion=${punto}`);
            let comentarios = await response.json();
            app.comentarios=[];
            app.comentarios = comentarios;
            for(let i=0; i<comentarios.length; i++){
                let aux = new Date(app.comentarios[i].fecha);
                console.log(aux);
                aux.setHours(aux.getHours()-3);
                console.log(aux.toDateString());
                app.comentarios[i].fecha=aux.getDate()+"/"+aux.getMonth()+"/"+aux.getFullYear()+" - "+ aux.getHours()+":"+aux.getMinutes()+":"+aux.getSeconds();
            }
        }catch (e){
            console.log(e);
    
        }
        
    }
    function modificarHora(arrayComentarios) {
         for(let i=0; i<comentarios.length; i++){
                let aux = new Date(app.comentarios[i].fecha);
                console.log(aux);
                aux.setHours(aux.getHours()-3);
                console.log(aux.toDateString());
                app.comentarios[i].fecha=aux.getDate()+"/"+aux.getMonth()+"/"+aux.getFullYear()+" - "+ aux.getHours()+":"+aux.getMinutes()+":"+aux.getSeconds();
            }
    }
    
    inicio();
    
}

