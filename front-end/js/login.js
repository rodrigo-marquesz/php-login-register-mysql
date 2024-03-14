let buttonCadastro = document.getElementById('button-cadastro')
let userIcon = document.getElementById('user-icon')
let passwordIcon = document.getElementById('password-icon')

buttonCadastro.addEventListener('click', () => {
    window.location.href = 'cadastro.html'
})

//Iterando em cima de cada icon, para aplicar a estilização de transform
document.querySelectorAll('.input-form').forEach((input) => {
    //Evento focus aciona-se quando clicamos no input ou navegamos até ele com tab e com isso, mexemos os icons
    input.addEventListener('focus', () => {
        userIcon.style.transition = 'transform 0.3s ease-in-out'
        userIcon.style.transform = 'translateX(-65px)'
        
        passwordIcon.style.transition = 'transform 0.3s ease-in-out'
        passwordIcon.style.transform = 'translateX(-65px)'
    })

    //Caso o usuário clique em algum outro lugar, blue é ativado e sabemos que o usuário não está mais interagindo com o input, logo, os ícones voltam
    input.addEventListener('blur', () => {
        if (input.value.trim() === '') {
            userIcon.style.transform = 'translateX(0)'
            passwordIcon.style.transform = 'translateX(0)'
        }
    })

    //depois de selecionar os inputs, colocamos um ouvinte de evento para aplicar estilo quando diferente de !== ''
    input.addEventListener('input', () => {
        if(input.value.trim() !== '') {
            userIcon.style.transition = 'transform 0.3s ease-in-out'
            userIcon.style.transform = 'translateX(-65px)'

            passwordIcon.style.transition = 'transform 0.3s ease-in-out'
            passwordIcon.style.transform = 'translateX(-65px)'
        } else if(input.value.trim() === '') {
            userIcon.style.transform = 'translateX(0)'
            passwordIcon.style.transform = 'translateX(0px)'
        }
    })
})
