<?php
function foo(stdClass $a, array $b, callable $c, string $f, bool $g, int $h, float $i, NotExisting $j, stdClass $d = null, $e = null) { }

function bar(): stdClass { return new stdClass; }

class c extends stdClass {
  function bar(self $x): int { return 1; }
  function pbar(parent $x): int { return 1; }
  function factory(): self { return new c; }
  function pfactory(): parent { return new stdClass; }
}

$closure = function (Test $a): Test { return $a; };

echo "*** functions\n";

foreach ([
  new ReflectionFunction('foo'),
  new ReflectionFunction($closure),
] as $idx => $rf) {
  foreach ($rf->getParameters() as $idx2 => $rp) {
    echo "** Function $idx - Parameter $idx2\n";
    var_dump($rp->hasType());
    $ra = $rp->getType();
    if ($ra) {
      var_dump($ra->allowsNull());
      var_dump($ra->isBuiltin());
      var_dump($ra->getName());
    }
  }
}

echo "\n*** methods\n";

foreach ([
  new ReflectionMethod('SplObserver', 'update'),
  new ReflectionMethod('c', 'bar'),
  new ReflectionMethod('c', 'pbar'),
  new ReflectionMethod($closure, '__invoke'),
] as $idx => $rm) {
  foreach ($rm->getParameters() as $idx2 => $rp) {
    echo "** Method $idx - parameter $idx2\n";
    var_dump($rp->hasType());
    $ra = $rp->getType();
    if ($ra) {
      var_dump($ra->allowsNull());
      var_dump($ra->isBuiltin());
      var_dump($ra->getName());
    }
  }
}

echo "\n*** return types\n";

foreach ([
  new ReflectionMethod('SplObserver', 'update'),
  new ReflectionFunction('bar'),
  new ReflectionMethod('c', 'bar'),
  new ReflectionMethod('c', 'factory'),
  new ReflectionMethod('c', 'pfactory'),
  new ReflectionFunction($closure),
  new ReflectionMethod($closure, '__invoke'),
] as $idx => $rf) {
  echo "** Function/method return type $idx\n";
  var_dump($rf->hasReturnType());
  $ra = $rf->getReturnType();
  if ($ra) {
    var_dump($ra->allowsNull());
    var_dump($ra->isBuiltin());
    var_dump($ra->getName());
  }
}

echo "\n*** property types\n";

class PropTypeTest {
    public int $int;
    public string $string;
    public array $arr;
    public stdClass $std;
    public OtherThing $other;
    public $mixed;
}

$reflector = new ReflectionClass(PropTypeTest::class);

foreach ($reflector->getProperties() as $name => $property) {
    if ($property->hasType()) {
        printf("public %s $%s;\n",
            $property->getType()->getName(), $property->getName());
    } else printf("public $%s;\n", $property->getName());
}

echo "*** resolved property types\n";
$obj = new PropTypeTest;
$obj->std = new stdClass;
$r = (new ReflectionProperty($obj, 'std'))->getType();
var_dump($r->getName());
