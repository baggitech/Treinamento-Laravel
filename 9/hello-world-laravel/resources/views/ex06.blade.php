<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <h1>Includes Hello World</h1>

    {{-- (If) PARA INCLUIR SOMENTE SE O COMPONENTE EXISTIR --}}
    {{-- @includeIf('components.mycomponent2', ['html' => '<h1>Componente 1</h1>']) --}}

    {{-- (When) PARA EXIBIR SOMENTE SE DETERMINADA VARIÁVEL FOR "TRUE" --}}
    {{-- @includeWhen(true, 'components.mycomponent2', ['html' => '<h1>Componente 1</h1>']) --}}

    {{-- (Unless) PARA EXIBIR SOMENTE SE DETERMINADA VARIÁVEL FOR "FALSE" --}}
    {{-- @includeUnless(false, 'components.mycomponent2', ['html' => '<h1>Componente 1</h1>']) --}}

    {{-- (First) PARA EXIBIR SOMENTE O PRIMEIRO COMPONENTE QUE EXISTIR NA ORDEM DA POSIÇÃO --}}
    {{-- @includeFirst(
    ['components.mycomponent2', 'components.mycomponent3'],
    ['html' => '<h1>Componente 1</h1>']
    ) --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
