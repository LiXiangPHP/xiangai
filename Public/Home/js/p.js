!function(){try{var o=(top.document?top:window);if(o.t){};}catch(e){var o=window;}if(!o.__zp_show_flag){o.__zp_show_flag= -1;o.__zp_sl_count=0;}window.__zp_send_track=function(C){if(C.constructor==String){C=C.split("\n");}if(!window.__zp_trackingList)window.__zp_trackingList=[];var G=window.__zp_trackingList;for(var i=0,j=C,k;k=j[i];i++){G.push(new Image());G[G.length-1].src=k.replace('[rnd]',Math.random());}};window.__zp_jsLoad=function(A){var r=document.createElement('script');if(typeof A.id!='undefined')r.id=A.id;r.setAttribute('type','text/javascript');r.setAttribute('src',A.url);r.setAttribute('charset','utf-8');document.getElementsByTagName('head')[0].appendChild(r);function m(){r.onreadystatechange=r.onload=null;};r.onreadystatechange=function(){if(this.readyState=='loaded'||this.readyState=='complete'){m();A.callback&&A.callback.apply(A);}};r.onload=function(){m();A.callback&&A.callback.apply(A);};r.onerror=function(){m();A.callback&&A.callback.apply(A);}};function n(e,f){var d=e.split('?'),g=(d[1]?d[1].split('&'):[]),c='';for(var i=0,j;j=g[i];i++){var k=j.substr(0,j.indexOf('='));if(k===f){c=j.replace(k+'=','');break;}}return c;};var B;for(var i=0,j=document.getElementsByTagName('script'),k;k=j[i];i++){if(k.id.indexOf('zp_script_')==0&&k.getAttribute('zp_type')=='1'){k.removeAttribute('zp_type','');B=k.src;break;}}if(!B)return;var F=B.match(/(http|https):\/\/([^\/]+)\//i)[0],D=B.match(/(http|https):\/\/([^\/]+)\//i)[1];if(!F)return;var v={w:n(B,'w'),h:n(B,'h'),adsid:n(B,'id'),src:F+'media/images/uma_sl_'+n(B,'w')+'x'+n(B,'h')+'_'+(o.__zp_sl_count%4+1)+'.jpg',delay:n(B,'delay'),sl:n(B,'sl')*1,cu:'http://www.chinauma.com',tw:1,pr:D};o.__zp_sl_count++;if(typeof o.__zp_cid_list=='undefined'){try{o.__zp_cid_list=[];}catch(e){}}function l(){if(o.__zp_show_flag== -1){o.__zp_show_flag=1;__zp_jsLoad({url:D+'://uma.gtags.net/s?id='+v.adsid+'&t=1&r='+encodeURIComponent(o.location)+'&cids='+(o.__zp_cid_list&&o.__zp_cid_list.join(','))+'&_='+Math.random(),callback:function(){o.__zp_show_flag= -1;}});return;}setTimeout(arguments.callee,30);};if(v.sl){__zp_jsLoad({url:F+'static/scripts/sl.js',callback:function(){if(window.__zp_sl_start)__zp_sl_start(v);l();}});}else{l();}}();