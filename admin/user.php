<div class="title">
    <h1>All User</h1>
</div>
<table>
    <tr>
        <th width="5%">No</th>
        <th>Email</th>
        <th>Username</th>
        <th>Role</th>
        <th>Password</th>
        <th width="12%">Aksi</th>
    </tr>

    <?php
    $que = "SELECT * FROM user order by id_user";
    $select = mysqli_query($con, $que);

    while ($data = mysqli_fetch_array($select)) {
        ?>
        <tr>
            <th>
                <?php echo $data['id_user']; ?>
            </th>
            <td>
                <?php echo $data['email']; ?>
            </td>
            <td>
                <?php echo $data['username']; ?>
            </td>
            <td>
                <?php echo $data['role']; ?>
            </td>
            <td>
                <?php echo $data['password']; ?>
            </td>
            <td>
                <a href="index.php?page=user-del&id=<?php echo $data['id_user']; ?>"><button class="btn"
                        type="button">delete</button></a>
            </td>
        </tr>
    <?php } ?>
</table>