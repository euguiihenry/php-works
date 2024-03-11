<?php

/* Variables:
================================================================*/
    // An variables always starts with $ symbol.
    // After the $ symbol, it should be strictly followed by a letter or underscore.
    // It is not necessary to set the type of the variables, exactly like happens in JS.

    // We can delete a variables using 'unset(variableName)'.

/* Types:
================================================================*/
    // There are several types of variables in PHP:
    // Strings, integers, floats, booleans, arrays, objects, resources, NULL, etc.
    
    // Booleans aren't case sensitive.

    // There are integers and binary integers.
    // The binary number should starts with 0b.

    // Floats and doubles are the same.

    // We can get the variable type using 'gettype()' method.

    // Strings should be defined in singles quotes ('') not double quotes ("").
    // Double quotes ("") should only be used when we need to embed another variable into the string.


/* Basic Arithmetic Operations:
================================================================*/
    // The basic arithmetic operations are the same as in Java and JS.

    // Increments, decrements and other short arithmetics operations can be done exactly like in Java and JS:
    // Setting a '++' before the variable makes it increments and then continue the flow. Exactly like happens in C, etc.
    // Setting a '++' after the variable makes it continue the flow and then increments. Exactly like happens in Java and JS, etc.

    // The exponentiation operator is '**'.

/* Examples:
================================================================*/
    // Strings:
        $single_quotes = 'This is a string';
        

    // Basic Artihmetic Operations:
        $number = 0;
        $number += 1;      // Increment $number by 1
        echo $number++;    // Prints 1 (increments after evaluation)
        echo '\n';
        echo ++$number;    // Prints 3 (increments before evaluation)
        echo '\n';
        echo $result = 2**3;
        echo '\n';
        echo gettype($result);

    