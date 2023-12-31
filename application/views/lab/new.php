<div class="row">
  <div class="col col-md-8 well well-sm">
    <?php echo form_open('test/new_test',array("id"=>"newTestForm", "role"=>"form",)); ?>
      <fieldset>
        <legend>- Test Information:</legend>
        <div id="test_info">
          <?php echo ( !empty($error) ? $error : '' ); ?>
          <div class="form-group">
            <div class="col-md-6"><input type="text" name='test_name_en' id="test_name_en" value="<?php echo $this->input->post('test_name_en');?>" class='form-control' placeholder='Test Name' title='Test Name' required autofocus /></div>
          </div>
          <div class="form-group">
            <div class="col-md-6"><input type="text" name='category' id='category' value="<?php echo $this->input->post('category');?>" class='form-control' placeholder='Category' title='Category' /></div>
            <div class="col-md-6"><input type="number" name='price' id='price' value="<?php echo $this->input->post('price');?>" class='form-control' placeholder='Price(AF)' title='Price (AF)' required /></div>
          </div>
          <div class="clearfix"></div>
      </fieldset>
      <fieldset>
        <legend>- Memo:</legend>
        <div id="memo_fieldset">
          <div class="form-group">
            <div class="col-md-12"><textarea name="memo" id="memo" class="form-control" rows="10"><?php echo $this->input->post('memo');?></textarea>
          </div>
        </div>
      </fieldset>
      <div class="form-group">
        <div class="col-md-6"><input type="submit" name='submit' id='submit' value='Register' class="form-control btn btn-info" /></div>
        <div class="col-md-6"><?php echo anchor('test','Cancel',array('class'=>'form-control btn btn-info'));?></div>
      </div>
    <?php echo form_close(); ?>
  </div>
</div>
<script>
  $(document).ready(function(){

  });
</script>