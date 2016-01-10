<?php

$AchieveCraft->App()->get('/api/get/groups(/)', function () use($AchieveCraft){
    $AchieveCraft->App()->response->headers->set('Content-Type', 'Content-type: application/json');
    try {
        echo json_encode($AchieveCraft->getPublicGroups());
    }
    catch(\Exception $e){
        echo json_encode(array("error" => 404));
    }
});

$AchieveCraft->App()->get('/api/get/group/:groupId(/)', function ($groupId) use($AchieveCraft){
    $AchieveCraft->App()->response->headers->set('Content-Type', 'Content-type: application/json');
    try{
        echo json_encode($AchieveCraft->getGroup($groupId));
    }
    catch(\Exception $e){
        echo json_encode(array("error" => 404));
    }
});