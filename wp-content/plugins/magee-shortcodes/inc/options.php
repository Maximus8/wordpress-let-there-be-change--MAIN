<?php
/*-----------------------------------------------------------------------------------*/
/*	Default Options
/*-----------------------------------------------------------------------------------*/

global $magee_shortcodes,$magee_sliders;
$magee_sliders = Magee_Core::sliders_meta();

$choices = array( 'yes' => 'Yes', 'no' => 'No' );
$reverse_choices = array( 'no' => 'No', 'yes' => 'Yes' );
$choices_with_default = array( '' => 'Default', 'yes' => 'Yes', 'no' => 'No' );
$reverse_choices_with_default = array( '' => 'Default', 'no' => 'No', 'yes' => 'Yes' );
$leftright = array( 'left' => 'Left', 'right' => 'Right' );
$dec_numbers = array( '0.1' => '0.1', '0.2' => '0.2', '0.3' => '0.3', '0.4' => '0.4', '0.5' => '0.5', '0.6' => '0.6', '0.7' => '0.7', '0.8' => '0.8', '0.9' => '0.9', '1' => '1', '2' => '2', '2.5' => '2.5', '3' => '3' );
$animation_type = array('' => 'None',"bounce" => "bounce", "flash" => "flash", "pulse" => "pulse", "rubberBand" => "rubberBand", "shake" => "shake", "swing" => "swing", "tada" => "tada", "wobble" => "wobble", "bounceIn" => "bounceIn", "bounceInDown" => "bounceInDown", "bounceInLeft" => "bounceInLeft", "bounceInRight" => "bounceInRight", "bounceInUp" => "bounceInUp", "bounceOut" => "bounceOut", "bounceOutDown" => "bounceOutDown", "bounceOutLeft" => "bounceOutLeft", "bounceOutRight" => "bounceOutRight", "bounceOutUp" => "bounceOutUp", "fadeIn" => "fadeIn", "fadeInDown" => "fadeInDown", "fadeInDownBig" => "fadeInDownBig", "fadeInLeft" => "fadeInLeft", "fadeInLeftBig" => "fadeInLeftBig", "fadeInRight" => "fadeInRight", "fadeInRightBig" => "fadeInRightBig", "fadeInUp" => "fadeInUp", "fadeInUpBig" => "fadeInUpBig", "fadeOut" => "fadeOut", "fadeOutDown" => "fadeOutDown", "fadeOutDownBig" => "fadeOutDownBig", "fadeOutLeft" => "fadeOutLeft", "fadeOutLeftBig" => "fadeOutLeftBig", "fadeOutRight" => "fadeOutRight", "fadeOutRightBig" => "fadeOutRightBig", "fadeOutUp" => "fadeOutUp", "fadeOutUpBig" => "fadeOutUpBig", "flip" => "flip", "flipInX" => "flipInX", "flipInY" => "flipInY", "flipOutX" => "flipOutX", "flipOutY" => "flipOutY", "lightSpeedIn" => "lightSpeedIn", "lightSpeedOut" => "lightSpeedOut", "rotateIn" => "rotateIn", "rotateInDownLeft" => "rotateInDownLeft", "rotateInDownRight" => "rotateInDownRight", "rotateInUpLeft" => "rotateInUpLeft", "rotateInUpRight" => "rotateInUpRight", "rotateOut" => "rotateOut", "rotateOutDownLeft" => "rotateOutDownLeft", "rotateOutDownRight" => "rotateOutDownRight", "rotateOutUpLeft" => "rotateOutUpLeft", "rotateOutUpRight" => "rotateOutUpRight", "hinge" => "hinge", "rollIn" => "rollIn", "rollOut" => "rollOut", "zoomIn" => "zoomIn", "zoomInDown" => "zoomInDown", "zoomInLeft" => "zoomInLeft", "zoomInRight" => "zoomInRight", "zoomInUp" => "zoomInUp", "zoomOut" => "zoomOut", "zoomOutDown" => "zoomOutDown", "zoomOutLeft" => "zoomOutLeft", "zoomOutRight" => "zoomOutRight", "zoomOutUp" => "zoomOutUp", "slideInDown" => "slideInDown", "slideInLeft" => "slideInLeft", "slideInRight" => "slideInRight", "slideInUp" => "slideInUp", "slideOutDown" => "slideOutDown", "slideOutLeft" => "slideOutLeft", "slideOutRight" => "slideOutRight", "slideOutUp" => "slideOutUp");
$columns  = array(""=>"default","1"=>"1/12","2"=>"2/12","3"=>"3/12","4"=>"4/12","5"=>"5/12","6"=>"6/12","7"=>"7/12","8"=>"8/12","9"=>"9/12","10"=>"10/12","11"=>"11/12","12"=>"12/12");
// Fontawesome icons list

