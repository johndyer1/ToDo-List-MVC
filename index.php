<?php
    require('model/database_connect.php');
    require('model/category_db.php');
    require('model/item_db.php');
   

    //Item list start
    $items = get_items();

    $category_id1 = filter_input(INPUT_GET, "category_id1", FILTER_UNSAFE_RAW);
    if ($category_id1 == "viewAll" or $category_id1 == NULL) {
        $categories = get_categories();
    }
    if (isset($_GET['delete_button1'])) {
        delete_item($_GET['delete_button1']);
        header('Location: http://localhost/ToDo/view/item_list.php', true);
    }
    //Item list end


    //Category list start
    $category_add = filter_input(INPUT_GET, "cat_name", FILTER_UNSAFE_RAW);
    if (isset($category_add)) {
        add_category($category_add);
        header('Location: http://localhost/ToDo/view/category_list.php', true);
    }

    if (isset($_GET['delete_button2'])) {
        delete_category($_GET['delete_button2']);
        header('Location: http://localhost/ToDo/view/category_list.php', true);
    }
    //Category list end


    //Add item start
    $category_id2 = filter_input(INPUT_GET, "category_id2", FILTER_UNSAFE_RAW);
    $title = filter_input(INPUT_GET, "title_name", FILTER_UNSAFE_RAW);
    $description = filter_input(INPUT_GET, "description", FILTER_UNSAFE_RAW);
    if (isset($_GET['category_id2'])) {
        add_item($category_id2, $title, $description);
    }
    //Add item end
?>