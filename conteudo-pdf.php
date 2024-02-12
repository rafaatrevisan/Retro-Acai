<?php
    require_once 'src/conexao-bd.php';
    require_once 'src/Modelo/Produto.php';
    require_once 'src/Respositorio/ProdutoRepositorio.php';

    $produtoRepositorio = new ProdutoRepositorio($pdo);
    $produtos = $produtoRepositorio->buscarTodos();
?>

<style>
    table{
        width: 90%;
        margin: auto 0;
        border-collapse: collapse;
    }
    table, th, td{
        border: 1px solid #000;
    }

    table th{
        padding: 11px 0 11px;
        font-weight: bold;
        font-size: 18px;
        text-align: left;
        padding: 8px;
        background-color: black;
        color: white;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}

    table td{
        font-size: 18px;
        padding: 8px;
    }
    .container-admin-banner h1{
        margin-top: 40px;
        font-size: 30px;
</style>

    <table>
      <thead>
        <tr>
          <th>Produto</th>
          <th>Tipo</th>
          <th>Descricão</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($produtos as $produto): ?>
          <tr>
            <td><?= $produto->getNome() ?></td>
            <td><?= $produto->getTipo() ?></td>
            <td><?= $produto->getDescricao() ?></td>
            <td><?= $produto->getPrecoFormatado() ?></td>
          </tr>
      <?php endforeach; ?>
      </tbody>
    </table>