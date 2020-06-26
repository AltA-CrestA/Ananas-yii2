<?php


namespace frontend\widgets\categoryList;


use frontend\models\Category;
use yii\base\Widget;

class CategoryList extends Widget
{

    public function run()
    {
        $categoryMenList = Category::getMenCategory();
        $categoryWomenList = Category::getWomenCategory();
        $categoryBisexList = Category::getBisexCategory();

        return $this->render('filter', [
            'categoryMenList' => $categoryMenList,
            'categoryWomenList' => $categoryWomenList,
            'categoryBisexList' => $categoryBisexList,
        ]);
    }

}