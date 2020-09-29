function validarFormulario(forms){
    forms.preventDefault()
    let validacao = $(this).serialize()
    $.ajax({
        type:     'POST',
        url:      'php/login.php',
        data:     validacao,
        dataType: 'json',
        success:  (retorno)=>{
            console.log(retorno.error)
            if(retorno.error){
                $('#idBlcoAlerta').css({'display':'flex'})
                $('h4').html(retorno.msg)
                $('#idBlcoAlerta img').attr('src','imagens/login_fail.jpg')
            }
            else{
                location.href='home/central_de_volumes.php'
            }
        },
        error:    ()=>{alert('!!! falha !!!')}
    })
        
}
$('#formularioLogin').bind('submit',validarFormulario)