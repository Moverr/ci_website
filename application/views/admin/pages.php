<section>
<?php

if(isset($data['page'])){
    ?>
 
    
   
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
        <h5 style="text-transform:uppercase">  <?= $data['page']; ?>  </h5>

			<form role="form">
				<div class="form-group">
					 
					<label for="titleinput">
						Title
					</label>
					<input type="text" class="form-control" id="titleinput" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Details : 
					</label>
					 <textarea  class="form-control"  rows="10">
                     </textarea>
				</div>
			  
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
	 
</div>

    

    <?php  
    } 
    ?>

</section>


