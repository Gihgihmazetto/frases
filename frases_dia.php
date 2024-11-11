<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="frases.css">
</head>
<body>
   
   <center> 
    <h1>Frases de livros</h1>
    <i><h4>Sua dose de motivação diária!</h4><i>
    <br>

    <div class="frases">
    <?php

    $frases = [
        "Só se vê bem com o coração, o essencial é invisível aos olhos.<br>- O Pequeno Príncipe.",
        "As coisas têm vida própria. Tudo é questão de despertar a sua alma.<br>Cem Anos de Solidão, Gabriel García Márquez",
        "Por você, faria isso mil vezes.<br>- O caçador de Pipas, Khaled Hosseini",
        "Palavras são, na minha não tão humilde opinião, nossa inesgotável fonte de magia. Capazes de ferir e de curar.<br>- Harry Potter e as Relíquias da Morte, J.K. Rowling",
        "O amor é a força mais poderosa do universo e quando duas pessoas se amam, nem a distância nem o tempo podem separá-las.<br>- O Melhor de Mim, Nicholas Sparks",
        "Meus sentimentos não podem ser reprimidos e preciso que me permita dizer-lhe que eu a admiro e amo ardentemente.<br>- Orgulho e Preconceito, Jane Austen",
        "O amor não força nada, ao contrário, ele abre caminho.<br>- A Cabana, William P. Young",
        "Todos os seres humanos cometem erros. O que determina o caráter de uma pessoa não são os erros que ela comete, mas como ela transforma esses erros em lições ao invés de dar desculpas.<br>- É Assim que Acaba",
        "Impedir o coração de perdoar uma pessoa que você ama é, na verdade, muito mais difícil que simplesmente perdoá-la.<br>.- É Assim que Acaba",
        "Você só vive uma vez. É sua obrigação aproveitar a vida da melhor forma possível.<br>Como Eu Era Antes de Você - Jojo Moyes",
        "Quem controla o passado, controla o futuro, quem controla o presente, controla o passado.<br>1984 - George Orwell",
        "Nós aceitamos o amor que achamos que merecemos.<br>- As vantagens de ser invisível",
        "Se você iluminar as suas imperfeições, todas as suas qualidades ficarão nas sombras.<br> - Todas as imperfeições, Collen Hoover",
        "Só ri de uma cicatriz quem nunca foi ferido. <br>- Romeu e Julieta, William Shakespeare",
        "Amor não é coisa que se possa pedir a alguém.<br>- O Diário de Anne Frank, Anne Frank",
        "Há magia em todos os lugares, se você estiver disposto a vê-la.<br> - Dragão, Once Upon a Time",
        "A mais poderosa magia de todas: o verdadeiro amor.<br> - Rumplestiltskin, Once Upon a Time",
        "Não é o que o mundo tem para você, mas o que você traz ao mundo.<br>- Anne with an E",
        "Coisas quebradas tem uma certa beleza triste. Depois de anos de histórias e triunfos e tragédias infundidas nelas, elas podem ser muito mais românticas do que coisas novas que não tiveram aventuras.<br>- Anne with an E"

    ];
    
   

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $frase_do_dia = $frases[array_rand($frases)];
    echo $frase_do_dia;
}
    ?>
 </div>

    <form action="frases_dia.php" method="POST">
        <br><br>
        <button type="submit">Mudar Frase</button>
        
    </form>
</center>

<div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

</body>
</html>