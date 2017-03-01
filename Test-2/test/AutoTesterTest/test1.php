<?php
require_once('../AutoTester/AutoTester.php');
$autoTester = new AutoTester("/home/allonzo/workspace/techniqueDeTest/Test-2/test/AutoTesterTest/test-1.csv",
    "/home/allonzo/workspace/techniqueDeTest/Test-2/queFaireAujourdhui.php",
    "queFaireAujourdhui",
    "/home/allonzo/workspace/techniqueDeTest/Test-2/test/AutoTesterTest/test_1.php"
    );
$autoTester->generateTest();

?>