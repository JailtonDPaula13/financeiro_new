function mudarCor(){
    $.each($('tr').find('input'),(ob, co)=>{
        if($(co.closest('tr')).attr('id')!='trStart'){
            if(co.checked){
                $(co).closest('tr').css({'background':'red'})
            }
            else{
                $(co).closest('tr').css({'background':'#0580a9'})
            }
        }
    })
}
$(window).bind('load',mudarCor)
$.each($('tr:not(#trStart)'),(obj, cod)=>{
        $(cod).bind('click',()=>{
            if(!$(cod).find('input')[0].checked){
               $(cod).find('input').attr('checked','true')
            }
            else{
               $(cod).find('input').removeAttr('checked')
            }
            mudarCor()
        })
        $(cod).hover(
            ()=>{if(!$(cod).find('input')[0].checked){$(cod).css({'background':'#45a1bf'})}},
            ()=>{if(!$(cod).find('input')[0].checked){$(cod).css({'background':'#0580a9'})}}
        )
        $(cod).bind('dblclick',()=>{location.href='debito_detalhes.php'})
})
$('input[type=checkbox]').eq(0).bind('change',()=>{
        if($('input[type=checkbox]').eq(0)[0].checked){
            $.each($('input[type=checkbox]'),(o,c)=>{
                $(c).attr('checked','true')
            })
        }
        else{
            $.each($('input[type=checkbox]'),(o,c)=>{
                $(c).removeAttr('checked')
            })
        }
        mudarCor()
})