$icons = array('fa-glass'=>'\f000', 'fa-music'=>'\f001', 'fa-search'=>'\f002', 'fa-envelope-o'=>'\f003', 'fa-heart'=>'\f004', 'fa-star'=>'\f005', 'fa-star-o'=>'\f006', 'fa-user'=>'\f007', 'fa-film'=>'\f008', 'fa-th-large'=>'\f009', 'fa-th'=>'\f00a', 'fa-th-list'=>'\f00b', 'fa-check'=>'\f00c', 'fa-times'=>'\f00d', 'fa-search-plus'=>'\f00e', 'fa-search-minus'=>'\f010', 'fa-power-off'=>'\f011', 'fa-signal'=>'\f012', 'fa-cog'=>'\f013', 'fa-trash-o'=>'\f014', 'fa-home'=>'\f015', 'fa-file-o'=>'\f016', 'fa-clock-o'=>'\f017', 'fa-road'=>'\f018', 'fa-download'=>'\f019', 'fa-arrow-circle-o-down'=>'\f01a', 'fa-arrow-circle-o-up'=>'\f01b', 'fa-inbox'=>'\f01c', 'fa-play-circle-o'=>'\f01d', 'fa-repeat'=>'\f01e', 'fa-refresh'=>'\f021', 'fa-list-alt'=>'\f022', 'fa-lock'=>'\f023', 'fa-flag'=>'\f024', 'fa-headphones'=>'\f025', 'fa-volume-off'=>'\f026', 'fa-volume-down'=>'\f027', 'fa-volume-up'=>'\f028', 'fa-qrcode'=>'\f029', 'fa-barcode'=>'\f02a', 'fa-tag'=>'\f02b', 'fa-tags'=>'\f02c', 'fa-book'=>'\f02d', 'fa-bookmark'=>'\f02e', 'fa-print'=>'\f02f', 'fa-camera'=>'\f030', 'fa-font'=>'\f031', 'fa-bold'=>'\f032', 'fa-italic'=>'\f033', 'fa-text-height'=>'\f034', 'fa-text-width'=>'\f035', 'fa-align-left'=>'\f036', 'fa-align-center'=>'\f037', 'fa-align-right'=>'\f038', 'fa-align-justify'=>'\f039', 'fa-list'=>'\f03a', 'fa-outdent'=>'\f03b', 'fa-indent'=>'\f03c', 'fa-video-camera'=>'\f03d', 'fa-picture-o'=>'\f03e', 'fa-pencil'=>'\f040', 'fa-map-marker'=>'\f041', 'fa-adjust'=>'\f042', 'fa-tint'=>'\f043', 'fa-pencil-square-o'=>'\f044', 'fa-share-square-o'=>'\f045', 'fa-check-square-o'=>'\f046', 'fa-arrows'=>'\f047', 'fa-step-backward'=>'\f048', 'fa-fast-backward'=>'\f049', 'fa-backward'=>'\f04a', 'fa-play'=>'\f04b', 'fa-pause'=>'\f04c', 'fa-stop'=>'\f04d', 'fa-forward'=>'\f04e', 'fa-fast-forward'=>'\f050', 'fa-step-forward'=>'\f051', 'fa-eject'=>'\f052', 'fa-chevron-left'=>'\f053', 'fa-chevron-right'=>'\f054', 'fa-plus-circle'=>'\f055', 'fa-minus-circle'=>'\f056', 'fa-times-circle'=>'\f057', 'fa-check-circle'=>'\f058', 'fa-question-circle'=>'\f059', 'fa-info-circle'=>'\f05a', 'fa-crosshairs'=>'\f05b', 'fa-times-circle-o'=>'\f05c', 'fa-check-circle-o'=>'\f05d', 'fa-ban'=>'\f05e', 'fa-arrow-left'=>'\f060', 'fa-arrow-right'=>'\f061', 'fa-arrow-up'=>'\f062', 'fa-arrow-down'=>'\f063', 'fa-share'=>'\f064', 'fa-expand'=>'\f065', 'fa-compress'=>'\f066', 'fa-plus'=>'\f067', 'fa-minus'=>'\f068', 'fa-asterisk'=>'\f069', 'fa-exclamation-circle'=>'\f06a', 'fa-gift'=>'\f06b', 'fa-leaf'=>'\f06c', 'fa-fire'=>'\f06d', 'fa-eye'=>'\f06e', 'fa-eye-slash'=>'\f070', 'fa-exclamation-triangle'=>'\f071', 'fa-plane'=>'\f072', 'fa-calendar'=>'\f073', 'fa-random'=>'\f074', 'fa-comment'=>'\f075', 'fa-magnet'=>'\f076', 'fa-chevron-up'=>'\f077', 'fa-chevron-down'=>'\f078', 'fa-retweet'=>'\f079', 'fa-shopping-cart'=>'\f07a', 'fa-folder'=>'\f07b', 'fa-folder-open'=>'\f07c', 'fa-arrows-v'=>'\f07d', 'fa-arrows-h'=>'\f07e', 'fa-bar-chart'=>'\f080', 'fa-twitter-square'=>'\f081', 'fa-facebook-square'=>'\f082', 'fa-camera-retro'=>'\f083', 'fa-key'=>'\f084', 'fa-cogs'=>'\f085', 'fa-comments'=>'\f086', 'fa-thumbs-o-up'=>'\f087', 'fa-thumbs-o-down'=>'\f088', 'fa-star-half'=>'\f089', 'fa-heart-o'=>'\f08a', 'fa-sign-out'=>'\f08b', 'fa-linkedin-square'=>'\f08c', 'fa-thumb-tack'=>'\f08d', 'fa-external-link'=>'\f08e', 'fa-sign-in'=>'\f090', 'fa-trophy'=>'\f091', 'fa-github-square'=>'\f092', 'fa-upload'=>'\f093', 'fa-lemon-o'=>'\f094', 'fa-phone'=>'\f095', 'fa-square-o'=>'\f096', 'fa-bookmark-o'=>'\f097', 'fa-phone-square'=>'\f098', 'fa-twitter'=>'\f099', 'fa-facebook'=>'\f09a', 'fa-github'=>'\f09b', 'fa-unlock'=>'\f09c', 'fa-credit-card'=>'\f09d', 'fa-rss'=>'\f09e', 'fa-hdd-o'=>'\f0a0', 'fa-bullhorn'=>'\f0a1', 'fa-bell'=>'\f0f3', 'fa-certificate'=>'\f0a3', 'fa-hand-o-right'=>'\f0a4', 'fa-hand-o-left'=>'\f0a5', 'fa-hand-o-up'=>'\f0a6', 'fa-hand-o-down'=>'\f0a7', 'fa-arrow-circle-left'=>'\f0a8', 'fa-arrow-circle-right'=>'\f0a9', 'fa-arrow-circle-up'=>'\f0aa', 'fa-arrow-circle-down'=>'\f0ab', 'fa-globe'=>'\f0ac', 'fa-wrench'=>'\f0ad', 'fa-tasks'=>'\f0ae', 'fa-filter'=>'\f0b0', 'fa-briefcase'=>'\f0b1', 'fa-arrows-alt'=>'\f0b2', 'fa-users'=>'\f0c0', 'fa-link'=>'\f0c1', 'fa-cloud'=>'\f0c2', 'fa-flask'=>'\f0c3', 'fa-scissors'=>'\f0c4', 'fa-files-o'=>'\f0c5', 'fa-paperclip'=>'\f0c6', 'fa-floppy-o'=>'\f0c7', 'fa-square'=>'\f0c8', 'fa-bars'=>'\f0c9', 'fa-list-ul'=>'\f0ca', 'fa-list-ol'=>'\f0cb', 'fa-strikethrough'=>'\f0cc', 'fa-underline'=>'\f0cd', 'fa-table'=>'\f0ce', 'fa-magic'=>'\f0d0', 'fa-truck'=>'\f0d1', 'fa-pinterest'=>'\f0d2', 'fa-pinterest-square'=>'\f0d3', 'fa-google-plus-square'=>'\f0d4', 'fa-google-plus'=>'\f0d5', 'fa-money'=>'\f0d6', 'fa-caret-down'=>'\f0d7', 'fa-caret-up'=>'\f0d8', 'fa-caret-left'=>'\f0d9', 'fa-caret-right'=>'\f0da', 'fa-columns'=>'\f0db', 'fa-sort'=>'\f0dc', 'fa-sort-desc'=>'\f0dd', 'fa-sort-asc'=>'\f0de', 'fa-envelope'=>'\f0e0', 'fa-linkedin'=>'\f0e1', 'fa-undo'=>'\f0e2', 'fa-gavel'=>'\f0e3', 'fa-tachometer'=>'\f0e4', 'fa-comment-o'=>'\f0e5', 'fa-comments-o'=>'\f0e6', 'fa-bolt'=>'\f0e7', 'fa-sitemap'=>'\f0e8', 'fa-umbrella'=>'\f0e9', 'fa-clipboard'=>'\f0ea', 'fa-lightbulb-o'=>'\f0eb', 'fa-exchange'=>'\f0ec', 'fa-cloud-download'=>'\f0ed', 'fa-cloud-upload'=>'\f0ee', 'fa-user-md'=>'\f0f0', 'fa-stethoscope'=>'\f0f1', 'fa-suitcase'=>'\f0f2', 'fa-bell-o'=>'\f0a2', 'fa-coffee'=>'\f0f4', 'fa-cutlery'=>'\f0f5', 'fa-file-text-o'=>'\f0f6', 'fa-building-o'=>'\f0f7', 'fa-hospital-o'=>'\f0f8', 'fa-ambulance'=>'\f0f9', 'fa-medkit'=>'\f0fa', 'fa-fighter-jet'=>'\f0fb', 'fa-beer'=>'\f0fc', 'fa-h-square'=>'\f0fd', 'fa-plus-square'=>'\f0fe', 'fa-angle-double-left'=>'\f100', 'fa-angle-double-right'=>'\f101', 'fa-angle-double-up'=>'\f102', 'fa-angle-double-down'=>'\f103', 'fa-angle-left'=>'\f104', 'fa-angle-right'=>'\f105', 'fa-angle-up'=>'\f106', 'fa-angle-down'=>'\f107', 'fa-desktop'=>'\f108', 'fa-laptop'=>'\f109', 'fa-tablet'=>'\f10a', 'fa-mobile'=>'\f10b', 'fa-circle-o'=>'\f10c', 'fa-quote-left'=>'\f10d', 'fa-quote-right'=>'\f10e', 'fa-spinner'=>'\f110', 'fa-circle'=>'\f111', 'fa-reply'=>'\f112', 'fa-github-alt'=>'\f113', 'fa-folder-o'=>'\f114', 'fa-folder-open-o'=>'\f115', 'fa-smile-o'=>'\f118', 'fa-frown-o'=>'\f119', 'fa-meh-o'=>'\f11a', 'fa-gamepad'=>'\f11b', 'fa-keyboard-o'=>'\f11c', 'fa-flag-o'=>'\f11d', 'fa-flag-checkered'=>'\f11e', 'fa-terminal'=>'\f120', 'fa-code'=>'\f121', 'fa-reply-all'=>'\f122', 'fa-star-half-o'=>'\f123', 'fa-location-arrow'=>'\f124', 'fa-crop'=>'\f125', 'fa-code-fork'=>'\f126', 'fa-chain-broken'=>'\f127', 'fa-question'=>'\f128', 'fa-info'=>'\f129', 'fa-exclamation'=>'\f12a', 'fa-superscript'=>'\f12b', 'fa-subscript'=>'\f12c', 'fa-eraser'=>'\f12d', 'fa-puzzle-piece'=>'\f12e', 'fa-microphone'=>'\f130', 'fa-microphone-slash'=>'\f131', 'fa-shield'=>'\f132', 'fa-calendar-o'=>'\f133', 'fa-fire-extinguisher'=>'\f134', 'fa-rocket'=>'\f135', 'fa-maxcdn'=>'\f136', 'fa-chevron-circle-left'=>'\f137', 'fa-chevron-circle-right'=>'\f138', 'fa-chevron-circle-up'=>'\f139', 'fa-chevron-circle-down'=>'\f13a', 'fa-html5'=>'\f13b', 'fa-css3'=>'\f13c', 'fa-anchor'=>'\f13d', 'fa-unlock-alt'=>'\f13e', 'fa-bullseye'=>'\f140', 'fa-ellipsis-h'=>'\f141', 'fa-ellipsis-v'=>'\f142', 'fa-rss-square'=>'\f143', 'fa-play-circle'=>'\f144', 'fa-ticket'=>'\f145', 'fa-minus-square'=>'\f146', 'fa-minus-square-o'=>'\f147', 'fa-level-up'=>'\f148', 'fa-level-down'=>'\f149', 'fa-check-square'=>'\f14a', 'fa-pencil-square'=>'\f14b', 'fa-external-link-square'=>'\f14c', 'fa-share-square'=>'\f14d', 'fa-compass'=>'\f14e', 'fa-caret-square-o-down'=>'\f150', 'fa-caret-square-o-up'=>'\f151', 'fa-caret-square-o-right'=>'\f152', 'fa-eur'=>'\f153', 'fa-gbp'=>'\f154', 'fa-usd'=>'\f155', 'fa-inr'=>'\f156', 'fa-jpy'=>'\f157', 'fa-rub'=>'\f158', 'fa-krw'=>'\f159', 'fa-btc'=>'\f15a', 'fa-file'=>'\f15b', 'fa-file-text'=>'\f15c', 'fa-sort-alpha-asc'=>'\f15d', 'fa-sort-alpha-desc'=>'\f15e', 'fa-sort-amount-asc'=>'\f160', 'fa-sort-amount-desc'=>'\f161', 'fa-sort-numeric-asc'=>'\f162', 'fa-sort-numeric-desc'=>'\f163', 'fa-thumbs-up'=>'\f164', 'fa-thumbs-down'=>'\f165', 'fa-youtube-square'=>'\f166', 'fa-youtube'=>'\f167', 'fa-xing'=>'\f168', 'fa-xing-square'=>'\f169', 'fa-youtube-play'=>'\f16a', 'fa-dropbox'=>'\f16b', 'fa-stack-overflow'=>'\f16c', 'fa-instagram'=>'\f16d', 'fa-flickr'=>'\f16e', 'fa-adn'=>'\f170', 'fa-bitbucket'=>'\f171', 'fa-bitbucket-square'=>'\f172', 'fa-tumblr'=>'\f173', 'fa-tumblr-square'=>'\f174', 'fa-long-arrow-down'=>'\f175', 'fa-long-arrow-up'=>'\f176', 'fa-long-arrow-left'=>'\f177', 'fa-long-arrow-right'=>'\f178', 'fa-apple'=>'\f179', 'fa-windows'=>'\f17a', 'fa-android'=>'\f17b', 'fa-linux'=>'\f17c', 'fa-dribbble'=>'\f17d', 'fa-skype'=>'\f17e', 'fa-foursquare'=>'\f180', 'fa-trello'=>'\f181', 'fa-female'=>'\f182', 'fa-male'=>'\f183', 'fa-gratipay'=>'\f184', 'fa-sun-o'=>'\f185', 'fa-moon-o'=>'\f186', 'fa-archive'=>'\f187', 'fa-bug'=>'\f188', 'fa-vk'=>'\f189', 'fa-weibo'=>'\f18a', 'fa-renren'=>'\f18b', 'fa-pagelines'=>'\f18c', 'fa-stack-exchange'=>'\f18d', 'fa-arrow-circle-o-right'=>'\f18e', 'fa-arrow-circle-o-left'=>'\f190', 'fa-caret-square-o-left'=>'\f191', 'fa-dot-circle-o'=>'\f192', 'fa-wheelchair'=>'\f193', 'fa-vimeo-square'=>'\f194', 'fa-try'=>'\f195', 'fa-plus-square-o'=>'\f196', 'fa-space-shuttle'=>'\f197', 'fa-slack'=>'\f198', 'fa-envelope-square'=>'\f199', 'fa-wordpress'=>'\f19a', 'fa-openid'=>'\f19b', 'fa-university'=>'\f19c', 'fa-graduation-cap'=>'\f19d', 'fa-yahoo'=>'\f19e', 'fa-google'=>'\f1a0', 'fa-reddit'=>'\f1a1', 'fa-reddit-square'=>'\f1a2', 'fa-stumbleupon-circle'=>'\f1a3', 'fa-stumbleupon'=>'\f1a4', 'fa-delicious'=>'\f1a5', 'fa-digg'=>'\f1a6', 'fa-pied-piper'=>'\f1a7', 'fa-pied-piper-alt'=>'\f1a8', 'fa-drupal'=>'\f1a9', 'fa-joomla'=>'\f1aa', 'fa-language'=>'\f1ab', 'fa-fax'=>'\f1ac', 'fa-building'=>'\f1ad', 'fa-child'=>'\f1ae', 'fa-paw'=>'\f1b0', 'fa-spoon'=>'\f1b1', 'fa-cube'=>'\f1b2', 'fa-cubes'=>'\f1b3', 'fa-behance'=>'\f1b4', 'fa-behance-square'=>'\f1b5', 'fa-steam'=>'\f1b6', 'fa-steam-square'=>'\f1b7', 'fa-recycle'=>'\f1b8', 'fa-car'=>'\f1b9', 'fa-taxi'=>'\f1ba', 'fa-tree'=>'\f1bb', 'fa-spotify'=>'\f1bc', 'fa-deviantart'=>'\f1bd', 'fa-soundcloud'=>'\f1be', 'fa-database'=>'\f1c0', 'fa-file-pdf-o'=>'\f1c1', 'fa-file-word-o'=>'\f1c2', 'fa-file-excel-o'=>'\f1c3', 'fa-file-powerpoint-o'=>'\f1c4', 'fa-file-image-o'=>'\f1c5', 'fa-file-archive-o'=>'\f1c6', 'fa-file-audio-o'=>'\f1c7', 'fa-file-video-o'=>'\f1c8', 'fa-file-code-o'=>'\f1c9', 'fa-vine'=>'\f1ca', 'fa-codepen'=>'\f1cb', 'fa-jsfiddle'=>'\f1cc', 'fa-life-ring'=>'\f1cd', 'fa-circle-o-notch'=>'\f1ce', 'fa-rebel'=>'\f1d0', 'fa-empire'=>'\f1d1', 'fa-git-square'=>'\f1d2', 'fa-git'=>'\f1d3', 'fa-hacker-news'=>'\f1d4', 'fa-tencent-weibo'=>'\f1d5', 'fa-qq'=>'\f1d6', 'fa-weixin'=>'\f1d7', 'fa-paper-plane'=>'\f1d8', 'fa-paper-plane-o'=>'\f1d9', 'fa-history'=>'\f1da', 'fa-circle-thin'=>'\f1db', 'fa-header'=>'\f1dc', 'fa-paragraph'=>'\f1dd', 'fa-sliders'=>'\f1de', 'fa-share-alt'=>'\f1e0', 'fa-share-alt-square'=>'\f1e1', 'fa-bomb'=>'\f1e2', 'fa-futbol-o'=>'\f1e3', 'fa-tty'=>'\f1e4', 'fa-binoculars'=>'\f1e5', 'fa-plug'=>'\f1e6', 'fa-slideshare'=>'\f1e7', 'fa-twitch'=>'\f1e8', 'fa-yelp'=>'\f1e9', 'fa-newspaper-o'=>'\f1ea', 'fa-wifi'=>'\f1eb', 'fa-calculator'=>'\f1ec', 'fa-paypal'=>'\f1ed', 'fa-google-wallet'=>'\f1ee', 'fa-cc-visa'=>'\f1f0', 'fa-cc-mastercard'=>'\f1f1', 'fa-cc-discover'=>'\f1f2', 'fa-cc-amex'=>'\f1f3', 'fa-cc-paypal'=>'\f1f4', 'fa-cc-stripe'=>'\f1f5', 'fa-bell-slash'=>'\f1f6', 'fa-bell-slash-o'=>'\f1f7', 'fa-trash'=>'\f1f8', 'fa-copyright'=>'\f1f9', 'fa-at'=>'\f1fa', 'fa-eyedropper'=>'\f1fb', 'fa-paint-brush'=>'\f1fc', 'fa-birthday-cake'=>'\f1fd', 'fa-area-chart'=>'\f1fe', 'fa-pie-chart'=>'\f200', 'fa-line-chart'=>'\f201', 'fa-lastfm'=>'\f202', 'fa-lastfm-square'=>'\f203', 'fa-toggle-off'=>'\f204', 'fa-toggle-on'=>'\f205', 'fa-bicycle'=>'\f206', 'fa-bus'=>'\f207', 'fa-ioxhost'=>'\f208', 'fa-angellist'=>'\f209', 'fa-cc'=>'\f20a', 'fa-ils'=>'\f20b', 'fa-meanpath'=>'\f20c', 'fa-buysellads'=>'\f20d', 'fa-connectdevelop'=>'\f20e', 'fa-dashcube'=>'\f210', 'fa-forumbee'=>'\f211', 'fa-leanpub'=>'\f212', 'fa-sellsy'=>'\f213', 'fa-shirtsinbulk'=>'\f214', 'fa-simplybuilt'=>'\f215', 'fa-skyatlas'=>'\f216', 'fa-cart-plus'=>'\f217', 'fa-cart-arrow-down'=>'\f218', 'fa-diamond'=>'\f219', 'fa-ship'=>'\f21a', 'fa-user-secret'=>'\f21b', 'fa-motorcycle'=>'\f21c', 'fa-street-view'=>'\f21d', 'fa-heartbeat'=>'\f21e', 'fa-venus'=>'\f221', 'fa-mars'=>'\f222', 'fa-mercury'=>'\f223', 'fa-transgender'=>'\f224', 'fa-transgender-alt'=>'\f225', 'fa-venus-double'=>'\f226', 'fa-mars-double'=>'\f227', 'fa-venus-mars'=>'\f228', 'fa-mars-stroke'=>'\f229', 'fa-mars-stroke-v'=>'\f22a', 'fa-mars-stroke-h'=>'\f22b', 'fa-neuter'=>'\f22c', 'fa-genderless'=>'\f22d', 'fa-facebook-official'=>'\f230', 'fa-pinterest-p'=>'\f231', 'fa-whatsapp'=>'\f232', 'fa-server'=>'\f233', 'fa-user-plus'=>'\f234', 'fa-user-times'=>'\f235', 'fa-bed'=>'\f236', 'fa-viacoin'=>'\f237', 'fa-train'=>'\f238', 'fa-subway'=>'\f239', 'fa-medium'=>'\f23a', 'fa-y-combinator'=>'\f23b', 'fa-optin-monster'=>'\f23c', 'fa-opencart'=>'\f23d', 'fa-expeditedssl'=>'\f23e', 'fa-battery-full'=>'\f240', 'fa-battery-three-quarters'=>'\f241', 'fa-battery-half'=>'\f242', 'fa-battery-quarter'=>'\f243', 'fa-battery-empty'=>'\f244', 'fa-mouse-pointer'=>'\f245', 'fa-i-cursor'=>'\f246', 'fa-object-group'=>'\f247', 'fa-object-ungroup'=>'\f248', 'fa-sticky-note'=>'\f249', 'fa-sticky-note-o'=>'\f24a', 'fa-cc-jcb'=>'\f24b', 'fa-cc-diners-club'=>'\f24c', 'fa-clone'=>'\f24d', 'fa-balance-scale'=>'\f24e', 'fa-hourglass-o'=>'\f250', 'fa-hourglass-start'=>'\f251', 'fa-hourglass-half'=>'\f252', 'fa-hourglass-end'=>'\f253', 'fa-hourglass'=>'\f254', 'fa-hand-rock-o'=>'\f255', 'fa-hand-paper-o'=>'\f256', 'fa-hand-scissors-o'=>'\f257', 'fa-hand-lizard-o'=>'\f258', 'fa-hand-spock-o'=>'\f259', 'fa-hand-pointer-o'=>'\f25a', 'fa-hand-peace-o'=>'\f25b', 'fa-trademark'=>'\f25c', 'fa-registered'=>'\f25d', 'fa-creative-commons'=>'\f25e', 'fa-gg'=>'\f260', 'fa-gg-circle'=>'\f261', 'fa-tripadvisor'=>'\f262', 'fa-odnoklassniki'=>'\f263', 'fa-odnoklassniki-square'=>'\f264', 'fa-get-pocket'=>'\f265', 'fa-wikipedia-w'=>'\f266', 'fa-safari'=>'\f267', 'fa-chrome'=>'\f268', 'fa-firefox'=>'\f269', 'fa-opera'=>'\f26a', 'fa-internet-explorer'=>'\f26b', 'fa-television'=>'\f26c', 'fa-contao'=>'\f26d', 'fa-500px'=>'\f26e', 'fa-amazon'=>'\f270', 'fa-calendar-plus-o'=>'\f271', 'fa-calendar-minus-o'=>'\f272', 'fa-calendar-times-o'=>'\f273', 'fa-calendar-check-o'=>'\f274', 'fa-industry'=>'\f275', 'fa-map-pin'=>'\f276', 'fa-map-signs'=>'\f277', 'fa-map-o'=>'\f278', 'fa-map'=>'\f279', 'fa-commenting'=>'\f27a', 'fa-commenting-o'=>'\f27b', 'fa-houzz'=>'\f27c', 'fa-vimeo'=>'\f27d', 'fa-black-tie'=>'\f27e', 'fa-fonticons'=>'\f280');



