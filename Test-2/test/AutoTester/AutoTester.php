<?php

/**
 * Created by PhpStorm.
 * User: allonzo
 * Date: 01/03/17
 * Time: 09:47
 */
class AutoTester
{
    private $content;
    private $fileToTest;
    private $testFile;
    private $methodToTest;
    private $decisionTable;
    public function __construct($decisionTableFile,$fileToTest,$methodToTest,$testFile)
    {
        $this->decisionTable = [];
        if (($handle = fopen($decisionTableFile, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                array_push($this->decisionTable,$data);
            }
            fclose($handle);
        }
        unset($this->decisionTable[0]);
        unset($this->decisionTable[1]);

        $this->content = "";
        $this->fileToTest = $fileToTest;
        $this->methodToTest = $methodToTest;
        $this->testFile = $testFile;
    }

    public function generateTest(){
        $this->generateHeader();
        $i = 0;
        foreach($this->decisionTable as $row){
            $output = array_pop($row);
            $parameters = implode(",",$this->decisionTable);
            $this->content .= "
            function testCase".$i."(){".
            '$this->assertEqual(queFaireAujourdhui('.$parameters.'),"'.$output.'");'.
            '}';
        }
        file_put_contents($this->testFile,$this->content);

    }
    public function generateHeader(){

        $this->content =$this->content. "
        <?php
        require_once('../simpletest/autorun.php');
        require_once('../MyHtmlReporter.php');
        SimpleTest::prefer(new MyHtmlReporter());".
        "require_once('" . $this->fileToTest . "');".
        "class ".$this->methodToTest."extends UnitTestCase {";
        var_dump($this->content);
    }

}
