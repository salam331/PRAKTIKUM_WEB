<?php
namespace LibrarySystem;

require_once 'Validator.php';
require_once 'Member.php';

class RegularMember extends Member {
    use Validator;

    private $borrowLimit = 5;

    public function getMemberType() {
        return "Regular";
    }

    public function canBorrow($numberOfBooks) {
        return $numberOfBooks <= $this->borrowLimit;
    }
}