$checklist_icons = array ( 'icon-check' => '\f00c', 'icon-star' => '\f006', 'icon-angle-right' => '\f105', 'icon-asterisk' => '\f069', 'icon-remove' => '\f00d', 'icon-plus' => '\f067' );

/*-----------------------------------------------------------------------------------*/
/*	Shortcode Selection Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['shortcode-generator'] = array(
	'no_preview' => true,
	'params' => array(),
	'shortcode' => '',
	'popup_title' => ''
);


/*-----------------------------------------------------------------------------------*/
/*	Accordion Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['accordion'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-ul',
	'params' => array(
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee' )
		),	
		'style' => array(
			'type' => 'select',
			'std' => 'simple',
			'label' => __( 'Style', 'magee' ),
			'desc' => '',
			'options' => array(
				'simple' => __( 'Simple Style', 'magee' ),
				'boxed' => __( 'Boxed Style', 'magee' ),
			)
		),
		'type' => array(
			'type' => 'select',
			'label' => __( 'Type', 'magee' ),
			'desc' => '',
			'std' => '1',
			'options' => array(
				'1' => __( 'Type 1', 'magee' ),
				'2' => __( 'Type 2', 'magee' ),
			)
		),
		'content' => array(
			'std' => "\r\n[ms_accordion_item title='Accordion Item 1' icon='fa-flag' status='open']Accordion Item Content 1[/ms_accordion_item]\r\n[ms_accordion_item title='Accordion Item 2' icon='fa-star' status='close']Accordion Item Content 2[/ms_accordion_item]\r\n[ms_accordion_item title='Accordion Item 3' icon='fa-music' status='close']Accordion Item Content 3[/ms_accordion_item]\r\n",
			'type' => 'textarea',
			'label' => __( 'Accordion Items', 'magee' ),
			'desc' => __( 'Insert accordion items shortcode.', 'magee' ),
		),	
		
		),
	'shortcode' => '[ms_accordion style="{{style}}" type="{{type}}"  class="{{class}}" id="{{id}}"]{{content}}[/ms_accordion]',
	'popup_title' => __( 'Accordion Shortcode', 'magee' ),


);


/*-----------------------------------------------------------------------------------*/
/*	Alert Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['alert'] = array(
	'no_preview' => true,
	'icon' => 'fa-exclamation-circle',
	'params' => array(
		'icon' => array(
			'type' => 'iconpicker',
			'label' => __( 'Icon', 'magee' ),
			'desc' => __( 'Click an icon to select, click again to deselect.', 'magee' ),
			'options' => $icons
			),
		
		'content' => array(
			'std' => __('Warning! Better check yourself, you\'re not looking too good.', 'magee'),
			'type' => 'textarea',
			'label' => __( 'Alert Content', 'magee' ),
			'desc' => __( 'Insert the content for the alert.', 'magee' ),
		),
		
		'background_color' => array(
			'std' => '#f5f5f5',
			'type' => 'colorpicker',
			'label' => __( 'Background Color', 'magee' ),
			'desc' => __( 'Set background color for alert box.', 'magee' ),
		),
		'text_color' => array(
			'std' => '',
			'type' => 'colorpicker',
			'label' => __( 'Text Color', 'magee' ),
			'desc' =>__( 'Set content color & border color for alert box.', 'magee' ),
		),
	
		
		'border_width' => array(
			'std' => '0px',
			'type' => 'text',
			'label' => __( 'Border Width', 'magee' ),
			'desc' => __('In pixels (px), eg: 1px.', 'magee')
		),
		
		'border_radius' => array(
			'std' => '0px',
			'type' => 'text',
			'label' => __( 'Border Radius', 'magee' ),
			'desc' => __('In pixels (px), eg: 1px.', 'magee')
		),
		
		'box_shadow' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Box Shadow', 'magee' ),
			'desc' => __( 'Display a box shadow for alert.', 'magee' ),
			'options' => $reverse_choices 
		),	
		'dismissable' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Dismissable', 'magee' ),
			'desc' => __( 'The alert box is dismissable.', 'magee' ),
			'options' =>  $reverse_choices 
		),	
		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee')
		),		
	),
	'shortcode' => '[ms_alert icon="{{icon}}" background_color="{{background_color}}"  text_color="{{text_color}}"  border_width="{{border_width}}"  border_radius="{{border_radius}}" box_shadow="{{box_shadow}}" dismissable="{{dismissable}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_alert]',
	'popup_title' => __( 'Alert Shortcode', 'magee' )
);



/*******************************************************
 *	Button Config
 ********************************************************/

