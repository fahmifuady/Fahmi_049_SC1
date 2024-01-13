<!DOCTYPE html>
<html>

<body>


    <?php
    $str = "Visit W3Schools";
    $pattern = "/w3schools/i";
    echo preg_match($pattern, $str);
    ?>


    <h2>Regular Expression Functions</h2>
    <p>PHP provides a variety of functions that allow you to use regular expressions.</p>

    <p>The most common functions are:</p>

    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:20%">Function</th>
            <th style="width:80%">Description</th>
        </tr>
        <tr>
            <td>preg_match()</td>
            <td>Returns 1 if the pattern was found in the string and 0 if not</td>
        </tr>
        <tr>
            <td>preg_match_all()</td>
            <td>Returns the number of times the pattern was found in the string, which may also be 0</td>
        </tr>
        <tr>
            <td>preg_replace()</td>
            <td>Returns a new string where matched patterns have been replaced with another string</td>
        </tr>
    </table>
    <hr>
    <h2>Regular Expression Modifiers</h2>
    <p>Modifiers can change how a search is performed.</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:22%">Modifier</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>i</td>
            <td>Performs a case-insensitive search</td>
        </tr>
        <tr>
            <td>m</td>
            <td>Performs a multiline search (patterns that search for the
                beginning or end of a string will match the beginning or end
                of each line)</td>
        </tr>
        <tr>
            <td>u</td>
            <td>Enables correct matching of UTF-8 encoded patterns</td>
        </tr>
    </table>
    <hr>

    <h2>Regular Expression Patterns</h2>
    <p>Brackets are used to find a range of characters:</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:22%">Expression</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>[abc]</td>
            <td>Find one character from the options between the brackets</td>
        </tr>
        <tr>
            <td>[^abc]</td>
            <td>Find any character NOT between the brackets</td>
        </tr>
        <tr>
            <td>[0-9]</td>
            <td>Find one character from the range 0 to 9</td>
        </tr>
    </table>

    <h2>Metacharacters</h2>
    <p>Metacharacters are characters with a special meaning:</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:22%">Metacharacter</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>|</td>
            <td>Find a match for any one of the patterns separated by | as in: cat|dog|fish</td>
        </tr>
        <tr>
            <td>.</td>
            <td>Find just one instance of any character</td>
        </tr>
        <tr>
            <td>^</td>
            <td>Finds a match as the beginning of a string as in: ^Hello</td>
        </tr>
        <tr>
            <td>$</td>
            <td>Finds a match at the end of the string as in: World$</td>
        </tr>
        <tr>
            <td>\d</td>
            <td>Find a digit</td>
        </tr>
        <tr>
            <td>\s</td>
            <td>Find a whitespace character</td>
        </tr>
        <tr>
            <td>\b</td>
            <td>Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b</td>
        </tr>
        <tr>
            <td>\uxxxx</td>
            <td>Find the Unicode character specified by the hexadecimal number xxxx</td>
        </tr>
    </table>

    <h2>Quantifiers</h2>
    <p>Quantifiers define quantities:</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:22%">Quantifier</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>n+</td>
            <td>Matches any string that contains at least one <em>n</em></td>
        </tr>
        <tr>
            <td>n*</td>
            <td>Matches any string that contains zero or more occurrences of <em>n</em></td>
        </tr>
        <tr>
            <td>n?</td>
            <td>Matches any string that contains zero or one occurrences of <em>n</em></td>
        </tr>
        <tr>
            <td>n{x}</td>
            <td>Matches any string that contains a sequence of <i>X</i> <i>n</i>'s</td>
        </tr>
        <tr>
            <td>n{x,y}</td>
            <td>Matches any string that contains a sequence of X to Y <i>n</i>'s</td>
        </tr>
        <tr>
            <td>n{x,}</td>
            <td>Matches any string that contains a sequence of at least X <i>n</i>'s</td>
        </tr>
    </table>

    <div class="w3-note w3-panel">
        <p><strong>Note:</strong> If your expression needs to search for one of the special characters you can use a
            backslash ( \ ) to escape them.
            For example, to search for one or more question marks you can use the following
            expression: $pattern = '/\?+/';</p>
    </div>
    <hr>
</body>

</html>