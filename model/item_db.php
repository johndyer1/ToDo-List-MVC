<?php

function get_items() {
    global $db;
        $query = 'SELECT todoitems.ItemNum, todoitems.Title, todoitems.Description, categories.categoryName
                  FROM todoitems, categories
                  WHERE todoitems.categoryID = categories.categoryID';
        $statement = $db->prepare($query);
        $statement->execute();
        $items = $statement->fetchAll();
        $statement->closeCursor();
        return $items; 
}

function add_item($category_id, $title, $description) {
    global $db;
    $query = 'INSERT INTO todoitems
                 (categoryID, Description, Title)
              VALUES
                 (:categoryID, :description, :title)';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryID', $category_id);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':title', $title);
    $statement->execute();
    $statement->closeCursor();
}

function delete_item($item_num) {
    global $db;
    $query = 'DELETE FROM todoitems
              WHERE ItemNum = :item_num';
    $statement = $db->prepare($query);
    $statement->bindValue(':item_num', $item_num);
    $statement->execute();
    $statement->closeCursor();
}

?>