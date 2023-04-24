<?php
class UnionType {
    public function __debugInfo(): array|null {}
}

class UnionType2 {
    public function __debugInfo(): null|array {}
}

class UnionTypeOldStyle {
    public function __debugInfo(): ?array {}
}

class JustAnArray {
    public function __debugInfo(): array {}
}

echo 'No problems!';
