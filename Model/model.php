
<?php
       function get_data() {
        include "connection.php";
       $query = "SELECT * FROM student";
       $result = mysqli_query($connection, $query);
       $rows = [];
       if($result && mysqli_num_rows($result) > 0) {
           foreach($result as $record) {
               $rows[] = $record;
           }
        return $rows;
       }
    }
?>