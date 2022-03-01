<?php

class CreditCard {
    private string $number;
    private string $cvv;
    private string $owner;
    private string $expirationDate;

    public function __construct($_number, $_cvv, $_owner, $_expirationDate) {
        $this->setNumber($_number);
        $this->setCvv($_cvv);
        $this->setOwner($_owner);
        $this->setExpirationDate($_expirationDate);
    }

    /**
     * Get the value of number
     */ 
    public function getNumber() {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number) {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of cvv
     */ 
    public function getCvv() {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    public function setCvv($cvv) {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of owner
     */ 
    public function getOwner() {
        return $this->owner;
    }

    /**
     * Set the value of owner
     *
     * @return  self
     */ 
    public function setOwner($owner) {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get the value of expirationDate
     */ 
    public function getExpirationDate() {
        return $this->expirationDate;
    }

    /**
     * Set the value of expirationDate
     *
     * @return  self
     */ 
    public function setExpirationDate($expirationDate) {
        $this->expirationDate = $expirationDate;

        return $this;
    }
}