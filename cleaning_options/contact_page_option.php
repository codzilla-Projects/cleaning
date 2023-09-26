<?php 
function contact_page_content_callback(){
	   
if( isset( $_POST['cl_save'] ) && !empty( $_POST['cl_save']) ){

		foreach ($_POST as $key => $value) {		

			if(in_array($key,['contact_content'])){

				$value = stripcslashes($value);

			}

			update_option( $key, $value);

		}

	}

?>

<div dir="rtl" class="container-fluid text-right padding-right-4">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 bg-col12">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center cl-title"><span> اعدادات صفحة تواصل معنا  </span></h1>
			</header>
		</div>
		<br/>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 pr-0 gray_back">
			<form class="form-horizontal" method="post" action="#">
				<div class="form-group">
					<label for="contact_map" class="col-sm-12 control-label text-right text-white">لينك الخريطة </label>
					<div class="col-sm-12 text-right">
						<input type="text" class="form-control" id="contact_map" name="contact_map" value="<?php echo get_option('contact_map'); ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="contact_title" class="col-sm-12 control-label text-right text-white">العنوان </label>
					<div class="col-sm-12 text-right">
						<input type="text" class="form-control" id="contact_title" name="contact_title" value="<?php echo get_option('contact_title'); ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="contact_content" class="col-sm-12 control-label text-right text-white">المحتوى</label>
					<div class="col-sm-12 text-right">
	                    <?php wp_editor( get_option('contact_content'), 'contact_content',  array('textarea_rows'=>5,'textarea_name'=> 'contact_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact_content','class'=>'form-control text-right',) );  ?>
					</div>
				</div>

				<div class="form-group">
					<label for="contact_location" class="col-sm-12 control-label text-right text-white">عنوان الشركة </label>
					<div class="col-sm-12 text-right">
						<input type="text" class="form-control" id="contact_location" name="contact_location" value="<?php echo get_option('contact_location'); ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="contact_email" class="col-sm-12 control-label text-right text-white">البريد الاليكتروني </label>
					<div class="col-sm-12 text-right">
						<input type="email" class="form-control text-right" id="contact_email" name="contact_email" value="<?php echo get_option('contact_email'); ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="contact_phone" class="col-sm-12 control-label text-right text-white">الهاتف </label>
					<div class="col-sm-12 text-right">
						<input type="text" class="form-control" id="contact_phone" name="contact_phone" value="<?php echo get_option('contact_phone'); ?>">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-12 text-right">
					<input type="submit" class="btn btn-default btn-block btn-lg cl_save_route" name="cl_save" value="حفظ الاعدادات ">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
}