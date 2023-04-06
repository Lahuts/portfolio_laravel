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
    <section class="projects">
        <h2>Projets</h2>
        <p>Mes projets de développement informatique sont des initiatives visant à créer des solutions logicielles qui répondent à des besoins spécifiques.</p>
        <p> Ils peuvent prendre différentes formes, allant de la création d'applications web à la conception de systèmes d'information pour les entreprises.</p>
        <ul class="project_grid">
            <li>
                <figure>
                    <img src="asset/gmail.png" alt="">
                    <figcaption>
                        <h3>Gmail</h3>
                        <p>Réalisation d'une maquette fonctionelle du site internet Gmail</p>
                        <ul class="stack_list">
                            <li>Web</li>
                            <li>Design</li>
                            <li>PHP</li>
                            <li>JS</li>
                            <li>SQL</li>
                        </ul>
                    </figcaption>
                </figure>
            </li>
            <li class="grid_right">
                <figure>
                    <img src="asset/streaming.png" alt="">
                    <figcaption>
                        <h3>Streamow</h3>
                        <p>Réalisation d'une maquette d'un site de streaming</p>
                        <ul class="stack_list">
                            <li>Web</li>
                            <li>Design</li>
                            <li>HTML</li>
                            <li>JS</li>
                        </ul>
                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="asset/ligue.png"">
                    <figcaption>
                        <h3>Gestionnaire de Ligue</h3>
                        <p>Amélioration d'une application existante de gestion de ligue</p>
                        <ul class="stack_list">
                            <li>JAVA</li>
                            <li>SQL</li>
                            <li>JUNIT</li>
                            <li>Intranet</li>
                        </ul>
                    </figcaption>
                </figure>
            <li class="grid_right">
                <figure>
                    <img src="https://dummyimage.com/640x360/fff/aaa" alt="">
                    <figcaption>
                        <h3>Solution365</h3>
                        <p>Outil de récupération des données provenant d'Office 365</p>
                        <ul class="stack_list">
                            <li>PowerShell</li>
                            <li>Electron</li>
                            <li>JS</li>
                            <li>Office</li>
                        </ul>
                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="https://dummyimage.com/640x360/fff/aaa" alt="">
                    <figcaption>
                        <h3>AD Access</h3>
                        <p>Outil de récuperation de données un active directory et formalisation dans un tableau excel dynamique</p>
                        <ul class="stack_list">
                            <li>PowerShell</li>
                            <li>Excel</li>
                            <li>AD</li>
                            <li>Windows</li>
                        </ul>
                    </figcaption>
                </figure>
            </li>
            <li class="grid_right">
                <figure>
                    <img src="asset/hitec.png" alt="">
                    <figcaption>
                        <h3>Hitec</h3>
                        <p>Réalisation de site vitrine à destination d'un professionnel du batiment</p>
                        <ul class="stack_list">
                            <li>Web</li>
                            <li>PHP</li>
                            <li>NO_CODE</li>
                            <li>JS</li>
                        </ul>
                    </figcaption>
                </figure>
            </li>
        </ul>
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