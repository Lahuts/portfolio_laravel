<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/headernavfooter.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="favicon/manifest.webmanifest">

    <title>Portfolio Alexis Huet</title>
</head>
<body>
    <header>
        <div>
            <a href="/"><h1><span>logo</span> Lahuts</h1></a>
        </div>
        <a href="contact.html">CONTACT</a>
    </header>
    <nav class="sidebar">
       <div class="container_burger">
        <div class="btn_burger"></div>
       </div>

        <ul class="hidden_nav">
            <li><a href="/">PORTFOLIO</a></li>
            <li><a href="/about">A PROPOS</a></li>
            <li><a href="/projects">PROJETS</a></li>
            <li><a href="/contact">CONTACT</a></li>
            <li><a href="/veilleit">VEILLE IT</a></li>
        </ul>
    </nav>
<main>
    <section class="contact">
        <div>
            <h2>Vous voulez <br> plus informations ?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            <a href="mailto:alexis.huet.m@gmail.com" class="btn_contact">ENVOYER UN MAIL</a>
        </div>
    </section>
</main>
    <footer>
        <p>Copyright &copy; 2023 Lahuts</p>
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
    <div class="modal-document disabled">
        <section class="modal-enab">
            <div class="close">
                <div class="close-cross"></div>
            </div>
            <h3>documents pour le bts</h3>
            <ul>
                <li>
                    <a href="asset/CV.pdf" download >
                        <img src="/asset/640x360.png" alt="" data-title="CV">
                    </a>
                </li>
                <li><a href=""><img src="/asset/640x360.png" alt=""></a></li>
            </ul>
        </section>
    </div>
</body>
</html>