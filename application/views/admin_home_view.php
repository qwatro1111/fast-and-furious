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
    		<td id="td01">
    		    <input form="editform<?= $row['id'] ?>" name="name" type="text" value="<?= $row['name'] ?>" required class="nameoption"   >
    		</td>
    		<td id="td02">
    		    <textarea form="editform<?= $row['id'] ?>" name="value"   required><?= $row['value'] ?></textarea>
    		</td>
    		<td id="td03">
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
    <i id="i_btn" class="material-icons text-center""><button class="btn_add">add</button></i>
    <script>
	$(document).ready(function () {
	    $('#i_btn').click(function () {
		$(this).hide();
	    });
	});
    </script>
    <div id="form_add" >
        <form id="add_form" method="post" action="admin/add_option">
            <table class="table">
                <tbody>
                    <tr class="info">
                        <td >
                            <input name="name"   type="text" required  placeholder="Name of option">
                        </td>
                        <td>
                            <textarea  name="value" required placeholder="Value of option"></textarea>
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
