<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;


/**
 * ContactForm is the model behind the contact form.
 */
class Subscribe extends ActiveRecord 
{
	public static function tableName(){
		return 'subscribe';
	}
}
