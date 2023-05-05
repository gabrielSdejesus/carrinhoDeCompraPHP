<?php
class produto
{
    private $id;
    private $nome;
    private $valor;
    private $descricao;
    private $peso;
    private $quantidade;
    private $codigo;
    private $disponibilidade;

    public function __construct($args=[])
    {
        $this->id = isset($args['id']) ? $args['id'] : '';
        $this->nome = isset($args['nome']) ? $args['nome'] : '';
        $this->valor = isset($args['valor']) ? $args['valor'] : '';
        $this->descricao = isset($args['descricao']) ? $args['descricao'] : '';
        $this->peso = isset($args['peso']) ? $args['peso'] : '';
        $this->quantidade = isset($args['quantidade']) ? $args['quantidade'] : '';
        $this->codigo = isset($args['codigo']) ? $args['codigo'] : '';
        $this->disponibilidade = isset($args['disponibilidade']) ? $args['disponibilidade'] : '';
    }

    static public function instantiate($obj){
        $object = new self();

        foreach($obj as $property => $value) {
            if(property_exists($object, $property)) {
                $object->$property = $value;
            }
        }
        return $object;
    }

    static public function instantiateConsult($obj){
        $object = new self();

        $propertyMap = [
            'ID' => 'setId',
            'NOME' => 'setNome',
            'VALOR' => 'setValor',
            'DESCRICAO' => 'setDescricao',
            'PESO' => 'setPeso',
            'QUANTIDADE' => 'setQuantidade',
            'CODIGO' => 'setCodigo',
            'DISPONIBILIDADE' => 'setDisponibilidade',
        ];

        foreach ($obj as $item => $value) {
            if (array_key_exists($item, $propertyMap)) {
                $method = $propertyMap[$item];
                $object->$method($value);
            }
        }

        return $object;
    }

    public function getAttributes() {
        $ref = new ReflectionClass($this);
        $props = $ref->getProperties(ReflectionProperty::IS_PRIVATE);
        $attributes = array();

        foreach ($props as $prop) {
            $attributes[] = $prop->getName();
        }
        return $attributes;
    }

    public function getValuesAtributes(){
        return array_values(get_object_vars($this));
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getDisponibilidade()
    {
        return $this->disponibilidade;
    }

    public function setDisponibilidade($disponibilidade)
    {
        $this->disponibilidade = $disponibilidade;
    }
}