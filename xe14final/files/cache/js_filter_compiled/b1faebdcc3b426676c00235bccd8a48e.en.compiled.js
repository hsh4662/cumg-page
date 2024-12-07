function insert(form){ return legacy_filter('insert', form, 'board', 'procBoardInsertDocument', completeDocumentInserted, ['error','message','mid','document_srl','category_srl'], '', {}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["insert", {'nick_name': {required:true,maxlength:20},'password': {required:true},'email_address': {maxlength:250},'homepage': {maxlength:250},'title': {required:true,minlength:1,maxlength:250},'content': {required:true},'category_srl': {required:true}}]);
	
	v.cast('ADD_MESSAGE',['nick_name','Nick Name']);
	v.cast('ADD_MESSAGE',['password','Password']);
	v.cast('ADD_MESSAGE',['email_address','Email']);
	v.cast('ADD_MESSAGE',['homepage','Homepage']);
	v.cast('ADD_MESSAGE',['title','Subject']);
	v.cast('ADD_MESSAGE',['content','Content']);
	v.cast('ADD_MESSAGE',['category_srl','Category']);
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