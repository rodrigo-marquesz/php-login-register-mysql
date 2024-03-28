document.addEventListener('DOMContentLoaded', function() {
    let direcionaCadastro = document.getElementById('button-cadastro')
    // Verifica se a URL possui um parâmetro de erro
    const urlParams = new URLSearchParams(window.location.search);
    const errorParam = urlParams.get('error');

    // Se houver um erro, mostra a mensagem de erro
    if (errorParam === 'invalid_credentials') {
        let errorMessage = document.querySelector('.login-failed')
        let subErrorMessage = document.querySelector('.sub-text')
        errorMessage.style.display = 'block'
        subErrorMessage.style.display = 'block'
    }

    direcionaCadastro.addEventListener('click', () =>{
        window.location.href = 'cadastro.html'
    })
});