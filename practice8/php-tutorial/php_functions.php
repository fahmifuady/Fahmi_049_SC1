<!DOCTYPE html>
<html>

<body>
    <h1>
        PHP Functions
    </h1>
    <ul>
        <li>A function is a block of statements that can be used repeatedly in a program.</li>
        <li>A function will not execute automatically when a page loads.</li>
        <li>A function will be executed by a call to the function.</li>
    </ul>
    <br><br>


    <p>PHP Function Arguments</p>
    <?php
    function familyName($fname)
    {
        echo "$fname Refsnes.<br>";
    }

    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
    ?>
    <br><br>
    <p>The following example has a function with two arguments ($fname, $year):</p>

    <?php
    function familyName2($fname, $year)
    {
        echo "$fname Refsnes. Born in $year <br>";
    }

    familyName2("Hege", "1975");
    familyName2("Stale", "1978");
    familyName2("Kai Jim", "1983");
    ?>
    <br><br>
    <p>PHP Default Argument Value</p>

    <?php
    function setHeight($minheight = 50)
    {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);
    ?>
    <br><br>
    <p>PHP Functions - Returning values</p>

    <?php
    function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);
    ?>
    <br><br>
    <p>Passing Arguments by Reference</p>

    <?php
    function add_five(&$value)
    {
        $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num;
    ?>


</body>

</html>