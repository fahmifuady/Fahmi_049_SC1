<!DOCTYPE html>
<html>

<body>
    <h2>PHP Integers</h2>
    <p>2, 256, -256, 10358, -179567 are all integers.</p>
    <p>An integer is a number without any decimal part.</p>
    <p>An integer data type is a non-decimal number between -2147483648 and
        2147483647 in 32 bit systems, and between -9223372036854775808 and
        9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float,
        because it exceeds the limit of an integer.</p>
    <p><strong>Note:</strong> Another important thing to know is that even if 4 * 2.5 is 10, the result is
        stored as float, because one of the operands is a float (2.5).</p>
    <p>Here are some rules for integers:</p>
    <ul>
        <li>An integer must have at least one digit</li>
        <li>An integer must NOT have a decimal point</li>
        <li>An integer can be either positive or negative</li>
        <li>Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)</li>
    </ul>
    <p>PHP has the following predefined constants for integers:</p>
    <ul>
        <li>PHP_INT_MAX - The largest integer supported</li>
        <li>PHP_INT_MIN - The smallest integer supported</li>
        <li>PHP_INT_SIZE -&nbsp; The size of an integer in bytes</li>
    </ul>
    <p>PHP has the following functions to check if the type of a variable is
        integer:</p>
    <ul>
        <li>is_int()</li>
        <li>is_integer() - alias of
            is_int()
        </li>
        <li>is_long() - alias of
            is_int()
        </li>
    </ul>
</body>

</html>