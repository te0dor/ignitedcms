<div class="pmf-container" style="margin-left:auto; margin-right:auto; margin-top:30px; max-width:1170px; min-height:800px; ">
	<div class="row" style="margin-left:30px; margin-right:30px;">
		<div class="col-sm-12">
		    <header class="panel-heading font-bold">Add a Page</header>
		    <section class="panel">
		        
		        <div class="panel-body">
		        	<?php $atts= array( 'data-validate'=>'parsley'); echo form_open_multipart('pages/add_page',$atts); ?>
		        	
		        	<div class="form-group">
		        	    <label>Page Name</label>
		        	    <input name="name" type="text" data-required="true" data-maxlength="20" class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top" title="Page name" value="">
		        	</div>
		        	<button type="submit" class="btn btn-purplet btn-s-xs " id="">Save</button>
		        	

		        	<?php echo form_close(); ?>
		        </div>
		    </section>
		</div>
		
	</div>


</div>