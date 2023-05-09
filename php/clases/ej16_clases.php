<?php

interface Ganador
{
    public function getGanador();
}

abstract class Jugada
{

    private $jugador;

    abstract public function competirContra(Jugada $jugada);
    abstract protected function compiteContraTijera(Jugada $jugada);
    abstract protected function compiteContraPapel(Jugada $jugada);
    abstract protected function compiteContraPiedra(Jugada $jugada);
}

class Piedra extends Jugada implements Ganador
{

    public function __construct($nombreJugador)
    {
        $this->jugador = $nombreJugador;
    }
    public function competirContra(Jugada $jugada)
    {
        return $jugada->compiteContraPiedra($this);
    }

    protected function compiteContraTijera(Jugada $tijeta)
    {
        return $this;
    }

    protected function compiteContraPapel(Jugada $papel)
    {
        return $papel;
    }

    protected function compiteContraPiedra(Jugada $piedra)
    {
        return new Empate();
    }

    public function getGanador()
    {
        return $this->jugador;
    }

}

class Tijera extends Jugada implements Ganador
{


    public function __construct($nombreJugador)
    {
        $this->jugador = $nombreJugador;
    }
    public function competirContra(Jugada $jugada)
    {
        return $jugada->compiteContraTijera($this);
    }

    protected function compiteContraTijera(Jugada $tijeta)
    {
        return new Empate();
    }

    protected function compiteContraPapel(Jugada $papel)
    {
        return $this;
    }

    protected function compiteContraPiedra(Jugada $piedra)
    {
        return $piedra;
    }

    public function getGanador()
    {
        return $this->jugador;
    }

}

class Papel extends Jugada implements Ganador
{

    public function __construct($nombreJugador)
    {
        $this->jugador = $nombreJugador;
    }
    public function competirContra(Jugada $jugada)
    {
        return $jugada->compiteContraPapel($this);
    }

    protected function compiteContraTijera(Jugada $tijeta)
    {
        return $tijeta;
    }

    protected function compiteContraPapel(Jugada $papel)
    {
        return new Empate();
    }

    protected function compiteContraPiedra(Jugada $piedra)
    {
        return $this;
    }

    public function getGanador()
    {
        return $this->jugador;
    }

}

class Empate implements Ganador
{
    public function getGanador()
    {
        return "Fue Empate";
    }
}

?>