<?php

class Contraption
{
    private $form;
    private $x;
    private $y;
    private $lightFrom;
    private $lightTo;
    private $energized;

    function __construct($x, $y, $form)
    {
        $this->x = $x;
        $this->y = $y;
        $this->form = $form;
        $this->lightFrom = [];
        $this->lightTo = [];
        $this->energized = false;
    }

    function bounce($grid)
    {
        $this->energized = true;
        $dest = [];
        foreach ($this->lightFrom as $source) {
            // if (gettype($source) == "string") {
            //     view("ERROR STRING");
            // }
            $sourcePosX = $source->getX();
            $sourcePosY = $source->getY();
            $x = $this->x;
            $y = $this->y;
            switch ($this->form) {
                case '|':
                    if (abs($sourcePosX - $x) == 1) {
                        if (isset($grid[$y + 1][$x]) && array_search($grid[$y + 1][$x], $this->lightTo) === false) {
                            array_push($dest, $grid[$y + 1][$x]);
                            $array = $grid[$y + 1][$x]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y + 1][$x]->setLightFrom($array);
                        }
                        if (isset($grid[$y - 1][$x]) && array_search($grid[$y - 1][$x], $this->lightTo) === false) {
                            array_push($dest, $grid[$y - 1][$x]);
                            $array = $grid[$y - 1][$x]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y - 1][$x]->setLightFrom($array);
                        }
                    } else if ($sourcePosY == $y + 1) {
                        if (isset($grid[$y - 1][$x]) && array_search($grid[$y - 1][$x], $this->lightTo) === false) {
                            array_push($dest, $grid[$y - 1][$x]);
                            $array = $grid[$y - 1][$x]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y - 1][$x]->setLightFrom($array);
                        }
                    } else if ($sourcePosY == $y - 1) {
                        if (isset($grid[$y + 1][$x]) && array_search($grid[$y + 1][$x], $this->lightTo) === false) {
                            array_push($dest, $grid[$y + 1][$x]);
                            $array = $grid[$y + 1][$x]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y + 1][$x]->setLightFrom($array);
                        }
                    } else {
                        view("error with y= $y ; x= $x");
                    }
                    break;
                case '-':
                    if (abs($sourcePosY - $y) == 1) {
                        if (isset($grid[$y][$x + 1]) && array_search($grid[$y][$x + 1], $this->lightTo) === false) {
                            array_push($dest, $grid[$y][$x + 1]);
                            $array = $grid[$y][$x + 1]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y][$x + 1]->setLightFrom($array);
                        }
                        if (isset($grid[$y][$x - 1]) && array_search($grid[$y][$x - 1], $this->lightTo) === false) {
                            array_push($dest, $grid[$y][$x - 1]);
                            $array = $grid[$y][$x - 1]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y][$x - 1]->setLightFrom($array);
                        }
                    } else if ($sourcePosX == $x + 1) {
                        if (isset($grid[$y][$x - 1]) && array_search($grid[$y][$x - 1], $this->lightTo) === false) {
                            array_push($dest, $grid[$y][$x - 1]);
                            $array = $grid[$y][$x - 1]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y][$x - 1]->setLightFrom($array);
                        }
                    } else if ($sourcePosX == $x - 1) {
                        if (isset($grid[$y][$x + 1]) && array_search($grid[$y][$x + 1], $this->lightTo) === false) {
                            array_push($dest, $grid[$y][$x + 1]);
                            $array = $grid[$y][$x + 1]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y][$x + 1]->setLightFrom($array);
                        }
                    } else {
                        view("error with y= $y ; x= $x");
                    }
                    break;
                case '/':
                    if ($sourcePosX == $x + 1) {
                        if (isset($grid[$y + 1][$x]) && array_search($grid[$y + 1][$x], $this->lightTo) === false) {
                            array_push($dest, $grid[$y + 1][$x]);
                            $array = $grid[$y + 1][$x]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y + 1][$x]->setLightFrom($array);
                        }
                    } else if ($sourcePosX == $x - 1) {
                        if (isset($grid[$y - 1][$x]) && array_search($grid[$y - 1][$x], $this->lightTo) === false) {
                            array_push($dest, $grid[$y - 1][$x]);
                            $array = $grid[$y - 1][$x]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y - 1][$x]->setLightFrom($array);
                        }
                    } else if ($sourcePosY == $y + 1) {
                        if (isset($grid[$y][$x + 1]) && array_search($grid[$y][$x + 1], $this->lightTo) === false) {
                            array_push($dest, $grid[$y][$x + 1]);
                            $array = $grid[$y][$x + 1]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y][$x + 1]->setLightFrom($array);
                        }
                    } else if ($sourcePosY == $y - 1) {
                        if (isset($grid[$y][$x - 1]) && array_search($grid[$y][$x - 1], $this->lightTo) === false) {
                            array_push($dest, $grid[$y][$x - 1]);
                            $array = $grid[$y][$x - 1]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y][$x - 1]->setLightFrom($array);
                        }
                    } else {
                        view("error with y= $y ; x= $x");
                    }
                    break;
                case '\\':
                    if ($sourcePosX == $x + 1) {
                        if (isset($grid[$y - 1][$x]) && array_search($grid[$y - 1][$x], $this->lightTo) === false) {
                            array_push($dest, $grid[$y - 1][$x]);
                            $array = $grid[$y - 1][$x]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y - 1][$x]->setLightFrom($array);
                        }
                    } else if ($sourcePosX == $x - 1) {
                        if (isset($grid[$y + 1][$x]) && array_search($grid[$y + 1][$x], $this->lightTo) === false) {
                            array_push($dest, $grid[$y + 1][$x]);
                            $array = $grid[$y + 1][$x]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y + 1][$x]->setLightFrom($array);
                        }
                    } else if ($sourcePosY == $y + 1) {
                        if (isset($grid[$y][$x - 1]) && array_search($grid[$y][$x - 1], $this->lightTo) === false) {
                            array_push($dest, $grid[$y][$x - 1]);
                            $array = $grid[$y][$x - 1]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y][$x - 1]->setLightFrom($array);
                        }
                    } else if ($sourcePosY == $y - 1) {
                        if (isset($grid[$y][$x + 1]) && array_search($grid[$y][$x + 1], $this->lightTo) === false) {
                            array_push($dest, $grid[$y][$x + 1]);
                            $array = $grid[$y][$x + 1]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y][$x + 1]->setLightFrom($array);
                        }
                    } else {
                        view("error with y= $y ; x= $x");
                    }
                    break;
                default:
                    if ($sourcePosX == $x + 1) {
                        if (isset($grid[$y][$x - 1]) && array_search($grid[$y][$x - 1], $this->lightTo) === false) {
                            array_push($dest, $grid[$y][$x - 1]);
                            $array = $grid[$y][$x - 1]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y][$x - 1]->setLightFrom($array);
                        }
                    } else if ($sourcePosX == $x - 1) {
                        if (isset($grid[$y][$x + 1]) && array_search($grid[$y][$x + 1], $this->lightTo) === false) {
                            array_push($dest, $grid[$y][$x + 1]);
                            $array = $grid[$y][$x + 1]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y][$x + 1]->setLightFrom($array);
                        }
                    } else if ($sourcePosY == $y + 1) {
                        if (isset($grid[$y - 1][$x]) && array_search($grid[$y - 1][$x], $this->lightTo) === false) {
                            array_push($dest, $grid[$y - 1][$x]);
                            $array = $grid[$y - 1][$x]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y - 1][$x]->setLightFrom($array);
                        }
                    } else if ($sourcePosY == $y - 1) {
                        if (isset($grid[$y + 1][$x]) && array_search($grid[$y + 1][$x], $this->lightTo) === false) {
                            array_push($dest, $grid[$y + 1][$x]);
                            $array = $grid[$y + 1][$x]->getLightFrom();
                            array_push($array, $this);
                            $grid[$y + 1][$x]->setLightFrom($array);
                        }
                    } else {
                        view("error with y= $y ; x= $x");
                    }
                    break;
            }
        }
        foreach ($dest as $d) {
            array_push($this->lightTo, $d);
        }
        return $dest;
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
     * Get the value of lightFrom
     */
    public function getLightFrom()
    {
        return $this->lightFrom;
    }

    /**
     * Set the value of lightFrom
     *
     * @return  self
     */
    public function setLightFrom($lightFrom)
    {
        $this->lightFrom = $lightFrom;

        return $this;
    }

    /**
     * Get the value of lightTo
     */
    public function getLightTo()
    {
        return $this->lightTo;
    }

    /**
     * Set the value of lightTo
     *
     * @return  self
     */
    public function setLightTo($lightTo)
    {
        $this->lightTo = $lightTo;

        return $this;
    }

    /**
     * Get the value of energized
     */
    public function getEnergized()
    {
        return $this->energized;
    }

    /**
     * Set the value of energized
     *
     * @return  self
     */
    public function setEnergized($energized)
    {
        $this->energized = $energized;

        return $this;
    }
}
