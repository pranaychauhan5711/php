<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Categories</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./selfcss/categories.css">
        <link rel="stylesheet" href="./selfcss/stores.css">
        <?php
        include('allcdn.php');
        ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <?php
            include('asidecommon.php');
            ?>
            </aside>
            <?php
            include('maincommon.php');
            ?>
            <div class="stores">
                <div class="top">
                    <div class="items">
                        <h3 class="active">Approved Stores</h3>
                        <div class="active-div"></div>
                        </div>
                         <div class="items">
                        <h3>Unapproved Stores</h3>
                        <div class="active"></div>
                </div>
            </div>
            <div class="feature">
            <div class="searchbox">
    <form action="" method="" class="search-bar">
        <input type="text" placeholder="Search Store by Name" name="search-shop-in-market">
        <button type="button" ><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    </div>
        <div class="secondary">
            <button type="button" class="simple"><span class="material-icons-sharp">compare_arrows</span>
                        <h3>import</h3>
            </button>
            <button type="button" class="simple"><span class="material-icons-sharp">refresh</span>
                        <h3>refresh</h3>
            </button>
            <button type="button" class="primary-btn"><span class="material-icons-sharp">add</span>
                        <h3>Add store</h3>
            </button>
        </div>
            </div>
            <div class="table-data">
                <table cell-padding="5px" cell-spacing="0px" >
                    <tr class="stripped">
                        <th>Id</th><th>Store Name</th><th>Address</th><th>Phone</th><th>email</th><th>delivery commision</th><th>pick-up commission</th><th>revenue</th><th>status</th><th>actions</th>
                    </tr>
                    <tr>
                        <td>1</td><td>Chauhan Grocery Store</td><td>969/29 Chauhano ka kua Dhola bhata</td><td>8000403264</td><td>pranaychauhan5711@gmail.com</td><td>$1</td><td>$2</td><td>$1008</td><td><input type="text" checked></td><td><button  type="button" 
                        class="primary-btn">View Analytics</button>
                        <button  type="button" 
                        class="primary-btn">Chat with Store</button></td>
                    </tr>
                    <tr class="stripped">
                        <td>2</td><td>Chauhan Grocery Store</td><td>969/29 Chauhano ka kua Dhola bhata</td><td>8000403264</td><td>pranaychauhan5711@gmail.com</td><td>$1</td><td>$2</td><td>$1008</td><td><input type="text" checked></td><td><button  type="button" 
                        class="primary-btn">View Analytics</button>
                        <button  type="button" 
                        class="primary-btn">Chat with Store</button></td>
                    </tr>
                </table>
            </div>
</div>
            </main>
            <?php
            include('righttopcornercommon.php');
            ?>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>