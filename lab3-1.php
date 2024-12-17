<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css>
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css>
<h2 class="p1">

<div class="container"><h2 class="p1"><i class="fa-solid fa-book"></i> เพิ่มข้อมูลหนังสือ </h2></div>
<form action="action.php" method=post>
<div class="container">
<div class="album py*5 bg-light">

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Bookname</label>
  <input type="text" class="form-control w 50"  name="tbookname" placehoder="name...">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Auther</label>
  <input type="text" class="form-control w 50"  name="tauther" placehoder="auther...">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Price</label>
  <input type="number" class="form-control w 50"  name="tprice" placehoder="price...">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Stock</label>
  <input type="number" class="form-control w 50"  name="tstock" placehoder="stock...">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Booktype</label>
  
<SELECT class = "form-control" name="tbooktype">
<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbbooktype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
    <option value="<?=$row->booktypeid?>">
        <?=$row->booktypename?></option>
<?php
    }
?>
</div>

    </select>
</div>
<div class="mb-3 p-3 "><input type="submit" name="bSubmitBook" class="btn btn-outline-success" value="บันทึกข้อมูล"></div>
</div>
</form>
</div> 
</div>  
<div>  












