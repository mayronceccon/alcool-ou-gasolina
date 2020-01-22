# Álcool ou Gasolina

Aplicativo responsável por calcular qual combustível tem maior custo benefício para abastecer o veículo.

Ideia levantada pelo [@Diego-Brocanelli](https://github.com/Diego-Brocanelli) no repositório [Laboratório de Ideias](https://github.com/Diego-Brocanelli/laboratorio-de-ideias).

## Instalação

Use o gerenciador de pacotes [composer](https://getcomposer.org/) para instalar as dependências.

```bash
composer install
```

## Uso

```php
require_once 'vendor/autoload.php';

use APP\Preco;
use APP\GasolinaAlcool;

$precoGasolina = new Preco(4.5);
$precoAlcool = new Preco(3.99);

$obj = new GasolinaAlcool($precoGasolina, $precoAlcool);
$resultado = $obj->calcular();
echo $resultado;
```

## Testes
```bash
composer run test
```

## Contribuição

Pull requests são bem vindos. Para grandes alterações,
por favor abra um issue para discussão a respeito da alteração.

Por favor atualize os testes conforme suas modificações.

## License
[MIT](https://choosealicense.com/licenses/mit/)
