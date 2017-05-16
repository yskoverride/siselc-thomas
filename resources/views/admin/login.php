<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../../public/css/loggin_estilo.css">
        
        <script src="../../public/js/newjavascript.js"></script>
 
        
    </head>
    
    <body>
        
        <div class="login-page">
            <div class="form">
                <form class="login-form" action="../../controllers/loginAdmin/Login_Check.php" method="post" >
                    <input type="text" name="correo" placeholder="Correo Electrónico"/>
                    <input type="password" name="pass" placeholder="password"/>
                    <input class="button" type="submit" name="enviar" id="enviar" value="Iniciar Sesión">
      
                </form>
            </div>
        </div>
        
        
        
        
    </body>
</html>