$magee_shortcodes['button'] = array(
	'no_preview' => true,
	'icon' => 'fa-hand-o-up',
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __( 'Button Style', 'magee' ),
			'desc' => __( 'Select the button\'s default style.', 'magee' ),
			'options' => array(
				'normal' => __('Normal', 'magee'),
				'dark' => __('Dark', 'magee'),
				'light' => __('Light', 'magee'),
				'2d' => __('2d', 'magee'),
				'3d' => __('3d', 'magee'),
				'line' => __('Line', 'magee'),
				'line_dark' => __('Line Dark', 'magee'),
				'line_light' => __('Line Light', 'magee'),
				
			)
		),
		'link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Button URL', 'magee' ),
			'desc' => __( 'Add the button\'s url eg: http://example.com.', 'magee' )
		),
		'size' => array(
			'type' => 'select',
			'std' =>'medium',
			'label' => __( 'Button Size', 'magee' ),
			'desc' => __( 'Select the button\'s size.', 'magee' ),
			'options' => array(
				'small' => __('Small', 'magee'),
				'medium' => __('Medium', 'magee'),
				'large' => __('Large', 'magee'),
				'xlarge' => __('XLarge', 'magee'),
			)
		),
		
		'border_width' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Border Width', 'magee'),
			'desc' => __('In pixels (px), default: 2px.', 'magee'),
		),
	
		'shape' => array(
			'type' => 'select',
			'label' => __( 'Button Shape', 'magee' ),
			'desc' => __( 'Select the button\'s shape. Choose default for theme option selection.', 'magee' ),
			'options' => array(
				'' => __('Default', 'magee'),
				'square' => __('Square', 'magee'),
				'rounded' => __('Rounded', 'magee'),
				'full-rounded' => __('Full Rounded', 'magee'),
			)
		),
		'shadow' => array(
			'type' => 'select',
			'label' => __( 'Text Shadow', 'magee' ),
			'desc' => __( 'Display shadow for button text.', 'magee' ),
			'options' => $reverse_choices
		),
		'gradient' => array(
			'type' => 'select',
			'label' => __( 'Gradient', 'magee' ),
			'desc' => __( 'Display gradient for button.', 'magee' ),
			'options' => $reverse_choices
		),
		'block' => array(
			'type' => 'select',
			'label' => __( 'Block Button', 'magee' ),
			'desc' => __( 'Display in full width.', 'magee' ),
			'options' => $reverse_choices
		),
		
		'target' => array(
			'type' => 'select',
			'label' => __( 'Button Target', 'magee' ),
			'desc' => __( '_self = open in same window <br />_blank = open in new window.', 'magee' ),
			'options' => array(
				'_self' => '_self',
				'_blank' => '_blank'
			)
		),
	
		'content' => array(
			'std' => __('Button Text', 'magee'),
			'type' => 'text',
			'label' => __( 'Button\'s Text', 'magee' ),
			'desc' => __( 'Add the text that will display in the button.', 'magee' ),
		),
		
		'color' => array(
			'type' => 'colorpicker',
			'desc' => __( 'Set background color for button.', 'magee' ),
			'label' => __( 'Button Color', 'magee' ),
			'std' => ''
		),
		
		'textcolor' => array(
			'type' => 'colorpicker',
			'std' => '#ffffff',
			'label' => __( 'Text Color', 'magee' ),
			'desc' => __( 'Set content color & border color for button.', 'magee' )
		),
		
		'icon' => array(
			'type' => 'iconpicker',
			'label' => __( 'Button Icon', 'magee' ),
			'desc' => __( 'Click an icon to select, click again to deselect.', 'magee' ),
			'options' => $icons
		),
		
		'iconanimationtype' => array(
			'type' => 'select',
			'label' => __( 'Icon Animation Type', 'magee' ),
			'desc' => __( 'Select the type of animation to use on the button icon.', 'magee' ),
			'options' => $animation_type
		),
		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee')
		),			
	),
	'shortcode' => '[ms_button style="{{style}}" link="{{link}}" size="{{size}}" shape="{{shape}}" shadow="{{shadow}}" block="{{block}}" target="{{target}}" gradient="{{gradient}}" color="{{color}}"  text_color="{{textcolor}}" icon="{{icon}}" icon_animation_type="{{iconanimationtype}}" border_width="{{border_width}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_button]',
	'popup_title' => __( 'Button Shortcode', 'magee')
);


/*******************************************************
 *	Columns Config
 ********************************************************/

$magee_shortcodes['column'] = array(
	'no_preview' => true,
	'icon' => 'fa-columns',
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __( 'Column Style', 'magee' ),
			'desc' => __( 'Select the size of column.', 'magee' ),
			'options' => array(
				'1/1' => __('1/1', 'magee'),
				'1/2' => __('1/2', 'magee'),
				'1/3' => __('1/3', 'magee'),
				'1/4' => __('1/4', 'magee'),
				'1/5' => __('1/5', 'magee'),
				'1/6' => __('1/6', 'magee'),
				'2/3' => __('2/3', 'magee'),
				'2/5' => __('2/5', 'magee'),
				'3/4' => __('3/4', 'magee'),
				'3/5' => __('3/5', 'magee'),
				'4/5' => __('4/5', 'magee'),
				'5/6' => __('5/6', 'magee'),
			)
		),
	
		'content' => array(
			'std' => __('Column Content', 'magee'),
			'type' => 'textarea',
			'label' => __( ' Column Content', 'magee' ),
			'desc' => __( 'Insert the column\'s content', 'magee' ),
		),		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee')
		),			
	),
	'shortcode' => '[ms_column style="{{style}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_column]',
	'popup_title' => __( 'Column Shortcode', 'magee')
);


/*******************************************************
 *	Custom Box Config
 ********************************************************/
$magee_shortcodes['custom_box'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-alt',
	'params' => array(
		'content' => array(
			'std' => __('Custom Box Content', 'magee'),
			'type' => 'textarea',
			'label' => __( 'Content', 'magee' ),
			'desc' => __( 'Insert content for custom box.', 'magee' ),
		),
		'backgroundimage' => array(
				'type' => 'uploader',
				'label' => __( 'Background Image', 'magee' ),
				'desc' => __( 'Upload an image to display in background of custom box.', 'magee' ),
			), 
		'padding' => array(
			'std' => '30px',
			'type' => 'text',
			'label' => __( 'Padding', 'magee' ),
			'desc' => __( 'Content Padding. eg:30px', 'magee')
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee')
		),			
	),
	'shortcode' => '[ms_custom_box  backgroundimage="{{backgroundimage}}" padding="{{padding}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_custom_box]',
	'popup_title' => __( ' Custom Box Shortcode', 'magee')
);


/*-----------------------------------------------------------------------------------*/
/*	Countdowns Config
/*-----------------------------------------------------------------------------------*/


$magee_shortcodes['countdowns'] = array(
	'no_preview' => true,
	'icon' => 'fa-calendar',
	'params' => array(
		

	'endtime' => array(
			'std' => date('Y-m-d H:i:s',strtotime(' 1 month')),
			'type' => 'text',
			'label' => __( 'Set end time for countdown.', 'magee' ),
			'desc' => '',

		),	
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee' )
		)
		
		
	),
	'shortcode' => '[ms_countdowns endtime="{{endtime}}" class="{{class}}" id="{{id}}"]',
	'popup_title' => __( 'Countdowns Shortcode', 'magee' )
);


/*-----------------------------------------------------------------------------------*/
/*	Counter Box Config
/*-----------------------------------------------------------------------------------*/


$magee_shortcodes['counter'] = array(
	'no_preview' => true,
	'icon' => 'fa-calculator',
	'params' => array(
		

	'top_icon' => array(
			'type' => 'iconpicker',
			'label' => __( 'Top Icon', 'magee' ),
			'desc' => __( 'Click an icon to select, click again to deselect.', 'magee' ),
			'options' => $icons
		),
	'left_icon' => array(
			'type' => 'iconpicker',
			'label' => __( 'Left Icon', 'magee' ),
			'desc' =>  __( 'Insert text before the number.', 'magee' ),
			'options' => $icons
		),
		
		'left_text' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Left Text', 'magee' ),
			'desc' => __( 'Left text of counter num', 'magee' ),
		),
		
		'counter_num' => array(
			'std' => '100',
			'type' => 'text',
			'label' => __( 'Counter Num', 'magee' ),
			'desc' => __( 'The animated counter number.', 'magee' ),
		),
		'right_text' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Right Text', 'magee' ),
			'desc' =>  __( 'Insert text after the number.', 'magee' ),
		),
		
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Title', 'magee' ),
			'desc' => __( 'Insert Title for counter.', 'magee' ),
		),
		
		'border' => array(
			'type' => 'select',
			'label' => __( 'Display Border', 'magee' ),
			'desc' =>  __( 'Border for counter.', 'magee' ),
			'options' => array( 
							   '0' => __('No', 'magee' ),  
							   '1' => __('Yes', 'magee' ),  
							   )
							   
		),
	
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee' )
		)
		
		
	),
	'shortcode' => '[ms_counter top_icon="{{top_icon}}"  left_icon="{{left_icon}}" counter_num="{{counter_num}}"  left_text="{{left_text}}" right_text="{{right_text}}" title="{{title}}" border="{{border}}" class="{{class}}" id="{{id}}"]',
	'popup_title' => __( 'Counter Shortcode', 'magee' )
);


/*******************************************************
 *	Divider Config
 ********************************************************/

$magee_shortcodes['divider'] = array(
	'no_preview' => true,
	'icon' => 'fa-ellipsis-h',
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __( 'Divider Style', 'magee' ),
			'desc' => __( 'Select the Divider\'s Style.', 'magee' ),
			'options' => array(
				'normal' => __('Normal', 'magee'),
				'shadow' => __('Shadow', 'magee'),
				'dashed' => __('Dashed', 'magee'),
				'dotted' => __('Dotted', 'magee'),
				'double_line' => __('Double Line', 'magee'),
				'double_dashed' => __('Double Dashed', 'magee'),
				'double_dotted' => __('Double Dotted', 'magee'),
				'image' => __('Image', 'magee'),
				'icon' => __('Icon', 'magee'),
				'back_to_top' => __('Back to Top', 'magee'),
			)
		),
		'width' => array(
			'std' => '100%',
			'type' => 'text',
			'label' => __( 'Width', 'magee' ),
			'desc' => __( 'In pixels. Default: 100%', 'magee' ),
		),
		'align' => array(
			'type' => 'select',
			'label' => __( 'Align', 'magee' ),
			'desc' => __( 'When the width is not 100%.', 'magee' ),
			'options' => array(
				'left' => __('Left', 'magee'),
				'center' => __('Center', 'magee'),
			)
		),
		'margin_top' => array(
			'std' => '30px',
			'type' => 'text',
			'label' => __( 'Margin Top', 'magee' ),
			'desc' => __( 'Spacing above the separator. In pixels.', 'magee' ),
		),
		'margin_bottom' => array(
			'std' => '30px',
			'type' => 'text',
			'label' => __( 'Margin Bottom', 'magee' ),
			'desc' => __( 'Spacing under the separator. In pixels.', 'magee' ),
		),
		
		'border_size' => array(
				'std' => '',
				'type' => 'text',
				'label' => __( 'Border Size', 'magee' ),
				'desc' => __( 'In pixels (px), eg: 1px. ', 'magee' ),
		 ),
		'border_color' => array(
				'type' => 'colorpicker',
				'label' => __( 'Border Color', 'magee' ),
				'desc' => __( 'Set the border color.', 'magee' )
			),
		
		'icon' => array(
				'type' => 'iconpicker',
				'label' => __( 'Icon', 'magee' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'magee' ),
				'options' => $icons
			),	
	
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee')
		),			
	),
	'shortcode' => '[ms_divider style="{{style}}" align="{{align}}"  width="{{width}}"  margin_top="{{margin_top}}" margin_bottom="{{margin_bottom}}" border_size="{{border_size}}" border_color="{{border_color}}" icon="{{icon}}" class="{{class}}" id="{{id}}"]',
	'popup_title' => __( 'Divider Shortcode', 'magee')
);


