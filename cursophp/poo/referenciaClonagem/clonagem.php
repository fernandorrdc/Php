<?php

class ObjetoComDependencia {
    public string $nomeDependencia;

    public function __construct(string $nome) {
        $this->nomeDependencia = $nome;
    }

    public function setNome(string $novoNome): void {
        $this->nomeDependencia = $novoNome;
    }
}

class MeuObjeto {
    public string $propriedadeSimples;
    public ObjetoComDependencia $dependencia;

    public function __construct(string $simples, ObjetoComDependencia $dep) {
        $this->propriedadeSimples = $simples;
        $this->dependencia = $dep;
    }

    public function __clone() {
        // Exemplo de cópia profunda da propriedade $dependencia
        $this->dependencia = clone $this->dependencia;

        // Exemplo de reset de uma propriedade no objeto clonado
        $this->propriedadeSimples = 'Cópia de ' . $this->propriedadeSimples;
    }

    public function getDependenciaNome(): string {
        return $this->dependencia->nomeDependencia;
    }
}

// Criando um objeto original
$dependenciaOriginal = new ObjetoComDependencia('Dependencia Original');
$objetoOriginal = new MeuObjeto('Objeto Original', $dependenciaOriginal);

echo "Objeto Original: " . $objetoOriginal->propriedadeSimples . ", Dependência: " . $objetoOriginal->getDependenciaNome() . "\n";

// Clonando o objeto
$objetoClonado = clone $objetoOriginal;

echo "Objeto Clonado (inicial): " . $objetoClonado->propriedadeSimples . ", Dependência: " . $objetoClonado->getDependenciaNome() . "\n";

// Modificando propriedades do objeto clonado
$objetoClonado->propriedadeSimples = 'Objeto Clonado Modificado';
$objetoClonado->dependencia->setNome('Dependencia Modificada no Clonado');

echo "Objeto Original (após modificação do clonado): " . $objetoOriginal->propriedadeSimples . ", Dependência: " . $objetoOriginal->getDependenciaNome() . "\n";
echo "Objeto Clonado (após modificação): " . $objetoClonado->propriedadeSimples . ", Dependência: " . $objetoClonado->getDependenciaNome() . "\n";

?>