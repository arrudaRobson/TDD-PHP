<?php
require_once 'Leilao.php';
require_once 'Usuario.php';
require_once 'Lance.php';
require_once 'Avaliador.php';


class AvaliadorTest extends PHPUnit_Framework_TesteCase
{
    public function test()
    {
        $leilao = new Leilao("Subaru");

        $robson = new Usuario("Robson");
        $bruno = new Usuario("Bruno");
        $ze = new Usuario("José");

        $leilao->propoe(new Lance($bruno, 10000));
        $leilao->propoe(new Lance($ze, 500));
        $leilao->propoe(new Lance($robson, 250));

        $leiloeiro = new Avaliador();
        $leiloeiro->avalia($leilao);

        $maiorEsperado = 10000;
        $menorEsperado = 250;

        $this->assertEquals($maiorEsperado,$leiloeiro->getMaiorLance());
        $this->assertEquals($menorEsperado,$leiloeiro->getMenorLance());
    }
}
