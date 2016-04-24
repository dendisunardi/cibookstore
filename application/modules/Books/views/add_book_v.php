<div class="row">
<div class="col-md-12">
	<form method="POST" action="<?php echo base_url();?>Books/post_book">
	<div class="row">
		<div class="col-md-12">
		<label>Book Title</label>
		<input type="text" name="book_title" class="form-control">
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		<label>ISDN Number</label>
		<input type="text" name="book_isdn" class="form-control">
		</div>

		<div class="col-md-12">
		<label>Year of Publication</label>
		<input type="text" name="book_yop" class="form-control">
		</div>

		<div class="col-md-12">
		<label>Book Genre</label>
		<select name="book_genreid" class="form-control select2">
			<option>Select a Genre</option>
		</select>
		</div>

		<div class="col-md-12">
		<label>Publisher</label>
		<select name="book_publisher" class="form-control select2">
			<option>Select a publisher</option>
		</select>
		</div>

		<div class="col-md-12">
		<label>Author</label>
		<select name="authors[]" class="form-control select2">
			<?php echo $authors; ?>
		</select>
		</div>

		<div class="col-md-12">
		<label>Book Title</label>
		<input type="text" name="book_title" class="form-control">
		</div>

		<div class="col-md-12">
		<input type="file" name="book_images" multiple>
		</div>

		<div class="col-md-12">
		<botton class="btn btn-primary btn-large">Save Details</botton>
		</div>
	</div>
	</form>
</div>
</div>