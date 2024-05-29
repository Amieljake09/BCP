<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $concern=$_POST['concern'];

    $sql="insert into `crud` (name,email,phone,concern)
    values('$name','$email','$phone', '$concern')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: display.php?success=true');
        exit();
    }else{
        die(mysqli_error($con));
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>ADMiN Page</title>
    <link rel="stylesheet" href="stilo.css">
</head>
<body>

<div class="sidebar">
    <div class="top">
        <div class="logo">
            <i class='bx bxl-codepen' ></i>
            <span class="CRM">CRM System</span>
        </div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <div class="user">
        <img src="jake.jpg" alt="me" class="jake">
        <div>
            <p class="bold">Amiel Jake Baril</p><br>
            <p class="admin">Admin</p>
        </div>
    </div>
    <ul>
        <li>
            <a href="admin1.php">
            <i class='bx bx-home-alt' ></i>
                <span class="nav-items">Home</span>
            </a>
            <span class="tooltip">Home</span>
        </li>
        <li>
            <a href="module1.php">
                <i class='bx bx-book-open' ></i>
                <span class="nav-items">Concerns</span>
            </a>
            <span class="tooltip">Concerns</span>
        </li>
        <li>
            <a href="display.php" >
                <i class='bx bx-book-open' ></i>
                <span class="nav-items">View Table</span>
            </a>
            <span class="tooltip">View Table</span>
        </li>
        
        <li>
            <a href="login.php">
                <i class='bx bx-log-out-circle' ></i>
                <span class="nav-items">Logout</span>
            </a>
            <span class="tooltip">Logout</span>
        </li>
    </ul>
</div>

<div class="main-content">
    <div class="container" id="content">
        <form method="POST">
            <div class="form-group">
                <h2>Fill Up Concern</h2><br>
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Type your name" name="name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Type your email" name="email" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="Type your phone no" name="phone" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="concern">Concern</label>
                <input type="text" class="form-control" id="concern" placeholder="What kind of concern" name="concern" autocomplete="off" required>
            </div>

            <div class="alert" id="alert-message" style="display: none; color: red;">Please fill up all fields.</div>

            <button type="submit" class="btn btn-primary" name="submit" onclick="validateForm()">Submit</button>
        </form>

    </div>
</div>


<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');
    let content = document.querySelector('#content');

    btn.onclick = function () {
        sidebar.classList.toggle('active');
                            
    }
    window.onload = function() {
        sidebar.classList.add('active');
    };
</script>

<script>
function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var concern = document.getElementById('concern').value;

    if (name === "" || email === "" || phone === "" || concern === "") {
        document.getElementById('alert-message').style.display = "block";
        return false;
    }
}
</script>

<style>
   /* Add this CSS to your stilo.css file */
.alert{
    margin-bottom: 15px;
    color: #8e4949;
    animation: blink 0.3s 5;
}
@keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 0; }
    100% { opacity: 1; }
}

@keyframes fadeInFromTop {
    from {
        opacity: 0;
        transform: translateY(-100%);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.form-container {
    max-width: 500px;
    margin: 0 auto;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    outline: none;
    border-color: #5a9ced;
}

.btn {
    display: inline-block;
    background-color: #5a9ced;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #4a8adf;
}

    </style>


</body>
</html>
