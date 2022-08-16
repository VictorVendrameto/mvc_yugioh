<?php

class CartaController
{
    public static function index()
    {
        include 'Model/StandModel.php';

        $model = new CartaModel();
        $model->getAllRows();

        include 'View/modules/Carta/CartaListar.php';
    }

    public static function form()
    {
        include 'Model/CartaModel.php';

        $model = new CartaModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        
        include 'View/modules/Carta/CartaCadastro.php';
    }

    public static function save()
    {
        include 'Model/CartaModel.php';

        $model = new CartaModel();
        $model->ID = $_POST['id'];
        $model->Nome = $_POST['nome'];
        $model->Nível = $_POST['nível'];
        $model->Atributo = $_POST['atributo'];
        $model->Tipo = $_POST['tipo'];
        $model->Ponto_atk = $_POST['ATK'];
        $model->Ponto_def = $_POST['DEF'];

        $model->save();

        header("Location: /yugioh");
    }

    public static function delete()
    {
        include 'Model/CartaModel.php';

        $model = new CartaModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /yugioh");
    }
}