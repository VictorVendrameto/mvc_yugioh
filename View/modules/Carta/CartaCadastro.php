<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cartas</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Carta</legend>
        <form action="/yugioh/form/save" method="post">
        
        

            <input type="hidden" value="<?= $model->id ?>" name="id"/>

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" />

            <label for="nivel">Nível:</label>
            <input name="Nível" id="nível" type="number" />

            <label for="atributo">Atributo:</label>
            <input name="atributo" id="atributo" type="text" />

            <label for="tipo">Tipo:</label>
            <input name="tipo" id="tipo" type="text" />

            <label for="ponto_atk">Ponto ATK:</label>
            <input name="ponto_atk" id="ponto_atk" type="number" />

            <label for="ponto_def">Ponto DEF:</label>
            <input name="ponto_def" id="ponto_def" type="number" />

            <button type="submit">Enviar</button>

        </form>    
    </fieldset>
</body>
</html>