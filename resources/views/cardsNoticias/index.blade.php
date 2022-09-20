<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">      
    <link rel="stylesheet" href="{{ asset('css/cardsNoticias.css') }}">  
    <title>Tconcurso</title>
</head>
<body class="bodyCN">
    <header class="headerCN">
        <div class="headTC">
            <img class="imgTCLogo" src="{{ asset('img/iconPrincipal.svg') }}">
            <img class="imgIconesTC" src="{{ asset('img/iconePrancheta.svg')}}">
            <p class ="iconesTextos">Meus Concursos</p>
            <img class="imgIconesTC" src="{{ asset('img/iconeTemplinho.svg')}}">
            <p class="iconesTextos">Minhas Bancas</p>
            <img class="TiltuloTC" src="{{ asset('img/TudoConcursoNoticias.svg')}}">
        </div>
    </header> 
    
    <main>
        <div class="card bg-dark text-white w-25 m-2">
            <img class="card-img" src="{{asset('img/concurso-pm-am-1.webp')}}" alt="Card image">
            <div class="card-body">
              <h5 class="card-title">Concurso Polícia Militar(Amazonas)</h5>
              <p class="card-text">Concurso PM AM (Polícia Militar do Amazonas) contará com 1.350 vagas, sendo 1.000 para soldados e 350 oficiais, com iniciais até R$ 7,1 mil.</p>
              <p class="card-text">Noticia    9 stembro, sex</p>
            </div>
          </div>

          <div class="card bg-dark text-white w-25 m-2">
            <img class="card-img" src="{{asset('img/concurso-pm-ap-1.webp')}}" alt="Card image">
            <div class="card-body">
              <h5 class="card-title">Concurso Polícia Militar(Amapá)</h5>
              <p class="card-text">Concurso PM AP (Polícia Militar do Amapá) oferecerá 600 vagas para o cargo de soldado, que pede nível superior, com inicial de R$ 3,7 mil.</p>
              <p class="card-text">Noticia    29 dezembro, qua</p>
            </div>
          </div>

          <div class="card bg-dark text-white w-25 m-2">
            <img class="card-img" src="{{asset('img/concurso-pm-ce-3-1.webp')}}" alt="Card image">
            <div class="card-body">
              <h5 class="card-title">Concurso Polícia Militar(Espírito Santo)</h5>
              <p class="card-text">Concurso PM ES (Polícia Militar do Estado do Espírito Santo) contará com oportunidades para diversos cargos, com iniciais de até R$ 5,8 mil.</p>
              <p class="card-text">Noticia    3 janeiro, seg</p>
            </div>
          </div>
    </main>



    <footer>
        
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>







