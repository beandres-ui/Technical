<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        // Temporary data source: no database yet.
        $users = [
            [
                'username'  => 'admin01',
                'full_name' => 'Alex Rivera',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'cashier01',
                'full_name' => 'Bea Lopez',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier02',
                'full_name' => 'Carlo Ramos',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'manager01',
                'full_name' => 'Diana Cruz',
                'role'      => 'Manager',
            ],
            [
                'username'  => 'staff01',
                'full_name' => 'Enzo Flores',
                'role'      => 'Staff',
            ],
        ];

        return view('layout/header', ['title' => 'User Accounts'])
            . view('users/index', ['users' => $users])
            . view('layout/footer');
    }
}