function validarSenha(){

   senha = document.getElementById("pass").value;
   senha_confirmar = document.getElementById("pass-repeat").value;

   if(senha == senha_confirmar){


    return true;
   }else{
    alert("reescreva a senha");
    return false;
   }
}