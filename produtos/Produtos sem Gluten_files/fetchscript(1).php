/** 
* Main CSS file for the "default" theme for VirtueMart
* @copyright 2006-2008 soeren
* @license GNU/GPL
*
*/

/* General Shop Styles here please */
.addtocart_form {
	width: 100%;
	display: inline;
	white-space: nowrap;
}
/* The heading, the category description*/
.jv-vmPageHeader {
	float: left;
	width: 100%;
	padding-top: 10px;
}
/* The quantity box beneath the "add to cart" button  */
.quantity_box {	
	vertical-align: middle;
	font-weight: bold;
	margin-right: 5px;
}

.quantity_box_button {
	width: 9px;
	vertical-align: middle;
	height: 9px;
	background-repeat: no-repeat;
	background-position: center;
	border: none;
	background-color: transparent;
	padding: 0;
}

.quantity_box_button_down {
	background-image: url( "themes/jv-shop/images/down_small.gif" );
}

.quantity_box_button_up {
	background-image: url( "themes/jv-shop/images/up_small.gif" );
	clear: both;
}

.continue_link, .checkout_link {
	padding: 2px 0px 2px 30px;
	vertical-align: middle;
	font-weight: bold;
	font-size: 1.4em;
	width: 40%;
}

.checkout_link,
.checkout_link:hover {
	padding: 2px 30px 2px 0;
	margin-left: 80px;
	background: url( "themes/jv-shop/images/forward.png" ) no-repeat right center;
}

.continue_link,
.continue_link:hover {
	background: url( "themes/jv-shop/images/back.png" ) no-repeat left center;
}

.next_page,
.next_page:hover {
	background: url( "themes/jv-shop/images/next.png" ) no-repeat right;
	padding-right: 30px;
	line-height: 20px;
	float: right;
	width: auto;
	font-weight: bold; 
}

.previous_page,
.previous_page:hover {
	background: url( "themes/jv-shop/images/previous.png" ) no-repeat left;
	padding-left: 30px;
	line-height: 20px;
	float: left;
	width: auto;
	font-weight: bold;
}

/* This is the text box informing customers about your returns policy */
.legalinfo {
	background: #F7F7F7;
	border: 1px solid #E6E6E6;
	margin: 10px;
	padding: 0px 0px 10px 10px;
}

div.pathway {
	margin-bottom: 1em;
}

div.pathway img {
	padding: 0 2px;
}

/* The PDF, Email and Print buttons */
div.buttons_heading {
	float: right;
	padding-left: 20px;
}

div.buttons_heading img {
	margin-left: 5px;
}

.productPrice {
	font-weight: bold;
	white-space: nowrap;
}

.product-Old-Price {
	color: #CC0000;
	text-decoration: line-through;
}

/** BROWSE PRODUCTS STYLES **/
.browseProductContainer {
	position: relative;
	padding:10px;
}

.browseProductTitle {
	font-weight: bold;
	padding: 0;
	margin: 0 0 10px;
	width: 70%;
}

.browseProductImageContainer {
	float: right;
}

.browseProductDetailsContainer {
	float: left;
	width: 70%;
}

.browseProductDescription {
	margin-top: 60px;
	width: 70%;
}

.browsePriceContainer {
	font-size: 125%;
	float: left;
	line-height: 40px;
	padding: 0 20px;
	background: #E6E6E6;
	border: 1px solid #E6E6E6;
}

.browseRatingContainer {
	white-space: nowrap;
	float: left;
	height: 40px;
	padding: 0 20px;
	border: 1px solid #E6E6E6;
}

.browseAddToCartContainer {
	margin-top: 15px;
	width: 100%;
	display: block;
}

.browseAddToCartContainer .addtocart_button {
	margin: 0 0 0 5px;
}

.browseRatingContainer img {
	vertical-align: baseline;
}
/* Browse_2 styles */
.jv_product_wrap {
	width: 100%;
	margin: 0;
	padding: 0;
}
.jv-divproduct {
}
.jv-divproduct div {
	background: none;
}
.jv-ProductContainer {
	width: 100%;
	padding: 10px 0 25px 0;
	position: relative;
	/*background: url( "themes/jv-shop/images/dot-h.gif" ) repeat-x top;*/
	margin-top: 10px;
}

.jv-ProductTitle {
	font-weight: bold;
	padding: 0;
	margin: 0 0 10px;
}
.jv-ProductTitle a {
	font-size:110%;
	font-weight:bold;
}
.jv-ProductImageContainer {
	float: left;
	width: 40%;
	text-align: center;
}

