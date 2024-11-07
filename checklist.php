<?php

include("header.php");

?>


<div class="container">
  <div class="row">
    <div class="card">
      <div class="col-md-12 py-5">
        <form action="">
          <h2>CheckList General</h2>
          <div class="row">
            <div class="col-12 p-3">
              <input class="form-control" type="text" readonly disabled value="Pepito Patata">
            </div>
            <div class="col-6 p-3">
              <input class="form-control" type="text" readonly disabled value="<?php echo date("Y-m-d"); ?>">
            </div>
            <div class="col-6 p-3">
              <input class="form-control" type="text" readonly disabled value="<?php echo date("H:i:s"); ?>">
            </div>
            <div class="col-12 p-3">
              <label>Lugar de revisión</label>
              <select class="form-control" name="" id="">
                <option value="" disabled selected> --> Seleccione <-- </option>
                <option value="Comisión Primera">Comisión Primera</option>
                <option value="Comisión Segunda">Comisión Segunda</option>
                <option value="Comisión Tercera">Comisión Tercera</option>
                <option value="Comisión Cuarta">Comisión Cuarta</option>
                <option value="Comisión Quinta">Comisión Quinta</option>
                <option value="Comisión Sexta">Comisión Sexta</option>
                <option value="Comisión Septima">Comisión Septima</option>
                <option value="Comisión Legal de cuentas">Comisión Legal de cuentas</option>
                <option value="Comisión Acusaciones">Comisión Acusaciones</option>
                <option value="Comisión Ordenamiento Territorial">Comisión Ordenamiento Territorial</option>
                <option value="Salon Eliptico">Salon Eliptico</option>
                <option value="Salon Eliptico">Salon Boyacá</option>
                <option value="Salon Eliptico">Salon Galán</option>
                <option value="Salon Eliptico">Salon Amarillo</option>
              </select>
            </div>
            <div class="col-3 p-3">
              <label>Transmisión YouTube</label>
              <select class="form-control" name="" id="">
                <option value="Ok">Ok</option>
                <option value="N/A">N/A</option>
                <option value="NOVEDAD">NOVEDAD</option>
              </select>
            </div>
            <div class="col-3 p-3">
              <label>Transmisión Meet/Zoom</label>
              <select class="form-control" name="" id="">
                <option value="Ok">Ok</option>
                <option value="N/A">N/A</option>
                <option value="NOVEDAD">NOVEDAD</option>
              </select>
            </div>
            <div class="col-3 p-3">
              <label>Transmisión OBS</label>
              <select class="form-control" name="" id="">
                <option value="Ok">Ok</option>
                <option value="N/A">N/A</option>
                <option value="NOVEDAD">NOVEDAD</option>
              </select>
            </div>
            <div class="col-3 p-3">
              <label>Micrófonos</label>
              <select class="form-control" name="" id="">
                <option value="Ok">Ok</option>
                <option value="N/A">N/A</option>
                <option value="NOVEDAD">NOVEDAD</option>
              </select>
            </div>
            <div class="col-3 p-3">
              <label>Sonido</label>
              <select class="form-control" name="" id="">
                <option value="Ok">Ok</option>
                <option value="N/A">N/A</option>
                <option value="NOVEDAD">NOVEDAD</option>
              </select>
            </div>
            <div class="col-3 p-3">
              <label>Autoponchado</label>
              <select class="form-control" name="" id="">
                <option value="Ok">Ok</option>
                <option value="N/A">N/A</option>
                <option value="NOVEDAD">NOVEDAD</option>
              </select>
            </div>
            <div class="col-3 p-3">
              <label>Pantallas/Vídeo</label>
              <select class="form-control" name="" id="">
                <option value="Ok">Ok</option>
                <option value="N/A">N/A</option>
                <option value="NOVEDAD">NOVEDAD</option>
              </select>
            </div>
            <div class="col-3 p-3">
              <label>Biometrico</label>
              <select class="form-control" name="" id="">
                <option value="Ok">Ok</option>
                <option value="N/A">N/A</option>
                <option value="NOVEDAD">NOVEDAD</option>
              </select>
            </div>
            <div class="col-3 p-3">
              <label>Legisla</label>
              <select class="form-control" name="" id="">
                <option value="Ok">Ok</option>
                <option value="N/A">N/A</option>
                <option value="NOVEDAD">NOVEDAD</option>
              </select>
            </div>
            <div class="col-3 p-3">
              <label>Votaciones</label>
              <select class="form-control" name="" id="">
                <option value="Ok">Ok</option>
                <option value="N/A">N/A</option>
                <option value="NOVEDAD">NOVEDAD</option>
              </select>
            </div>
            <div class="col-12 p-3">
              <label>Detalles de novedades</label>
              <textarea class="form-control" name="" id=""></textarea>
            </div>
            <div class="col-12 p-3">
              <input class="form-control btn btn-success" type="submit" value="Enviar">
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>
</div>
</body>

</html>