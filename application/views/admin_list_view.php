
<div class="container">

    <table class="table">
        <thead>
            <tr class="info">
                <th>Photo</th>
                <th>Actor</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <tr class="active">
                <td style="width: 20%"><img style="height: 150px;width: 150px" src="#" alt="addphoto"></td>
                <td style="width: 20%">
                    <textarea id="textArea1" style="max-width:600px; display: none; max-height: 300px; width: 600px; height: 150px;"></textarea>
                    <p class="edittext"> Lorem IMSUM
                    </p>
                </td>
                <td style="width: 35%">
                    IMSUMLorem IMSUMLorem IMSUMLorem IMSUMLorem IMSUMLorem IMSUMLorem IMSUMLorem IMSUMLorem IMSUM
                </td>
                <td  style="width: 25%">
                    <form style="display:inline">
                        <i class="material-icons">
                            <input class="input_edit" type="submit" name="edit" value="edit">
                        </i>
                        <i class="material-icons">
                            <input class="input_delee" type="submit" name="delete" value="delete">
                        </i>


                    </form>
                </td>

            </tr>

        </tbody>
    </table>
    <i class="material-icons"><button class="btn_add">add</button></i>
    <div id="form_add" style="display:none;">
        <form>
            New url photo:
            <div>

                <input type="text" name="newname">
            </div>
            New actor:
            <div>

                <input type="text" name="newname">
            </div>

            New description:
            <div>

                <textarea name="newcontent" style="max-width:600px;  max-height: 300px; width: 600px; height: 150px;"></textarea>
            </div>
            <div>
                <input type="submit" value="add">
            </div>
        </form>
    </div>
</div>
