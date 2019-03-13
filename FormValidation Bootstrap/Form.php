<?php
/**
 * Created by PhpStorm.
 * User: DIU
 * Date: 3/12/2019
 * Time: 12:42 PM
 */

class Form
{
function validate($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}

    }

echo "Name is: " . $name . "<br/>";
echo "Email is: " . $email . "<br/>";
echo "Website is: " . $website . "<br/>";
echo "Comment is: " . $comment . "<br/>";
echo "Gender is: " . $gender . "<br/>";

