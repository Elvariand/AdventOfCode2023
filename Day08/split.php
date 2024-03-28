<?php


class Split {

    private $name;
    private $left;
    private $right;

    function __construct($name, $left, $right)
    {
        $this->name = $name;
        $this->left = $left;
        $this->right = $right;
    }

    /**
     * Get the value of right
     */ 
    public function getRight()
    {
        return $this->right;
    }

    /**
     * Set the value of right
     *
     * @return  self
     */ 
    public function setRight($right)
    {
        $this->right = $right;

        return $this;
    }

    /**
     * Get the value of left
     */ 
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * Set the value of left
     *
     * @return  self
     */ 
    public function setLeft($left)
    {
        $this->left = $left;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}