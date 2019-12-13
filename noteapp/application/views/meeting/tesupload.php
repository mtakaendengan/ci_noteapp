<?php echo form_open_multipart('meeting/upload') ?>

<input type="text" name="no_report" id="no_report">
<input type="file" name="file1" id="file1">
<input type="file" name="file2" id="file2">
<button type="submit">Upload</button>
<?php echo form_close() ?>