.jv-ProductDetailsContainer {
	float: left;
	width: 70%;
}

.jv-ProductDescription {
	float: left;
	width: 55%;
}
.jv-ContainPriceRating {
	width: 100%;
	clear: both;
	padding-top: 5px;
	overflow: hidden;
}
.jv-PriceContainer {
	font-size: 125%;
	float: left;
	line-height: 40px;
	padding: 0 30px;
	/*border: 1px solid #E6E6E6;
	border-right: none !important;*/
}

.jv-RatingContainer {
	white-space: nowrap;
	float: left;
	height: 40px;
	padding: 0 10px;
	/*border: 1px solid #E6E6E6;*/
}

.jv-AddToCartContainer {
	margin-top: 5px;
	width: 100%;
	display: inline-block;
	text-align: center;
}

.jv-AddToCartContainer .addtocart_button {
	margin: 0 0 0 5px;
}

.jv-RatingContainer img {
	vertical-align: baseline;
}

/** Flypage Styles **/
.jv-detail-img {
	padding: 10px 0;
}
.jv-detail-imgfull {
	text-align: center;
	padding: 5px 0;
}
.jv-detail-imgadd {
	padding: 10px;
	background: #292929;
}
.jv-detail-padding h3 {
	font-size: 26px;
}
.jv-relatepro {
	width: 100%;
	overflow: hidden;
	clear: both;
}
.thumbnailListContainer {
	text-align: center;
	width: 200px;
	height: 200px;
	overflow: auto;
}

/*
General Form Styling
*/
.formLabel {
	float:left;
	width:30%;
	text-align:right;
	font-weight: bold;
	margin: 2px;
	white-space: nowrap;
	clear: left;
	vertical-align: middle;
	margin-top: 8px;
}

#agreed_div {
	white-space: normal;
}

.formField {
	float:left;
	width:60%;
	margin: 2px;
	vertical-align: middle;
	margin-top: 8px;
	
}
.missing {
	color: #CC0000;
	font-weight:bold;
}

/**
* Administration Styles
*/
.adminListHeader {
	float:left; height: 48px; background-repeat: no-repeat;
	text-align: left; font-size: 18px; font-weight: bold;
	padding-left: 80px;	
}

.labelcell {
	margin-left: auto;
	font-weight: bold;
	vertical-align: top;
	width: 30%;
}
table.adminform td.labelcell {
	text-align: right;
}
.iconcell {
	vertical-align: top;
	width: 5%;
}

.shop_error, .shop_warning, .shop_info, .shop_debug, .shop_critical, .shop_tip {
	background-color: #f2f4f1;
	background-position: 10px 8px;
	background-repeat: no-repeat;
	border: 1px solid #c0c5bf;
	font-weight: bold;
	margin-bottom: 10px;
	padding: 15px 15px 15px 50px;
}

.shop_warning{padding:25px 15px 27px 70px;}

.shop_error {
	background-image: url( "themes/jv-shop/images/error.gif" );
}

.shop_warning {
	background-image: url( "themes/jv-shop/images/warning.png" );
}

.shop_info, .shop_tip {
  	background-image: url( "themes/jv-shop/images/info.png" );
}

.shop_debug {
	background-image: url( "themes/jv-shop/images/log_debug.png" );
}

.shop_critical {
	font-weight: bold;
	background-image: url( "themes/jv-shop/images/log_critical.png" );
}

/* Addtocart detail Styles*/
.vmCartContainer { /* Cart Container */
	width: auto;
	float: left;
	padding: 5px 10px;
}

.vmCartContainer .addtocart_button { /* Cart Container */
}

.vmCartChildHeading { /* Header for the cart */
	font-size: 14px;
	font-weight: bold;
	padding-bottom: 3px;
	text-align: left;
}

.vmCartChild { /* Container for the Child Product */
	vertical-align: middle;
	border: 1px solid #E6E6E6;
	padding-left: 2px;
	padding-right: 2px;
	margin-bottom: 2px;
	float:left;	
}

.vmChildDetail { /* Child Detail, description , attributes ,price, quantity etc */
	vertical-align: middle;
	margin-top: 6px;
}

.vmCartChildElement { /* Individual element styling */
	width: 100%;
	vertical-align: middle ;
	height: 25px;
	text-align: left;
	
}

.vmCartAttributes { /* Attributes Div*/
	margin-top:8px;
	width:100%;
}

