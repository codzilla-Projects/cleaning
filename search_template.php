<!-- Search PopUp-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="box-inner-wrap d-flex align-items-center">
                    <form id="form" action="<?php echo home_url('/'); ?>" method="get" >
                        <input id="popup-search" type="text" name="s" value="<?php echo get_search_query(); ?>"  placeholder="اكتب ما تريد البحث عنه " />
                        <button id="popup-search-button"  name="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /#dl-popup-search-box -->
