<?php
class Jajax
{
    private $pdo = null;
    private static $Jajax = null;

    private function __construct($conexao)
    {
        $this->pdo = $conexao;
    }

    public static function getInstance($conexao)
    {
        if (!isset(self::$Jajax)) :
            self::$Jajax = new Contato($conexao);
        endif;
        return self::$Jajax;
    }

    function adicionar($email, $nomeRepresentante, $planoNome, $planoInstagram)
    {
        try {
            $sql = "INSERT INTO tbl_ajax (email, nome_representante, plano_nome, plano_instagram) VALUES (?, ?, ?, ?)";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue(1, $email);
            $stm->bindValue(2, $nomeRepresentante);
            $stm->bindValue(3, $planoNome);
            $stm->bindValue(4, $planoInstagram);
            $stm->execute();
        } catch (PDOException $erro) {
            echo json_encode(['status' => 'error', 'message' => $erro->getMessage()]);
        }
    }
}
require_once('conexao.php');
$pdo = Conexao::getInstance();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? null;
    $nomeRepresentante = $_POST['representante'] ?? null;
    $planoNome = $_POST['nomePlano'] ?? null;
    $planoInstagram = $_POST['link'] ?? null;

    if ($email && $nomeRepresentante && $planoNome && $planoInstagram) {
        $contato = Contato::getInstance($pdo);
        $contato->adicionar($email, $nomeRepresentante, $planoNome, $planoInstagram);
        echo json_encode(['status' => 'success', 'message' => 'Contato adicionado com sucesso']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Dados incompletos']);
    }
}
