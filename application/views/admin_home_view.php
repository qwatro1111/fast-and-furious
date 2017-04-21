<div class="container">

    <table class="table">
        <thead>
            <tr class="info">
                <th>Name</th>
                <th>Content</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['data'] as $row): ?> 
                <tr class="active">
                    <td style="width: 30%">
                        <input form="editform<?= $row['id'] ?>" name="name" type="text" value="<?= $row['name'] ?>" required style="width: 90%" >
                    </td>
                    <td style="width: 40%">
                        <textarea form="editform<?= $row['id'] ?>" name="value" style="max-width:600px; max-height: 300px; width: 600px; height: 150px;"  required><?= $row['value'] ?></textarea>
                    </td>
                    <td style="width: 20%">
                        <form id="editform<?= $row['id'] ?>" style="display:inline" method="post" action="admin/edit_option">
                            <i class="material-icons">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <input class="input_edit" type="submit" name="edit" value="edit">
                            </i>
                        </form>
                        <form style="display:inline" method="post" action="admin/delete_option">
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
        <form id="add_form" method="post" action="admin/add_option">
            <table class="table"  style="width: 1100px">
                <tbody>
                    <tr class="info" style="width: 100%">
                        <td>
                            <input name="name" type="text" required style="width: 250px" placeholder="Name of option">
                        </td>
                        <td>
                            <textarea style="width: 500px; height: 100px;" name="value" required placeholder="Value of option"></textarea>
                        </td>
                        <td>
                            <input class="btn btn-default" type="submit" name="add_option" value="Add option">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
