<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    @yield("css")
</head>
<body>
    <header>
        <h1><a href="/"><img src="/img/logo-branco.png" alt="logo-inicial"></a></h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/contato">Contato<a></li>
            </ul>
        </nav>
    </header>
        @yield("content")
    <div class="mapa-google">
        <section>
            <h2>Venha nos visitar!</h2>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1973.5480500643357!2d-47.77313340602883!3d-8.392208572804886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9327b5f1d616a82f%3A0x37b766b8fc225e8c!2zOMKwMjMnMzAuNyJTIDQ3wrA0NicyNC44Ilc!5e0!3m2!1spt-BR!2sae!4v1609455149754!5m2!1spt-BR!2sae" width="1150" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
    </div>
    <footer>
        <img src="img/imagem-rodape.png" alt="imagem-rodape" class="imagem-rodape">
    </footer>
    <div class="copyright"><strong>&copy; Copyright - Desenvolvido por: <a href="https://www.linkedin.com/in/valdemirrodriguesazevedojunior/" target="_blank" rel="noopener noreferrer">Junior Rodrigues</a></strong></div>
</body>
</html>