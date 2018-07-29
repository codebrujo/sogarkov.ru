<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 29.07.2018
 * Time: 20:22
 */
/** @var \yii\web\View $this */
use yii\helpers\Url;
$this->title = 'Work';
$this->params['breadcrumbs'][] = 'Work';

$this->registerCssFile('../css/style.css',  ['position' => yii\web\View::POS_BEGIN]);
$this->registerJsFile('../js/typed.min.js',  ['position' => yii\web\View::POS_END]);
$this->registerJsFile('../js/page.js',  ['position' => yii\web\View::POS_END]);


?>

<div class="container">
    <div class="type-wrap iwindow">
        <span id="typed6" style="white-space:pre;"></span>
    </div>
</div>



