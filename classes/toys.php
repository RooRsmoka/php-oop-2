<?php 

require_once __DIR__ . "/products.php";


class Toys extends Products {
    protected string $toyType;
    protected string $toyMaterial;

    public function __construct($_animalType, $_name, $_price, $_toyMaterial) {
        parent::__construct($_animalType, $_name, $_price);
        $this->setToyMaterial($_toyMaterial);
    }

    /**
     * Get the value of toyType
     */ 
    public function getToyType() {
        return $this->toyType;
    }

    /**
     * Set the value of toyType
     *
     * @return  self
     */ 
    public function setToyType($toyType) {
        $this->toyType = $toyType;

        return $this;
    }

    /**
     * Get the value of toyMaterial
     */ 
    public function getToyMaterial() {
        return $this->toyMaterial;
    }

    /**
     * Set the value of toyMaterial
     *
     * @return  self
     */ 
    public function setToyMaterial($toyMaterial) {
        $this->toyMaterial = $toyMaterial;

        return $this;
    }
}