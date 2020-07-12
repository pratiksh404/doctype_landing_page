<?php



/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;
use doctype_admin\Landing\Models\Landing;


$factory->define(Landing::class, function (Faker $faker) {
    return [
        'landing_name' => 'Doctype Admin Panel',
        'landing_excerpt' => 'Laravel Admin Panel for lazy developers containing role and permission management, user management and integratable packages',
        'landing_about' => 'Laravel Admin Panel for lazy developers containing role and permission management, user management and integratable packages',
        'landing_logo' => '',
        'landing_favicon' => '',
        'landing_facebook' => '',
        'landing_instagram' => '',
        'landing_messenger' => '',
        'landing_github' => '',
        'landing_linkedin' => '',
        'landing_email' => '',
        'landing_patreon' => '',
        'landing_google_map' => '',
        'landing_location' => '',
        'landing_contact' => '',
        'landing_web_app' => '',
        'landing_android_app' => '',
        'landing_ios_app' => '',
        'landing_documentation' => '',
        'landing_trial' => '',
        'landing_app_img' => '',
        'landing_app_video' => 'https://www.youtube.com/watch?v=5g-yAFDbtlQ&t=2s',

    ];
});
