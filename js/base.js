$(document).ready(function(){
    
    render();
    var width = $('body').width();
    lugar(width, 0);

});
window.onresize = function() {
    var width = $('body').width();
    lugar(width, 1);
}
function lugar(w, aux){
    
    var l1 = 0;
    var l2 = 0;
    
    if(w > 800){
        
        l1 = (w - 780)/2;
        l2 = l1 + 470;
        $('.telefono').show();
        $('.telefono').css({left: l2+'px'});
        $('.p_empezar').css({left: l1+'px'});
        if(aux == 0){ $('.telefono').show() }
    
    }else{
        $('.telefono').hide();
    }
    
}
var clientes = [{ logo: 'mika.jpg', nombre: 'Mika Sushi 01', url: 'www.mikasushi.cl' }, { logo: 'runa.jpg', nombre: 'Runa Sushi 02', url: 'www.runasushi.cl' }, { logo: 'runa.jpg', nombre: 'Runa Sushi 03', url: 'www.mikasushi.cl' }, { logo: 'runa.jpg', nombre: 'Runa Sushi 04', url: 'www.mikasushi.cl' }, { logo: 'mika.jpg', nombre: 'Mika Sushi 05', url: 'www.mikasushi.cl' }, { logo: 'runa.jpg', nombre: 'Runa Sushi 06', url: 'www.mikasushi.cl' }, { logo: 'runa.jpg', nombre: 'Runa Sushi 07', url: 'www.mikasushi.cl' }, { logo: 'runa.jpg', nombre: 'Runa Sushi 08', url: 'www.mikasushi.cl' }, { logo: 'mika.jpg', nombre: 'Mika Sushi 09', url: 'www.mikasushi.cl' }, { logo: 'runa.jpg', nombre: 'Runa Sushi 10', url: 'www.mikasushi.cl' }, { logo: 'runa.jpg', nombre: 'Runa Sushi 11', url: 'www.mikasushi.cl' }, { logo: 'runa.jpg', nombre: 'Runa Sushi 12', url: 'www.mikasushi.cl' }];

function render(){
    
    var dominio = localStorage.getItem("dominio");
    var correo = localStorage.getItem("correo");
    
    $("input[name*='dominio']").val(dominio);
    $("input[name*='correo']").val(correo);
    
    var html = '';
    for(var i=0; i<clientes.length; i=i+4){
    
        html = '<div class="list_cli">'+
                    '<ul class="clearfix">'+
                        '<li onclick="iframe(\''+clientes[i].url+'\')"><div class="cliente valign"><div style="background: #fff"><img style="width: 100%" src="http://'+clientes[i].url+'/images/logos/'+clientes[i].url+'.jpg"></div><div>'+clientes[i].nombre+'</div></div></li>'+
                        '<li onclick="iframe(\''+clientes[i+1].url+'\')"><div class="cliente valign"><div style="background: #000"><img style="width: 100%" src="http://'+clientes[i+1].url+'/images/logos/'+clientes[i+1].url+'.jpg"></div><div>'+clientes[i+1].nombre+'</div></div></li>'+
                        '<li onclick="iframe(\''+clientes[i+2].url+'\')"><div class="cliente valign"><div style="background: #fff"><img style="width: 100%" src="http://'+clientes[i+2].url+'/images/logos/'+clientes[i+2].url+'.jpg"></div><div>'+clientes[i+2].nombre+'</div></div></li>'+
                        '<li onclick="iframe(\''+clientes[i+3].url+'\')"><div class="cliente valign"><div style="background: #fff"><img style="width: 100%" src="http://'+clientes[i+3].url+'/images/logos/'+clientes[i+3].url+'.jpg"></div><div>'+clientes[i+3].nombre+'</div></div></li>'+
                    '</ul>'+
                '</div>';
        
        $('.cont_show').append(html);
        
    }
    
}
function go_pagina(i){
    
    $('.contenido').hide();
    $('.botones').find('li').each(function(a){
        if(i == a){
            $(this).addClass('selected');
        }else{
            $(this).removeClass('selected');
        }
    });
    if(i == 0){ $('.p_empezar').show(); $('.telefono').show() }
    if(i == 1){ $('.p_clientes').show(); $('.telefono').hide() }
    if(i == 2){ $('.p_contacto').show(); $('.telefono').hide() }
    
}
function preview_cliente(){
    var top = $('.cont_show').position().top;
    if(top < 0){
        $('.cont_show').animate({top: '+=100%'});
    }
}
function proximo_cliente(){
    
    var top = $('.cont_show').position().top;
    var aux = Math.abs(top / $('.cont_show').height());
    var cant = $('.cont_show').find('.list_cli').length;
    
    if(aux + 1 < cant){
        $('.cont_show').animate({top: '-=100%'});
    }
   
}
function iframe(src){
    $('#telefono').attr('src', 'http://'+src);
}
function validar_email(email){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}
function send(){

    var dom = $("input[name*='dominio']").val();
    var correo = $("input[name*='correo']").val();
    var dominio = dom.split(".");
    
    localStorage.setItem("dominio", dom);
    localStorage.setItem("correo", correo);
    
    if(validar_email(correo)){
        if(dominio[0] == "www" && dominio.length == 3 && dominio[1].length > 0 && dominio[2].length > 1){
            return true;
        }else{
            console.log("dominio invalido");
        }
    }else{
        console.log("correo invalido");
    }
    
    return false;
    
}
function a(){
    return null;
}
function contacto(){
    
    if($('#nombre').val() != "" && ($('#correo').val() != "" || $('#phone').val() != "") && $('#asunto').val()){
        var send = { accion: 'contacto', nombre: $('#nombre').val(), correo: $('#correo').val(), phone: $('#phone').val(), asunto: $('#asunto').val() };
        $.ajax({
            url: "http://35.185.64.95/ajax/index.php",
            type: "POST",
            data: send,
            success: function(info){
                var data = JSON.parse(info);
                console.log(data);
                if(data.op == 1){
                    $('#nombre').val('');
                    $('#correo').val('');
                    $('#phone').val('');
                    $('#asunto').val('');
                }
                if(data.op == 2){
                    console.log("ERROR");
                    console.log(data.mensaje);
                }
            }, error: function(e){
                console.log(e);
            }
        });
    }else{
        console.log("DEBE LLENAR LOS CAMPOS");
        return false;
    }
    
    
}