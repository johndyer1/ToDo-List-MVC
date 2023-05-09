<?php require('./header.php') ?>


<h1>My To-Do List</h1>


<section id="category_list" class="list">

    <h2>Category List</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Remove</th>
        </tr>
        <?php foreach ($categories as $category) : ?>
        <tr>
            <th><?php echo $category['categoryName'] ?></th>
            <th>
                <a href='../index.php?delete_button2=<?php echo $category['categoryID']; ?>'>❌</a>
            </th>
        </tr>
        <?php endforeach; ?>
    </table>

</section>


<section id="category" class="form">

    <h2>Add Category</h2>

    <form id="category_add">
        <label>Name: </label>
        <input type="text" name="cat_name">
        <button class="submit">Submit</button>
    </form>

</section>


<section id="links" class ="links">
    
    <a href="item_list.php">View item list.</a>
    <br>
    <a href="add_item.php">Add items.</a>

</section>


<?php require('./footer.php') ?>