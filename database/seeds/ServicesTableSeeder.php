<?php

use doctype_admin\Landing\Models\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        Service::truncate();

        $services = [
            [
                'service_name' => 'Admin Starter Kit',
                'service_excerpt' => 'What we need when we start every project ? Basic auth
entication system, managing authenticated users and having them assigned to some
 role and observing their activities ofcourse. Well it handles that all',
                'service_icon' => 'fa fa-rocket'
            ],
            [
                'service_name' => 'Plugins',
                'service_excerpt' => 'Backend and frontend plugins for our lazy developers',
                'service_icon' => 'fa fa-plug'
            ],
            [
                'service_name' => 'Support',
                'service_excerpt' => 'Great community support',
                'service_icon' => 'fa fa-globe'
            ]
        ];
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
