<!DOCTYPE html>
<html>
<head>
    <title>Formulario Api Lismar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 bg-light">
        <h2>Formulario Api Lismar</h2>
        <form action="{{ route('procesar-formulario') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Ingrese la cantidad">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su teléfono">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="{{ route('formulario') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>

        @if(isset($codigo))
            <div class="text-center mb-2">
                @if(isset($codigo))
                    {!! QrCode::size(100)->generate($codigo); !!}
                @endif
            </div>
            
            <div class="text-center">
                @if(isset($codigo))
                    <b>Codigo Respuesta:</b> {{$codigo}}
                @endif
            </div>
        @else
            <div class="text-center">
               <b>No se ha generado consulta.</b>
            </div>
        @endif
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
