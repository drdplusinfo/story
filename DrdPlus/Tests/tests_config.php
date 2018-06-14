<?php
global $testsConfiguration;
$testsConfiguration = new \DrdPlus\Tests\RulesSkeleton\TestsConfiguration();
$testsConfiguration->disableHasLinksToJournals();
$testsConfiguration->disableHasLinkToSingleJournal();
$testsConfiguration->disableHasCustomBodyContent();
$testsConfiguration->disableHasProtectedAccess();
$testsConfiguration->disableHasAuthors();
$testsConfiguration->disableHasTables();
$testsConfiguration->disableHasDebugContacts();
$testsConfiguration->disableCanBeBoughtOnEshop();
$testsConfiguration->disableHasCharacterSheet();
$testsConfiguration->setBlockNamesToExpectedContent([]);
$testsConfiguration->setExpectedWebName('Příběh z DrD+ pravidel');
$testsConfiguration->setExpectedPageTitle('⏳ Příběh z DrD+ pravidel');
