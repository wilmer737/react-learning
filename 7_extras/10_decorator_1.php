<?php
class Automobile
{
    private $model;

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function printDescription()
    {
        foreach ($this->getModel()->getFeatures() as $option=>$description)
        {
            echo("$option:  $description <br />");
        }

        echo("Final cost:  " . $this->getModel()->getAutomobileCost());
    }
}

interface AutomobileModel
{
    function getAutomobileCost();
    function getFeatures();
}

class BaseAutomobileModel implements AutomobileModel
{
    public function getAutomobileCost()
    {
        return 2500;
    }

    public function getFeatures()
    {
        return array(
            'security' => 'Manual Locks',
            'engine' => '1.8L 150HP Engine',
            'transmission' => '5 Speed Manual Transmission'
        );
    }
}

class SportAutomobileModel implements AutomobileModel
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getAutomobileCost()
    {
        $cost = $this->model->getAutomobileCost();
        $cost += 1000; /* The sport model is more expensive! */
        return $cost;
    }

    public function getFeatures()
    {
        $features = $this->model->getFeatures();

        $features['engine'] = '2.2L 300 HP Turbocharged Engine';
        $features['transmission'] = '6 Speed Manual Transmission';
        $features['shifter knob'] = 'Titanium';

        return $features;
    }
}

class TouringAutomobileModel implements AutomobileModel
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getAutomobileCost()
    {
        $cost = $this->model->getAutomobileCost();
        $cost += 2000;
        return $cost;
    }

    public function getFeatures()
    {
        $features = array('audio' => '18 Speaker Premium SoundSystem');

        foreach($this->model->getFeatures() as $option=>$description)
        {
            if ($option != 'shifter knob')
            {
                $features[$option] = $description;
            }
        }

        $features['transmission'] = '5 Speed Automatic Transmission';
        $features['engine'] = '2.2L 300 HP Turbocharged Engine';
        $features['security'] = 'Power locks w/ remote.';

        return $features;
    }
}