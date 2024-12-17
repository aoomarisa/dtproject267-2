<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css>

<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css>
<h2 class="p1">

<h2 class="p1">เพิ่มข้อมูลห้องพัก</h2> 
    <i class="fasodlid fa-list"></i> ROOMNAME</h2>
<div class="content">  
<form action="action.php" method=post>
<div class="mb-3">
  <label for="exampleFormControlInput1"class="form-label"ROOMNAME></label>
  <input type="text" class="form-control" name="troomname"placeholder="ระบุห้อง...">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">DETAIL</label>
  <textarea class="form-control" name="tdetail" rows="3"></textarea>
</div>

  <label for="exampleFormControlInput1"class="form-label"ROOMTYPE></label>
  <SELECT class = "form-control" name="troomtype">
<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbroomtype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
    <option value="<?=$row->roomtypeid?>">
        <?=$row->roomtypename?></option>
<?php
    }
?>
    </select>
    <br>
        <div><input type="submit" name="bSubmitRoom" class="btn btn-dark" value="บันทึกข้อมูล"></div>
        <div class="mb-3">
    </div>
</form>
</div>    
