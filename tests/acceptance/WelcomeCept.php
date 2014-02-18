<?php
$I = new WebGuy($scenario);
$I->wantTo('ensure home page works');
$I->amOnPage('/');
$I->see('GuideMe');
