<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Evaluación de Certificación</title>


  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/estilos.css" rel="stylesheet">

</head>

<body>

  <header>
    <div class="header-contenedor">
      <div class="header-logo">
        <a href="index.html"><img src="../img/logo_spf.png" alt=""></a>
      </div>
      <div class="header-descripcion">
        <div class="header-candidato">
          <span><strong>Candidato:</strong> </span>
          <span>Sofia Villa Mancera</span>
        </div>
        <div class="header-test">
          <span><strong>Test: </strong> <span
              style="font-family: consolas, monospace;">EC0000</span> </span>
          <span>Armado de avioncitos de papel</span>
        </div>
        <div class="header-evaluador">
          <span><strong>Evaluador:</strong> </span>
          <span>José García Blanco</span>
        </div>
      </div>
    </div>
  </header>

  <main>
    <!-- INICIA formulario de preguntas y respuestas -->
    <form id="form">

      <fieldset id="group1">
        <div class="t-pregunta">
          <span class="t-pregunta-num"></span>
          <p id=form-prompt class="t-pregunta-title">Selecciona cuatro tipos de avión de papel:</p>
          <p style="font-size: 12px; line-height: 15px; color: #C5C8D1; margin-left: .4em;">Seleccione la respuesta que
            considera correcta:</p>

          <div class="t-pregunta-respuestas">
            <input type="radio" id="respuesta)_b_01" name="grupo1" value="001">
            <label for="respuesta)_b_01" class="t-respuestas-item">Combate, Delta, Nakamura y Armada</label>
            <input type="radio" id="respuesta)_b_02" name="grupo1" value="002">
            <label for="respuesta)_b_02" class="t-respuestas-item">Combate, Papiro, Plano y Delta</label>
            <input type="radio" id="respuesta)_b_03" name="grupo1" value="003">
            <label for="respuesta)_b_03" class="t-respuestas-item">Papiroflexia, Papiro, Papel y Color</label>
            <input type="radio" id="respuesta)_b_04" name="grupo1" value="004">
            <label for="respuesta)_b_04" class="t-respuestas-item">Delta, Nakamura, Armada y Plano</label>
          </div>
        </div>
      </fieldset>

      <fieldset id="group2">
        <div class="t-pregunta">
          <span class="t-pregunta-num"></span>
          <p id=form-prompt class="t-pregunta-title">Selecciona cuatro tipos de avión de papel:</p>
          <p style="font-size: 12px; line-height: 15px; color: #C5C8D1; margin-left: .4em;">Seleccione la respuesta que
            considera correcta:</p>

          <div class="t-pregunta-respuestas">
            <input type="radio" id="respuesta_b_01" name="grupo2" value="001">
            <label for="respuesta_b_01" class="t-respuestas-item">Combate, Delta, Nakamura y Armada</label>
            <input type="radio" id="respuesta_b_02" name="grupo2" value="002">
            <label for="respuesta_b_02" class="t-respuestas-item">Combate, Papiro, Plano y Delta</label>
            <input type="radio" id="respuesta_b_03" name="grupo2" value="003">
            <label for="respuesta_b_03" class="t-respuestas-item">Papiroflexia, Papiro, Papel y Color</label>
            <input type="radio" id="respuesta_b_04" name="grupo2" value="004">
            <label for="respuesta_b_04" class="t-respuestas-item">Delta, Nakamura, Armada y Plano</label>
          </div>
        </div>
      </fieldset>

      <fieldset id="group3">
        <div class="t-pregunta">
          <span class="t-pregunta-num"></span>
          <p id=form-prompt class="t-pregunta-title">Selecciona cuatro tipos de avión de papel:</p>
          <p style="font-size: 12px; line-height: 15px; color: #C5C8D1; margin-left: .4em;">Seleccione la respuesta que
            considera correcta:</p>

          <div class="t-pregunta-respuestas">
            <input type="radio" id="respuesta_c_01" name="grupo3" value="001">
            <label for="respuesta_c_01" class="t-respuestas-item">Combate, Delta, Nakamura y Armada</label>
            <input type="radio" id="respuesta_c_02" name="grupo3" value="002">
            <label for="respuesta_c_02" class="t-respuestas-item">Combate, Papiro, Plano y Delta</label>
            <input type="radio" id="respuesta_c_03" name="grupo3" value="003">
            <label for="respuesta_c_03" class="t-respuestas-item">Papiroflexia, Papiro, Papel y Color</label>
            <input type="radio" id="respuesta_c_04" name="grupo3" value="004">
            <label for="respuesta_c_04" class="t-respuestas-item">Delta, Nakamura, Armada y Plano</label>
          </div>
        </div>
      </fieldset>

      <div>
        <button type="button" class="button" data-toggle="modal" data-target="#exampleModal">Enviar Respuestas</button>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center mb-5">
              ¿Enviar respuestas a evaluación? <br> <br>
              <button type="button" class="btn btn-secondary boton-sec boton-70 mr-3" data-dismiss="modal">NO</button>
              <button type="button" class="btn btn-primary boton boton-70">SÍ</button>
            </div>

          </div>
        </div>
      </div>

    </form>
    <!-- TERMINA formulario de preguntas y respuestas -->



  </main>

  <footer>
    <img src="../img/logo_seguridad_footer.png" alt="" class="d-block mx-auto py-5">
    <div class="footer-contacto">Mesa de ayuda: (55) 5484 6700</div>
  </footer>

  <script src="../js/jquery-3.4.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/scripts.js"></script>
</body>

</html>