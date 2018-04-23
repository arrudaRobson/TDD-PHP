<?php

class Avaliador
{
    private $maiorLance = -INF;
    private $menorLance = INF;

    public function avalia(Leilao $leilao)
    {
        foreach ($leilao->getLances() as $lance) {
            $lance->getValor() > this->maiorLance;
        }
    }
}
