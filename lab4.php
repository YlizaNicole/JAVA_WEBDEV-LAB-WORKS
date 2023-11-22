<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'LAB4'; ?></title>
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
                        define('LABTITLE', 'Laboratory Activity No. 4');
                        define('DESCRIPTION', 'Functions and Control Structures – Number to Words');
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



                    $number = (int)(isset($_POST['number']) ? $_POST['number'] : 0);

                    if (($number < 1) or ($number > 999)) {
                        if (count($_POST) > 0) {
                            $words = 'Sorry, I can process 1 to 999 only!';
                        } else {
                            $words = '&nbsp;';
                        }
                    } else {
                        $words = $number . ' in words is ' . NumberToWords($number);
                    }

                    echo '<form action="" method="post">';
                    echo '<table cellpadding=4 border=1 style="border-collapse:collapse">';
                    echo '<tr><td align="center"><strong>Number to Words</strong></td></tr>';
                    echo '<tr><td>Enter a number (1-999)&nbsp;<input type=text name=number>&nbsp;';
                    echo '<input type="submit" value="Convert to words"></td></tr>';
                    echo '<tr><td align="center"><strong>', $words, '</strong></td></tr>';
                    echo '</table>';
                    echo '</form>';

                    function NumberToWords($number) {
                        $words = '';

                        $units = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];
                        $teens = ['Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];
                        $tens = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
                        $hundreds = 'Hundred';

                        $hundredsDigit = floor($number / 100);
                        $tensDigit = floor(($number % 100) / 10);
                        $onesDigit = $number % 10;

                        if ($hundredsDigit > 0) {
                            $words .= $units[$hundredsDigit] . ' ' . $hundreds . ' ';
                        }

                        if ($tensDigit > 1) {
                            $words .= $tens[$tensDigit] . ' ';
                            if ($onesDigit > 0) {
                                $words .= $units[$onesDigit] . ' ';
                            }
                        } elseif ($tensDigit == 1) {
                            $words .= $teens[$onesDigit] . ' ';
                        } else {
                            if ($onesDigit > 0) {
                                $words .= $units[$onesDigit] . ' ';
                            }
                        }

                        return trim($words);
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
