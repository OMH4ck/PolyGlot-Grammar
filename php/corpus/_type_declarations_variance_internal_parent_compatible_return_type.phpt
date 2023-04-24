<?php
class MyDateTimeZone extends DateTimeZone
{
    public static function listIdentifiers(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = null): array
    {
        return [];
    }
}

var_dump(MyDateTimeZone::listIdentifiers());
