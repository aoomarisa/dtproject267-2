<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css>
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css>
<h2 class="p1">
<h2 class="p1"><i class="fa-solid fa-house" style="color: #ec6565;"></i> การดึงข้อมูลจากตารางมากกว่า 1 ตาราง (join table)</h2> 
<div class="content">
    xxxxxxxxxxxxx
</div>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css>

<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css>
<h2 class="p1">

<h2 class="p1"><i class="fa-solid fa-house" style="color: #ec6565;"></i> ทดสอบดึงตาราง tbroom </h2> 
<div class="content">
   <table class="table table-striped">
        <thead>
        <th> ROOMID </th>
        <th> ROOMNAME</th>
        <th> DETAIL </th>
        <th> ROOMTYPEID </th>
        </thead>  
    <tbody>
<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbroom";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->roomid?></td>
            <td><?=$row->roomname?></td>
            <td><?=$row->detail?></td>
            <td><?=$row->roomtypeid?></td>
        </tr>
<?php
    }
?>

    </tbody>
    </table>
<div>
    <a href="lab2-4.php">
        <button class="btn btn-primary">
            <i class="fa-solid fa-plus"></i> ADD ROOM 
        </button>
    </a></div>
</div>

<h2 class="p1"><i class="fa-solid fa-house" style="color: #ec6565;"></i> ทดสอบดึงตาราง tbroomtypeid </h2> 
<div class="content">
   <table class="table table-striped table=bordered">
        <thead>
        <th> ROOMTYPEID </th>
        <th> ROOMTYPENAME</th>
        <th> PRICE </th>
        </thead>  
    <tbody>
<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbroomtype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->roomtypeid?></td>
            <td><?=$row->roomtypename?></td>
            <td><?=$row->price?></td>
        
        </tr>
<?php
    }
?>

    </tbody>
    </table>
</div>

<h2 class="p1"><i class="fa-solid fa-house" style="color: #ec6565;"></i> ทดสอบดึงตารางมากกว่า 1 ตาราง</h2> 
<div class="content">
   <table class="table table-striped table=bordered">
        <thead>
        <th> ROOMNAME </th>
        <th> ROOMTYPENAME</th>
        <th> PRICE </th>
        </thead>  
    <tbody>
<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbroom
        INNER JOIN tbroomtype
            ON tbroom.roomtypeid=tbroomtype.roomtypeid";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->roomname?></td>
            <td><?=$row->roomtypename?></td>
            <td><?=$row->price?></td>
        </tr>
<?php
    }
?>

        </tbody>
    </table>
</div>


<h2 class="p1"><i class="fa-solid fa-house" style="color: #ec6565;"></i> รายละเอียดหนังสือ </h2> 
<div class="content">
   <table class="table table-striped table=bordered">
        <thead>
        <th> BOOKNAME </th>
        <th> AUTHER</th>
        <th> PRICE </th>
        <th> STOCK</th>
        <th> BOOKTYPEID</th>
        </thead>  
    <tbody>
<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbbook
        INNER JOIN tbbooktype
            ON tbbook.booktypeid=tbbooktype.booktypeid";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->bookname?></td>
            <td><?=$row->auther?></td>
            <td><?=$row->price?></td>
            <td><?=$row->stock?></td>
            <td><?=$row->booktypeid?></td>
        </tr>
<?php
    }
?>
    
        </tbody>
        
    </table><div>
    <a href="lab3-1.php">
        <button class="btn btn-primary">
            <i class="fa-solid fa-plus"></i> ADD BOOK 
        </button>
    </a></div>
</div>


