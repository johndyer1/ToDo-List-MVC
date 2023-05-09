<?php

    function get_categories() {
        global $db;
        $query = 'SELECT * FROM categories ORDER BY categoryID';
        $statement = $db->prepare($query);
        $statement->execute();
        $categories = $statement->fetchAll();
        $statement->closeCursor();
        return $categories;    
    }

    function get_categoryName_by_id( $id ) {
        global $db;
        $query = 'SELECT categoryName FROM categories WHERE categoryID = ' . $id;
        $statement = $db->prepare($query);
        $statement->execute();
        $category_name = $statement->fetch();
        $statement->closeCursor();
        return $category_name[0];    
    }

    function get_id_by_categoryName( $name ) {
        global $db;
        $query = 'SELECT categoryID FROM categories WHERE categoryName = ' . $name;
        $statement = $db->prepare($query);
        $statement->execute();
        $category_name = $statement->fetch();
        $statement->closeCursor();
        return $category_name[0];    
    }

    function delete_category( $id ) {
        global $db;
        $query = 'DELETE FROM categories WHERE categoryID = (:id)';
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_category( $category_name ) {
        global $db;
        $query = 'INSERT INTO categories (categoryName) VALUES (:category_name)';
        $statement = $db->prepare($query);
        $statement->bindValue(':category_name', $category_name);
        $statement->execute();
        $statement->closeCursor();
    }

?>