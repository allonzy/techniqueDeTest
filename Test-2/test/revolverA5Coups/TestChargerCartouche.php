<?php

/**
 * Created by PhpStorm.
 * User: allonzo
 * Date: 01/03/17
 * Time: 11:27
 */
class TestChargerCartouche extends UnitTestCase{
    public function testBarillerPlein(){
        $revolver = new RevolverA5Coups();
        $revolver->viderBarillet();
    for($i = 0;$i < 5 ;$i++){
        $revolver->chargerUneCartouche();
    }
    try {
        $revolver->chargerUneCartouche();
    }catch (Exception $e){
        $this->assertTrue(False);
    }
    }

}