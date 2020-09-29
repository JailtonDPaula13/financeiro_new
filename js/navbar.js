$('#idLogoff').bind('click',()=>{$('.clLoof').css({'display':'flex'})})
$('#idSectionLogoff>button').eq(1).bind('click',()=>{$('.clLoof').css({'display':'none'})})
$('#idSectionLogoff>button').eq(0).bind('click',()=>{location.href='../php/logoff.php'})
