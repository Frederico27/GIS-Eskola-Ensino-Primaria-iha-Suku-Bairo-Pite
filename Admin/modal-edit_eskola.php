<div class="modal fade" id="edita<?php echo $dadus['id_eskola']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Dadus Eskola</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="edit.php?simu1=<?= $dadus['id_eskola']; ?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">ID Eskola :</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="id" value="<?= $dadus['id_eskola']; ?>" required readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Naran Eskola :</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="naran_eskola" value="<?= $dadus['naran_eskola']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Tipu Eskola :</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="tipo">
                                <?php $opsaun1 = $dadus['tipu_eskola']; ?>
                                <option value="Publiku" <?php if ($opsaun1 == "Publiku") echo 'selected = "selected"'; ?>>Publiku</option>
                                <option value="Privadu" <?php if ($opsaun1 == "Privadu") echo 'selected = "selected"'; ?>>Privadu</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Kondisaun :</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="kondisaun">
                                <?php $opsaun2 = $dadus['kondisaun']; ?>
                                <option value="Diak" <?php if ($opsaun2 == "Diak") echo 'selected = "selected"'; ?>>Diak</option>
                                <option value="Ladiak" <?php if ($opsaun2 == "Ladiak") echo 'selected = "selected"'; ?>>Ladiak</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">ID Populasaun :</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="id_popula" value="<?= $dadus['id_populasaun']; ?>" required readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Total Funsionariu Estadu:</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" name="func1" value="<?= $dadus['funsionariu_estadu']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Total Funsionariu Kontratadu:</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" name="func2" value="<?= $dadus['funsionariu_kontratadu']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Total Alunos:</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" name="alunos" value="<?= $dadus['total_alunos']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Imajen Tuan:</label>
                        <div class="col-sm-12">
                            <img src="asset/imajen/<?php echo $dadus['imajen'] ?>" width="150px" height="120px" /><br><br>
                            <input type="file" class="form-control" name="imajen" required>

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


    