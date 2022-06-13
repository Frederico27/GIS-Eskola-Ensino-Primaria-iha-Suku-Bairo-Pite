<!-- Script CKEditor nian -->
<script type="text/javascript" src="asset/ckeditor/ckeditor.js"></script>
<!-- Modal Aumenta Lista Eskola -->
<div class="modal fade" id="aumenta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aumenta Dados Eskola</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?php
            include "../koneksaun.php";
            $query = $conn->query("SELECT max(id_eskola) as id FROM eskola");
            while ($dadus = $query->fetch_array()) {
                $id = $dadus['id'];
                $nomor = (int) substr($id, 3, 3);
                $nomor++;
            ?>
                <div class="modal-body">
                    <form method="post" action="insert.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="naran" class="col-sm-12 control-label">ID Eskola :</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="id" value="<?php echo 'EBF' . $nomor; ?>" required readonly>
                            </div>
                        </div>
                    <?php } ?>


                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Naran Eskola :</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="naran_eskola" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Tipu Eskola :</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="tipu_eskola">
                                <option value="Publiku">Publiku</option>
                                <option value="Privadu">Privadu</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Kondisaun :</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="kondisaun_eskola">
                                <option value="Diak">Diak</option>
                                <option value="Ladiak">Ladiak</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">ID Populasaun :</label>
                        <div class="col-sm-12">
                            <?php
                            include "../koneksaun.php";
                            $sql = "SELECT max(id_populasaun) as id_popul FROM populasaun";
                            $hasil = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($hasil)) :
                                $id_popul = $data['id_popul'];
                                $nomor2 = (int) substr($id_popul, 4, 4);
                                $nomor2++;
                            ?>
                                <input type="text" class="form-control" name="id_popula" value="<?php echo 'EBFP' . $nomor2 ; ?>" required readonly>
                            <?php endwhile; ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Total Funsionariu Estadu:</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" name="func1" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Total Funsionariu Kontratadu:</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" name="func2" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Total Alunos:</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" name="alunos" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nama" class="col-sm-12 control-label">Imajen:</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" name="imajen" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-primary" name="submit">Aumenta</button>
                </div>
                </form>
        </div>
    </div>
</div>

<!-- Modal Aumenta Detallu no Hostpot -->

<div class="modal fade" id="aumenta2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aumenta Dados Detallu</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?php
            include "../koneksaun.php";
            $query2 = $conn->query("SELECT max(id_detallu) as id_det FROM detallu");
            while ($dadus2 = $query2->fetch_array()) {
                $id_det = $dadus2['id_det'];
                $id_det++;
            ?>
                <div class="modal-body">
                    <form method="post" action="insert.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="naran" class="col-sm-12 control-label">ID Detallu :</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="id2" value="<?php echo $id_det; ?>" required readonly>
                            </div>
                        </div>
                    <?php } ?>


                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">ID Eskola :</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="id_esc2">
                                <?php
                                include "../koneksaun.php";
                                $sql2 = "SELECT * FROM eskola";
                                $hasil2 = mysqli_query($conn, $sql2);
                                while ($data2 = mysqli_fetch_array($hasil2)) :
                                ?>
                                    <option value="<?= $data2['id_eskola']; ?>"><?= $data2['naran_eskola'] . " (" . $data2['id_eskola'] . ")"; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">ID Populasaun:</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="id_popula2">

                                <?php
                                include "../koneksaun.php";
                                $sql3 = "SELECT naran_eskola, id_populasaun FROM populasaun a, eskola b WHERE a.id_eskola = b.id_eskola";
                                $hasil3 = mysqli_query($conn, $sql3);
                                while ($data3 = mysqli_fetch_array($hasil3)) :
                                ?>
                                    <option value="<?= $data3['id_populasaun']; ?>"><?= $data3['id_populasaun'] . " - (" . $data3['naran_eskola'] . ")"; ?></option>
                                <?php endwhile; ?>

                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">ID Artikel:</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="id_artc2">

                                <?php
                                include "../koneksaun.php";
                                $sql4 = "SELECT * FROM artikel";
                                $hasil4 = mysqli_query($conn, $sql4);
                                while ($data4 = mysqli_fetch_array($hasil4)) :
                                ?>
                                    <option value="<?= $data4['id_artikel']; ?>"><?= $data4['id_artikel'] . " - (" . $data4['titulu'] . ")"; ?></option>
                                <?php endwhile; ?>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Latitude:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="lat" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Longitude:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="lng" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Lokalizasaun:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="lokal" value="" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-primary" name="submit2">Aumenta</button>
                </div>
                </form>
        </div>
    </div>
</div>


<!-- Modal Aumenta Artikel -->

<div class="modal fade" id="aumenta3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aumenta Dados Artikel</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?php
            include "../koneksaun.php";
            $query5 = $conn->query("SELECT max(id_artikel) as id_arct FROM artikel");
            while ($dadus5 = $query5->fetch_array()) {
                $id_arct = $dadus5['id_arct'];
                $nomor4 = (int) substr($id_arct, 4, 4);
                $nomor4++;
            ?>
                <div class="modal-body">
                    <form method="post" action="insert.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="naran" class="col-sm-12 control-label">ID Artikel :</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="id3" value="<?php echo "EBFA" . $nomor4; ?>" required readonly>
                            </div>
                        </div>
                    <?php } ?>


                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Titulu:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="titulu" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Konteudu:</label>
                        <div class="col-sm-12">
                            <textarea name="konteudu" class="ckeditor" id= ckedtor rows="5"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Status :</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="stat">
                                <option value="Publika">Publika</option>
                                <option value="La Publika">La Publika</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="naran" class="col-sm-12 control-label">Editor :</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="editor">


                                <?php
                                include "../koneksaun.php";
                                session_start();
                                $id_user = $_SESSION['id_user'];
                                $sql5 = "SELECT * FROM user WHERE id_user = '$id_user'";
                                $hasil5 = mysqli_query($conn, $sql5);
                                while ($data5 = mysqli_fetch_array($hasil5)) :
                                ?>
                                    <option value="<?= $data5['id_user']; ?>"><?= $data5['id_user'] . " - (" . $data5['naran'] . ")"; ?></option>
                                <?php endwhile; ?>

                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-primary" name="submit3">Aumenta</button>
                </div>
                </form>
        </div>
    </div>
</div>