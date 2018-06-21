<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../css/main.css" type="text/css" rel="stylesheet">
    <script src="js/main.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <title>Peluqueria Lisarte</title>
</head>
<body>
    <?php include ("../templates/header.php"); ?>
    <div id="main">
        <!-- Aqui cesta compra -->  
       <div id="carrito">
            Nº de artículos: <span id="numero">0</span><br>
            Total: <span id="total">0</span>€
            <hr>
            <form  name="formulario">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" >
                <p class="error" id="error-nombre"></p>
                <input type="text" id="apellido" name="apellido" placeholder="Apellido" >
                <p class="error" id="error-apellido"></p>
                <input type="text" id="telefono" name="telefono" placeholder="Telefono" >
                <p class="error" id="error-telefono"></p>
                <button type="button" onclick="validarFormulario()" >Hacer pedido</button>     
            </form>
        </div>
        <div id="contServicios" background>
            <h1><strong>SERVICIOS</strong></h1>
            <div id="serv1"><img src="http://localhost/ejercicio_web_juanma/images/peinado.jpg" alt="peinar lisarte">
                <h3>Peinado</h3>
                <p>voluptatibus hic ullamco doctrina voluptate quid minim         minim laboris fore 
                    arbitrantur imitarentur fugiat voluptate consequat ingeniis elit culpa 
                    arbitrantur coniunctione voluptatibus hic ullamco doctrina voluptate quid minim         minim laboris fore 
                    arbitrantur imitarentur fugiat voluptate consequat ingeniis elit culpa 
                    arbitrantur coniunctionevoluptatibus hic ullamco doctrina voluptate quid minim         minim laboris fore 
                    arbitrantur imitarentur fugiat voluptate consequat ingeniis elit culpa 
                    arbitrantur coniunctione voluptate quid minim         minim laboris fore 
                    arbitrantur imitarentur fugiat voluptate consequat ingeniis elit culpa 
                    arbitrantur coniunctionevoluptatibus hic ullamco doctrina voluptate quid minim         minim laboris fore 
                    arbitrantur imitarentur fugiat voluptate consequat ingeniis elit culpa 
                    arbitrantur coniunctione 
                </p>
                <a href="javascript:void(0)"  onclick="addCarrito(producto1)" class="boton">Peinado</a>    <!-- Aqui botón producto peinado-->             
            </div>
            <div id="serv2"><img src="http://localhost/ejercicio_web_juanma/images/brochas.jpg" alt="maquillaje lisarte">
                <h3>Maquillaje</h3>
                <p>esse incurreret magna est ut o tempor graviterque eiusmod       irure proident 
                    senserit philosophari singulis transferrem proident cernantur officia 
                    philosophari aliqua esse incurreret magna est ut o tempor graviterque eiusmod       irure proident 
                    senserit philosophari singulis transferrem proident cernantur officia 
                    philosophari aliquaesse incurreret magna est ut o tempor graviterque eiusmod       irure proident 
                    senserit philosophari singulis transferrem proident cernantur officia 
                    philosophari aliqua senserit philosophari singulis transferrem proident cernantur officia 
                    philosophari aliquaesse incurreret magna est ut o tempor graviterque eiusmod       irure proident 
                    senserit philosophari singulis transferrem proident cernantur officia 
                    philosophari aliqua
                </p>
                <a href="javascript:void(0)" onclick="addCarrito(producto2)" class="boton" onMouseOver="this.style.background='black'; this.style.cursor='hand'; this.style.color='white';" onMouseOut="this.style.background='burlywood';">Maquillaje</a>    <!-- Aqui botón producto maquillaje-->  
            </div>
            <div id="serv3"><img src="http://localhost/ejercicio_web_juanma/images/utillaje.jpg" alt="peinar lisarte">
                <h3>Trabajos Técnicos</h3>
                <p>coniunctione enim hic exquisitaque labore firmissimum culpa     illum domesticarum 
                    excepteur duis pariatur nam amet firmissimum se enim doctrina senserit quorum coniunctione enim hic exquisitaque labore firmissimum culpa     illum domesticarum 
                    excepteur duis pariatur nam amet firmissimum se enim doctrina senserit quorum coniunctione enim hic exquisitaque labore firmissimum culpa     illum domesticarum 
                    excepteur duis pariatur nam amet firmissimum se enim doctrina senserit quorum excepteur duis pariatur nam amet firmissimum se enim doctrina senserit quorum coniunctione enim hic exquisitaque labore firmissimum culpa     illum domesticarum 
                    excepteur duis pariatur nam amet firmissimum se enim doctrina senserit quorum
                </p>  
                <a href="javascript:void(0)" onclick="addCarrito(producto3)" class="boton" onMouseOver="this.style.background='black'; this.style.cursor='hand'; this.style.color='white';" onMouseOut="this.style.background='burlywood';">Corte de Pelo</a>    <!-- Aqui botón producto peinado-->
                <p id="mensajes"></p>
            </div>
        </div>
        <aside>
            <div class="news">
                <div id="new1">
                <h5>Nuevo tratamiento keratina</h5>
                <p >ita ita nisi legam tempor sempiternum o iudicem graviterque       quo et elit mentitum 
                    voluptatibus ipsum admodum sempiternum sempiternum relinqueret cupidatat aute 
                    varias a transferrem proident
                </p></div>
                <div id="new2"> 
                <h5>Sorteo peinado carnaval</h5>
                <p>sempiternum mandaremus deserunt iis doctrina est graviterque       offendit cupidatat 
                    iudicem ex irure probant duis expetendis irure instituendarum sunt officia 
                    instituendarum ad hic nam ingeniis ex
                </p></div>
                <div id="new3"> 
                <h5>Resultados nueva coloración</h5>
                <p>et incididunt domesticarum voluptatibus elit enim qui               fidelissimae tempor nulla 
                    multos expetendis de e aut tempor imitarentur cillum malis consequat malis 
                    fabulas admodum ipsum si
                </p></div>
            </div>
        </aside>
    </div>
    <?php include ("../templates/footer.php"); ?>
</body>
</html>