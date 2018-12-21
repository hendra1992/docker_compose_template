<?php
function stm_get_megamenu_config($layout)
{
	$mega = stm_megamenu_config();
	return (!empty($mega[$layout]) ? $mega[$layout] : array());

}

function stm_megamenu_config()
{
	$mega = array(
		'business_demo'      => array('Home' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Pages' => array('stm_mega' => 'boxed', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Company overview' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Company image' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '3677',), 'Company text' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '17 years of experience helping people to find the best solutions.',), 'Extra Pages' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Appointments' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Careers' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Single Vacancy' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Shop' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Single Product' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Company' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'About' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Our team' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Mission' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Our history' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Contacts' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Contact info' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
1010 Avenue of the Moon New York, NY 10018 US.
+1 628 123 4000
berg@crypterio.wp
Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED
',), 'Events' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Events List' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Single Event' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Services' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Services Grid' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Single Service' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'News' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'News List' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'News Grid' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Single Post' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Cases' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Cases Grid' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Single Case' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Elements' => array('stm_mega' => 'boxed', 'stm_mega_cols' => '5', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_bg' => '2612',), 'Elements 1' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Buttons' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Carousel' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Counters' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'CTA' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Donations' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Google map' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Elements 2' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'History' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Icons' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Icon list' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Icon boxes' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Infobox' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Open hours' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Partners' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Elements 3' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Projects Carousel' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Post timeline' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Projects Gallery' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Progress' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Pricing plans' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Recent posts' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Elements 4' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Schedule' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Staff grid' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Staff list' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Services Price list' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Separator' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Success stories' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Testimonials' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Elements 5' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Albums' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Album info' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Header builder' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Video' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Vacancies' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Video list' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Upcoming event' => array('stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',),),
		'personal_blog' => array('Home' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Home 2' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Home 3' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Blog' => array('stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_bg' => '3476',), 'Lifestyle' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), '6 Things You Need to Recover From Every Day' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), '7 Women Share Their "Breakup Haircut" Stories' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'How This Anxious Introvert Handles Large Events' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'I’m a Sugar Baby for Other Women' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Fashion' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'What Classic Fashion Industry Really Is.' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Ten Gigantic Influences Of Classic Fashion.' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Ten Things That You Never Expect On Classic Fashion.' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Try These Takes on a Classic Button-Up' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Beauty' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'How To Get People To Like Closet Beauty.' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Here\'s What No One Tells You About Beauty.' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Five Shitty Things Beauty Have Done In 2017.' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), '5 Sporty Pieces You Need In Your Closet' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Travel' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), '5 Clarifications On Travel.' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Seven Secrets About Travel' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'The Ten Common Stereotypes When It Comes To Travel.' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Why You Face Obstacles In Learning Travel.' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Interview' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Ten Brilliant Ways To Advertise Story.' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Five Clarifications On Story.' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), '10 Common Mistakes Everyone Makes In Story.' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Jessica Krause has no regrets & she told us exactly why' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',), 'Advertisement' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '70',), 'About me' => array('stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default',),)
	);

	return $mega;
}