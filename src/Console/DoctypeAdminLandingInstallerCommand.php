<?php

namespace doctype_admin\Landing\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class DoctypeAdminLandingInstallerCommand extends Command
{
    protected $signature = "DoctypeAdminLanding:install {--c|config : Installs only config file} {--f|view : Installs only view files} {--m|migration : Installs only migration files} {--d|dummy : Installs only seed files} {--l|assets : Install only assets} {--g|documentation : Install Documentation Plugin} {--a|all : Installs all publishable files}";

    protected $description = "This Command installs Doctype Admin landing Package to your Admin Panel";

    public function handle()
    {
        if (!empty($this->options())) {
            if ($this->option('config')) {
                $this->call('vendor:publish', [
                    '--tag' => ['landing-config']
                ]);
            }
            if ($this->option('view')) {
                $this->call('vendor:publish', [
                    '--tag' => ['landing-views']
                ]);
            }
            if ($this->option('migration')) {
                $this->call('vendor:publish', [
                    '--tag' => ['landing-migrations']
                ]);
            }
            if ($this->option('dummy')) {
                $this->call('vendor:publish', [
                    '--tag' => ['landing-seeds']
                ]);
                $this->call('vendor:publish', [
                    '--tag' => ['landing-img']
                ]);
            }
            if ($this->option('assets')) {
                $this->call('vendor:publish', [
                    '--tag' => ['landing-frontend']
                ]);
            }
            if ($this->option('documentation')) {
                $this->call('larecipe:install');
            }
            if ($this->option('all')) {
                $this->call('vendor:publish', [
                    '--tag' => ['landing-config']
                ]);
                $this->call('vendor:publish', [
                    '--tag' => ['landing-views']
                ]);
                $this->call('vendor:publish', [
                    '--tag' => ['landing-migrations']
                ]);
                $this->call('vendor:publish', [
                    '--tag' => ['landing-seeds']
                ]);
                $this->call('vendor:publish', [
                    '--tag' => ['landing-img']
                ]);
                $this->call('vendor:publish', [
                    '--tag' => ['landing-frontend']
                ]);
                $this->call('larecipe:install');
                $this->info("Doctype Admin Landing Installed");
                $this->info("Would be great if you gave my repo a star.");
            }
        } else {
            $this->error("Please provide option to DoctypeAdminlanding:install command");
            $this->info("Please see the command structure");
            $this->info("php artisan help DoctypeAdminlanding:install");
        }
    }
}
