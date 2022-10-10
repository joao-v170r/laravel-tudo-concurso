<x-layout tituloPagina="Tudo Concurso Noticias">
  @foreach($topNoticias as $noticia)
  <div class="card bg-dark text-white m-2 flex-row border border-0 p-3">
    <img class="card-img  w-25" src=" {{ $noticia['urlToImage'] }}" alt="Card image">
    <div class="card-body">
      <h5 class="card-title">{{ $noticia['title'] }}</h5>
      <p class="card-text">{{ $noticia['description'] }}</p>
      <p class="card-text">{{ $noticia['url'] }}</p>
      <p class="card-text">{{ $noticia['publishedAt'] }}</p>
    </div>
  </div>
  @endforeach
</x-layout>






