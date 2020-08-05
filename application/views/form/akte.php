<div style="display: none;" id="akte_lahir1" class="form-group">
    <label for="exampleInputFile">Upload Gambar KTP Ayah/Ibu*</label>
    <div class="custom-file">
        <input name="ktp_ayah" type="file" class="custom-file-input <?php echo form_error('ktp_ayah') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
        <label class="custom-file-label" for="exampleInputFile">Masukkan File Gambar KTP Ayah /Ibu</label>
        <div class="invalid-feedback">
            <?php echo form_error('ktp_ayah') ?>
        </div>
    </div>
</div>

<div style="display: none;" id="akte_lahir2" class="form-group">
    <label for="exampleInputFile">Upload Gambar KTP (Saksi 1)*</label>
    <div class="custom-file">
        <input name="ktp_saksi" type="file" class="custom-file-input <?php echo form_error('ktp_saksi') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
        <label class="custom-file-label" for="exampleInputFile">Masukkan File Gambar KTP Saksi Ke 1</label>
        <div class="invalid-feedback">
            <?php echo form_error('ktp_saksi') ?>
        </div>
    </div>
</div>

<div style="display: none;" id="akte_lahir3" class="form-group">
    <label for="exampleInputFile">Upload Gambar KTP (Saksi ke 2)*</label>
    <div class="custom-file">
        <input name="ktp_saksi_1" type="file" class="custom-file-input <?php echo form_error('ktp_saksi') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
        <label class="custom-file-label" for="exampleInputFile">Masukkan File Gambar KTP Saksi Ke 2</label>
        <div class="invalid-feedback">
            <?php echo form_error('ktp_saksi_1') ?>
        </div>
    </div>
</div>

<div style="display: none;" id="akte_lahir4" class="form-group">
    <label for="exampleInputFile">Upload Surat Ket. Lahir*</label>
    <div class="custom-file">
        <input name="lahir" type="file" class="custom-file-input <?php echo form_error('lahir') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
        <label class="custom-file-label" for="exampleInputFile">Masukkan Surat Keterangan Lahir dari Bidan/ rumah sakit</label>
        <div class="invalid-feedback">
            <?php echo form_error('lahir') ?>
        </div>
    </div>
</div>


<div style="display: none;" id="akte_lahir5" class="form-group">
    <label for="exampleInputFile">Upload Surat Nikah*</label>
    <div class="custom-file">
        <input name="nikah" type="file" class="custom-file-input <?php echo form_error('nikah') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
        <label class="custom-file-label" for="exampleInputFile">Masukkan Surat Nikah / akte nikah catatan sipil</label>
        <div class="invalid-feedback">
            <?php echo form_error('nikah') ?>
        </div>
    </div>
</div>