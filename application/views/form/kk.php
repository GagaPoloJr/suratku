<div style="display: none;" id="kk1" class="form-group">
    <label for="exampleInputFile">Upload Surat Pindah dari Daerah Asal*</label>
    <div class="custom-file">
        <input name="kk[]" type="file" class="custom-file-input <?php echo form_error('kk[]') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
        <label class="custom-file-label" for="exampleInputFile">Masukkan Surat (jika diluar LBB)</label>
        <div class="invalid-feedback">
            <?php echo form_error('kk[]') ?>
        </div>
    </div>
</div>
<div style="display: none;" id="kk2" class="form-group">
    <label for="exampleInputFile">Upload Surat Nikah*</label>
    <div class="custom-file">
        <input name="kk[]" type="file" class="custom-file-input <?php echo form_error('kk[]') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
        <label class="custom-file-label" for="exampleInputFile">Masukkan Surat/Akte Nikah</label>
        <div class="invalid-feedback">
            <?php echo form_error('kk[]') ?>
        </div>
    </div>
</div>