<?php

require("db.php");
require("date.php");
require("../urls/stats.php");

$sql="CREATE TABLE users(
id INT(6) AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
passwd VARCHAR(100) NOT NULL,
delete_status varchar(200),
date_created TIMESTAMP

)";

if (mysqli_query($conn, $sql)) {
    echo "Table Users created successfully <br>";
} else {
    echo "<br> Error creating table: " . mysqli_error($conn);
}

$check=mysqli_query($conn, "SELECT *FROM users where email = 'albertagoya@gmail.com'");
if(mysqli_num_rows($check)){
    echo "<br>Super user already exists ";
    
}

else{

    $super_user=mysqli_query($conn,"INSERT INTO `users` VALUES(DEFAULT,'Albert Agoya' ,'albertagoya@gmail.com','dan@1995','0',NOW())");
    if($super_user){
        echo "<br> Super user albertagoya@gmail.com has been created";
    
    }
    
    else{
        echo mysqli_error($conn);
    }
}




$sql2="CREATE TABLE student(
    id INT(100) AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    gender VARCHAR(100) NOT NULL,
    dob VARCHAR(100) NOT NULL,
    birth_certificate varchar(200),
    class varchar(200),
    date_admitted varchar(200),
    parent_name varchar(200),
    parent_relationship varchar(200),
    phone varchar(200),
    delete_status varchar(200),
    date_updated TIMESTAMP,
    current_class VARCHAR(200)
    
    )ENGINE= innoDB AUTO_INCREMENT =2001 DEFAULT CHARSET =latin1";
    
    if (mysqli_query($conn, $sql2)) {
        echo "<br> Table Students created successfully <br>";
    } else {
        echo "<br> Error creating table: " . mysqli_error($conn);
    }
    

    $sql3="CREATE TABLE deleted_students(
        id INT(6) NOT NULL,
        reason VARCHAR(100) NOT NULL,
        date_deleted TIMESTAMP,
        FOREIGN KEY (id) REFERENCES student(id)
        
        )";
        
        if (mysqli_query($conn, $sql3)) {
            echo "<br> Table Deleted Students created successfully <br>";
        } else {
            echo "<br> Error creating table: " . mysqli_error($conn);
        }
        
  


        $sql4="CREATE TABLE setting(
            
            title VARCHAR(100) NOT NULL,
            setting_text VARCHAR(100) NOT NULL
            
            )";
            
            if (mysqli_query($conn, $sql4)) {
                echo " <br >Table setting created successfully <br>";
            } else {
                echo "<br> Error creating table: " . mysqli_error($conn);
            }

            $check_user = mysqli_query($conn, "SELECT *FROM `setting`");
            if(mysqli_num_rows($check_user)>0){
                echo " <br> Only one record is allowed in settings";
               
            }

           else{
            $add_setting=mysqli_query($conn,"INSERT INTO `setting` VALUES('School name','Test School')");
            if($add_setting){
                echo "<br> School created";
            
            }
            
            else{
                echo "<br>". mysqli_error($conn);
            }
           }


            $sql5="CREATE TABLE tally(
                id INT(6) AUTO_INCREMENT PRIMARY KEY,
                today_date VARCHAR(100) NOT NULL,
                closing_number VARCHAR(100) NOT NULL
                
                )";

if (mysqli_query($conn, $sql5)) {
    echo "Table Tally created successfully <br>";
} else {
    echo "<br> Error creating table: " . mysqli_error($conn);
}

                
            $check_tt = mysqli_query($conn, "SELECT *FROM `tally`");
            if(mysqli_num_rows($check_tt)>0){
                echo " <br> Only one record is allowed in tally table";
                
            }

            else{
                
            $add_tally=mysqli_query($conn,"INSERT INTO `tally` VALUES(DEFAULT,'$today','$students_nums')");
            if($add_tally){
                echo "<br> Tally 1 created";
            
            }

            else{
                echo "<br> Tally 1 NOT created"; 
            }
            }
                

            $sql6="CREATE TABLE fees(
                receipt_no INT(100) NOT NULL,
                student_reg INT(100),
                current_class VARCHAR(100),
                term VARCHAR(100),
                fee_amount INT(100), 
                date_updated TIMESTAMP,
                FOREIGN KEY(student_reg) REFERENCES student(id)
                
                )ENGINE= innoDB AUTO_INCREMENT =2001 DEFAULT CHARSET =latin1";
                
                if (mysqli_query($conn, $sql6)) {
                    echo "<br> Table fees created successfully <br>";
                } else {
                    echo "<br> Error creating table: " . mysqli_error($conn);
                }
                


            
?>