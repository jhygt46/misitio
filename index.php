<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>MiSitioDelivery</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="js/base.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Pattaya|Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" media="all" />
    <style>
        body{
            font-family: 'Pattaya', sans-serif;
        }
    </style>
    <script>
        
    </script>
</head>
<body>
    <div class="contenedor">
        
        <div class="logo">MiSitioDelivery.cl</div>
        <div class="cont_btns">
            <ul class="botones clearfix">
                <li onclick="go_pagina(0)" class="selected">Empezar</li>
                <li onclick="go_pagina(1)">Clientes</li>
                <li onclick="go_pagina(2)">Contacto</li>
            </ul>
        </div>
        
        <div class="contenido p_empezar">
            <div class="cont_contenido">
                <?php if($_GET["realizado"] == 0 || !isset($_GET["realizado"])){ ?>
                <h1>Crear tu Sitio Ahora Mismo!</h1>
                <h2>Ingresando s&oacute;lo 2 simples datos</h2>
                <form onsubmit="return send()" action="http://35.185.64.95/ajax/index.php" method="post">
                    <h3>Ingresa tu Dominio</h3>
                    <input type="hidden" name="accion" value="crear_dominio" />
                    <div class="input">
                        <input type="text" name="dominio" placeholder="www.tusitio.cl" <?php if($_GET["realizado"] == 0 && $_GET["tipo"] == 1){ echo "style='border: 2px solid #900; background: #fcc'"; } ?> />
                    </div>
                    <h3>Ingresa tu Correo</h3>
                    <div class="input">
                        <input type="text" name="correo" placeholder="tucorreo@gmail.com" <?php if($_GET["realizado"] == 0 && $_GET["tipo"] == 2){ echo "style='border: 2px solid #900; background: #fcc'"; } ?> />
                    </div>
                    <h6>reCAPTCHA</h6>
                    <div class="g-recaptcha" data-sitekey="6Lf8j3sUAAAAAFEPARLhuiWamomIvm35UBCqf65R"></div>
                    <div class="acciones">
                        <input type="submit" value="Empezar Prueba Gratis" class="empezar" />
                        <div class="mes_gratis">30 dias gratis</div>
                    </div>
                </form>
                <?php } ?>
                <?php if($_GET["realizado"] == 1){ ?>
                    <h1 style="padding-top: 40px; font-size: 60px">Felicitaciones!</h1>
                    <h1 style="font-size: 35px">Tu cuenta ha sido creada</h1>
                    <h2 style="font-size: 18px">Te hemos enviado un correo con las instrucciones</h2>
                <?php } ?>
            </div>
        </div>
        
        <div class="telefono" style="width: 310px; height: 530px; background: #ff0; position: absolute; top: 120px"></div>
        
        <div class="contenido p_clientes">
            <div class="cont_contenido">
                <ul class="lista_clientes">
                    <?php for($i=0; $i<10; $i++){ ?>
                    <li>
                        <div class="foto"></div>
                        <div class="info"></div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        
        <div class="contenido p_contacto halign">
            <div class="cont_contenido">
                <form onsubmit="return send2()" action="http://35.185.64.95/ajax/index.php" method="post">
                    <h3>Nombre</h3>
                    <input type="hidden" name="accion" value="enviar_contacto" />
                    <div class="input">
                        <input type="text" name="nombre" placeholder="Diego" />
                    </div>
                    <h3>Correo</h3>
                    <div class="input">
                        <input type="text" name="email" placeholder="tucorreo@gmail.com" />
                    </div>
                    <h3>Telefono</h3>
                    <div class="input">
                        <input type="text" name="telefono" value="+56 9 " />
                    </div>
                    <h3>Asunto</h3>
                    <div class="input">
                        <TextArea name="asunto" style="width: 100%; height: 80px; padding: 10px"></TextArea>
                    </div>
                    <h6>reCAPTCHA</h6>
                    <div class="g-recaptcha" data-sitekey="6Lf8j3sUAAAAAFEPARLhuiWamomIvm35UBCqf65R"></div>
                    <div class="acciones">
                        <input type="submit" value="Enviar Solicitud" class="empezar" />
                    </div>
                </form>
            </div>
        </div>
        <!--
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
                            <?php if($_GET["realizado"] != 1){ ?>
                            <form onsubmit="return send()" action="http://35.185.64.95/ajax/index.php" method="post">
                                <h1>Crear tu Sitio Web para Delivery Ahora Mismo!</h1>
                                <h2>Solo debes ingresar tus datos</h2>
                                <?php if($_GET["tipo"] != 1){ ?><h3>Ingresa tu Dominio</h3><?php }else{ echo "<h3 style='color: #f00'>".$_GET["error"]."</h3>"; } ?>
                                <input type="hidden" name="accion" value="crear_dominio" />
                                <div class="input"><input type="text" name="dominio" placeholder="www.izusushi.cl" <?php if($_GET["tipo"] == 1){ echo"style='border: 1px solid #f00'"; } ?> /></div>
                                <?php if($_GET["tipo"] != 2){ ?><h3>Ingresa tu Correo</h3><?php }else{ echo "<h3 style='color: #f00'>".$_GET["error"]."</h3>"; } ?>
                                <div class="input"><input type="text" name="correo" placeholder="izusushi@gmail.com" <?php if($_GET["tipo"] == 2){ echo"style='border: 1px solid #f00'"; } ?> /></div>
                                <?php if($_GET["tipo"] != 3){ ?><h6>reCAPTCHA</h6><?php }else{ ?><h6 style="color: #f00"><?php echo $_GET["error"]; ?></h6><?php } ?>
                                <div class="g-recaptcha" data-sitekey="6Lf8j3sUAAAAAFEPARLhuiWamomIvm35UBCqf65R"></div>
                                <div class="acciones"><input type="submit" value="Empezar Prueba Gratis" class="empezar" /><div class="mes_gratis">30 dias gratis</div></div>
                            </form>
                            <?php }else{ ?>
                            <h1 style="font-size: 70px">Felicitaciones!</h1>
                            <h1 style="font-size: 41px">Tu cuenta ha sido creada</h1>
                            <h2 style="padding-top: 40px">Te hemos enviado un correo con las instrucciones</h2>
                            <?php } ?>
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
            <div class="iframe"><iframe id="telefono" src="http://localhost/restaurants/?param_dom=www.mikasushi.cl&iframe=true" width="274" height="486" frameborder="0"></iframe></div>
        </div>
        -->
    </div>
    <?php if($_GET["realizado"] != 1){ ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php } ?>
</body>
</html>
