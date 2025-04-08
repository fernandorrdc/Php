<?php

class Endereco
{
    public string $rua;
    public string $numero;
    public string $cidade;
    public string $estado;
    public string $cep;

    public function __construct(string $rua, string $numero, string $cidade, string $estado, string $cep)
    {
        $this->rua = $rua;
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
    }

    public function exibirEndereco(): string
    {
        return "{$this->rua}, {$this->numero} - {$this->cidade}, {$this->estado} - {$this->cep}";
    }
}

class Pessoa
{
    public string $nome;
    public int $idade;
    public ?Endereco $endereco; // Associação: Pessoa pode ter um Endereco (opcional)

    public function __construct(string $nome, int $idade, ?Endereco $endereco = null)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco; // Atribui o objeto Endereco
    }

    public function exibirInformacoes(): string
    {
        $info = "Nome: {$this->nome}, Idade: {$this->idade}";
        if ($this->endereco) {
            $info .= ", Endereço: {$this->endereco->exibirEndereco()}";
        } else {
            $info .= ", Endereço: Não informado";
        }
        return $info;
    }

    public function mudarEndereco(Endereco $novoEndereco): void
    {
        $this->endereco = $novoEndereco; // Altera o objeto Endereco associado
    }
}

// Criando objetos
$enderecoJoao = new Endereco("Rua das Flores", "123", "Fortaleza", "CE", "60000-000");
$pessoaJoao = new Pessoa("João Silva", 30, $enderecoJoao); // Associação no construtor

$pessoaMaria = new Pessoa("Maria Oliveira", 25); // Pessoa sem endereço inicial

// Exibindo informações iniciais
echo $pessoaJoao->exibirInformacoes() . "<br>";
echo $pessoaMaria->exibirInformacoes() . "<br>";

echo "<hr>--- Mudando o endereço de Maria ---<br>";
echo "<hr>";

$enderecoMaria = new Endereco("Avenida Beira Mar", "456", "Fortaleza", "CE", "60100-000");
$pessoaMaria->mudarEndereco($enderecoMaria); // Associando o endereço a Maria

// Exibindo informações após a mudança
echo $pessoaJoao->exibirInformacoes() . "<br>";
echo $pessoaMaria->exibirInformacoes() . "<br>";
