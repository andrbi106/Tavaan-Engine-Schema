<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Schema Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور schema — همهٔ کلیدهای مستندشده در `docs/03-engines/schema.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/schema.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('SCHEMA_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('SCHEMA_PREFIX', 'schema:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('SCHEMA_LOG_CHANNEL', 'schema'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Schema',
        'accessor' => 'schema',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];