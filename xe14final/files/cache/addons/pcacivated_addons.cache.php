<?php if(!defined("__ZBXE__")) exit(); $_m = Context::get('mid');  $_ml = unserialize(base64_decode("Tjs=")); if(file_exists("/home/cumg/public_html/xe14final/addons/autolink/autolink.addon.php") && (!is_array($_ml) || in_array($_m, $_ml))) { unset($addon_info); $addon_info = unserialize(base64_decode("")); $addon_path = "/home/cumg/public_html/xe14final/addons/autolink/"; @include("/home/cumg/public_html/xe14final/addons/autolink/autolink.addon.php"); } $_ml = unserialize(base64_decode("Tjs=")); if(file_exists("/home/cumg/public_html/xe14final/addons/counter/counter.addon.php") && (!is_array($_ml) || in_array($_m, $_ml))) { unset($addon_info); $addon_info = unserialize(base64_decode("")); $addon_path = "/home/cumg/public_html/xe14final/addons/counter/"; @include("/home/cumg/public_html/xe14final/addons/counter/counter.addon.php"); } $_ml = unserialize(base64_decode("Tjs=")); if(file_exists("/home/cumg/public_html/xe14final/addons/member_communication/member_communication.addon.php") && (!is_array($_ml) || in_array($_m, $_ml))) { unset($addon_info); $addon_info = unserialize(base64_decode("")); $addon_path = "/home/cumg/public_html/xe14final/addons/member_communication/"; @include("/home/cumg/public_html/xe14final/addons/member_communication/member_communication.addon.php"); } $_ml = unserialize(base64_decode("Tjs=")); if(file_exists("/home/cumg/public_html/xe14final/addons/member_extra_info/member_extra_info.addon.php") && (!is_array($_ml) || in_array($_m, $_ml))) { unset($addon_info); $addon_info = unserialize(base64_decode("")); $addon_path = "/home/cumg/public_html/xe14final/addons/member_extra_info/"; @include("/home/cumg/public_html/xe14final/addons/member_extra_info/member_extra_info.addon.php"); } $_ml = unserialize(base64_decode("Tjs=")); if(file_exists("/home/cumg/public_html/xe14final/addons/mobile/mobile.addon.php") && (!is_array($_ml) || in_array($_m, $_ml))) { unset($addon_info); $addon_info = unserialize(base64_decode("")); $addon_path = "/home/cumg/public_html/xe14final/addons/mobile/"; @include("/home/cumg/public_html/xe14final/addons/mobile/mobile.addon.php"); } $_ml = unserialize(base64_decode("Tjs=")); if(file_exists("/home/cumg/public_html/xe14final/addons/resize_image/resize_image.addon.php") && (!is_array($_ml) || in_array($_m, $_ml))) { unset($addon_info); $addon_info = unserialize(base64_decode("")); $addon_path = "/home/cumg/public_html/xe14final/addons/resize_image/"; @include("/home/cumg/public_html/xe14final/addons/resize_image/resize_image.addon.php"); } ?>