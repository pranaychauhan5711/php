<?php
ob_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./selfcss/adminpanel.css">
        <?php
        include('allcdn.php');
        ?>
    </head>
    <body>
    <div class="container">
    <?php
    include('asidecommon.php');
    ?>
    </aside>
        <!----End of ASide-->
      <!--Main Starts-->
        <?php
        include('maincommon.php');
        ?>
            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-sharp">
                        analytics
                        </span>
                        <div class="middle">
                            <div class="left"><h3>Total Sales
                            </h3>
                        <h1>
                            1,08,25,024
                        </h1></div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg >
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                        </div>
                        <small class="text-muted">Last 24 hours</small>
                </div>
                <!--END of Sales-->
                    <div class="expenses">
                        <span class="material-icons-sharp">
                            currency_rupee
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Expenses</h3>
                                <h1>23,23,23,233</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx="38" cy="38" r="36"></circle>
                                </svg>
                                <div class="number">
                                    <p>50%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                     <!--End of expenses-->
                     <div class="income">
                        <span class="material-icons-sharp">
                            bar_chart
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Income</h3>
                                <h1>1,12,12,122</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx="38" cy="38" r="36">
                                    </circle>
                                </svg>
                                <div class="number">
                                    <p>62%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 Hours</small>
                     </div>
                     <!--End of Income-->
                </div>
                <!--End of Insights-->
                <div class="active-status">
                    <div class="all-insights">
                        <h3>Pending orders</h3>
                        <h5>99</h5>
                    </div>
                    <div class="all-insights">
                        <h3>Active Orders</h3>
                        <h5>212</h5>
                    </div>
                    <div class="all-insights">
                        <h3>Delivered Orders</h3>
                        <h5>212</h5>
                    </div>
                    <div class="all-insights">
                        <h3>Customer Cancelled Orders</h3>
                        <h5>212</h5>
                    </div>
                    <div class="all-insights">
                        <h3>Stores</h3>
                        <h5>212</h5>
                    </div>
                    <div class="all-insights">
                        <h3>Categories</h3>
                        <h5>212</h5>
                    </div>
                    <div class="all-insights">
                        <h3>Products</h3>
                        <h5>212</h5>
                    </div>
                    <div class="all-insights">
                        <h3>Promotions</h3>
                        <h5>212</h5>
                    </div>
                    <div class="all-insights">
                        <h3>Active Delivery Boy</h3>
                        <h5>212</h5>
                    </div>
                    <div class="all-insights">
                        <h3>Delivery Boy Active Orders</h3>
                        <h5>212</h5>
                    </div>
                </div>
            </main>
            <!--END of main -->
            <?php
            include('righttopcornercommon.php');
            ?>
                <!---END of top-->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./selfimage/0082.png">
                        </div>
                            <div class="message">
                                <p><b>Ravindra</b> recieved his order</p>
                                <small class="text-muted">1 minutes ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="./selfimage/0082.png">
                            </div>
                                <div class="message">
                                    <p><b>Raj</b> recieved his order</p>
                                    <small class="text-muted">1 minutes ago</small>
                                </div>
                            </div>
                            <div class="update">
                                <div class="profile-photo">
                                    <img src="./selfimage/0082.png">
                                </div>
                                    <div class="message">
                                        <p><b>Akshat</b> recieved his order</p>
                                        <small class="text-muted">1 minutes ago</small>
                                    </div>
                                </div>
                                <div class="showall"><small>
                                    <a class="text-muted" href="#"><u>Show all</u></a>
                                </small>
                            </div>
                    </div>
                </div>
            </div>
            </div>
        <script src="" async defer></script>
    </body>
</html>