<?php 

require_once __DIR__ . "/products.php";


class Accessories extends Products {
    protected string $accessoriesType;
    protected string $accessoriesColor;

    public function __construct($_animalType, $_name, $_price, $_accessoriesType) {
        parent::__construct($_animalType,$_name, $_price);
        $this->setAccessoriesType($_accessoriesType);
    }

    /**
     * Get the value of accessoriesType
     */ 
    public function getAccessoriesType() {
        return $this->accessoriesType;
    }

    /**
     * Set the value of accessoriesType
     *
     * @return  self
     */ 
    public function setAccessoriesType($accessoriesType) {
        $this->accessoriesType = $accessoriesType;

        return $this;
    }

    /**
     * Get the value of accessoriesColor
     */ 
    public function getAccessoriesColor() {
        return $this->accessoriesColor;
    }

    /**
     * Set the value of accessoriesColor
     *
     * @return  self
     */ 
    public function setAccessoriesColor($accessoriesColor) {
        $this->accessoriesColor = $accessoriesColor;

        return $this;
    }
}