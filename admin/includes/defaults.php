<?php
/**
 * Shortcode defaults
 *
 */

namespace Mild\Shortcodes;

/* Defaults Class */
class Defaults {

    /**
	 * Constructor
	 */
	function __construct() {

    }

    /**
     * Colors
     */
    public static function colors() {

        $colors = [
            'blue'   => __( 'Blue', 'mild-sc' ),
            'green'  => __( 'Green', 'mild-sc' ),
            'orange' => __( 'Orange', 'mild-sc' ),
            'yellow' => __( 'Yellow', 'mild-sc' ),
            'red'    => __( 'Red', 'mild-sc' ),
            'silver' => __( 'Silver', 'mild-sc' ),
            'grey'   => __( 'Grey', 'mild-sc' ),
            'black'  => __( 'Black', 'mild-sc' ),
            'white'  => __( 'White', 'mild-sc' )
        ];

        return apply_filters( 'mild_shortcodes_colors', $colors );

    }

    /**
     * Sizes
     */
    public static function sizes() {

        $sizes = [
            'small'  => __( 'Small', 'mild-sc' ),
            'medium' => __( 'Medium', 'mild-sc' ),
            'large'  => __( 'Large', 'mild-sc' ),
            'huge'   => __( 'Huge', 'mild-sc' )
        ];

        return apply_filters( 'mild_shortcodes_sizes', $sizes );

    }

    /**
     * Grid
     */
    public static function grid() {

        $grid = [
            '1'  => __( 'One Twelth', 'mild-sc' ),
            '2'  => __( 'Two Twelths', 'mild-sc' ),
            '3'  => __( 'Three Twelths', 'mild-sc' ),
            '4'  => __( 'Four Twelths', 'mild-sc' ),
            '5'  => __( 'Five Twelths', 'mild-sc' ),
            '6'  => __( 'Six Twelths', 'mild-sc' ),
            '7'  => __( 'Seven Twelths', 'mild-sc' ),
            '8'  => __( 'Eight Twelths', 'mild-sc' ),
            '9'  => __( 'Nine Twelths', 'mild-sc' ),
            '10' => __( 'Ten Twelths', 'mild-sc' ),
            '11' => __( 'Eleven Twelths', 'mild-sc' ),
            '12' => __( 'Twelve Twelths', 'mild-sc' )
        ];

        return apply_filters( 'mild_shortcodes_grid', $grid );

    }

	/**
	* Align
	*/
	public static function align() {

		$align = [
			'left'   => __( 'Left', 'mild-sc' ),
			'right'  => __( 'Right', 'mild-sc' ),
			'center' => __( 'Center', 'mild-sc' ),
			'one'    => __( 'One', 'mild-sc' )
		];

		return apply_filters( 'mild_shortcodes_align', $align );

	}

    /**
     * Target
     */
    public static function target() {

        $target = [
            'self'  => __( 'Default', 'mild-sc' ),
            'blank' => __( 'New Window', 'mild-sc' )
        ];

        return apply_filters( 'mild_shortcodes_target', $target );

    }

