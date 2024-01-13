<!DOCTYPE html>
<html>

<body>
    <h1>
        Strings
    </h1>
    <p>
        Strings in PHP are surrounded by either double quotation marks, or single quotation marks.
    </p>
    <?php
    echo "Hello";
    print "Hello";
    echo "<br><br>";

    $x = "John";
    echo "Hello $x";
    echo "<br><br>";

    $x = "John";
    echo 'Hello $x';
    echo "<br><br>";

    echo strlen("Hello world!");
    echo "<br><br>";

    echo str_word_count("Hello world!");
    echo "<br><br>";

    echo strpos("Hello world!", "world");
    echo "<br><br>";
    ?>
</body>

</html>