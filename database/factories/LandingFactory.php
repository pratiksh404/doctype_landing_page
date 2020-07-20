<?php



/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;
use doctype_admin\Landing\Models\Landing;


$factory->define(Landing::class, function (Faker $faker) {
    return [
        'landing_name' => 'Doctype Admin Panel',
        'landing_excerpt' => 'Laravel Admin Panel for lazy developers containing role and permission management, user management and integratable packages',
        'landing_about' => '',
        'landing_logo' => 'uploads/landing/logo.png',
        'landing_favicon' => 'uploads/landing/logo.png',
        'landing_facebook' => 'https://www.facebook.com/doctypenepal/',
        'landing_instagram' => '',
        'landing_messenger' => 'm.me/doctypenepal',
        'landing_github' => 'https://github.com/pratiksh404/doctype_admin',
        'landing_linkedin' => '',
        'landing_email' => 'pratikdai404@gmail.com',
        'landing_patreon' => '',
        'landing_google_map' => '',
        'landing_location' => 'Bhaktapur',
        'landing_contact' => '9841985214',
        'landing_web_app' => '',
        'landing_android_app' => '',
        'landing_ios_app' => '',
        'landing_trial' => '',
        'landing_app_img' => 'uploads/landing/landing_app_img.png',
        'landing_app_video' => 'https://www.youtube.com/embed/5g-yAFDbtlQ',

    ];
});
