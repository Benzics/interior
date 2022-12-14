<?php

use App\Models\Setting;

/**
 * Determines if a route is active
 * @param $routeName
 * @param $type
 */
function menuActive($routeName, $type = null)
{
    if ($type == 3) {
        $class = 'side-menu--open';
    } elseif ($type == 2) {
        $class = 'sidebar-submenu__open';
    } else {
        $class = 'active';
    }
    if (is_array($routeName)) {
        foreach ($routeName as $key => $value) {
            if (request()->routeIs($value)) {
                return $class;
            }
        }
    } elseif (request()->routeIs($routeName)) {
        return $class;
    }

}

/**
 * Retrieve a setting from the database
 * @param $setting_name
 * @return
 */
function setting(string $setting_name)
{ 
    try
    {
        $setting = Setting::where('name', $setting_name)->firstOrFail();
        return $setting->value;
    }
    catch (Throwable $e)
    {
        report($e);
        return '';
    }
}

/**
 * Get the current currency symbol in use
 * @return
 */
function currency_symbol()
{
    return setting('currency-symbol');
}

/**
 * Get the current currency short code in use
 * @return
 */
function currency_short()
{
    return setting('currency-short');
}