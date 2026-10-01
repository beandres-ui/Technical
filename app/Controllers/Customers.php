<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        // Temporary data source: no database yet.
        $customers = [
            [
                'full_name' => 'Maria Santos',
                'email'     => 'maria.santos@example.com',
                'phone'     => '0917 123 4567',
            ],
            [
                'full_name' => 'Juan Dela Cruz',
                'email'     => 'juan.delacruz@example.com',
                'phone'     => '0918 234 5678',
            ],
            [
                'full_name' => 'Ana Reyes',
                'email'     => 'ana.reyes@example.com',
                'phone'     => '0919 345 6789',
            ],
            [
                'full_name' => 'Paolo Garcia',
                'email'     => 'paolo.garcia@example.com',
                'phone'     => '0920 456 7890',
            ],
            [
                'full_name' => 'Liza Mendoza',
                'email'     => 'liza.mendoza@example.com',
                'phone'     => '0921 567 8901',
            ],
        ];

        return view('layout/header', ['title' => 'Customer Accounts'])
            . view('customers/index', ['customers' => $customers])
            . view('layout/footer');
    }
}