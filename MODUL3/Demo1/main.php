// main.php
<?php
require_once 'LibrarySystem/RegularMember.php';
require_once 'LibrarySystem/PremiumMember.php';
require_once 'LibrarySystem/Library.php';

use LibrarySystem\RegularMember;
use LibrarySystem\PremiumMember;
use LibrarySystem\Library;

$library = new Library();

$regularMember = new RegularMember("Ahmad", 12345);
$premiumMember = new PremiumMember("Budi", 67890);

if ($regularMember->validateMembershipID($regularMember->getMembershipID())) {
    $library->addMember($regularMember);
}
if ($premiumMember->validateMembershipID($premiumMember->getMembershipID())) {
    $library->addMember($premiumMember);
}

$library->showAllMembers();