/*-----------------------------------------------------------------------------------*/
/*	Dropcap Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['dropcap'] = array(
	'no_preview' => true,
	'icon' => 'fa-square',
	'params' => array(
		'content' => array(
			'std' => 'A',
			'type' => 'textarea',
			'label' => __( 'Dropcap Letter', 'magee' ),
			'desc' => __( 'Add the letter to be used as dropcap', 'magee' ),
		),
		'color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Color', 'magee' ),
			'desc' => __( 'Controls the color of the dropcap letter. Leave blank for theme option selection.', 'magee ')
		),		
		'boxed' => array(
			'type' => 'select',
			'label' => __( 'Boxed Dropcap', 'magee' ),
			'desc' => __( 'Choose to get a boxed dropcap.', 'magee' ),
			'options' => $reverse_choices
		),
		'boxedradius' => array(
			'std' => '8px',
			'type' => 'text',
			'label' => __( 'Box Radius', 'magee' ),
			'desc' => __('Choose the radius of the boxed dropcap. In pixels (px), eg: 1px', 'magee')
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee')
		),
	),
	'shortcode' => '[ms_dropcap color="{{color}}" boxed="{{boxed}}" boxed_radius="{{boxedradius}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_dropcap]',
	'popup_title' => __( 'Dropcap Shortcode', 'magee' )
);

/*-----------------------------------------------------------------------------------*/
/*	Feature Boxes Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['featurebox'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-alt',
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __( 'Feature Box Style', 'magee' ),
			'desc' => __( 'Select the Feature Box\'s Style.', 'magee' ),
			'options' => array(
				'1' => __('Icon on Top of Title', 'magee'),
				'2' => __('Icon Beside Title and Content', 'magee'),
				'3' => __('Icon Beside Title', 'magee'),
				'4' => __('Boxed', 'magee'),
			)
		),
		
		'title' => array(
				'std' => 'Feature Box',
				'type' => 'text',
				'label' => __( 'Title', 'magee' ),
				'desc' => __( 'Insert title for feature box.', 'magee' ),
		 ),
		
		'title_font_size' => array(
				'std' => '18px',
				'type' => 'text',
				'label' => __( 'Title Font Size', 'magee' ),
				'desc' => __( 'Set font size for title of feature box.', 'magee' ),
		 ),
		'title_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Title Color', 'magee' ),
			'desc' => __( 'Set color for title of feature box.', 'magee' ),
			),
		'icon_animation_type' => array(
			'type' => 'select',
			'label' => __( 'Icon Hover Animation', 'magee' ),
			'desc' => __( 'Select the Icon\'s Animation.', 'magee' ),
			'options' => $animation_type
		),
		'icon' => array(
			'type' => 'iconpicker',
			'label' => __( 'Icon', 'magee' ),
			'desc' => __( 'Click an icon to select, click again to deselect.', 'magee' ),
			'options' => $icons
			),
		 'icon_size' => array(
				'std' => '46px',
				'type' => 'text',
				'label' => __( 'Icon Size', 'magee' ),
				'desc' =>  __( 'Set size for icon of feature box.', 'magee' ),
		 ),
		'icon_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Icon Color', 'magee' ),
			'desc' => __( 'Set color for icon of feature box.', 'magee' ),
			),
		'icon_border_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Icon Border Color', 'magee' ),
			'desc' => __( 'Set border color for icon of feature box.', 'magee' ),
			),
		'icon_border_width' => array(
				'std' => '',
				'type' => 'text',
				'label' => __( 'Icon Border Width', 'magee' ),
				'desc' =>  __( 'Set border width for icon of feature box.', 'magee' ),
		 ),
		
		'flip_icon' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Flip Icon', 'magee' ),
			'desc' => __( 'Choose to flip the icon of feature box.', 'magee' ),
			'options' => array(
				'none' => __('None', 'magee'),
				'horizontal' => __('Horizontal', 'magee'),
				'vertical' => __('Vertical', 'magee'),
		     )
			),
			
		'spinning_icon' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Spinning Icon', 'magee' ),
			'desc' => __( 'Choose to spin the icon of feature box.', 'magee' ),
			'options' => $reverse_choices 
		),	
		
		 'icon_background_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Icon Circle Background Color', 'magee' ),
			'desc' => __( 'Set background for icon circle of feature box.', 'magee' ),
		),
		 
		'alignment' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Icon Alignment', 'magee' ),
			'desc' => __( 'Set alignment for style2/style3 of feature box.', 'magee' ),
			'options' => array(
				'left' => __('Left', 'magee'),
				'right' => __('Right', 'magee'),
		
			)
		),	
		'icon_circle' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Icon Circle', 'magee' ),
			'desc' => __( 'Choose to display icon of feature box in circle.', 'magee' ),
			'options' => $reverse_choices 
		),	
		
		'icon_image' => array(
				'std' => '',
				'type' => 'uploader',
				'label' => __( 'Icon Image', 'magee' ),
				'desc' => __( 'To upload your own icon image, remember to deselect icon above.', 'magee' ),
		 ),
		'icon_image_width' => array(
				'std' => '',
				'type' => 'text',
				'label' => __( 'Icon Image Width', 'magee' ),
				'desc' => __( 'If using custom icon image, set icon image width. In percentage of pixels (px), eg: 1px.', 'magee' ),
		 ),
		'icon_image_height' => array(
				'std' => '',
				'type' => 'text',
				'label' => __( 'Icon Image Height', 'magee' ),
				'desc' => __( 'If using custom icon image, set icon image height. In percentage of pixels (px), eg: 1px.', 'magee' ),
		 ),
		
		
		'link_url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Link URL', 'magee' ),
			'desc' => __( 'Set link for feature box, eg: http://example.com.', 'magee' ),
		),	
		'link_target' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Link Target', 'magee' ),
			'desc' => __( '_self = open in same window _blank = open in new window.', 'magee' ),
			'options' => array(
				'_blank' => __('_blank', 'magee'),
				'_self' => __('_self', 'magee'),
		
			)
		),	
		'link_text' => array(
				'std' => 'Read More',
				'type' => 'text',
				'label' => __( 'Link Text', 'magee' ),
				'desc' => __( 'Insert link text for feature box. It would not display if you leave it as blank.', 'magee' ),
		 ),
		'link_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Link Color', 'magee' ),
			'desc' => __( 'Set color for link of feature box.', 'magee' ),
		),
		'content_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Content Color', 'magee' ),
			'desc' => __( 'Set color for content of feature box.', 'magee' ),
		),
		'content_box_background_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Set box background color for Boxed Style.', 'magee' ),
			'desc' => __( 'For Boxed Style', 'magee' ),
		),

		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee')
		),	
		'content' => array(
			'std' => __('Your Content Goes Here', 'magee'),
			'type' => 'textarea',
			'label' => __( 'Feature Box Content', 'magee' ),
			'desc' => '',
		),
	),
	'shortcode' => '[ms_featurebox style="{{style}}" title_font_size="{{title_font_size}}" title_color="{{title_color}}" icon_circle="{{icon_circle}}" icon_size="{{icon_size}}" title="{{title}}" icon="{{icon}}" alignment="{{alignment}}" icon_animation_type="{{icon_animation_type}}" icon_color="{{icon_color}}" icon_background_color="{{icon_background_color}}" icon_border_color="{{icon_border_color}}" icon_border_width="{{icon_border_width}}"  flip_icon="{{flip_icon}}" spinning_icon="{{spinning_icon}}" icon_image="{{icon_image}}" icon_image_width="{{icon_image_width}}" icon_image_height="{{icon_image_height}}" link_url="{{link_url}}" link_target="{{link_target}}" link_text="{{link_text}}" link_color="{{link_color}}" content_color="{{content_color}}" content_box_background_color="{{content_box_background_color}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_featurebox]',
	'popup_title' => __( 'Feature Box Shortcode', 'magee')
);





/*******************************************************
 *	Flip Box Config
 ********************************************************/

$magee_shortcodes['flip_box'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-alt',
	'params' => array(
		'direction' => array(
			'type' => 'select',
			'label' => __( 'Direction', 'magee' ),
			'desc' => __( 'Select flip directioon.', 'magee' ),
			'options' => array(
				'horizontal' => __('horizontal', 'magee'),
				'vertical' => __('vertical', 'magee'),
			)			
		),
		'front_paddings' => array(
				'std' => '15px',
				'type' => 'text',
				'label' => __( 'Front Container Paddings', 'magee' ),
				'desc' => __( 'Set paddings for front container of flip box.', 'magee' ),
			),
		'front_background' => array(
			'type' => 'colorpicker',
			'std'=>'',
			'label' => __( 'Front Background Color', 'magee' ),
			'desc' => __( 'Set background color for front container of flip box.', 'magee')
		),
		/*'front_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Front Font Color', 'magee' ),
			'desc' => __( 'Custom setting only. Set the background color for custom alert boxes.', 'magee')
		),*/
		'front_content' => array(
			'std' => __('Front Content', 'magee'),
			'type' => 'textarea',
			'label' => __( 'Front content.', 'magee' ),
			'desc' => __( 'Insert content for front container of flip box.', 'magee' ),
		),
		'back_paddings' => array(
				'std' => '15px',
				'type' => 'text',
				'label' => __( 'Back Container Paddings', 'magee' ),
				'desc' => __( 'Set paddings for back container of flip box.', 'magee' ),
			),
		'back_background' => array(
			'std'=>'',
			'type' => 'colorpicker',
			'label' => __( 'Front Background Color', 'magee' ),
			'desc' => __( 'Set background color for back container of flip box.', 'magee')
		),
		/*'back_color' => array(
			'std' =>'#ffffff',
			'type' => 'colorpicker',
			'label' => __( 'Back Font Color', 'magee' ),
			'desc' => __( 'Custom setting only. Set the background color for custom alert boxes.', 'magee')
		),*/
		'back_content' => array(
			'std' => __('Back Content', 'magee'),
			'type' => 'textarea',
			'label' => __( 'Back Content.', 'magee' ),
			'desc' => __('Insert content for back container of flip box.', 'magee'),
		),
		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee')
		),			
	),
	'shortcode' => '[ms_flip_box direction="{{direction}}" front_paddings="{{front_paddings}}"  front_background="{{front_background}}" back_paddings="{{back_paddings}}" back_background="{{back_background}}" class="{{class}}" id="{{id}}"]{{front_content}}|||{{back_content}}[/ms_flip_box]',
	'popup_title' => __( 'Flip Box Shortcode', 'magee')
);

/*-----------------------------------------------------------------------------------*/
/*	Highlight Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['highlight'] = array(
	'no_preview' => true,
	'icon' => 'fa-magic',
	'params' => array(

		'background_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Background Color', 'magee' ),
			'desc' => __( 'Set background color for highlight item.', 'magee')
		),
		'border_radius' => array(
			'type' => 'text',
			'std' =>'5px',
			'label' => __( 'Border Radius', 'magee' ),
			'desc' => __( 'In pixels (px), eg: 1px.', 'magee' ),
		),
		
		'content' => array(
			'std' => __('Your Content Goes Here', 'magee'),
			'type' => 'textarea',
			'label' => __( 'Content to Higlight', 'magee' ),
			'desc' => __( 'Insert content to highlight.', 'magee' ),
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee')
		),			

	),
	'shortcode' => '[ms_highlight background_color="{{background_color}}" border_radius="{{border_radius}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_highlight]',
	'popup_title' => __( 'Highlight Shortcode', 'magee' )
);


/*-----------------------------------------------------------------------------------*/
/*	Image Frame Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['image_frame'] = array(
     'icon' => 'fa-file-image-o',
	'no_preview' => true,
	'params' => array(

	'src' => array(
			'type' => 'uploader',
			'label' => __( 'Image', 'magee' ),
			'desc' => __( 'Upload an image to display.', 'magee' ),
		),
		'link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Image Link URL', 'magee' ),
			'desc' => __( 'Add the URL the picture will link to, ex: http://example.com.', 'magee' ),
		),
	'link_target' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Link Target', 'magee' ),
			'desc' => __( '_self = open in same window _blank = open in new window.', 'magee' ),
			'options' => array(
				'_blank' => __('_blank', 'magee'),
				'_self' => __('_self', 'magee'),
		
			),
			),
	'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee')
		),
	'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee')
		),			

	),
	'shortcode' => '[ms_image_frame src="{{src}}" link="{{link}}" link_target="{{link_target}}" class="{{class}}" id="{{id}}"]',
	'popup_title' => __( 'Image Frame Shortcode', 'magee' )
);



/*******************************************************
 *	List Config
 ********************************************************/
 $magee_shortcodes['list'] = array(
	'no_preview' => true,
	'icon' => 'fa-list',
	'params' => array(
		'icon' => array(
			'type' => 'iconpicker',
			'label' => __( 'Icon', 'magee' ),
			'desc' => __( 'Click an icon to select, click again to deselect.', 'magee' ),
			'options' => $icons
			),
		'icon_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Icon Color', 'magee' ),
			'desc' => __( 'Set color fo list icon.', 'magee')
			),
		'icon_boxed' => array(
			'type' => 'select',
			'label' => __( 'Icon Boxed', 'magee' ),
			'desc' => __( 'Choose to set icon boxed.', 'magee'),
			'options' =>array(
				'no' => __('No','magee'),
				'yes' => __('Yes','magee'),)
			),
		 'background_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Icon Circle Background Color', 'magee' ),
			'desc' => __( 'Set background color for list icon.', 'magee')
		),
		'boxed_shape' => array(
			'type' => 'select',
			'label' => __( 'Boxed Shape', 'magee' ),
			'desc' => __( 'Choose boxed shape for list icon.', 'magee'),
			'options' =>array(
				'square' => __('Square','magee'),
				'circle' => __('Circle','magee'),)
			),
		'item_border' => array(
			'type' => 'select',
			'label' => __( 'Item Border', 'magee' ),
			'desc' => __( 'Choose to display item border for list.', 'magee'),
			'options' =>array(
				'no' => __('No','magee'),
				'yes' => __('Yes','magee'),)
			),
		'item_size' => array(
			'type' => 'text',
			'std'  => '12px',
			'label' => __( 'Item Size', 'magee' ),
			'desc' => __( 'Set text font size for item.', 'magee'),
			),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee')
		),	
		'content' => array(
				'std' => "\r\n[ms_list_item]List item 1[/ms_list_item]\r\n[ms_list_item]List item 2[/ms_list_item]\r\n[ms_list_item]List item 3[/ms_list_item]\r\n",
				'type' => 'textarea',
				'label' => __( 'List items', 'magee' ),
				'desc' => ''
				),	
	),
	'shortcode' => '[ms_list icon="{{icon}}" icon_color="{{icon_color}}" icon_boxed="{{icon_boxed}}" background_color="{{background_color}}" boxed_shape="{{boxed_shape}}" item_border="{{item_border}}" item_size="{{item_size}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_list]',
	'popup_title' => __( 'List Shortcode', 'magee' )
);

