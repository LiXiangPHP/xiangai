/*! Copyright (c) 2010 Brandon Aaron (http://brandonaaron.net)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Version 2.1.2
 */
(function($){$.fn.bgiframe=($.browser.msie&&/msie 6\.0/i.test(navigator.userAgent)?function(s){s=$.extend({top:"auto",left:"auto",width:"auto",height:"auto",opacity:true,src:"javascript:false;"},s);var html='<iframe class="bgiframe"frameborder="0"tabindex="-1"src="'+s.src+'"'+'style="display:block;position:absolute;z-index:-1;'+(s.opacity!==false?"filter:Alpha(Opacity='0');":"")+"top:"+(s.top=="auto"?"expression(((parseInt(this.parentNode.currentStyle.borderTopWidth)||0)*-1)+'px')":prop(s.top))+";"+"left:"+(s.left=="auto"?"expression(((parseInt(this.parentNode.currentStyle.borderLeftWidth)||0)*-1)+'px')":prop(s.left))+";"+"width:"+(s.width=="auto"?"expression(this.parentNode.offsetWidth+'px')":prop(s.width))+";"+"height:"+(s.height=="auto"?"expression(this.parentNode.offsetHeight+'px')":prop(s.height))+";"+'"/>';return this.each(function(){if($(this).children("iframe.bgiframe").length===0){this.insertBefore(document.createElement(html),this.firstChild)}})}:function(){return this});$.fn.bgIframe=$.fn.bgiframe;function prop(n){return n&&n.constructor===Number?n+"px":n}})(jQuery);

/**************************************jquery-cookie*********************************************/
/*!
 * jQuery Cookie Plugin
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2011, Klaus Hartl
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.opensource.org/licenses/GPL-2.0
 */
(function($){$.cookie=function(key,value,options){if(arguments.length>1&&(!/Object/.test(Object.prototype.toString.call(value))||value===null||value===undefined)){options=$.extend({},options);if(value===null||value===undefined){options.expires=-1;}
if(typeof options.expires==='number'){var days=options.expires,t=options.expires=new Date();t.setDate(t.getDate()+days);}
value=String(value);return(document.cookie=[encodeURIComponent(key),'=',options.raw?value:encodeURIComponent(value),options.expires?'; expires='+options.expires.toUTCString():'',options.path?'; path='+options.path:'',options.domain?'; domain='+options.domain:'',options.secure?'; secure':''].join(''));}
options=value||{};var decode=options.raw?function(s){return s;}:decodeURIComponent;var pairs=document.cookie.split('; ');for(var i=0,pair;pair=pairs[i]&&pairs[i].split('=');i++){if(decode(pair[0])===key)return decode(pair[1]||'');}
return null;};})(jQuery);

/**************************************CookieHelp.js*********************************************/

function GetCookieIM(name){var arg=name+"=";var alen=arg.length;var clen=document.cookie.length;var i=0;while(i<clen){var j=i+alen;if(document.cookie.substring(i,j)==arg)
return getCookieValIM(j);i=document.cookie.indexOf(" ",i)+1;if(i==0)break;}
return"";}
function getCookieIMValue(name,key){var p=GetCookieIM(name);var ps=p.split("^~");if(p==null||ps==null){return"";}
for(var i=0;i<ps.length;i++){var cookieValue=ps[i];var temp=cookieValue.split("=");if(temp.length>=2){if(temp[0]==key){return temp[1];}}}
return"";}
function getCookieMemberid(){return getCookieIMValue("p","lh");}
function getCookieSelfHelp(){return getCookieIMValue("p","selfhelp");}
function getCookieCdeq(){return getCookieIMValue("p","cdeq");}
function getCookieEmail(){return getCookieIMValue("p","email");}
function getCookieSex(){return getCookieIMValue("p","sex");}
function getCookieNickName(){return getCookieIMValue("p","nickname");}
function getCookieAge(){return getCookieIMValue("p","age");}
function subCookieNickName(){var num=7;var j=0;var cookieName="";var str=getCookieNickName();if(str.length>num){var reg=/^[\u4E00-\u9FA5]+$/;for(var i=0;i<str.length;i++){var c=str.charAt(i);if(reg.test(c)){cookieName=cookieName+c;j=j+2;if(j>=num){break;}}else{cookieName=cookieName+c;j=j+1;if(j>=num){break;}}}
cookieName=cookieName+"...";}else{cookieName=str;}
return cookieName;}
function getCookieWorkCity(){return getCookieIMValue("p","workcity");}
function getLogininfo(){return getCookieIMValue("rmpwd","logininfo");}
function getLoginmode(){return getCookieIMValue("rmpwd","loginmode");}
function getMPwd(){return getCookieIMValue("rmpwd","pwd");}
function getCookieValIM(offset){try{var endstr=document.cookie.indexOf(";",offset);if(endstr==-1)
endstr=document.cookie.length;return decodeURIComponent(document.cookie.substring(offset,endstr));}catch(e){return"";}}
function getCookiePhotoname(){return getCookieIMValue("p","dp");}
function getMemberPhotoPath(){var memberid=getCookieMemberid();var pname=getCookiePhotoname();if(pname=="0"||pname=="")
return"@PATH_PHOTO@/images/personal/default1.gif";return"@PATH_PHOTO@/images/photo/"+(Math.floor(memberid/4000)+1)+"/"+memberid+"/"+pname;}
function isNewMember(){return getCookieIMValue("otherinfo","isnew");}
function getEmailFromCookie(){return getCookieIMValue("otherinfo","localEmail");}
function getPhoneFromCookie(){return getCookieIMValue("otherinfo","localPhone");}
function getMemberType(){return getCookieIMValue("otherinfo","mt");}

/**********************************************IM.js***********************************************************/
function openChat(mid,oid,encryptMsg,msgType){if(mid<=0||oid<0){return;}
if(mid==oid){alert("您不能跟自己聊天");return;}
var w=880;var h=600;var s=0;var target="chat_"+mid;var url='javascript:try{newChat('+oid+',true'+',"'+encryptMsg+'","'+msgType+'");}catch(e){location.href="http://album.zhenai.com/im/chat.jsps?objectid='+oid+'&encryptMsg='+encryptMsg+'&msgType='+msgType+'";};';var left=(screen.width-w)/2;var top=(screen.height-h)/2;try{var r=window.open('http://album.zhenai.com/im/chat.jsps?objectid='+oid+'&encryptMsg='+encryptMsg+'&msgType='+msgType,target,'width='+w+',height='+h+',top='+top+',left='+left+',scrollbars=0,resizable=0,status='+s);r.focus();return r;}catch(e){}}


/**********************************************IM.js***********************************************************/



