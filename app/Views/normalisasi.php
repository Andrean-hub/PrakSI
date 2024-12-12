<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hasil Perhitungan Preferensi Metode Weight Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Perhitungan Preferensi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Hasil Preferensi -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Hasil Perhitungan Preferensi</h3>
                        </div>
                        <div class="card-body">   
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Alternatif</th>
                                        <th>Vector S IPA</th>
                                        <th>Vector S IPS</th>
                                        <th>Vector V IPA</th>
                                        <th>Vector V IPS</th>
                                        <th>Hasil Akhir (Jurusan)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($preferensi as $row) {
                                        echo "<tr>
                                            <td>{$no}</td>
                                            <td>{$row['nama_alternatif']}</td>
                                            <td>{$row['S_ipa']}</td>
                                            <td>{$row['S_ips']}</td>
                                            <td>{$row['V_ipa']}</td>
                                            <td>{$row['V_ips']}</td>
                                            <td>{$row['jurusan']}</td>
                                        </tr>";
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
