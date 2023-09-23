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
        <title>ADD Categories</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./selfcss/addcategories.css">
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
            <div class="add-main-categories">

            <form method='post' action="">
                    <section>
                    <div>
                    <label for="add-categories-name">NAME</label>
                    <input type="text" placeholder="name" name="category-name" id="add-categories-name">
                    </div>
                    </section>
                    <section>
                    <div>
                    <label for="add-categories-tax">Tax(%)</label>
                    <input type="number"
                    id="add-categories-tax" placeholder="Tax(%)" name="category-tax-percent">
                    </div>
                    </section>
                    <div class="mid-block">
                    <section>
                    <div>
                    <label for="add-categories-type" name="category-type">TYPE</label>
                    <select id="add-categories-type"><option>Store</option>
                    </div>
                    </select>
                    </section>
                    </div>
                    <div class="mid-block">
                    <section>
                    <div>
                    <label for="add-categories-description">DESCRIPTION</label>
                    <textarea placeholder="Description" name="category-description" id="add-categories-description"></textarea>
</div>
                    </section>
                    </div>
                    <section>
                    <div>
                    <label for="add-categories-image">Add Image</label>
                    <input type="file" name="category-image-website" accept="image/jpeg"id="add-categories-name">
                    </div>
                    </section>
                    <section>
                    <div>
                    <label for="add-categories-image">Add Image</label>
                    <input type="file" name="category-image-app" accept="image/jpeg"id="add-categories-name">
                    </div>
                    </section>
                    <div class="submit">
                    <button type="submit" name="cat">Submit</button>
                    </div>
                    </form>
                </div>
            </main>
            <?php
                       include('righttopcornercommon.php');
            ?>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
    <?php
$con=mysqli_connect("localhost","root","","grocerywallah");
?>
<?php
if(!empty($_POST['category-name'] ))
{
    $cat=$_POST['category-name'];
    $q="insert into addcategory (name,image) values('$cat','NA')";
    mysqli_query($con,$q);
    echo "Done";
}
?>
</html>