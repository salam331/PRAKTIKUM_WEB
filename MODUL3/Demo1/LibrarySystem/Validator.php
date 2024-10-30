<?php
namespace LibrarySystem;

trait Validator {
    public function validateMembershipID($id) {
        return is_numeric($id) && strlen((string)$id) === 5;
    }
}
