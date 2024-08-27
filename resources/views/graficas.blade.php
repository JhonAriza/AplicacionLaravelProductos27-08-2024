@extends('layouts.app')

@section('content')
<?php
// Conecta a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "laravel-stock");
try {

} catch (PDOException $e) {
  echo "Conexion mala :( " . $e->getMessage();
}

// Consulta los datos de la tabla ventas

$resultado = mysqli_query($conexion, "SELECT products.name, product_users.quantity FROM products JOIN product_users ON products.id = product_users.product_id");

// Crea un arreglo con los datos en el formato requerido por Google Charts
$datos = array();
$datos[] = array('name', 'quantity');
while ($fila = mysqli_fetch_assoc($resultado)) {
    $datos[] = array($fila['name'], (int)$fila['quantity']);
}

// Convierte el arreglo de datos a formato JSON
$json = json_encode($datos);

?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div id="grafica"></div>

<script>
// Carga la biblioteca de Google Charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(dibujarGrafica);

function dibujarGrafica() {
  // Crea un objeto de datos con los datos en formato JSON
  var datos = new google.visualization.arrayToDataTable(<?php echo $json ?>);

  // Configura las opciones de la gráfica
  var opciones = {
    title: 'Ventas por cantidad',
    legend: { position: 'none' },
  };

  // Crea la gráfica de barras y la dibuja en el elemento "grafica"
  var grafica = new google.visualization.ColumnChart(document.getElementById('grafica'));
  grafica.draw(datos, opciones);

}

</script>


@endsection
