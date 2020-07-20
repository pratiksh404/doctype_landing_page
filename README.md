![Doctype Admin Blog](https://github.com/pratiksh404/doctype_landing_page/blob/master/screenshots/doctype_landing.png)

[![Issues](https://img.shields.io/github/issues/pratiksh404/doctype_landing_page)](https://github.com/pratiksh404/doctype_landing_page/issues)
[![Stars](https://img.shields.io/github/stars/pratiksh404/doctype_landing_page)](https://github.com/pratiksh404/doctype_landing_page/stargazers)

## Laravel 7 Admin Panel Landing Page for lazy developers.

### Installation

Run Composer Require Command

```sh
composer require doctype_admin/landing_page
```

### Install package assets

#### Install all assets

```sh
php artisan DoctypeAdminLanding:install -a
```

This command will publish

- config file named landing.php
- views files
- migrations files
- seed files
- landing page assets
- larecipe

#### Install config file only

```sh
php artisan DoctypeAdminLanding:install -c
```

#### Install view files only

```sh
php artisan DoctypeAdminLanding:install -f
```

#### Install migrations files only

```sh
php artisan DoctypeAdminLanding:install -m
```

#### Install seed files only

```sh
php artisan DoctypeAdminLanding:install -d
```

#### Install seed assets only

```sh
php artisan DoctypeAdminLanding:install -l
```

#### Install seed documentation only

```sh
php artisan DoctypeAdminLanding:install -g
```

## Then migrate database

```sh
php artisan migrate
```

This Package includes three seed

- LandingsTableSeeder
- FeaturesTableSeeder
- ServicesTableSeeder

publish the seeds if haven't then initialize them in DatabaseSeeder.php

```sh
<?php

use doctype_admin\Landing\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(LandingsTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}

```

## Note

If seed class is not found try running composer dump-autoload

Some of the minor text that may not be changed frequently and is not required to be stored in db is represented from config file feel free to change them

## Package Config File

```sh
<?php

return [
    /*
        |--------------------------------------------------------------------------
        | Prefix of landing page backend
        |--------------------------------------------------------------------------
        |
        | Option to set the prefix of link to the backend.
        | Prefix "admin" recommended
        |
        */
    'prefix' => 'admin',

    /*
        |--------------------------------------------------------------------------
        | Landing Page App Title
        |--------------------------------------------------------------------------
        |
        */
    'app_name' => 'Doctype Admin',

    /*
        |--------------------------------------------------------------------------
        | Landing Page Service Description
        |--------------------------------------------------------------------------
        |
        */
    'service_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',

    /*
        |--------------------------------------------------------------------------
        | Describing App
        |--------------------------------------------------------------------------
        |
        */
    'app_description_heading_1' => 'UNIQUE SCREENS THAT WORK PERFECTLY',
    'app_description_1' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',

    /*
        |--------------------------------------------------------------------------
        | Download Our App Descriprion
        |--------------------------------------------------------------------------
        |
        */
    'download_our_app_Heading' => 'We are here to listen from you deliver exellence',
    'download_our_app_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.',

    /*
        |--------------------------------------------------------------------------
        | Describing App
        |--------------------------------------------------------------------------
        |
        */
    'app_description_heading_2' => 'We’ve made a life that will change you',
    'app_description_2' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.',

];

```

### Sidebar Navigation Cofiguration

In your admin panel go to config/adminlte.php
then in menu section add

```sh
 [
            'text' => 'Landing Page',
            'icon' => 'fas fa-chess-rook',
            'submenu' => [
                [
                    'text' => 'Feature',
                    'icon' => 'fas fa-fire',
                    'url' => 'admin/feature',
                ],
                [
                    'text' => 'Service',
                    'icon' => 'fas fa-concierge-bell',
                    'url' => 'admin/service',
                ],
                [
                    'text' => 'Plans',
                    'icon' => 'fas fa-money-check',
                    'url' => 'admin/plan',
                ],
                [
                    'text' => 'Landing Setting',
                    'icon' => 'fas fa-cog',
                    'url' => 'admin/landing_setting',
                ],
                [
                    'text' => 'Contact',
                    'icon' => 'fas fa-envelope-square',
                    'url' => 'admin/contact',
                ],

            ]
        ],
```

### Admin Panel Screenshot

![Doctype Admin Landing](https://github.com/pratiksh404/doctype_landing_page/blob/master/screenshots/landing.jpg)
![Doctype Admin Landing](https://github.com/pratiksh404/doctype_landing_page/blob/master/screenshots/setting.jpg)

### Todos

- Turbolink
- Better UI
- Support Chat

## Package Used

- https://github.com/saleem-hadad/larecipe
- http://image.intervention.io/

## License

MIT

**DOCTYPE NEPAL ||DR.H2SO4**
