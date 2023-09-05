<?php
class Category {
    public $name;
    public $icon;

    public function __construct(
        $name,
        $icon
    )
    {
       if (!is_numeric($name) && is_string($name)) {
            $this->name = $name;
       } 

       $this->icon = $icon;
    }
}