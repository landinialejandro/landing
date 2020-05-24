<?php
include("header.php");
?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Perfil - Contacto!</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Perfil y Contacto</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="dist/dist_L/logo/Face.png" alt="User Avatar">
            </div>
            <h3 class="profile-username text-center">Alejandro Landini</h3>
            <p class="text-muted text-center">Desarrollador de Software</p>
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Productos</b> <a class="float-right"><?php echo $products; ?></a>
              </li>
              <li class="list-group-item">
                <b>Seguidores</b> <a class="float-right"><?php echo $followers; ?></a>
              </li>
              <li class="list-group-item">
                <b>Ventas</b> <a class="float-right"><?php echo $sales; ?></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Acerca de mi</h3>
          </div>
          <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Educación</strong>

            <p class="text-muted">
              Tecnico Electromecánico, Programdor en PHP, JS y CSS. <br>
              Visual Basic, C, SQL.
            </p>
            <hr>
            <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>
            <p class="text-muted">Cipolletti, Río Negro, AR</p>
            <a href="mailto:alejandro@landini.com.ar">alejandro@landini.com.ar</a>
            <a href="mailto:landinialejandro@gmail.com">landinialejandro@gmail.com</a>
            <hr>
            <strong><i class="fas fa-pencil-alt mr-1"></i> Habilidades</strong>
            <p class="text-muted">
              <span class="badge badge-danger">Diseño de UI</span>
              <span class="badge badge-success">Ingeniería inversa</span>
              <span class="badge badge-info">Javascript</span>
              <span class="badge badge-warning">PHP</span>
              <span class="badge badge-primary">Node.js</span>
              <span class="badge badge-danger">Full Stack developer</span>
            </p>
            <hr>
            <strong><i class="far fa-file-alt mr-1"></i> Notas</strong>
            <p class="text-muted">Gracias por elegir mis productos y servicios!.</p>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Posts y comentarios</a></li>
              <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Formulario de Contacto!</a></li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <?php include ('products/profile/posts/post.php') ?>
              </div>
              <div class="tab-pane" id="settings">
                <form id="contactform" class="form-horizontal" action="thanks.php" novalidate="novalidate" method="POST">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName2" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Apellido">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="mail" id="mail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmpresa" class="col-sm-2 col-form-label">Empresa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="company" id="company" placeholder="Empresa">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPosicion" class="col-sm-2 col-form-label">Posición</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="position" id="position" placeholder="Posición">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Comentarios</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="comments" id="comments" placeholder="Comentarios"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="notify"> Quiero recibir notificaciones!
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="offset-sm-2 col-sm-10">
                    <div class="g-recaptcha" data-sitekey="<?php echo $captcha_html; ?>"></div>
                  </div>
                  <br>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" name="contact" class="btn btn-success">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include("footer.php");
?>
<script type="text/javascript">
  $(document).ready(function() {
    $("#contactform").validate({
      rules: {
        mail: {
          required: true,
          email: true,
        },
        notify: {
          required: true
        },
        name: {
          required: true
        },
        company: {
          required: true
        },
        comments: {
          required: true
        }
      },
      messages: {
        email: {
          required: "Please enter a email address",
          email: "Please enter a vaild email address"
        },
        terms: "Please accept receive my emails!"
      },
      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>