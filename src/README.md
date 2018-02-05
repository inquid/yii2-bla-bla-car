yii2-facturacom
=====================

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
![Iniciativa Programa México](https://lh5.googleusercontent.com/k6u-DepqdgZzTk15Kxx6UPuZJ0ldiv6EPuhhJYRp8QfB89kLxU-D1D7YdYST-gGXnSxl9LFixzn5sYg=w1920-h990)
