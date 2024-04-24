document.getElementById("formulario").addEventListener("submit", function(event){
    event.preventDefault();
    var usuario = document.getElementById("usuario").value;
    var password = document.getElementById("password").value;

    if(!usuario.match(/^[a-zA-Z0-9\_\-]{4,16}$/)){
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'No ha ingresado un usuario o usuario invalido'
      });
    }
    else if(!password.match(/^.{4,12}$/)){
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'No ha ingresado una contraseña'
      });
    }
    else{
      this.submit();
    }
  });