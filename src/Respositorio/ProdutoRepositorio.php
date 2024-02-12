<?php

class ProdutoRepositorio
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    private function formarObjeto($dados)
    {
        return new Produto(
                $dados['id'],
                $dados['tipo'],
                $dados['nome'],
                $dados['descricao'],
                $dados['preco'],
                $dados['imagem']
        );
    }
    public function opcoesAcai(): array
    {
        $sql = "SELECT * FROM produtos WHERE tipo = 'Açaí' ORDER BY preco";
        $stmt = $this->pdo->query($sql);
        $produtosAcai = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $dadosAcai = array_map(function ($acai){
            return $this->formarObjeto($acai);
        }, $produtosAcai);

        return $dadosAcai;
    }

    public function opcoesSorvete(): array
    {
        $sql = "SELECT * FROM produtos WHERE tipo = 'Sorvete' ORDER BY preco";
        $stmt = $this->pdo->query($sql);
        $produtosSorvete = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $dadosSorvete = array_map(function ($sorvete){
            return $this->formarObjeto($sorvete);
        }, $produtosSorvete);

        return $dadosSorvete;
    }

    public function buscarTodos(): array
    {
        $sql = "SELECT * FROM produtos ORDER BY preco";
        $stmt = $this->pdo->query($sql);
        $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $dadosProdutos = array_map(function ($produto){
            return $this->formarObjeto($produto);
        }, $produtos);

        return $dadosProdutos;
    }

    public function excluirProduto(int $id)
    {
        $sql = "DELETE FROM produtos WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function salvarProduto(Produto $produto)
    {
        $sql = "INSERT INTO produtos (tipo, nome, descricao, preco, imagem) VALUES (?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $produto->getTipo());
        $stmt->bindValue(2, $produto->getNome());
        $stmt->bindValue(3, $produto->getDescricao());
        $stmt->bindValue(4, $produto->getPreco());
        $stmt->bindValue(5, $produto->getImagem());
        $stmt->execute();
    }

    public function buscarProduto(int $id): Produto
    {
        $sql = "SELECT * FROM produtos WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        $dados = $stmt->fetch(PDO::FETCH_ASSOC);

        return $this->formarObjeto($dados);
    }

    public function atualizarProduto(Produto $produto)
    {
        $sql = "UPDATE produtos SET tipo = ?, nome = ?, descricao = ?, preco = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $produto->getTipo());
        $stmt->bindValue(2, $produto->getNome());
        $stmt->bindValue(3, $produto->getDescricao());
        $stmt->bindValue(4, $produto->getPreco());
        $stmt->bindValue(5, $produto->getId());
        $stmt->execute();

        if($produto->getImagem() !== 'logo-retro.png'){
            $this->atualizarFoto($produto);
        }
    }

    private function atualizarFoto(Produto $produto)
    {
        $sql = "UPDATE produtos SET imagem = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $produto->getImagem());
        $stmt->bindValue(2, $produto->getId());
        $stmt->execute();
    }

}