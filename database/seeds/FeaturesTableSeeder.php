<?php

use Illuminate\Database\Seeder;
use doctype_admin\Landing\Models\Feature;

class FeaturesTableSeeder extends Seeder
{
    public function run()
    {
        Feature::truncate();

        $features = [
            [
                'feature_name' => 'User Management',
                'feature_image' => 'uploads/landing/all_user.jpg',
                'feature_about' => 'User Management System that allows you to manage the assigned users to your system'
            ],
            [
                'feature_name' => 'Role Management',
                'feature_image' => 'uploads/landing/roles.jpg',
                'feature_about' => 'User Management System that allows you to  assign roles to users on your system'
            ],
            [
                'feature_name' => 'Activity Log',
                'feature_image' => 'uploads/landing/activity.jpg',
                'feature_about' => 'Activity Log allows you to monitor the activities on your system'
            ],
        ];
        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
