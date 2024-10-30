<?php
namespace LibrarySystem;

require_once 'Validator.php';
require_once 'Member.php';

class PremiumMember extends Member {
    use Validator;

    private $borrowLimit = 10;

    public function getMemberType() {
        return "Premium";
    }

    public function canBorrow($numberOfBooks) {
        return $numberOfBooks <= $this->borrowLimit;
    }
}
