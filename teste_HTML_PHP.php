<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>primeiro site em PHP uhul</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="Style.css">
        
        <style type= "text/css">
            .linha{
                font-weight: bold;
                color: blueviolet;
                padding-left: 20px;
                line-height: 50px;
            }
        </style>
    </head>
    <body>
        <header>
            <img src="https://s3-us-west-2.amazonaws.com/robogarden-new/Articles/upload/blogs/lg-leverage-of-coding.jpg"
            alt="Ilustração de um código aleatório">
            <h1 id="title">Título Mais relevante</h1>
        </header>
        <section>
            <header>
                <h2 class="subtitle">Posts (por exemplo)</h2>
            </header>
            <article class="post">
                <header>
                    <h3 class="post_title">Post #1</h3>
                    <img src="https://www.bgosoftware.com/blog/wp-content/uploads/2016/03/insidepost_coding.jpg"
                    alt="Imagem aleatória com código na tela">
                </header>
                <p>
                    Este Texto aqui serve apenas como meio de 
                    exemplificar a utilização do parágrafo no html 
                    e a utilização de links, então segue o link do meu github e do meu email
                    para abrir numa nova aba utilizando o target=_blank 
                    <a href="https://github.com/ZezinZK/PHP-HTML-INIT" target="_blank">Link do git</a>
                    <a href="mailto:josevogeleysa2016@gmail.com">email</a> e telefone caso esteja vendo pelo celular 
                    <a href="tel:+5581918182828">telefone</a>

                </p>
            </article>
        </section>

        <?php
            for ($i = 0; $i < 10; $i++){
                print("<span class=\"linha\">Linha numero ". $i . "</span><br />");
            }
        ?>
        <footer>
            <ul>Lista desordenada
                <li>
                    email: <a href="mailto:josevogeleysa2016@gmail.com">josevogeleysa2016@gmail.com</a>
                </li>
                <li>
                    github: <a href="https://github.com/ZezinZK/PHP-HTML-INIT" target="_blank">Link do git</a>
                </li>

            </ul>
        </footer>   
    </body>
    <script type = "text/javascript">
        $(document).ready(function(){
            alert("OLOCO!");
        })
        </script>
</html>

