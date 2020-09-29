<aside id="idBlcoAlerta">
    <section class="secao_alerta">
        <img src="" alt="pessoanagem negando acesso" height="200px">
        <h4>Não foi possível fazer login</h4>
        <button id="botaoFechar" type="button">Fechar</button>
    </section>
</aside>
<script>
    $('#botaoFechar').bind('click',()=>{$('#idBlcoAlerta').css({'display':'none'})})
</script>