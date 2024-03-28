<?php

class Pipe
{
    private $form;
    private $x;
    private $y;
    private $connect1;
    private $connect2;
    private $connectedFrom;
    private $distanceFromS;
    private $done;

    function __construct($x, $y, $form)
    {
        $this->x = $x;
        $this->y = $y;
        $this->form = $form;
        $this->connections();
        $this->connectedFrom = null;
        $this->distanceFromS = 0;
        $this->done = false;
    }

    private function connections()
    {
        switch ($this->form) {
            case "S":  // if input
            case '|':
                $this->connect1 = "top";
                $this->connect2 = "bottom";
                break;
            case '-':
                $this->connect1 = "left";
                $this->connect2 = "right";
                break;
            case 'L':
                $this->connect1 = "top";
                $this->connect2 = "right";
                break;
            case '7':
                $this->connect1 = "left";
                $this->connect2 = "bottom";
                break;
            case 'J':
                $this->connect1 = "top";
                $this->connect2 = "left";
                break;
            // case "S":  // if trial
            case 'F':
                $this->connect1 = "right";
                $this->connect2 = "bottom";
                break;
            default:
                $this->connect1 = null;
                $this->connect2 = null;
                break;
        }
    }

    function connect($from)
    {
        $this->connectedFrom = $from;
    }



    /**
     * Get the value of distanceFromS
     */
    public function getDistanceFromS()
    {
        return $this->distanceFromS;
    }

    /**
     * Set the value of distanceFromS
     *
     * @return  self
     */
    public function setDistanceFromS($distanceFromS)
    {
        $this->distanceFromS = $distanceFromS;

        return $this;
    }

    /**
     * Get the value of connectedFrom
     */
    public function getConnectedFrom()
    {
        return $this->connectedFrom;
    }

    /**
     * Set the value of connectedFrom
     *
     * @return  self
     */
    public function setConnectedFrom($connectedFrom)
    {
        $this->connectedFrom = $connectedFrom;

        return $this;
    }

    /**
     * Get the value of connect2
     */
    public function getConnect2()
    {
        return $this->connect2;
    }

    /**
     * Set the value of connect2
     *
     * @return  self
     */
    public function setConnect2($connect2)
    {
        $this->connect2 = $connect2;

        return $this;
    }

    /**
     * Get the value of connect1
     */
    public function getConnect1()
    {
        return $this->connect1;
    }

    /**
     * Set the value of connect1
     *
     * @return  self
     */
    public function setConnect1($connect1)
    {
        $this->connect1 = $connect1;

        return $this;
    }

    /**
     * Get the value of y
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @return  self
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get the value of x
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @return  self
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of form
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set the value of form
     *
     * @return  self
     */
    public function setForm($form)
    {
        $this->form = $form;

        return $this;
    }

    /**
     * Get the value of done
     */ 
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Set the value of done
     *
     * @return  self
     */ 
    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }
}
