<?php
include("header.php");
?>
<!-- Content Header (Page header) -->
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
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="dist/img/Face.png" alt="User Avatar">
            </div>

            <h3 class="profile-username text-center">Alejandro Landini</h3>

            <p class="text-muted text-center">Desarrollador de Software</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Productos</b> <a class="float-right">6</a>
              </li>
              <li class="list-group-item">
                <b>Seguidores</b> <a class="float-right">96</a>
              </li>
              <li class="list-group-item">
                <b>Ventas</b> <a class="float-right">122</a>
              </li>
            </ul>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Acerca de mi</h3>
          </div>
          <!-- /.card-header -->
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
            </p>

            <hr>

            <strong><i class="far fa-file-alt mr-1"></i> Notas</strong>

            <p class="text-muted">Gracias por elegir mis productos y servicios!.</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Actividades</a></li>
              <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Contacto!</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="img/ecm.jpg" alt="user image">
                    <span class="username">
                      <a href="#">Esteban Ceniceros Martinez</a>
                      <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                    </span>
                    <span class="description">México, Ciudad de México</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                  Grupo Empresarial Tecnológico SA de CV <br>
                  Director General <br>
                  Alejando es un profesional  con una gran capacidad técnica y siempre dispuesto a ayudar. Gracias a su valioso apoyo he podido resolver múltiples problemas. <br>
                  En verdad tiene pasión y vocación humanista y de ayuda al prójimo. <br>
                  Siempre confió en sus recomendaciones y soluciones y me siento desde México con la seguridad que cuento con un aliado desde Argentina, un abrazo Alex
                  </p>

                  <p>
                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    <span class="float-right">
                      <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Comments (-)
                      </a>
                    </span>
                  </p>

                  <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="img/my.jpg" alt="User Image">
                    <span class="username">
                      <a href="#">Mohamed Youba</a>
                      <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                    </span>
                    <span class="description">Mauritania</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                  Mauritanian domain name '.MR' Registrar <br>
                  Freelancer <br>
                  When I start using AppGini, my first need was to find AdminLTE theme and support. Alejandro plugin was the fisrt and the only one I try and use for my projects till now.
                  After couple months, I have the honnor to discuss with him in WhatsApp, I can't tell you the feeling ...
                  The only thing I can say is 'this man is a great guy', not only for his talent on coding, but just as human.
                  </p>
                  <p>
                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    <span class="float-right">
                      <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Comments (-)
                      </a>
                    </span>
                  </p>
                  <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="img/rg.jpeg" alt="User Image">
                    <span class="username">
                      <a href="#">Ronald Ngoda</a>
                      <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                    </span>
                    <span class="description">Kenya</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                  Software developer <br>
                  Freelancer <br>
                  Alejandro is a committed and enthusiastic software developer. 
                  He has a keen interest on delivering the best services, 
                  I have used some of his open source products and I can attest he's simply the best.
                  </p>
                  <p>
                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    <span class="float-right">
                      <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Comments (-)
                      </a>
                    </span>
                  </p>
                  <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName2" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName2" placeholder="Apellido">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Comentarios</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Quiero recibir notificaciones!
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->


<?php
include("footer.php");
?>