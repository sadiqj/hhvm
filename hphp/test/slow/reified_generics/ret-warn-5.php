<?hh

class C<reify Ta, reify Tb> {}
function f($x): C<@int, int> { return $x; }

f(new C<string, int>());    // warn
f(new C<string, string>()); // error since second tp is incorrect, even thought first tp is warn