.vmAttribChildDetail {  /* Product Attributes Styling */
}
	

.vmMultiple {
	height:35px;
}



.vmChildType { /* Product type div*/

width: 100%;
}

.vmClearDetail { /*Clear the divs afer child types*/
	clear: both;
}

.vmClearAttribs { /*Clear the divs before the attributes*/
	clear:both;
}
.vmRowOne { /* Odd Row One styling */
	background: lightgray;	
}

.vmRowTwo { /* Even Row Styling */
	background: white;
}

/* Link Details for link to child*/
.vmChildDetail a, .vmChildDetail a:link {
  font-size        : 11px;
  color            : #666666;
  text-decoration  : none;
  font-weight      : bold;
}
.vmChildDetail a:hover {
  font-size        : 11px;
  color            : #333333;
  text-decoration  : none;
  font-weight      : bold;
}
/* Styling for the form elements to enable correct Line Up  */
.inputboxquantity {
	margin-top: 3px;
	vertical-align: middle;
}
.vmCartContainer .inputboxquantity {
	margin:0;
}
.availabilityHeader {
	text-decoration:underline;
	font-weight:bold;
}
.inputboxattrib {
	float: left;
	margin-top: 0px;
	vertical-align: middle;
	margin-bottom: 2px;
}

.quantitycheckbox {
	margin-top: 6px;
	vertical-align: middle;
}	

/**
* Addtocart detail Styles for placing attributes beside product_types
*/
.vmCartContainer_2up { /* Cart Container */
	width: 100%;
	float: left;
	background: #F7F7F7;
	border: 1px solid #E6E6E6;
	padding: 3px;
}

.vmCartChildHeading_2up { /* Header for the cart */
	font-size: 14px;
	font-weight: bold;
	padding-bottom: 3px;
	text-align: left;
}

.vmCartChild_2up { /* Container for the Child Product */
	vertical-align: middle;
	border: 1px solid #E6E6E6;
	padding-left: 2px;
	padding-right: 2px;
	
	margin-bottom: 2px;
	float:left;	
}

.vmChildDetail_2up { /* Child Detail, description , attributes ,price, quantity etc */
	vertical-align: middle;
	margin-top: 6px;
}

.vmCartChildElement_2up { /* Individual element styling */
	width: 100%;
	vertical-align: middle ;
	height: 25px;
	text-align: left;
	
}

.vmCartAttributes_2up { /* Attributes Div*/
	float: left;
	padding: 0px 5px 5px 5px;
	margin: 0px 5px 5px 5px;
	width:50%;
}

.vmAttribChildDetail_2up {  /* Product Attributes Styling */
	
}
	
.vmMultiple {
	height:35px;
}

.vmChildType_2up { /* Product type div*/
	background: F7F7F7;
	padding: 0px 5px 5px 5px;
	margin: 0px 5px 5px 5px;
	float: left;
	width: 40%;
	border: 1px solid #E6E6E6;
}

.vmClearDetail_2up { /*Clear the divs afer child types*/
}

.vmClearAttribs_2up { /*Clear the divs before the attributes*/
	clear:both;
}
.vmRowOne_2up { /* Odd Row One styling */
	background: lightgray;	
}

.vmRowTwo_2up { /* Even Row Styling */
	background: white;
}

/* Link Details for link to child*/
.vmChildDetail_2up a, .vmChildDetail_2up a:link {
  font-size        : 11px;
  color            : #666666;
  text-decoration  : none;
  font-weight      : bold;
}
.vmChildDetail_2up a:hover {
  font-size        : 11px;
  color            : #333333;
  text-decoration  : none;
  font-weight      : bold;
}

.vmCartModuleList  {
  cursor : pointer;
  font-size        : 11px;
  color            : #666666;
  text-decoration  : none;
  font-weight      : bold;
}

.vmCartModuleList:hover {
  font-size        : 11px;
  color            : #333333;
  text-decoration  : none;
  font-weight      : bold;
}
.vmquote {
	margin: 4px;
	border: 1px solid #E6E6E6;
	background-color: #F7F7F7;
	padding: 10px;
	font-size: 12px;
	color: #00A9DD;
}
.editable {
	background: #3c3c3c;
	cursor: pointer;
}
ul.pagination li {
	padding: 2px 1px;
	display: inline;
	background: none;
}

.clr { clear: both; overflow:hidden; }

a.button:hover, a.button:active, a.button:focus {
	color: #FFFFFF;
	text-decoration: none;
}

