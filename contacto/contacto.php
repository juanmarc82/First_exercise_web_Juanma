<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../css/main.css" type="text/css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <title>Peluqueria Lisarte</title>
</head>
<body>
    <?php include ("../templates/header.php"); ?>
    <div id="main">
       <div class="pidecita">
           <p class="pidecita">
               <a href="http://localhost/ejercicio_web_juanma/contacto/contacto.php"><strong>Pide Cita</strong></a>
           </p>
        </div>
        <div class="mainForm">
            <form class="form" id="formulario" name="formulario" action="contacto.html" method="post">
                    <fieldset>
                        <legend><b>Formulario de contacto</b></legend>
                        <label for="nombre">Nombre:</label><input type="text" name="nombre" id="nombre" required placeholder="Escriba aquí su nombre">
                        <br>
                        <br>
                        <label for="Teléfono">Teléfono:</label><input type="numbers" name="telefono" id="telefono" required placeholder="Escriba aquí su número">
                        <br>
                        <br>
                        <label for="email">Email:   </label><input type="text" name="email" id="email" required placeholder="ejemplo@ejemplo.com">
                        <br>
                        <br>
                        <label for="motivo">Motivo:</label>
                        <select name="contacto" id="contacto">
                            <optgroup label="Servicios">
                            <option value="agradecerServ"> Me ha encantado el servicio</option>
                            <option value="cambioCita">Quisiera cambiar mi cita</option>
                            </optgroup>
                            <optgroup label="Facturación">
                            <option value="errorFact">Hay un error en mi factura</option>
                            <option value="duplicadoFact">Necesito copia de una factura</option></optgroup>
                        </select>
                            <br>
                            <br>
                            <br>
                            <label for="observaciones">Observaciones:</label>
                            <textarea name="observaciones" id="observaciones" rows="6" cols="55" maxlength="250"></textarea>
                            <br>
                            <br>
                            <br>
                        <input type="submit" value="Enviar formulario" id="enviarForm">
                        <br>
                        <br>
                        <br>
                        <input type="reset" value="Restablecer campos" id="resetForm">
                    </fieldset>
                </form>
        </div>
        <div id="mainContac">
            <p><a href="tel:+34952362244" >Teléfono: 952362244</a></p>
             <p><b>¡Cuéntanos algo!<br></b><a href="mailto:lisartepeluqueros@gmail.com">lisartepeluqueros@gmail.com</a>.</p> 
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.71723682518!2d-4.441152585308475!3d36.70533218073496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f778a93dcd09%3A0x349c6f987874e6ee!2sLisarte+Peluqueros!5e0!3m2!1ses!2ses!4v1519809675935" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>     
        </div>
    </div>   
    <?php include ("../templates/footer.php"); ?>
</body>
</html>