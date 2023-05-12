<?php
class Partida
{
    private PacMan $pacman;

    public function __construct(PacMan $pacMan)
    {
        $this->pacman = $pacMan;
    }

    public function mostrarPuntos()
    {
        return $this->pacman->getPuntos();
    }

    public function mostrarVidas()
    {
        return $this->pacman->getVidas();
    }

}

class FinPartida extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);

    }
}

class PacMan
{
    private $vidas;
    private $puntos;
    public function __construct()
    {
        $this->vidas = 3;
    }

    public function chocarContra(Entidad $entidad)
    {
        try {
            $entidad->trigger($this);
        } catch (FinPartida $e) {
            echo 'Fin de la Partida: ' . $e->getMessage();
        }

    }

    public function getPuntos()
    {
        return $this->puntos;
    }

    public function getVidas()
    {
        return $this->vidas;
    }

    public function sumarPuntos($nro)
    {
        $this->puntos += $nro;
    }

    public function perderVida()
    {
        $this->vidas--;
    }
}


class Pildora extends Entidad
{
    public function trigger(Pacman $pacman)
    {
        $pacman->sumarPuntos(10);
    }
}

class FantasmaComestible extends Entidad
{
    public function trigger(Pacman $pacman)
    {
        $pacman->sumarPuntos(100);
    }
}

class Fantasma extends Entidad
{
    public function trigger(Pacman $pacman)
    {
        if ($pacman->getVidas() <= 0) {
            throw new FinPartida("Conseguiste: " . $pacman->getPuntos() . "Puntos");
        }

        $pacman->perderVida();
    }
}

abstract class Entidad
{
    abstract public function trigger(Pacman $pacman);
}

?>