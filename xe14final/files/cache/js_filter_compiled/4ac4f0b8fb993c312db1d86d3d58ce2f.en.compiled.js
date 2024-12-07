function copy_module(form){ return legacy_filter('copy_module', form, 'module', 'procModuleAdminCopyModule', completeCopyModule, ['error','message'], '', {}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["copy_module", {'module_srl': {required:true},'mid_1': {rule:'alpha_number'},'mid_2': {rule:'alpha_number'},'mid_3': {rule:'alpha_number'},'mid_4': {rule:'alpha_number'},'mid_5': {rule:'alpha_number'},'mid_6': {rule:'alpha_number'},'mid_7': {rule:'alpha_number'},'mid_8': {rule:'alpha_number'},'mid_9': {rule:'alpha_number'},'mid_10': {rule:'alpha_number'}}]);
	
	v.cast('ADD_MESSAGE',['module_srl','module_srl']);
	v.cast('ADD_MESSAGE',['mid_1','mid_1']);
	v.cast('ADD_MESSAGE',['mid_2','mid_2']);
	v.cast('ADD_MESSAGE',['mid_3','mid_3']);
	v.cast('ADD_MESSAGE',['mid_4','mid_4']);
	v.cast('ADD_MESSAGE',['mid_5','mid_5']);
	v.cast('ADD_MESSAGE',['mid_6','mid_6']);
	v.cast('ADD_MESSAGE',['mid_7','mid_7']);
	v.cast('ADD_MESSAGE',['mid_8','mid_8']);
	v.cast('ADD_MESSAGE',['mid_9','mid_9']);
	v.cast('ADD_MESSAGE',['mid_10','mid_10']);
	v.cast('ADD_MESSAGE',['isnull','Please input a value for %s']);
	v.cast('ADD_MESSAGE',['outofrange','Please align the text length of %s']);
	v.cast('ADD_MESSAGE',['equalto','The value of %s is invalid']);
	v.cast('ADD_MESSAGE',['invalid_email','The format of %s is invalid. ex) developers@xpressengine.com']);
	v.cast('ADD_MESSAGE',['invalid_userid','The format of %s is invalid.\nAll values should consist of alphabets, numbers or underscore(_) and the first letter should be alphabet']);
	v.cast('ADD_MESSAGE',['invalid_user_id','The format of %s is invalid.\nAll values should consist of alphabets, numbers or underscore(_) and the first letter should be alphabet']);
	v.cast('ADD_MESSAGE',['invalid_homepage','The format of %s is invalid. ex) http://xpressengine.com/']);
	v.cast('ADD_MESSAGE',['invalid_korean','The format of %s is invalid. Please input Korean only']);
	v.cast('ADD_MESSAGE',['invalid_korean_number','The format of %s is invalid. Please input Korean or numbers']);
	v.cast('ADD_MESSAGE',['invalid_alpha','The format of %s is invalid. Please input alphabets only']);
	v.cast('ADD_MESSAGE',['invalid_alpha_number','The format of %s is invalid. Please input alphabets or numbers']);
	v.cast('ADD_MESSAGE',['invalid_number','The format of %s is invalid. Please input numbers only']);
})(jQuery);