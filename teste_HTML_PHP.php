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

