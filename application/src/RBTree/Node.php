<?php

namespace App\RBTree;

class Node extends AbstractNode
{
    /**
     * Parent of the node
     *
     * @var Node
     */
    protected $parent = null;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Here we expect an int value
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->getValue();
    }
}
