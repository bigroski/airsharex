<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
    	$this->migrator->add('appearance.logo', asset('/vendor/tuki/backend/assets/media/logos/tukilogo.png'));
    	$this->migrator->add('appearance.favicon', asset('/vendor/tuki/backend/assets/media/logos/tukilogo.png'));
    }
    public function down(){
    	
    }
};
