<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class Appearance extends Settings
{
	public string $logo;
	public string $favicon;

    public static function group(): string
    {
        return 'appearance';
    }
}