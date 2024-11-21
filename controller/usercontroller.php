<?php
header('Content-Type: text/html; charset=UTF-8');
require './backend/model/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new Database();
    $db = $controller->getConnection()->usuario;
    $colecao = $db->dados;

    $dados = [
        'Nome' => htmlspecialchars($_POST['Nome'] ?? '', ENT_QUOTES, 'UTF-8'),
        'CPF' => htmlspecialchars($_POST['CPF'] ?? '', ENT_QUOTES, 'UTF-8'),
        'RG' => htmlspecialchars($_POST['RG'] ?? '', ENT_QUOTES, 'UTF-8'),
        'Data_de_Nascimento' => htmlspecialchars($_POST['Data_de_Nascimento'] ?? '', ENT_QUOTES, 'UTF-8'),
        'Telefone_1' => htmlspecialchars($_POST['Telefone_1'] ?? '', ENT_QUOTES, 'UTF-8'),
        'Telefone_2' => htmlspecialchars($_POST['Telefone_2'] ?? '', ENT_QUOTES, 'UTF-8'),
        'Nome_Pai' => htmlspecialchars($_POST['Nome_Pai'] ?? '', ENT_QUOTES, 'UTF-8'),
        'Nome_Mae' => htmlspecialchars($_POST['Nome_Mae'] ?? '', ENT_QUOTES, 'UTF-8'),
        'Logradouro' => htmlspecialchars($_POST['Logradouro'] ?? '', ENT_QUOTES, 'UTF-8'),
        'Numero' => htmlspecialchars($_POST['Numero'] ?? '', ENT_QUOTES, 'UTF-8'),
        'Complemento' => htmlspecialchars($_POST['Complemento'] ?? '', ENT_QUOTES, 'UTF-8'),
        'Bairro' => htmlspecialchars($_POST['Bairro'] ?? '', ENT_QUOTES, 'UTF-8'),
        'CEP' => htmlspecialchars($_POST['CEP'] ?? '', ENT_QUOTES, 'UTF-8')
    ];

    try {
        // Inserção no banco de dados
        $resultado = $colecao->insertOne($dados);
        
        // Redirecionamento para a página de sucesso
        header('Location: ../frontend/success.php?msg=Usuario criado com sucesso! ID: ' . $resultado->getInsertedId());
        exit;
    } catch (Exception $e) {
        // Redirecionamento para a página de erro
        header('Location: ../frontend/error.php?msg=Erro ao criar usuario: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8'));
        exit;
    }
}
?>

