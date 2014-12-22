<?php
if(!defined('WPINC')) {
	exit;
}

$widget_items_helptexts = array(
	'title' =>                array('type'          => 'text',
	                                'caption'       => __('Title','eventlist'),
	                                'caption_after' => null,
	                                'tooltip'       => __('This option defines the displayed title for the widget.','eventlist'),
	                                'form_style'    => null,
	                                'form_width'    => null),

	'cat_filter' =>           array('type'          => 'text',
	                                'caption'       => __('Category Filter','eventlist').':',
	                                'caption_after' => null,
	                                'tooltip'       => __('This option defines the categories of which events are shown. The standard is all or an empty string to show all events. Specify a category slug or a list of category slugs to only show events of the specified categories. See description of the shortcode attribute cat_filter for detailed info about all possibilities.','eventlist'),
	                                'form_style'    => 'margin:0 0 0.8em 0',
	                                'form_width'    => null),

	'num_events' =>           array('type'          => 'text',
	                                'caption'       => __('Number of listed events','eventlist').':',
	                                'caption_after' => null,
	                                'tooltip'       => __('The number of upcoming events to display','eventlist'),
	                                'form_style'    => '',
	                                'form_width'    => 30),

	'title_length' =>         array('type'          => 'text',
	                                'caption'       => __('Truncate event title to','eventlist'),
	                                'caption_after' => __('characters','eventlist'),
	                                'tooltip'       => __('This option defines the number of displayed characters for the event title. Set this value to 0 to view the full title.','eventlist'),
	                                'form_style'    => null,
	                                'form_width'    => 30),

	'show_starttime' =>       array('type'          => 'checkbox',
	                                'caption'       => __('Show event starttime','eventlist'),
	                                'caption_after' => null,
	                                'tooltip'       => __('This option defines if the event start time will be displayed.','eventlist'),
	                                'form_style'    => null,
	                                'form_width'    => null),

	'show_location' =>        array('type'          => 'checkbox',
	                                'caption'       => __('Show event location','eventlist'),
	                                'caption_after' => null,
	                                'tooltip'       => __('This option defines if the event location will be displayed.','eventlist'),
	                                'form_style'    => 'margin:0 0 0.2em 0',
	                                'form_width'    => null),

	'location_length' =>      array('type'          => 'text',
	                                'caption'       => __('Truncate location to','eventlist'),
	                                'caption_after' => __('characters','eventlist'),
	                                'tooltip'       => __('If the event location is diplayed this option defines the number of displayed characters. Set this value to 0 to view the full location.','eventlist'),
	                                'form_style'    => 'margin:0 0 0.6em 0.9em',
	                                'form_width'    => 30),

	'show_details' =>         array('type'          => 'checkbox',
	                                'caption'       => __('Show event details','eventlist'),
	                                'caption_after' => null,
	                                'tooltip'       => __('This option defines if the event details will be displayed.','eventlist'),
	                                'form_style'    => 'margin:0 0 0.2em 0',
	                                'form_width'    => null),

	'details_length' =>       array('type'          => 'text',
	                                'caption'       => __('Truncate details to','eventlist'),
	                                'caption_after' => __('characters','eventlist'),
	                                'tooltip'       => __('If the event details are diplayed this option defines the number of diplayed characters. Set this value to 0 to view the full details.','eventlist'),
	                                'form_style'    => 'margin:0 0 0.6em 0.9em',
	                                'form_width'    => 30),

	'url_to_page' =>          array('type'          => 'text',
	                                'caption'       => __('URL to the linked Event List page','eventlist').':',
	                                'caption_after' => null,
	                                'tooltip'       => __('This option defines the url to the linked Event List page. This option is required if you want to use one of the options below.','eventlist'),
	                                'form_style'    => 'margin:0 0 0.4em 0',
	                                'form_width'    => null),

	'sc_id_for_url' =>        array('type'          => 'text',
	                                'caption'       => __('Shortcode ID on linked page','eventlist').':',
	                                'caption_after' => null,
	                                'tooltip'       => __('This option defines the shortcode-id for the Event List on the linked page. Normally the standard value 1 is correct, you only have to change it if you use multiple event-list shortcodes on the linked page.','eventlist'),
	                                'form_style'    => null,
	                                'form_width'    => 30),

	'link_to_event' =>        array('type'          => 'checkbox',
	                                'caption'       => __('Add links to the single events','eventlist'),
	                                'caption_after' => null,
	                                'tooltip'       => __('With this option you can add a link to the single event page for every displayed event. You have to specify the url to the page and the shortcode id option if you want to use it.','eventlist'),
	                                'form_style'    => 'margin-left:0.8em',
	                                'form_width'    => null),

	'link_to_page' =>         array('type'          => 'checkbox',
	                                'caption'       => __('Add a link to the Event List page','eventlist'),
	                                'caption_after' => null,
	                                'tooltip'       => __('With this option you can add a link to the event-list page below the diplayed events. You have to specify the url to page option if you want to use it.','eventlist'),
	                                'form_style'    => 'margin:0 0 0.2em 0.8em',
	                                'form_width'    => null),

	'link_to_page_caption' => array('type'          => 'text',
	                                'caption'       => __('Caption for the link','eventlist').':',
	                                'caption_after' => null,
	                                'tooltip'       => __('This option defines the text for the link to the Event List page if the approriate option is selected.','eventlist'),
	                                'form_style'    => 'margin:0 0 1em 2.5em',
	                                'form_width'    => null),
);
?>
