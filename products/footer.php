<div class="col-md-4 involve-panel">
                <div >
                    <div class="card card-body bg-light" id="google_translate_element"></div>
                </div>
                <h2>Involucrarse en el desarrollo</h2>
                <p>Participa en el desarrollo y mantenimiento de la aplicación <br>
                    Cuanteme de los problemas que hayas tenido para ir mejorando el sistema.
                    Participa activamente el desarrollo.
                </p>
                <h2>Licencia</h2>
                <div class="content px-2">
                    <p>Esta aplicación es un proyecto de código abierto bajo la <a href="http://opensource.org/licenses/MIT">licencia MIT</a>.
                        Esto le permite hacer casi cualquier cosa que desee siempre que incluya los derechos de autor en 'todas las copias o partes sustanciales del Software'. No se requiere atribución (aunque muy apreciada).</p>

                    <h5 class="text-bold text-dark mt-3">Lo que sí tiene <span class="text-success">permitido</span> hacer cone esta plantilla</h5>
                    <ul>
                        <li>Usar en proyectos comerciales.</li>
                        <li>Usar en proyectos personales/privados</li>
                        <li>Modificar el código a su gusto</li>
                        <li>Distribuir el código</li>
                        <li>Sublicencia: incorpore el trabajo en algo que tenga una licencia más restrictiva.</li>
                    </ul>

                    <h5 class="text-bold text-dark mt-3">Lo qué <span class="text-danger">no tienes permitido</span> con esta plantilla</h5>
                    <ul>
                        <li>El trabajo se proporciona 'tal cual'. No puedes responsabilizar al autor.</li>
                    </ul>

                    <h5 class="text-bold text-dark mt-3">Qué <span class="text-warning">deberías</span> hacer cuando uses esta plantilla</h5>
                    <ul>
                        <li>Incluya el aviso de licencia en todas las copias del proyecto.</li>
                        <li>Incluya el aviso de copyright en todas las copias del proyecto. Esto se aplica a todo, excepto el aviso en el pie de página de las páginas de ejemplo HTML.</li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
</body>
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
</html>