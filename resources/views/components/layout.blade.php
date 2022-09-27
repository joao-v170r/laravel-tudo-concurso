<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta title="description" content="Um site para auxiliar concurseiros a ficarem atualizados sobre os seus concursos e encontrarem concursos abertos ou próximos da abertura que sejam compatíveis com o perfil de concurso que o usuário deseja participar.">
    <title>TCN - {{ ucfirst($tituloPagina) }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"><!-- Importa o CSS do Laravel do bootstrap-->
</head>
<body>    
<header>
    <x-navbar tituloPagina={{ $tituloPagina }} />
</header>
<main class="bg-dark text-white">
    <section class="container-fluid">
        {{ $slot }}   
    </section>       
</main>
<footer>
    
</footer>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

