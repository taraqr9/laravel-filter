<?php

namespace App\Filters;

class UserFilters extends QueryFilter
{
    public function is_admin()
    {
        return $this->builder->where('is_admin', 1)->orderBy('id', 'desc');
    }

    public function phone($number)
    {
        $this->builder->where('phone', '>=', $number);
    }
}
