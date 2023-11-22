<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'LAB5'; ?></title>
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

                    $myinteger = 10;
                    $myfloat = 10.57;
                    $mystring = '10 apples';
                    $myboolean = true;
                    $mynull = null;
                    $myarray = array(1, 2, 3);

                    echo '<h2>', LABTITLE, '</h2>';
                    echo '<p>', DESCRIPTION, '</p>';

                    echo '<style>
                    table {
                        border-collapse: collapse;
                        margin: 20px auto;
                    }
                
                    td {
                        width: 30px;
                        height: 30px;
                        text-align: center;
                        vertical-align: middle;
                        border: 1px solid #000;
                        font-weight: bold;
                    }
                
                    .even {
                        background-color: #fff; /* White for even rows */
                    }
                
                    .odd {
                        background-color: #fff; /* White for odd rows */
                    }
                
                    .diagonal {
                        background-color: #ddd; /* Gray for diagonals */
                    }
                    </style>';
                
                echo '<form action="" method="post">';
                echo '<table cellpadding=4 border=1 style="border-collapse:collapse">';
                echo '<tr><td align="center"><strong>Magic Square</strong></td></tr>';
                echo '<tr><td>Enter an odd number &nbsp;<input type=text name=number>&nbsp;';
                echo '<input type="submit" value="Generate Magic Square"></td></tr>';
                echo '</table>';
                echo '</form>';

                
                
                if (count($_POST) > 0) {
                    $number = (int)(isset($_POST['number']) ? $_POST['number'] : 3);
                    print_magicsquare($number);
                }
                
                function print_magicsquare($number) {
                    // a. If N is below 1, set the value to 3 (default size)
                    if ($number < 1) {
                        $number = 3;
                    }
                    // b. If N is an even number, increment it by 1 to make it EVEN.
                    if ($number % 2 === 0) {
                        $number++;
                    }
                
                    // c. Initialize a two-dimensional array MATRIX of size N by N and set all the elements to ZERO.
                    $matrix = array_fill(0, $number, array_fill(0, $number, 0));
                
                    // d. Put the first number in the middle column of the top row.
                    $matrix[0][floor($number / 2)] = 1;
                
                    // e. Place the next numbers in the box following the specified rules.
                    for ($i = 2, $r = 0, $c = floor($number / 2); $i <= $number * $number; $i++) {
                        $r = ($r - 1 + $number) % $number;
                        $c = ($c - 1 + $number) % $number;
                
                        // If the cell is already occupied, place it one row below the last number.
                        while ($matrix[$r][$c] !== 0) {
                            $r = ($r + 1) % $number;
                        }
                
                        $matrix[$r][$c] = $i;
                    }
                
                    // f. Print the MATRIX/ARRAY using html <table>.
                    echo '<table border=1>';
                    for ($r = 0; $r < $number; $r++) {
                        echo '<tr>';
                        for ($c = 0; $c < $number; $c++) {
                            $class = ($r % 2 === 0 ? 'even' : 'odd');
                            // Apply a different class for diagonal cells
                            if ($r == $c || $r + $c == $number - 1) {
                                $class = 'diagonal';
                            }
                            echo '<td class="' . $class . '">' . $matrix[$r][$c] . '</td>';
                        }
                        echo '</tr>';
                    }
                    echo '</table>';
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
