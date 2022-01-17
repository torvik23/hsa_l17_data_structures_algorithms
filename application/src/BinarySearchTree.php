<?php

namespace App;

use App\RBTree\AbstractTree;
use App\RBTree\Node;
use App\RBTree\NodeInterface;

class BinarySearchTree extends AbstractTree
{
    /**
     * @param array $data
     *
     * @return BinarySearchTree
     */
    public static function createFromArray(array $data): BinarySearchTree
    {
        $tree = new self();
        if (count($data) === 0) {
            return $tree;
        }

        foreach ($data as $id) {
            $node = new Node($id, $id);
            $tree->insert($node);
        }

        return $tree;
    }

    /**
     * Integer implementation
     *
     * @param int $idA
     * @param int $idB
     *
     * @return int
     */
    protected function compare($idA, $idB): int
    {
        return $idA <=> $idB;
    }
    
    public function getMin(NodeInterface $node = null): ?NodeInterface
    {
        if (null === $node) {
            $node = $this->root;
        }
        while ($node and $node->haveChild(NodeInterface::POSITION_LEFT)) {
            $node = $node->getChild(NodeInterface::POSITION_LEFT);
        }
        return $node;
    }

    public function getMax(NodeInterface $node = null): ?NodeInterface
    {
        if (null === $node) {
            $node = $this->root;
        }
        while ($node and $node->haveChild(NodeInterface::POSITION_RIGHT)) {
            $node = $node->getChild(NodeInterface::POSITION_RIGHT);
        }
        return $node;
    }
}
