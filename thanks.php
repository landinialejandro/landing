<?php
include("header.php");
?>
<style>
    .l-text-h3{
        font-size: 1.75rem;
    }
    .l-divider{
        margin: 1.21rem 0 1.5rem;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .l-divider .l-divider-line{
        width: 100%;
        max-width: 7rem;
        height: 0.25rem;
        background-color: #2c3e50;
        border-radius: 1rem;
        border-color: #2c3e50 !important;
    }
    .l-divider .l-divider-line:first-child{
        margin-right: 1rem;
    }
    .l-divider .l-divider-line:last-child{
        margin-left: 1rem;
    }
    .l-divider .l-divider-icon{
        color: #2c3e50 !important;
        font-size: 2rem;
    }
    .l-divider .l-divider-text{
        color: #2c3e50 !important;
        font-size: 2.5rem;
    }
    .l-divider.l-divider-light .l-divider-line{
        background-color: #fff; 
    }
    .l-divider.l-divider-light .l-divider-icon{
        color: #fff !important; 
    }


</style>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <h1 class="m-0 text-dark text-center">Tu próxima aplicación ya!, mobil ready y mucho menos costoso.
            </h1>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="l-divider">
                <div class="l-divider-line"></div>
                <div class="l-divider-text"> ¡Gracias! </div>
                <div class="l-divider-line"></div>
            </div>
            <p class="l-text-h3 text-center">
                Pronto estaré en contacto!
            </p>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.content -->

<?php
include("footer.php");
?>