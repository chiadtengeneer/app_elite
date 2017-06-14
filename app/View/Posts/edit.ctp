<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('view/products/jquery.multifile');?>
<?php echo $this->Html->script('view/products/product');?>
<?php echo $this->Html->css('view/product/product');?>
<!-- Create product -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <!-- Zero Configuration Table -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <?php echo $this->Html->link ( 'Oder', array (
            'controller' => 'posts',
            'action' => 'index'
          ) ); ?> / 
          <a href="">Update</a>
        </div>
        <div class="panel-body">
          <?php echo $this->Form->create('Post', array('enctype' => 'multipart/form-data', 'class' => 'sky-form')); ?>
            <div class="col-md-12">
            <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Status</label>
                <div class="col-md-10">
                  <?php
		echo $this->Form->input ( 'status', array (
				'name' => 'data[Post][status]',
				'id' => 'status',
				'label' => false,
				'div' => false,
				'class' => 'form-control',
				'type' => 'select',
				'options' => array (
						'Oder',
						"Shipped but didn't pay money yet",
						'Shipped and Paid Money' 
				),
				'value' => $Post['Post']['status'],
				'placeholder' => __ ( 'status' ) 
		) );
		?>
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Name</label>
                <div class="col-md-10">
                  <input name="data[Post][name]" placeholder="Name" maxlength="200" type="text" id="Name" class="form-control input-sm" required="required" value="<?php echo $Post['Post']['name']; ?>">
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Phone</label>
                <div class="col-md-10">
                  <input name="data[Post][phone]" placeholder="Phone" maxlength="200" type="text" id="Phone" class="form-control input-sm" required="required" value="<?php echo $Post['Post']['phone']; ?>">
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Address</label>
                <div class="col-md-10">
                  <input name="data[Post][address]" placeholder="Address" maxlength="200" type="text" id="Address" class="form-control input-sm" required="required" value="<?php echo $Post['Post']['address']; ?>">
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Pizza</label>
                <div class="col-md-10">
                
                  <input name="data[Post][pizza]" placeholder="Pizza" maxlength="200" type="text" id="Pizza" class="form-control input-sm" required="required" value="<?php echo $Post['Post']['pizza']; ?>">
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Cheese</label>
                <div class="col-md-10">
                <?php
		
		echo $this->Form->input ( 'cheese', array (
				'name' => 'data[Post][cheese]',
				'id' => 'cheese',
				'label' => false,
				'div' => false,
				'class' => 'form-control',
				'type' => 'select',
				'options' => array (
						'None',
						'Less cheese',
						'Just enough cheese',
						'Plenty of cheese' 
				),
				'value' => $Post['Post']['cheese'],
				'placeholder' => __ ( 'Do you eat extra cheese ...' ) 
		) );
		?>
                </div>
              </div>
              <div class="row mgbt20">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-10">
                  <button type="submit" class="btn btn-primary btn-sm"><?php echo __('Update')?></button>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
