<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <style>         
    div input{
        padding-right: 400px;
        margin-left: 25%;
    }
    .topnav{
        padding-right: 400px;
        margin-top: 10%;
        display: flex;
        margin-left: 2%;
    }
    </style>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Topo com Logo</title>
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
            }
            header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color: #333;
                padding: 10px 20px;
                color: white;
            }
            header img {
                height: 50px;
            }
            nav a {
                color: white;
                text-decoration: none;
                margin: 0 10px;
            }
            .produto{
    display: flex;
    border-top: none;
    padding-top: 0;
}

.prod{
   flex: 1; /*distribui as 3 divs dentro do conteiner com larguras iguais*/
   margin: 5px; /*coloca uma margem entre elas*/
   text-align: center;
}

.prod img{
   max-width: 100%;
}
div a{
    background-color: black;
            cursor: pointer;
            background-color: black;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
}

element.style {
    width: 75%;
}


        </style>
    </head>
    <body>
        
        <header>
            <img src="logoprojeto.png" alt="Logo">
            <center>GERENCIAMENTO DE ESTAGIO</center>
            <nav>
                <a href="login.php">desconectar-se</a>
            </nav>
        </header>
</head>
<body>
    <center><div class="topnav">
      </div></center>
      <div class="produto">
        <span class="prod">
            <br><br>
             <h3>Estágio curricular</h3>
            <img src="estagiocurricular.png" alt="" title="estagio 1" style="width: 75%;"
            > 
            <p>
                O estágio curricular obrigatório é uma experiência prática de aprendizado que permite ao estudante desenvolver habilidades valorizadas pelo mercado de trabalho, como: Boa comunicação, Capacidade de resolver problemas, Proatividade, Inteligência emocional, Bom relacionamento interpessoal.
            </p>
            <br><br>
            <a href="registrado.php">Resgistrar-se</a>
        </span>
        <span class="prod">
            <br><br>
             <h3>Estágio remunerado</h3>
            <img src="estagioremunerado.jpg" alt="" title="Estagio remunerado"
            style="width: 80%;">
            <br><br>
            <p>
                Estágio Remunerado: O foco é proporcionar ao estudante uma experiência que combine aprendizado com uma compensação financeira. Esse tipo de estágio pode servir tanto para complementar a formação acadêmica quanto para inserir o estudante no mercado de trabalho            </p>
            <br><br>
            <a href="registrado.php">Resgistrar-se</a>
        </span>
        <span class="prod">
            <br><br>
             <h3>Estágio supervisionado</h3>
             <br><br>
            <img src="estagiosupervisionado.png" alt="" title="Estagio supervisionado" style="width: 100%;"
            >
            <br><br>
            <p>
                é o momento de encontro da teoria e prática e do futuro educador com a escola, com os alunos e com o cenário que irá atuar durante sua vida profissional
            </p>
            <br><br>
            <a href="registrado.php">Resgistrar-se</a>
        </span>
    </div>
    <br><br>
</body>
</html>