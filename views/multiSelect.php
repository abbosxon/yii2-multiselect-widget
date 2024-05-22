<?php
/**
 * Created by PhpStorm.
 * User: a_isokov
 * Date: 22.04.2016
 * Time: 15:32
 */

/* @var $view yii\web\View
 * @var $data array
 * @var $selectedData array
 * @var $listBoxSize integer
 * @var $widgetNumber integer
 * @var $rightButtonText string
 * @var $leftButtonText string
 * @var $rightButtonOptions array
 * @var $leftButtonOptions array
 * @var $rightAllButtonText string
 * @var $leftAllButtonText string
 * @var $rightAllButtonOptions array
 * @var $leftAllButtonOptions array
 * @var $addDataUrl string
 * @var $removeDataUrl string
 * @var $leftLabel string
 * @var $rightLabel string
 * @var $form yii\widgets\ActiveForm
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
    <div class="row">

        <div class="col-xs-5 col-md-5 col-lg-5">
            <?php if($leftLabel !== false){?>
            <?php echo Html::tag('div',Html::label($leftLabel),['class'=>'col-xs-5']);?>
            <?php } ?>
            <?=Html::dropDownList($widgetNumber.'_from[]',
                '',
                $data,
                [
                    'multiple'=>'multiple',
                    'class'=>'multiselect form-control',
                    'size' => $listBoxSize,
                    'id' => 'search_'.$widgetNumber.'',
                ])
            ?>
        </div>

        <div class="col-xs-2  col-md-2 col-lg-2" style="<?=($leftLabel !== false || $rightLabel !== false) ? "margin-top:30px;":""?>">
            <?=Html::button($leftAllButtonText,$leftAllButtonOptions)?>
            <?=Html::button($leftButtonText,$leftButtonOptions)?>
            <?=Html::button($rightButtonText,$rightButtonOptions)?>
            <?=Html::button($rightAllButtonText,$rightAllButtonOptions)?>
        </div>

        <div class="col-xs-5  col-md-5 col-lg-5">
            <?php if($rightLabel !== false){?>
                <?php echo Html::tag('div',Html::label($rightLabel),['class'=>'col-xs-5 col-xs-offset-2']);?>
            <?php } ?>
            <?= Html::dropDownList($widgetNumber.'_to[]',
                '',
                $selectedData,
                [
                    'multiple'=>'multiple',
                    'class'=>'form-control',
                    'size' => $listBoxSize,
                    'id' => 'search_'.$widgetNumber.'_to'

                ]);
            ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>

