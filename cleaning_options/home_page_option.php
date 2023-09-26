<?php 

function home_page_content_callback(){

	   

if( isset( $_POST['cl_save'] ) && !empty( $_POST['cl_save']) ){



		foreach ($_POST as $key => $value) {		



			if(in_array($key,['home_second_content','home_second_ser_one_content','home_second_ser_two_content','home_second_ser_three_content','home_second_ser_four_content','home_third_content','home_fourth_content','home_fourth_content_icon01','home_fourth_content_icon02','home_fourth_content_icon03','home_fourth_content_icon04','home_fivth_content','home_sixth_content','home_seventh_content','home_eightth_content'])){



				$value = stripcslashes($value);



			}



			update_option( $key, $value);



		}



		if(!isset($_POST['home_hide_first_section'])) {delete_option('home_hide_first_section');}

		if(!isset($_POST['home_hide_second_section'])) {delete_option('home_hide_second_section');}

		if(!isset($_POST['home_hide_third_section'])) {delete_option('home_hide_third_section');}

		if(!isset($_POST['home_hide_fourth_section'])) {delete_option('home_hide_fourth_section');}

		if(!isset($_POST['home_hide_fivth_section'])) {delete_option('home_hide_fivth_section');}

		if(!isset($_POST['home_hide_sixth_section'])) {delete_option('home_hide_sixth_section');}

		if(!isset($_POST['home_hide_seventh_section'])) {delete_option('home_hide_seventh_section');}

        if(!isset($_POST['home_hide_nineth_section'])) {delete_option('home_hide_nineth_section');}

		if(!isset($_POST['home_hide_eightth_section'])) {delete_option('home_hide_eightth_section');}



	}



?>



<div dir="rtl" class="container-fluid text-right padding-right-4">

	<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12 bg-col12">

			<!-- Top Navigation -->

			<header class="codrops-header">

				<h1 class="text-center cl-title"><span>اعدادت الصفحة الرئيسية </span></h1>

			</header>

		</div>

			<br/>

	</div>

		<div class="row">



		<div class="col-sm-3 pr-0">



			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">



				<a class="nav-link mb-1 text-right active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">محتوى السلايدر</a>	



				<a class="nav-link mb-1 text-right" id="v-pills-secondsection-tab" data-toggle="pill" href="#v-pills-secondsection" role="tab" aria-controls="v-pills-secondsection" aria-selected="true">محتوي من نحن</a>



				<a class="nav-link mb-1 text-right" id="v-pills-thirdsection-tab" data-toggle="pill" href="#v-pills-thirdsection" role="tab" aria-controls="v-pills-thirdsection" aria-selected="true">محتوي خدماتنا </a>



				<a class="nav-link mb-1 text-right" id="v-pills-fourthsection-tab" data-toggle="pill" href="#v-pills-fourthsection" role="tab" aria-controls="v-pills-fourthsection" aria-selected="true">محتوي خطوات طلب الخدمة</a>



				<a class="nav-link mb-1 text-right" id="v-pills-fivthsection-tab" data-toggle="pill" href="#v-pills-fivthsection" role="tab" aria-controls="v-pills-fivthsection" aria-selected="true">محتوي تصنيف الخدمات</a>



				<a class="nav-link mb-1 text-right" id="v-pills-sixthsection-tab" data-toggle="pill" href="#v-pills-sixthsection" role="tab" aria-controls="v-pills-sixthsection" aria-selected="true">محتوى الاسئلة الشائعة </a>



				<a class="nav-link mb-1 text-right" id="v-pills-seventhsection-tab" data-toggle="pill" href="#v-pills-seventhsection" role="tab" aria-controls="v-pills-seventhsection" aria-selected="true">محتوى الفيديوهات </a>



				<a class="nav-link mb-1 text-right" id="v-pills-eightthsection-tab" data-toggle="pill" href="#v-pills-eightthsection" role="tab" aria-controls="v-pills-eightthsection" aria-selected="true">محتوى الاخبار </a>	


				<a class="nav-link mb-1 text-right" id="v-pills-ninethsection-tab" data-toggle="pill" href="#v-pills-ninethsection" role="tab" aria-controls="v-pills-ninethsection" aria-selected="true">محتوي عملاؤنا </a>	



			</div>



		</div>



		<div class="col-sm-9 gray_back pl-0">

	  		<form class="form-horizontal" method="post" action="#">

			    <div dir="rtl" class="tab-content" id="v-pills-tabContent">

			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label text-right text-white">إخفاء السكشن</label>

						    <div class="col-sm-12 text-right">

						  	    <input type="checkbox" id="home_hide_first_section" name="home_hide_first_section" value="1" <?php echo get_option('home_hide_first_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>

			        	<div class="form-group">

			        		<div class="col-sm-12 text-right">

					        	<select class="form-select" aria-label="Default select example" name="services_slider_type">

								  	<option selected>Select Slider Show</option>

								  	<option value="1">Not Activated</option>

								  	<option value="2">From Slider CPL</option>

								  	<option value="3">From Posts</option>

								</select>

							</div>

						</div>

						<div class="form-group">

							<label for="slider_num" class="col-sm-12 text-white control-label text-right text-white">Slider Number Show</label>

							<div class="col-sm-12 text-right">

								<input type="number" class="form-control" id="slider_num" name="slider_num" value="<?php echo get_option('slider_num'); ?>">

							</div>

						</div>			

					</div>



					<div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label text-right text-white">إخفاء السكشن</label>

						    <div class="col-sm-12 text-right">

						  	    <input type="checkbox" id="home_hide_second_section" name="home_hide_second_section" value="1" <?php echo get_option('home_hide_second_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>

						<div class="form-group">

							<label for="home_second_title" class="col-sm-12 control-label text-right text-white">العنوان </label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_second_title" name="home_second_title" value="<?php echo get_option('home_second_title'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_second_content" class="col-sm-12 control-label text-right text-white">المحتوى</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_second_content'), 'home_second_content',  array('textarea_rows'=>5,'textarea_name'=> 'home_second_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_second_content','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

							<label for="home_second_ser_one_title" class="col-sm-12 control-label text-right text-white">عنوان الخدمة الاولي </label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_second_ser_one_title" name="home_second_ser_one_title" value="<?php echo get_option('home_second_ser_one_title'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_second_ser_one_content" class="col-sm-12 control-label text-right text-white">محتوى الخدمة الاولي</label>

							<div dir="rtl" class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_second_ser_one_content'), 'home_second_ser_one_content',  array('textarea_rows'=>5,'textarea_name'=> 'home_second_ser_one_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_second_ser_one_content','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">صورة الخدمة الاولى</label>

						  <div class="col-sm-12 text-right">

						    

						    <input class="home_second_ser_one_img_url cl_half" type="text" name="home_second_img_one_url" size="60" value="<?php echo get_option('home_second_img_one_url'); ?>">

						    <a href="#" class="home_second_ser_one_img_upload btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid home_second_ser_one_img" src="<?php echo get_option('home_second_img_one_url'); ?>" />

						  </div>

						</div>



						<div class="form-group">

							<label for="home_second_ser_two_title" class="col-sm-12 control-label text-right text-white">عنوان الخدمة الثانية  </label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_second_ser_two_title" name="home_second_ser_two_title" value="<?php echo get_option('home_second_ser_two_title'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_second_ser_two_content" class="col-sm-12 control-label text-right text-white">محتوي الخدمة الثانية</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_second_ser_two_content'), 'home_second_ser_two_content',  array('textarea_rows'=>5,'textarea_name'=> 'home_second_ser_two_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_second_ser_two_content','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">صورة الخدمة الثانية</label>

						  <div class="col-sm-12 text-right">

						    

						    <input class="home_second_ser_two_img_url cl_half" type="text" name="home_second_img_two_url" size="60" value="<?php echo get_option('home_second_img_two_url'); ?>">

						    <a href="#" class="home_second_ser_two_img_upload btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid home_second_ser_two_img" src="<?php echo get_option('home_second_img_two_url'); ?>" />

						  </div>

						</div>



						<div class="form-group">

							<label for="home_second_ser_three_title" class="col-sm-12 control-label text-right text-white">عنوان الخدمة الثالثة</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_second_ser_three_title" name="home_second_ser_three_title" value="<?php echo get_option('home_second_ser_three_title'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_second_ser_three_content" class="col-sm-12 control-label text-right text-white">محتوى الخدمة الثالثة</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_second_ser_three_content'), 'home_second_ser_three_content',  array('textarea_rows'=>5,'textarea_name'=> 'home_second_ser_three_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_second_ser_three_content','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">صورة الخدمة الثالثة</label>

						  <div class="col-sm-12 text-right">

						    

						    <input class="home_second_ser_three_img_url cl_half" type="text" name="home_second_img_three_url" size="60" value="<?php echo get_option('home_second_img_three_url'); ?>">

						    <a href="#" class="home_second_ser_three_img_upload btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid home_second_ser_three_img" src="<?php echo get_option('home_second_img_three_url'); ?>" />

						  </div>

						</div>



						<div class="form-group">

							<label for="home_second_ser_four_title" class="col-sm-12 control-label text-right text-white">عنوان الخدمة الرابعة</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_second_ser_four_title" name="home_second_ser_four_title" value="<?php echo get_option('home_second_ser_four_title'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_second_ser_four_content" class="col-sm-12 control-label text-right text-white">محتوى الخدمة الرابعة</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_second_ser_four_content'), 'home_second_ser_four_content',  array('textarea_rows'=>5,'textarea_name'=> 'home_second_ser_four_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_second_ser_four_content','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">صورة الخدمة الرابعة</label>

						  <div class="col-sm-12 text-right">

						    

						    <input class="home_second_ser_four_img_url cl_half" type="text" name="home_second_img_four_url" size="60" value="<?php echo get_option('home_second_img_four_url'); ?>">

						    <a href="#" class="home_second_ser_four_img_upload btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid home_second_ser_four_img" src="<?php echo get_option('home_second_img_four_url'); ?>" />

						  </div>

						</div>



						<div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">صورة السكشن</label>

						  <div class="col-sm-12 text-right">

						    

						    <input class="home_second_img_url cl_half" type="text" name="home_second_img_url" size="60" value="<?php echo get_option('home_second_img_url'); ?>">

						    <a href="#" class="home_second_img_upload btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid home_second_img" src="<?php echo get_option('home_second_img_url'); ?>" />

						  </div>

						</div>



						<div class="form-group">

							<label for="home_second_link_url" class="col-sm-12 control-label text-right text-white">الرابط </label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_second_link_url" name="home_second_link_url" value="<?php echo get_option('home_second_link_url'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_second_whatsup" class="col-sm-12 control-label text-right text-white">رقم تواصل الواتس </label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_second_whatsup" name="home_second_whatsup" value="<?php echo get_option('home_second_whatsup'); ?>">

							</div>

						</div>

					</div>



					<div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label text-right text-white">إخفاء السكشن</label>

						    <div class="col-sm-12 text-right">

						  	    <input type="checkbox" id="home_hide_third_section" name="home_hide_third_section" value="1" <?php echo get_option('home_hide_third_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>



						<div class="form-group">

							<label for="services_num" class="col-sm-12 text-white control-label text-right text-white">Services Number Show</label>

							<div class="col-sm-12 text-right">

								<input type="number" class="form-control" id="services_num" name="services_num" value="<?php echo get_option('services_num'); ?>">

							</div>

						</div>



						<div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">صورة السكشن</label>

						  <div class="col-sm-12 text-right">

						    

						    <input class="home_third_img_url cl_half" type="text" name="home_third_img_url" size="60" value="<?php echo get_option('home_third_img_url'); ?>">

						    <a href="#" class="home_third_img_upload btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid home_third_img" src="<?php echo get_option('home_third_img_url'); ?>" />

						  </div>

						</div>



						<div class="form-group">

							<label for="home_third_title" class="col-sm-12 control-label text-right text-white">العنوان</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_third_title" name="home_third_title" value="<?php echo get_option('home_third_title'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_third_content" class="col-sm-12 control-label text-right text-white">المحتوي</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_third_content'), 'home_third_content',  array('textarea_rows'=>5,'textarea_name'=> 'home_third_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_third_content','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

							<label for="home_third_services" class="col-sm-6 control-label">إختر تصنيف: </label>

							<div class="col-sm-12">

								<select class="form-control" id="home_third_services" name="home_third_services" >



									<?php $category = get_terms( array('taxonomy' => 'category','hide_empty' => false) ); ?>

									<?php foreach($category as $services) : ?>



									<option value="<?= $services->name;?>" <?php echo $services->name == get_option('home_third_services') ? 'selected' : ''; ?> > <?= $services->name; ?></option>



									<?php endforeach; ?>



								</select>

							</div>

						</div>

								

					</div>



					<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label text-right text-white">إخفاء السكشن</label>

						    <div class="col-sm-12 text-right">

						  	    <input type="checkbox" id="home_hide_fourth_section" name="home_hide_fourth_section" value="1" <?php echo get_option('home_hide_fourth_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>



						<div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">صورة السكشن</label>

						  <div class="col-sm-12 text-right">

						    

						    <input class="home_fourth_img_url cl_half" type="text" name="home_fourth_img_url" size="60" value="<?php echo get_option('home_fourth_img_url'); ?>">

						    <a href="#" class="home_fourth_img_upload btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid home_fourth_img" src="<?php echo get_option('home_fourth_img_url'); ?>" />

						  </div>

						</div>



						<div class="form-group">

							<label for="home_fourth_title" class="col-sm-12 control-label text-right text-white">العنوان</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_fourth_title" name="home_fourth_title" value="<?php echo get_option('home_fourth_title'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_fourth_content" class="col-sm-12 control-label text-right text-white">المحتوي</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_fourth_content'), 'home_fourth_content',  array('textarea_rows'=>5,'textarea_name'=> 'home_fourth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_fourth_content','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

							<label for="home_fourth_icon01" class="col-sm-12 control-label text-right text-white">الايقونه</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_fourth_icon01" name="home_fourth_icon01" value="<?php echo get_option('home_fourth_icon01'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_fourth_title_icon01" class="col-sm-12 control-label text-right text-white">العنوان</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_fourth_title_icon01" name="home_fourth_title_icon01" value="<?php echo get_option('home_fourth_title_icon01'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_fourth_content_icon01" class="col-sm-12 control-label text-right text-white">المحتوي</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_fourth_content_icon01'), 'home_fourth_content_icon01',  array('textarea_rows'=>5,'textarea_name'=> 'home_fourth_content_icon01', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_fourth_content_icon01','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

							<label for="home_fourth_icon02" class="col-sm-12 control-label text-right text-white">الايقونه</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_fourth_icon02" name="home_fourth_icon02" value="<?php echo get_option('home_fourth_icon02'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_fourth_title_icon02" class="col-sm-12 control-label text-right text-white">العنوان</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_fourth_title_icon02" name="home_fourth_title_icon02" value="<?php echo get_option('home_fourth_title_icon02'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_fourth_content_icon02" class="col-sm-12 control-label text-right text-white">المحتوي</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_fourth_content_icon02'), 'home_fourth_content_icon02',  array('textarea_rows'=>5,'textarea_name'=> 'home_fourth_content_icon02', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_fourth_content_icon02','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

							<label for="home_fourth_icon03" class="col-sm-12 control-label text-right text-white">الايقونه</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_fourth_icon03" name="home_fourth_icon03" value="<?php echo get_option('home_fourth_icon03'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_fourth_title_icon03" class="col-sm-12 control-label text-right text-white">العنوان</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_fourth_title_icon03" name="home_fourth_title_icon03" value="<?php echo get_option('home_fourth_title_icon03'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_fourth_content_icon03" class="col-sm-12 control-label text-right text-white">المحتوي</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_fourth_content_icon03'), 'home_fourth_content_icon03',  array('textarea_rows'=>5,'textarea_name'=> 'home_fourth_content_icon03', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_fourth_content_icon03','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

							<label for="home_fourth_icon04" class="col-sm-12 control-label text-right text-white">الايقونه</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_fourth_icon04" name="home_fourth_icon04" value="<?php echo get_option('home_fourth_icon04'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_fourth_title_icon04" class="col-sm-12 control-label text-right text-white">العنوان</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_fourth_title_icon04" name="home_fourth_title_icon04" value="<?php echo get_option('home_fourth_title_icon04'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_fourth_content_icon04" class="col-sm-12 control-label text-right text-white">المحتوي</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_fourth_content_icon04'), 'home_fourth_content_icon04',  array('textarea_rows'=>5,'textarea_name'=> 'home_fourth_content_icon04', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_fourth_content_icon04','class'=>'form-control text-right',) );  ?>

							</div>

						</div>

			

					</div>

					<div class="tab-pane fade show" id="v-pills-fivthsection" role="tabpanel" aria-labelledby="v-pills-fivthsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label text-right text-white">إخفاء السكشن</label>

						    <div class="col-sm-12 text-right">

						  	    <input type="checkbox" id="home_hide_fivth_section" name="home_hide_fivth_section" value="1" <?php echo get_option('home_hide_fivth_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>



						<div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">صورة السكشن</label>

						  <div class="col-sm-12 text-right">

						    

						    <input class="home_fivth_img_url cl_half" type="text" name="home_fivth_img_url" size="60" value="<?php echo get_option('home_fivth_img_url'); ?>">

						    <a href="#" class="home_fivth_img_upload btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid home_fivth_img" src="<?php echo get_option('home_fivth_img_url'); ?>" />

						  </div>

						</div>



						<div class="form-group">

							<label for="home_fivth_title" class="col-sm-12 control-label text-right text-white">العنوان</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_fivth_title" name="home_fivth_title" value="<?php echo get_option('home_fivth_title'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_fivth_content" class="col-sm-12 control-label text-right text-white">المحتوي</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_fivth_content'), 'home_fivth_content',  array('textarea_rows'=>5,'textarea_name'=> 'home_fivth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_fivth_content','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

							<label for="services_cat_num" class="col-sm-12 control-label text-right text-white">عدد التصنيفات </label>

							<div class="col-sm-12 text-right">

								<input type="number" class="form-control" id="services_cat_num" name="services_cat_num" value="<?php echo get_option('services_cat_num'); ?>">

							</div>

						</div>
                        
                        <div class="form-group">

							<label for="home_seventh_news" class="col-sm-6 control-label">إختر التصنيفات: </label>

							<div class="col-sm-12">
                                
								<select class="form-control" id="home_fifth_news" name="home_fifth_news[]"  multiple>


									<?php $category = get_terms( array('taxonomy' => 'category','hide_empty' => false) ); ?>
                                    <?php $cl_categories = get_option('home_fifth_news');var_dump($cl_categories);?>
                                    
									<?php foreach($category as $news) : ?>
                                    <?php 
                                        $selected = ( in_array($news->term_id, $cl_categories) ) ? 'selected="selected"' :  '';
                                    ?>

                                    <option value="<?= $news->term_id;?>" <?= $selected; ?>><?= $news->name; ?></option>
								
									<?php endforeach; ?>



								</select>

							</div>

						</div>

								

					</div>



					<div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label text-right text-white">إخفاء السكشن</label>

						    <div class="col-sm-12 text-right">

						  	    <input type="checkbox" id="home_hide_sixth_section" name="home_hide_sixth_section" value="1" <?php echo get_option('home_hide_sixth_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>



						<div class="form-group">

							<label for="home_sixth_title" class="col-sm-12 control-label text-right text-white">العنوان</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_sixth_title" name="home_sixth_title" value="<?php echo get_option('home_sixth_title'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_sixth_content" class="col-sm-12 control-label text-right text-white">المحتوي</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_sixth_content'), 'home_sixth_content',  array('textarea_rows'=>5,'textarea_name'=> 'home_sixth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_sixth_content','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">الصورة الاولي </label>

						  <div class="col-sm-12 text-right">

						    

						    <input class="home_sixth_img_url_one cl_half" type="text" name="home_sixth_img_url_one" size="60" value="<?php echo get_option('home_sixth_img_url_one'); ?>">

						    <a href="#" class="home_sixth_img_upload_one btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid home_sixth_img_one" src="<?php echo get_option('home_sixth_img_url_one'); ?>" />

						  </div>

						</div>



						<div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">الصورة الثانية </label>

						  <div class="col-sm-12 text-right">

						    

						    <input class="home_sixth_img_url_two cl_half" type="text" name="home_sixth_img_url_two" size="60" value="<?php echo get_option('home_sixth_img_url_two'); ?>">

						    <a href="#" class="home_sixth_img_upload_two btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid home_sixth_img_two" src="<?php echo get_option('home_sixth_img_url_two'); ?>" />

						  </div>

						</div>



						<div class="form-group">

							<label for="home_sixth_percent" class="col-sm-12 control-label text-right text-white">النسبة المئوية</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_sixth_percent" name="home_sixth_percent" value="<?php echo get_option('home_sixth_percent'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_sixth_img_title" class="col-sm-12 control-label text-right text-white">عنوان الصورة </label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_sixth_img_title" name="home_sixth_img_title" value="<?php echo get_option('home_sixth_img_title'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_sixth_url" class="col-sm-12 control-label text-right text-white">ألرابط </label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_sixth_url" name="home_sixth_url" value="<?php echo get_option('home_sixth_url'); ?>">

							</div>

						</div>

								

					</div>



					<div class="tab-pane fade show" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">

						<div class="form-group">

						    <label class="col-sm-12 control-label text-right text-white">إخفاء السكشن</label>

						    <div class="col-sm-12 text-right">

						  	    <input type="checkbox" id="home_hide_nineth_section" name="home_hide_nineth_section" value="1" <?php echo get_option('home_hide_nineth_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>
                        <div class="form-group">

							<label for="home_video_title" class="col-sm-12 control-label text-right text-white">العنوان</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_video_title" name="home_video_title" value="<?php echo get_option('home_video_title'); ?>">

							</div>

						</div>
                        <div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">صورة اعلى العنوان</label>

						  <div class="col-sm-12 text-right">

						    <input class="first_img_url cl_half" type="text" name="home_video_title_img_url" size="60" value="<?php echo get_option('home_video_title_img_url'); ?>">

						    <a href="#" class="first_img_upload btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid first_img" src="<?php echo get_option('home_video_title_img_url'); ?>" />

						  </div>

						</div>

                        

						<div class="form-group">

							<label for="home_nineth_link" class="col-sm-12 control-label text-right text-white">لينك الفيديو </label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_nineth_link" name="home_nineth_link" value="<?php echo get_option('home_nineth_link'); ?>">

							</div>

						</div>

						<div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">صورة السكشن</label>

						  <div class="col-sm-12 text-right">

						    

						    <input class="home_nineth_img_url cl_half" type="text" name="home_nineth_img_url" size="60" value="<?php echo get_option('home_nineth_img_url'); ?>">

						    <a href="#" class="home_nineth_img_upload btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid home_nineth_img" src="<?php echo get_option('home_nineth_img_url'); ?>" />

						  </div>

						</div>

					</div>



					<div class="tab-pane fade show" id="v-pills-eightthsection" role="tabpanel" aria-labelledby="v-pills-eightthsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label text-right text-white">إخفاء السكشن</label>

						    <div class="col-sm-12 text-right">

						  	    <input type="checkbox" id="home_hide_seventh_section" name="home_hide_seventh_section" value="1" <?php echo get_option('home_hide_seventh_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>



						<div class="form-group">

							<label for="home_seventh_title" class="col-sm-12 control-label text-right text-white">العنوان</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_seventh_title" name="home_seventh_title" value="<?php echo get_option('home_seventh_title'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_seventh_content" class="col-sm-12 control-label text-right text-white">المحتوي</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_seventh_content'), 'home_seventh_content',  array('textarea_rows'=>5,'textarea_name'=> 'home_seventh_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_seventh_content','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">صورة السكشن</label>

						  <div class="col-sm-12 text-right">

						    

						    <input class="home_seventh_img_url cl_half" type="text" name="home_seventh_img_url" size="60" value="<?php echo get_option('home_seventh_img_url'); ?>">

						    <a href="#" class="home_seventh_img_upload btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid home_seventh_img" src="<?php echo get_option('home_seventh_img_url'); ?>" />

						  </div>

						</div>



						<div class="form-group">

							<label for="home_seventh_news" class="col-sm-6 control-label">إختر تصنيف: </label>

							<div class="col-sm-12">

								<select class="form-control" id="home_seventh_news" name="home_seventh_news" >



									<?php $category = get_terms( array('taxonomy' => 'category','hide_empty' => false) ); ?>

									<?php foreach($category as $news) : ?>



									<option value="<?= $news->name;?>" <?php echo $news->name == get_option('home_seventh_news') ? 'selected' : ''; ?> > <?= $news->name; ?></option>



									<?php endforeach; ?>



								</select>

							</div>

						</div>
                        
                        <div class="form-group">

							<label for="eighth_sec_news_num" class="col-sm-12 control-label text-right text-white">عدد المقالات التى تظهر فى الرئيسية </label>

							<div class="col-sm-12 text-right">

								<input type="number" class="form-control" id="eighth_sec_news_num" name="eighth_sec_news_num" value="<?php echo get_option('eighth_sec_news_num'); ?>">

							</div>

						</div>

								

					</div>



					<div class="tab-pane fade show" id="v-pills-ninethsection" role="tabpanel" aria-labelledby="v-pills-ninethsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label text-right text-white">إخفاء السكشن</label>

						    <div class="col-sm-12 text-right">

						  	    <input type="checkbox" id="home_hide_eightth_section" name="home_hide_eightth_section" value="1" <?php echo get_option('home_hide_eightth_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>



							<div class="form-group">

							<label for="home_eightth_title" class="col-sm-12 control-label text-right text-white">العنوان</label>

							<div class="col-sm-12 text-right">

								<input type="text" class="form-control" id="home_eightth_title" name="home_eightth_title" value="<?php echo get_option('home_eightth_title'); ?>">

							</div>

						</div>



						<div class="form-group">

							<label for="home_eightth_content" class="col-sm-12 control-label text-right text-white">المحتوي</label>

							<div class="col-sm-12 text-right">

                                <?php wp_editor( get_option('home_eightth_content'), 'home_eightth_content',  array('textarea_rows'=>5,'textarea_name'=> 'home_eightth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_eightth_content','class'=>'form-control text-right',) );  ?>

							</div>

						</div>



						<div class="form-group">

						  <label class="col-sm-12 control-label text-right text-white">صورة السكشن</label>

						  <div class="col-sm-12 text-right">

						    

						    <input class="home_eightth_img_url cl_half" type="text" name="home_eightth_img_url" size="60" value="<?php echo get_option('home_eightth_img_url'); ?>">

						    <a href="#" class="home_eightth_img_upload btn btn-info">إختيار</a>

						    <img class="mt-2 rounded img-fluid home_eightth_img" src="<?php echo get_option('home_eightth_img_url'); ?>" />

						  </div>

						</div>



						<div class="form-group">

							<label for="home_eightth_cleints" class="col-sm-6 control-label">إختر تصنيف: </label>

							<div class="col-sm-12">

								<select class="form-control" id="home_eightth_cleints" name="home_eightth_cleints" >



									<?php $category = get_terms( array('taxonomy' => 'category','hide_empty' => false) ); ?>

									<?php foreach($category as $cleints) : ?>



									<option value="<?= $cleints->name;?>" <?php echo $cleints->name == get_option('home_eightth_cleints') ? 'selected' : ''; ?> > <?= $cleints->name; ?></option>



									<?php endforeach; ?>



								</select>

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