<?php
require_once("../Model/cadastroLivro.php");
class cadastroController
{
    private $cadastro;
    public function __construct()
    {
        $this->cadastro = new Cadastro();
        $this->incluir();
    }
    private function incluir()
    {
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setAutor($_POST['autor']);
        $this->cadastro->setQuantidade($_POST['quantidade']);
        $this->cadastro->setPreco($_POST['preco']);
        $this->cadastro->setData(date('Y-m-d', srtotime($_POST['data'])));
        #ChamadamétodoincluirdentroclassecadastroarquivocadastroLivro.php
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro feito com.');document.location='../view/cadastro.php'<script>";
        }else{
            echo "<script>alert('Erro. Tente novamente.');history.back()</script>";
        }
    }
}
new cadastroController();
?>
