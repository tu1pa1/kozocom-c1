<?php
namespace App\Repository\Frontend\User;

use App\Models\User;

class UserRepository {
    public function __construct(private User $model)
    {
    }
}
