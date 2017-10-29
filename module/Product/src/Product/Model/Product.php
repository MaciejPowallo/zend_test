<?php
interface Item
{
    public function productType();
}

abstract class Product implements Item
{
    protected $marka;

    public function productType()
    {
        return $this->marka.'<br>';
    }
    public abstract function create();
}

class Book extends Product
{
    public function __construct()
    {
        $this->marka = "Książka";
    }

    public function create()
    {
        echo "Utworzony produkt to $this->marka.<br>";
    }
}

class Laptop extends Product
{
    public function __construct()
    {
        $this->marka = "Laptop";
    }

    public function create()
    {
        echo "Utworzony produkt to $this->marka.<br>";
    }
}

class Television extends Product
{
    public function __construct()
    {
        $this->marka = "Telewizor";
    }

    public function create()
    {
        echo "Utworzony produkt to $this->marka.<br>";
    }
}

class ProductFactory
{
    public static function createBook()
    {
        return new Book();
    }

    public static function createLaptop()
    {
        return new Laptop();
    }

    public static function createTelevision()
    {
        return new Television();
    }
}
