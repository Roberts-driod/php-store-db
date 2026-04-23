  <?php

foreach($customers as $customer){
echo "Id: " . $customer->Id . "<br>";
echo "Name: " . $customer->firstname . "<br>";
echo "Surname: " . $customer->surname . "<br>";
echo "Email: " . $customer->email . "<br>";
echo "Points: " . $customer->points . "<br>";
echo("<br>");
}

    ?>