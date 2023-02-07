<?php
//เซื่อมต่อฐานข้อมูล
require('dbconnect.php');
//รับค่าข้อมูล
$Access_Code=$_POST["Access_Code"];
$First_name=$_POST["First_Name"];
$Surname=$_POST["Surname"];
$Company_name=$_POST["Company_name"];
$Date_birth=$_POST["Date_birth"];
$number_name=$_POST["number_name"];
$Suburb_town=$_POST["Suburb_town"];
$Status=$_POST["Status"];
$Postcode=$_POST["Postcode"];
$Contact_phone=$_POST["Contact_phone"];
$Mobile_phone=$_POST["Mobile_phone"];
$Email_address=$_POST["Email_address"];
$User_signature=$_POST["User_signature"];
$Date=$_POST["Date"];




//บันทึกข้อมูล
$sql="INSERT INTO septup_bankk (Access_Code,First_Name,Surname,Company_name,Date_birth,number_name,Suburb_town,Status,Postcode,Contact_phone,Mobile_phone,Email_address,User_signature,Date) VALUE('$Access_Code','$First_Name','$Surname','$Company_name','$Date_birth','$number_name','$Suburb_town','$Status','$Postcode','$Contact_phone','$Mobile_phone','$Email_address','$User_signature','$Date')";
//รับคำสั่ง
$result= mysqli_query($con,$sql);

if($result){
    header("location:dbindex.html");
    exit(0);
}else{
    echo mysqli_error($con);
}