<?php
function takes_many_args(
    $first_arg,
    $second_arg,
    $a_very_long_argument_name,
    $arg_with_default = 5,
    $again = 'a default string', 
    /* Cette virgule trainant 
    n'était pas permit avant 8.0.0.*/
)
{
    // ...
}
?>