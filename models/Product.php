<?php

namespace app\models;

use Yii;
use yii\filters\AccessControl;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $category_name
 * @property string|null $brand_name
 * @property int|null $price
 * @property int|null $rrp_price
 * @property int|null $status
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'rrp_price', 'status'], 'integer'],
            [['name', 'category_name', 'brand_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category_name' => 'Category Name',
            'brand_name' => 'Brand Name',
            'price' => 'Price',
            'rrp_price' => 'Rrp Price',
            'status' => 'Status',
        ];
    }


}
