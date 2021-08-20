<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invitacion Boda</title>
</head>

<body>
    <div style="width: 600px;display:block;margin:0px auto;padding:16px;">

        <h3 style="text-align: center;">Boda de Chinos & Pablo</h3>
        <p>Invitado: {{ $request->nombre }}</p>
        <p>Teléfono: {{ $request->telefono }}</p>
        <p>Asistira a la boda: {{ ($request->attend) }}</p>
        <p>Vendra acompañado: {{ ($request->friends) }}</p>
        <p>¿Con cuantos acompañantes vendra?: {{ ($request->paxs) }}</p>
        <p>Nombre de los acompañantes: {{ ($request->pax_names) }}</p>
        <p>Mensaje: {{ ($request->message) }}</p>
    </div>
</body>

</html>
