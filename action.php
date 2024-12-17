<?php
    include"dbcon.php";
    if(isset($_REQUEST['bSubmitStudent'])){
        $fristname=$_REQUEST['tfristname'];
        $lastname=$_REQUEST['tlastname'];
        $email=$_REQUEST['temail'];
        $address=$_REQUEST['taddress'];

        echo $fristname.$lastname.$email.$address;
        $sql="INSERT INTO tbstudent
            VALUE(null,'$fristname','$lastname','$email','$address')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh'
                        CONTENT='3; URL=lab2-2.php'>";

    }elseif(isset($_REQUEST['bSubmitRoom'])){
        $roomname=$_REQUEST['troomname'];
        $detail=$_REQUEST['tdetail'];
        $roomtype=$_REQUEST['troomtype'];
        echo $roomname."<br>".$detail."<br>".$roomtype;
        $sql="INSERT INTO tbroom
            VALUE(null,'$roomname','$detail','$roomtype')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh'
                        CONTENT='1; URL=lab2-4.php'>";
    } elseif(isset($_REQUEST['bSubmitBook'])){
        $bookname=$_REQUEST['tbookname'];
        $auther=$_REQUEST['tauther'];
        $price=$_REQUEST['tprice'];
        $stock=$_REQUEST['tstock'];
        $booktype=$_REQUEST['tbooktype'];
        
        $sql="INSERT INTO tbbook VALUE(null,'$bookname','$auther','$price','$stock','$booktype')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh' CONTENT='1; URL=lab3-1.php'>";
    } elseif(isset($_REQUEST['bSubmitBooktype'])){
        $booktypeid=$_REQUEST['tbooktype'];
        $sql="INSERT INTO tbbooktype
            VALUE(null,'$booktypeid')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh' CONTENT='2; URL=lab3-2.php'>";

    }elseif(isset($_REQUEST['Submituser'])){
        $firstname=$_REQUEST['tfirstname'];
        $lastname=$_REQUEST['tlastname'];
        $username=$_REQUEST['tusername'];
        $password=$_REQUEST['tpassword'];
        $hashValue=md5($password);
        echo "บันทึกข้อมูลเสร็จสิ้น";
        $sql="INSERT INTO tbuser
            VALUE(null,' $firstname','$lastname','$username','$hashValue')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh' CONTENT='2; URL=lab_function/lab_fromlogin.php'>";

    }elseif(isset($_REQUEST['bLogin'])){
        $username=$_REQUEST['tusername'];
        $password=$_REQUEST['tpassword'];
        $hashValue=md5($password);
        $sql="SELECT * FROM tbuser
           WHERE username= '$username' and password='$hashValue' ";
        $query=$conn->query($sql);
        $rs=$query->fetch_object();
        $numrows=$query->num_rows;
        if($numrows>0){
            echo "ล็อคอินสำเร็จ";
        }else{
            echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        }
        echo "<META HTTP-EQUIV='refresh' CONTENT='2; URL=lab_function/lab_fromlogin.php'>";


}
?>
