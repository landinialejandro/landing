<?php
include("../header.php");
?>
<div class="col-md-4 title-panel">
    <div class="card card-body bg-light" id="google_translate_element"></div>
    <a href="<?php echo $home; ?>"><i class="fas fa-home"></i></a>
    <div class="title-text-panel">
        <h1><a href="#">Tu Página WEB!</a></h1>
        <p>
            Descubre un nuevo potencial!<br>
        </p>
    </div>
    <div>
        <img class="rounded" src="<?php echo $logo; ?>" alt="">
    </div>
</div>

<div class="col-md-4 feature-panel">
    <h2>Página Web para tu proyecto</h2>
    <h6>Obtén tu página personal ahora!</h6>

    <p class="card-text">Lo hago por ti!, accede a la página web que tu proyecto necesita.
        <ul>
            <li><div class="rounded" style="background: #21B8FF; color:white; padding: 10px">
                <h3>PRESENCIA</h3>
                <p>Consigue presencia profesional en Internet. <br>Genera nuevos contactos.</p>
                </div>
            </li>
            <li><div class="rounded" style="background: #FF7719; color:white; padding: 10px">
                <h3>NEGOCIO</h3>
                <p>Tu empresa en nuevos mercados con un sitio web completo y eficaz.</p>
                </div>
            </li>
            <li><div class="rounded" style="background: #9B1D9A;color:white; padding: 10px">
                <h3>TIENDA ONLINE</h3>
                <p>Incrementa tus ventas con una tienda online <br>Llega a más clientes.</p>
                </div>
            </li>
        </ul>
    </p>
    <h2>Tu proyecto en línea</h2>
    <ul>
        <li>
            <i class="fas fa-cloud-upload-alt"></i><h3>Subimos tu proyecto!</h3>
            <p>Pongo tu proyecto en línea donde me indiques y lo hacemos funcionar</p>
        </li>
        <li>
            <i class="fas fa-upload"></i><h3>Lo subes tu mismo!</h3>
            <p>Te entrego todo lo necesario para que puedas subir tu mismo tu sitio en tu Hosting</p>
        </li>
        <li>
            <i class="fas fa-server"></i><h3>Contrátame un hosting!</h3>
            <p>Obtén una solución completa, Web Hosting & Correo Electrónico, un dominio y espacio en la nube para vos!
                <br>El dominio está sujeto a disponibilidad.
            </p>
        </li>
    </ul>

</div>
<?php
$sales = true;
include("../footer.php");
?>