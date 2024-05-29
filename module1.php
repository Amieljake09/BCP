<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>ADMiN Page</title>
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
                <i class='bx bxs-grid-alt' ></i>
                <span class="nav-items">Home</span>
            </a>
            <span class="tooltip">Home</span>
        </li>
        <li>
            <a href="#">
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
<div class="header-container">
        <div class="header">
          <div class="profile-info">
            <h1 class="conejos">CONCERNS</h1>
          </div>
        </div>
      </div>
    <div class="container">
        <main class="row">

        <section class="col">

        <header class="title">
        <h2>Type of Concerns :</h2>
        </header>
        <div class="contents">
            

           <div class="box">
              <h4 class="CRM">Complaints about Customer Service:</h4>
              <p>Issues related to the behavior or responsiveness of customer service representatives.</p>
            </div>

            <div class="box">
              <h4 class="CRM">Product or Service Quality: </h4>
              <p>Customers may raise concerns about the quality of products or services they have received.</p>
            </div>

            <div class="box">
              <h4 class="CRM">Order Issues: </h4>
              <p>This could include concerns about late deliveries, missing items, or incorrect orders.</p>
            </div>

            <div class="box">
              <h4 class="CRM">Feedback and Suggestions:</h4>
              <p>Allow customers to provide feedback and suggestions for improving products or services.</p>
            </div>


           





          </div>
        </section>


        <!--- ***************** cut ********************* --->

        <section class="col">

        <header class="title">

        </header>
        <div class="contents">

           <div class="box">
              <h4 class="CRM">Billing and Payment Problems: </h4>
              <p>Customers might have concerns about billing errors, unauthorized charges, or difficulties with payment methods.</p>
            </div>

            <div class="box">
              <h4 class="CRM">Technical Support:</h4>
              <p>Concerns related to technical issues with products or services, such as software bugs, hardware malfunctions, or connectivity problems.</p>
            </div>

            <div class="box">
              <h4 class="CRM">Refunds and Returns:</h4>
              <p>Concerns about the refund process, return policies, or disputes over refunds.</p>
            </div>

            <div class="box">
              <h4 class="CRM">Account Management:  </h4>
              <p>Concerns related to account access, password resets, or account security.</p>
            </div>

            <div class="proceed-button">
            <a href="users.php" >
        <button class="proceed">Fill up form</button>
    </div>


          </div>
        </section>

                <!--- ***************** cut ********************* --->


        </main>
    </div>
</div>








<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
.jake{
    width: 50px;
    border-radius: 50%;
    border: 3px solid #eee;
    height: auto; /* Allows the image to scale proportionally */
    transition: all 0.5s ease;
}
.sidebar.active .jake {
    width: 95px; /* Adjust this value to fit the desired width when the sidebar is active */
    height: 90px; /* Adjust this value to fit the desired height when the sidebar is active */
}
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 135vh;
    width: 80px;
    background-color: #12171e;
    padding: 0.4rem 0.8rem;
    transition: all 0.5s ease;
    overflow-y: auto;
}
.sidebar.active ~ .main-content {
    left: 250px;
    width: calc(100% - 250px);
}
.sidebar.active {
    width: 250px;
}
.sidebar #btn {
    position: absolute;
    color: #fff;
    top: .4rem;
    left: 50%;
    font-size: 1.2rem;
    line-height: 50px;
    transform: translateX(-50%);
    cursor: pointer;
}
.sidebar.active #btn {
    left: 90%;
}
.sidebar .top .logo {
    color: #fff;
    display: flex;
    height: 50px;
    width: 100%;
    align-items: center;
    pointer-events: none;
    opacity: 0;
}

.sidebar.active .top .logo {
    opacity: 1;
}

.top .logo i {
    font-size: 2rem;
    margin-right: 10px;
    
}

.CRM{
    animation: worm 4s infinite;

}
@keyframes worm {
    0%, 100% {
        transform: translateX(0px);
    }
    25% {
        transform: translateX(15px);
    }
    50% {
        transform: translateX(15px);
    }
    75% {
        transform: translateX(15px);
    }
}
.user {
    display: flex;
    align-items: center;
    margin: 1rem;
    margin-left: 2px;
}
.user p {
    color: #fff;
    opacity: 1;
    margin-left: 1rem;
}
.user p.admin{
    color: greenyellow;
}
.bold {
    font-weight: 600;

}

.sidebar p {
    opacity: 0;
}

.sidebar.active p {
    opacity: 1;
}

.sidebar ul li {
    position: relative;
    list-style-type: none;
    height: 50px;
    width: 90%;
    margin: 0.8rem auto;
    line-height: 50px;
}

