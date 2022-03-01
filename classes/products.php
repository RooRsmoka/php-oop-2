<?php 

class Products {
    protected string $id;
    protected string $animalType;
    protected string $name;
    protected float $price;

    public function __construct($_animalType, $_name, $_price) {
        $this->setAnimalType($_animalType);
        $this->setName($_name);
        $this->setPrice($_price);
        $this->id = uniqid();
    }

    /**
     * Get the value of id
     */ 
    public function getId() {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id) {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of animalType
     */ 
    public function getAnimalType() {
        return $this->animalType;
    }

    /**
     * Set the value of animalType
     *
     * @return  self
     */ 
    public function setAnimalType($animalType) {
        $this->animalType = $animalType;

        return $this;
    }
     
    /**
     * Get the value of name
     */ 
    public function getName() {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }
}