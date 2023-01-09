<?php



function ends_with($string, $end) {
    return substr_compare($string, $end, -strlen($end)) === 0;
}

$q1 = mysqli_query($con, "select continent from products");
$q2 = mysqli_query($con, "select theme from products");
$q3 = mysqli_query($con, "select color from products");
$q4 = mysqli_query($con, "select year from products");
$q5 = mysqli_query($con, "select name from products");
$q6 = mysqli_query($con, "select description from products");



$q1r = mysqli_query($con, "select continent from products order by product_id desc limit 3");
$q2r = mysqli_query($con, "select theme from products order by product_id desc limit 3");
$q3r = mysqli_query($con, "select color from products order by product_id desc limit 3");
$q4r = mysqli_query($con, "select year from products order by product_id desc limit 3");
$q5r = mysqli_query($con, "select name from products order by product_id desc limit 3");
$q6r = mysqli_query($con, "select description from products order by product_id desc limit 3");


function box($name,$description, $continent, $theme, $color,) {
        echo    '<div class="col-4 col-12-medium">
        <section class="box feature">
        <a href="product_page.php?id=0" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                                <div class="inner">
                                    <header>
                                    <h2>'.$name.'</h2>
                                    </header>
                                    <p> '.$description.'</p>
                                    <p> '.$continent.' </p>
                                    <p> '.$theme.' </p>
                                    <p> '.$color.' </p>

                            </div>
                            </section>
                            </div>';
}