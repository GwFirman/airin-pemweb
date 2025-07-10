<?php

$nav = [
    "General" => [
        [
            "title" => "Pelanggan",
            "icon" => '<i class="menu-icon tf-icons bx bx-user"></i>',
            'route' => 'pelanggan.index',
            'permissions' => ['pelanggan view']
        ],
        [
            "title" => "Layanan",
            "icon" => '<i class="menu-icon tf-icons bx bx-cog"></i>',
            'route' => 'layanan.index',
            'permissions' => ['layanan view']
        ],
        [
            "title" => "Meteran",
            "icon" => '<i class="menu-icon tf-icons bx bx-tachometer"></i>',
            'route' => 'meteran.index',
            'permissions' => ['meteran view']
        ],
        [
            "title" => "Pemakaian",
            "icon" => '<i class="menu-icon tf-icons bx bx-bar-chart"></i>',
            'route' => 'pemakaian.index',
            'permissions' => ['pemakaian view']
        ],
        [
            "title" => "Tagihan",
            "icon" => '<i class="menu-icon tf-icons bx bx-receipt"></i>',
            'route' => 'tagihan.index',
            'permissions' => ['tagihan view']
        ],
    ],
    "Misc" => [
        [
            "title" => "Manajemen Users",
            "icon" => '<i class="menu-icon tf-icons bx bx-lock-open-alt"></i>',
            "submenus" => [
                [
                    'title' => 'Users',
                    'route' => 'users.index',
                    'permissions' => ['user view']
                ],
                [
                    'title' => 'Roles',
                    'route' => 'roles.index',
                    'permissions' => ['role & permission view']
                ],
            ],
        ],
        [
            "title" => "Rekap User",
            "icon" => '<i class="menu-icon tf-icons bx bx-list-check"></i>',
            "route" => null,
            "permissions" => null,
        ],
    ]
];

return $nav;
