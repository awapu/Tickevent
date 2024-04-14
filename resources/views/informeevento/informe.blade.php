<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Informe de tu evento - Tickevent</title>
  <style>

        body {
            text-align: center;
            font-family: Tahoma;
            color: #0a0a23;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }

  </style>

</head>
<body>

<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Informe del evento</title>
</head>

<body>
	<table >
		<tbody>
			<tr>
				<th>
                   <h1>Datos de ventas</h1> 
                </th>
			</tr>
			<tr class="data">
				<td>
                    <h3>Entradas Vendidas</h3>
                </td>
			</tr>
			<tr>
				<td class="notes">Para el evento <h4>{{$nomevento}}</h4> Ya ejecutado, en la ciudad de {{$ciudad}}, con un aforo de {{$aforo}}, se vendieron un total de: <br> Boletas a la enta: {{$ventasb}}  </td>
			</tr>
            <tr class="data">
				<td >
                    <h3>Asistentes al vento</h3>
                </td>
			</tr>
			<tr>
				<td class="notes"> El nuemro de personas que asistieron al evento fueron: <br> Boletas registradas: {{$ingresos}}</td>
			</tr>
		</tbody>
	</table>
<br>
<br>
    <table>
        <tbody>
            <tr class="data">
                <td></td>
                <td ><h3>Datos de asistentes</h3></td>
				<td></td>
				
			</tr>
            <tr class="data">
                <td>Codigo QR</td>
                <td >Nombre</td>
				<td>Correo</td>
				
			</tr>
			@foreach($asistentes as $key => $usuario)
            <tr class="data">
                <td>{{$usuario->codigo_qr}}</td>
                <td >{{$usuario->nombres}}</td>
				<td>{{$usuario->email}}</td>
			</tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
<!-- partial -->
  
</body>
</html>
