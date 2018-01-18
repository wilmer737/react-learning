<?php

interface StrategyInterface
{
    function filter($record);
}

class FindAfterStrategy implements StrategyInterface
{
    private $name;

    public function __construct( $name )
    {
        $this->name = $name;
    }

    public function filter( $record )
    {
        return strcmp( $this->name, $record ) <= 0;
    }
}

class RandomStrategy implements StrategyInterface
{
    public function filter($record)
    {
        return rand(0,1) >= 0.5;
    }
}

class UserList1
{
    private $list = array();

    public function __construct( $names )
    {
        if (is_array($names) && !empty($names)) {
            foreach( $names as $name )
            {
                $this->list[] = $name;
            }
        }
    }

    public function add( $name )
    {
        $this->list[] = $name;
    }

    public function find( $filter )
    {
        $recs = array();
        foreach($this->list as $user) {
            if ($filter->filter( $user )) {
                $recs[] = $user;
            }
        }
        return $recs;
    }
}

$ul = new UserList1(array("Andy", "Drew","Robyn", "Samer"));
$f1 = $ul->find(new FindAfterStrategy("D"));
print_r($f1);
$f2 = $ul->find(new RandomStrategy());
print_r($f2);