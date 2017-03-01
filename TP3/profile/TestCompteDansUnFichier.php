<?php

include("../CompteDansFichier.php");
include ("Profile.php");
/**
 * Created by PhpStorm.
 * User: allonzo
 * Date: 01/03/17
 * Time: 13:08
 */
class TestCompteDansUnFichier {
    /* @var $profiler Profile */
    private $profiler ;
    public function __construct(){
        $this->profiler = new Profile();
    }
    public function serieDeTest(){
        ob_start();
        $this->testCreeFichier();
        $this->testEnLisantLeFichier();
        ob_clean();
        $this->printDetails();
    }
    public function testCreeFichier(){
        $this->profiler->profile("CompteDansFichier","creeFichier",[1500],3);
    }
    public function testEnLisantLeFichier(){
        $this->profiler->profile("CompteDansFichier","enLisantLeFichier",[10000,"/media/allonzo/SIMONVKEY/Test/testFile1.txt"]);
    }
    public function printDetails(){
        $this->profiler->printDetails();
    }
}
$testCompteDansFichier = new TestCompteDansUnFichier();
$testCompteDansFichier->serieDeTest();
?>