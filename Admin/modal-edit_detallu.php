<div class="modal fade" id="editad<?php echo $dadus2['id_detallu']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edita Dadus Detallu</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="edit.php?simu3=<?= $dadus2['id_detallu']; ?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">ID Detallu :</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="id_det" value="<?= $dadus2['id_detallu']; ?>" required readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">ID Eskola :</label>
                        <div class="col-sm-12">
                        <input type="text" class="form-control" name="esc" value="<?= $dadus2['id_eskola']; ?>" required readonly>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">ID Populasaun:</label>
                        <div class="col-sm-12">
                        <input type="text" class="form-control" name="popul" value="<?= $dadus2['id_populasaun']; ?>" required readonly>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">ID Artikel:</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="artc">
                                <?php

                                $sql3 = "SELECT * FROM artikel";
                                $result3 = mysqli_query($conn, $sql3);
                                while ($row3 = mysqli_fetch_assoc($result3)) {
                                    $opsaun3 = $dadus2['id_artikel'];
                                    if ($row3['id_artikel'] == $opsaun3) {
                                        echo '<option value="' . $row3['id_artikel'] . '" selected>' . $row3['id_artikel'] . " - (" . substr_replace($row3['titulu'], "...", 15) . ")";
                                        '</option>';
                                    } else {
                                        echo '<option value="' . $row3['id_artikel'] . '">' . $row3['id_artikel'] . " - (" . substr_replace($row3['titulu'], "...", 15) . ")";
                                        '</option>';
                                    }
                                }
                                ?>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Latitude:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="lat" value="<?= $dadus2['latitude']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Longitude:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="lng" value=<?= $dadus2['longitude']; ?> required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Lokalizasaun:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="lokal" value="<?= $dadus2['lokalizasaun']; ?>" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit3">Renova</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Kansela</button>

            </div>
            </form>
        </div>
    </div>
</div>