/*******************************************************
 *	Modal Config
 ********************************************************/

$magee_shortcodes['modal'] = array(
	'no_preview' => true,
	'icon' => 'fa-comment-o',
	'params' => array(
		'modal_anchor_text' => array(
			'std' => 'Modal Anchor Text',
			'type' => 'textarea',
			'label' => __( 'Modal Anchor Text', 'magee' ),
			'desc' => __( 'Insert anchor text for the modal.', 'magee' ),
		),
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Modal Heading', 'magee' ),
			'desc' => __( 'Insert heading text for the modal.', 'magee' ),
		),		
		'size' => array(
			'type' => 'select',
			'label' => __( 'Size Of Modal', 'magee' ),
			'desc' => __( 'Select the modal window size.', 'magee' ),
			'options' => array(
				'small' => __('Small', 'magee'),
				'middle' => __('Middle', 'magee'),
				'large' => __('Large', 'magee')
			)
		),

		'showfooter' => array(
			'type' => 'select',
			'label' => __( 'Show Footer', 'magee' ),
			'desc' => __( 'Choose to show the modal footer with close button.', 'magee' ),
			'options' => array(
				'yes' => __('yes', 'magee'),
				'no' => __('no', 'magee'),	
			)
		),
		'content' => array(
			'std' => __('Your Content Goes Here', 'magee'),
			'type' => 'textarea',
			'label' => __( 'Contents of Modal', 'magee' ),
			'desc' => __( 'Add your content to be displayed in modal.', 'magee' ),
		),		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee' )
		),			
	),
	'shortcode' => '[ms_modal title="{{title}}" size="{{size}}" showfooter="{{showfooter}}" class="{{class}}" id="{{id}}"][ms_modal_anchor_text]{{modal_anchor_text}}[/ms_modal_anchor_text][ms_modal_content]{{content}}[/ms_modal_content][/ms_modal]',
	'popup_title' => __( 'Modal Shortcode', 'magee' )
);

