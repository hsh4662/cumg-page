function insert(form){ return legacy_filter('insert', form, 'board', 'procBoardInsertDocument', completeDocumentInserted, ['error','message','mid','document_srl','category_srl'], '', {}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["insert", {'nick_name': {required:true,maxlength:20},'password': {required:true},'email_address': {maxlength:250},'homepage': {maxlength:250},'title': {required:true,minlength:1,maxlength:250},'content': {required:true},'category_srl': {required:true}}]);
	
	v.cast('ADD_MESSAGE',['nick_name','닉네임']);
	v.cast('ADD_MESSAGE',['password','비밀번호']);
	v.cast('ADD_MESSAGE',['email_address','이메일 주소']);
	v.cast('ADD_MESSAGE',['homepage','홈페이지']);
	v.cast('ADD_MESSAGE',['title','제목']);
	v.cast('ADD_MESSAGE',['content','내용']);
	v.cast('ADD_MESSAGE',['category_srl','분류']);
	v.cast('ADD_MESSAGE',['isnull','%s을 입력해주세요.']);
	v.cast('ADD_MESSAGE',['outofrange','%s의 글자 수를 맞추어 주세요.']);
	v.cast('ADD_MESSAGE',['equalto','%s이 잘못되었습니다.']);
	v.cast('ADD_MESSAGE',['invalid_email','%s의 형식이 잘못되었습니다. (예: xe@xpressengine.com)']);
	v.cast('ADD_MESSAGE',['invalid_userid','%s의 형식이 잘못되었습니다.\n영문, 숫자와 _로 만드실 수 있으며, 첫 글자는 영문이어야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_user_id','%s의 형식이 잘못되었습니다.\n영문, 숫자와 _로 만드실 수 있으며, 첫 글자는 영문이어야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_homepage','%s의 형식이 잘못되었습니다. (예: http://www.xpressengine.com)']);
	v.cast('ADD_MESSAGE',['invalid_korean','%s의 형식이 잘못되었습니다. 한글로만 입력하셔야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_korean_number','%s의 형식이 잘못되었습니다. 한글과 숫자로만 입력하셔야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_alpha','%s의 형식이 잘못되었습니다. 영문으로만 입력하셔야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_alpha_number','%s의 형식이 잘못되었습니다. 영문과 숫자로만 입력하셔야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_number','%s의 형식이 잘못되었습니다. 숫자로만 입력하셔야 합니다.']);
})(jQuery);