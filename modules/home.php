<div id="main">
    <div id="main-content">
    <?php if ($user === false) { ?>
        <h3>This is home page.</h3>
    <?php } else { ?>
        <h3>Users List </h3>
        <?php
            try {
                $sql = "SELECT * FROM users";
                $result = $mysql->query($sql);
            } catch (Exception $e) {
                echo "<p>Error: $e->getMessage()</p>";
            }
        ?>
        <table>
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
        <?php
        while($row = $result->fetch_array()) { ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['fullname'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['email'] ?></td>
            </tr>
        <?php } ?>
        </table>    
    <?php } ?>
    </div>
    <?php require __DIR__. '/partials/sidebar.php' ?>
</div>


