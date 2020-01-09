Yii2-multiselect-widget
===========

jQuery multiselect plugin with two sides. The user can select one or more items and send them to the other side.

# [Demo](http://crlcu.github.com/multiselect/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install the Material Admin Asset run:

```
composer require abbosxon/yii2-multiselect-widget "dev-master"
```


## Requirements

- jQuery 1.7 or higher
- yiisoft/yii2" 2.0.14 or higher,
- yiisoft/yii2-bootstrap 2.0.0 or higher


### Usage example
```
<?php
use abbosxon\widgets\multiselect\MultiSelect;
use yii\helpers\Url;
?>
```


```
<?= MultiSelect::widget([
            'widgetNumber' => 1,
            'valueAttribute' => 'title',
            'keyAttribute' => 'id',
            'leftLabel' => 'Check an option!',
            'rightLabel' => ' - Options selected!',
            'data' => $activeRecordModel::findAll(),
            'selectedData'=>$model->{relation items for $activeRecordModel},
            'addDataUrl'=>Url::to(['link to add relation item', 'id' => $model->id]),
            'removeDataUrl'=>Url::to(['link to remove relation item', 'id' => $model->id]),
            'leftButtonOptions' => ['class'=>'btn-primary'],
            'leftAllButtonOptions' => ['class'=>'btn-primary'],
            'rightButtonOptions' => ['class'=>'btn-primary'],
            'rightAllButtonOptions' => ['class'=>'btn-primary'],
            'listBoxSize' => 25
        ]);?>
```