"use strict";

document.addEventListener("DOMContentLoaded",cargardom);
function cargardom(){ 
    let url='api/comentarios';


    let app = new Vue({
        el: "#appComentariosDelete",
        data: {
            titulo: "Comentarios del Libro",
            comentarios: [],
            cantComentarios:"",
        }
       
    });

    async function inicioPagina() {
        await getComentariosApi();
        habilitarElimComentario();
    }

    async function getComentariosApi(){
        try{
            let response = await fetch(url);
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

   async function  habilitarElimComentario(){
        let deleteButtons = document.getElementsByName('btnEliminar');
        console.log(deleteButtons);
        for(let i = 0; i<deleteButtons.length; i++){
             deleteButtons[i].addEventListener("click", function(e){
                 
                let comentario_id=e.currentTarget.id;
                console.log(comentario_id);
                deleteComentario(comentario_id);
                
             });
        }
    }

    function deleteComentario(comentario_id){
        console.log("Entree");
        fetch(url+"/"+comentario_id,{
            method: 'DELETE',
            headers: {'Content-Type': 'application/json'},
        })
        .then(response =>response.json())
        .then(()=>{
            getComentariosApi();
        })
        .catch(error => console.log(error));

    }

    
   

    inicioPagina();
}