<!DOCTYPE html>
<html>

<body>

    <h1>PHP Array</h1>
    <h3>Example</h3>
    <p>Array items of four different data types: </p>
    <?php
    // function example:
    function someFunction()
    {
        echo "This text comes from a function";
    }

    // create array:
    $myArr = array("Volvo", 15, ["apples", "bananas"], someFunction());

    // calling the function from the array item:
    $myArr[3];
    ?>
    <br><br>

    <h3>Array Functions</h3>
    <p>The real strength of PHP arrays are the built-in array functions, like the count() function for counting array items: </p>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);
    ?>
    <br><br>

    <h3>PHP Indexed Arrays</h3>
    <p>In indexed arrays each item has an index number.
        By default, the first item has index 0, the second item has item 1, etc. </p>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    ?>
    <br><br>

    <h3>Associative Arrays</h3>
    <p>Associative arrays are arrays that use named keys that you assign to them. </p>
    <?php
    $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    echo $car["model"];
    ?>
    <br><br>

    <h3>PHP - Sort Functions For Arrays</h3>
    <ul>
        <li>sort() - sort arrays in ascending order</li>
        <li>rsort() - sort arrays in descending order</li>
        <li>asort() - sort associative arrays in ascending order, according to the value</li>
        <li>ksort() - sort associative arrays in ascending order, according to the key</li>
        <li>arsort() - sort associative arrays in descending order, according to the value</li>
        <li>krsort() - sort associative arrays in descending order, according to the key</li>
    </ul>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);

    $clength = count($cars);
    for ($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    ?>
    <br><br>

    <h3>PHP - Multidimensional Arrays</h3>
    <p>A multidimensional array is an array containing one or more arrays. PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people. </p>
    <?php
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }
    ?>
    <br><br>

    <h2>PHP Array Functions</h2>

    <p>PHP has a set of built-in functions that you can use on arrays.</p>

    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:25%">Function</th>
            <th style="width:75%">Description</th>
        </tr>
        <tr>
            <td>array()</td>
            <td>Creates an array</td>
        </tr>
        <tr>
            <td>array_change_key_case()</td>
            <td>Changes all keys in an array to lowercase or uppercase</td>
        </tr>
        <tr>
            <td>array_chunk()</td>
            <td>Splits an array into chunks of arrays</td>
        </tr>
        <tr>
            <td>array_column()</td>
            <td>Returns the values from a single column in the input array</td>
        </tr>
        <tr>
            <td>array_combine()</td>
            <td>Creates an array by using the elements from one &quot;keys&quot; array and one &quot;values&quot; array</td>
        </tr>
        <tr>
            <td>array_count_values()</td>
            <td>Counts all the values of an array</td>
        </tr>
        <tr>
            <td>array_diff()</td>
            <td>Compare arrays, and returns the differences (compare values only)</td>
        </tr>
        <tr>
            <td>array_diff_assoc()</td>
            <td>Compare arrays, and returns the differences (compare keys and values)</td>
        </tr>
        <tr>
            <td>array_diff_key()</td>
            <td>Compare arrays, and returns the differences (compare keys only)</td>
        </tr>
        <tr>
            <td>array_diff_uassoc()</td>
            <td>Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function)</td>
        </tr>
        <tr>
            <td>array_diff_ukey()</td>
            <td>Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function)</td>
        </tr>
        <tr>
            <td>array_fill()</td>
            <td>Fills an array with values</td>
        </tr>
        <tr>
            <td>array_fill_keys()</td>
            <td>Fills an array with values, specifying keys</td>
        </tr>
        <tr>
            <td>array_filter()</td>
            <td>Filters the values of an array using a callback function</td>
        </tr>
        <tr>
            <td>array_flip()</td>
            <td>Flips/Exchanges all keys with their associated values in an array</td>
        </tr>
        <tr>
            <td>array_intersect()</td>
            <td>Compare arrays, and returns the matches (compare values only)</td>
        </tr>
        <tr>
            <td>array_intersect_assoc()</td>
            <td>Compare arrays and returns the matches (compare keys and values)</td>
        </tr>
        <tr>
            <td>array_intersect_key()</td>
            <td>Compare arrays, and returns the matches (compare keys only)</td>
        </tr>
        <tr>
            <td>array_intersect_uassoc()</td>
            <td>Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function)</td>
        </tr>
        <tr>
            <td>array_intersect_ukey()</td>
            <td>Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)</td>
        </tr>
        <tr>
            <td>array_key_exists()</td>
            <td>Checks if the specified key exists in the array</td>
        </tr>
        <tr>
            <td>array_keys()</td>
            <td>Returns all the keys of an array</td>
        </tr>
        <tr>
            <td>array_map()</td>
            <td>Sends each value of an array to a user-made function, which returns new values</td>
        </tr>
        <tr>
            <td>array_merge()</td>
            <td>Merges one or more arrays into one array</td>
        </tr>
        <tr>
            <td>array_merge_recursive()</td>
            <td>Merges one or more arrays into one array recursively</td>
        </tr>
        <tr>
            <td>array_multisort()</td>
            <td>Sorts multiple or multi-dimensional arrays</td>
        </tr>
        <tr>
            <td>array_pad()</td>
            <td>Inserts a specified number of items, with a specified value, to an array</td>
        </tr>
        <tr>
            <td>array_pop()</td>
            <td>Deletes the last element of an array</td>
        </tr>
        <tr>
            <td>array_product()</td>
            <td>Calculates the product of the values in an array</td>
        </tr>
        <tr>
            <td>array_push()</td>
            <td>Inserts one or more elements to the end of an array</td>
        </tr>
        <tr>
            <td>array_rand()</td>
            <td>Returns one or more random keys from an array</td>
        </tr>
        <tr>
            <td>array_reduce()</td>
            <td>Returns an array as a string, using a user-defined function</td>
        </tr>
        <tr>
            <td>array_replace()</td>
            <td>Replaces the values of the first array with the values from following arrays</td>
        </tr>
        <tr>
            <td>array_replace_recursive()</td>
            <td>Replaces the values of the first array with the values from following arrays recursively</td>
        </tr>
        <tr>
            <td>array_reverse()</td>
            <td>Returns an array in the reverse order</td>
        </tr>
        <tr>
            <td>array_search()</td>
            <td>Searches an array for a given value and returns the key</td>
        </tr>
        <tr>
            <td>array_shift()</td>
            <td>Removes the first element from an array, and returns the value of the removed element</td>
        </tr>
        <tr>
            <td>array_slice()</td>
            <td>Returns selected parts of an array</td>
        </tr>
        <tr>
            <td>array_splice()</td>
            <td>Removes and replaces specified elements of an array</td>
        </tr>
        <tr>
            <td>array_sum()</td>
            <td>Returns the sum of the values in an array</td>
        </tr>
        <tr>
            <td>array_udiff()</td>
            <td>Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)</td>
        </tr>
        <tr>
            <td>array_udiff_assoc()</td>
            <td>Compare arrays, and returns the differences (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)</td>
        </tr>
        <tr>
            <td>array_udiff_uassoc()</td>
            <td>Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)</td>
        </tr>
        <tr>
            <td>array_uintersect()</td>
            <td>Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function)</td>
        </tr>
        <tr>
            <td>array_uintersect_assoc()</td>
            <td>Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)</td>
        </tr>
        <tr>
            <td>array_uintersect_uassoc()</td>
            <td>Compare arrays, and returns the matches (compare keys and values, using two user-defined key comparison functions)</td>
        </tr>
        <tr>
            <td>array_unique()</td>
            <td>Removes duplicate values from an array</td>
        </tr>
        <tr>
            <td>array_unshift()</td>
            <td>Adds one or more elements to the beginning of an array</td>
        </tr>
        <tr>
            <td>array_values()</td>
            <td>Returns all the values of an array</td>
        </tr>
        <tr>
            <td>array_walk()</td>
            <td>Applies a user function to every member of an array</td>
        </tr>
        <tr>
            <td>array_walk_recursive()</td>
            <td>Applies a user function recursively to every member of an array</td>
        </tr>
        <tr>
            <td>arsort()</td>
            <td>Sorts an associative array in descending order, according to the value</td>
        </tr>
        <tr>
            <td>asort()</td>
            <td>Sorts an associative array in ascending order, according to the value</td>
        </tr>
        <tr>
            <td>compact()</td>
            <td>Create array containing variables and their values</td>
        </tr>
        <tr>
            <td>count()</td>
            <td>Returns the number of elements in an array</td>
        </tr>
        <tr>
            <td>current()</td>
            <td>Returns the current element in an array</td>
        </tr>
        <tr>
            <td>each()</td>
            <td><span class="deprecated">Deprecated from PHP 7.2.</span> Returns the current key and value pair from an array</td>
        </tr>
        <tr>
            <td>end()</td>
            <td>Sets the internal pointer of an array to its last element</td>
        </tr>
        <tr>
            <td>extract()</td>
            <td>Imports variables into the current symbol table from an array</td>
        </tr>
        <tr>
            <td>in_array()</td>
            <td>Checks if a specified value exists in an array</td>
        </tr>
        <tr>
            <td>key()</td>
            <td>Fetches a key from an array</td>
        </tr>
        <tr>
            <td>krsort()</td>
            <td>Sorts an associative array in descending order, according to the key</td>
        </tr>
        <tr>
            <td>ksort()</td>
            <td>Sorts an associative array in ascending order, according to the key</td>
        </tr>
        <tr>
            <td>list()</td>
            <td>Assigns variables as if they were an array</td>
        </tr>
        <tr>
            <td>natcasesort()</td>
            <td>Sorts an array using a case insensitive &quot;natural order&quot; algorithm</td>
        </tr>
        <tr>
            <td>natsort()</td>
            <td>Sorts an array using a &quot;natural order&quot; algorithm</td>
        </tr>
        <tr>
            <td>next()</td>
            <td>Advance the internal array pointer of an array</td>
        </tr>
        <tr>
            <td>pos()</td>
            <td>Alias of <a href="func_array_current.asp">current()</td>
        </tr>
        <tr>
            <td>prev()</td>
            <td>Rewinds the internal array pointer</td>
        </tr>
        <tr>
            <td>range()</td>
            <td>Creates an array containing a range of elements</td>
        </tr>
        <tr>
            <td>reset()</td>
            <td>Sets the internal pointer of an array to its first element</td>
        </tr>
        <tr>
            <td>rsort()</td>
            <td>Sorts an indexed array in descending order</td>
        </tr>
        <tr>
            <td>shuffle()</td>
            <td>Shuffles an array</td>
        </tr>
        <tr>
            <td>sizeof()</td>
            <td>Alias of <a href="func_array_count.asp">count()</td>
        </tr>
        <tr>
            <td>sort()</td>
            <td>Sorts an indexed array in ascending order</td>
        </tr>
        <tr>
            <td>uasort()</td>
            <td>Sorts an array by values using a user-defined comparison function and
                maintains the index association</td>
        </tr>
        <tr>
            <td>uksort()</td>
            <td>Sorts an array by keys using a user-defined comparison function</td>
        </tr>
        <tr>
            <td>usort()</td>
            <td>Sorts an array by values using a user-defined comparison function</td>
        </tr>
    </table>
</body>

</html>