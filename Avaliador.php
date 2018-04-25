<?php

class Avaliador
{
    private $maiorLance = -INF;
    private $menorLance = INF;

    public function avalia(Leilao $leilao)
    {
        foreach ($leilao->getLances() as $lance) {
            if ($lance->getValor() > $this->maiorLance) {
                $this->maiorLance  = $lance->getValor();
            } elseif ($lance->getValor() < $this->menorLance) {
                $this->menorLance = $lance->getValor();
            }
        }
    }

    public function getMaiorLance()
    {
        return $this->maiorLance;
    }

    public function getMenorLance()
    {
        return $this->menorLance;
    }
}
