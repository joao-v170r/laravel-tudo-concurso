<x-layout tituloPagina="Tudo Concurso Noticias">
  <section class="row"></section>
  @foreach($topNoticias as $noticia)
  <a class="card-text decoration-none" href="{{ $noticia['url'] }}">
    <div class="card bg-dark text-white m-2 flex-row border border-0 p-3">
      <img class="card-img card-image" src=" {{ $noticia['urlToImage'] }}" alt="Card image">
      <div class="card-body">
        <h5 class="card-title">{{ $noticia['title'] }}</h5>
        <p class="card-text">{{ $noticia['description'] }}</p>
        <div class="d-flex align-items-end">
          <p class="card-text m-0">{{ $noticia['publishedAt'] }}</p>
        </div>
      </div>
    </div>
  </a>
  @endforeach
</x-layout>






