Feature: Gasolina Alcool
    Scenario: Preço gasolina com vantagem
        When Quando eu informar o valor da gasolina de 4.5 e do álcool de 3.5
        Then Então espero ter o retorno da palavra "Gasolina"

    Scenario: Preço álcool com vantagem
        When Quando eu informar o valor da gasolina de 5.22 e do álcool de 2.6
        Then Então espero ter o retorno da palavra "Álcool"

    Scenario: Preço mesmo custo entre gasolina e álcool
        When Quando eu informar o valor da gasolina de 4.5 e do álcool de 3.15
        Then Então espero ter o retorno da palavra "Gasolina ou Álcool"
