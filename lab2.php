<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'LAB2'; ?></title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin-top: 10px;
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
                    $school = 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES';
                    $course = 'BACHELOR OF SCIENCE IN COMPUTER ENGINEERING';
                    $yearlevel = '3-6';
                    $dateofbirth = '02/03/2003';
                    $gender = 'FEMALE';
                    echo '<table width="95%" border=1 style="border-collapse: collapse;">';
                    echo '<tr><td colspan=2><strong>My Academic Information</strong></td></tr>';
                    echo '<tr><td>School</td><td>', $school, '</td></tr>';
                    echo '<tr><td>Course</td><td>', $course, '</td></tr>';
                    echo '<tr><td>Year Level</td><td>', $yearlevel, '</td></tr>';
                    echo '<tr><td>Date of Birth</td><td>', $dateofbirth, '</td></tr>';
                    echo '<tr><td>Sex</td><td>', $gender, '</td></tr>';
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
