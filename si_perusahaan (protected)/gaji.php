<!DOCTYPE html>
<html lang="en">
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Gaji</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Wages</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                            </div>
                                    <?php
                                    $ambilsemuadatagaji = mysqli_query($conn,"select * from gaji g, karyawan k where k.idkaryawan = g.idkaryawan");
                                    $i = 1;
                                    while($data=mysqli_fetch_array($ambilsemuadatagaji)){
                                        $idg = $dat

                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$idkaryawan;?></td>
                                            <td><?=$jabatan;?></td>
                                            <td>Rp. <?=number_format($jmlgaji);?></td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$idg;?>">
                                                Edit
                                                </button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?=$idg;?>">
                                                Delete
                                          <div class="modal fade" id="delete<?=$idg;?>">
                                            <div class="modal-dialog">
                                            <div class="modal-content">

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
                <footer class="py-4 bg-lig
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
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https:/

        <?php
                $ambilsemuadatanya = mysqli_query($conn, "select * from karyawan");
                while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                    $namakaryawannya = $fetcharray['namakaryawan'];
                    $idkaryawannya = $fetcharray['idkaryawan'];
        ?>
            <option value="<?=$idkaryawannya;?>"><?=$namakaryawannya;?></option>

            <?php
                }
            ?>
        </select><br>

        </div>
    </div>

</html>
