<p align="center">
    <a href="http://www.yiiframework.com/" target="_blank">
        <img src="http://static.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
</p>

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)

yii2-bla-bla-car
=====================
UNDER DEVELOPMENT! NOT READY FOR PRODUCTION!

Librería para usar el API de https://dev.blablacar.com/



## Instalación

La forma preferida para instalar esta extensión es a través de [composer](http://getcomposer.org/download/).

Para instalar, ejecutar

```
$ php composer.phar require inquid/yii2-bla-bla-car
```

or agregar

```
"inquid/yii2-bla-bla-car": "*"
```
en la sección "require" de tu composer.json.

## Configuración

Configurar como componente
```php
$config = [
     // ...
    'components' => [
        'bla-bla-car' => [
            'class' => 'inquid\yii2-bla-bla-car\BlaBlaCar',
            'apiKey' => 'API_KEY'
        ],
```

## Uso
```php
// Lista de Clientes
$response = Yii::$app->blablacar->getTrips([
        'from'=>'',
        'to'=>''
    ]);
print_r($response);
```
Iniciativa Programa México: 
![Iniciativa Programa México](https://storage.googleapis.com/inquid-backuper/logos/iniciativa-mexico.png)

SUPPORT
-----
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)
