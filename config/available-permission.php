<?php

return [
    'menusPermissions' => [
        'dashboard' => [
            'generate-bills' => 'Generate Bills',
            'generate-bills-test' => 'Generate Bills',
            'report.quick-reports' => 'Quick Reports',
            'run-sheets' => 'Run Sheets',
            'branch-impersonate' => 'Branch Impersonate'
        ],
        'booking' => [
            'web.booking.index' => 'List',
            'web.booking.create' => 'Create',
            'web.booking.edit' => 'Edit',
            'web.booking.destroy' => 'Destroy',
        ],
        'manifest' => [
            'web.manifest.index' => 'List',
            'web.manifest.outbound' => 'Outbound Manifest',
            'web.manifest.inbound' => 'Inbound Manifest',
            'web.manifest.create' => 'Create',
            'web.manifest.edit' => 'Edit',
            'web.manifest.show' => 'Show',
            'web.manifest.destroy' => 'Destroy',
            'web.manifest.receive' => 'Receive',
            'web.manifest.receive-manual' => 'Manual Receive',
            'web.manifest.inventory' => 'Inventory',
            'web.manifest.fetch' => 'Fetch Records',
        ],
        'run-sheets' => [
            'run-sheets' => 'Run Sheet',
            'run-sheets.pickup' => 'Run Sheet Pickup',
            'run-sheets.dropoff' => 'Run Sheet Dropoff',
        ],
        'bills' => [
            'bills.index' => 'List',
            'bills.buy' => 'Buy CN',
            'bills.create' => 'Create',
            'bills.edit' => 'Edit',
            'bills.destroy' => 'Destroy',
            'bills.show' => 'Show',
        ],
        'bill-rule' => [
            'bill-rules.index' => 'List',
            'bill-rules.create' => 'Create',
            'bill-rules.edit' => 'Edit',
            'bill-rules.destroy' => 'Destroy',
        ], 'payment' => [
            'web.payment.index' => 'List',
            'web.payment.create' => 'Create',
            'web.payment.edit' => 'Edit',
            'web.payment.destroy' => 'Destroy',
            'web.payment.wallet' => 'Wallet Access',
        ],'statement' => [
            'web.statement.index' => 'List',
            'web.statement.create' => 'Create',
            'web.statement.edit' => 'Edit',
            'web.statement.destroy' => 'Destroy',
        ], 'credit' => [
            'web.credit.index' => 'List',
            'web.credit.create' => 'Create',
            'web.credit.edit' => 'Edit',
            'web.credit.destroy' => 'Destroy',
        ], 'company' => [
            'web.company.index' => 'List',
            'web.company.create' => 'Create',
            'web.company.edit' => 'Edit',
            'web.company.destroy' => 'Destroy',
        ], 'customer' => [
            'web.customer.index' => 'List',
            'web.customer.create' => 'Create',
            'web.customer.edit' => 'Edit',
            'web.customer.destroy' => 'Destroy',
        ], 'branch' => [
            'web.branch.index' => 'List',
            'web.branch.create' => 'Create',
            'web.branch.edit' => 'Edit',
            'web.branch.destroy' => 'Destroy',
        ], 'employee' => [
            'web.employee.index' => 'List',
            'web.employee.create' => 'Create',
            'web.employee.edit' => 'Edit',
            'web.employee.destroy' => 'Destroy',
            'web.employee.update' => 'Update',
            'web.employee.setting' => 'Setting',
        ], 'report' => [
            'report.booking' => 'Booking Report',
            'report.customer' => 'Customer Report',
            'report.delivery.pickup' => 'Pickup Report',
            'report.delivery.dropoff' => 'Drop Off Report',
            'report.payment.credit' => 'Credit Report',
            'report.payment' => 'Payement Report',
            'report.tool.sms' => 'SMS Consumption Report',
            'report.tool.credit' => 'SMS Consumption Report',
            'report.vcts' => 'VCTS Report',
            'report.cod-location' => 'HD COD Location List',
            'report.booking-detail' => 'Booking Detail',
            'report.daily-sales' => 'Daily Sales',
            'report.forward-bookings' => 'Forward Bookings',
            'report.credit-statement' => 'Credit Statement',
            'report.credit-statement-delivery' => 'Credit Statement Delivery',
            'report.international-sales' => 'International Sales',
            'report.international-crossing' => 'International Crossing',
            'report.branch-delivery' => 'Branch Delivery',
            'report.admin-delivery' => 'Admin Delivery',
            'report.cn-pod-print' => 'Cn POD Print',
            'report.location-report' => 'Location Report',
            'report.cnIssue' => 'Cn Issue',
            'report.admin-employee-report' => 'Admin Employee Report',
            'report.admin-manifest-report' => 'Admin Manifest Report',
            'report.send-manifest-report' => 'Send Manifest Report',
            'report.received-manifest-report' => 'Recived Manifest Report',
            'report.unreceived-manifest-report' => 'Unreceived Manifest Report',
            'report.cod-limit' => 'Cod Limit',
            'report.employee-commission' => 'Employee Comission',














        ],
        'deposit' => [
            'web.deposit.index' => 'Deposit Verification'
        ],
        'pickup-request' => [
            'pickup-request.index' => 'List',
            'pickup-request.create' => 'Create',
            'pickup-request.edit' => 'Edit'
        ],
        'system-parameters' => [
            'group' => [
                'web.group.index' => 'List',
                'web.group.create' => 'Create',
                'web.group.edit' => 'Edit',
                'web.group.destroy' => 'Destroy',
            ],
            'location' => [
                'web.location.index' => 'List',
                'web.location.create' => 'Create',
                'web.location.edit' => 'Edit',
                'web.location.destroy' => 'Destroy',
            ],
            'pickup' => [
                'web.pickup.index' => 'List',
                'web.pickup.create' => 'Create',
                'web.pickup.edit' => 'Edit',
                'web.pickup.destroy' => 'Destroy',
            ],
            'drop-off' => [
                'web.drop-off.index' => 'List',
                'web.drop-off.create' => 'Create',
                'web.drop-off.edit' => 'Edit',
                'web.drop-off.destroy' => 'Destroy',
            ],
            'sms-group' => [
                'web.sms-group.index' => 'List',
                'web.sms-group.create' => 'Create',
                'web.sms-group.edit' => 'Edit',
                'web.sms-group.destroy' => 'Destroy',
                'web.sms-group.notification-settings' => 'Set Notification',
            ],
            'setting' => [
                'web.system-setting' => 'System Setting'
            ],
            'routes' => [
                'web.routes.index' => 'Routes'
            ]
        ],
        'access-control' => [
            'role' => [
                'role.index' => 'List',
                'role.create' => 'Create',
                'role.edit' => 'Edit',
                'role.destroy' => 'Destroy',
            ], 'permission' => [
                'role-permission-home' => 'Permission To User',
            ],
            'api-key' => [
                'api-key.index' => 'List',
                'api-key.create' => 'Create',
                'api-key.edit' => 'Edit',
                'api-key.destroy' => 'Destroy',
            ], 'customer-rate' => [
                'customer-rate.index' => 'List',
                'customer-rate.create' => 'Create',
                'customer-rate.edit' => 'Edit',
                'customer-rate.destroy' => 'Destroy',
            ], 'delivery-rate' => [
                'delivery-rate.index' => 'List',
                'delivery-rate.create' => 'Create',
                'delivery-rate.edit' => 'Edit',
                'delivery-rate.destroy' => 'Destroy',
            ], 'sms' => [
                'web.sms.index' => 'List',
                'web.sms.create' => 'Create',
                'web.sms.edit' => 'Edit',
                'web.sms.destroy' => 'Destroy',
            ], 'email' => [
                'email.index' => 'List',
                'email.create' => 'Create',
                'email.edit' => 'Edit',
                'email.destroy' => 'Destroy',
            ],
            'notification' => [
                'notification.index' => 'List',
                'notification.create' => 'Create',
                'notification.edit' => 'Edit',
                'notification.destroy' => 'Destroy',
            ],
        ]

    ]
];
