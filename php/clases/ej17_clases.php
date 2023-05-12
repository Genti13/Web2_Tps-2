<?php

abstract class Operacion
{
    protected $op_1;
    protected $op_2;
    public function __construct(Operacion $op_1, Operacion $op_2)
    {
        $this->op_1 = $op_1;
        $this->op_2 = $op_2;
    }
    abstract public function resolverEcuacion();
}


class Sumar extends Operacion
{
    public function resolverEcuacion()
    {
        return $this->op_1->resolverEcuacion() + $this->op_2->resolverEcuacion();
    }
}

class Restar extends Operacion
{
    public function resolverEcuacion()
    {
        return $this->op_1->resolverEcuacion() - $this->op_2->resolverEcuacion();
    }
}

class Multiplicar extends Operacion
{
    public function resolverEcuacion()
    {
        return $this->op_1->resolverEcuacion() * $this->op_2->resolverEcuacion();
    }

}


class Operando extends Operacion
{
    private $value;
    public function __construct($val)
    {
        $this->value = $val;
    }

    public function resolverEcuacion()
    {
        return $this->value;
    }
}




?>