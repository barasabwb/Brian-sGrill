<?php


namespace frontend\controllers;
use yii\web\Controller;

use yii\data\Pagination;
use frontend\models\Menu;


class MenuController extends Controller
{
    public function actionIndex(){
        $menuQuery = Menu::find();

        $pagination = new Pagination(
            [
                'defaultPageSize'=>5,
                'totalCount' => $menuQuery->count()
            ]

        );
        $menu = $menuQuery->orderBy('name')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
            ->all();

        return $this->render('index', ['menus'=>$menu,'pagination'=> $pagination]);



    }

}