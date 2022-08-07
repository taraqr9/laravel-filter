<?php

namespace App\Http\Controllers;

use App\Filters\UserFilters;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    public function filter(UserFilters $filters): Collection
    {
//        $user = (new User)->newQuery();
//
//        if($request->exists('phone'))
//        {
//            $user->where('phone', '>=', 555555)->get();
//        }
//
//        if($request->has('is_admin'))
//        {
//            $user->where('is_admin', 1)->orderBy('id', 'desc')->get();
//        }
//
//        return $user->get();

        return User::filter($filters)->get();
    }
}
