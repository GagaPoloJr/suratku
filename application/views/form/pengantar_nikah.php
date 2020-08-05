<div style="display: none;" id="pengantar_nikah1" class="form-group">
    <label for="exampleInputFile">Upload Gambar KTP Suami*</label>
    <div class="custom-file">
        <input name="ktp_ayah" type="file" class="custom-file-input <?php echo form_error('ktp_suami') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
        <label class="custom-file-label" for="exampleInputFile">Masukkan File Gambar KTP Suami</label>
        <div class="invalid-feedback">
            <?php echo form_error('ktp_suami') ?>
        </div>
    </div>
</div>

<div style="display: none;" id="pengantar_nikah2" class="form-group">
    <label for="exampleInputFile">Upload Gambar KTP Istri*</label>
    <div class="custom-file">
        <input name="ktp_istri" type="file" class="custom-file-input <?php echo form_error('ktp_istri') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
        <label class="custom-file-label" for="exampleInputFile">Masukkan File Gambar KTP Istri</label>
        <div class="invalid-feedback">
            <?php echo form_error('ktp_istri') ?>
        </div>
        
    </div>
</div>


<!-- belum -->