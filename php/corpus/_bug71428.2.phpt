<?php
interface StatementInterface {
    public function fetch(int $first = PDO::FETCH_BOTH, int $second = PDO::FETCH_ORI_NEXT, int $third = 0);
}

class Statement extends PDOStatement implements StatementInterface {}

interface StatementInterface1 {
    public function fetch(int $first = PDO::FETCH_ASSOC, int $second = PDO::FETCH_ORI_PRIOR, int $third = 1);
}

class Statement1 extends PDOStatement implements StatementInterface1 {}

echo "ok";
