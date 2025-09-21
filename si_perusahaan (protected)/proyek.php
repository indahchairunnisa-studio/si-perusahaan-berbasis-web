<!DOCTYPE html>
<html lang="en">
    <body class="sb-nav-fixed">

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                            <a class="nav-link" href="logout.php">
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Proyek</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Project</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                            Tambah Proyek
                            </button>
                            <a href="exportproyek.php" class="btn btn-info">Export Data</a>
                            </div>
                            <div class="card-body">
                                    <tbody>

                                    <?php
                                    $ambilsemuadataproyek = mysqli_query($conn,"select * from proyek p, karyawan k where k.idkaryawan = p.idkaryawan");
                                    $i = 1;
                                    while($data=mysqli_fetch_array($ambilsemuadataproyek)){
                                        $idp = $data['idproyek'];
                                        $idkaryawan = $data['namakaryawan'];
                                        $namaproyek = $data['namaproyek'];
                                        $tglmulai = $data['tanggal_mulai'];
                                        $tglselesai = $data['tanggal_selesai'];
                                    ?>

                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$idkaryawan;?></td>
                                            <td><?=$namaproyek;?></td>
                                            <td><?=$tglmulai;?></td>
                                            <td><?=$tglselesai;?></td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$idp;?>">
                                                Edit
                                                </button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?=$idp;?>">
                                                Delete
                                                </button>
                                            </td>
                                        </tr>

                                            <!-- Edit Modal Proyek -->
                                        <div class="modal fade" id="edit<?=$idp;?>">
                                            <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Edit Proyek</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <form method="post">
                                            <div class="modal-body">
                                            <input type="text" name="namaproyek" value="<?=$namaproyek;?>" class="form-control" required> 
                                            <br>
                                            <input type="date" name="tanggal_mulai" value="<?=$tglmulai;?>" class="form-control" required>
                                            <br>
                                            <input type="date" name="tanggal_selesai" value="<?=$tglselesai;?>" class="form-control" required>
                                            <br>
                                            <input type="hidden" name="idp" value="<?=$idp;?>">
                                            <button type="submit" class="btn btn-primary" name="updateproyek">Edit Data</button>
                                            </form>

                                            </div>
                                            </div>
                                            </div>
                                        </div>

                                            <!-- Delete Modal Proyek -->
                                        <div class="modal fade" id="delete<?=$idp;?>">
                                            <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Hapus Data Proyek Ini</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <form method="post">
                                            <div class="modal-body">
                                            Apakah Anda Yakin Ingin Menghapus Data <?=$namaproyek;?>?
                                            <input type="hidden" name="idp" value="<?=$idp;?>">
                                            <br><br>
                                            <button type="submit" class="btn btn-danger" name="deleteproyek">Delete</button>
                                            </form>

                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                        <?php
                                         };
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>

</html>
