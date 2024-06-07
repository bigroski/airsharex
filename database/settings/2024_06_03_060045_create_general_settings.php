<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
    	$this->migrator->add('basicSetting.site_name', 'Project name');
        $this->migrator->add('basicSetting.site_description', 'About this project');
        $this->migrator->add('basicSetting.address', 'Official Address');
        $this->migrator->add('basicSetting.email', 'pratik.raghubanshi@gmail.com');
        $this->migrator->add('basicSetting.contact_number', '9874561232');

        $this->migrator->add('basicSetting.facebook', 'https://facebook.com');
        $this->migrator->add('basicSetting.twitter', '
        	https://twitter.com');
    }
};
