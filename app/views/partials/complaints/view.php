<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page ajax-page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="custom" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div  id="page-report-body" class="">
                            <?php Html::ajaxpage_spinner(); ?>
                            <div><?php echo $data['message']; ?></div>
                        </div>
                        <div class="p-3">
                        </div>
                        <?php
                        }
                        else{
                        ?>
                        <!-- Empty Record Message -->
                        <div class="text-muted p-3">
                            <i class="fa fa-ban"></i> No Record Found
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                </div>
                <div class="col-md-4 comp-grid">
                </div>
                <div class="col-md-12 comp-grid">
                    <div class=" reset-grids">
                        <?php  
                        $this->render_page("comment/add" , array( 'complaint_id' => $data['id'] )); 
                        ?>
                    </div>
                </div>
                <div class="col-md-8 comp-grid">
                </div>
                <div class="col-md-12 comp-grid">
                    <div class=" ">
                        <?php  
                        $this->render_page("comment/list/comment.complaint_id/$data[id]?orderby=comment.complaint_id&ordertype=DESC&limit_count=10" , array( 'show_header' => false,'show_footer' => false )); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
