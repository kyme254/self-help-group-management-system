<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-tachometer "></i>'
		),
		
		array(
			'path' => 'users', 
			'label' => 'Users', 
			'icon' => '<i class="fa fa-users "></i>'
		),
		
		array(
			'path' => 'complaints', 
			'label' => 'Complaints', 
			'icon' => '<i class="fa fa-arrow-circle-left "></i>'
		),
		
		array(
			'path' => 'comment', 
			'label' => 'Comment', 
			'icon' => '<i class="fa fa-comments "></i>'
		),
		
		array(
			'path' => 'staff', 
			'label' => 'Staff', 
			'icon' => '<i class="fa fa-optin-monster "></i>'
		),
		
		array(
			'path' => 'events', 
			'label' => 'Events', 
			'icon' => '<i class="fa fa-level-down "></i>'
		),
		
		array(
			'path' => 'contributions', 
			'label' => 'Contributions', 
			'icon' => '<i class="fa fa-diamond fa-3x"></i>'
		),
		
		array(
			'path' => 'loan', 
			'label' => 'Loan', 
			'icon' => '<i class="fa fa-money "></i>'
		),
		
		array(
			'path' => 'member', 
			'label' => 'Member', 
			'icon' => '<i class="fa fa-meh-o fa-2x"></i>'
		),
		
		array(
			'path' => 'bank_info', 
			'label' => 'Bank Info', 
			'icon' => '<i class="fa fa-bars fa-4x"></i>'
		),
		
		array(
			'path' => 'desciplinary', 
			'label' => 'Desciplinary', 
			'icon' => '<i class="fa fa-outdent fa-4x"></i>'
		),
		
		array(
			'path' => 'logistic_asset', 
			'label' => 'Logistic Asset', 
			'icon' => '<i class="fa fa-folder-o fa-4x"></i>'
		),
		
		array(
			'path' => 'project', 
			'label' => 'Project', 
			'icon' => '<i class="fa fa-sliders fa-4x"></i>'
		),
		
		array(
			'path' => 'loanpayment', 
			'label' => 'Loanpayment', 
			'icon' => '<i class="fa fa-slideshare fa-4x"></i>'
		),
		
		array(
			'path' => 'expenses', 
			'label' => 'Expenses', 
			'icon' => '<i class="fa fa-transgender fa-4x"></i>'
		)
	);
		
	
	
			public static $status = array(
		array(
			"value" => "active", 
			"label" => "Active", 
		),
		array(
			"value" => "completed", 
			"label" => "Inactive", 
		),);
		
			public static $postion = array(
		array(
			"value" => "chairman", 
			"label" => "Chairman", 
		),
		array(
			"value" => "vice chairman", 
			"label" => "Vice Chairman", 
		),
		array(
			"value" => "secretary", 
			"label" => "Secretary", 
		),
		array(
			"value" => "vice secretary", 
			"label" => "Vice Secretary", 
		),
		array(
			"value" => "member representave", 
			"label" => "Member Representave", 
		),
		array(
			"value" => "trustee", 
			"label" => "Trustee", 
		),
		array(
			"value" => "organising secretary", 
			"label" => "Organising Secretary", 
		),);
		
			public static $status2 = array(
		array(
			"value" => "active", 
			"label" => "Active", 
		),
		array(
			"value" => "unactive", 
			"label" => "Unactive", 
		),);
		
			public static $contribution = array(
		array(
			"value" => "monthly", 
			"label" => "Monthly", 
		),
		array(
			"value" => "weekly", 
			"label" => "Weekly", 
		),
		array(
			"value" => "yearly", 
			"label" => "Yearly", 
		),
		array(
			"value" => "others", 
			"label" => "Others", 
		),);
		
			public static $gender = array(
		array(
			"value" => "Male", 
			"label" => "Male", 
		),
		array(
			"value" => "Female", 
			"label" => "Female", 
		),);
		
			public static $house = array(
		array(
			"value" => "own", 
			"label" => "Own", 
		),
		array(
			"value" => "rented", 
			"label" => "Rented", 
		),);
		
			public static $marital_status = array(
		array(
			"value" => "married", 
			"label" => "Married", 
		),
		array(
			"value" => "single", 
			"label" => "Single", 
		),
		array(
			"value" => "widowed", 
			"label" => "Widowed", 
		),);
		
			public static $employment_terms = array(
		array(
			"value" => "permanent", 
			"label" => "Permanent", 
		),
		array(
			"value" => "casual", 
			"label" => "Casual", 
		),
		array(
			"value" => "contract", 
			"label" => "Contract", 
		),
		array(
			"value" => "others", 
			"label" => "Others", 
		),);
		
			public static $loan_type = array(
		array(
			"value" => "business", 
			"label" => "Business", 
		),
		array(
			"value" => "school fee", 
			"label" => "School Fee", 
		),
		array(
			"value" => "family upkeep", 
			"label" => "Family Upkeep", 
		),
		array(
			"value" => "others", 
			"label" => "Others", 
		),);
		
			public static $security_details = array(
		array(
			"value" => "salary", 
			"label" => "Salary", 
		),
		array(
			"value" => "savings", 
			"label" => "Savings", 
		),
		array(
			"value" => "gruarantors", 
			"label" => "Gruarantors", 
		),
		array(
			"value" => "others", 
			"label" => "Others", 
		),);
		
			public static $approval = array(
		array(
			"value" => "Ksh 10000", 
			"label" => "Ksh 10000", 
		),
		array(
			"value" => "Ksh15000", 
			"label" => "Ksh15000", 
		),
		array(
			"value" => "Ksh20000", 
			"label" => "Ksh20000", 
		),
		array(
			"value" => "ksh25000", 
			"label" => "Ksh25000", 
		),);
		
			public static $loan_status = array(
		array(
			"value" => "approved", 
			"label" => "Approved", 
		),
		array(
			"value" => "rejected", 
			"label" => "Rejected", 
		),);
		
			public static $payment_period = array(
		array(
			"value" => "2 month", 
			"label" => "2Weeks", 
		),
		array(
			"value" => "1 month", 
			"label" => "1 Month", 
		),
		array(
			"value" => "6month", 
			"label" => "6Month", 
		),);
		
			public static $conditions = array(
		array(
			"value" => "Provide a minimum of 4 guarantors(for a loan above two milion provide minimun 6 eligible guarantors", 
			"label" => "Provide A Minimum Of 4 Guarantors(For A Loan Above Two Milion Provide Minimun 6 Eligible Guarantors", 
		),
		array(
			"value" => "after fill this form get official loan application form from our office", 
			"label" => "After Fill This Form Get Official Loan Application Form From Our Office", 
		),);
		
			public static $account_type = array(
		array(
			"value" => "group saving account", 
			"label" => "Group Saving Account", 
		),);
		
			public static $progress = array(
		array(
			"value" => "complete", 
			"label" => "Complete", 
		),
		array(
			"value" => "uncomplete", 
			"label" => "Uncomplete", 
		),);
		
			public static $complaints_status = array(
		array(
			"value" => "active", 
			"label" => "Active", 
		),
		array(
			"value" => "inactive", 
			"label" => "Inactive", 
		),);
		
}