/*-----------------------------------------------------------------------------------*/
/*	Popover Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['popover'] = array(
	'no_preview' => true,
	'icon' => 'fa-comment-o',
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Popover Heading', 'magee' ),
			'desc' => __( 'Insert heading text of the popover.', 'magee' ),
		),
		'triggering_text' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Triggering Text', 'magee' ),
			'desc' => __( 'Content that will trigger the popover.', 'magee' ),
		),
		
	
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Contents Inside Popover', 'magee' ),
			'desc' => __( 'Text to be displayed inside the popover.', 'magee' ),
		),

		'trigger' => array(
			'type' => 'select',
			'label' => __( 'Popover Trigger Method', 'magee' ),
			'desc' => __( 'Choose mouse action to trigger popover.', 'magee' ),
			'options' => array(
				'click' => __('Click', 'magee'),
				'hover' => __('Hover', 'magee'),
			)
		),
		'placement' => array(
			'type' => 'select',
			'label' => __( 'Popover Position', 'magee' ),
			'desc' => __( 'Choose the display position of the popover.', 'magee' ),
			'options' => array(
				'top' => __('Top', 'magee'),
				'bottom' => __('Bottom', 'magee'),
				'left' => __('Left', 'magee'),
				'Right' => __('Right', 'magee'),
			)
		),
	
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee' )
		),			
	),
	'shortcode' => '[ms_popover title="{{title}}" triggering_text="{{triggering_text}}" trigger="{{trigger}}" placement="{{placement}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_popover]', // as there is no wrapper shortcode
	'popup_title' => __( 'Popover Shortcode', 'magee' ),

);

/*-----------------------------------------------------------------------------------*/
/*	Tooltip Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['tooltip'] = array(
	'no_preview' => true,
	'icon' => 'fa-comment-o',
	'params' => array(

		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Tooltip Text', 'magee' ),
			'desc' => __( 'Insert the text that displays in the tooltip', 'magee' )
		),
		'placement' => array(
			'type' => 'select',
			'label' => __( 'Tooltip Position', 'magee' ),
			'desc' => __( 'Choose the display position.', 'magee' ),
			'options' => array(
				'top' => __('Top', 'magee'),
				'bottom' => __('Bottom', 'magee'),
				'left' => __('Left', 'magee'),
				'right' => __('Right', 'magee'),
			)
		),
		'trigger' => array(
			'type' => 'select',
			'label' => __( 'Tooltip Trigger', 'magee' ),
			'desc' => __( 'Choose action to trigger the tooltip.', 'magee' ),
			'options' => array(
				'hover' => __('Hover', 'magee'),
				'click' => __('Click', 'magee'),
			)
		),			
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Content', 'magee' ),
			'desc' => __( 'Insert the text that will activate the tooltip hover', 'magee' )
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee' )
		),			
	),
	'shortcode' => '[ms_tooltip title="{{title}}" placement="{{placement}}" trigger="{{trigger}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_tooltip]',
	'popup_title' => __( 'Tooltip Shortcode', 'magee' )
);


/*-----------------------------------------------------------------------------------*/
/*	Person Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['person'] = array(
	'no_preview' => true,
	'icon' => 'fa-user',
	'params' => array(
		'name' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Name', 'magee' ),
			'desc' => __( 'Insert the name of the person.', 'magee' ),
		),
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Title', 'magee' ),
			'desc' => __( 'Insert the title of the person', 'magee' ),
		),
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Profile Description', 'magee' ),
			'desc' => __( 'Enter the content to be displayed', 'magee' )
		),
		'picture' => array(
			'type' => 'uploader',
			'label' => __( 'Picture', 'magee' ),
			'desc' => __( 'Upload an image to display.', 'magee' ),
		),
		'piclink' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Picture Link URL', 'magee' ),
			'desc' => __( 'Add the URL the picture will link to, ex: http://example.com.', 'magee' ),
		),
		'picborder' => array(
			'std' => '0',
			'type' => 'text',
			'label' => __( 'Picture Border Size', 'magee' ),
			'desc' => __( 'In pixels (px), ex: 1px. Leave blank for theme option selection.', 'magee' ),
		),
		'picbordercolor' => array(
			'type' => 'colorpicker',
			'label' => __( 'Picture Border Color', 'magee' ),
			'desc' => __( 'Controls the picture\'s border color. Leave blank for theme option selection.', 'magee' ),
		),
		'picborderradius' => array(
			'std' => '0',
			'type' => 'text',
			'label' => __( 'Picture Border Radius', 'magee' ),
			'desc' => __( 'Choose the border radius of the person image. In pixels (px), ex: 1px, or "round".  Leave blank for theme option selection.', 'magee' ),
		),				
		'iconboxedradius' => array(
			'std' => '4px',
			'type' => 'text',
			'label' => __( 'Social Icon Box Radius', 'magee' ),
			'desc' => __( 'Choose the border radius of the boxed icons. In pixels (px), ex: 1px, or "round". Leave blank for theme option selection.', 'magee' ),
		),		
		'iconcolor' => array(
			'std' => '',
			'type' => 'colorpicker',
			'label' => __( 'Social Icon Custom Colors', 'magee' ),
			'desc' => __( 'Controls the Icon\'s border color. Leave blank for theme option selection.', 'magee' ),
		),
		'icon1' => array(
				'type' => 'iconpicker',
				'label' => __( 'Icon1', 'magee' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'magee' ),
				'options' => $icons
			),
		'link1' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Link1 ', 'magee' ),
			'desc' => __( 'The Icon1 Link ', 'magee' ),
		),
		'icon2' => array(
				'type' => 'iconpicker',
				'label' => __( 'Icon2', 'magee' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'magee' ),
				'options' => $icons
			),
		'link2' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Link2 ', 'magee' ),
			'desc' => __( 'The Icon2 Link ', 'magee' ),
		),
		'icon3' => array(
				'type' => 'iconpicker',
				'label' => __( 'Icon3', 'magee' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'magee' ),
				'options' => $icons
			),
		'link3' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Link3 ', 'magee' ),
			'desc' => __( 'The Icon3 Link ', 'magee' ),
		),
		'icon4' => array(
				'type' => 'iconpicker',
				'label' => __( 'Icon4', 'magee' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'magee' ),
				'options' => $icons
			),
		'link4' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Link4', 'magee' ),
			'desc' => __( 'The Icon4 Link ', 'magee' ),
		),
		'icon5' => array(
				'type' => 'iconpicker',
				'label' => __( 'Icon5', 'magee' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'magee' ),
				'options' => $icons
			),
		'link5' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Link5', 'magee' ),
			'desc' => __( 'The Icon5 Link ', 'magee' ),
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee' )
		),
	),
	'shortcode' => '[ms_person name="{{name}}" title="{{title}}" picture="{{picture}}" piclink="{{piclink}}" picborder="{{picborder}}" picbordercolor="{{picbordercolor}}" picborderradius="{{picborderradius}}" iconboxedradius="{{iconboxedradius}}" iconcolor="{{iconcolor}}" icon1="{{icon1}}" icon2="{{icon2}}" icon3="{{icon3}}" icon4="{{icon4}}" icon5="{{icon5}}" link1="{{link1}}" link2="{{link2}}" link3="{{link3}}" link4="{{link4}}" link5="{{link5}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_person]',
	'popup_title' => __( 'Person Shortcode', 'magee' )
);

/*-----------------------------------------------------------------------------------*/
/* Promo_box Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['promo_box'] = array(
	'no_preview' => true,
	'icon' => 'fa-tag',
	'params' => array(

		'style' => array(
			'type' => 'select',
			'label' => __( 'Style', 'magee' ),
			'desc' => __( 'Select style for promo box.', 'magee' ),
			'options' => array(
				'normal' => __('normal', 'magee'),
				'boxed' => __('boxed', 'magee'),
			)
		),		
		'border_color' => array(
			'type' => 'colorpicker',
			'std' => '#fdd200',
			'label' => __( 'Border Color', 'magee' ),
			'desc' =>  __( 'Set color for highlight border of promo box.', 'magee' ),
		),
		'border_width' => array(
			'std' => '1px',
			'type' => 'text',
			'label' => __( 'Border Width', 'magee' ),
			'desc' => __( 'Set width for highlight border of promo box.', 'magee' ),
		),
	
		'border_position' => array(
			'type' => 'select',
			'label' => __( 'Border Position', 'magee' ),
			'desc' => __( 'Choose position for highlight border of promo box.', 'magee' ),
			'options' => array(
				'left' => __('Left', 'magee'),
				'right' => __('Right', 'magee'),
				'top' => __('Top', 'magee'),
				'bottom' => __('Bottom', 'magee'),
				
			)
		),
		'background_color' => array(
			'type' => 'colorpicker',
			'std' =>'#f5f5f5',
			'label' => __( 'Icon Circle Background Color', 'magee' ),
			'desc' => __( 'Set background color for promo box.', 'magee' ),
		),
		'button_color' => array(
			'type' => 'colorpicker',
			'std' =>'',
			'label' => __( 'Button Color', 'magee' ),
			'desc' => '',
		),
		
		'button_text' => array(
			'std' => 'Download Now',
			'type' => 'text',
			'label' => __( 'Button Text', 'magee' ),
			'desc' => __( 'Inser text for button of promo box.', 'magee' ),
		),	
		'button_link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Button Link URL', 'magee' ),
			'desc' => __( 'Inser link for button of promo box, eg: http://example.com.', 'magee' ),
		),	
		'button_icon' => array(
				'type' => 'iconpicker',
				'label' => __( 'Button Icon', 'magee' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'magee' ),
				'options' => $icons
			),
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Content', 'magee' ),
			'desc' => __( 'Insert content for promo box.', 'magee' ),
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee' )
		),
	),
	'shortcode' => '[ms_promo_box style="{{style}}" border_color="{{border_color}}" border_width="{{border_width}}"  background_color="{{background_color}}" button_color="{{button_color}}" button_link="{{button_link}}" button_icon="{{button_icon}}" button_text="{{button_text}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_promo_box]',
	'popup_title' => __( 'Promo Box Shortcode', 'magee' )
);


/*-----------------------------------------------------------------------------------*/
/* Magee Slider Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['ms_slider'] = array(
	'no_preview' => true,
	'icon' => 'fa-sliders',
	'params' => array(
  
		'id' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Slider', 'magee' ),
			'desc' => '',
			'options' => $magee_sliders
		),		
		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		
	),),
	'shortcode' => '[ms_slider id="{{id}}" class="{{class}}"]',
	'popup_title' => __( 'Slider', 'magee' )
	
);



/*-----------------------------------------------------------------------------------*/
/* Social Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['social'] = array(
	'no_preview' => true,
	'icon' => 'fa-twitter',
	'params' => array(

		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Title ', 'magee' ),
			'desc' => __( 'Insert the title for the social icon.', 'magee' ),
			),
		'icon' => array(
			'type' => 'iconpicker',
				'label' => __( 'Icon', 'magee' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'magee' ),
				'options' => $icons
			),
		'icon_size' => array(
			'std' => '13px',
			'type' => 'text',
			'label' => __( 'Icon Size', 'magee' ),
			'desc' => __( 'In pixels (px), eg: 13px.', 'magee')
		),	
		'iconcolor' => array(
			'type' => 'colorpicker',
			'label' => __( 'Icon Color', 'magee' ),
			'desc' => __( 'Set color for icon.', 'magee')
			),
		 'backgroundcolor' => array(
			'type' => 'colorpicker',
			'label' => __( 'Icon Circle Background Color', 'magee' ),
			'desc' => __( 'Set background color for icon.', 'magee')
		),
		 'effect_3d' => array(
		 	'std'=>'no',
			'type' => 'select',
			'label' => __( 'Icon 3D effect' ),
			'desc' => __( 'Display box shadow for icon.', 'magee'),
			'options' => array(
				'yes' => __('Yes', 'magee'),
				'no' => __('No', 'magee'),
			)	
		),		
		'iconboxedradius' => array(
			'type' => 'select',
			'label' => __( 'Icon Box Radius Style', 'magee' ),
			//'desc' => __( '', 'magee' ),
			'options' => array(
				'normal' => __('Normal', 'magee'),
				'boxed' => __('Boxed', 'magee'),
				'rounded' => __('Rounded', 'magee'),
				'circle' => __('Circle ', 'magee'),				
			)
		),
		'iconlink' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Icon Link URL', 'magee' ),
			'desc' => __( 'Add the icon\'s url eg: http://example.com.', 'magee' ),
		),		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee' )
		),
	),
	'shortcode' => '[ms_social icon_size="{{icon_size}}" title="{{title}}" icon="{{icon}}" iconcolor="{{iconcolor}}" effect_3d="{{effect_3d}}" backgroundcolor="{{backgroundcolor}}" iconboxedradius="{{iconboxedradius}}" iconlink="{{iconlink}}"  class="{{class}}" id="{{id}}"][/ms_social]',
	'popup_title' => __( 'Social Shortcode', 'magee' )
);


/*-----------------------------------------------------------------------------------*/
/*	Tabs Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['tabs'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-alt',
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __( 'Style', 'magee' ),
			'desc' => __( 'Select tabs\' style.', 'magee' ),
			'options' => array(
				'simple' => __('Simple Style', 'magee'),
				'simple justified' => __('Simple Style Justified', 'magee'),
				'button' => __('Button Style', 'magee'),
				'button justified' => __('Button Style Justified', 'magee'),
				'normal' => __('Normal Style', 'magee'),
				'normal justified' => __('Normal Style Justified', 'magee'),
				'vertical' => __('Vertical Style', 'magee'),
				'vertical right' => __('Vertical Style Right', 'magee'),
			)
		),
		'title_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Title Color', 'magee' ),
			'desc' => __( 'Set color for tab item\'s title.', 'magee')
			),		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee' )
		),
		'content' => array(
				'std' => "\r\n[ms_tab title='Tab 1' icon='fa-flag']Tab content 1[/ms_tab]\r\n[ms_tab title='Tab 2' icon='fa-thumbs-up']Tab content 2[/ms_tab]\r\n[ms_tab title='Tab 3' icon='fa-leaf']Tab content 3[/ms_tab]\r\n",
				'type' => 'textarea',
				'label' => __( 'Tab Items', 'magee' ),
				'desc' => __( 'Insert tab items.', 'magee' )
			)
		
	),

	'shortcode' => '[ms_tabs style="{{style}}" title_color="{{title_color}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_tabs]',
	'popup_title' => __( 'Tab Shortcode', 'magee' ),

);


/*-----------------------------------------------------------------------------------*/
/* testimonial Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['testimonial'] = array(
	'no_preview' => true,
	'icon' => 'fa-commenting',
	'params' => array(
		'style' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Style ', 'magee' ),
			'desc' => __( 'Select testimonial\'s style', 'magee' ),
			'options' => array(
				'normal' => __('Normal', 'magee') ,
				'box' => __('Box', 'magee') ,
				),
			),
		'name' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Name', 'magee' ),
			'desc' => __( 'Name of testimonial\'s author.', 'magee' ),
			),
		'byline' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Byline', 'magee' ),
			'desc' => __( 'Byline of testimonial\'s author.', 'magee' ),
			),
		'avatar' => array(
				'type' => 'uploader',
				'label' => __( 'Avatar', 'magee' ),
				'desc' => __( 'Avatar of testimonial\'s author.', 'magee' ),
			),

		 'alignment' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Alignment', 'magee' ),
			'desc' => __( 'Select the content\'s alignment.', 'magee' ),
			'options' => array(
				'none' => __('None', 'magee') ,
				'center' => __('Center', 'magee') ,
				),
			),
		'content' => array(
				'std' => __('Testimonial Content', 'magee'),
				'type' => 'textarea',
				'label' => __( 'Testimonial Content', 'magee' ),
				'desc' => __( 'Insert content for testimonial.', 'magee' )
			),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee' )
		),
	),
	'shortcode' => '[ms_testimonial style="{{style}}" name="{{name}}" avatar="{{avatar}}" byline="{{byline}}" alignment="{{alignment}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_testimonial]',
	'popup_title' => __( 'Testimonial Shortcode', 'magee' )
);



/*-----------------------------------------------------------------------------------*/
/*	Contact Config
/*-----------------------------------------------------------------------------------*/


$magee_shortcodes['progress'] = array(
	'no_preview' => true,
	'icon' => 'fa-tasks',
	'params' => array(
		
'striped' => array(
			'type' => 'select',
			'label' => __( 'Striped', 'magee' ),
			'desc' => __( 'Choose to get the filled area striped.', 'magee' ),
			'options' => array( 
							   'none' => __( 'None Striped', 'magee' ),
							   'striped' => __( 'Striped', 'magee' ),
							   'striped animated' => __( 'Striped Animated', 'magee' ),
							   )
							  
		),
'rounded' => array(
			'type' => 'select',
			'label' => __( 'Rounded', 'magee' ),
			'desc' => __( 'Choose to set the progress bar as rounded.', 'magee' ),
			'options' => array( 
							   'on' => __( 'On', 'magee' ),
							   'off' => __( 'Off', 'magee' ),
							   )
							  
		),
	'number' => array(
			'type' => 'select',
			'label' => __( 'Display  Number', 'magee' ),
			'desc' => __( 'Choose to diplay number for progress bar.', 'magee' ),
			'options' =>$choices 
							  
		),
	
	'percent' => array(
			'std' => '50',
			'type' => 'text',
			'label' => __( 'Percent', 'magee' ),
			'desc' => __( 'Set percentage for progress bar. 0~100.', 'magee' )
		),
	
	'text' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Text', 'magee' ),
			'desc' => __( 'Insert text for progress bar.', 'magee' ),
		),
	
	'height' => array(
			'std' => '30',
			'type' => 'text',
			'label' => __( 'Height', 'magee' ),
			'desc' =>__( 'Set height for progress bar.', 'magee' ),
		),
	
	

	'color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Color', 'magee' ),
			'desc' => __( 'Set background color for filled area in progress bar.', 'magee' ),
			'std' => ''
		),
	'textalign' => array(
			'type' => 'select',
			'label' => __( 'Text Align', 'magee' ),
			'desc' =>  __( 'Set align for progress bar.', 'magee' ),
			'options' => array( 
							   'left' => __( 'Left', 'magee' ), 
							   'right' =>  __( 'Right', 'magee' ),
							   )
							   
		),
	'textposition' => array(
			'type' => 'select',
			'label' => __( 'Text Position', 'magee' ),
			'desc' => __( 'Choose text position for progress bar.', 'magee' ),
			'options' => array( 
							   '1' => __('Text on Progress bars', 'magee' ),  
							   '2' => __('Text above progress bars', 'magee' ),  
							   )
							   
		),
				
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee' )
		)
		
		
	),
	'shortcode' => '[ms_progress striped="{{striped}}" rounded="{{rounded}}" number="{{number}}"  percent="{{percent}}" text="{{text}}"  height="{{height}}" color="{{color}}" textalign="{{textalign}}" textposition="{{textposition}}" class="{{class}}" id="{{id}}"]',
	'popup_title' => __( 'Progress Shortcode', 'magee' )
);

/*-----------------------------------------------------------------------------------*/
/*	Piechart Config
/*-----------------------------------------------------------------------------------*/


