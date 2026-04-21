  
  <?php


  foreach($customers as $customer){
            echo("<br>");
            echo("<strong>");
            echo("Customer:");
            
        foreach($customer as $key => $value){
                echo("<br>");
                echo("$key : $value ");
        }
            echo("</strong>");
            echo("<br>");
        }


        
    ?>