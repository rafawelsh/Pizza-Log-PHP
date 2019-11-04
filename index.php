<?php

    include('config/db_connect.php');
    //write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    //make query & get results
    $result = mysqli_query($conn, $sql);

    //fetch the results rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($conn);


?>


<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>

    <h4 class="center dark-grey-text">Pizza Diary: Add Your Own Recipes</h4>

        <div class="conatiner">
            <div class="row">

                <?php foreach($pizzas as $pizza): ?>

                    <div class="col s6 md3">
                        <div class="card z-depth-0">
                            <div class="card-content center">
                                <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                                <ul>
                                    <?php foreach(explode(',', $pizza['ingredients']) as $ing) { ?>
                                        <li><?php echo htmlspecialchars($ing); ?></li>
                                    <?php } ?> 
                                </ul>
                                    <div class="card-action right-align"><a href="details.php?id=<?php echo $pizza['id']?>" class="brand-text">More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    <?php include('templates/footer.php'); ?>

</html>