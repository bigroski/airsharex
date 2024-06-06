<?php
//PLEASE DO php artisan permission:cache-reset TO FLUSH PERMISSION AFTER ADDING OR UPDATING EXISTING PERMISSION
return [
    'date_lang' => 'nepali',
    'mainMenu' => [
        [
            'name' => 'Dashboard',
            'routeName' => '',
            'targetId' => 'dashboard-menu',
            'icon-class' => 'la la-icons',
            'sub_menus' => [
                
                [
                    'name' => 'Quick Reports',
                    'icon-class' => 'fas fa-chart-line',
                    'description' => 'User Related Reports',
                    'routeName' => 'report.quick-reports',
                    'permission-name' => 'report.quick-reports',
                ],
                
            ]
        ],
        [
            'name' => 'Content Management',
            'routeName' => '',
            'targetId' => 'tab-merchendise-management',
            'icon-class' => 'flaticon2-box-1',
            'sub_menus' => [
                [
                    'name' => 'Articles and Articles and Content',
                    'routeName' => '',
                    'icon-class' => 'flaticon2-box-1',
                ],
                [
                    'name' => 'Article Management',
                    'sub_menus' => [
                        [
                            'name' => 'Posts',
                            'icon-class' => 'fas fa-book',
                            'routeName' => 'web.post.index',
                            'permission-name' => 'web.booking.index'
                        ],
                        // [
                        //     'name' => 'Comments',
                        //     'icon-class' => 'fas fa-book',
                        //     'routeName' => 'web.comment.index',
                        //     'permission-name' => 'web.booking.index'
                        // ],
                        [
                            'name' => 'Categories',
                            'icon-class' => 'fas fa-book-medical',
                            'routeName' => 'web.category.index',
                            'permission-name' => 'web.booking.create',

                        ],
                        [
                            'name' => 'Tags',
                            'icon-class' => 'fas fa-book-medical',
                            'routeName' => 'web.tag.index',
                            'permission-name' => 'web.booking.create',

                        ],
                        [
                            'name' => 'Airports',
                            'icon-class' => 'fas fa-book-medical',
                            'routeName' => 'web.airports.index',
                            'permission-name' => 'web.booking.create',

                        ],
                        [
                            'name' => 'Testimonials',
                            'icon-class' => 'fas fa-book-medical',
                            'routeName' => 'web.testimonials.index',
                            'permission-name' => 'web.booking.create',

                        ],
                        [
                            'name' => 'Gallery',
                            'icon-class' => 'fas fa-book-medical',
                            'routeName' => 'web.gallery.index',
                            'permission-name' => 'web.booking.create',

                        ],
                        
                        
                        // [
                        //     'name' => 'Faqs Category',
                        //     'icon-class' => 'fas fa-book-medical',
                        //     'routeName' => 'web.faqCategory.index',
                        //     'permission-name' => 'web.booking.create',

                        // ],
                        // [
                        //     'name' => 'Faqs',
                        //     'icon-class' => 'fas fa-book-medical',
                        //     'routeName' => 'web.faq.index',
                        //     'permission-name' => 'web.booking.create',

                        // ],
                        

                    ]
                ],
                
                
            ],

        ],
        [
            'name' => 'User Management',
            'routeName' => '',
            'targetId' => 'kt_aside_tab_2',
            'icon-class' => 'la la-cogs',
            //Entity SubMenu
            'sub_menus' => [
                [
                    'name' => 'System Users',
                    'routeName' => '',
                    'icon-class' => 'flaticon2-box-1',
                ],
                [
                    'name' => 'Users',
                    'sub_menus' => [
                        [
                            'name' => 'Vendors',
                            'icon-class' => 'fas fa-book-medical',
                            'routeName' => 'web.vendors.index',
                            'permission-name' => 'web.booking.create',

                        ],
                        [
                            'name' => 'Passengers',
                            'icon-class' => 'fas fa-book-medical',
                            'routeName' => 'web.airports.index',
                            'permission-name' => 'web.booking.create',

                        ],
                        [
                            'name' => 'Customers',
                            'icon-class' => 'fas fa-user-friends',
                            'routeName' => 'web.customer.index',
                            'permission-name' => 'web.customer.index',
                            // 'sub_menus' => [
                            //     [
                            //         'name' => 'All Customers',
                            //     ],
                            //     // [
                            //     //     'name' => 'Create Customer',
                            //     //     'routeName' => 'web.customer.create',
                            //     //     'permission-name' => 'web.customer.create',
                            //     // ],

                            // ]
                        ], 
                        [                        
                            'name' => 'Employees',
                            'icon-class' => 'fas fa-user-clock',
                            'routeName' => 'web.employee.index',
                            'permission-name' => 'web.employee.index',
                            'sub_menus' => [
                                [
                                    'name' => 'All Employees',
                                    'routeName' => 'web.employee.create',
                                    'permission-name' => 'web.employee.create',
                                    
                                ],
                                [
                                    'name' => 'Create Employee',
                                    'routeName' => 'web.employee.create',
                                    'permission-name' => 'web.employee.create',
                                ],

                            ]
                        ],
                        
                    ]
                ],
            ],
            //Entity Submenu Ends

        ],

        [
            'name' => 'Latest Reports',
            'routeName' => '',
            'targetId' => 'tab-latest-report',
            'icon-class' => 'fas fa-chart-line',
            'sub_menus' => [
                [
                    'name' => 'System Report',
                    'routeName' => 'report.index',
                    'icon-class' => 'la la-chart-area',
                ],
                //Booking Report
                [
                    'name' => 'ALL REPORT',
                    'sub_menus' => [
                        [
                            'name' => 'Order Reports',
                            'icon-class' => 'fas fa-book',
                            'routeName' => 'report.vcts',
                            'permission-name' => 'report.vcts',
                            'sub_menus' => [
                                [
                                    'name' => 'Daily Order Reports',
                                    'routeName' => 'report.booking-detail',
                                    'permission-name' => 'report.booking-detail'
                                ]
                            ]
                        ],
                        [
                            'name' => 'Sales Reports',
                            'icon-class' => 'fas fa-book',
                            'routeName' => 'report.vcts',
                            'permission-name' => 'report.vcts',
                            'sub_menus' => [
                                [
                                    'name' => 'Daily Sales Reports',
                                    'routeName' => 'report.booking-detail',
                                    'permission-name' => 'report.booking-detail'
                                ]
                            ]
                        ],
                        

                    ]
                ],

                //End Booking Report
            ]

        ], [
            'name' => 'System Parameters',
            'routeName' => '',
            'targetId' => 'tab-system-parameters',
            'icon-class' => 'la la-cog',
            'sub_menus' => [
                [
                    'name' => 'All Parameters',
                    'routeName' => 'system.setting',
                    'icon-class' => 'flaticon2-settings',
                ],
                
//routes
                // [
                //     'name' => 'Logistic Services',
                //     'sub_menus' => [
                //         [
                //             'name' => 'Logistics(Foreign)',
                //             'icon-class' => 'fas fa-truck',
                //             'routeName' => 'web.logistics.index',
                //             'permission-name' => 'pickup.index'
                //         ],

                // [
                //             'name' => 'Logistics Provider(Internal)',
                //             'icon-class' => 'fas fa-truck',
                //             'routeName' => 'web.logistic-provider.index',
                //             'permission-name' => 'pickup.index'
                //         ],

                //     ]
                // ],
                //end of routes
                //ACCESS CONTROL
                [
                    'name' => 'ACCESS CONTROL',
                    'sub_menus' => [
                        [
                            'name' => 'Roles',
                            'icon-class' => 'la la-cubes',
                            'routeName' => 'role.index',
                            'permission-name' => 'role.index',
                        ],
                        ['name' => 'Permissions',
                            'icon-class' => 'la la-universal-access',
                            'routeName' => 'role-permission-home',
                            'permission-name' => 'role-permission-home'
                        ],
                        
                    ]
                ],
                //end of Access Control
                // //Tools
                [
                    'name' => 'Tools',
                    'sub_menus' => [
                        [
                            'name' => 'SMS Setting',
                            'icon-class' => 'flaticon2-sms',
                            'sub_menus' => [
                                [
                                    'name' => 'SMS Groups',
                                    'icon-class' => 'flaticon-price-tag',
                                    'routeName' => 'web.sms-group.index',
                                    'permission-name' => 'web.sms-group.index'
                                ],
                                [
                                    'name' => 'SMS Group Settings',
                                    'icon-class' => 'flaticon-price-tag',
                                    'routeName' => 'web.sms-group.notification-settings',
                                    'permission-name' => 'web.sms-group.notification-settings'
                                ],
                                [
                                    'name' => 'Compose SMS',
                                    'icon-class' => 'flaticon-price-tag',
                                    'routeName' => 'web.sms.create',
                                    'permission-name' => 'web.sms-group.index'
                                ],
                            ]
                        ],
                        // ['name' => 'Email Setting',
                        //     'icon-class' => 'fas fa-mail-bulk',
                        //     'routeName' => 'email.index'
                        // ],
                        // ['name' => 'Notification Setting',
                        //     'icon-class' => 'far fa-bell',
                        //     'routeName' => 'notification.index'
                        // ],
                        [
                            'name' => 'CMS',
                            'icon-class' => 'far fa-bell',
                            'routeName' => 'web.page.index'
                        ],
                        [
                            'name' => 'Menu Management',
                            'icon-class' => 'far fa-bell',
                            'routeName' => 'web.menu.index'
                        ],
                    ]
                ],

                //end of Tools
                
                //End of Merchandise Rate
                [
                    'name' => 'System Setting',
                    'sub_menus' => [
                        [
                            'name' => 'System',
                            'icon-class' => 'flaticon2-pin-1',
                            // 'routeName' => 'web.location.index',
                            'sub_menus' => [
                                [
                                    'name' => 'System Settings',
                                    'permission-name' => 'web.system-setting',
                                    'routeName' => 'web.setting.system'
                                ],
                                
                            ]
                        ],
                    ]
                ],
            ],
        ],
    ],
    'guards' => [
        'web' => 'Web',
        'api' => 'API',
    ],
    'booking_types' => [
        'regular' => 'Regular',
        'home_delivery' => 'Home Delivery',
        'priority' => 'Priority',
        'aclBookin' => 'ACL Bookin',
    ]
];
