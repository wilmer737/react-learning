<?php
$auto = new Automobile();

$model = new BaseAutoModel();
$model = new SportAutoModel($model);
$model = new TouringAutoModel($model);

$auto->setModel($model);
$auto->printDescription();
