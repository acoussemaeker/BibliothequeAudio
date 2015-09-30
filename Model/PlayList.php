<?php
Class PlayList
{
    public $id;
    public $user;
    public $name;

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