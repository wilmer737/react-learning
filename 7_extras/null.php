<?php

class Training {

    private $time;
    private $team;
    private $somethingelse;

    public function setTime($time) {
        $this->time = $time;
    }


}

class NullTraining extends Training
{
    public function getTime()
    {
        return 0;
    }
}