<div class="modal fade" id="editk<?php echo $koment['id_komen']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Komentariu</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="edit.php?simu4=<?= $koment['id_komen']; ?>" enctype="multipart/form-data">


                <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">ID Komentariu :</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="id_art" value="<?= $koment['id_komen']; ?>" required readonly>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">ID Artigu :</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="id_art" value="<?= $koment['id_artigu']; ?>" required readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Naran :</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="naran" value="<?= $koment['naran']; ?>" required readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Email :</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="email" value="<?= $koment['email']; ?>" required readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Komentariu :</label>
                        <div class="col-sm-12">
                        <textarea name="konteudu" class="form-control" name="koment" rows="5" required readonly><?= $koment['koment'];?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Status :</label>
                        <div class="col-sm-12">
                        <select class="form-control" name="stat">
                                <?php $opsaun1 = $koment['estatuto']; ?>
                                <option value="Publika" <?php if ($opsaun1 == "Publika") echo 'selected = "selected"'; ?>>Publika</option>
                                <option value="La Publika" <?php if ($opsaun1 == "La Publika") echo 'selected = "selected"'; ?>>La Publika</option>
                            </select>
                        </div>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit">Renova</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Kansela</button>
            </div>
            </form>
        </div>
    </div>
</div>