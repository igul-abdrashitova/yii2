<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию</p>
<ul>
	<li><label>Name</lable>:<?= Html::encode($model->name)?></li>
	<li><label>Email</lable>:<?= Html::encode($model->email)?></li>
</ul>