<?php 
$I = new ApiTester($scenario);

$I->wantTo('test group rest api');

$I->amGoingTo('create group');
$I->sendGet('/groups');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
$I->seeResponseIsJson();
