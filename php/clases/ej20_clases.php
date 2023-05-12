<?php
class Partida
{
    private $rondas = [];
    private $jugador;
    private $nroRonda;

    private $nroTirada;

    public function __construct(Jugador $jugador)
    {
        $this->jugador = $jugador;
        $this->nroRonda = 0;
    }

    public function score()
    {
        $score = 0;

        foreach ($this->getRondas() as $ronda) {
            foreach ($ronda as $element) {
                $score += $element;
            }
        }

        return $score;
    }

    public function getRondas()
    {
        return $this->rondas;
    }

    public function roll($derribados)
    {
        if (array_key_exists(9, $this->rondas) && count($this->rondas[9]) > 3) {
            echo "La partida ya finalizo";
        } else {
            $tirados = $this->jugador->roll($derribados);

            $this->rondas[$this->nroRonda][$this->nroTirada] = $tirados;

            if ($tirados == 10) {
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
}

class Jugador
{
    public function roll($tirados)
    {
        return $tirados;
    }
}



?>