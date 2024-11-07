<?php

include("header.php");

?>


<div class="container">
  <div class="row">
    <div class="col-md-12 pt-3">
      <p class="d-flex justify-content-end"><?php echo date("Y-m-d | H:i:s") ?></p>
    </div>
    <div class="col-md-12 pb-5">
      <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">-</th>
            <th scope="col">Salón</th>
            <th scope="col">Encargado</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="bg-success"></td>
            <td>Comisión Primera</td>
            <td>Nestor</td>
            <td>Sin novedad</td>
          </tr>
          <tr>
            <td class="bg-danger text-center"><button class="btn btn-warning text-white"><a href="detalles.php"><i class="bi bi-card-checklist"></i></a></button></td>
            <td>Comisión Quinta</td>
            <td>Darwin</td>
            <td>Con novedades</td>
          </tr>
          <tr>
            <td class="bg-success"></td>
            <td>Comisión Sexta</td>
            <td>Camilo</td>
            <td>Sin novedad</td>
          </tr>
          <tr>
            <td class="bg-danger text-center"><button class="btn btn-warning text-white"><a href="detalles.php"><i class="bi bi-card-checklist"></i></a></button></td>
            <td>Comisión Sexta</td>
            <td>David</td>
            <td>Con novedades</td>
          </tr>
          <tr>
            <td class="bg-success"></td>
            <td>Comisión Ética</td>
            <td>Leonardo</td>
            <td>Sin novedad</td>
          </tr>
          <tr>
            <td class="bg-success"></td>
            <td>Salón Galán</td>
            <td>Jawuer</td>
            <td>Sin novedad</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-6">
      <div>
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <div class="col-6">
      <div>
        <canvas id="myChart2"></canvas>
      </div>
    </div>
  </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx2 = document.getElementById('myChart2');

  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

</body>

</html>