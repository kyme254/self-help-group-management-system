<?php
$comp_model = new SharedController;
$page_element_id = "list-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data From Controller
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="grid" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Loan</h4>
                </div>
                <div class="col-sm-3 ">
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("loan/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New Loan 
                    </a>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('loan'); ?>" method="get">
                        <div class="input-group">
                            <input value="<?php echo get_value('search'); ?>" class="form-control" type="text" name="search"  placeholder="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 comp-grid">
                        <div class="">
                            <!-- Page bread crumbs components-->
                            <?php
                            if(!empty($field_name) || !empty($_GET['search'])){
                            ?>
                            <hr class="sm d-block d-sm-none" />
                            <nav class="page-header-breadcrumbs mt-2" aria-label="breadcrumb">
                                <ul class="breadcrumb m-0 p-1">
                                    <?php
                                    if(!empty($field_name)){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('loan'); ?>">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <?php echo (get_value("tag") ? get_value("tag")  :  make_readable($field_name)); ?>
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold">
                                        <?php echo (get_value("label") ? get_value("label")  :  make_readable(urldecode($field_value))); ?>
                                    </li>
                                    <?php 
                                    }   
                                    ?>
                                    <?php
                                    if(get_value("search")){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('loan'); ?>">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item text-capitalize">
                                        Search
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold"><?php echo get_value("search"); ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </nav>
                            <!--End of Page bread crumbs components-->
                            <?php
                            }
                            ?>
                        </div>
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
                        <div  class=" animated fadeIn page-content">
                            <div id="loan-list-records">
                                <?php
                                if(!empty($records)){
                                ?>
                                <div id="page-report-body">
                                    <div class="row sm-gutters page-data" id="page-data-<?php echo $page_element_id; ?>">
                                        <!--record-->
                                        <?php
                                        $counter = 0;
                                        foreach($records as $data){
                                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                        $counter++;
                                        ?>
                                        <div class="col-sm-4">
                                            <div class="card-small p-2 mb-3 animated bounceIn">
                                                <div class="mb-2">  
                                                    <span  data-value="<?php echo $data['applicant_name']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="applicant_name" 
                                                        data-title="Enter Applicant Name" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Applicant Name:  
                                                        </span>
                                                        <?php echo $data['applicant_name']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span  data-value="<?php echo $data['identification']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="identification" 
                                                        data-title="Enter Identification" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Identification:  
                                                        </span>
                                                        <?php echo $data['identification']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span  data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                        data-value="<?php echo $data['birthday']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="birthday" 
                                                        data-title="Enter Birthday" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="flatdatetimepicker" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Birthday:  
                                                        </span>
                                                        <?php echo $data['birthday']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span  data-source='<?php echo json_encode_quote(Menu :: $gender); ?>' 
                                                        data-value="<?php echo $data['gender']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="gender" 
                                                        data-title="Enter Gender" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="radiolist" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Gender:  
                                                        </span>
                                                        <?php echo $data['gender']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span  data-value="<?php echo $data['address']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="address" 
                                                        data-title="Enter Address" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Address:  
                                                        </span>
                                                        <?php echo $data['address']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span  data-value="<?php echo $data['town']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="town" 
                                                        data-title="Enter Town" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Town:  
                                                        </span>
                                                        <?php echo $data['town']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span  data-value="<?php echo $data['street']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="street" 
                                                        data-title="Enter Street" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Street:  
                                                        </span>
                                                        <?php echo $data['street']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span  data-source='<?php echo json_encode_quote(Menu :: $house); ?>' 
                                                        data-value="<?php echo $data['house']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="house" 
                                                        data-title="Select a value ..." 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="select" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            House:  
                                                        </span>
                                                        <?php echo $data['house']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span  data-source='<?php echo json_encode_quote(Menu :: $marital_status); ?>' 
                                                        data-value="<?php echo $data['marital_status']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="marital_status" 
                                                        data-title="Select a value ..." 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="select" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Marital Status:  
                                                        </span>
                                                        <?php echo $data['marital_status']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span  data-source='<?php echo json_encode_quote(Menu :: $employment_terms); ?>' 
                                                        data-value="<?php echo $data['employment_terms']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="employment_terms" 
                                                        data-title="Select a value ..." 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="select" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Employment Terms:  
                                                        </span>
                                                        <?php echo $data['employment_terms']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span  data-source='<?php echo json_encode_quote(Menu :: $loan_type); ?>' 
                                                        data-value="<?php echo $data['loan_type']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="loan_type" 
                                                        data-title="Enter Loan Type" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="checklist" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Loan Type:  
                                                        </span>
                                                        <?php echo $data['loan_type']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span  data-source='<?php echo json_encode_quote(Menu :: $security_details); ?>' 
                                                        data-value="<?php echo $data['security_details']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="security_details" 
                                                        data-title="Enter Security Details" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="radiolist" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Security Details:  
                                                        </span>
                                                        <?php echo $data['security_details']; ?> 
                                                    </span>
                                                </div>
                                                <div><?php echo $data['conditions']; ?></div>
                                                <div class="mb-2">  
                                                    <span  data-source='<?php echo json_encode_quote(Menu :: $approval); ?>' 
                                                        data-value="<?php echo $data['approval']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="approval" 
                                                        data-title="Enter Approval" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="radiolist" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Approval:  
                                                        </span>
                                                        <?php echo $data['approval']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span  data-source='<?php echo json_encode_quote(Menu :: $loan_status); ?>' 
                                                        data-value="<?php echo $data['loan_status']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="loan_status" 
                                                        data-title="Enter Loan Status" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="radiolist" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Loan Status:  
                                                        </span>
                                                        <?php echo $data['loan_status']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span  data-source='<?php echo json_encode_quote(Menu :: $payment_period); ?>' 
                                                        data-value="<?php echo $data['payment_period']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("loan/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="payment_period" 
                                                        data-title="Enter Payment Period" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="radiolist" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" >
                                                        <span class="font-weight-light text-muted ">
                                                            Payment Period:  
                                                        </span>
                                                        <?php echo $data['payment_period']; ?> 
                                                    </span>
                                                </div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        Date:  
                                                    </span>
                                                <?php echo $data['date']; ?></div>
                                                <div class="td-btn">
                                                    <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("loan/view/$rec_id"); ?>">
                                                        <i class="fa fa-eye"></i> View
                                                    </a>
                                                    <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("loan/edit/$rec_id"); ?>">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                    <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("loan/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                        <i class="fa fa-times"></i>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                        }
                                        ?>
                                        <!--endrecord-->
                                    </div>
                                    <div class="row sm-gutters search-data" id="search-data-<?php echo $page_element_id; ?>"></div>
                                    <div>
                                    </div>
                                </div>
                                <?php
                                if($show_footer == true){
                                ?>
                                <div class=" border-top mt-2">
                                    <div class="row justify-content-center">    
                                        <div class="col-md-auto">   
                                        </div>
                                        <div class="col">   
                                            <?php
                                            if($show_pagination == true){
                                            $pager = new Pagination($total_records, $record_count);
                                            $pager->route = $this->route;
                                            $pager->show_page_count = true;
                                            $pager->show_record_count = true;
                                            $pager->show_page_limit =true;
                                            $pager->limit_count = $this->limit_count;
                                            $pager->show_page_number_list = true;
                                            $pager->pager_link_range=5;
                                            $pager->render();
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                }
                                else{
                                ?>
                                <div class="text-muted  animated bounce p-3">
                                    <h4><i class="fa fa-ban"></i> No record found</h4>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
