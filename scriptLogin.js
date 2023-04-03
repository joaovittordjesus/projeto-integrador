const form   = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans  = document.querySelectorAll('.span-required');


form.addEventListener('submit', (event) => {
    event.preventDefault();
    nomeUsuarioValidate();
    mainPasswordValidate();
  
    if (isFormValid()) {
      const formData = new FormData(event.target);
      axios.post('http://localhost/ProjetoIntegrador/Login.php', formData)
        .then(response => {
          console.log(response.data);
          // Faça alguma coisa com a resposta do servidor

          // Reseta o formulário após o envio bem sucedido
          event.target.reset();
        })
        .catch(error => {
          alert('Por favor, preencha todos os campos corretamente');
          // Faça alguma coisa com o erro
        });
    }
  });
  
  function isFormValid() {
    for (let i = 0; i < campos.length; i++) {
      if (campos[i].value === '' || spans[i].style.display === 'block') {
        return false;
      }
    }
    return true;
  }



function setError(index){
    campos[index].style.border = '2px solid #e63636';
    spans[index].style.display = 'block';
}

function removeError(index){
    campos[index].style.border = '';
    spans[index].style.display = 'none';
}

function nomeUsuarioValidate(){
    if(campos[0].length === 0)
    {
        setError(0);
    }
    else
    {
        removeError(0);
    }
} 

function mainPasswordValidate(){
    if(campos[1].length ===0)
    {
        setError(1);
    }
    else
    {
        removeError(1);
        comparePassword();
    }
}



