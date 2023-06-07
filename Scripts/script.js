const password = document.getElementById('password');
const passwordSecond = document.getElementById('passwordSecond');
const icon = document.getElementById('icon');
const iconSecond = document.getElementById('icon2'); // adicionado novo elemento

function showHide(){
    if(password.type === 'password'){
        password.setAttribute('type', 'text');
        icon.classList.add('hide')
    }
    else{
        password.setAttribute('type', 'password');
        icon.classList.remove('hide');
    }
}

function showHideSecond(){
    if(passwordSecond.type === 'password'){
        passwordSecond.setAttribute('type', 'text');
        iconSecond.classList.add('hide') // usando o novo ícone
    }
    else{
        passwordSecond.setAttribute('type', 'password');
        iconSecond.classList.remove('hide'); // usando o novo ícone
    }
}
