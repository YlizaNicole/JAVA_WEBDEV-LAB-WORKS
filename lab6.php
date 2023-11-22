<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'LAB6'; ?></title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header, footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
    background-color: none;
    color: #fff;
    padding: 50px;
    text-align: center;
}

        nav a {
            text-decoration: none;
        color: black;
        transition: color 0.3s, background-color 0.3s;
        display: inline-block;
        padding: 10px 20px;
        border: 1px solid #000; 
        border-radius: 5px; }

        nav a:hover {
            color: white;
            background-color: green;
            border-radius: 5%;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline; 
            margin-right: 10px;
        }

        nav ul li a {
            display: block; 
            margin: 0; 

                #content {
                    padding: 40px;
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 20px;
                }

                table, th, td {
                    border: 0.5px solid #333;
                }

                th, td {
                    padding: 10px;
                    text-align: left;
                }
    </style>
</head>

<body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">

        <tr>
            <td colspan="2">
                <header>
                    <?php
                    define('NAME', 'YLIZA NICOLE R. SALAZAR');
                    define('STUDENT_NUMBER', '2021-08140-MN-0');
                    define('ADDRESS', 'Maui Oasis, Sta mesa');
                    define('EMAILADDRESS', 'ylizanicolersalazar@iskolarngbayan.pup.edu.ph');
                    define('CONTACTNUMBER', '09457297760');
                    define('LABTITLE', 'Laboratory Activity No. 5');
                    define('DESCRIPTION', 'String Functions in PHP');
                    ?>
                    <p><?php echo NAME; ?></p>
                    <p><?php echo STUDENT_NUMBER; ?></p>
                    <p><?php echo ADDRESS; ?></p>
                    <p><?php echo EMAILADDRESS; ?></p>
                    <p><?php echo CONTACTNUMBER; ?></p>
                </header>
            </td>
        </tr>

        <tr>
            <td width="25%" valign="top">
                <nav>
                    <ul>
                        <li><a href="lab1.php">Hello World</a></li>
                        <li><a href="lab2.php">Creating Basic PHP Script</a></li>
                        <li><a href="lab3.php">Working with Data Types and Operators</a></li>
                        <li><a href="lab4.php">Functions and Control Structures – Number to Words</a></li>
                        <li><a href="lab5.php">Functions and Control Structures – Magic Square</a></li>
                        <li><a href="lab6.php">String Functions in PHP</a></li>
                    </ul>
                </nav>
            </td>
            <td>
                <div id="content">
                    <?php

                    echo '<h2>', LABTITLE, '</h2>';
                    echo '<p>', DESCRIPTION, '</p>';

                    $string = isset($_POST['string']) ? $_POST['string'] : ' ';

                    echo '<form method=post action="">';
                    echo '<h1>String Functions in PHP</h2>',htmlspecialchars($string);
                    echo '<input type="text" name="string" value="', htmlspecialchars($string), '" size=100><br /><br />';
                    echo '<input type="submit" value="Apply Functions">&nbsp;';
                    echo '<input type="reset" value="Reset" form=""><br />';
                    echo '<br />';
                    echo '</form>';
                    
                    if (!empty($string)) {
                        echo '<h2>String Functions Results</h2>';
                        echo '<table border="1">';
                    
                        echo '<tr><td>1.</td><td>Original Value</td>';
                        echo '<td> ', htmlspecialchars($string), ' </td></tr>';
                    
                        echo '<tr><td>2.</td><td>Number of characters</td>';
                        echo '<td> ', htmlspecialchars(strlen($string)), ' </td></tr>';
                    
                        $words = str_word_count($string, 1);
                        echo '<tr><td>3.</td><td>Number of words</td>';
                        echo '<td> ', htmlspecialchars(count($words)), ' </td></tr>';
                    
                        echo '<tr><td>4.</td><td>First character to Uppercase</td>';
                        echo '<td> ', htmlspecialchars(ucfirst($string)), ' </td></tr>';
                    
                        $ucWords = array_map('ucfirst', $words);
                        echo '<tr><td>5.</td><td>First character of each word to Uppercase</td>';
                        echo '<td> ', htmlspecialchars(implode(' ', $ucWords)), ' </td></tr>';
                    
                        echo '<tr><td>6.</td><td>To Lowercase</td>';
                        echo '<td> ', htmlspecialchars(strtolower($string)), ' </td></tr>';
                    
                        echo '<tr><td>7.</td><td>To Uppercase</td>';
                        echo '<td> ', htmlspecialchars(strtoupper($string)), ' </td></tr>';
                    
                        echo '<tr><td>8.</td><td>Without leading spaces</td>';
                        echo '<td> ', htmlspecialchars(ltrim($string)), ' </td></tr>';
                    
                        echo '<tr><td>9.</td><td>Without Trailing spaces</td>';
                        echo '<td> ', htmlspecialchars(rtrim($string)), ' </td></tr>';
                    
                        echo '<tr><td>10.</td><td>Without Leading and Trailing spaces</td>';
                        echo '<td> ', htmlspecialchars(trim($string)), ' </td></tr>';
                    
                        echo '<tr><td>11.</td><td>MD5 value</td>';
                        $lowercaseString = strtolower($string);
                        $md5Value = md5($lowercaseString);
                        echo '<td> ', htmlspecialchars($md5Value), ' </td></tr>';
                    

                        echo '<tr><td>12.</td><td>Base64 value</td>';
                        echo '<td> ', htmlspecialchars(base64_encode($string)), ' </td></tr>';
                    
                        echo '<tr><td>13.</td><td>First 16 Characters</td>';
                        echo '<td> ', htmlspecialchars(substr($string, 0, 16)), ' </td></tr>';
                    
                        echo '<tr><td>14.</td><td>Last 4 Characters</td>';
                        echo '<td> ', htmlspecialchars(substr($string, -4)), ' </td></tr>';
                    
                        echo '<tr><td>15.</td><td>4 Characters starting from the 20th Position</td>';
                        echo '<td> ', htmlspecialchars(substr($string, 20, 4)), ' </td></tr>';

                        echo '<tr><td>16.</td><td>Position of the word \'guide\'</td>';
                        $positionGuide = stripos($string, 'guide');
                        $positionGuideOutput = ($positionGuide !== false) ? $positionGuide : 'Not found';
                        echo '<td>  int (', htmlspecialchars($positionGuideOutput),   ') </td></tr>';

                        echo '<tr><td>17.</td><td>Position of the word \'UE\'</td>';
                        $positionUE = stripos($string, 'UE');
                        $positionOutput = ($positionUE !== false) ? $positionUE : 'bool(false)';
                        echo '<td> ', htmlspecialchars($positionOutput), ' </td></tr>';

                        $lowercaseString = strtolower($string);
                        $modifiedString = str_replace('html', 'HTML', $lowercaseString);
                        echo '<tr><td>18.</td><td>"HTML" word in Uppercase</td>';
                        echo '<td> ', htmlspecialchars($modifiedString), ' </td></tr>';

                        echo '<tr><td>19.</td><td>"&lt;INPUT&gt", word in Uppercase</td>';
                        echo '<td> ', htmlspecialchars(str_replace('<input>', '<INPUT>',  $string,)), ' </td></tr>';
                    
                        echo '<tr><td>20.</td><td>Strings converted to array</td>';
                        echo '<td> ', '<pre>', htmlspecialchars(var_export($words, true)), '</pre>', ' </td></tr>';
                    
                        echo '</table>';
                    } else {
                        echo '<p>Please enter a string to apply string functions.</p>';
                    }

                    ?>
                    
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <footer>
                    <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
                </footer>
            </td>
        </tr>
    </table>
</body>
</html>
