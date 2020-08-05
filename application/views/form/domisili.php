<div style="display: none;" id="domisili1" class="form-group">
    <label for="exampleInputFile">Upload Gambar KK (Penjamin)</label>
    <div class="custom-file">
        <input name="domisili_kk" type="file" class="custom-file-input <?php echo form_error('domisili_kk') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
        <label class="custom-file-label" for="exampleInputFile">Masukkan File KK Penjamin</label>
        <div class="invalid-feedback">
            <?php echo form_error('domisili_kk') ?>
        </div>
    </div>
</div>

<div style="display: none;" id="domisili2" class="form-group">
    <label for="exampleInputFile">Upload Surat Ket. Lahir</label>
    <div class="custom-file">
        <input name="domisili_lahir" type="file" class="custom-file-input <?php echo form_error('domisili_lahir') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
        <label class="custom-file-label" for="exampleInputFile">Masukkan File Surat Ket. Lahir</label>
        <div class="invalid-feedback">
            <?php echo form_error('domisili_lahir') ?>
        </div>
    </div>
</div>

<div style="display: none;" id="domisili3" class="form-group">
    <label for="exampleInputFile">Upload Surat Nikah / Akte Nikah</label>
    <div class="custom-file">
        <input name="domisili_nikah" type="file" class="custom-file-input <?php echo form_error('domisili_nikah') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
        <label class="custom-file-label" for="exampleInputFile">Masukkan File Surat Nikah</label>
        <div class="invalid-feedback">
            <?php echo form_error('domisili_nikah') ?>
        </div>
    </div>
</div>