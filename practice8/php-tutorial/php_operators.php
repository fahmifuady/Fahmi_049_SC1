<!DOCTYPE html>
<html>

<body>

    <h2>PHP Operators</h2>
    <p>Operators are used to perform operations on variables and values.</p>
    <p>PHP divides the operators in the following groups:</p>
    <ul>
        <li>Arithmetic operators</li>
        <li>Assignment operators</li>
        <li>Comparison operators</li>
        <li>Increment/Decrement operators</li>
        <li>Logical operators</li>
        <li>String operators</li>
        <li>Array operators</li>
        <li>Conditional assignment operators</li>
    </ul>
    <hr>

    <h2>PHP Arithmetic Operators</h2>
    <p>The PHP arithmetic operators are used with numeric values to perform common arithmetical operations,
        such as addition, subtraction, multiplication etc.</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:15%">Operator</th>
            <th style="width:20%">Name</th>
            <th style="width:20%">Example</th>
            <th style="width:35%">Result</th>
            <th style="width:10%">Show it</th>
        </tr>
        <tr>
            <td>+</td>
            <td>Addition</td>
            <td>$x + $y</td>
            <td>Sum of $x and $y</td>

        </tr>
        <tr>
            <td>-</td>
            <td>Subtraction</td>
            <td>$x - $y</td>
            <td>Difference of $x and $y</td>

        </tr>
        <tr>
            <td>*</td>
            <td>Multiplication</td>
            <td>$x * $y</td>
            <td>Product of $x and $y</td>

        </tr>
        <tr>
            <td>/</td>
            <td>Division</td>
            <td>$x / $y</td>
            <td>Quotient of $x and $y</td>

        </tr>
        <tr>
            <td>%</td>
            <td>Modulus</td>
            <td>$x % $y</td>
            <td>Remainder of $x divided by $y</td>

        </tr>
        <tr>
            <td>**</td>
            <td>Exponentiation</td>
            <td>$x ** $y</td>
            <td>Result of raising $x to the $y'th power</td>

        </tr>
    </table>
    <hr>

    <h2>PHP Assignment Operators</h2>
    <p>The PHP assignment operators are used with numeric values to write a value to a variable.</p>
    <p>The basic assignment operator in PHP is &quot;=&quot;. It means that the left operand
        gets set to the value of the assignment expression on the right.</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:15%">Assignment</th>
            <th style="width:20%">Same as... </th>
            <th style="width:55%">Description</th>
            <th style="width:10%">Show it</th>
        </tr>
        <tr>
            <td>x = y</td>
            <td>x = y</td>
            <td>The left operand gets set to the value of the expression on the right</td>

        </tr>
        <tr>
            <td>x += y</td>
            <td>x = x + y</td>
            <td>Addition</td>

        </tr>
        <tr>
            <td>x -= y</td>
            <td>x = x - y</td>
            <td>Subtraction</td>

        </tr>
        <tr>
            <td>x *= y</td>
            <td>x = x * y</td>
            <td>Multiplication</td>

        </tr>
        <tr>
            <td>x /= y</td>
            <td>x = x / y</td>
            <td>Division</td>

        </tr>
        <tr>
            <td>x %= y</td>
            <td>x = x % y</td>
            <td>Modulus</td>

        </tr>
    </table>
    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
        <!-- MidContent -->
        <!-- <p class="adtext">Advertisement</p> -->

        <div id="adngin-mid_content-0"></div>

    </div>
    <hr>
    <h2>PHP Comparison Operators</h2>
    <p>The PHP comparison operators are used to compare two values (number or string):</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:15%">Operator</th>
            <th style="width:22%">Name</th>
            <th style="width:15%">Example</th>
            <th style="width:38%">Result</th>
            <th style="width:10%">Show it</th>
        </tr>
        <tr>
            <td>==</td>
            <td>Equal</td>
            <td>$x == $y</td>
            <td>Returns true if $x is equal to $y</td>

        </tr>
        <tr>
            <td>===</td>
            <td>Identical</td>
            <td>$x === $y</td>
            <td>Returns true if $x is equal to $y, and they are of the same type</td>

        </tr>
        <tr>
            <td>!=</td>
            <td>Not equal</td>
            <td>$x != $y</td>
            <td>Returns true if $x is not equal to $y</td>

        </tr>
        <tr>
            <td>&lt;&gt;</td>
            <td>Not equal</td>
            <td>$x &lt;&gt; $y</td>
            <td>Returns true if $x is not equal to $y</td>

        </tr>
        <tr>
            <td>!==</td>
            <td>Not identical</td>
            <td>$x !== $y</td>
            <td>Returns true if $x is not equal to $y, or they are not of the same type</td>

        </tr>
        <tr>
            <td>&gt;</td>
            <td>Greater than</td>
            <td>$x &gt; $y</td>
            <td>Returns true if $x is greater than $y</td>

        </tr>
        <tr>
            <td>&lt;</td>
            <td>Less than</td>
            <td>$x &lt; $y</td>
            <td>Returns true if $x is less than $y</td>

        </tr>
        <tr>
            <td>&gt;=</td>
            <td>Greater than or equal to</td>
            <td>$x &gt;= $y</td>
            <td>Returns true if $x is greater than or equal to $y</td>

        </tr>
        <tr>
            <td>&lt;=</td>
            <td>Less than or equal to</td>
            <td>$x &lt;= $y</td>
            <td>Returns true if $x is less than or equal to $y</td>

        </tr>
        <tr>
            <td>&lt;=&gt;</td>
            <td>Spaceship</td>
            <td>$x &lt;=&gt; $y</td>
            <td>Returns an integer less than, equal to, or greater than zero, depending on
                if $x is less than, equal to, or greater than $y. Introduced in PHP 7.</td>

        </tr>

    </table>
    <hr>

    <h2>PHP Increment / Decrement Operators</h2>
    <p>The PHP increment operators are used to increment a variable's value.</p>
    <p>The PHP decrement operators are used to decrement a variable's value.</p>
    <table class="ws-table-all notranslate" id="table1">
        <tr>
            <th style="width:15%">Operator</th>
            <th style="width:20%">Name </th>
            <th style="width:55%">Description</th>
            <th style="width:10%">Show it</th>
        </tr>
        <tr>
            <td>++$x</td>
            <td>Pre-increment</td>
            <td>Increments $x by one, then returns $x</td>

        </tr>
        <tr>
            <td>$x++</td>
            <td>Post-increment</td>
            <td>Returns $x, then increments $x by one</td>

        </tr>
        <tr>
            <td>--$x</td>
            <td>Pre-decrement</td>
            <td>Decrements $x by one, then returns $x</td>

        </tr>
        <tr>
            <td>$x--</td>
            <td>Post-decrement</td>
            <td>Returns $x, then decrements $x by one</td>

        </tr>
    </table>
    <hr>

    <h2>PHP Logical Operators</h2>
    <p>The PHP logical operators are used to combine conditional statements.</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:15%">Operator</th>
            <th style="width:20%">Name</th>
            <th style="width:20%">Example</th>
            <th style="width:35%">Result</th>
            <th style="width:10%">Show it</th>
        </tr>
        <tr>
            <td>and</td>
            <td>And</td>
            <td>$x and $y</td>
            <td>True if both $x and $y are true</td>

        </tr>
        <tr>
            <td>or</td>
            <td>Or</td>
            <td>$x or $y</td>
            <td>True if either $x or $y is true</td>

        </tr>
        <tr>
            <td>xor</td>
            <td>Xor</td>
            <td>$x xor $y</td>
            <td>True if either $x or $y is true, but not both</td>

        </tr>
        <tr>
            <td>&amp;&amp;</td>
            <td>And</td>
            <td>$x &amp;&amp; $y</td>
            <td>True if both $x and $y are true</td>

        </tr>
        <tr>
            <td>||</td>
            <td>Or</td>
            <td>$x || $y</td>
            <td>True if either $x or $y is true</td>

        </tr>
        <tr>
            <td>!</td>
            <td>Not</td>
            <td>!$x</td>
            <td>True if $x is not true</td>

        </tr>
    </table>
    <hr>

    <h2>PHP String Operators</h2>
    <p>PHP has two operators that are specially designed for strings.</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:15%">Operator</th>
            <th style="width:25%">Name</th>
            <th style="width:25%">Example</th>
            <th style="width:25%">Result</th>
            <th style="width:10%">Show it</th>
        </tr>
        <tr>
            <td>.</td>
            <td>Concatenation</td>
            <td>$txt1 . $txt2</td>
            <td>Concatenation of $txt1 and $txt2</td>

        </tr>
        <tr>
            <td>.=</td>
            <td>Concatenation assignment</td>
            <td>$txt1 .= $txt2</td>
            <td>Appends $txt2 to $txt1</td>

        </tr>
    </table>
    <hr>

    <h2>PHP Array Operators</h2>
    <p>The PHP array operators are used to compare arrays.</p>
    <table class="ws-table-all notranslate" id="table2">
        <tr>
            <th style="width:15%">Operator</th>
            <th style="width:18%">Name</th>
            <th style="width:17%">Example</th>
            <th style="width:40%">Result</th>
            <th style="width:10%">Show it</th>
        </tr>
        <tr>
            <td>+</td>
            <td>Union</td>
            <td>$x + $y</td>
            <td>Union of $x and $y</td>

        </tr>
        <tr>
            <td>==</td>
            <td>Equality</td>
            <td>$x == $y</td>
            <td>Returns true if $x and $y have the same key/value pairs</td>

        </tr>
        <tr>
            <td>===</td>
            <td>Identity</td>
            <td>$x === $y</td>
            <td>Returns true if $x and $y have the same key/value pairs in the same order and of the same types</td>

        </tr>
        <tr>
            <td>!=</td>
            <td>Inequality</td>
            <td>$x != $y</td>
            <td>Returns true if $x is not equal to $y</td>

        </tr>
        <tr>
            <td>&lt;&gt;</td>
            <td>Inequality</td>
            <td>$x &lt;&gt; $y</td>
            <td>Returns true if $x is not equal to $y</td>

        </tr>
        <tr>
            <td>!==</td>
            <td>Non-identity</td>
            <td>$x !== $y</td>
            <td>Returns true if $x is not identical to $y</td>

        </tr>
    </table>

    <hr>

    <h2>PHP Conditional Assignment Operators</h2>
    <p>The PHP conditional assignment operators are used to set a value depending on conditions:</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:15%">Operator</th>
            <th style="width:22%">Name</th>
            <th style="width:15%">Example</th>
            <th style="width:38%">Result</th>
            <th style="width:10%">Show it</th>
        </tr>
        <tr>
            <td>?:</td>
            <td>Ternary</td>
            <td>$x = <em>expr1</em> ? <em>expr2</em> : <em>expr3</em></td>
            <td>Returns the value of $x.<br>The value of $x is <em>expr2</em> if <em>expr1</em>
                = TRUE.<br>The value of $x is <em>expr3</em> if <em>expr1</em> = FALSE</td>

        </tr>
        <tr>
            <td>??</td>
            <td>Null coalescing</td>
            <td>$x = <em>expr1</em> ?? <em>expr2</em></td>
            <td>Returns the value of $x.<br>The value of $x is <em>expr1</em> if <em>expr1</em>
                exists, and is not NULL.<br>If <em>expr1</em> does not exist, or is NULL, the value of $x is
                <em>expr2</em>.<br>Introduced in PHP 7
            </td>

        </tr>
    </table>
    <hr>
</body>

</html>