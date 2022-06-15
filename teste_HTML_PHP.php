<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>primeiro site em PHP uhul</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
            <h1>Título Mais relevante</h1>
        </header>
        <section>
            <header>
                <h2>Posts (por exemplo)</h2>
            </header>
            <article>
                <header>
                    <h3>Post #1</h3>
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
        
    </body>
    <script type = "text/javascript">
        $(document).ready(function(){
            alert("OLOCO!");
        })
        </script>
</html>

