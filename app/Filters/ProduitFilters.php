<?php

namespace App\Filters;

use Essa\APIToolKit\Filters\QueryFilters;

class ProduitFilters extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [];
}
