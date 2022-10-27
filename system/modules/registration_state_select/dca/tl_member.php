<?php

/**
 * Registration State Select
 * States and Canadian Provinces as a Select menu for member registration extension for Contao CMS
 *
 * Copyright (C) 2019-2022 Andrew Stevens Consulting
 *
 * @package    asconsulting/registration_state_select
 * @link       https://andrewstevens.consulting
 */



/**
 * Table tl_member
 */
$GLOBALS['TL_DCA']['tl_member']['fields']['state']['inputType'] = 'select';
$GLOBALS['TL_DCA']['tl_member']['fields']['state']['eval']['includeBlankOption'] = true;
$GLOBALS['TL_DCA']['tl_member']['fields']['state']['options'] = array(
	"AL" => "Alabama",
	"AK" => "Alaska",
	"AZ" => "Arizona",
	"AR" => "Arkansas",
	"CA" => "California",
	"CO" => "Colorado",
	"CT" => "Connecticut",
	"DE" => "Delaware",
	"FL" => "Florida",
	"GA" => "Georgia",
	"HI" => "Hawaii",
	"ID" => "Idaho",
	"IL" => "Illinois",
	"IN" => "Indiana",
	"IA" => "Iowa",
	"KS" => "Kansas",
	"KY" => "Kentucky",
	"LA" => "Louisiana",
	"ME" => "Maine",
	"MD" => "Maryland",
	"MA" => "Massachusetts",
	"MI" => "Michigan",
	"MN" => "Minnesota",
	"MS" => "Mississippi",
	"MO" => "Missouri",
	"MT" => "Montana",
	"NE" => "Nebraska",
	"NV" => "Nevada",
	"NH" => "New Hampshire",
	"NJ" => "New Jersey",
	"NM" => "New Mexico",
	"NY" => "New York",
	"NC" => "North Carolina",
	"ND" => "North Dakota",
	"OH" => "Ohio",
	"OK" => "Oklahoma",
	"OR" => "Oregon",
	"PA" => "Pennsylvania",
	"RI" => "Rhode Island",
	"SC" => "South Carolina",
	"SD" => "South Dakota",
	"TN" => "Tennessee",
	"TX" => "Texas",
	"UT" => "Utah",
	"VT" => "Vermont",
	"VA" => "Virginia",
	"WA" => "Washington",
	"WV" => "West Virginia",
	"WI" => "Wisconsin",
	"WY" => "Wyoming",
	"AB" => "Alberta",
	"BC" => "British Columbia",
	"MB" => "Manitoba",
	"NB" => "New Brunswick",
	"NL" => "Newfoundland and Labrador",
	"NS" => "Nova Scotia",
	"NT" => "Northwest Territories",
	"NU" => "Nunavut",
	"ON" => "Ontario",
	"PE" => "Prince Edward Island",
	"QC" => "Quebec",
	"SK" => "Saskatchewan",
	"YT" => "Yukon"
);
