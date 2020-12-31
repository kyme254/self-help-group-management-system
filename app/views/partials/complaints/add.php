<?php
$comp_model = new SharedController;
$page_element_id = "add-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="add"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Add New Complaints</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-7 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form id="complaints-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="<?php print_link("complaints/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="headline">Headline <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="ctrl-headline"  value="<?php  echo $this->set_field_value('headline',""); ?>" type="text" placeholder="Enter Headline"  required="" name="headline"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="message">Message <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <textarea placeholder="Enter Message" id="ctrl-message"  required="" rows="5" name="message" class="htmleditor form-control"><?php  echo $this->set_field_value('message',""); ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input id="ctrl-date"  value="<?php  echo $this->set_field_value('date',datetime_now()); ?>" type="hidden" placeholder="Enter Date"  name="date"  class="form-control " />
                                        <input id="ctrl-sender"  value="<?php  echo $this->set_field_value('sender',USER_NAME); ?>" type="hidden" placeholder="Enter Sender"  name="sender"  class="form-control " />
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="status">Status <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <select required=""  id="ctrl-status" name="status"  placeholder="set status ..."    class="custom-select" >
                                                                <option value="">set status ...</option>
                                                                <?php
                                                                $status_options = Menu :: $status;
                                                                if(!empty($status_options)){
                                                                foreach($status_options as $option){
                                                                $value = $option['value'];
                                                                $label = $option['label'];
                                                                $selected = $this->set_field_selected('status', $value, "");
                                                                ?>
                                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                    <?php echo $label ?>
                                                                </option>                                   
                                                                <?php
                                                                }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-submit-btn-holder text-center mt-3">
                                            <div class="form-ajax-status"></div>
                                            <button class="btn btn-primary" type="submit">
                                                Submit
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
