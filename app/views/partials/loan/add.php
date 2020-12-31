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
                    <h4 class="record-title">Add New Loan</h4>
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
                        <form id="loan-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="<?php print_link("loan/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="applicant_name">Applicant Name <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="ctrl-applicant_name"  value="<?php  echo $this->set_field_value('applicant_name',""); ?>" type="text" placeholder="Enter Applicant Name"  required="" name="applicant_name"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="identification">Identification <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-identification"  value="<?php  echo $this->set_field_value('identification',""); ?>" type="text" placeholder="Enter Identification"  required="" name="identification"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="birthday">Birthday <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <input id="ctrl-birthday" class="form-control datepicker  datepicker" required="" value="<?php  echo $this->set_field_value('birthday',date_now()); ?>" type="datetime"  name="birthday" placeholder="Enter Birthday" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="gender">Gender <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <?php
                                                            $gender_options = Menu :: $gender;
                                                            if(!empty($gender_options)){
                                                            foreach($gender_options as $option){
                                                            $value = $option['value'];
                                                            $label = $option['label'];
                                                            //check if current option is checked option
                                                            $checked = $this->set_field_checked('gender', $value, "");
                                                            ?>
                                                            <label class="custom-control custom-radio custom-control-inline">
                                                                <input id="ctrl-gender" class="custom-control-input" <?php echo $checked ?>  value="<?php echo $value ?>" type="radio" required=""   name="gender" />
                                                                    <span class="custom-control-label"><?php echo $label ?></span>
                                                                </label>
                                                                <?php
                                                                }
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="address">Address <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <input id="ctrl-address"  value="<?php  echo $this->set_field_value('address',""); ?>" type="text" placeholder="Enter Address"  required="" name="address"  class="form-control " />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="town">Town <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <input id="ctrl-town"  value="<?php  echo $this->set_field_value('town',""); ?>" type="text" placeholder="Enter Town"  required="" name="town"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="street">Street <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <input id="ctrl-street"  value="<?php  echo $this->set_field_value('street',""); ?>" type="text" placeholder="Enter Street"  required="" name="street"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="house">House <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <select required=""  id="ctrl-house" name="house"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select a value ...</option>
                                                                                <?php
                                                                                $house_options = Menu :: $house;
                                                                                if(!empty($house_options)){
                                                                                foreach($house_options as $option){
                                                                                $value = $option['value'];
                                                                                $label = $option['label'];
                                                                                $selected = $this->set_field_selected('house', $value, "");
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
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="marital_status">Marital Status <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <select required=""  id="ctrl-marital_status" name="marital_status"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select a value ...</option>
                                                                                <?php
                                                                                $marital_status_options = Menu :: $marital_status;
                                                                                if(!empty($marital_status_options)){
                                                                                foreach($marital_status_options as $option){
                                                                                $value = $option['value'];
                                                                                $label = $option['label'];
                                                                                $selected = $this->set_field_selected('marital_status', $value, "");
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
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="employment_terms">Employment Terms <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <select required=""  id="ctrl-employment_terms" name="employment_terms"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select a value ...</option>
                                                                                <?php
                                                                                $employment_terms_options = Menu :: $employment_terms;
                                                                                if(!empty($employment_terms_options)){
                                                                                foreach($employment_terms_options as $option){
                                                                                $value = $option['value'];
                                                                                $label = $option['label'];
                                                                                $selected = $this->set_field_selected('employment_terms', $value, "");
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
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="loan_type">Loan Type <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <?php
                                                                            $loan_type_options = Menu :: $loan_type;
                                                                            if(!empty($loan_type_options)){
                                                                            foreach($loan_type_options as $option){
                                                                            $value = $option['value'];
                                                                            $label = $option['label'];
                                                                            //check if current option is checked option
                                                                            $checked = $this->set_field_checked('loan_type', $value, "");
                                                                            ?>
                                                                            <label class="form-check option-btn">
                                                                                <input id="ctrl-loan_type" class="form-check-input" value="<?php echo $value ?>" <?php echo $checked ?> type="checkbox" required=""  name="loan_type[]" />
                                                                                    <span class="form-check-label"><?php echo $label ?></span>
                                                                                </label>
                                                                                <?php
                                                                                }
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="security_details">Security Details <span class="text-danger">*</span></label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="">
                                                                                <?php
                                                                                $security_details_options = Menu :: $security_details;
                                                                                if(!empty($security_details_options)){
                                                                                foreach($security_details_options as $option){
                                                                                $value = $option['value'];
                                                                                $label = $option['label'];
                                                                                //check if current option is checked option
                                                                                $checked = $this->set_field_checked('security_details', $value, "");
                                                                                ?>
                                                                                <label class="btn btn-sm btn-primary">
                                                                                    <input id="ctrl-security_details" class="" <?php echo $checked ?>  value="<?php echo $value ?>" type="radio" required=""   name="security_details" />
                                                                                        <span class=""><?php echo $label ?></span>
                                                                                    </label>
                                                                                    <?php
                                                                                    }
                                                                                    }
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label class="control-label" for="conditions">Conditions <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="">
                                                                                    <?php
                                                                                    $conditions_options = Menu :: $conditions;
                                                                                    if(!empty($conditions_options)){
                                                                                    foreach($conditions_options as $option){
                                                                                    $value = $option['value'];
                                                                                    $label = $option['label'];
                                                                                    //check if current option is checked option
                                                                                    $checked = $this->set_field_checked('conditions', $value, "");
                                                                                    ?>
                                                                                    <label class="form-check form-check-inline option-btn">
                                                                                        <input id="ctrl-conditions" class="form-check-input" value="<?php echo $value ?>" <?php echo $checked ?> type="checkbox" required=""  name="conditions[]" />
                                                                                            <span class="form-check-label"><?php echo $label ?></span>
                                                                                        </label>
                                                                                        <?php
                                                                                        }
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="approval">Approval <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="">
                                                                                        <?php
                                                                                        $approval_options = Menu :: $approval;
                                                                                        if(!empty($approval_options)){
                                                                                        foreach($approval_options as $option){
                                                                                        $value = $option['value'];
                                                                                        $label = $option['label'];
                                                                                        //check if current option is checked option
                                                                                        $checked = $this->set_field_checked('approval', $value, "");
                                                                                        ?>
                                                                                        <label class="form-check form-check-inline">
                                                                                            <input id="ctrl-approval" class="form-check-input" <?php echo $checked ?>  value="<?php echo $value ?>" type="radio" required=""   name="approval" />
                                                                                                <span class="form-check-label"><?php echo $label ?></span>
                                                                                            </label>
                                                                                            <?php
                                                                                            }
                                                                                            }
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <label class="control-label" for="loan_status">Loan Status <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-sm-8">
                                                                                        <div class="">
                                                                                            <?php
                                                                                            $loan_status_options = Menu :: $loan_status;
                                                                                            if(!empty($loan_status_options)){
                                                                                            foreach($loan_status_options as $option){
                                                                                            $value = $option['value'];
                                                                                            $label = $option['label'];
                                                                                            //check if current option is checked option
                                                                                            $checked = $this->set_field_checked('loan_status', $value, "");
                                                                                            ?>
                                                                                            <label class="custom-control custom-radio custom-control-inline">
                                                                                                <input id="ctrl-loan_status" class="custom-control-input" <?php echo $checked ?>  value="<?php echo $value ?>" type="radio" required=""   name="loan_status" />
                                                                                                    <span class="custom-control-label"><?php echo $label ?></span>
                                                                                                </label>
                                                                                                <?php
                                                                                                }
                                                                                                }
                                                                                                ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <label class="control-label" for="payment_period">Payment Period <span class="text-danger">*</span></label>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <div class="">
                                                                                                <?php
                                                                                                $payment_period_options = Menu :: $payment_period;
                                                                                                if(!empty($payment_period_options)){
                                                                                                foreach($payment_period_options as $option){
                                                                                                $value = $option['value'];
                                                                                                $label = $option['label'];
                                                                                                //check if current option is checked option
                                                                                                $checked = $this->set_field_checked('payment_period', $value, "");
                                                                                                ?>
                                                                                                <label class="btn btn-sm btn-primary">
                                                                                                    <input id="ctrl-payment_period" class="" <?php echo $checked ?>  value="<?php echo $value ?>" type="radio" required=""   name="payment_period" />
                                                                                                        <span class=""><?php echo $label ?></span>
                                                                                                    </label>
                                                                                                    <?php
                                                                                                    }
                                                                                                    }
                                                                                                    ?>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-4">
                                                                                                <label class="control-label" for="date">Date </label>
                                                                                            </div>
                                                                                            <div class="col-sm-8">
                                                                                                <div class="input-group">
                                                                                                    <input id="ctrl-date" class="form-control datepicker  datepicker" value="<?php  echo $this->set_field_value('date',date('Y-m-d', strtotime('-1day'))); ?>" type="datetime"  name="date" placeholder="Enter Date" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="Y-m-d" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                                                                        <div class="input-group-append">
                                                                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                                        </div>
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
