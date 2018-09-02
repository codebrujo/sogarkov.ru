<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 29.07.2018
 * Time: 20:22
 */
/** @var \yii\web\View $this */
/** @var array $categories */
/** @var array $articles */
/** @var \app\models\tables\Categories $currentCategory */
/** @var \app\models\tables\Articles $currentArticle */


use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Work';
if (is_null($currentCategory)){
    $this->params['breadcrumbs'][] = $this->title;
}else{
    $this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['work']];
    $this->params['breadcrumbs'][] = $currentCategory->name;
}


$this->registerCssFile('../css/style.css',  ['position' => yii\web\View::POS_BEGIN]);
$this->registerJsFile('../js/typed.min.js',  ['position' => yii\web\View::POS_END]);
$this->registerJsFile('../js/page.js',  ['position' => yii\web\View::POS_END]);


?>

<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="list-group">
                <?php foreach ($categories as $category): ?>
                    <? $className = $category->id==$currentCategory->id ? 'list-group-item active' : 'list-group-item'; ?>
                    <?= Html::a($category->name,
                        Url::to(['work', 'category_id' => $category->id])
                        , ['class' => $className])
                    ; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <?php if (is_null($currentArticle)){ ?>
            <div class="type-wrap-container">
                <div class="type-wrap iwindow">
                    <span id="typed6" style="white-space:pre;"></span>
                </div>
            </div>
            <div class="row">
                <?php foreach ($articles as $article): ?>
                <?= $this->render(
                    '_articleCard.php',
                    ['article' => $article]
                )
                ?>
                <?php endforeach; ?>
            </div>
            <?php }else{ ?>
                <?= $this->render(
                    'article.php',
                    ['article' => $currentArticle]
                );
            }?>
        </div>
    </div>
    <hr>
</div>



