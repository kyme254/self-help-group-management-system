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
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Loan</h4>
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
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-applicant_name">
                                        <th class="title"> Applicant Name: </th>
                                        <td class="value">
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
                                                <?php echo $data['applicant_name']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-identification">
                                        <th class="title"> Identification: </th>
                                        <td class="value">
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
                                                <?php echo $data['identification']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-birthday">
                                        <th class="title"> Birthday: </th>
                                        <td class="value">
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
                                                <?php echo $data['birthday']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-gender">
                                        <th class="title"> Gender: </th>
                                        <td class="value">
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
                                                <?php echo $data['gender']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-address">
                                        <th class="title"> Address: </th>
                                        <td class="value">
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
                                                <?php echo $data['address']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-town">
                                        <th class="title"> Town: </th>
                                        <td class="value">
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
                                                <?php echo $data['town']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-street">
                                        <th class="title"> Street: </th>
                                        <td class="value">
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
                                                <?php echo $data['street']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-house">
                                        <th class="title"> House: </th>
                                        <td class="value">
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
                                                <?php echo $data['house']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-marital_status">
                                        <th class="title"> Marital Status: </th>
                                        <td class="value">
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
                                                <?php echo $data['marital_status']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-employment_terms">
                                        <th class="title"> Employment Terms: </th>
                                        <td class="value">
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
                                                <?php echo $data['employment_terms']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-loan_type">
                                        <th class="title"> Loan Type: </th>
                                        <td class="value">
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
                                                <?php echo $data['loan_type']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-security_details">
                                        <th class="title"> Security Details: </th>
                                        <td class="value">
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
                                                <?php echo $data['security_details']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <div><?php echo $data['conditions']; ?></div>
                                    <tr  class="td-approval">
                                        <th class="title"> Approval: </th>
                                        <td class="value">
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
                                                <?php echo $data['approval']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-loan_status">
                                        <th class="title"> Loan Status: </th>
                                        <td class="value">
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
                                                <?php echo $data['loan_status']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-payment_period">
                                        <th class="title"> Payment Period: </th>
                                        <td class="value">
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
                                                <?php echo $data['payment_period']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-date">
                                        <th class="title"> Date: </th>
                                        <td class="value"> <?php echo $data['date']; ?></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("loan/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("loan/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Delete
                                                </a>
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
                    </section>
