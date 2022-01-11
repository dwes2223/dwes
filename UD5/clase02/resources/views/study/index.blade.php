<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Lista de estudios</h1>


<table border="1">
<tr>
    <th>Código</th>
    <th>Nombre</th>
    <th>Abreviatura</th>
</tr>
@forelse ($studies as $study)
<tr>
    <td>{{$study->code}} </td>
    <td>{{$study->name}} </td>
    <td>{{$study->abreviation}} </td>
    <td> <a href="/studies/{{$study->id}}">Ver</a></td>
</tr>
@empty
<tr>
    <td colspan="3">No hay estudios registrados</td>
</tr>
@endforelse
</table>

</body>
</html>