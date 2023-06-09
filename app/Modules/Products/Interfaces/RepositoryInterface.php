<?php

namespace App\Modules\Products\Interfaces;

interface RepositoryInterface {
    public function getAll();
    public function findById($id);
}