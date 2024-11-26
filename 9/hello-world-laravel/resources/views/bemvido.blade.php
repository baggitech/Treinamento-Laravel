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

    {{-- @for ($i = 1; $i <= 10; $i++)
    <p>O valor de i é: {{$i}}</p>
    <p>Mensagem de <b> Fulano</p>
    <p>Essa é uma mensagem qualquer.</p>
    <hr>
@endfor --}}

    {{-- @for ($i = 0; $i < count($ingredientes); $i++)
        <p>{{$ingredientes[$i]}}</p>
@endfor --}}


    @foreach ($ingredientes as $ing)
        <p>
            {{ $ing }} -
            @component('components.botao')
                @slot('href')
                    http://google.com
                @endslot
                @slot('cor')
                    blue
                @endslot
                Editar
            @endcomponent
            @component('components.botao')
                @slot('href')
                    http://facebook.com
                @endslot
                @slot('cor')
                    red
                @endslot
                Deletar
            @endcomponent
        </p>
    @endforeach

    {{-- Ver essa forma tabém --}}
    <x-botao href="http://facebook.com" cor="blue">
        Editar
    </x-botao>
    <x-botao href="http://google.com" cor="red">
        Deletar
    </x-botao>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
