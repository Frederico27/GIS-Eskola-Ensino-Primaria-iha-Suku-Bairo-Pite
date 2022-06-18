<div class="modal fade" id="editac<?php echo $dadus2['id_artikel']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Artigu</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="edit.php?simu2=<?= $dadus2['id_artikel'];?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">ID Artikel :</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="id_artc" value="<?= $dadus2['id_artikel']; ?>" required readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Titulu:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="titulu" value="<?= $dadus2['titulu']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Konteudu:</label>
                        <div class="col-sm-12">
                            <textarea name="konteudu" class="ckeditor" id=ckedtor rows="5"><?= $dadus2['konteudu']; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Status :</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="stat">
                                <?php $opsaun1 = $dadus2['status']; ?>
                                <option value="Publika" <?php if ($opsaun1 == "Publika") echo 'selected = "selected"'; ?>>Publika</option>
                                <option value="La Publika" <?php if ($opsaun1 == "La Publika") echo 'selected = "selected"'; ?>>La Publika</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Editor :</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="user" value="<?= $dadus2['id_user'] . '-' . $dadus2['naran']; ?>" required readonly>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit2">Renova</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Kansela</button>
            </div>
            </form>
        </div>
    </div>
</div>