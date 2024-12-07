function delete_document(form){ return legacy_filter('delete_document', form, 'board', 'procBoardDeleteDocument', completeDeleteDocument, ['error','message','mid','page'], '', {}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["delete_document", {'document_srl': {required:true}}]);
	
	v.cast('ADD_MESSAGE',['document_srl','문서번호']);
	v.cast('ADD_MESSAGE',['mid','모듈 이름']);
	v.cast('ADD_MESSAGE',['page','page']);
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