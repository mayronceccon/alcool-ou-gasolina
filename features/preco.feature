Feature: Preco
    Scenario: Informando um preço válido
        When Quando eu informar o valor de 22.50
        Then Eu espero ter o retorno de 22.50

    Scenario: Informando um preço válido2
        When Quando eu informar o valor de 10.9
        Then Eu espero ter o retorno de 10.9
