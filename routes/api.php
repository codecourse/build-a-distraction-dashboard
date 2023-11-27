<?php

use App\Controllers\Api\NewsController;

$app->group('/api', function () {
    $this->get('/news/{service}', NewsController::class . ':show');
});
