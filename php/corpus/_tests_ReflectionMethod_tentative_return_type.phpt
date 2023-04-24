<?php

class MyDateTimeZone extends DateTimeZone
{
    #[ReturnTypeWillChange]
    public static function listIdentifiers(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = null): string
    {
        return "";
    }
}

function printInfo(ReflectionMethod $methodInfo) {
    var_dump($methodInfo->hasReturnType());
    var_dump($methodInfo->hasTentativeReturnType());
    var_dump((string) $methodInfo->getReturnType());
    var_dump((string) $methodInfo->getTentativeReturnType());
    var_dump((string) $methodInfo);
    echo "\n";
}

printInfo(new ReflectionMethod(DateTimeZone::class, 'listIdentifiers'));
printInfo(new ReflectionMethod(MyDateTimeZone::class, 'listIdentifiers'));
printInfo(new ReflectionMethod(FileSystemIterator::class, 'current'));

