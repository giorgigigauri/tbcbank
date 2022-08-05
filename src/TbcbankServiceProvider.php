<?php

namespace GiorgiGigauri\TbcBank;

use GiorgiGigauri\TbcBank\Commands\TbcbankCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TbcBankServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tbcbank')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_tbcbank_table')
            ->hasCommand(TbcbankCommand::class);
    }
}
