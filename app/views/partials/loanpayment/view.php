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
                    <h4 class="record-title">View  Loanpayment</h4>
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
                                    <tr  class="td-member_name">
                                        <th class="title"> Member Name: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['member_name']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("loanpayment/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="member_name" 
                                                data-title="Enter Member Name" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['member_name']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-amount">
                                        <th class="title"> Amount: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['amount']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("loanpayment/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="amount" 
                                                data-title="Enter Amount" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['amount']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-intrest_percentage">
                                        <th class="title"> Intrest Percentage: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['intrest_percentage']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("loanpayment/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="intrest_percentage" 
                                                data-title="Enter Intrest Percentage" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['intrest_percentage']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-total_pay">
                                        <th class="title"> Total Pay: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['total_pay']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("loanpayment/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="total_pay" 
                                                data-title="Enter Total Pay" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['total_pay']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-total_amount">
                                        <th class="title"> Total Amount: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['total_amount']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("loanpayment/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="total_amount" 
                                                data-title="Enter Total Amount" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['total_amount']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-total_due">
                                        <th class="title"> Total Due: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['total_due']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("loanpayment/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="total_due" 
                                                data-title="Enter Total Due" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['total_due']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-installment">
                                        <th class="title"> Installment: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['installment']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("loanpayment/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="installment" 
                                                data-title="Enter Installment" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['installment']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <div><?php echo $data['loan_details']; ?></div>
                                    <tr  class="td-approve_date">
                                        <th class="title"> Approve Date: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{altFormat: 'Y-m-d', minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['approve_date']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("loanpayment/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="approve_date" 
                                                data-title="Enter Approve Date" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['approve_date']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-install_period">
                                        <th class="title"> Install Period: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['install_period']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("loanpayment/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="install_period" 
                                                data-title="Enter Install Period" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['install_period']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-status">
                                        <th class="title"> Status: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['status']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("loanpayment/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="status" 
                                                data-title="Enter Status" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['status']; ?> 
                                            </span>
                                        </td>
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
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("loanpayment/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("loanpayment/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
