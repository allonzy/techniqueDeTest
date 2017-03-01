<?php

require_once('../simpletest/autorun.php');
require_once('../MyHtmlReporter.php');
SimpleTest::prefer(new MyHtmlReporter());
/**
 * Created by PhpStorm.
 * User: allonzo
 * Date: 01/03/17
 * Time: 11:18
 */
class TestViderBarillet extends UnitTestCase
{
    function testViderParTirBarrillet(){
        $revolver = new RevolverA5Coups();
        for($i = 0;$i < 5 ;$i++){
            $this->assertEqual($revolver->appuyerSurDetente(),'BANG');
        }
        for($i = 0;$i < 5 ;$i++){
            $this->assertEqual($revolver->appuyerSurDetente(),'CLIC')
        }
    }
    function testViderParTirBarrillet(){
        $revolver = new RevolverA5Coups();
        $revolver->viderBarillet();
        for($i = 0;$i < 5 ;$i++){
            $this->assertEqual($revolver->appuyerSurDetente(),'CLIC');
        }
    }
}