<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class BasicSetting extends Settings
{

	public string $site_name = 'abc';
	public string $site_description;
	public string $address;
	public string $email;
	public string $contact_number;
	public string $facebook;
	public string $twitter;
	public static function group(): string
    {
        return 'basicSetting';
    }
}