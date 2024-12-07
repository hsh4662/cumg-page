function delete_comment(form){ return legacy_filter('delete_comment', form, 'board', 'procBoardDeleteComment', completeDeleteComment, ['error','message','mid','document_srl','page'], '', {}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["delete_comment", {'comment_srl': {required:true}}]);
	
	v.cast('ADD_MESSAGE',['comment_srl','comment_srl']);
	v.cast('ADD_MESSAGE',['mid','Module Name']);
	v.cast('ADD_MESSAGE',['page','page']);
	v.cast('ADD_MESSAGE',['document_srl','Doc. No.']);
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