
<div class="container">
    <table class="table">
        <thead>
            <tr class="info">
                <th>Photo</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['data'] as $row): ?> 
                <tr class="active">
                    <td style="width: 20%">
                        <img style="height: 300px;width: 300px" src="http://<?= $_SERVER['HTTP_HOST'] ?>/<?= $row['photo'] ?>" alt="addphoto">
                        <label class="text-center">Выбрать новое фото:
                            <input form="editform<?= $row['id'] ?>"  style="width: 300px" type="file" name="photo" class="btn btn-default">
                        </label>
                    </td>
                    <td style="width: 30%">
                        <input form="editform<?= $row['id'] ?>" name="name" type="text" value="<?= $row['name'] ?>" style="width: 90%" required>
                    </td>
                    <td style="width: 30%">
                        <textarea style="width: 90%; height: 300px;" form="editform<?= $row['id'] ?>" name="description" required><?= $row['description'] ?></textarea>
                    </td>
                    <td  style="width: 20%">
                        <form id="editform<?= $row['id'] ?>" style="display:inline" method="post" action="http://<?= $_SERVER['HTTP_HOST'] ?>/admin/edit_<?= $data['unit']; ?>" enctype="multipart/form-data">
                            <i class="material-icons">
                                <input type="hidden" name="old_photo" value="<?= $row['photo'] ?>">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <input class="input_edit" type="submit" name="edit" value="edit">
                            </i>
                        </form>
                        <form style="display:inline" method="post" action="http://<?= $_SERVER['HTTP_HOST'] ?>/admin/delete_<?= $data['unit']; ?>">
                            <i class="material-icons">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <input class="input_delete" type="submit" name="delete" value="delete">
                            </i>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
    <br>
    <i id="i_btn" class="material-icons text-center" style="width: 100%;"><button class="btn_add">add</button></i>
    <script>
        $(document).ready(function () {
            $('#i_btn').click(function () {
                $(this).hide();
            });
        });
    </script>
    <div id="form_add" style="display:none;">
        <form id="add_<?= $data['unit']; ?>" method="post" action="http://<?= $_SERVER['HTTP_HOST'] ?>/admin/add_<?= $data['unit']; ?>" enctype="multipart/form-data"></form>
        <table class="table">
            <tbody>
                <tr class="info">
                    <td style="width: 20%">
                        <input form="add_<?= $data['unit']; ?>" style="width: 300px" type="file" name="photo" class="btn btn-default" required placeholder="Photo">
                    </td>
                    <td style="width: 30%">
                        <input form="add_<?= $data['unit']; ?>" name="name" type="text" required style="width: 90%" placeholder="Name">
                    </td>
                    <td style="width: 40%">
                        <textarea form="add_<?= $data['unit']; ?>" style="width: 90%; height: 100px;" name="description" required placeholder="Description"></textarea>
                    </td>
                    <td style="width: 10%">
                        <input form="add_<?= $data['unit']; ?>" class="btn btn-default" type="submit" name="add_<?= $data['unit']; ?>" value="Add <?= $data['unit']; ?>">
                    </td>
                </tr>
            </tbody>
        </table>
        </form>
    </div>
</div>
