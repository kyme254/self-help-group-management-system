<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <h4 >Our Dashboard</h4>
                </div>
                <div class="col-md-6 comp-grid">
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_users();  ?>
                    <a class="animated rubberBand record-count alert alert-info"  href="<?php print_link("users/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-user-times fa-4x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Users</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 comp-grid">
                    <?php $rec_count = $comp_model->getcount_comment();  ?>
                    <a class="animated rubberBand record-count card bg-dark text-white"  href="<?php print_link("comment/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-comments-o fa-4x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Comment</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_complaints();  ?>
                    <a class="animated rubberBand record-count card bg-success text-white"  href="<?php print_link("complaints/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-chevron-circle-right fa-5x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Complaints</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 comp-grid">
                    <?php $rec_count = $comp_model->getcount_staff();  ?>
                    <a class="animated zoomIn record-count card bg-warning text-white"  href="<?php print_link("staff/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-male fa-5x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Staff</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_member();  ?>
                    <a class="animated rubberBand record-count alert alert-warning"  href="<?php print_link("member/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-street-view fa-5x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Member</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_events();  ?>
                    <a class="animated rotateInUpRight record-count alert alert-secondary"  href="<?php print_link("events/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-level-up fa-5x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Events</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_contributions();  ?>
                    <a class="animated zoomIn record-count alert alert-primary"  href="<?php print_link("contributions/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-sort-amount-desc fa-5x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Contributions</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_desciplinary();  ?>
                    <a class="animated rubberBand record-count alert alert-dark"  href="<?php print_link("desciplinary/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-angle-double-left fa-3x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Desciplinary</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_logisticasset();  ?>
                    <a class="animated rubberBand record-count card bg-warning text-white"  href="<?php print_link("logistic_asset/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-location-arrow fa-4x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Logistic Asset</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_project();  ?>
                    <a class="animated rubberBand record-count alert alert-primary"  href="<?php print_link("project/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-download fa-4x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Project</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_loanpayment();  ?>
                    <a class="animated slideInLeft record-count card bg-light text-dark"  href="<?php print_link("loanpayment/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-long-arrow-left fa-4x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Loanpayment</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 ">
                    <?php $rec_count = $comp_model->getcount_expenses();  ?>
                    <a class="animated rubberBand record-count card bg-success text-white"  href="<?php print_link("expenses/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-arrows fa-4x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Expenses</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_bankinfo();  ?>
                    <a class="animated rubberBand record-count card bg-light text-dark"  href="<?php print_link("bank_info/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-bank fa-4x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Bank Info</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_logisticasset();  ?>
                    <a class="animated slideInRight record-count alert alert-warning"  href="<?php print_link("logistic_asset/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-backward fa-4x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Logistic Asset</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
