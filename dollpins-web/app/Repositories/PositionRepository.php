<?php

namespace App\Repositories;

use App\Models\position;

class PositionRepository
{

        protected position $position;

        public function __construct(position $position)
        {
            $this->position = $position;
        }

        public function getAll()
        {
            return $this->position->all();
        }

}