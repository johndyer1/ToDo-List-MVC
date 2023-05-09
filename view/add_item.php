<?php require('./header.php') ?>


<h1>My To-Do List</h1>


<section id="item_add" class="form">

    <h2>Add Item</h2>

    <form id="list">
        <label>Category: </label>
        <input type="hidden" name="action" value="list_task">
        <select name="category_id2" required>
            <?php foreach ($categories as $category) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
            <?php echo $category['categoryName']; ?>
            </option>
            <?php endforeach; ?>
        </select>
        <br>
        <label>Title: </label>
        <input type="text" name="title_name">
        <br>
        <label>Description: </label>
        <input type="text" name="description">
        <br>
        <button class="submit">Add Item</button>
    </form>

</section>


<section id="links" class ="links">
    
    <a href="item_list.php">View item list.</a>
    <br>
    <a href="category_list.php">Add or delete categories.</a>

</section>


<?php require('./footer.php') ?>