"use strict";
document.addEventListener("DOMContentLoaded",cargardom);
function cargardom(){
  let dialogo = document.querySelector("#deleteConfirm");

  let btnCerrarModal = document.querySelector("#btn-cancelar");

  btnCerrarModal.addEventListener("click", function(){
    dialogo.close();
  })

  let botones = document.querySelectorAll("[id^='botonAutor']");

  botones.forEach(boton => {
   
    boton.addEventListener("click",function(){
      
      let id = boton.name;
      abrirModal(id);
     
    })
    
  });

  function abrirModal(id){
    let anchor = document.querySelector("#btnBorrardoDefinitivo");
    anchor.href+=id;
    dialogo.showModal();
  }


}
