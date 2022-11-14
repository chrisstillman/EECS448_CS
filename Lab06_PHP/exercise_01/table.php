<?php
        for($row = 0; $row < 101; $row++) {
            echo "<tr>";
                for($col = 0; $col < 101; $col++)
                 {
                    echo "<td>";
                    if($row == 0) 
                    {
                        if($col != 0) 
                        {
                            echo $col;
                        }
                    } else if($col == 0) 
                    {
                        if($row != 0) 
                        {
                            echo $row;
                        }
                    } else {
                        echo $row*$col;
                    }
                    echo "</td>";
                }
            echo "</tr>";
        }

        error_reporting(E_ALL);
        ini_set("display_errors",1);
?>