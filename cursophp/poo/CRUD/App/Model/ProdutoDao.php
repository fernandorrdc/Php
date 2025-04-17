<?php

namespace App\Model;

class ProdutoDao
{

    public function create(Produto $p)
    {
        $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';
        //metodos do BDO
        $cadastrar = Conexao::getConn()->prepare($sql); //pegando metodo sql
        $cadastrar->bindValue(1, $p->getNome()); //usando ??(bindValue)
        $cadastrar->bindValue(2, $p->getDescricao());

        $cadastrar->execute();
    }

    public function read()
    {
        $sql = 'SELECT * FROM produtos';

        $ler = Conexao::getConn()->prepare($sql);
        $ler->execute();

        if ($ler->rowCount() > 0) {
            $result = $ler->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } else {
            return [];
        }
    }

    public function update(Produto $p)
    {

        $sql = 'UPDATE produtos SET nome=?, descricao=? WHERE id=?';
        //metodos do BDO
        $atualizar = Conexao::getConn()->prepare($sql); //pegando metodo sql
        $atualizar->bindValue(1, $p->getNome()); //usando ??(bindValue)
        $atualizar->bindValue(2, $p->getDescricao());
        $atualizar->bindValue(3, $p->getId());

        $atualizar->execute();
    }

    public function delete($id) {

        $sql = 'DELETE FROM produtos WHERE id=?';

        $apagar = Conexao::getConn()->prepare($sql);
        $apagar->bindValue(1, $id);//difere

        $apagar->execute();


    }
}
