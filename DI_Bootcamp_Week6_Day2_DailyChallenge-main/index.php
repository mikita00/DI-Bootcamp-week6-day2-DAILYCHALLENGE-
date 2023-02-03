<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>DailyChallenge</title>
  </head>
  <body>
      <h2 style="color:red; font-weight:bold; text-decoration:underline;"> DailyChallenge</h2>

      <h3 style="text-align:center; margin-top: 30px;" >Checkerboard Making</h3>

      
     <?php
    /*
     Write a PHP program using nested for loop that creates a chess board.
     Conditions:
     You can use html table having width=”400px” and take “30px” as cell height and width for check boxes.
     
   */
     ?>
     <table class="board_table">

     <?php
     
     // Nested for loop
     for ($i = 1; $i <= 8; $i++){
         // The first for loop will be used for creation the table's rows
        echo "<tr>";

        // As for the second, it will be used for the columns
        for($j = 1; $j <= 8; $j++){ 

            // if statement for making difference between cololums

            if (($i + $j) % 2 == 0){

                // That instruction is accompleted when the additional position of the column and the row is an even number
                echo "<td class='white_card'></td>"; 
                 
            }else{
                // That instruction is accompleted when column's additional position in the row is an odd number
               echo "<td class='black_card'></td>";
            }
        }
        echo "</tr>";
    }

    ?>


     </table>
     
  </body>
</html>