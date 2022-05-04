<!DOCTYPE html>
<html lang="en">
<head>
  <title>Computo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


  <style>
    .header{
      background-color: rgb(100, 198, 236);
      padding: 30px;
    }




  </style>

</head>

<body>
<div class="container"><br><br>
  <h2 class="header">Encuesta de computo en la nube</h2><br>
  <form action="mostrar.php" method="post">
    <div class="form-group">
      <label for="pregunta1"><strong>1. ¿Sabes o has escuchado del termino Cloud Computing (computo en la nube)?</strong></label>
      <div class="form-check">
        <label class="form-check-label" for="radio1">
          <input type="radio" class="form-check-input" id="radio1" name="respuesta1" value="si">SI
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="radio2">
          <input type="radio" class="form-check-input" id="radio2" name="respuesta1" value="no">NO
        </label>
      </div>
    </div><br>

    <div class="form-group">
      <label for="pregunta2"><strong>2. ¿Cree usted que es importante que la FIME implemente Cloud Computing?</strong></label>
      <div class="form-check">
        <label class="form-check-label" for="radio1">
          <input type="radio" class="form-check-input" id="radio1" name="respuesta2" value="si">SI
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="radio2">
          <input type="radio" class="form-check-input" id="radio2" name="respuesta2" value="no">NO
        </label>
      </div>
    </div><br>

    <div class="form-group">
      <label for="pregunta3"><strong>3. ¿Conoce cuales son los servicios que se ofrecen en Cloud Computing?</strong></label>
      <div class="form-check">
        <label class="form-check-label" for="radio1">
          <input type="radio" class="form-check-input" id="radio1" name="respuesta3" value="si">SI
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="radio2">
          <input type="radio" class="form-check-input" id="radio2" name="respuesta3" value="no">NO
        </label>
      </div>
    </div><br>

    <div class="form-group">
      <label for="pregunta4"><strong>4. ¿Cual de los servicios de Cloud Computing que usted conoce, cree que se pueda ofrecer o aplicar en la FIME?</strong></label><br>
      <div class="form-group">
        <textarea class="form-control" rows="5" id="comment" name="respuesta4"></textarea>
      </div>
    </div><br>

      <div class="form-group">
        <label for="pregunta5"><strong>5. ¿Cuales serian los principales beneficios de Cloud Computing en la carrera?</strong></label><br>
        <textarea class="form-control" rows="5" id="comment" name="respuesta5"></textarea>
      </div><br>


      <div class="form-group">
        <label for="pregunta5"><strong>6. Marca la casilla si has utilizado alguno de los siguientes servicios en la nube:</strong></label><br>

        <div class="form-check">
          <label class="form-check-label" for="check1">
            <input type="checkbox" class="form-check-input" id="check1" name="respuesta6" value="something" checked>Classroom
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label" for="check2">
            <input type="checkbox" class="form-check-input" id="check2" name="respuesta6" value="something">Gmail
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" id="check3" name="respuesta6" value="something">Google Meet
          </label>
        </div>
      </div><br>

      <div class="form-group">
        <label for="pregunta7"><strong>7. ¿Cree usted que implementar Cloud Computing es caro?</strong></label>
        <div class="form-check">
          <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" id="radio1" name="respuesta7" value="si">SI
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label" for="radio2">
            <input type="radio" class="form-check-input" id="radio2" name="respuesta7" value="no">NO
          </label>
        </div>
      </div><br>

      <div class="form-group">
        <label for="pregunta8"><strong>8. ¿Cuales cree usted que sean los beneficios de implementar Cloud Computing?</strong></label><br>
        <textarea class="form-control" rows="5" id="comment" name="respuesta8"></textarea>
      </div><br>

    <button type="submit" class="btn btn-primary">Submit</button><br><br>
  </form>
</div>

</body>
</html>