/* PMis */
#vmMainPage H4, #vmMainPage H3 {
	margin: 0;
	font-size: 150%;
}

.vm-product-img {
	text-align: center;
	padding-top: 10px;
}

.vm-product-img a:hover, .vm-product-img a:focus, .vm-product-img a:active {
	text-decoration: none;
}

.vmCouponField {
	padding: 10px;
	border-top: 1px solid #3b3d3f;
}

.vmCouponField input {
}
.vmRecent {
	margin: 15px 0 0 0;
}

input.addtocart_button,
input.addtocart_button_module {
	margin: 0;
	width:96px;
	border:0 none;
	height: 23px;
	cursor: pointer;
	background: url( "themes/jv-shop/images/btn-addtocard.png" ) no-repeat bottom left;
}
input.button:hover,
input.addtocart_button:hover,
input.addtocart_button_module:hover {
}
.jv-head-cat{margin-bottom:10px;}
form.oder-by{clear:both; margin-bottom:10px; text-align:right;}
.jv-product-wrap{overflow:hidden;}
.jv-divproduct{overflow:hidden; margin-bottom:10px;}

#vmMainPage .browseProductContainer h3.browseProductTitle{ margin-bottom:10px;}
#vmMainPage ul.pagination{}
#vmMainPage ul.pagination li{
	padding: 0px 0px 0px 9px;
	display:inline-block;
}
#vmMainPage ul.pagination li span{
	display: inline-block;
	color: #2c2d32;
	padding: 5px 9px 5px 0px;
	display: inline-block;
}

.jv-addavai{margin:10px 0px;}

.cart-title{margin-bottom:10px;}
.link-continue-checkout{width:100%; float:left; margin-top:10px; text-align:center;}
.wrap-basket table{margin-top:5px;}
.wrap-basket table tr.sectiontableheader th{background:#dde2dc; border-bottom:1px solid #c0c5bf}
.wrap-basket table tr td input.inputbox{float:left; margin:2px 5px 0px 0px; height:19px;}
.vm-total-pro strong{float:left; margin-right:5px;}
.rtl .vm-total-pro{float:right;}
a.buttonask{margin:5px 0px; display:table;}.cbOverlay {
	background-color: #000;
}

.cbContainer {
	padding:5px;
	background-color:white;
	border: 2px solid gray;
}
.cbBox h3 {
	font-size:1.4em;
	margin-top:0px;
	padding-top: 3px;
	vertical-align: middle;
	text-align:center;
	background-color:#ccc;
	background-image: url( "js/mootools/header-background.png" );
}
.cbBox p {
	margin:3px;
}
.cbBox, .cbButtons {
	text-align:center;
}
.cbButton {
	margin: 3px;
}
.cbCloseButton {
	background: url( "js/mootools/close.gif" ) no-repeat;
	width: 16px; height: 16px;
	position:absolute;
	top: 9px;
	right:5px;
	cursor: pointer;
}/* SLIMBOX */

#lbOverlay {
	position: fixed;
	z-index: 9999;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background-color: #000;
	cursor: pointer;
}

#lbCenter, #lbBottomContainer {
	position: absolute;
	z-index: 9999;
	overflow: hidden;
	background-color: #fff;
}

.lbLoading {
	background: #fff url( "js/slimbox/css/loading.gif" ) no-repeat center;
}

#lbImage {
	position: absolute;
	left: 0;
	top: 0;
	border: 10px solid #fff;
	background-repeat: no-repeat;
}

#lbPrevLink, #lbNextLink {
	display: block;
	position: absolute;
	top: 0;
	width: 50%;
	outline: none;
}

#lbPrevLink {
	left: 0;
}

#lbPrevLink:hover {
	background: transparent url( "js/slimbox/css/prevlabel.gif" ) no-repeat 0 15%;
}

#lbNextLink {
	right: 0;
}

#lbNextLink:hover {
	background: transparent url( "js/slimbox/css/nextlabel.gif" ) no-repeat 100% 15%;
}

#lbBottom {
	font-family: Verdana, Arial, Geneva, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
	line-height: 1.4em;
	text-align: left;
	border: 10px solid #fff;
	border-top-style: none;
}

#lbCloseLink {
	display: block;
	float: right;
	width: 66px;
	height: 22px;
	background: transparent url( "js/slimbox/css/closelabel.gif" ) no-repeat center;
	margin: 5px 0;
	outline: none;
}

#lbCaption, #lbNumber {
	margin-right: 71px;
}

#lbCaption {
	font-weight: bold;
}
