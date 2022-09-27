# laravel-tudo-concurso

<img src="https://skitter-vicuna-79a.notion.site/image/https%3A%2F%2Fs3-us-west-2.amazonaws.com%2Fsecure.notion-static.com%2F818aa518-716b-4256-abcd-91665581a37b%2FTudoConcurso.svg?table=block&id=0e62a307-f68e-4abf-813a-d9a675f2e0e3&spaceId=be289399-f714-4c0c-bf5b-8fa722abe7f9&userId=&cache=v2">

<p align="center">
<a href="https://skitter-vicuna-79a.notion.site/image/https%3A%2F%2Fs3-us-west-2.amazonaws.com%2Fsecure.notion-static.com%2F818aa518-716b-4256-abcd-91665581a37b%2FTudoConcurso.svg?table=block&id=0e62a307-f68e-4abf-813a-d9a675f2e0e3&spaceId=be289399-f714-4c0c-bf5b-8fa722abe7f9&userId=&cache=v2"></a>
  
## Sobre o projeto

Trata de um site para auxiliar concurseiros a ficarem atualizados sobre os seus concursos e encontrarem concursos abertos ou próximos da abertura que sejam compatíveis com o perfil de concurso que o usuário deseja participar.

## Preparação do ambiente 
<code>
  
    composer -v 
    #version 2.3.10
    php -v
    #version 8.1.8
    node -v
    #v16.17.0
    npm -v
    #8.15.0

    git clone https://github.com/joao-v170r/laravel-series-alura

    composer install
    #caso de erro tente composer install --ignore-platform-reqs

    php artisan serve
    #inicia o servidor padrão localhost:8000
  
</code>
  
## Ferramentas  utilizadas no projeto

<table>

  <td>
    
    Git e Github      Controle de Versão
  
    Azure Dev Ops     Documentação
 
    VsCode            Editor de Código
  
    Bootstrap v5.2    Framework CSS
  
    Laravel v9        Framework Back-end
  
    Blade             Framework Front-end
    
  </td>

</table>

## O por que da Linguagem ?

A linguagem escolhida foi PHP pelar excelente portabilidade nela na web e como e ela tem uma excelente integração com o HTML e CSS e JAVASCRIPT é MYSQL, com o Framework Full Stack Laravel  a integração entre os componentes ficou ainda mais fácil, utilizando o sistema MVC e POO programação orientada a objeto o sistema ficara completo. No fronte utilizarem o Blade uma extensão nativa do laravel para front-end. Mais adiante no projeto o laravel sera utilizado somente como back-end como uma web API e para front utilizaremos o React pela sua reatividade e utilização no mercado atual a sim como o laravel.

## API utilizadas no projeto

Noticias: NewsApi, TwitterApi

## Padrões utilizados no projeto

### Padrão de rotas
 
<table>

  <td>
  
    GET        /photos                  index       photos.index
  
    GET        /photos/crate            create      photos.create
  
    POST       /photos/{photo}          store       photos.store

    GET        /photos/{photo}          show        photos.show
  
    GET        /photos/{photo}/edit     edit        photos.edit
  
    PUT/PATCH  /photos/{photo}          update      photos.update
  
    DELETE     /photos/{photo}          destroy     photos.destroy

  </td>

</table>
