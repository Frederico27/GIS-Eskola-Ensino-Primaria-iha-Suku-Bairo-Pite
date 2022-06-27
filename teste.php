<?php
            include "koneksaun.php";
            $query = $conn->query("SELECT * FROM eskola a, populasaun b, artikel c, detallu d WHERE a.id_eskola = d.id_eskola AND b.id_populasaun = d.id_populasaun AND c.id_artikel = d.id_artikel");
            while ($dadus = $query->fetch_array()) {
              $lng   = $dadus['longitude'];
              $lat   = $dadus['latitude'];
              $naran = $dadus['naran_eskola'];
              $img   = $dadus['imajen'];
              $tipu  = $dadus['tipu_eskola'];
              $kond  = $dadus['kondisaun'];
              $func1 = $dadus['funsionariu_estadu'];
              $func2 = $dadus['funsionariu_kontratadu'];
              $aln   = $dadus['total_alunos'];
              $id_artc = $dadus['id_artikel'];
            }
