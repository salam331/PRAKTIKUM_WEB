<?php
namespace LibrarySystem;

require_once 'Member.php';

class Library {
    private $members = [];

    public function addMember(Member $member) {
        $this->members[] = $member;
    }

    public function showAllMembers() {
        foreach ($this->members as $member) {
            echo $member . PHP_EOL;
        }
    }
}
