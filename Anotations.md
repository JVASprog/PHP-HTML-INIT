# Anotações HTML - Expressões Novas para mim

## TEXTO
    <p>Serve para paragrafos</p> ->aceitando imagens e outros conteudos

## LINKS    
    <a>LINK</a> ->Ancora
    
    <a href="linkedin.com/...">Linkedin link</a> ->exemplo pra sites
    
    <a href="mailto:exemplo123@exemplo.com">Email</a> ->No caso de emails e telefone, deve-se utilizar o 'mailto' e 'tel' 
    respectivamente*
    
    <a target="_blank">Link</a> ->Target diz como o link vai ser aberto, nesse caso _blank seria uma nova aba no browser.

## IMAGEM
    <img> -> inserir imagem
    
    <img src="img/exemplo.jpg"> -> source é obrigatorio, guarda o caminho da imagem. Se estiver em uma pasta -> img/caminho p/ imagem
    *Caso a imagem esteja na web, pode-se colar o link completo do caminho da imagem

    <img alt="Foto do exemplo"> -> alternative guarda uma mensagem caso a imagem não seja carregada, melhora acessibilidade

## LISTAS
    <ul>  -> lista em que a ordem dos itens não são importantes
    item 1
    item 2

    <ol>  -> lista em que a ordem é importante
    1. item 1
    2. item 3

    <li> -> é um item da lista, seja <ol> ou <ul>

## ID e CLASSES
    ID -> so pode ser utilizado uma vez na pagina, usamos pra dar exclusividade à um elemento que não queremos repetição, por exemplo.

    CLASS -> pode ser utilizado varias vezes

    exemplo para headers diferentes:
    <header id="header" class="header"></header>
    <header class="header"></header>

# Anotações CSS - Expressões Novas para mim

## ADICIONANDO CSS NO ARQUIVO HTML

    Em <head>: 
        <link rel="stylesheet" href="style.css>  -> rel diz o tipo de arquivo e o href o caminho do arquivo

## ID e CLASSES
    ID -> Precedida por um hashtag (#)
    CLASS -> Precedida por um ponto (.)

    exemplo:
    ID:
    #header{
        padding: 15px;
    }

    CLASS:
    .header{
        padding: 10px;
    }

## ESTILOS PARA BOX MODEL

    Padding -> ajustando 10px no eixo Y e 5px no eixo X respectivamente

    exemplo1:
    .post{
        padding: 10px 5px;
    }
    
    ou, um valor para cada lado:

    exemplo2:
    .post{
        padding: 15px 10px 5px 0;  
    }
    
    ->topo, direita, inferior, esquerda respectivamente

    ou, podemos usar especifico para cada lado. Este é mais utilizado quando 3 lados são iguais e um diferente, entao utilizamos o padding padrão e depois alteramos o lado que desejamos.

    exemplo3:
    .post{
        padding-top: 15px;
        padding-right: 10px;
        padding-bottom: 5px;
        padding-left: 0;
    }

    Background -> Existem muitas coisas a se estudar, mas vamos focar em mudar a cor do fundo, colocar uma imagem e alterar o posicionamento da imagem de formas diferentes.

    exemplo1:
    .post{ 
        background-color: green;   **pode se utilizar apenas background
        background-image: url("CAMINHO DA IMAGEM");
        background-position: top;
    }

    obs.: A cor pode ser escolhido pelo valor hexadecimal tambem

    Bordas -> Do mesmo jeito do padding, podemos utilizar "border" para todos os lados de borda e depois alterar os lados que quisermos.
    No caso das bordas, podemos escolher o traço, além da cor.

    exemplo1:
    .post{
        border: 3px solid blue;
        border-top: 2px dotted green;
        border-right: 4px dashed pink;
    }

    exemplo2: -> podemos separar os parametros das bordas
    .post{    -> este com atalho
        border: 3px solid #505050;
    }
    
    .post{    -> propriedades especificas
        border-width: 3px;
        border-color: #505050;
        border-style: solid;
    }

    Podemos juntar os aspectos com os lados e criar uma regra mais específica ainda:

    exemplo3:
    .post{
        border-top-width: 3px;
        border-top-color: blue:
        border-top-style: solid;
    }

    Border-radius -> Permite arredondar as bordas de um elemento, do mesmo jeito que padding e margem, 1 valor altera todos os elementos, mas podemos especificar para cada um. mais comum utilizar pixels ou porcentagem.
    
    border-radius: 10px;
    ou
    border-radius: 50%;
    ou até 
    border-radius: 10% 20% 15% 22%;
