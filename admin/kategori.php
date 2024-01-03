<div class="title">
    <h1>Kategori</h1>
    <a href="index.php?page=kategori-add"><button class="btn" type="button">add</button></a>
</div>
<table>
    <tr>
        <th width="5%">No</th>
        <th>Nama</th>
        <th width="12%">Aksi</th>
    </tr>

    <?php
    $que = "SELECT * FROM kategori";
    $select = mysqli_query($con, $que);

    while ($data = mysqli_fetch_array($select)) {
        ?>
        <tr>
            <th>
                <?php echo $data['id_kategori']; ?>
            </th>
            <td>
                <?php echo $data['nama_kategori']; ?>
            </td>
            <td>
                <a href="index.php?page=kategori-edt&id=<?php echo $data['id_kategori']; ?>"><button class="btn"
                        type="button">edit</button></a>
                <a href="index.php?page=kategori-del&id=<?php echo $data['id_kategori']; ?>"><button class="btn"
                        type="button">delete</button></a>
            </td>
        </tr>
    <?php } ?>

</table>