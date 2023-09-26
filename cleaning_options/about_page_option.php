<?php 
function about_page_content_callback(){
	   
if( isset( $_POST['cl_save'] ) && !empty( $_POST['cl_save']) ){

		foreach ($_POST as $key => $value) {		

			if(in_array($key,['about_first_content','about_first_ser_one_content','about_first_ser_two_content','about_first_ser_three_content','about_first_ser_four_content','about_second_content','about_third_content','about_third_content_icon01','about_third_content_icon02','about_third_content_icon03','about_third_content_icon04','about_fourth_content','about_seventh_content'])){

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
				<h1 class="text-center cl-title"><span>اعدادات صفحة عن الشركة </span></h1>
			</header>
		</div>
			<br/>
	</div>
		<div class="row">

		<div class="col-sm-3 pr-0">

			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<a class="nav-link mb-1 text-right active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">محتوي السكشن الاول </a>	

				<a class="nav-link mb-1 text-right" id="v-pills-secondsection-tab" data-toggle="pill" href="#v-pills-secondsection" role="tab" aria-controls="v-pills-secondsection" aria-selected="true">محتوي السكشن الثاني  </a>

				<a class="nav-link mb-1 text-right" id="v-pills-thirdsection-tab" data-toggle="pill" href="#v-pills-thirdsection" role="tab" aria-controls="v-pills-thirdsection" aria-selected="true">محتوي السكشن الثالث </a>

				<a class="nav-link mb-1 text-right" id="v-pills-fourthsection-tab" data-toggle="pill" href="#v-pills-fourthsection" role="tab" aria-controls="v-pills-fourthsection" aria-selected="true">محتوي السكشن الرابع </a>	

			</div>

		</div>

		<div class="col-sm-9 gray_back pl-0">
	  		<form class="form-horizontal" method="post" action="#">
			    <div dir="rtl" class="tab-content" id="v-pills-tabContent">
					<div dir="rtl" class="tab-content" id="v-pills-tabContent">
			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
			        	<div class="form-group">
						    <label class="col-sm-12 control-label text-right text-white">إخفاء السكشن</label>
						    <div class="col-sm-12 text-right">
						  	    <input type="checkbox" id="about_hide_first_section" name="about_hide_first_section" value="1" <?php echo get_option('about_hide_first_section') == '1' ? 'checked' : ''; ?>>
						    </div>
						</div>
						<div class="form-group">
							<label for="about_first_title" class="col-sm-12 control-label text-right text-white">العنوان </label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_first_title" name="about_first_title" value="<?php echo get_option('about_first_title'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_first_content" class="col-sm-12 control-label text-right text-white">المحتوى</label>
							<div class="col-sm-12 text-right">
                                <?php wp_editor( get_option('about_first_content'), 'about_first_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_first_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_first_content','class'=>'form-control text-right',) );  ?>
							</div>
						</div>

						<div class="form-group">
							<label for="about_first_ser_one_title" class="col-sm-12 control-label text-right text-white">عنوان الخدمة الاولي </label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_first_ser_one_title" name="about_first_ser_one_title" value="<?php echo get_option('about_first_ser_one_title'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_first_ser_one_content" class="col-sm-12 control-label text-right text-white">محتوى الخدمة الاولي</label>
							<div dir="rtl" class="col-sm-12 text-right">
                                <?php wp_editor( get_option('about_first_ser_one_content'), 'about_first_ser_one_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_first_ser_one_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_first_ser_one_content','class'=>'form-control text-right',) );  ?>
							</div>
						</div>

						<div class="form-group">
						  <label class="col-sm-12 control-label text-right text-white">صورة الخدمة الاولى</label>
						  <div class="col-sm-12 text-right">
						    
						    <input class="about_first_ser_one_img_url cl_half" type="text" name="about_first_img_one_url" size="60" value="<?php echo get_option('about_first_img_one_url'); ?>">
						    <a href="#" class="about_first_ser_one_img_upload btn btn-info">إختيار</a>
						    <img class="mt-2 rounded img-fluid about_first_ser_one_img" src="<?php echo get_option('about_first_img_one_url'); ?>" />
						  </div>
						</div>

						<div class="form-group">
							<label for="about_first_ser_two_title" class="col-sm-12 control-label text-right text-white">عنوان الخدمة الثانية  </label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_first_ser_two_title" name="about_first_ser_two_title" value="<?php echo get_option('about_first_ser_two_title'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_first_ser_two_content" class="col-sm-12 control-label text-right text-white">محتوي الخدمة الثانية</label>
							<div class="col-sm-12 text-right">
                                <?php wp_editor( get_option('about_first_ser_two_content'), 'about_first_ser_two_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_first_ser_two_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_first_ser_two_content','class'=>'form-control text-right',) );  ?>
							</div>
						</div>

						<div class="form-group">
						  <label class="col-sm-12 control-label text-right text-white">صورة الخدمة الثانية</label>
						  <div class="col-sm-12 text-right">
						    
						    <input class="about_first_ser_two_img_url cl_half" type="text" name="about_first_img_two_url" size="60" value="<?php echo get_option('about_first_img_two_url'); ?>">
						    <a href="#" class="about_first_ser_two_img_upload btn btn-info">إختيار</a>
						    <img class="mt-2 rounded img-fluid about_first_ser_two_img" src="<?php echo get_option('about_first_img_two_url'); ?>" />
						  </div>
						</div>

						<div class="form-group">
							<label for="about_first_ser_three_title" class="col-sm-12 control-label text-right text-white">عنوان الخدمة الثالثة</label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_first_ser_three_title" name="about_first_ser_three_title" value="<?php echo get_option('about_first_ser_three_title'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_first_ser_three_content" class="col-sm-12 control-label text-right text-white">محتوى الخدمة الثالثة</label>
							<div class="col-sm-12 text-right">
                                <?php wp_editor( get_option('about_first_ser_three_content'), 'about_first_ser_three_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_first_ser_three_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_first_ser_three_content','class'=>'form-control text-right',) );  ?>
							</div>
						</div>

						<div class="form-group">
						  <label class="col-sm-12 control-label text-right text-white">صورة الخدمة الثالثة</label>
						  <div class="col-sm-12 text-right">
						    
						    <input class="about_first_ser_three_img_url cl_half" type="text" name="about_first_img_three_url" size="60" value="<?php echo get_option('about_first_img_three_url'); ?>">
						    <a href="#" class="about_first_ser_three_img_upload btn btn-info">إختيار</a>
						    <img class="mt-2 rounded img-fluid about_first_ser_three_img" src="<?php echo get_option('about_first_img_three_url'); ?>" />
						  </div>
						</div>

						<div class="form-group">
							<label for="about_first_ser_four_title" class="col-sm-12 control-label text-right text-white">عنوان الخدمة الرابعة</label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_first_ser_four_title" name="about_first_ser_four_title" value="<?php echo get_option('about_first_ser_four_title'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_first_ser_four_content" class="col-sm-12 control-label text-right text-white">محتوى الخدمة الرابعة</label>
							<div class="col-sm-12 text-right">
                                <?php wp_editor( get_option('about_first_ser_four_content'), 'about_first_ser_four_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_first_ser_four_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_first_ser_four_content','class'=>'form-control text-right',) );  ?>
							</div>
						</div>

						<div class="form-group">
						  <label class="col-sm-12 control-label text-right text-white">صورة الخدمة الرابعة</label>
						  <div class="col-sm-12 text-right">
						    
						    <input class="about_first_ser_four_img_url cl_half" type="text" name="about_first_img_four_url" size="60" value="<?php echo get_option('about_first_img_four_url'); ?>">
						    <a href="#" class="about_first_ser_four_img_upload btn btn-info">إختيار</a>
						    <img class="mt-2 rounded img-fluid about_first_ser_four_img" src="<?php echo get_option('about_first_img_four_url'); ?>" />
						  </div>
						</div>

						<div class="form-group">
						  <label class="col-sm-12 control-label text-right text-white">صورة السكشن</label>
						  <div class="col-sm-12 text-right">
						    
						    <input class="about_first_img_url cl_half" type="text" name="about_first_img_url" size="60" value="<?php echo get_option('about_first_img_url'); ?>">
						    <a href="#" class="about_first_img_upload btn btn-info">إختيار</a>
						    <img class="mt-2 rounded img-fluid about_first_img" src="<?php echo get_option('about_first_img_url'); ?>" />
						  </div>
						</div>

						<div class="form-group">
							<label for="about_first_link_url" class="col-sm-12 control-label text-right text-white">الرابط </label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_first_link_url" name="about_first_link_url" value="<?php echo get_option('about_first_link_url'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_first_whatsup" class="col-sm-12 control-label text-right text-white">رقم تواصل الواتس </label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_first_whatsup" name="about_first_whatsup" value="<?php echo get_option('about_first_whatsup'); ?>">
							</div>
						</div>
					</div>

					<div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
			        	<div class="form-group">
						    <label class="col-sm-12 control-label text-right text-white">إخفاء السكشن</label>
						    <div class="col-sm-12 text-right">
						  	    <input type="checkbox" id="about_hide_second_section" name="about_hide_second_section" value="1" <?php echo get_option('about_hide_second_section') == '1' ? 'checked' : ''; ?>>
						    </div>
						</div>

						<div class="form-group">
						  <label class="col-sm-12 control-label text-right text-white">صورة السكشن</label>
						  <div class="col-sm-12 text-right">
						    
						    <input class="about_second_img_url cl_half" type="text" name="about_second_img_url" size="60" value="<?php echo get_option('about_second_img_url'); ?>">
						    <a href="#" class="about_second_img_upload btn btn-info">إختيار</a>
						    <img class="mt-2 rounded img-fluid about_second_img" src="<?php echo get_option('about_second_img_url'); ?>" />
						  </div>
						</div>

						<div class="form-group">
							<label for="about_second_title" class="col-sm-12 control-label text-right text-white">العنوان</label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_second_title" name="about_second_title" value="<?php echo get_option('about_second_title'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_second_content" class="col-sm-12 control-label text-right text-white">المحتوي</label>
							<div class="col-sm-12 text-right">
                                <?php wp_editor( get_option('about_second_content'), 'about_second_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_second_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_second_content','class'=>'form-control text-right',) );  ?>
							</div>
						</div>

						<div class="form-group">
							<label for="about_services_cat_num" class="col-sm-12 control-label text-right text-white">عدد التصنيفات </label>
							<div class="col-sm-12 text-right">
								<input type="number" class="form-control" id="about_services_cat_num" name="about_services_cat_num" value="<?php echo get_option('about_services_cat_num'); ?>">
							</div>
						</div>
								
					</div>

					<div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
			        	<div class="form-group">
						    <label class="col-sm-12 control-label text-right text-white">إخفاء السكشن</label>
						    <div class="col-sm-12 text-right">
						  	    <input type="checkbox" id="about_hide_third_section" name="about_hide_third_section" value="1" <?php echo get_option('about_hide_third_section') == '1' ? 'checked' : ''; ?>>
						    </div>
						</div>

						<div class="form-group">
						  <label class="col-sm-12 control-label text-right text-white">صورة السكشن</label>
						  <div class="col-sm-12 text-right">
						    
						    <input class="about_third_img_url cl_half" type="text" name="about_third_img_url" size="60" value="<?php echo get_option('about_third_img_url'); ?>">
						    <a href="#" class="about_third_img_upload btn btn-info">إختيار</a>
						    <img class="mt-2 rounded img-fluid about_third_img" src="<?php echo get_option('about_third_img_url'); ?>" />
						  </div>
						</div>

						<div class="form-group">
							<label for="about_third_title" class="col-sm-12 control-label text-right text-white">العنوان</label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_third_title" name="about_third_title" value="<?php echo get_option('about_third_title'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_content" class="col-sm-12 control-label text-right text-white">المحتوي</label>
							<div class="col-sm-12 text-right">
                                <?php wp_editor( get_option('about_third_content'), 'about_third_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_content','class'=>'form-control text-right',) );  ?>
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_icon01" class="col-sm-12 control-label text-right text-white">الايقونه</label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_third_icon01" name="about_third_icon01" value="<?php echo get_option('about_third_icon01'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_title_icon01" class="col-sm-12 control-label text-right text-white">العنوان</label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_third_title_icon01" name="about_third_title_icon01" value="<?php echo get_option('about_third_title_icon01'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_content_icon01" class="col-sm-12 control-label text-right text-white">المحتوي</label>
							<div class="col-sm-12 text-right">
                                <?php wp_editor( get_option('about_third_content_icon01'), 'about_third_content_icon01',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_content_icon01', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_content_icon01','class'=>'form-control text-right',) );  ?>
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_icon02" class="col-sm-12 control-label text-right text-white">الايقونه</label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_third_icon02" name="about_third_icon02" value="<?php echo get_option('about_third_icon02'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_title_icon02" class="col-sm-12 control-label text-right text-white">العنوان</label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_third_title_icon02" name="about_third_title_icon02" value="<?php echo get_option('about_third_title_icon02'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_content_icon02" class="col-sm-12 control-label text-right text-white">المحتوي</label>
							<div class="col-sm-12 text-right">
                                <?php wp_editor( get_option('about_third_content_icon02'), 'about_third_content_icon02',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_content_icon02', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_content_icon02','class'=>'form-control text-right',) );  ?>
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_icon03" class="col-sm-12 control-label text-right text-white">الايقونه</label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_third_icon03" name="about_third_icon03" value="<?php echo get_option('about_third_icon03'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_title_icon03" class="col-sm-12 control-label text-right text-white">العنوان</label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_third_title_icon03" name="about_third_title_icon03" value="<?php echo get_option('about_third_title_icon03'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_content_icon03" class="col-sm-12 control-label text-right text-white">المحتوي</label>
							<div class="col-sm-12 text-right">
                                <?php wp_editor( get_option('about_third_content_icon03'), 'about_third_content_icon03',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_content_icon03', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_content_icon03','class'=>'form-control text-right',) );  ?>
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_icon04" class="col-sm-12 control-label text-right text-white">الايقونه</label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_third_icon04" name="about_third_icon04" value="<?php echo get_option('about_third_icon04'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_title_icon04" class="col-sm-12 control-label text-right text-white">العنوان</label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_third_title_icon04" name="about_third_title_icon04" value="<?php echo get_option('about_third_title_icon04'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_content_icon04" class="col-sm-12 control-label text-right text-white">المحتوي</label>
							<div class="col-sm-12 text-right">
                                <?php wp_editor( get_option('about_third_content_icon04'), 'about_third_content_icon04',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_content_icon04', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_content_icon04','class'=>'form-control text-right',) );  ?>
							</div>
						</div>
			
					</div>


					<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
			        	<div class="form-group">
						    <label class="col-sm-12 control-label text-right text-white">إخفاء السكشن</label>
						    <div class="col-sm-12 text-right">
						  	    <input type="checkbox" id="about_hide_fourth_section" name="about_hide_fourth_section" value="1" <?php echo get_option('about_hide_fourth_section') == '1' ? 'checked' : ''; ?>>
						    </div>
						</div>

						<div class="form-group">
							<label for="about_fourth_title" class="col-sm-12 control-label text-right text-white">العنوان</label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_fourth_title" name="about_fourth_title" value="<?php echo get_option('about_fourth_title'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_fourth_content" class="col-sm-12 control-label text-right text-white">المحتوي</label>
							<div class="col-sm-12 text-right">
                                <?php wp_editor( get_option('about_fourth_content'), 'about_fourth_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_fourth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_fourth_content','class'=>'form-control text-right',) );  ?>
							</div>
						</div>

						<div class="form-group">
						  <label class="col-sm-12 control-label text-right text-white">الصورة الاولي </label>
						  <div class="col-sm-12 text-right">
						    
						    <input class="about_fourth_img_url_one cl_half" type="text" name="about_fourth_img_url_one" size="60" value="<?php echo get_option('about_fourth_img_url_one'); ?>">
						    <a href="#" class="about_fourth_img_upload_one btn btn-info">إختيار</a>
						    <img class="mt-2 rounded img-fluid about_fourth_img_one" src="<?php echo get_option('about_fourth_img_url_one'); ?>" />
						  </div>
						</div>

						<div class="form-group">
						  <label class="col-sm-12 control-label text-right text-white">الصورة الثانية </label>
						  <div class="col-sm-12 text-right">
						    
						    <input class="about_fourth_img_url_two cl_half" type="text" name="about_fourth_img_url_two" size="60" value="<?php echo get_option('about_fourth_img_url_two'); ?>">
						    <a href="#" class="about_fourth_img_upload_two btn btn-info">إختيار</a>
						    <img class="mt-2 rounded img-fluid about_fourth_img_two" src="<?php echo get_option('about_fourth_img_url_two'); ?>" />
						  </div>
						</div>

						<div class="form-group">
							<label for="about_fourth_url" class="col-sm-12 control-label text-right text-white">ألرابط </label>
							<div class="col-sm-12 text-right">
								<input type="text" class="form-control" id="about_fourth_url" name="about_fourth_url" value="<?php echo get_option('about_fourth_url'); ?>">
							</div>
						</div>
								
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
</div><!-- /container -->
<?php
}