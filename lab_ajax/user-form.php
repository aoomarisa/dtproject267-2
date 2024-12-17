<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<!--====form section start====-->
<div class="container w-50">
<div class="user-detail">
<div class="alert alert-dark mb-4 mt-4  ">
    <h2>Insert User Data</h2>
    <p id="msg"></p>
    <form id="userForm" method="POST">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control w-50" placeholder="Enter Full Name" name="fullName" required><br>
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control w-50" placeholder="Enter Email Address" name="emailAddress" required><br>
          <label class="form-label">City</label>
          <input type="city" class="form-control w-50" placeholder="Enter Full City" name="city" required><br>
          <label class="form-label">Country</label>
          <input type="text" class="form-control w-50" placeholder="Enter Full Country" name="country" required><br>
          <button type="submit" class="btn btn-success">Submit</button>
    </form>
        </div>

        <h3 class="alert alert-info"> ตรวจสอบ user.. </h3>
<div class="content">
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>Email Address</th>
            <th>City</th>
            <th>Country</th>
        </thead>
        <tbody>
<?php
    include"database.php";//ติดต่อฐานข้อมูล
    $sql="SELECT * FROM usertable";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){ 
?>
            <tr>
                <td><?=$row->id?></td>
                <td><?=$row->fullname?></td>
                <td><?=$row->emailAddress?></td>
                <td><?=$row->city?></td>
                <td><?=$row->country?></td>
            </tr>
<?php
    }
?>
        </tbody>
    </table>
</div>
</div>
</div>
<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
</body>
</html>