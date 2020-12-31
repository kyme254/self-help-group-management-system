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
                    <h4 class="record-title">Complaints</h4>
                </div>
                <div class="col-sm-3 ">
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("complaints/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New Complaints 
                    </a>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('complaints'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('complaints'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('complaints'); ?>">
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
                    <div class="col-md-4 comp-grid">
                        <form method="get" action="<?php print_link($current_page) ?>" class="form filter-form">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Drop Down
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php
                                    $complaints_status_options = Menu :: $complaints_status;
                                    if(!empty($complaints_status_options)){
                                    foreach($complaints_status_options as $option){
                                    $value = $option['value'];
                                    $label = $option['label'];
                                    $nav_link = $this->set_current_page_link(array('complaints_status' => $value ) , true);
                                    $is_active = is_active_link('complaints_status', $value);
                                    ?>
                                    <a class="dropdown-item <?php echo $is_active; ?>" href="<?php print_link($nav_link) ?>">
                                        <?php echo $label ?>
                                    </a>
                                    <?php
                                    }
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr />
                            <div class="form-group text-center">
                                <button class="btn btn-primary">Filter</button>
                            </div>
                        </form>
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
                        <div class="filter-tags mb-2">
                            <?php
                            if(!empty(get_value('complaints_status'))){
                            ?>
                            <div class="filter-chip card bg-light">
                                <b>Complaints Status :</b> 
                                <?php 
                                if(get_value('complaints_statuslabel')){
                                echo get_value('complaints_statuslabel');
                                }
                                else{
                                echo get_value('complaints_status');
                                }
                                $remove_link = unset_get_value('complaints_status', $this->route->page_url);
                                ?>
                                <a href="<?php print_link($remove_link); ?>" class="close-btn">
                                    &times;
                                </a>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div  class=" animated fadeIn page-content">
                            <div id="complaints-list-records">
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
                                            <div class=" card-small p-2 mb-3 animated bounceIn">
                                                <div class="dropdown dropup td-btn"  >
                                                    <button data-toggle="dropdown" class="btn btn-flat btn-sm">
                                                        <i class="fa fa-ellipsis-v"></i> 
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?php print_link("complaints/view/$rec_id"); ?>">
                                                            <i class="fa fa-eye"></i> View 
                                                        </a>
                                                        <a class="dropdown-item" href="<?php print_link("complaints/edit/$rec_id"); ?>">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                        <a  class="dropdown-item record-delete-btn" href="<?php print_link("complaints/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                            <i class="fa fa-times"></i> Delete 
                                                        </a>
                                                    </ul>
                                                </div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        Headline:  
                                                    </span>
                                                <?php echo $data['headline']; ?></div>
                                                <div><?php echo $data['message']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        Date:  
                                                    </span>
                                                <?php echo $data['date']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        Sender:  
                                                    </span>
                                                <?php echo $data['sender']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        Status:  
                                                    </span>
                                                <?php echo $data['status']; ?></div>
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