    /**
	 * Icons
	 */
	public static function icons() {

		$icons = [
            'adjust' => __( 'Adjust', 'mild-sc' ),
            'adn' => __( 'Adn', 'mild-sc' ),
            'align-center' => __( 'Align Center', 'mild-sc' ),
            'align-justify' => __( 'Align Justify', 'mild-sc' ),
            'align-left' => __( 'Align Left', 'mild-sc' ),
            'align-right' => __( 'Align Right', 'mild-sc' ),
            'ambulance' => __( 'Ambulance', 'mild-sc' ),
            'anchor' => __( 'Anchor', 'mild-sc' ),
            'android' => __( 'Android', 'mild-sc' ),
            'angellist' => __( 'Angellist', 'mild-sc' ),
            'angle-double-down' => __( 'Angle Double Down', 'mild-sc' ),
            'angle-double-left' => __( 'Angle Double Left', 'mild-sc' ),
            'angle-double-right' => __( 'Angle Double Right', 'mild-sc' ),
            'angle-double-up' => __( 'Angle Double Up', 'mild-sc' ),
            'angle-down' => __( 'Angle Down', 'mild-sc' ),
            'angle-left' => __( 'Angle Left', 'mild-sc' ),
            'angle-right' => __( 'Angle Right', 'mild-sc' ),
            'angle-up' => __( 'Angle Up', 'mild-sc' ),
            'apple' => __( 'Apple', 'mild-sc' ),
            'archive' => __( 'Archive', 'mild-sc' ),
            'area-chart' => __( 'Area Chart', 'mild-sc' ),
            'arrow-circle-down' => __( 'Arrow Circle Down', 'mild-sc' ),
            'arrow-circle-left' => __( 'Arrow Circle Left', 'mild-sc' ),
            'arrow-circle-o-down' => __( 'Arrow Circle O Down', 'mild-sc' ),
            'arrow-circle-o-left' => __( 'Arrow Circle O Left', 'mild-sc' ),
            'arrow-circle-o-right' => __( 'Arrow Circle O Right', 'mild-sc' ),
            'arrow-circle-o-up' => __( 'Arrow Circle O Up', 'mild-sc' ),
            'arrow-circle-right' => __( 'Arrow Circle Right', 'mild-sc' ),
            'arrow-circle-up' => __( 'Arrow Circle Up', 'mild-sc' ),
            'arrow-down' => __( 'Arrow Down', 'mild-sc' ),
            'arrow-left' => __( 'Arrow Left', 'mild-sc' ),
            'arrow-right' => __( 'Arrow Right', 'mild-sc' ),
            'arrow-up' => __( 'Arrow Up', 'mild-sc' ),
            'arrows' => __( 'Arrows', 'mild-sc' ),
            'arrows-alt' => __( 'Arrows Alt', 'mild-sc' ),
            'arrows-h' => __( 'Arrows H', 'mild-sc' ),
            'arrows-v' => __( 'Arrows V', 'mild-sc' ),
            'asterisk' => __( 'Asterisk', 'mild-sc' ),
            'at' => __( 'At', 'mild-sc' ),
            'backward' => __( 'Backward', 'mild-sc' ),
            'ban' => __( 'Ban', 'mild-sc' ),
            'bar-chart' => __( 'Bar Chart', 'mild-sc' ),
            'barcode' => __( 'Barcode', 'mild-sc' ),
            'bars' => __( 'Bars', 'mild-sc' ),
            'beer' => __( 'Beer', 'mild-sc' ),
            'behance' => __( 'Behance', 'mild-sc' ),
            'behance-square' => __( 'Behance Square', 'mild-sc' ),
            'bell' => __( 'Bell', 'mild-sc' ),
            'bell-o' => __( 'Bell O', 'mild-sc' ),
            'bell-slash' => __( 'Bell Slash', 'mild-sc' ),
            'bell-slash-o' => __( 'Bell Slash O', 'mild-sc' ),
            'bicycle' => __( 'Bicycle', 'mild-sc' ),
            'binoculars' => __( 'Binoculars', 'mild-sc' ),
            'birthday-cake' => __( 'Birthday Cake', 'mild-sc' ),
            'bitbucket' => __( 'Bitbucket', 'mild-sc' ),
            'bitbucket-square' => __( 'Bitbucket Square', 'mild-sc' ),
            'bold' => __( 'Bold', 'mild-sc' ),
            'bolt' => __( 'Bolt', 'mild-sc' ),
            'bomb' => __( 'Bomb', 'mild-sc' ),
            'book' => __( 'Book', 'mild-sc' ),
            'bookmark' => __( 'Bookmark', 'mild-sc' ),
            'bookmark-o' => __( 'Bookmark O', 'mild-sc' ),
            'briefcase' => __( 'Briefcase', 'mild-sc' ),
            'btc' => __( 'Btc', 'mild-sc' ),
            'bug' => __( 'Bug', 'mild-sc' ),
            'building' => __( 'Building', 'mild-sc' ),
            'building-o' => __( 'Building O', 'mild-sc' ),
            'bullhorn' => __( 'Bullhorn', 'mild-sc' ),
            'bullseye' => __( 'Bullseye', 'mild-sc' ),
            'bus' => __( 'Bus', 'mild-sc' ),
            'calculator' => __( 'Calculator', 'mild-sc' ),
            'calendar' => __( 'Calendar', 'mild-sc' ),
            'calendar-o' => __( 'Calendar O', 'mild-sc' ),
            'camera' => __( 'Camera', 'mild-sc' ),
            'camera-retro' => __( 'Camera Retro', 'mild-sc' ),
            'car' => __( 'Car', 'mild-sc' ),
            'caret-down' => __( 'Caret Down', 'mild-sc' ),
            'caret-left' => __( 'Caret Left', 'mild-sc' ),
            'caret-right' => __( 'Caret Right', 'mild-sc' ),
            'caret-square-o-down' => __( 'Caret Square O Down', 'mild-sc' ),
            'caret-square-o-left' => __( 'Caret Square O Left', 'mild-sc' ),
            'caret-square-o-right' => __( 'Caret Square O Right', 'mild-sc' ),
            'caret-square-o-up' => __( 'Caret Square O Up', 'mild-sc' ),
            'caret-up' => __( 'Caret Up', 'mild-sc' ),
            'cc' => __( 'Cc', 'mild-sc' ),
            'cc-amex' => __( 'Cc Amex', 'mild-sc' ),
            'cc-discover' => __( 'Cc Discover', 'mild-sc' ),
            'cc-mastercard' => __( 'Cc Mastercard', 'mild-sc' ),
            'cc-paypal' => __( 'Cc Paypal', 'mild-sc' ),
            'cc-stripe' => __( 'Cc Stripe', 'mild-sc' ),
            'cc-visa' => __( 'Cc Visa', 'mild-sc' ),
            'certificate' => __( 'Certificate', 'mild-sc' ),
            'chain-broken' => __( 'Chain Broken', 'mild-sc' ),
            'check' => __( 'Check', 'mild-sc' ),
            'check-circle' => __( 'Check Circle', 'mild-sc' ),
            'check-circle-o' => __( 'Check Circle O', 'mild-sc' ),
            'check-square' => __( 'Check Square', 'mild-sc' ),
            'check-square-o' => __( 'Check Square O', 'mild-sc' ),
            'chevron-circle-down' => __( 'Chevron Circle Down', 'mild-sc' ),
            'chevron-circle-left' => __( 'Chevron Circle Left', 'mild-sc' ),
            'chevron-circle-right' => __( 'Chevron Circle Right', 'mild-sc' ),
            'chevron-circle-up' => __( 'Chevron Circle Up', 'mild-sc' ),
            'chevron-down' => __( 'Chevron Down', 'mild-sc' ),
            'chevron-left' => __( 'Chevron Left', 'mild-sc' ),
            'chevron-right' => __( 'Chevron Right', 'mild-sc' ),
            'chevron-up' => __( 'Chevron Up', 'mild-sc' ),
            'child' => __( 'Child', 'mild-sc' ),
            'circle' => __( 'Circle', 'mild-sc' ),
            'circle-o' => __( 'Circle O', 'mild-sc' ),
            'circle-o-notch' => __( 'Circle O Notch', 'mild-sc' ),
            'circle-thin' => __( 'Circle Thin', 'mild-sc' ),
            'clipboard' => __( 'Clipboard', 'mild-sc' ),
            'clock-o' => __( 'Clock O', 'mild-sc' ),
            'cloud' => __( 'Cloud', 'mild-sc' ),
            'cloud-download' => __( 'Cloud Download', 'mild-sc' ),
            'cloud-upload' => __( 'Cloud Upload', 'mild-sc' ),
            'code' => __( 'Code', 'mild-sc' ),
            'code-fork' => __( 'Code Fork', 'mild-sc' ),
            'codepen' => __( 'Codepen', 'mild-sc' ),
            'coffee' => __( 'Coffee', 'mild-sc' ),
            'cog' => __( 'Cog', 'mild-sc' ),
            'cogs' => __( 'Cogs', 'mild-sc' ),
            'columns' => __( 'Columns', 'mild-sc' ),
            'comment' => __( 'Comment', 'mild-sc' ),
            'comment-o' => __( 'Comment O', 'mild-sc' ),
            'comments' => __( 'Comments', 'mild-sc' ),
            'comments-o' => __( 'Comments O', 'mild-sc' ),
            'compass' => __( 'Compass', 'mild-sc' ),
            'compress' => __( 'Compress', 'mild-sc' ),
            'copyright' => __( 'Copyright', 'mild-sc' ),
            'credit-card' => __( 'Credit Card', 'mild-sc' ),
            'crop' => __( 'Crop', 'mild-sc' ),
            'crosshairs' => __( 'Crosshairs', 'mild-sc' ),
            'css3' => __( 'Css3', 'mild-sc' ),
            'cube' => __( 'Cube', 'mild-sc' ),
            'cubes' => __( 'Cubes', 'mild-sc' ),
            'cutlery' => __( 'Cutlery', 'mild-sc' ),
            'database' => __( 'Database', 'mild-sc' ),
            'delicious' => __( 'Delicious', 'mild-sc' ),
            'desktop' => __( 'Desktop', 'mild-sc' ),
            'deviantart' => __( 'Deviantart', 'mild-sc' ),
            'digg' => __( 'Digg', 'mild-sc' ),
            'dot-circle-o' => __( 'Dot Circle O', 'mild-sc' ),
            'download' => __( 'Download', 'mild-sc' ),
            'dribbble' => __( 'Dribbble', 'mild-sc' ),
            'dropbox' => __( 'Dropbox', 'mild-sc' ),
            'drupal' => __( 'Drupal', 'mild-sc' ),
            'eject' => __( 'Eject', 'mild-sc' ),
            'ellipsis-h' => __( 'Ellipsis H', 'mild-sc' ),
            'ellipsis-v' => __( 'Ellipsis V', 'mild-sc' ),
            'empire' => __( 'Empire', 'mild-sc' ),
            'envelope' => __( 'Envelope', 'mild-sc' ),
            'envelope-o' => __( 'Envelope O', 'mild-sc' ),
            'envelope-square' => __( 'Envelope Square', 'mild-sc' ),
            'eraser' => __( 'Eraser', 'mild-sc' ),
            'eur' => __( 'Eur', 'mild-sc' ),
            'exchange' => __( 'Exchange', 'mild-sc' ),
            'exclamation' => __( 'Exclamation', 'mild-sc' ),
            'exclamation-circle' => __( 'Exclamation Circle', 'mild-sc' ),
            'exclamation-triangle' => __( 'Exclamation Triangle', 'mild-sc' ),
            'expand' => __( 'Expand', 'mild-sc' ),
            'external-link' => __( 'External Link', 'mild-sc' ),
            'external-link-square' => __( 'External Link Square', 'mild-sc' ),
            'eye' => __( 'Eye', 'mild-sc' ),
            'eye-slash' => __( 'Eye Slash', 'mild-sc' ),
            'eyedropper' => __( 'Eyedropper', 'mild-sc' ),
            'facebook' => __( 'Facebook', 'mild-sc' ),
            'facebook-square' => __( 'Facebook Square', 'mild-sc' ),
            'fast-backward' => __( 'Fast Backward', 'mild-sc' ),
            'fast-forward' => __( 'Fast Forward', 'mild-sc' ),
            'fax' => __( 'Fax', 'mild-sc' ),
            'female' => __( 'Female', 'mild-sc' ),
            'fighter-jet' => __( 'Fighter Jet', 'mild-sc' ),
            'file' => __( 'File', 'mild-sc' ),
            'file-archive-o' => __( 'File Archive O', 'mild-sc' ),
            'file-audio-o' => __( 'File Audio O', 'mild-sc' ),
            'file-code-o' => __( 'File Code O', 'mild-sc' ),
            'file-excel-o' => __( 'File Excel O', 'mild-sc' ),
            'file-image-o' => __( 'File Image O', 'mild-sc' ),
            'file-o' => __( 'File O', 'mild-sc' ),
            'file-pdf-o' => __( 'File Pdf O', 'mild-sc' ),
            'file-powerpoint-o' => __( 'File Powerpoint O', 'mild-sc' ),
            'file-text' => __( 'File Text', 'mild-sc' ),
            'file-text-o' => __( 'File Text O', 'mild-sc' ),
            'file-video-o' => __( 'File Video O', 'mild-sc' ),
            'file-word-o' => __( 'File Word O', 'mild-sc' ),
            'files-o' => __( 'Files O', 'mild-sc' ),
            'film' => __( 'Film', 'mild-sc' ),
            'filter' => __( 'Filter', 'mild-sc' ),
            'fire' => __( 'Fire', 'mild-sc' ),
            'fire-extinguisher' => __( 'Fire Extinguisher', 'mild-sc' ),
            'flag' => __( 'Flag', 'mild-sc' ),
            'flag-checkered' => __( 'Flag Checkered', 'mild-sc' ),
            'flag-o' => __( 'Flag O', 'mild-sc' ),
            'flask' => __( 'Flask', 'mild-sc' ),
            'flickr' => __( 'Flickr', 'mild-sc' ),
            'floppy-o' => __( 'Floppy O', 'mild-sc' ),
            'folder' => __( 'Folder', 'mild-sc' ),
            'folder-o' => __( 'Folder O', 'mild-sc' ),
            'folder-open' => __( 'Folder Open', 'mild-sc' ),
            'folder-open-o' => __( 'Folder Open O', 'mild-sc' ),
            'font' => __( 'Font', 'mild-sc' ),
            'forward' => __( 'Forward', 'mild-sc' ),
            'foursquare' => __( 'Foursquare', 'mild-sc' ),
            'frown-o' => __( 'Frown O', 'mild-sc' ),
            'futbol-o' => __( 'Futbol O', 'mild-sc' ),
            'gamepad' => __( 'Gamepad', 'mild-sc' ),
            'gavel' => __( 'Gavel', 'mild-sc' ),
            'gbp' => __( 'Gbp', 'mild-sc' ),
            'gift' => __( 'Gift', 'mild-sc' ),
            'git' => __( 'Git', 'mild-sc' ),
            'git-square' => __( 'Git Square', 'mild-sc' ),
            'github' => __( 'Github', 'mild-sc' ),
            'github-alt' => __( 'Github Alt', 'mild-sc' ),
            'github-square' => __( 'Github Square', 'mild-sc' ),
            'gittip' => __( 'Gittip', 'mild-sc' ),
            'glass' => __( 'Glass', 'mild-sc' ),
            'globe' => __( 'Globe', 'mild-sc' ),
            'google' => __( 'Google', 'mild-sc' ),
            'google-plus' => __( 'Google Plus', 'mild-sc' ),
            'google-plus-square' => __( 'Google Plus Square', 'mild-sc' ),
            'google-wallet' => __( 'Google Wallet', 'mild-sc' ),
            'graduation-cap' => __( 'Graduation Cap', 'mild-sc' ),
            'h-square' => __( 'H Square', 'mild-sc' ),
            'hacker-news' => __( 'Hacker News', 'mild-sc' ),
            'hand-o-down' => __( 'Hand O Down', 'mild-sc' ),
            'hand-o-left' => __( 'Hand O Left', 'mild-sc' ),
            'hand-o-right' => __( 'Hand O Right', 'mild-sc' ),
            'hand-o-up' => __( 'Hand O Up', 'mild-sc' ),
            'hdd-o' => __( 'Hdd O', 'mild-sc' ),
            'header' => __( 'Header', 'mild-sc' ),
            'headphones' => __( 'Headphones', 'mild-sc' ),
            'heart' => __( 'Heart', 'mild-sc' ),
            'heart-o' => __( 'Heart O', 'mild-sc' ),
            'history' => __( 'History', 'mild-sc' ),
            'home' => __( 'Home', 'mild-sc' ),
            'hospital-o' => __( 'Hospital O', 'mild-sc' ),
            'html5' => __( 'Html5', 'mild-sc' ),
            'ils' => __( 'Ils', 'mild-sc' ),
            'inbox' => __( 'Inbox', 'mild-sc' ),
            'indent' => __( 'Indent', 'mild-sc' ),
            'info' => __( 'Info', 'mild-sc' ),
            'info-circle' => __( 'Info Circle', 'mild-sc' ),
            'inr' => __( 'Inr', 'mild-sc' ),
            'instagram' => __( 'Instagram', 'mild-sc' ),
            'ioxhost' => __( 'Ioxhost', 'mild-sc' ),
            'italic' => __( 'Italic', 'mild-sc' ),
            'joomla' => __( 'Joomla', 'mild-sc' ),
            'jpy' => __( 'Jpy', 'mild-sc' ),
            'jsfiddle' => __( 'Jsfiddle', 'mild-sc' ),
            'key' => __( 'Key', 'mild-sc' ),
            'keyboard-o' => __( 'Keyboard O', 'mild-sc' ),
            'krw' => __( 'Krw', 'mild-sc' ),
            'language' => __( 'Language', 'mild-sc' ),
            'laptop' => __( 'Laptop', 'mild-sc' ),
            'lastfm' => __( 'Lastfm', 'mild-sc' ),
            'lastfm-square' => __( 'Lastfm Square', 'mild-sc' ),
            'leaf' => __( 'Leaf', 'mild-sc' ),
            'lemon-o' => __( 'Lemon O', 'mild-sc' ),
            'level-down' => __( 'Level Down', 'mild-sc' ),
            'level-up' => __( 'Level Up', 'mild-sc' ),
            'life-ring' => __( 'Life Ring', 'mild-sc' ),
            'lightbulb-o' => __( 'Lightbulb O', 'mild-sc' ),
            'line-chart' => __( 'Line Chart', 'mild-sc' ),
            'link' => __( 'Link', 'mild-sc' ),
            'linkedin' => __( 'Linkedin', 'mild-sc' ),
            'linkedin-square' => __( 'Linkedin Square', 'mild-sc' ),
            'linux' => __( 'Linux', 'mild-sc' ),
            'list' => __( 'List', 'mild-sc' ),
            'list-alt' => __( 'List Alt', 'mild-sc' ),
            'list-ol' => __( 'List Ol', 'mild-sc' ),
            'list-ul' => __( 'List Ul', 'mild-sc' ),
            'location-arrow' => __( 'Location Arrow', 'mild-sc' ),
            'lock' => __( 'Lock', 'mild-sc' ),
            'long-arrow-down' => __( 'Long Arrow Down', 'mild-sc' ),
            'long-arrow-left' => __( 'Long Arrow Left', 'mild-sc' ),
            'long-arrow-right' => __( 'Long Arrow Right', 'mild-sc' ),
            'long-arrow-up' => __( 'Long Arrow Up', 'mild-sc' ),
            'magic' => __( 'Magic', 'mild-sc' ),
            'magnet' => __( 'Magnet', 'mild-sc' ),
            'male' => __( 'Male', 'mild-sc' ),
            'map-marker' => __( 'Map Marker', 'mild-sc' ),
            'maxcdn' => __( 'Maxcdn', 'mild-sc' ),
            'meanpath' => __( 'Meanpath', 'mild-sc' ),
            'medkit' => __( 'Medkit', 'mild-sc' ),
            'meh-o' => __( 'Meh O', 'mild-sc' ),
            'microphone' => __( 'Microphone', 'mild-sc' ),
            'microphone-slash' => __( 'Microphone Slash', 'mild-sc' ),
            'minus' => __( 'Minus', 'mild-sc' ),
            'minus-circle' => __( 'Minus Circle', 'mild-sc' ),
            'minus-square' => __( 'Minus Square', 'mild-sc' ),
            'minus-square-o' => __( 'Minus Square O', 'mild-sc' ),
            'mobile' => __( 'Mobile', 'mild-sc' ),
            'money' => __( 'Money', 'mild-sc' ),
            'moon-o' => __( 'Moon O', 'mild-sc' ),
            'music' => __( 'Music', 'mild-sc' ),
            'newspaper-o' => __( 'Newspaper O', 'mild-sc' ),
            'openid' => __( 'Openid', 'mild-sc' ),
            'outdent' => __( 'Outdent', 'mild-sc' ),
            'pagelines' => __( 'Pagelines', 'mild-sc' ),
            'paint-brush' => __( 'Paint Brush', 'mild-sc' ),
            'paper-plane' => __( 'Paper Plane', 'mild-sc' ),
            'paper-plane-o' => __( 'Paper Plane O', 'mild-sc' ),
            'paperclip' => __( 'Paperclip', 'mild-sc' ),
            'paragraph' => __( 'Paragraph', 'mild-sc' ),
            'pause' => __( 'Pause', 'mild-sc' ),
            'paw' => __( 'Paw', 'mild-sc' ),
            'paypal' => __( 'Paypal', 'mild-sc' ),
            'pencil' => __( 'Pencil', 'mild-sc' ),
            'pencil-square' => __( 'Pencil Square', 'mild-sc' ),
            'pencil-square-o' => __( 'Pencil Square O', 'mild-sc' ),
            'phone' => __( 'Phone', 'mild-sc' ),
            'phone-square' => __( 'Phone Square', 'mild-sc' ),
            'picture-o' => __( 'Picture O', 'mild-sc' ),
            'pie-chart' => __( 'Pie Chart', 'mild-sc' ),
            'pied-piper' => __( 'Pied Piper', 'mild-sc' ),
            'pied-piper-alt' => __( 'Pied Piper Alt', 'mild-sc' ),
            'pinterest' => __( 'Pinterest', 'mild-sc' ),
            'pinterest-square' => __( 'Pinterest Square', 'mild-sc' ),
            'plane' => __( 'Plane', 'mild-sc' ),
            'play' => __( 'Play', 'mild-sc' ),
            'play-circle' => __( 'Play Circle', 'mild-sc' ),
            'play-circle-o' => __( 'Play Circle O', 'mild-sc' ),
            'plug' => __( 'Plug', 'mild-sc' ),
            'plus' => __( 'Plus', 'mild-sc' ),
            'plus-circle' => __( 'Plus Circle', 'mild-sc' ),
            'plus-square' => __( 'Plus Square', 'mild-sc' ),
            'plus-square-o' => __( 'Plus Square O', 'mild-sc' ),
            'power-off' => __( 'Power Off', 'mild-sc' ),
            'print' => __( 'Print', 'mild-sc' ),
            'puzzle-piece' => __( 'Puzzle Piece', 'mild-sc' ),
            'qq' => __( 'Qq', 'mild-sc' ),
            'qrcode' => __( 'Qrcode', 'mild-sc' ),
            'question' => __( 'Question', 'mild-sc' ),
            'question-circle' => __( 'Question Circle', 'mild-sc' ),
            'quote-left' => __( 'Quote Left', 'mild-sc' ),
            'quote-right' => __( 'Quote Right', 'mild-sc' ),
            'random' => __( 'Random', 'mild-sc' ),
            'rebel' => __( 'Rebel', 'mild-sc' ),
            'recycle' => __( 'Recycle', 'mild-sc' ),
            'reddit' => __( 'Reddit', 'mild-sc' ),
            'reddit-square' => __( 'Reddit Square', 'mild-sc' ),
            'refresh' => __( 'Refresh', 'mild-sc' ),
            'renren' => __( 'Renren', 'mild-sc' ),
            'repeat' => __( 'Repeat', 'mild-sc' ),
            'reply' => __( 'Reply', 'mild-sc' ),
            'reply-all' => __( 'Reply All', 'mild-sc' ),
            'retweet' => __( 'Retweet', 'mild-sc' ),
            'road' => __( 'Road', 'mild-sc' ),
            'rocket' => __( 'Rocket', 'mild-sc' ),
            'rss' => __( 'Rss', 'mild-sc' ),
            'rss-square' => __( 'Rss Square', 'mild-sc' ),
            'rub' => __( 'Rub', 'mild-sc' ),
            'scissors' => __( 'Scissors', 'mild-sc' ),
            'search' => __( 'Search', 'mild-sc' ),
            'search-minus' => __( 'Search Minus', 'mild-sc' ),
            'search-plus' => __( 'Search Plus', 'mild-sc' ),
            'share' => __( 'Share', 'mild-sc' ),
            'share-alt' => __( 'Share Alt', 'mild-sc' ),
            'share-alt-square' => __( 'Share Alt Square', 'mild-sc' ),
            'share-square' => __( 'Share Square', 'mild-sc' ),
            'share-square-o' => __( 'Share Square O', 'mild-sc' ),
            'shield' => __( 'Shield', 'mild-sc' ),
            'shopping-cart' => __( 'Shopping Cart', 'mild-sc' ),
            'sign-in' => __( 'Sign In', 'mild-sc' ),
            'sign-out' => __( 'Sign Out', 'mild-sc' ),
            'signal' => __( 'Signal', 'mild-sc' ),
            'sitemap' => __( 'Sitemap', 'mild-sc' ),
            'skype' => __( 'Skype', 'mild-sc' ),
            'slack' => __( 'Slack', 'mild-sc' ),
            'sliders' => __( 'Sliders', 'mild-sc' ),
            'slideshare' => __( 'Slideshare', 'mild-sc' ),
            'smile-o' => __( 'Smile O', 'mild-sc' ),
            'sort' => __( 'Sort', 'mild-sc' ),
            'sort-alpha-asc' => __( 'Sort Alpha Asc', 'mild-sc' ),
            'sort-alpha-desc' => __( 'Sort Alpha Desc', 'mild-sc' ),
            'sort-amount-asc' => __( 'Sort Amount Asc', 'mild-sc' ),
            'sort-amount-desc' => __( 'Sort Amount Desc', 'mild-sc' ),
            'sort-asc' => __( 'Sort Asc', 'mild-sc' ),
            'sort-desc' => __( 'Sort Desc', 'mild-sc' ),
            'sort-numeric-asc' => __( 'Sort Numeric Asc', 'mild-sc' ),
            'sort-numeric-desc' => __( 'Sort Numeric Desc', 'mild-sc' ),
            'soundcloud' => __( 'Soundcloud', 'mild-sc' ),
            'space-shuttle' => __( 'Space Shuttle', 'mild-sc' ),
            'spinner' => __( 'Spinner', 'mild-sc' ),
            'spoon' => __( 'Spoon', 'mild-sc' ),
            'spotify' => __( 'Spotify', 'mild-sc' ),
            'square' => __( 'Square', 'mild-sc' ),
            'square-o' => __( 'Square O', 'mild-sc' ),
            'stack-exchange' => __( 'Stack Exchange', 'mild-sc' ),
            'stack-overflow' => __( 'Stack Overflow', 'mild-sc' ),
            'star' => __( 'Star', 'mild-sc' ),
            'star-half' => __( 'Star Half', 'mild-sc' ),
            'star-half-o' => __( 'Star Half O', 'mild-sc' ),
            'star-o' => __( 'Star O', 'mild-sc' ),
            'steam' => __( 'Steam', 'mild-sc' ),
            'steam-square' => __( 'Steam Square', 'mild-sc' ),
            'step-backward' => __( 'Step Backward', 'mild-sc' ),
            'step-forward' => __( 'Step Forward', 'mild-sc' ),
            'stethoscope' => __( 'Stethoscope', 'mild-sc' ),
            'stop' => __( 'Stop', 'mild-sc' ),
            'strikethrough' => __( 'Strikethrough', 'mild-sc' ),
            'stumbleupon' => __( 'Stumbleupon', 'mild-sc' ),
            'stumbleupon-circle' => __( 'Stumbleupon Circle', 'mild-sc' ),
            'subscript' => __( 'Subscript', 'mild-sc' ),
            'suitcase' => __( 'Suitcase', 'mild-sc' ),
            'sun-o' => __( 'Sun O', 'mild-sc' ),
            'superscript' => __( 'Superscript', 'mild-sc' ),
            'table' => __( 'Table', 'mild-sc' ),
            'tablet' => __( 'Tablet', 'mild-sc' ),
            'tachometer' => __( 'Tachometer', 'mild-sc' ),
            'tag' => __( 'Tag', 'mild-sc' ),
            'tags' => __( 'Tags', 'mild-sc' ),
            'tasks' => __( 'Tasks', 'mild-sc' ),
            'taxi' => __( 'Taxi', 'mild-sc' ),
            'tencent-weibo' => __( 'Tencent Weibo', 'mild-sc' ),
            'terminal' => __( 'Terminal', 'mild-sc' ),
            'text-height' => __( 'Text Height', 'mild-sc' ),
            'text-width' => __( 'Text Width', 'mild-sc' ),
            'th' => __( 'Th', 'mild-sc' ),
            'th-large' => __( 'Th Large', 'mild-sc' ),
            'th-list' => __( 'Th List', 'mild-sc' ),
            'thumb-tack' => __( 'Thumb Tack', 'mild-sc' ),
            'thumbs-down' => __( 'Thumbs Down', 'mild-sc' ),
            'thumbs-o-down' => __( 'Thumbs O Down', 'mild-sc' ),
            'thumbs-o-up' => __( 'Thumbs O Up', 'mild-sc' ),
            'thumbs-up' => __( 'Thumbs Up', 'mild-sc' ),
            'ticket' => __( 'Ticket', 'mild-sc' ),
            'times' => __( 'Times', 'mild-sc' ),
            'times-circle' => __( 'Times Circle', 'mild-sc' ),
            'times-circle-o' => __( 'Times Circle O', 'mild-sc' ),
            'tint' => __( 'Tint', 'mild-sc' ),
            'toggle-off' => __( 'Toggle Off', 'mild-sc' ),
            'toggle-on' => __( 'Toggle On', 'mild-sc' ),
            'trash' => __( 'Trash', 'mild-sc' ),
            'trash-o' => __( 'Trash O', 'mild-sc' ),
            'tree' => __( 'Tree', 'mild-sc' ),
            'trello' => __( 'Trello', 'mild-sc' ),
            'trophy' => __( 'Trophy', 'mild-sc' ),
            'truck' => __( 'Truck', 'mild-sc' ),
            'try' => __( 'Try', 'mild-sc' ),
            'tty' => __( 'Tty', 'mild-sc' ),
            'tumblr' => __( 'Tumblr', 'mild-sc' ),
            'tumblr-square' => __( 'Tumblr Square', 'mild-sc' ),
            'twitch' => __( 'Twitch', 'mild-sc' ),
            'twitter' => __( 'Twitter', 'mild-sc' ),
            'twitter-square' => __( 'Twitter Square', 'mild-sc' ),
            'umbrella' => __( 'Umbrella', 'mild-sc' ),
            'underline' => __( 'Underline', 'mild-sc' ),
            'undo' => __( 'Undo', 'mild-sc' ),
            'university' => __( 'University', 'mild-sc' ),
            'unlock' => __( 'Unlock', 'mild-sc' ),
            'unlock-alt' => __( 'Unlock Alt', 'mild-sc' ),
            'upload' => __( 'Upload', 'mild-sc' ),
            'usd' => __( 'Usd', 'mild-sc' ),
            'user' => __( 'User', 'mild-sc' ),
            'user-md' => __( 'User Md', 'mild-sc' ),
            'users' => __( 'Users', 'mild-sc' ),
            'video-camera' => __( 'Video Camera', 'mild-sc' ),
            'vimeo-square' => __( 'Vimeo Square', 'mild-sc' ),
            'vine' => __( 'Vine', 'mild-sc' ),
            'vk' => __( 'Vk', 'mild-sc' ),
            'volume-down' => __( 'Volume Down', 'mild-sc' ),
            'volume-off' => __( 'Volume Off', 'mild-sc' ),
            'volume-up' => __( 'Volume Up', 'mild-sc' ),
            'weibo' => __( 'Weibo', 'mild-sc' ),
            'weixin' => __( 'Weixin', 'mild-sc' ),
            'wheelchair' => __( 'Wheelchair', 'mild-sc' ),
            'wifi' => __( 'Wifi', 'mild-sc' ),
            'windows' => __( 'Windows', 'mild-sc' ),
            'wordpress' => __( 'Wordpress', 'mild-sc' ),
            'wrench' => __( 'Wrench', 'mild-sc' ),
            'xing' => __( 'Xing', 'mild-sc' ),
            'xing-square' => __( 'Xing Square', 'mild-sc' ),
            'yahoo' => __( 'Yahoo', 'mild-sc' ),
            'yelp' => __( 'Yelp', 'mild-sc' ),
            'youtube' => __( 'Youtube', 'mild-sc' ),
            'youtube-play' => __( 'Youtube Play', 'mild-sc' ),
            'youtube-square' => __( 'Youtube Square', 'mild-sc' )
        ];

        return apply_filters( 'mild_shortcodes_icons', $icons );

	}

}