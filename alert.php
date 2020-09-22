<style>
    aside{
        position:        absolute;
        top:             0;
/*        display:         flex;*/
        display:         none;
        width:           100%;
        height:          100%;
        background:      rgba(0,0,0,0.5);
        z-index:         1;
        justify-content: center;
        align-items:     center;
    }
    .secao_alerta{
        background:    #f9f9f9;
        padding:       10pt;
        border-radius: 2px;
        text-align:    center;
        box-shadow:    3px 3px 10px #000;
        
    }
    button[type=button]{
        background:    red;
        border:        none;
        border-radius: 4px;
        margin-top:    10px;
        color:         #fff;
        cursor:        pointer;
    }
</style>
<aside>
    <section class="secao_alerta">
        <img src="imagens/login_fail.jpg" alt="pessoanagem negando acesso" height="200px">
        <h4>Não foi possível fazer login</h4>
        <button type="button">Fechar</button>
    </section>
</aside>