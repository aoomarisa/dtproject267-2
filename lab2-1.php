<?php
    $name='สมชาย';
    $age=30;
    $career='รับจ้างทั่วไป';

    echo "ชื่อ : ".$name."<br>";
    echo "อายุ : ".$age."<br>";
    echo "อาชีพ : ".$career."<br>";
    echo"<hr>";

    echo "ชื่อ : ".$name."<br>อายุ : ".$age."<br> อาชีพ : ".$career."<br>";
    echo"<hr>";
    echo 'ชื่อ : '.$name.'<br>อายุ : '.$age.'<br> อาชีพ : '.$career.'<br>';
    echo"<hr>";

    echo"อายุ: {$age}$";
    echo"<hr>";

    echo"<h3>ตัวอยางการใช้งาน operator</h3>";
    $num1=10;
    $num2=20;
    $sum=$num1+$num2;
    echo"ผลรวมเท่ากับ : ".$sum;
    $sum+=2; //มีความเท่ากับ sum=sum+2
    echo "&nbsp;"."ผลรวมเท่ากับ :".$sum;
    echo"<hr>";
    $count=1;
    $count++;
    $count+=2;
    $count*=2;
    echo $count;
    echo"<hr>";

    echo"<h3>เงื่นไขแบบ thernary</h3>";
    $x=30;
    $b = ($x %2 == 0) ? 'เลขคู่' : 'เลขคี่';
    echo "ผลลัพธ์คือ : ".$b;
    echo"<hr>";

    //การเช็คค่าว่าง
    $user = 'user1';
    $password = '4399';
    $msg = ($user=='' || $password=='')? 'กรุณากรอกข้อูล':'ขอบคุณ';
    echo $msg;
    echo"<hr>";

    $user = 'user1';
    $password = '4399';
    if(empty($user)||empty($password)){
        $msg="กรุณากรอกข้อมูล";
    }else{
        $msg="ขอบคุณ";
    }
    echo $msg;

    //การเช็คstatus
    echo"<hr>";
    echo"<h3>การใช้งาน if-else </h3>";
    $status="admin";
    if($status=="admin"){
        echo"i am admin";
    }elseif($status=="member"){
        echo"i am member";
    }elseif($status=="manager"){
        echo"i am manager";
    }else{
        echo"invalid user status";
    }
    
    echo"<hr>";
    echo"<h3> การใช้เครื่องหมายเปรียบเทียบ </h3>";
    $pw1 = 123;
    $pw1 = 456;
    if($pw1 != $pw2){
        echo"รหัสผ่านไม่ตรงกัน";
    }else{
        echo"รหัสผ่านตรงกัน";
    }
?>