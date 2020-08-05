<div style="display: none;" id="domisili1" class="form-group">
    <label for="exampleInputFile">Upload Gambar KK (Penjamin)</label>
    <div class="custom-file">
        <input name="usaha_kk" type="file" class="custom-file-input <?php echo form_error('domisili_kk') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
        <label class="custom-file-label" for="exampleInputFile">Masukkan File KK Penjamin</label>
        <div class="invalid-feedback">
            <?php echo form_error('domisili_kk') ?>
        </div>
    </div>