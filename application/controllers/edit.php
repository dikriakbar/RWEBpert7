<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Mahasiswa</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('mahasiswa'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmEditMahasiswa', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="Nim" class="col-sm-2 col-form-label">Nim</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="IdMhsw" name="IdMhsw" value=" <?= $data_mahasiswa->IDmhs; ?>">
                            <input type="text" class="form-control" id="Nim" name="Nim" value=" <?= $data_mahasiswa->Nim; ?>">
                            <small class="text-danger">
                                <?php echo form_error('Nama') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nama" name="Nama" value=" <?= $data_mahasiswa->Nama; ?>">
                            <small class="text-danger">
                                <?php echo form_error('Nama') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="Alamat" name="Alamat" rows="3"><?= $data_mahasiswa->Alamat; ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('Alamat') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>