.sidebar ul li a {
    color: #fff;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-bottom: 0.8rem solid transparent;
}

.sidebar ul li a:hover {
    background-color: #fff;
    color: #12171e;
    border-radius: 10px;
    height: 50px;
    animation: hover 0.5s ease;
}
@keyframes hover {
    0% { transform: scale(1); }
    10% { transform: scale(1.2); }
    60% { transform: scale(1); }
}

.sidebar ul li a i {
    min-width: 50px;
    text-align: center;
    height: 50px;
    border-radius: 12px;
    line-height: 50px;
}

.sidebar .nav-items {
    opacity: 0;
}

.sidebar.active .nav-items {
    opacity: 1;

}
.sidebar ul li .tooltip {
   position:absolute;
   left: 125px;
   top: 50%;
   transform: translate(-50%, -50%);
   box-shadow: 0 0.5rem 0.8rem rgba(0, 0, 0, 0.2);
   border-radius: .6rem;
   padding: .4rem 1.2rem;
   line-height: 1.8rem;
   z-index: 20;
   opacity: 0;
}

.sidebar ul li:hover .tooltip {
    opacity: 1;
    background-color: white;
    animation: hover 0.5s ease;
}

.sidebar.active ul li .tooltip {
    display: none;
}

.main-content {
    position: relative;
    background-color: #545454;
    min-height: 110vh;
    top: 0;
    left: 80px;
    transition: all 0.5s ease;
    width: calc(100% - 80px);
    padding: 1rem;
}
.container {
    display: flex;
    justify-content: space-between;
    color: white;
    font-size: 12px;
    height: 90.2vh;
}
.container{
    padding-right: calc(10% - 30px);
}
.welcome-box {
    background-color: #12171e;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
main.row{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-column-gap: 20px;
}
.col header.title{
    font-family: Helvetica;
    color: white;
    padding: 0px 0px 20px 30px;
}
.col .contents{
    padding: 0px 30px;
    border-left: 2px solid yellowgreen;
}
.col .contents .box{
    position: relative;
    padding: 20px;
    background: #12171e5f;
    cursor: pointer;
    transition: all 0.4s;
    margin-bottom: 20px;
    border-radius: 5px;
    padding-left: 50px;
}

.col .contents .box:hover{
    box-shadow: 0px 3px 12px 0px #12171e;
    border: 1px solid transparent;
}
.col .contents .box::before{
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    right: calc(100% + 22px);
    top: 0;
    background-color: yellowgreen;
    border: 2px solid white;

}
.title h2{
    color: white;
    letter-spacing: 3px;
    display: flex;
    list-style: none;
    gap: 8rem;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-weight: 300;
    font-size: 14px;
    color: #fff;
    margin-bottom: 20px;
    margin-top: 20px;

}
.box h4{
    position: relative;
    color: yellowgreen;
    font-size: 17px;
    margin-bottom: 20px;
    font-weight: 300;


}


.box p{
    line-height: 1.2;
    color: white;
    font-size: 12px;
    font-family: 'Bahnschrift Light', sans-serif;


}
@media(max-width: 768px){
    main.row{
        grid-template-columns: 1fr;
    }
    .row .col:nth-child(2){
        margin-top: 30px;
    }
    
}
.header-container {
    background: #12171e5f;
    padding: 15px; /* Add padding para magkaroon ng space mula sa border */
    width: 900px;
    display: flex;
    padding-right: calc(10% - 30px);
    align-items: center;
    justify-content: center;
    margin: 0 auto; /* Center horizontally */
    height: 166px;
    border-radius: 10px;
    color: white;
    margin-bottom: 50px;
    margin-top: 20px;
    letter-spacing: 5px;
    font-weight: 300;
    font-size: 14px;
    margin-bottom: 20px;
  }
  .proceed-button {
    margin-top: 20px; /* Magdagdag ng pampalubag-loob sa pagitan ng laman at proceed button */
    text-align: right; /* I-set ang text alignment sa kanan */
}

.proceed {
    background-color: darkgreen; /* Kulay ng button */
    color: white; /* Kulay ng text */
    padding: 10px 20px; /* Lapad at taas ng button */
    border-radius: 5px; /* Radius ng mga gilid */
    cursor: pointer; /* Magpakita ng pointer kapag nag hover */
    border: solid gray 2px;
    transition: background-color 0.3s; /* Epekto ng transition kapag nag hover */
}


.proceed:hover {
    background-color: yellowgreen; /* Kulay ng button kapag nag hover */
}



</style>











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



</body>
</html>
