jQuery(document).ready(function($) {

  $('.first_img_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.first_img').attr('src', attachment.url);

      $('.first_img_url').val(attachment.url);

      $('.first_img_id').val(attachment.id);

    })

    .open();

  });  





  $('.second_img_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.second_img').attr('src', attachment.url);

      $('.second_img_url').val(attachment.url);

      $('.second_img_id').val(attachment.id);

    })

    .open();

  }); 



  $('.home_second_ser_one_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.home_second_ser_one_img').attr('src', attachment.url);



      $('.home_second_ser_one_img_url').val(attachment.url);



    })



    .open();



  });







  $('.home_second_ser_two_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.home_second_ser_two_img').attr('src', attachment.url);



      $('.home_second_ser_two_img_url').val(attachment.url);



    })



    .open();



  });



  $('.home_second_ser_three_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.home_second_ser_three_img').attr('src', attachment.url);



      $('.home_second_ser_three_img_url').val(attachment.url);



    })



    .open();



  });

  $('.home_second_ser_four_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.home_second_ser_four_img').attr('src', attachment.url);



      $('.home_second_ser_four_img_url').val(attachment.url);



    })



    .open();



  });



  $('.home_second_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.home_second_img').attr('src', attachment.url);



      $('.home_second_img_url').val(attachment.url);



    })



    .open();



  });



  $('.home_third_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.home_third_img').attr('src', attachment.url);



      $('.home_third_img_url').val(attachment.url);



    })



    .open();



  });



    $('.home_fourth_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.home_fourth_img').attr('src', attachment.url);



      $('.home_fourth_img_url').val(attachment.url);



    })



    .open();



  });



  $('.home_fivth_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.home_fivth_img').attr('src', attachment.url);



      $('.home_fivth_img_url').val(attachment.url);



    })



    .open();



  });



  $('.home_seventh_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.home_seventh_img').attr('src', attachment.url);



      $('.home_seventh_img_url').val(attachment.url);



    })



    .open();



  });



  $('.home_eightth_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.home_eightth_img').attr('src', attachment.url);



      $('.home_eightth_img_url').val(attachment.url);



    })



    .open();



  });



  $('.home_sixth_img_upload_one').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.home_sixth_img_one').attr('src', attachment.url);



      $('.home_sixth_img_url_one').val(attachment.url);



    })



    .open();



  });



  $('.home_sixth_img_upload_two').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.home_sixth_img_two').attr('src', attachment.url);



      $('.home_sixth_img_url_two').val(attachment.url);



    })



    .open();



  });

  $('.home_nineth_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.home_nineth_img').attr('src', attachment.url);



      $('.home_nineth_img_url').val(attachment.url);



    })



    .open();



  });

    $('.services_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.services_img').attr('src', attachment.url);



      $('.services_img_url').val(attachment.url);



    })



    .open();



  });

    /*Page About*/



      $('.about_first_ser_one_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.about_first_ser_one_img').attr('src', attachment.url);



      $('.about_first_ser_one_img_url').val(attachment.url);



    })



    .open();



  });







  $('.about_first_ser_two_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.about_first_ser_two_img').attr('src', attachment.url);



      $('.about_first_ser_two_img_url').val(attachment.url);



    })



    .open();



  });



  $('.about_first_ser_three_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.about_first_ser_three_img').attr('src', attachment.url);



      $('.about_first_ser_three_img_url').val(attachment.url);



    })



    .open();



  });

  $('.about_first_ser_four_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.about_first_ser_four_img').attr('src', attachment.url);



      $('.about_first_ser_four_img_url').val(attachment.url);



    })



    .open();



  });



  $('.about_first_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.about_first_img').attr('src', attachment.url);



      $('.about_first_img_url').val(attachment.url);



    })



    .open();



  });



  $('.about_second_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.about_second_img').attr('src', attachment.url);



      $('.about_second_img_url').val(attachment.url);



    })



    .open();



  });



  $('.about_third_img_upload').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.about_third_img').attr('src', attachment.url);



      $('.about_third_img_url').val(attachment.url);



    })



    .open();



  });



  $('.about_fourth_img_upload_one').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.about_fourth_img_one').attr('src', attachment.url);



      $('.about_fourth_img_url_one').val(attachment.url);



    })



    .open();



  });



  $('.about_fourth_img_upload_two').click(function(e) {



    e.preventDefault();



    var custom_uploader = wp.media({



      title: 'Image Choose',



      button: {



        text: 'Upload Image'



      },



      multiple: false  // Set this to true to allow multiple files to be  selected



    })



    .on('select', function() {



      var attachment = custom_uploader.state().get('selection').first().toJSON();



      $('.about_fourth_img_two').attr('src', attachment.url);



      $('.about_fourth_img_url_two').val(attachment.url);



    })



    .open();



  });

  jQuery(document).ready(function() {

        jQuery('#_add_series_image').click(function() {

          wp.media.editor.send.attachment = function(props, attachment) {

            jQuery('.series-image').val(attachment.url);

          }

          wp.media.editor.open(this);

          return false;

        });

      });

  jQuery(document).ready(function() {

        jQuery('#_series_image').click(function() {

          wp.media.editor.send.attachment = function(props, attachment) {

            jQuery('#series-img').attr("src",attachment.url)

            jQuery('.series-image').val(attachment.url)

          }

          wp.media.editor.open(this);

          return false;

        });

      });

});

      // get the inputs
      const inputs = [].slice.call(document.querySelectorAll('.controls input'));

      // listen for changes
      inputs.forEach(input => input.addEventListener('change', handleUpdate));
      inputs.forEach(input => input.addEventListener('mousemove', handleUpdate));

      function handleUpdate(e) {
        // append 'px' to the end of spacing and blur variables
        const suffix = (this.id === 'primaryColor' ? '' : 'px');
        document.documentElement.style.setProperty(`--${this.id}`, this.value + suffix);
      }

   

