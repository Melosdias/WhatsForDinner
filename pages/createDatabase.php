<?php
$db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');
$query = 'CREATE DATABASE IF NOT EXISTS cooking';
mysqli_query($db, $query);
mysqli_select_db($db, "cooking") or die(mysqli_error($db));

$query = 'CREATE TABLE IF NOT EXISTS ingredient (
    ingredient_id       INTEGER UNSIGNED    NOT NULL AUTO_INCREMENT,
    ingredient_name     VARCHAR(255)        NOT NULL,
    ingredient_type     ENUM(\'SWEET-PRODUCT\',\'VEGETABLE\', \'FRUITS\', \'DAIRY-PRODUCT\', \'STARCHY-FOOD\', \'CONDIMENT\', \'MEAT\', \'SEAFOOD\')  NOT NULL,  
    ingredient_image    VARCHAR(255)        NOT NULL,

    PRIMARY KEY (ingredient_id)
    )
    ENGINE=MyISAM';
mysqli_query($db, $query) or die(mysqli_error($db));

$query = 'CREATE TABLE IF NOT EXISTS receipes (
    receipes_id         INTEGER UNSIGNED    NOT NULL AUTO_INCREMENT,
    receipes_name       VARCHAR(255)        NOT NULL,
    receipes_ingredient VARCHAR(255)        NOT NULL,
    receipes_image      VARCHAR(255)        NOT NULL,
    receipes_step1      VARCHAR(255)        NOT NULL,
    receipes_step2      VARCHAR(255)        DEFAULT "",    
    receipes_step3      VARCHAR(255)        DEFAULT "",    
    receipes_step4      VARCHAR(255)        DEFAULT "",    
    receipes_step5      VARCHAR(255)        DEFAULT "",    
    receipes_step6      VARCHAR(255)        DEFAULT "",    
    receipes_step7      VARCHAR(255)        DEFAULT "",    
    receipes_step8      VARCHAR(255)        DEFAULT "",    
    receipes_step9      VARCHAR(255)        DEFAULT "",    
    receipes_step10     VARCHAR(255)        DEFAULT "",    
        
    PRIMARY KEY (receipes_id)
    )
    ENGINE=MyISAM';
mysqli_query($db, $query) or die(mysqli_error($db));

$query = 'INSERT IGNORE INTO ingredient
            (ingredient_id, ingredient_name, ingredient_type, ingredient_image)
        VALUES
            (1, "Dark Chocolate", "SWEET-PRODUCT", "../ingredients/chocolatAndCo/darkChocolat.jpg"),
            (2, "Lettuce", "VEGETABLE", "../ingredients/vegetable/lettuce.jpg"),
            (3, "Apple", "FRUITS", "../ingredients/fruits/apple.jpg"),
            (4, "Chicken egg", "DAIRY-PRODUCT", "../ingredients/milk/chicken-egg.jpg"),
            (5, "Potato", "STARCHY-FOOD", "../ingredients/starchyFood/potato.jpg"),
            (6, "Basilic", "CONDIMENT", "../ingredients/herb/basilic.jpg"),
            (7, "Beef", "MEAT", "../ingredients/meat/beef.jpg"),
            (8, "Pork", "MEAT", "../ingredients/meat/pork.jpg"),
            (9, "Chicken", "MEAT", "../ingredients/meat/chicken.jpg"),
            (10, "Tuna", "SEAFOOD", "../ingredients/fish/tuna.jpg")';
mysqli_query($db, $query) or die(mysqli_error($db));

$query = 'INSERT IGNORE INTO receipes
            (receipes_id, receipes_name, receipes_ingredient, receipes_image, receipes_step1,receipes_step2,receipes_step3,receipes_step4,receipes_step5,receipes_step6,receipes_step7,receipes_step8,receipes_step9,receipes_step10)
        VALUES
            (1, "omelette", "4", "../receipes/omelette.jpg","Season the beaten eggs well with salt and pepper. Heat the oil and butter in a non-stick frying pan over a medium-low heat until the butter has melted and is foaming.","Pour the eggs into the pan, tilt the pan ever so slightly from one side to another to allow the eggs to swirl and cover the surface of the pan completely. Let the mixture cook for about 20 seconds then scrape a line through the middle with a spatula.", "Tilt the pan again to allow it to fill back up with the runny egg. Repeat once or twice more until the egg has just set.", "At this point you can fill the omelette with whatever you like – some grated cheese, sliced ham, fresh herbs, sautéed mushrooms or smoked salmon all work well. Scatter the filling over the top of the omelette and fold gently in half with the spatula. Slide onto a plate to serve", "", "", "", "", "", "")';
mysqli_query($db, $query) or die(mysqli_error($db));
?>