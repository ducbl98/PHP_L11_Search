<?php

namespace PhoneList;
use JetBrains\PhpStorm\Pure;
use SplDoublyLinkedList;

class PhoneList
{
    const PATTERN_PHONE = "/\d{10,10}/";
    const PATTERN_VIETTEL = "/^086|^09[6-8]|^03[2-9]/";
    const PATTERN_VINAPHONE = "/^070|^089|^07[6-9]|^090|^093|^0913/";
    const PATTERN_MOBIPHONE = "/^094|^091|^08[1-5]|^088/";
    public SplDoublyLinkedList $vinaphone;
    public SplDoublyLinkedList $viettel;
    public SplDoublyLinkedList $mobiphone;
    public array $phone_list;

    /**
     * PhoneList constructor.
     */
    #[Pure] public function __construct()
    {
        $this->vinaphone = new SplDoublyLinkedList();
        $this->viettel = new SplDoublyLinkedList();
        $this->mobiphone = new SplDoublyLinkedList();
        $this->phone_list = [];
    }

    public function createPhoneList($phone)
    {
        $this->phone_list = explode(",", $phone);
    }

    private function pushViettel()
    {
        $pattern_viettel = self::PATTERN_VIETTEL;
        foreach ($this->phone_list as $value) {
            if (preg_match($pattern_viettel, $value) && preg_match(self::PATTERN_PHONE, $value)) {
                $this->viettel->push($value);
            }
        }
    }

    private function pushVinaphone()
    {
        $pattern_vinaphone = self::PATTERN_VINAPHONE;
        foreach ($this->phone_list as $value) {
            if (preg_match($pattern_vinaphone, $value) && preg_match(self::PATTERN_PHONE, $value)) {
                $this->vinaphone->push($value);
            }
        }
    }

    private function pushMobiphone()
    {
        $pattern_mobiphone = self::PATTERN_MOBIPHONE;
        foreach ($this->phone_list as $value) {
            if (preg_match($pattern_mobiphone, $value) && preg_match(self::PATTERN_PHONE, $value)) {
                $this->mobiphone->push($value);
            }
        }
    }

    public function pushPhone()
    {
        $this->pushViettel();
        $this->pushMobiphone();
        $this->pushVinaphone();
    }

    public function displayVinaphone()
    {
        for ($this->vinaphone->rewind(); $this->vinaphone->valid(); $this->vinaphone->next()) {

            echo $this->vinaphone->current() . "<br/>";
        }
    }

    public function displayViettel()
    {
        for ($this->viettel->rewind(); $this->viettel->valid(); $this->viettel->next()) {
            echo $this->viettel->current() . "<br/>";
        }
    }

    public function displayMobiphone()
    {
        for ($this->mobiphone->rewind(); $this->mobiphone->valid(); $this->mobiphone->next()) {
            echo $this->mobiphone->current() . "<br/>";
        }
    }
}