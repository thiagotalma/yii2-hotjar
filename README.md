# Hotjar for Yii2

This extension provides easy way to add Hotjar tracking in your Yii2 application.

Based on https://github.com/cybercog/yii2-google-analytics

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ php composer.phar require thiagotalma/yii2-hotjar "*
```

or add

```json
"thiagotalma/yii2-hotjar": "*"
```

to the require section of your `composer.json` file.

## Usage

In your `/views/layouts/main.php` add
 
```php
use talma\hotjar\widgets\HotjarTracking;
```

Then before `</head>` add following code

```php
<?= HotjarTracking::widget(
    [
        'trackingId' => 'XXXXXXXX'
    ]
) ?>
```

## Advanced usage

If you need the output without `script` tag to combined with `registerJs` or `registerJsFile` as `renderPartial` to add dependency or positioning configuration, you can use *omitScriptTag* **true** to disable `script` tag, example:

```php
<?= $this->registerJs(
    HotjarTracking::widget([
        'trackingId' => 'XXXXXXXX',
        'omitScriptTag' => true
    ]), \yii\web\View::POS_END
); ?>
```
