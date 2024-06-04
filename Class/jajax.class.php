<?php
class Jajax
{
    private $pdo = null;
    private static $instance = null;

    private function __construct($conexao)
    {
        $this->pdo = $conexao;
    }

    public static function getInstance($conexao)
    {
        if (!isset(self::$instance)) {
            self::$instance = new Jajax($conexao);
        }
        return self::$instance;
    }

    function adicionar($email, $nomeRepresentante, $planoNome, $planoInstagram, $outros)
    {

        try {
            $dataCompra = date('Y-m-d H:i');
            $sql = "INSERT INTO tbl_ajax (email, nome_representante, plano_nome, plano_instagram, data_compra, status, outros) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue(1, $email);
            $stm->bindValue(2, $nomeRepresentante);
            $stm->bindValue(3, $planoNome);
            $stm->bindValue(4, $planoInstagram);
            $stm->bindValue(5, $dataCompra);
            $stm->bindValue(6, 'pendente');
            $stm->bindValue(7, $outros);
            $stm->execute();
            return true;
        } catch (PDOException $erro) {
            return false;
        }
    }
    function pegarTodos()
    {
        try {
            $sql = "SELECT * FROM tbl_ajax";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $erro) {
            return false;
        }
    }
    function atualizarStatus($id, $status)
    {
        try {
            $sql = "UPDATE tbl_ajax SET status = ? WHERE id = ?";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue(1, $status);
            $stm->bindValue(2, $id);
            $stm->execute();
            return true;
        } catch (PDOException $erro) {
            return false;
        }
    }
}
if (file_exists('Connection/conexao.php')) {
    require_once ('Connection/con-pdo.php');
    require_once ('Class/funcoes.php');
} else {
    require_once ('../Connection/con-pdo.php');
    require_once ('../Class/funcoes.php');
}
$pdo = Conexao::getInstance();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $nomeRepresentante = $_POST['representante'] ?? '';
    $planoNome = $_POST['plano'] ?? '';
    $link = $_POST['link'] ?? '';
    $id = $_POST['id'] ?? '';
    $status = $_POST['status'] ?? '';
    $outros = $_POST['representante2'] ?? '';
    $jajax = Jajax::getInstance($pdo);

    if (!empty($id) && !empty($status)) {
        try {
            $resultado = $jajax->atualizarStatus($id, $status);
            if ($resultado) {
                echo json_encode(['status' => 'success', 'message' => 'Status atualizado com sucesso', 'newStatus' => $status]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Falha ao atualizar o status']);
            }
        } catch (PDOException $erro) {
            echo json_encode(['status' => 'error', 'message' => $erro->getMessage()]);
        }
    } else if (!empty($email) && !empty($nomeRepresentante) && !empty($planoNome) && !empty($link) && !empty($outros)) {
        try {
            $jajax->adicionar($email, $nomeRepresentante, $planoNome, $link, $outros);
            echo json_encode(['status' => 'success', 'message' => $link]);
        } catch (PDOException $erro) {
            echo json_encode(['status' => 'error', 'message' => $erro->getMessage()]);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Campos obrigatórios estão vazios']);
    }
}