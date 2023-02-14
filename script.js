'use strict';

const myForm = document.getElementById("myForm");
myForm.addEventListener('submit',gravar);

function gravar(e){
    e.preventDefault();
    const formData = new FormData(this);
    const searchParams = new URLSearchParams();

    for(const par of formData){
        searchParams.append(par[0],par[1],par[2]);
    }

    fetch('produtos.php',{
        method:'POST',
        body:formData
    }).then(function(response){
        document.getElementById('nome').value=" ";
        document.getElementById('preco').value=" ";
        document.getElementById('qtde').value=" ";
        return alert('Dados gravados com sucessos!');
    }).catch(function(error){
        console.log(error);
    });
}