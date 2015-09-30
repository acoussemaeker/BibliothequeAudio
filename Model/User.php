<?php
Class User
{
    public $id;
    public $pseudo;
    public $password;
    public $mail;
    public $grade;

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