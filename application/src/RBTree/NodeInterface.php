<?php

declare(strict_types=1);

namespace App\RBTree;

interface NodeInterface
{
    /**
     * COLOR_BLACK
     *
     * @var bool
     */
    public const COLOR_BLACK = true;

    /**
     * COLOR_RED
     *
     * @var bool
     */
    public const COLOR_RED = false;

    /**
     * Children position
     *
     * @var integer
     */
    public const POSITION_LEFT = -1;

    /**
     * Children position
     *
     * @var integer
     */
    public const POSITION_RIGHT = 1;

    /**
     * Children position
     *
     * @var null
     */
    public const POSITION_ROOT = null;

    /**
     * Id can be anything. Basically you will want to use it with integer.
     *
     * @return mixed
     */
    public function getId();

    /**
     * @param mixed $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value);

    /**
     * @return boolean
     */
    public function getColor();

    /**
     * @param boolean $color
     * @return $this
     */
    public function setColor($color);

    /**
     * @return integer
     */
    public function getPosition();

    /**
     * Position can be null if root
     *
     * @param integer|null $position
     * @return $this
     */
    public function setPosition($position);

    /**
     * @return NodeInterface|null
     */
    public function getParent();

    /**
     * If the parent is null, it's a root
     *
     * @param NodeInterface|null $parent
     * @return $this
     */
    public function setParent(NodeInterface $parent = null);

    /**
     * @param int $position
     * @return NodeInterface
     */
    public function getChild($position);

    /**
     * Set child
     *
     * @param int $position
     * @param NodeInterface|null $child
     * @return $this
     */
    public function setChild($position, NodeInterface $child = null);

    /**
     * @param int $position
     * @return bool
     */
    public function haveChild($position);

    /**
     * get grand parent if a parent exist
     *
     * @return NodeInterface|null
     */
    public function getGrandParent();

    /**
     * Get uncle if grand parent exist
     *
     * @return NodeInterface|null
     */
    public function getUncle();

    /**
     * Is a NIL / Leaf
     * A node without child is a leaf (so with both entry as null)
     *
     * @return bool
     */
    public function isLeaf();
}
