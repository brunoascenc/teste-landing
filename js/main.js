function validarForm() {
    const nome = document.getElementById('inputNome').value;
    const email = document.getElementById('inputEmail').value;
    const telefone = document.getElementById('inputTel').value;
  
    if (!nome) {
      document.getElementById('mensagem-erro').innerHTML = '* Insira seu nome';
      return false;
    } 

    else if(!email){
        document.getElementById('mensagem-erro').innerHTML = '* Insira seu email';
        return false;
    }

    else if(!telefone || isNaN(telefone)){
        document.getElementById('mensagem-erro').innerHTML = '* Insira seu telefone';
        return false;
    }

     else {
      return true;
    }
}
