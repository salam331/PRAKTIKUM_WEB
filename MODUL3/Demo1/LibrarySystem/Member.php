<?php
namespace LibrarySystem;

abstract class Member {
    protected $name;
    protected $membershipID;

    public function __construct($name, $membershipID) {
        $this->name = $name;
        $this->membershipID = $membershipID;
    }

    // Getter untuk membershipID
    public function getMembershipID() {
        return $this->membershipID;
    }

    abstract public function getMemberType();

    public function __toString() {
        return "Nama: {$this->name}, ID Anggota: {$this->membershipID}, Tipe: {$this->getMemberType()}";
    }
}
