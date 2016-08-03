/**
	[OElove v3.x] (C)2012-2099 OEdev.Net Inc.
	This is NOT a freeware, use is subject to license terms
	$Id: artbox.js For artDialog 2013-07-24 OEdev $
*/
/*-----------------------Index Begin------------------------*/
/**
 * 弹出登录框
 * @param:: int $width 页面宽 px
 * @param:: int $height 页面高 px 
 * @param:: int $hidetitle 是否隐藏标题框
*/
function artbox_loginbox(width, height, hidetitle) {
	if (typeof(width) == 'undefined') {width = 620;}
	if (typeof(height) == 'undefined') {height = 320;}
	if (typeof(hidetitle) == 'undefined') {hidetitle = 1};
	var url = _ROOT_PATH + 'index.php?c=passport&a=jdlogin&r='+get_rndnum(6);
	$.dialog.open(url, {title: '会员登录', width: width, height: height});
	if (hidetitle == 1) {
		$(".aui_title").css("display", "none");
	}
}
/*-----------------------Index End------------------------*/

/*-----------------------User Begin----------------------*/
/**
 * 弹出登录框
 * @param:: int $id ID编号
 * @param:: int $width 页面宽 px
 * @param:: int $height 页面高 px 
 * @param:: int $hidetitle 是否隐藏标题框
*/
function artbox_edit_album(id, width, height, hidetitle) {
	if (typeof(width) == 'undefined') {width = 580;}
	if (typeof(height) == 'undefined') {height = 240;}
	if (typeof(hidetitle) == 'undefined') {hidetitle = 0};
	var url = _ROOT_PATH + 'usercp.php?c=album&a=edit&id='+id+'&halttype=jdbox&r='+get_rndnum(6);
	$.dialog.open(url, {title: '编辑相册', width: width, height: height, drag: false});
	if (hidetitle == 1) {
		$(".aui_title").css("display", "none");
	}
}

/**
 * 弹出送礼物窗口
 * @param:: int $touid 会员ID
 * @param:: int $width 页面宽 px
 * @param:: int $height 页面高 px 
 * @param:: int $hidetitle 是否隐藏标题框
*/
function artbox_sendgift(touid, width, height, hidetitle) {
	if (typeof(width) == 'undefined') {width = 730;}
	if (typeof(height) == 'undefined') {height = 480;}
	if (typeof(hidetitle) == 'undefined') {hidetitle = 0};
	var url = _ROOT_PATH + 'usercp.php?c=gift&a=send&touid='+touid+'&halttype=jdbox&r='+get_rndnum(6);
	$.dialog.open(url, {title: '赠送礼物', width: width, height: height, drag: false});
	if (hidetitle == 1) {
		$(".aui_title").css("display", "none");
	}
}


/**
 * 弹出打招呼窗口
 * @param:: int $touid 会员ID
 * @param:: int $width 页面宽 px
 * @param:: int $height 页面高 px 
 * @param:: int $hidetitle 是否隐藏标题框
*/
function artbox_hi(touid, width, height, hidetitle) {
	if (typeof(width) == 'undefined') {width = 620;}
	if (typeof(height) == 'undefined') {height = 400;}
	if (typeof(hidetitle) == 'undefined') {hidetitle = 0};
	var url = _ROOT_PATH + 'usercp.php?c=hi&a=hi&touid='+touid+'&halttype=jdbox&r='+get_rndnum(6);
	$.dialog.open(url, {title: '打招呼', width: width, height: height, drag: false});
	if (hidetitle == 1) {
		$(".aui_title").css("display", "none");
	}
}

/**
 * 弹出写信窗口
 * @param:: int $touid 会员ID
 * @param:: string $fromtype 来源类型
 * @param:: int $width 页面宽 px
 * @param:: int $height 页面高 px 
 * @param:: int $hidetitle 是否隐藏标题框
*/
function artbox_writemsg(touid, fromtype, width, height, hidetitle) {
	if (typeof(fromtype) == 'undefined') {fromtype = '';}
	if (typeof(width) == 'undefined') {width = 620;}
	if (typeof(height) == 'undefined') {height = 390;}
	if (typeof(hidetitle) == 'undefined') {hidetitle = 0};
	var url = _ROOT_PATH + 'usercp.php?c=message&a=write&touid='+touid+'&fromtype='+fromtype+'&halttype=jdbox&r='+get_rndnum(6);
	$.dialog.open(url, {title: '给会员写信件', width: width, height: height, drag: false});
	if (hidetitle == 1) {
		$(".aui_title").css("display", "none");
	}
}

/**
 * 弹出举报会员
 * @param:: int $touid 会员ID
 * @param:: int $width 页面宽 px
 * @param:: int $height 页面高 px 
 * @param:: int $hidetitle 是否隐藏标题框
*/
function artbox_complaint(uid, width, height, hidetitle) {
	if (typeof(width) == 'undefined') {width = 620;}
	if (typeof(height) == 'undefined') {height = 390;}
	if (typeof(hidetitle) == 'undefined') {hidetitle = 0};
	var url = _ROOT_PATH + 'usercp.php?c=complaint&uid='+uid+'&halttype=jdbox&r='+get_rndnum(6);
	$.dialog.open(url, {title: '投诉/举报会员', width: width, height: height, drag: false});
	if (hidetitle == 1) {
		$(".aui_title").css("display", "none");
	}
}

/**
 * 弹出查看联系方式
 * @param:: int $uid 会员ID
 * @param:: int $width 页面宽 px
 * @param:: int $height 页面高 px 
 * @param:: int $hidetitle 是否隐藏标题框
*/
function artbox_viewcontact(uid, width, height, hidetitle) {
	if (typeof(width) == 'undefined') {width = 620;}
	if (typeof(height) == 'undefined') {height = 280;}
	if (typeof(hidetitle) == 'undefined') {hidetitle = 0};
	var url = _ROOT_PATH + 'usercp.php?c=home&a=viewcontact&uid='+uid+'&halttype=jdbox&r='+get_rndnum(6);
	$.dialog.open(url, {title: '查看会员联系方式', width: width, height: height, drag: false});
	if (hidetitle == 1) {
		$(".aui_title").css("display", "none");
	}
}

/*-----------------------User End------------------------*/