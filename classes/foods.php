<?php 

require_once __DIR__ . "/products.php";


class Foods extends Products {
    protected string $packagingType;
    protected string $netWeight;
    protected string $expirationDate;


    public function __construct($_animalType, $_name, $_price, $_netWeight, $_expirationDate) {
        parent::__construct($_animalType, $_name, $_price);
        $this->setNetWeight($_netWeight);
        $this->setExpirationDate($_expirationDate);
    }


    /**
     * Get the value of packagingType
     */ 
    public function getPackagingType()
    {
        return $this->packagingType;
    }

    /**
     * Set the value of packagingType
     *
     * @return  self
     */ 
    public function setPackagingType($packagingType)
    {
        $this->packagingType = $packagingType;

        return $this;
    }

    /**
     * Get the value of netWeight
     */ 
    public function getNetWeight()
    {
        return $this->netWeight;
    }

    /**
     * Set the value of netWeight
     *
     * @return  self
     */ 
    public function setNetWeight($netWeight)
    {
        $this->netWeight = $netWeight;

        return $this;
    }

    /**
     * Get the value of expirationDate
     */ 
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set the value of expirationDate
     *
     * @return  self
     */ 
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }
}