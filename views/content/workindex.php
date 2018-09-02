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
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="list-group">
                <a href="#" class="list-group-item active">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="type-wrap-container">
                <div class="type-wrap iwindow">
                    <span id="typed6" style="white-space:pre;"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>



