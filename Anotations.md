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