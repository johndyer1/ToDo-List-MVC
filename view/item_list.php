<?php require('./header.php') ?>


<h1>My To-Do List</h1>


<section id="category_dropdown" class="dropdown">

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label>Category: </label>
        <input type="hidden" name="action" value="list_task">
        <select name="category_id1" required>
            <option value="viewAll">View All Categories
            </option>
            <?php foreach ($categories as $category) : ?>
            <option value="<?php echo $category['categoryName']; ?>">
            <?php echo $category['categoryName']; ?>
            </option>
            <?php endforeach; ?>
        </select>
        <button class="confirm">Confirm</button>             
    </form>
    <?php $catNam = filter_input(INPUT_POST, 'category_id1', FILTER_SANITIZE_STRING); ?>

</section>


<section id="item_list" class="list">

    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>Remove</th>
        </tr>
        <?php foreach ($items as $item) : ?>
        <?php if ($item['categoryName'] === $catNam || $catNam === "viewAll" || $catNam === NULL) { ?>
        <tr>
            <th><?php echo $item['Title'] ?></th>
            <th><?php echo $item['Description'] ?></th>
            <th><?php echo $item['categoryName'] ?></th>
            <th>
            <a href='../index.php?delete_button1=<?php echo $item['ItemNum']; ?>'>❌</a>
            </th>
        </tr>
        <?php } ?>
        <?php endforeach; ?>
    </table>

</section>


<section id="links" class ="links">
    
    <a href="category_list.php">Add or delete categories.</a>
    <br>
    <a href="add_item.php">Add items.</a>

</section>


<?php require('./footer.php') ?>