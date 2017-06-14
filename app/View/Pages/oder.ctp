
<?php
echo $this->Form->create ( "Oder", array (
		'url' => array (
				'controller' => 'posts',
				'action' => 'add' 
		),
		'class' => 'contact-form',
		'role' => 'form' 
) );
?>
<div class="form-group">
    <?php
				
				echo $this->Form->input ( 'name', array (
						'name' => 'name',
						'id' => 'name',
						'label' => 'Name',
						'div' => false,
						'class' => 'form-control',
						'type' => 'text',
						'placeholder' => __ ( 'Name' ) 
				) );
				?>
  </div>
<div class="form-group">
	 <?php
		
		echo $this->Form->input ( 'phone', array (
				'name' => 'phone',
				'id' => 'phone',
				'label' => 'Phone',
				'div' => false,
				'class' => 'form-control',
				'type' => 'text',
				'placeholder' => __ ( 'Phone' ) 
		) );
		?>
</div>
<div class="form-group">
	 <?php
		
		echo $this->Form->input ( 'adress', array (
				'name' => 'adress',
				'id' => 'adress',
				'label' => 'Adress',
				'div' => false,
				'class' => 'form-control',
				'type' => 'text',
				'placeholder' => __ ( 'adress' ) 
		) );
		?>
</div>

<!--  Start Product -->
<div class="row">
	<div class="col-md-6">
		<img class="img-responsive"
			src="<?php echo $base_url;?>/img/product/product-4.png" alt="PIZZA"
			style="width: 100%;">
		<div class="form-group">
	 <?php
		
		echo $this->Form->input ( 'pizza', array (
				'name' => 'pizza',
				'id' => 'pizza',
				'label' => 'How many slice of pizza:',
				'div' => false,
				'class' => 'form-control',
				'type' => 'number',
				'placeholder' => __ ( 'How many slice of pizza:' ) 
		) );
		?>
</div>
	</div>
	<div class="col-md-6">
		<img src="<?php echo $base_url;?>/img/product/product-7.png"
			alt="PIZZA" style="width: 100%;">
		<div class="form-group">
	 <?php
		
		echo $this->Form->input ( 'cheese', array (
				'name' => 'cheese',
				'id' => 'cheese',
				'label' => 'Do you eat extra cheese :',
				'div' => false,
				'class' => 'form-control',
				'type' => 'select',
				'options' => array (
						'None',
						'Less cheese',
						'Just enough cheese',
						'Plenty of cheese' 
				),
				'placeholder' => __ ( 'Do you eat extra cheese ...' ) 
		) );
		?>
</div>
	</div>
</div>

<!-- End Product -->

<button type="submit" class="btn btn-success btn-send">Oder!!!</button>
<hr>