    "use strict"
    document.getElementById("mostrar").addEventListener("click",mostrarContrasena);
  function mostrarContrasena(){
      let tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
