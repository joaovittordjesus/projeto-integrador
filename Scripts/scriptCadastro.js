
const form   = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans  = document.querySelectorAll('.span-required');
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

form.addEventListener('submit', (event) => {
    event.preventDefault();
    
    
    
  
    if (isFormValid()) {
      const formData = new FormData(event.target);
      axios.post('http://localhost//ProjetoIntegrador/CadastroProfissional.php', formData)
        .then(response => {
            console.log(response.data)
          // Faça alguma coisa com a resposta do servidor

          // Reseta o formulário após o envio bem sucedido
          event.target.reset();
        })
        .catch(error => {
          console.error(error);
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
/*
function setError(index){
    campos[index].style.border = '2px solid #e63636';
    spans[index].style.display = 'block';
}

function removeError(index){
    campos[index].style.border = '';
    spans[index].style.display = 'none';
}

function nameValidate(){
    if(campos[0].value.length < 3)
    {
        setError(0);
    }
    else
    {
        removeError(0);
    }
} 


function emailValidate(){
    if(!emailRegex.test(campos[1].value))
    {
        setError(1);
    }
    else
    {
        removeError(1);
    }
}

function numberValidate(){
    if(campos[2].value.length < 12)
    {
        setError(2);
    }
    else
    {
        removeError(2);
    }
} 


function mainPasswordValidate(){
    if(campos[3].value.length < 8)
    {
        setError(3);
    }
    else
    {
        removeError(3);
        comparePassword();
    }
}

function comparePassword(){
    if(campos[3].value == campos[4].value && campos[4].value.length >= 8)
    {
        removeError(4);
    }
    else
    {
        setError(4);
    }
} */