<?php


namespace App\classes;


class Calculator
{
    protected $firstNumber;
    protected $lastNumber;
    protected $Result;
    protected $Option;

    public function __construct($post=null)
    {
        if ($post)
        {
            $this->firstNumber = $post['first_number'];
            $this->lastNumber = $post['last_number'];
            $this->Option = $post['option'];
        }
    }

    public function add()
    {
        return  $this->firstNumber + $this->lastNumber;
    }

    public function sub()
    {
        return  $this->firstNumber - $this->lastNumber;
    }

    public function mul()
    {
        return  $this->firstNumber * $this->lastNumber;
    }


    public function div()
    {
        return  $this->firstNumber / $this->lastNumber;
    }

    public function mod()
    {
        return  $this->firstNumber % $this->lastNumber;
    }


    public function index()
    {
        switch ($this->Option)
        {
            case '+';
            $this->Result = $this->add();
            break;

            case '-';
                $this->Result = $this->sub();
            break;

            case '*';
                $this->Result = $this->mul();
            break;

            case '/';
                $this->Result = $this->div();
            break;

            case '%';
                $this->Result = $this->mod();
            break;
        }
        return $this->Result;
    }
}