$magee_shortcodes['piechart'] = array(
	'no_preview' => true,
	'icon' => 'fa-circle-o-notch',
	'params' => array(

	'percent' => array(
			'std' => '80',
			'type' => 'text',
			'label' => __( 'Percent', 'magee' ),
			'desc' => __( 'From 1 to 100.', 'magee' ),

		),
	
	'content' => array(
			'std' => '80%',
			'type' => 'textarea',
			'label' => __( 'Title', 'magee' ),
			'desc' => __( 'Insert title for piechart. It need to be short.', 'magee' ),

		),
	'size' => array(
			'std' => '200',
			'type' => 'text',
			'label' => __( 'Size', 'magee' ),
			'desc' => __( 'Set size for piechart.', 'magee' ),

		),
	'font_size' => array(
			'std' => '40px',
			'type' => 'text',
			'label' => __( 'Font Size', 'magee' ),
			'desc' => __( 'Set font size for piechart title.', 'magee' ),

		),
	'filledcolor' => array(
			'type' => 'colorpicker',
			'label' => __( 'Filled Color', 'magee' ),
			'desc' =>  __( 'Set color for filled area in piechart.', 'magee' ),
			'std' => '#fdd200'
		),
	'unfilledcolor' => array(
			'type' => 'colorpicker',
			'label' => __( 'Unfilled Color', 'magee' ),
			'desc' => __( 'Set color for unfilled area in piechart.', 'magee' ),
			'std' => '#f5f5f5'
		),
	
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
	
	),
	'shortcode' => '[ms_piechart percent="{{percent}}"  filledcolor="{{filledcolor}}" size="{{size}}" font_size="{{font_size}}" unfilledcolor="{{unfilledcolor}}" class="{{class}}" ]{{content}}[/ms_piechart]',
	'popup_title' => __( 'Piechart Shortcode', 'magee' )
);


/*-----------------------------------------------------------------------------------*/
/*	Timeline Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['timeline'] = array(
	'no_preview' => true,
	'icon' => 'fa-history',
	'params' => array(
					  
		'columns' => array(
			'type' => 'select',
			'label' => __( 'Columns', 'magee' ),
			'desc' =>__( 'Number of items.', 'magee' ),
			'std' => '4',
			'options' => array(
				'2' => __( '2 columns', 'magee' ),
				'3' => __( '3 columns', 'magee' ),
				'4' => __( '4 columns', 'magee' ),
				'5' => __( '5 columns', 'magee' )
			)
		),

		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee' )
		),	
		'content' => array(
			'std' => "\r\n[ms_timeline_item title='Moved In' time='2012']Vestibulum pharetra nibh sit amet consequat commodo.[/ms_timeline_item]\r\n[ms_timeline_item title='Upgraded In' time='2013']Vestibulum pharetra nibh sit amet consequat commodo.[/ms_timeline_item]\r\n[ms_timeline_item title='Extended In' time='2014']Vestibulum pharetra nibh sit amet consequat commodo.[/ms_timeline_item]\r\n[ms_timeline_item title='Presented In' time='2015']Vestibulum pharetra nibh sit amet consequat commodo.[/ms_timeline_item]\r\n",
			'type' => 'textarea',
			'label' => __( 'Timeline Items', 'magee' ),
			'desc' => __( 'Insert timeline items.', 'magee' ),
		),
		
		),
	'shortcode' => '[ms_timeline columns="{{columns}}"  class="{{class}}" id="{{id}}"]{{content}}[/ms_timeline]',
	'popup_title' => __( 'Timeline Shortcode', 'magee' ),


);


/*-----------------------------------------------------------------------------------*/
/*	panel Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['panel'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-alt',
	'params' => array(
		
		'title' => array(
			'std' =>  'Panel title',
			'type' => 'text',
			'label' => __( 'Title', 'magee' ),
			'desc' => __( 'Insert title for panel.', 'magee' ),
		),
		'content' => array(
			'std' => __('Panel content.', 'magee'),
			'type' => 'textarea',
			'label' => __( 'Panel Content', 'magee' ),
			'desc' => __( 'Insert content for panel.', 'magee' ),
		),
		
		
		'title_color' => array(
			'std' => '#000',
			'type' => 'colorpicker',
			'label' => __( 'Title Color', 'magee' ),
			'desc' => __( 'Set color for panel title.', 'magee' ),
		),
		'border_color' => array(
			'std' => '#ddd',
			'type' => 'colorpicker',
			'label' => __( 'Border Color', 'magee' ),
			'desc' =>  __( 'Set color for panel border.', 'magee' ),
		),
		
		'title_background_color' => array(
			'std' => '#f5f5f5',
			'type' => 'colorpicker',
			'label' => __( 'Title Background Color', 'magee' ),
			'desc' => __( 'Set background color for panel title.', 'magee' ),
		),
	
		
		'border_radius' => array(
			'std' => '0px',
			'type' => 'text',
			'label' => __( 'Border Radius', 'magee' ),
			'desc' => __('In pixels (px), eg: 1px.', 'magee')
		),
		
		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee')
		),		
	),
	'shortcode' => '[ms_panel title="{{title}}" title_color="{{title_color}}" border_color="{{border_color}}"  title_background_color="{{title_background_color}}" border_radius="{{border_radius}}"  class="{{class}}" id="{{id}}"]{{content}}[/ms_panel]',
	'popup_title' => __( 'Panel Shortcode', 'magee' )
);

/*-----------------------------------------------------------------------------------*/
/*	Section Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['section'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-alt',
	'params' => array(

		'background_color' => array(
			'std' => '',
			'type' => 'colorpicker',
			'label' => __( 'Background Color', 'magee' ),
			'desc' => __( 'Set background for section. Leave blank for transparent.', 'magee' ),
		),
		
		'background_image' => array(
			'std' => '',
			'type' => 'uploader',
			'label' => __( 'Background Image', 'magee' ),
			'desc' => __( 'Upload an image to display in the background.', 'magee' ),
		),
		'background_repeat' => array(
			'type' => 'select',
			'label' => __( 'Background Repeat', 'magee' ),
			'desc' =>__( 'Choose repeat style for the background image.', 'magee' ),
			'std' => '',
			'options' => array(
							  'repeat' => __( 'repeat', 'magee' ),
							  'repeat-x' => __( 'repeat-x', 'magee' ),
							  'repeat-y' => __( 'repeat-y', 'magee' ),
							  'no-repeat' => __( 'no-repeat', 'magee' ),
							  'inherit' => __( 'inherit', 'magee' )
							   )
		),
		
		'background_position' => array(
			'type' => 'select',
			'label' => __( 'Background Position', 'magee' ),
			'desc' => __( 'Choose the postion of the background image.', 'magee' ),
			'std' => '',
			'options' => array(
							  'top left' => __( 'top left', 'magee' ),
							  'top center' => __( 'top center', 'magee' ),
							  'top right' => __( 'top right', 'magee' ),
							  'center left' => __( 'center left', 'magee' ),
							  'center center' => __( 'center center', 'magee' ),
							  'center right' => __( 'center right', 'magee' ),
							  'bottom left' => __( 'bottom left', 'magee' ),
							  'bottom center' => __( 'bottom center', 'magee' ),
							  'bottom right' => __( 'bottom right', 'magee' )
							   )
		),
		'background_parallax' => array(
			'type' => 'select',
			'label' => __( 'Background Parallax', 'magee' ),
			'desc' => __( 'Choose how the background image scrolls and responds.', 'magee' ),
			'std' => 'no',
			'options' => $reverse_choices
		),
		'border_size' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Border Size', 'magee' ),
			'desc' =>__( 'In pixels (px), eg: 1px.', 'magee' ),
		),
		
		'border_color' => array(
			'std' => '',
			'type' => 'colorpicker',
			'label' => __( 'Border Color', 'magee' ),
			'desc' => __( 'Set border color for section.', 'magee' ),
		),
		'border_style' => array(
			'type' => 'select',
			'label' => __( 'Background Position', 'magee' ),
			'desc' => __( 'Select border style for section', 'magee' ),
			'std' => '',
			'options' => array(
							  'none' => __( 'None', 'magee' ),
							  'hidden' => __( 'Hidden', 'magee' ),
							  'dotted' => __( 'Dotted', 'magee' ),
							  'dashed' => __( 'Dashed', 'magee' ),
							  'solid' => __( 'Solid', 'magee' ),
							  'double' => __( 'Double', 'magee' ),
							  'groove' => __( 'Groove', 'magee' ),
							  'ridge' => __( 'Ridge', 'magee' ),
							  'inset' => __( 'Inset', 'magee' ),
							  'outset' => __( 'Outset', 'magee' ),
							  'initial' => __( 'Initial', 'magee' ),
							  'inherit' => __( 'Inherit', 'magee' ),
							 
							   )
		),
		
		'padding_top' => array(
			'std' => '10px',
			'type' => 'text',
			'label' => __( 'Padding Top', 'magee' ),
			'desc' =>  __( 'In pixels (px), eg: 1px.', 'magee' ),
		),
		'padding_bottom' => array(
			'std' => '10px',
			'type' => 'text',
			'label' => __( 'Padding Bottom', 'magee' ),
			'desc' => __( 'In pixels (px), eg: 1px.', 'magee' ),
		),
		'padding_left' => array(
			'std' => '10px',
			'type' => 'text',
			'label' => __( 'Padding Left', 'magee' ),
			'desc' => __( 'In pixels (px), eg: 1px.', 'magee' ),
		),
		'padding_right' => array(
			'std' => '10px',
			'type' => 'text',
			'label' => __( 'Padding Right', 'magee' ),
			'desc' => __( 'In pixels (px), eg: 1px.', 'magee' ),
		),
		'contents_in_container' => array(
			'type' => 'select',
			'label' => __( 'Contents in Container ?', 'magee' ),
			'desc' =>  __( 'Put the content in container.', 'magee' ),
			'std' => 'no',
			'options' => $reverse_choices
		),
		
		'content' => array(
			'std' => __('Section content.', 'magee'),
			'type' => 'textarea',
			'label' => __( 'Section Content', 'magee' ),
			'desc' => __( 'Insert content for section.', 'magee' ),
		),
		
		'top_separator' => array(
			'std' => 'yes',
			'type' => 'select',
			'label' => __( 'Top Separator', 'magee' ),
			'desc' => '',
			'options' => array(
				'' => __('none', 'magee'),
				'triangle' => __('triangle', 'magee'),
				'doublediagonal' => __('doublediagonal', 'magee'),
				'halfcircle' => __('halfcircle', 'magee'),
				'bigtriangle' => __('bigtriangle', 'magee'),
				'bighalfcircle' => __('bighalfcircle', 'magee'),
				'curl' => __('curl', 'magee'),
				'multitriangles' => __('multitriangles', 'magee'),
				'roundedsplit' => __('roundedsplit', 'magee'),
				'boxes' => __('boxes', 'magee'),
				'zigzag' => __('zigzag', 'magee'),
				'clouds' => __('clouds', 'magee'),
			)
		),
		'bottom_separator' => array(
			'std' => 'yes',
			'type' => 'select',
			'label' => __( 'Bottom Separator', 'magee' ),
			'desc' => '',
			'options' => array(
				'' => __('none', 'magee'),
				'triangle' => __('triangle', 'magee'),
				'halfcircle' => __('halfcircle', 'magee'),
				'bigtriangle' => __('bigtriangle', 'magee'),
				'bighalfcircle' => __('bighalfcircle', 'magee'),
				'curl' => __('curl', 'magee'),
				'multitriangles' => __('multitriangles', 'magee'),
				'roundedcorners' => __('roundedcorners', 'magee'),
				'foldedcorner' => __('foldedcorner', 'magee'),
				'boxes' => __('boxes', 'magee'),
				'zigzag' => __('zigzag', 'magee'),
				'stamp' => __('stamp', 'magee'),
			)
		),
		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'magee' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'magee')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'magee' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'magee')
		),		
	),
	'shortcode' => '[ms_section background_color="{{background_color}}" background_image="{{background_image}}" background_repeat="{{background_repeat}}" background_position="{{background_position}}" background_parallax="{{background_parallax}}" border_size="{{border_size}}" border_color="{{border_color}}" border_style="{{border_style}}" padding_top="{{padding_top}}" padding_bottom="{{padding_bottom}}" padding_left="{{padding_left}}" padding_right="{{padding_right}}" contents_in_container="{{contents_in_container}}" top_separator="{{top_separator}}" bottom_separator="{{bottom_separator}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_section]',
	'popup_title' => __( 'Section Shortcode', 'magee' )
);

