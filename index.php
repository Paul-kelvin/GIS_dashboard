<?php
 //   include_once 'process.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function Redirect_dashboard()
        {
            window.location = "http://127.0.0.1:5500/index.html#"
        }
        function Redirect_profile()
        {
            window.location = "https://www.google.com"
        }
        function Redirect_statistics()
        {
            window.location = "http://localhost:3000/input.html?back=Go+Back#"
        }
        function Redirect_Carriers()
        {
            window.location = ""
        }
        function Redirect_faq()
        {
            window.location = ""
        }
        function Redirect_testimonials()
        {
            window.location = ""
        }
        function Redirect_settings()
        {
            window.location = ""
        }
        function Redirect_logout()
        {
            window.location = "file:///C:/Users/A-BPK/Desktop/dashboard/login.html"
        }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

</head>
<body>
    <div class="sidebar">
      <div class="logo">
        <img src="images/420282196_46011.jpg" alt="">
        <div>
            <span>GHANA IMMIGRATIION SERVICE</span>
        </div>
      </div>
      <ul class="menu">
        <li class="active">
            <a href="#">
                <i class="fas fa-tachometer-alt"></i>
                <input class="buttons--design" type="button" value="Dashboard" placeholder="Dashboard" onclick="Redirect_dashboard();"/>
            </a>
        </li>
        <li type="Profile">
            <a type="Profile" href="#">
                <i class="fas fa-user"></i>
                <input class="buttons--design" type="button" value="Profile" placeholder="Profile" onclick="Redirect_profile();"/>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-chart-bar"></i>
                <input class="buttons--design" type="button" value="Statistics" placeholder="Statistics" onclick="Redirect_statistics();"/>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-briefcase"></i>
                <input class="buttons--design"  type="button" value="Carriers" placeholder="Carrers" onclick=""/>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-question-circle"></i>
                <input class="buttons--design" type="button" value="FAQ" placeholder="FAQ" onclick=""/>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-star"></i>
                <input class="buttons--design" type="button" value="Testimonials" placeholder="Testimonials" onclick=""/>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-cog"></i>
                <input class="buttons--design" type="button" value="Settings" placeholder="Settings" onclick=""/>
            </a>
        </li>
        <li class="logout">
            <a href="#">
                <i class="fas fa-sign-out-alt"></i>
                <input class="buttons--design"  type="button" value="Logout" placeholder="Logout" onclick="Redirect_logout();"/>
            </a>
        </li>
      </ul>
    </div>
    <div class="main--content">
        <div class="header--wrapper">
           <div class="header--tittle">
            <span>Primary</span>
            <h2>Dashboard</h2>
           </div> 
           <div class="user--info">
            <div class="search--box">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Search"/>
            </div>
            <img src="./images/420282196_46011.jpg" alt="" />
           </div>
        </div>
        <div class="card--container">
            <h2 class="main--title">Today's Data</h2>
            <div class="card--wrapper">
                <div class="payment--card">
                    <div class="card--header">
                        <div class="amount">
                           <span class="title">Payment Amount</span>
                           <span class="amount--value">GHS1350.00</span>
                        </div>
                        <i class="fas fa-cedi-sign icon"></i>
                    </div>
                    <span class="card--details">**** **** **** 2023</span>
                </div>
                <div class="payment--card">
                    <div class="card--header">
                        <div class="amount">
                           <span class="title">total number of columns</span>
                           <?php
                              $connect = new mysqli('localhost', 'root', '', 'finance');
                              if ($connect->connect_error){
                                  die('connection failed :' .$connect->connect_error);
                              }
                              $dash_payment_query = "SELECT * FROM data__";
                              $dash_payment_query_run = mysqli_query($connect, $dash_payment_query);
                              if($payment_total = mysqli_num_fields($dash_payment_query_run)){
                                 echo '<span class="amount--value">'.$payment_total.'</span>';
                              }
                              else{
                                 echo 'no data ';
                              }
                           ?>
                        </div>
                        <i class="fas fa-check icon"></i>
                    </div>
                    <span class="card--details">**** **** **** 2023</span>
                </div>
                <div class="payment--card">
                    <div class="card--header">
                        <div class="amount">
                           <span class="title">Payment Order</span>
                           <span class="amount--value">GHS5650.00</span>
                        </div>
                        <i class="fas fa-list icon"></i>
                    </div>
                    <span class="card--details">**** **** **** 2023</span>
                </div>
                <div class="payment--card">
                    <div class="card--header">
                        <div class="amount">
                           <span class="title">total number of rows</span>
                           <?php
                             $connect = new mysqli('localhost', 'root', '', 'finance');
                             if ($connect->connect_error){
                                 die('connection failed :' .$connect->connect_error);
                             }
                             $dash_payment_query = "SELECT * FROM data__";
                             $dash_payment_query_run = mysqli_query($connect, $dash_payment_query);
                             if($payment_total = mysqli_num_rows($dash_payment_query_run)){
                                echo '<span class="amount--value">'.$payment_total.'</span>';
                             }
                             else{
                                echo 'no data ';
                             }
                           ?>
                           
                        </div>
                        <i class="fas fa-users icon"></i>
                    </div>
                    <span class="card--details">**** **** **** 2023</span>
                </div>
            </div>
        </div>
        <div class="tabular--wrapper">
            <h3 class="main__title">Financial Data</h3>
            <div class="table--container">
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Transaction Type</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $connect = new mysqli('localhost', 'root', '', 'finance');
                            if ($connect->connect_error){
                                die('connection failed :' .$connect->connect_error);
                            }

                            $sql = "SELECT * FROM data__" ;
                            $result = $connect->query($sql);

                            if (!$result){
                                die('Invalid query :' .$connect->connect_error);
                            }

                            while($row = $result->fetch_assoc())
                            {
                                echo"<tr>
                            <td>" . $row["Date_"] . "</td>
                            <td>" . $row["Transaction_Type"] . "</td>
                            <td>" . $row["Category"] . "</td>
                            <td>" . $row["Amount"] . "</td>
                            <td>" . $row["Status_"] . "</td>
                            <td>" . $row["Description_"] . "</td>
                            <td><button>Edit</button></td>
                        </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    
</body>
</html>