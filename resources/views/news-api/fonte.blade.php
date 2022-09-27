<x-layout tituloPagina="fontes noticias">
    <div class="container">
        <div>
            <h1>
                Principais Fontes
                <small class="text-muted">fontes de noticias sobre concurso</small>
            </h1>
        </div>
        <div class="container">
            @foreach($fontesApi as ['id' => $idFonte, 'name' =>  $tituloFonte, 'description' => $descricaoFonte, 'category' => $categoriaFonte, 'url' => $urlFonte])
                <div class="card text-center text-dark m-3">
                    <div class="card-header">
                    {{ $idFonte }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $tituloFonte }}</h5>
                        <p class="card-text">{{ $descricaoFonte }}</p>
                        <p class="card-text"><kbd>{{ $categoriaFonte }}</kbd></p>
                        <a href="{{ $urlFonte }}" class="btn btn-primary">Pagina Site</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>