<?php
class Partida
{
    private $rondas;
    private $jugador;
    private $nroRonda;
    // [
    //     [[][]],
    //     [[][]],
    //     [[][]],
    //     [[][]],
    //     [[][]],
    //     [[][]],
    //     [[][]],
    //     [[][]],
    //     [[][]],
    //     [[][][]]
    // ];
    private $nroTirada;

    public function __construct(Jugador $jugador)
    {
        $this->rondas = [];
        $this->jugador = $jugador;
        $this->nroRonda = 0;
    }

    public function score()
    {

    }

    public function FunctionName()
    {
        return $this->rondas;
    }

    public function roll($derribados)
    {
        $tirados = $this->jugador->roll($derribados);
        $this->rondas[$this->nroRonda][$this->nroTirada] = $tirados;

        if($tirados == 10){
            $this->nroTirada++;
        }

        $this->nroTirada++;

        if ($this->nroTirada > 1) {
            if ($this->nroRonda != 9) {
                $this->nroTirada = 0;
                $this->nroRonda++;
            }
        }
    }
}

 class Jugador 
{
    public function roll($tirados)
    {
        return $tirados;
    }
}



?>