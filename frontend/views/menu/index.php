<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>Menus</h1>
    <ul>
        <?php foreach ($menus as $menu): ?>
            <li>
                <?= Html::encode("{$menu->price} ({$menu->name})") ?>:
                <?= $menu ->availability ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>