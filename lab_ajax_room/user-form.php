<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style2.css">
</head>
<body>
<!--====form section start====-->
<div>
<div class="user-detail">
<div class="alert alert-dark mb-4 mt-4  ">
    <div class="p2"><h2>เพิ่มข้อมูลห้องพัก</h2></div>
    <p id="msg"></p>
    <form id="userForm" method="POST">
          <label class="form-label">RoomName</label>
          <input type="text" class="form-control " placeholder="Enter Full Name" name="troomname" required><br>

          <label class="form-label">Detail</label>
          <textarea class="form-control " name="tdetail" rows="3" required></textarea><br>
          

          <label class="form-label">roomtypeid</label>
          <select  class="form-control " name="troomtype">
<?php
    include"database.php";
    $sql="SELECT * FROM tbroomtype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
    <option value="<?=$row->roomtypeid?>">
        <?=$row->roomtypename?></option>

<?PHP
    }
?>
 </select><br>

          <button type="submit"  name="bSubmitRoom" class="btn btn-warning">Submit</button>
    </form>
</div>

<h2 class="p1"><i class="fa-solid fa-house" style="color: #ec6565;"></i> ทดสอบดึงตารางมากกว่า 1 ตาราง</h2> 
<div class="content">
   <table class="table table-striped table=bordered">
        <thead>
        <th> ROOMNAME </th>
        <th> DETAIL </th>
        <th> ROOMTYPENAME</th>
        <th> PRICE </th>
        </thead>  
    <tbody>
<?php
    include"database.php";
    $sql="SELECT * FROM tbroom
        INNER JOIN tbroomtype
            ON tbroom.roomtypeid=tbroomtype.roomtypeid";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->roomname?></td>
            <td><?=$row->detail?></td>
            <td><?=$row->roomtypename?></td>
            <td><?=$row->price?></td>
            
        </tr>
<?php
    }
?>

        </tbody>
    </table>
</div>

<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
</body>
</html>