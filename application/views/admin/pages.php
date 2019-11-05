<section>

<script type="text/javascript" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
   

<script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>


<?php

if(isset($data['page'])){

	// var_dump($data['list']);
    ?>
 
 <form action="save" method="post">

    
   
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
        <h5 style="text-transform:uppercase">  <?= $data['page']; ?>  </h5>

			<form role="form">
				<div class="form-group">
					 
					<label for="titleinput">
						Title
					</label>
					<input type="text"  value="<?=$data['list']['title']; ?>" class="form-control" id="titleinput" />
					<input type="text"  value="<?=$data['page']; ?>" class="form-control" id="titleinput" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Details : 
					</label>
					 <textarea  class="form-control"  rows="50" name="content" id="editor" ><?=$data['list']['body']; ?></textarea>
				</div>
			  
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
	 
</div>

</form>


    <?php  
    } 
    ?>

</section>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>