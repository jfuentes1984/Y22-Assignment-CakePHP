<?php

use \Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehaviour('Timestamp');
    }
}
