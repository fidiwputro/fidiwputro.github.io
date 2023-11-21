<?php

class PropertyEntity
{
    public $property_id;
    public $property_name;
    public $property_price;
    public $property_address;
    public $property_description;
    public $property_image;
    public $property_type;
    public $property_status;

    public function __construct($property_id, $property_name, $property_price, $property_address, $property_description, $property_image, $property_type, $property_status)
    {
        $this->property_id = $property_id;
        $this->property_name = $property_name;
        $this->property_price = $property_price;
        $this->property_address = $property_address;
        $this->property_description = $property_description;
        $this->property_image = $property_image;
        $this->property_type = $property_type;
        $this->property_status = $property_status;
    }

    // Getter methods
    public function getPropertyId()
    {
        return $this->property_id;
    }

    public function getPropertyName()
    {
        return $this->property_name;
    }

    public function getPropertyPrice()
    {
        return $this->property_price;
    }

    public function getPropertyAddress()
    {
        return $this->property_address;
    }

    public function getPropertyDescription()
    {
        return $this->property_description;
    }

    public function getPropertyImage()
    {
        return $this->property_image;
    }

    public function getPropertyType()
    {
        return $this->property_type;
    }

    public function getPropertyStatus()
    {
        return $this->property_status;
    }

    // Setter methods
    public function setPropertyId($property_id)
    {
        $this->property_id = $property_id;
    }

    public function setPropertyName($property_name)
    {
        $this->property_name = $property_name;
    }

    public function setPropertyPrice($property_price)
    {
        $this->property_price = $property_price;
    }

    public function setPropertyAddress($property_address)
    {
        $this->property_address = $property_address;
    }

    public function setPropertyDescription($property_description)
    {
        $this->property_description = $property_description;
    }

    public function setPropertyImage($property_image)
    {
        $this->property_image = $property_image;
    }

    public function setPropertyType($property_type)
    {
        $this->property_type = $property_type;
    }

    public function setPropertyStatus($property_status)
    {
        $this->property_status = $property_status;
    }
}
