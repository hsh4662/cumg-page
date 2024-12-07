function insert_category(form){ return legacy_filter('insert_category', form, 'document', 'procDocumentInsertCategory', completeInsertCategory, ['error','message','module_srl','category_srl','parent_srl','xml_file'], 'Are you sure to submit?', {'category_title':'title','category_color':'color'}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["insert_category", {'module_srl': {required:true},'category_srl': {required:true},'category_title': {required:true}}]);
	
	v.cast('ADD_MESSAGE',['module_srl','module_srl']);
	v.cast('ADD_MESSAGE',['category_srl','Category']);
	v.cast('ADD_MESSAGE',['category_title','Category']);
	v.cast('ADD_MESSAGE',['parent_srl','parent_srl']);
	v.cast('ADD_MESSAGE',['title','Subject']);
	v.cast('ADD_MESSAGE',['color','color']);
	v.cast('ADD_MESSAGE',['expand','Expand']);
	v.cast('ADD_MESSAGE',['group_srls','group_srls']);
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