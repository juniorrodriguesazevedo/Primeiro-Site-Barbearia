@extends("layout.main")
@section("title", "Barbearia do Lucas")

@section("css")
    <link rel="stylesheet" href="/css/index.css">
@endsection

@section("content")
<main>
<ul class="produtos">
    <li>
       <h2>Barba</h2>
       <img src="/img/produtos/barba.jpg" alt="barba"> 
       <p class="paragrafo-descricao">Barba bem feita e desenhada</p>
       <p class="paragrafo-preco">R$ 5,00</p>
    </li>
    <li>
       <h2>Cabelo</h2>
       <img src="/img/produtos/cabelo.jpg" alt="cabelo"> 
       <p class="paragrafo-descricao">Cabelinho devidamente na régua</p>
       <p class="paragrafo-preco">R$ 10,00</p>
    </li>
    <li>
       <h2>Cabelo + Barba</h2>
       <img src="/img/produtos/cabelo-barba.jpg" alt="cabelo+barba"> 
       <p class="paragrafo-descricao">Bigodinho fininho e cabelinho na régua</p>
       <p class="paragrafo-preco">R$ 15,00</p>
    </li>
</ul>   
</main>

@endsection