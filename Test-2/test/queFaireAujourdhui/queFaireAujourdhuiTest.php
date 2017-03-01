<?php

require_once('../simpletest/autorun.php');
require_once('../MyHtmlReporter.php');
SimpleTest::prefer(new MyHtmlReporter());
require_once('../../queFaireAujourdhui.php');

class queFaireAujourdhuiTest extends UnitTestCase {
    /*
     * Teste la methode queFaireAujourdhui avec les conditions suivantes:
     *  Il fais beau
     *  La mer est chaude
     *  Il y as des requins
     */
    function testCase1(){
        $this->assertEqual(queFaireAujourdhui(true,true,true),"Plage:Bronze");
    }

    /*
     * Teste la methode queFaireAujourdhui avec les conditions suivantes:
     *  Il ne fais pas beau
     *  La mer est froide
     *  Il n'y as pas de requins
     */
    function testCase2(){
        $this->assertEqual(queFaireAujourdhui(false,false,false),"Lit:?");
    }
}
