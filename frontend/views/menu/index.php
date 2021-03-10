<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use frontend\assets\BackendAsset;
$backend = BackendAsset::register($this);

?>
    <h1>Menus</h1>
    <ul>
        <?php foreach ($menus as $menu): ?>
            <li>
                <?= Html::img($backend->baseUrl . '/'.$menu->img) ?>

                <?= Html::encode("{$menu->price} ({$menu->name})") ?>:
                <?= $menu ->availability ?><?= $menu ->img ?>

            </li>

        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>