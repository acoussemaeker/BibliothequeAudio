<?php
Class Audio
{
    public $id;
    public $name;
    public $location;

    public function __construct(array $arguments = array())
    {
        if (!empty($arguments))
        {
            foreach ($arguments as $property => $argument)
            {
                $this->{$property} = $argument;
            }
        }
    }
}