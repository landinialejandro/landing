<?php
include("../header.php");
?>
<div class="col-md-4 title-panel">
    <div class="card card-body bg-light" id="google_translate_element"></div>
    <div class="title-text-panel">
        <h1><a href="<?php echo $home; ?>">LANDINI</a></h1>
        <p>
            ERP Sistema plus<br>
            versión 2.0<br>
            Escrito en PHP, JS, Mysql
        </p>
    </div>
    <div>
        <img class="rounded" src="<?php echo $logo; ?>" alt="">
    </div>
</div>

<div class="col-md-4 feature-panel">
    <h2>Sistema para medianas y pequeñas empresas</h2>
    <p>Desarrollado en PHP, CSS, JS and HTML.<br>
        Obten la mejor experiancia de usuario.
        <br>
        <ul>
            <li>
                <h3>Solicita la versión demo</h3>
            </li>
            <li>
                <h3>Cloud Ready</h3>
                Obten tu sitio o contrata uno conmigo, descargamos la aplicación y funcionar!
            </li>
        </ul>
    </p>

</div>
<?php
$sales=true;
include("../footer.php");
?>