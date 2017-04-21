
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
    		<td id="photo_table" >
    		    <img id="photo_box" src="http://<?= $_SERVER['HTTP_HOST'] ?>/<?= $row['photo'] ?>" alt="addphoto">
    		    <label class="text-center">Выбрать новое фото:
    			<input  style="width: 300px;" type="file" name="photo" class="btn btn-default" id="photo" required src="http://<?= $_SERVER['HTTP_HOST'] ?>/<?= $row['photo'] ?>" alt="addphoto">
    		    </label>
    		</td>
    		<td id="name_table" >
		    <p><?= $row['name'] ?></p>
    		    <input form="editform<?= $row['id'] ?>" name="name" type="text" value="<?= $row['name'] ?>" required class="nameoption">
    		</td>
    		<td id="description_table" >
		       <p><?= $row['description'] ?></p>
    		    <textarea  form="editform<?= $row['id'] ?>" name="description" required><?= $row['description'] ?></textarea>
    		</td>
    		<td id="action_table" >
    		    <form id="editform<?= $row['id'] ?>"  class="editform" method="post" action="admin/edit_option">
    			<i class="material-icons">
    			    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    			    <input class="input_edit" type="submit" name="edit" value="edit">
    			</i>
    		    </form>
    		    <form class="editform" method="post" action="admin/delete_option">
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
    <i id="i_btn" class="material-icons text-center" ><button class="btn_add">add</button></i>
    <script>
	$(document).ready(function () {
	    $('#i_btn').click(function () {
		$(this).hide();
	    });
	});
    </script>
    <div id="form_add" >
        <form id="add_<?= $data['unit']; ?>" method="post" action="http://<?= $_SERVER['HTTP_HOST'] ?>/admin/add_<?= $data['unit']; ?>" enctype="multipart/form-data"></form>
        <table class="table">
            <tbody>
                <tr class="info">
                    <td id="td1">
                        <input form="add_<?= $data['unit']; ?>"  type="file" name="photo" class="addform btn btn-default" required placeholder="Photo">
                    </td>
                    <td id="td2">
                        <input form="add_<?= $data['unit']; ?>" name="name" type="text" required style="width: 90%" placeholder="Name">
                    </td>
                    <td id="td3" >
                        <textarea form="add_<?= $data['unit']; ?>" style="width: 90%; height: 100px;" name="description" required placeholder="Description"></textarea>
                    </td>
                    <td id="td4" >
                        <input form="add_<?= $data['unit']; ?>" class="btn btn-default" type="submit" name="add_<?= $data['unit']; ?>" value="Add <?= $data['unit']; ?>">
                    </td>
                </tr>
            </tbody>
        </table>
        </form>
    </div>
</div>
