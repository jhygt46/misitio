<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>FireApp</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="js/anime.min.js"></script>
    <script type="text/javascript" src="js/base.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Pattaya|Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" media="all" />
    <style>
        body{
            font-family: 'Pattaya', sans-serif;
        }
    </style>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lf3gXsUAAAAABI4s4kWAcK2abf0X5uXQnRdHWVB', {action: 'action_name'})
            .then(function(token) {
                console.log(token);
            });
        });
</script>
</head>
<body>
    <div class="contenedor">
        <div class="valign info">
            <div class="titulo">
                <div class="logo valign">MiSitioDelivery.cl</div>
                <ul class="btns valign clearfix">
                    <li onclick="pagina(0)">Empezar</li>
                    <li onclick="pagina(1)">Clientes</li>
                    <li onclick="pagina(2)">Contacto</li>
                </ul>
            </div>
            <div class="data">
                <div class="paginas pag01">
                    <div class="pagina">
                        <div class="infos inp1 valign">
                            <h1>Crear tu Sitio Web para Delivery Ahora Mismo!</h1>
                            <h2>Solo debes seguir estos simples pasos</h2>
                            <h3>Ingresa tu Dominio</h3>
                            <div class="input"><input type="text" id="dominio" placeholder="www.izusushi.cl"></div>
                            <h3>Ingresa tu Correo</h3>
                            <div class="input"><input type="text" id="correo" placeholder="izusushi@gmail.com"></div>
                            <div class="g-recaptcha" data-sitekey="6Lf8j3sUAAAAAFEPARLhuiWamomIvm35UBCqf65R"></div>
                            <div class="acciones"><div class="empezar" onclick="send()">Empezar Prueba Gratis</div><div class="mes_gratis">30 dias gratis</div></div>
                        </div>
                    </div>
                </div>
                <div class="paginas pag02">
                    <div class="pagina">
                        <div class="infos inp2 valign">
                            <h1 class="in2pad">Nuestros Clientes</h1>
                            <div class="lista_clientes clearfix">
                                <div class='preview' onclick='preview_cliente()'></div>
                                <div class='show'>
                                    <div class="cont_show">
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class='next' onclick='proximo_cliente()'></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="paginas pag03">
                    <div class="pagina">
                        <div class="infos inp1 valign">
                            <h1>Formulario de Contacto</h1>
                            <h4>&iquest;Te deseas comunicar nos nosotros?</h4>
                            <h5>Nombre</h5>
                            <div class="input2"><input type="text" id="dominio" placeholder=""></div>
                            <h5>Correo</h5>
                            <div class="input2"><input type="text" id="correo" placeholder=""></div>
                            <h5>Telefono</h5>
                            <div class="input2"><input type="text" id="correo" placeholder=""></div>
                            <h5>Asunto</h5>
                            <div class="input2"><Textarea id="correo"></Textarea></div>
                            <div class="enviar_contacto"><div onclick="contacto()">Enviar</div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="valign telefono">
            <div class="iframe"><iframe id="telefono" src="http://www.mikasushi.cl" width="274" height="486" frameborder="0"></iframe></div>
        </div>
    </div>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
