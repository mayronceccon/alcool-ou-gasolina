<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit\Framework\TestCase;
use APP\Preco;
use APP\GasolinaAlcool;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $preco;
    private $gasolinaAlcool;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When Quando eu informar o valor de :arg1
     */
    public function quandoEuInformarOValorDe($arg1)
    {
        $this->preco = new Preco($arg1);
    }

    /**
     * @Then Eu espero ter o retorno de :arg1
     */
    public function euEsperoTerORetornoDe($arg1)
    {
        TestCase::assertEquals(
            $arg1,
            $this->preco->getPreco()
        );
    }

    /**
     * @When Quando eu informar o valor da gasolina de :arg1 e do álcool de :arg2
     */
    public function quandoEuInformarOValorDaGasolinaDeEDoAlcoolDe($arg1, $arg2)
    {
        $precoGasolina = new Preco($arg1);
        $precoAlcool = new Preco($arg2);

        $this->gasolinaAlcool = new GasolinaAlcool(
            $precoGasolina, 
            $precoAlcool
        );
    }

    /**
     * @Then Então espero ter o retorno da palavra :arg1
     */
    public function entaoEsperoTerORetornoDaPalavra($arg1)
    {
        TestCase::assertEquals(
            $arg1,
            $this->gasolinaAlcool->calcular()
        );
    }

}
