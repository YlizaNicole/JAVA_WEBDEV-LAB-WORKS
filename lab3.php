<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'LAB3'; ?></title>
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
    </style>
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
                        define('LABTITLE', 'Laboratory Activity No. 2');
                        define('DESCRIPTION', 'Creating Basic PHP Script');
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
                    define('LABTITLE', 'Laboratory Activity No. 3');
                    define('DESCRIPTION', 'Working with Data Types and Operators');
                    $myinteger = 10;
                    $myfloat = 10.57;
                    $mystring = '10 apples';
                    $myboolean = true;
                    $mynull = null;
                    $myarray = array(1, 2, 3);

                    echo '<h2>', LABTITLE, '</h2>';
                    echo '<p>', DESCRIPTION, '</p>';

                    echo '<h3>1. PHP Data Types</h3>';
                    echo '<table>';
                    echo '<tr><td>1a. $myinteger</td><td>', var_dump($myinteger), '</td></tr>';
                    echo '<tr><td>1b. $myfloat</td><td>', var_dump($myfloat), '</td></tr>';
                    echo '<tr><td>1c. $mystring</td><td>', var_dump($mystring), '</td></tr>';
                    echo '<tr><td>1d. $myboolean</td><td>', var_dump($myboolean), '</td></tr>';
                    echo '<tr><td>1e. $mynull</td><td>', var_dump($mynull), '</td></tr>';
                    echo '<tr><td>1f. $myarray</td><td>', var_dump($myarray), '</td></tr>';
                    echo '</table>';

                    echo '<h3>2. PHP Arithmetic Operators</h3>';
                    echo '<table>';
                    echo '<tr><td>2a. $myinteger + 10</td><td>', $myinteger + 10, '</td></tr>';
                    echo '<tr><td>2b. $myinteger - 5</td><td>', $myinteger - 5, '</td></tr>';
                    echo '<tr><td>2c. $myinteger * 2</td><td>', $myinteger * 2, '</td></tr>';
                    echo '<tr><td>2d. $myinteger / 3</td><td>', $myinteger / 3, '</td></tr>';
                    echo '<tr><td>2e. $myboolean + 1</td><td>', $myboolean + 1, '</td></tr>';
                    echo '<tr><td>2f. $mystring * 2</td><td>', $mystring, '</td></tr>';
                    echo '</table>';

                    echo '<h3>3. PHP Bitwise Operators</h3>';
                    echo '<table>';
                    echo '<tr><td>3a. $myinteger & 8</td><td>', $myinteger & 8, '</td></tr>';
                    echo '<tr><td>3b. $myinteger | 8</td><td>', $myinteger | 8, '</td></tr>';
                    echo '<tr><td>3c. $myinteger << 1</td><td>', $myinteger << 1, '</td></tr>';
                    echo '<tr><td>3d. $myinteger >> 1</td><td>', $myinteger >> 1, '</td></tr>';
                    echo '</table>';

                    echo '<h3>4. PHP Comparison Operators</h3>';
                    echo '<table>';
                    echo '<tr><td>4a. $myinteger == 10</td><td>', $myinteger == 10, '</td></tr>';
                    echo '<tr><td>4b. $myinteger > 10</td><td>', $myinteger > 10, '</td></tr>';
                    echo '<tr><td>4c. $myinteger >= 10</td><td>', $myinteger >= 10, '</td></tr>';
                    echo '<tr><td>4d. $myinteger < 20</td><td>', $myinteger < 20, '</td></tr>';
                    echo '<tr><td>4e. $myinteger <= 20</td><td>', $myinteger <= 20, '</td></tr>';
                    echo '<tr><td>4f. $myinteger == $mystring</td><td>', $myinteger == $mystring, '</td></tr>';
                    echo '<tr><td>4g. $myinteger === $mystring</td><td>', $myinteger === $mystring, '</td></tr>';
                    echo '</table>';

                    echo '<h3>5. PHP Logical Operators</h3>';
                    echo '<table>';
                    echo '<tr><td>5a. $myinteger >= 10 and $myinteger <= 20</td><td>', $myinteger >= 10 && $myinteger <= 20, '</td></tr>';
                    echo '<tr><td>5b. $myinteger == 10 or $myinteger == 20</td><td>', $myinteger == 10 || $myinteger == 20, '</td></tr>';
                    echo '<tr><td>5c. $myinteger == 10 xor $myinteger == 20</td><td>', $myinteger == 10 xor $myinteger == 20, '</td></tr>';
                    echo '</table>';
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
