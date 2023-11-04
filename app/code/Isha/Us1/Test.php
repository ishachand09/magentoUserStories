<?php
namespace Isha\Us1;

use Magento\Catalog\Api\Data\CategoryInterface;
// use Isha\Us1\Api\Data\CustomCategoryInterface;

class Test
{
    protected $array;
    protected $string;
    protected $category;

    public function __construct(CategoryInterface $category, array $array=[8,9,8], string $string="isha")
    {
        $this->array = $array;
        $this->string = $string;
        $this->category = $category;
    }

    public function displayParams()
    {
        echo "<pre>";
        print_r($this->array);
        echo '</pre>';
        echo "String: " . $this->string;
        // return [$this->array, $this->string]; 
    }
}