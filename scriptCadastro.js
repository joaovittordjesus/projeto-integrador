
    
    
    
    const form   = document.getElementById('form');
    const campos = document.querySelectorAll('.required');
    const spans  = document.querySelectorAll('.span-required');
    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        nameValidate();
        sobrenomeValidate();
        emailValidate();
        nomeUsuarioValidate();
        mainPasswordValidate();
        comparePassword();
      
        if (isFormValid()) {
          const formData = new FormData(event.target);
          axios.post('http://localhost/ProjetoIntegrador/Cadastro.php', formData)
            .then(response => {
              console.log(response.data);
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

    function sobrenomeValidate(){
        if(campos[1].value.length < 3)
        {
            setError(1);
        }
        else
        {
            removeError(1);
        }
    } 

    

    function emailValidate(){
        if(!emailRegex.test(campos[2].value))
        {
            setError(2);
        }
        else
        {
            removeError(2);
        }
    }

    function nomeUsuarioValidate(){
        if(campos[3].value.length < 3)
        {
            setError(3);
        }
        else
        {
            removeError(3);
        }
    } 

    function mainPasswordValidate(){
        if(campos[4].value.length < 8)
        {
            setError(4);
        }
        else
        {
            removeError(4);
            comparePassword();
        }
    }

    function comparePassword(){
        if(campos[4].value == campos[5].value && campos[5].value.length >= 8)
        {
            removeError(5);
        }
        else
        {
            setError(5);
        }
    }