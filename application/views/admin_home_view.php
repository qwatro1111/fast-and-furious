
<div class="container">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Content</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?> 
                <tr>
                    <td style="width: 20%">
                        <input form="editform" name="name" type="text" value="<?= $row['name'] ?>" required>
                    </td>
                    <td style="width: 50%">
                        <textarea form="editform" name="value" style="max-width:600px; max-height: 300px; width: 600px; height: 150px;"  required><?= $row['value'] ?></textarea>
                    </td>
                    <td style="width: 30%">
                        <form id="editform" style="display:inline" method="get">
                            <i class="material-icons">
                                <input class="input_edit" type="submit" name="edit" value="edit">
                            </i>
                        </form>
                        <form id="deletform" style="display:inline">
                            <i class="material-icons">
                                <input class="input_delee" type="submit" name="delete" value="delete">
                            </i>
                        </form>
                        <i class="material-icons"><button class="btn_add">add</button></i>
                    </td>
                </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
    <div id="form_add" style="display:none;">
        <form method="get">
            New name:
            <div>

                <input type="text" name="newname">
            </div>
            New content:
            <div>

                <textarea name="newcontent" style="max-width:600px;  max-height: 300px; width: 600px; height: 150px;"></textarea>
            </div>
            <div>
                <input type="submit" value="add">
            </div>
        </form>
    </div>
</div>
