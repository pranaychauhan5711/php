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
            
            <div class="main-categories">
               <div class="tables">
                    <div class="table">
                    <div class="top">
                    <h3>Categories</h3>
                    <div class="corner">
                        <a href="addcategories.php"
                        ><span class="material-symbols-sharp">
                        add
                        </span>
                        </a>
                        <a href="analyticscategories.php">
                        <span class="material-symbols-sharp">analytics</span>
                        </a>
                    </div>
                    </div>
                    <div class="table-content-danger">
                        <h3>categories this way</h3>
                       <div class="corner">
                        <button type="button" id="edit">
                        <span class="material-symbols-sharp">
                         edit
                        </span>
                        </button>
                        <button id="delete">
                        <span class="material-symbols-sharp">
                        delete
                        </span>
                        </button>
                        </div>
                        </div>
                        <div class="table-content-danger">
                            <h3>categories this way</h3>
                            <div class="corner">
                        <button type="button" id="edit">
                        <span class="material-symbols-sharp">
                         edit
                        </span>
                        </button>
                        <button id="delete">
                        <span class="material-symbols-sharp">
                        delete
                        </span>
                        </button>
                        </div>
                        </div>
</div>
                <div class="table">
                    <div class="top">
                    <h3>Category with active class</h3>
                    <div class="corner">
                        <a href="addsubcategories.php"
                        ><span class="material-symbols-sharp">
                        add
                        </span>
                        </a>
                        <a href="#">
                        <span class="material-symbols-sharp">analytics</span>
                        </a>
                        </div>
                        </div>
                        <div class="table-content-success">
                            <h3>Sub categories will get display here</h3>
                            <div class="corner">
                        <button type="button" id="edit">
                        <span class="material-symbols-sharp">
                         edit
                        </span>
                        </button>
                        <button id="delete">
                        <span class="material-symbols-sharp">
                        delete
                        </span>
                        </button>
                        </div>
                        </div>
                </div>
                <div class="table">
                    <div class="top">
                    <h3>Sub Category with active class</h3>
                    <div class="corner">
                        <a href="addproducts.php"
                        ><span class="material-symbols-sharp">
                        add
                        </span>
                        </a>
                        <a href="#">
                        <span class="material-symbols-sharp">analytics</span>
                        </a>
                        </div>
                        </div>
                        <div class="table-content-warning">
                            <h3>Its products will get Display here</h3>
                            <div class="corner">
                        <button type="button" id="edit">
                        <span class="material-symbols-sharp">
                         edit
                        </span>
                        </button>
                        <button id="delete">
                        <span class="material-symbols-sharp">
                        delete
                        </span>
                        </button>
                        </div>
                        </div>
                </div> 

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