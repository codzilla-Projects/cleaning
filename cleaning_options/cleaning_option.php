<?php 

function main_content_area_callback(){

	$wp_editor_settings = array( 

		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue

		'textarea_rows'=> 2

	);    

	if( isset( $_POST['cl_save'] ) && !empty( $_POST['cl_save']) ){

		foreach ($_POST as $key => $value) {

			if(in_array($key,['cl_map_code','cl_copyright'])){

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
				<h1 class="text-center cl-title"><span>الاعدادات العامة </span></h1>
			</header>
		</div>
			<br/>
		<div class="col-sm-3 col-md-3 col-lg-3 pr-0">

			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<a class="nav-link text-right active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">الشعارات</a>

				<a class="nav-link text-right" id="v-pills-secondsection-tab" data-toggle="pill" href="#v-pills-secondsection" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">تواصل معنا </a>

				<a class="nav-link text-right" id="v-pills-thirdsection-tab" data-toggle="pill" href="#v-pills-thirdsection" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">التواصل الاجتماعي </a>

				<a class="nav-link text-right" id="v-pills-fourthsection-tab" data-toggle="pill" href="#v-pills-fourthsection" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">الالوان  </a>

			</div>

		</div>

		<div class="col-sm-9 col-md-9 col-lg-9 gray_back pl-0">

	  		<form class="form-horizontal" method="post" action="#">

			    <div class="tab-content" id="v-pills-tabContent">

			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

						<div class="form-group">

						  <label for="cl_website_logo" class="col-sm-12 text-right control-label text-right text-white">صورة الهوية أو الشعار</label>

						  <div class="col-sm-12 text-right">

						    <input class="first_img_url cl_half" type="text" name="cl_logo_img" size="60" value="<?php echo get_option('cl_logo_img'); ?>">

						    <a href="#" class="first_img_upload btn btn-info">أختر </a>

						    <img dir="rtl" class="first_img rounded img-fluid" src="<?php echo get_option('cl_logo_img'); ?>" height="100" style="max-width:100%" />

						  </div>

						</div>
                        <div class="form-group">

							<label for="cl_copyright" class="col-sm-12 text-right control-label text-right text-white">حقوق الطبع والنشر </label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('cl_copyright'), 'cl_copyright',  array('textarea_rows'=>5,'textarea_name'=> 'cl_copyright', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'cl_copyright','class'=>'form-control text-right',) );  ?>

							</div>

						</div>	
                        

			        </div>

			        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

						<div class="form-group">

							<label for="cl_phone" class="col-sm-12 text-right control-label text-right text-white">رقم الهاتف </label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control text-right" id="cl_phone" name="cl_phone" value="<?php echo get_option('cl_phone'); ?>">

							</div>

						</div>	

						<div class="form-group">

							<label for="cl_email" class="col-sm-12 text-right control-label text-right text-white">البريد الاليكتروني </label>

							<div class="col-sm-12 text-right">

								<input type="email" class="form-control text-right" id="cl_email" name="cl_email" value="<?php echo get_option('cl_email'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="cl_location" class="col-sm-12 text-right control-label text-right text-white">العنوان </label>

							<div class="col-sm-12 text-right">

								<input type="location" class="form-control text-right" id="cl_location" name="cl_location" value="<?php echo get_option('cl_location'); ?>">

							</div>

						</div>

				    </div>	      

					<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

						<div class="form-group">

							<label for="cl_fb" class="col-sm-12 text-right control-label text-right text-white">فيسبوك </label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control text-right" id="cl_fb" name="cl_fb" value="<?php echo get_option('cl_fb'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="cl_twitter" class="col-sm-12 text-right control-label text-right text-white">تويتر </label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control text-right" id="cl_twitter" name="cl_twitter" value="<?php echo get_option('cl_twitter'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="cl_insta" class="col-sm-12 text-right control-label text-right text-white">انستجرام</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control text-right" id="cl_insta" name="cl_insta" value="<?php echo get_option('cl_insta'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="cl_pinterest" class="col-sm-12 text-right control-label text-right text-white">بينتيريست</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control text-right" id="cl_pinterest" name="cl_pinterest" value="<?php echo get_option('cl_pinterest'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="cl_youtube" class="col-sm-12 text-right control-label text-right text-white">يوتيوب </label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control text-right" id="cl_youtube" name="cl_youtube" value="<?php echo get_option('cl_youtube'); ?>">

							</div>

						</div>

					</div>

					<div class="tab-pane fade" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

						<div class="form-group mt-4">

							<label for="cl_primaryColor" class="col-sm-12 text-right control-label text-right text-white">اللون الاول </label>

							<div class="col-sm-12 text-right">

								<input style="width: 5%;" type="color" class="form-control text-right float-right" id="primaryColor" name="cl_primaryColor" value="<?php echo get_option('cl_primaryColor'); ?>">
								<span style="letter-spacing: 1.3px; text-transform: uppercase;" dir="ltr" class="float-right text-white mr-2 mt-2"><?php echo get_option('cl_primaryColor'); ?></span>

							</div>

						</div>

						<div class="form-group mb-4">

							<label for="cl_secondaryColor" class="col-sm-12 text-right control-label text-right text-white">اللون الثانى  </label>

							<div class="col-sm-12 text-right">

								<input style="width: 5%;" type="color" class="form-control text-right float-right" id="secondaryColor" name="cl_secondaryColor" value="<?php echo get_option('cl_secondaryColor'); ?>">
								<span style="letter-spacing: 1.3px; text-transform: uppercase;" class="float-right text-white mr-2 mt-2"><?php echo get_option('cl_secondaryColor'); ?></span>

							</div>

						</div>
                        
                        <div class="form-group mb-4">

							<label for="cl_serviceDetailsBackgroun" class="col-sm-12 text-right control-label text-right text-white">لون خلفية تفاصيل الخدمة  </label>

							<div class="col-sm-12 text-right">

								<input style="width: 5%;" type="color" class="form-control text-right float-right" id="cl_serviceDetailsBackgroun" name="cl_serviceDetailsBackgroun" value="<?php echo get_option('cl_serviceDetailsBackgroun'); ?>">
								<span style="letter-spacing: 1.3px; text-transform: uppercase;" class="float-right text-white mr-2 mt-2"><?php echo get_option('cl_serviceDetailsBackgroun'); ?></span>

							</div>

						</div>
                        <div class="form-group mb-4">

							<label for="cl_fontColor" class="col-sm-12 text-right control-label text-right text-white"> لون الخط فى المقالة  </label>

							<div class="col-sm-12 text-right">

								<input style="width: 5%;" type="color" class="form-control text-right float-right" id="cl_fontColor" name="cl_fontColor" value="<?php echo get_option('cl_fontColor'); ?>">
								<span style="letter-spacing: 1.3px; text-transform: uppercase;" class="float-right text-white mr-2 mt-2"><?php echo get_option('cl_fontColor'); ?></span>

							</div>

						</div>
					</div>

			    </div>

				<div class="form-group mt-4">

					<div class="col-sm-12">

					<input type="submit" class="btn btn-default btn-block btn-lg cl_save_route" name="cl_save" value="حفظ الاعدادات ">

					</div>

				</div>

			</form>

	 	</div>

	</div>

</div><!-- /container -->

<?php

}