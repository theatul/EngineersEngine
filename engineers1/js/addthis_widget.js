/* (c) 2008, 2009 Add This, LLC */
if(!window._ate){var _atd="www.addthis.com/",_atr="//s7.addthis.com/",_euc=encodeURIComponent,_duc=decodeURIComponent,_atu="undefined",_atc={dr:0,ver:250,loc:0,enote:"",cwait:500,tamp:0.2,samp:0.01,camp:1,vamp:1,addr:-1,addt:1,xfl:!!window.addthis_disable_flash,abf:!!window.addthis_do_ab};(function(){try{var l=window.location;if(l.protocol.indexOf("file")===0){_atr="http:"+_atr;}if(l.hostname.indexOf("localhost")!=-1){_atc.loc=1;}}catch(e){}var ua=navigator.userAgent.toLowerCase(),d=document,w=window,wa=w.addEventListener,we=w.attachEvent,dl=d.location,b={win:/windows/.test(ua),chr:/chrome/.test(ua),iph:/iphone/.test(ua),saf:/safari/.test(ua),web:/webkit/.test(ua),opr:/opera/.test(ua),msi:(/msie/.test(ua))&&!(/opera/.test(ua)),ffx:/firefox/.test(ua),ff2:/firefox\/2/.test(ua),ie6:/msie 6.0/.test(ua),ie7:/msie 7.0/.test(ua),mod:-1},_9={isBound:false,isReady:false,readyList:window.addthis_onload||[],onReady:function(){if(!_9.isReady){_9.isReady=true;var l=_9.readyList;for(var fn=0;fn<l.length;fn++){l[fn].call(window);}_9.readyList=[];}},addLoad:function(_c){var _d=w.onload;if(typeof w.onload!="function"){w.onload=_c;}else{w.onload=function(){if(_d){_d();}_c();};}},bindReady:function(){if(r.isBound){return;}r.isBound=true;if(d.addEventListener&&!b.opr){d.addEventListener("DOMContentLoaded",r.onReady,false);}var _e=window.addthis_product;if(_e&&_e.indexOf("f")>-1){r.onReady();return;}if(b.msi&&window==top){(function(){if(r.isReady){return;}try{d.documentElement.doScroll("left");}catch(error){setTimeout(arguments.callee,0);return;}r.onReady();})();}if(b.opr){d.addEventListener("DOMContentLoaded",function(){if(r.isReady){return;}for(var i=0;i<d.styleSheets.length;i++){if(d.styleSheets[i].disabled){setTimeout(arguments.callee,0);return;}}r.onReady();},false);}if(b.saf){var _10;(function(){if(r.isReady){return;}if(d.readyState!="loaded"&&d.readyState!="complete"){setTimeout(arguments.callee,0);return;}if(_10===undefined){var _12=d.gn("link");for(var i=0;i<_12.length;i++){if(_12[i].getAttribute("rel")=="stylesheet"){_10++;}}var _14=d.gn("style");_10+=_14.length;}if(d.styleSheets.length!=_10){setTimeout(arguments.callee,0);return;}r.onReady();})();}r.addLoad(r.onReady);},append:function(fn,_16){r.bindReady();if(r.isReady){fn.call(window,[]);}else{r.readyList.push(function(){return fn.call(window,[]);});}}},r=_9,_17=function(o,fn,acc,cxt){if(!o){return acc;}if(o instanceof Array){for(var i=0,len=o.length,v=o[0];i<len;v=o[++i]){acc=fn.call(cxt||o,acc,v,i,o);}}else{for(var _1f in o){acc=fn.call(cxt||o,acc,o[_1f],_1f,o);}}return acc;},_20=Array.prototype.slice,_21=function(a){return _20.apply(a,_20.call(arguments,1));},_23=function(s){return s.replace(/(^\s+|\s+$)/g,"");},_25=function(o,del){return _17(o,function(acc,v,k){k=_23(k);if(k){acc.push(_euc(k)+"="+_euc(_23(v)));}return acc;},[]).join(del||"&");},_2b=function(q,del){return _17((q||"").split(del||"&"),function(acc,_2f){var kv=_2f.split("="),k=_23(_duc(kv[0])),v=_23(_duc(kv.slice(1).join("=")));if(k){acc[k]=v;}return acc;},{});},_33={vst:[],rev:"$Rev: 70749 $",bro:b,clck:1,show:1,dl:dl,camp:_atc.camp-Math.random(),samp:_atc.samp-Math.random(),vamp:_atc.vamp-Math.random(),tamp:_atc.tamp-Math.random(),ab:"-",scnt:1,seq:1,inst:1,wait:500,tmo:null,cvt:[],svt:[],sttm:new Date().getTime(),max:268435455,pix:"tev",sid:0,sub:!!window.at_sub,uid:null,oot:null,swf:"//bin.clearspring.com/at/v/1/button1.6.swf",evu:"//e1.clearspring.com/at/",spt:"static/r07/widget10.png",ifpp:null,com:function(m){if(window.parent&&window.postMessage){window.parent.postMessage(m,"*");}else{_33.ifm(m);}},ifwn:function(){var a=_33;try{a.rec(a.sifr.contentWindow.name);}catch(e){}},ifm:function(m){if(addthis_wpl){var a=(addthis_wpl.split("#"))[0];window.parent.location.href=a+"#at"+m;}return false;},hash:window.location.hash,ifp:function(){var a=_33,m=window.location.hash,p=0;if(m&&m.indexOf("#at")>-1){m=m.substr(3).split(";");for(var k in m){var v=m[k].length>3?m[k].substr(0,3):null;switch(v){case"ssh":p=1;a.ssh(m[k].substr(4));break;case"uid":p=1;a.asetup(m[k].substr(4));break;}}if(p){if(!a.hash.length||a.hash==""){a.hash="#";}window.location.hash=a.hash;}}if(a.gssh&&a.guid){clearInterval(a.ifpp);}},pmh:function(e){if(e.origin.slice(-12)==".addthis.com"){_33.rec(e.data);}},rec:function(s){if(!s){return;}var _3f=_2b(s),a=_33,i=a.sifr;if(_3f.ssh){a.ssh(_3f.ssh);}if(_3f.uid){a.asetup(_3f.uid);}if(i&&i.parentNode){i.parentNode.removeChild(i);a.sifr=null;}},ssh:function(ssh){_33.gssh=1;window.addthis_ssh=_duc(ssh);},mun:function(s){var mv=291;if(s){for(var i=0;i<s.length;i++){mv=(mv*(s.charCodeAt(i)+i)+3)&1048575;}}return(mv&16777215).toString(32);},ibt:function(){if(_33.bti){return _33.bti;}var _46=(window.addthis_product||"men").substr(0,3),_47=_46=="bkm"||_46=="fct"||_46=="fxe";if(_47){_33.bti=_47;}return _47;},off:function(){return Math.floor((new Date().getTime()-_33.sttm)/100).toString(16);},ran:function(){return Math.floor(Math.random()*4294967295).toString(36);},srd:function(){if(_33.dr){return"&pre="+_euc(_33.dr);}else{return"";}},cst:function(c){return"CXNID=2000001.521545608054043907"+(c||2)+"NXC";},imgz:[],hrr:function(_49){if(_49&&_49.urls&&_49.urls instanceof Array){for(var i=0;i<_49.urls.length;i++){var img=new Image();_33.imgz.push(img);img.src=_49.urls[i];}}},img:function(i,c){if(!window.at_sub&&!_atc.xtr){var a=_33,dr=a.dr,rev=((a.rev||"").split(" "));if(dr){dr=(dr.split("?")).shift();dr=(dr.split("http://")).pop();if(dr.length>25){dr=dr.substr(0,25);}}var img=new Image();a.imgz.push(img);img.src=_atr+"live/t00/"+i+".gif?"+(a.uid!==null?"uid="+a.uid+"&":"")+a.ran()+"&"+a.cst(c)+(a.pub()?"&pub="+a.pub():"")+(dr?"&dr="+_euc(dr):"")+(rev.length>1?"&rev="+rev[1]:"");}},cuid:function(){return(_33.sttm&_33.max).toString(16)+(Math.floor(Math.random()*_33.max)).toString(16);},ssid:function(){if(_33.sid===0){_33.sid=_33.cuid();}return _33.sid;},sev:function(id,_53){_33.pix="sev-"+(typeof(id)!=="number"?_euc(id):id);_33.svt.push(id+";"+_33.off());if(_53===1){_33.xmi(true);}else{_33.sxm(true);}},cev:function(k,v){_33.pix="cev-"+_euc(k);_33.cvt.push(_euc(k)+"="+_euc(v)+";"+_33.off());_33.sxm(true);},sxm:function(b){if(_33.tmo!==null){clearTimeout(_33.tmo);}if(b){_33.tmo=_33.sto("_ate.xmi(false)",_33.wait);}},sto:function(c,t){return setTimeout(c,t);},sta:function(){var a=_33;return"AT-"+(a.pub()?a.pub():"unknown")+"/-/"+a.ab+"/"+a.ssid()+"/"+(a.seq++)+(a.uid!==null?"/"+a.uid:"");},xred:function(){var w=window,a=_33,hp=0,dr=d.referer||d.referrer||"",du=dl?dl.href:null,fnd=0;if(a.camp>=0&&du&&dl&&dl.protocol&&(dr.indexOf(".com")>-1)&&(dl.protocol.indexOf("https")==-1)){if(dr&&dr.match(/ws\/results\/(Web|Images|Video|News)/)){fnd=1;}else{if(dr.indexOf(".com/search")>-1){var t=dr.split("?").pop().split("&");for(var i=0;i<t.length;i++){if(t[i].indexOf("q=")===0||t[i].indexOf("p=")===0||t[i].indexOf("query")===0||t[i].indexOf("qry")===0||t[i].indexOf("text")===0){fnd=1;break;}}}}if(!_atc.xtr&&!_atc.xck&&fnd&&a.mun(a.pub())!=="mu2r"){var o=d.ce("script");o.src="//cf.addthis.com/red/p.json?callback=_ate.hrr"+(a.pub()?"&pub="+a.pub():"")+(a.uid&&a.uid!=="anonymous"?"&uid="+_euc(a.uid):"")+"&url="+_euc(du)+"&ref="+_euc((d.referer||d.referrer));d.gn("head")[0].appendChild(o);}}},xld:function(){var a=_33;if(!a.xld_p){a.xld_p=1;if(a.samp>=0&&!a.sub){a.sev("20");a.cev("plo",Math.round(1/_atc.samp));if(a.dr){a.cev("pre",a.dr);}}a.xred();a.img(_atc.ver+"lo","2");}},xmi:function(_64){var a=_33,h=a.dl?a.dl.hostname:"";if(!a.uid){a.dck("X"+a.cuid());}else{a.coo();}if(a.cvt.length+a.svt.length>0){a.sxm(false);if(a.seq===1){a.cev("pin",a.inst);}if(_atc.xtr){return;}if(h.indexOf(".gov")>-1||h.indexOf(".mil")>-1){_atc.xck=1;}var urp=a.pix+"-"+a.ran()+".png?ev="+_33.sta()+"&se="+a.svt.join(",")+"&ce="+a.cvt.join(",")+(_atc.xck?"&xck=1":""),url=a.evu+urp;a.cvt=[];a.svt=[];if(_64){var d=document,i=d.ce("iframe");i.id="_atf";i.src=url;_33.opp(i.style);d.body.appendChild(i);i=d.getElementById("_atf");}else{var img=new Image();a.imgz.push(img);img.src=url;}}},loc:function(){return _atc.loc;},opp:function(st){st.width=st.height="1px";st.position="absolute";st.zIndex=100000;},pub:function(){return window.addthis_config&&addthis_config.username?_euc(addthis_config.username):(window.addthis_pub||"");},plo:[],lad:function(x){_33.plo.push(x);},lng:function(al){var d=document;if(al&&(al.toLowerCase()).indexOf("en")!==0&&!_33.pll){_33.pll=_33.ajs("static/r07/lang01.js");}},ajs:function(_70){var o=d.ce("script");o.src=_atr+_70;d.gn("head")[0].appendChild(o);return o;},jlo:function(){try{var d=document,a=_33,al=(window.addthis_language||addthis_config.ui_language||(a.bro.msi?navigator.userLanguage:navigator.language));a.lng(al);if(!a.pld){if(a.bro.ie6){var img=new Image();a.imgz.push(img);img.src=_atr+a.spt;if(window.addthis_feed){img=new Image();a.imgz.push(img);img.src=_atr+"static/r05/feed00.gif";}}a.pld=a.ajs("static/r07/menu38.js");}}catch(e){}},igv:function(u,t){if(!w.addthis_share){w.addthis_share={url:w.addthis_url||u,title:w.addthis_title||t};}if(!w.addthis_config){w.addthis_config={username:w.addthis_pub};}else{if(addthis_config.data_use_flash===false){_atc.xfl=1;}if(addthis_config.data_use_cookies===false){_atc.xck=1;}}},lod:function(arg){try{var w=window,a=_33,msi=a.bro.msi,hp=0,dr=d.referer||d.referrer||"",du=dl?dl.href:null,dh=dl.hostname,si=du?du.indexOf("sms_ss"):-1,f=((arg===1||w.addthis_load_flash)&&!_atc.abf),al=((w.addthis_language||(w.addthis_config?w.addthis_config.ui_language:null)||(a.bro.msi?navigator.userLanguage:navigator.language)).split("-")).shift(),lks=d.gn("link"),ifr,_85=_atr+"static/r07/sh09.html",_86,_87="_ate.ifwn()",ifr;if(!w.postMessage){var _88=d.gn("img");for(var i=0;i<_88.length;i++){if(_88[i].src.split("//").pop().indexOf(dh)==0){_86=_88[i].src;break;}}}if(!_atc.xic||(w.postMessage||a.bro.msi)){if(!msi){ifr=d.ce("iframe");}else{var div=d.ce("div");div.style.visibility="hidden";a.opp(div.style);d.body.insertBefore(div,d.body.firstChild);div.innerHTML="<iframe id=\"_atssh\" width=\"1\" height=\"1\" name=\"_atssh\" "+(!w.postMessage?"onload=\""+_87+"\" ":"")+">";ifr=d.getElementById("_atssh");}}for(var i=0;i<lks.length;i++){var l=lks[i];if(l.rel&&l.rel=="canonical"&&l.href){du=l.href;}}a.igv(du,d.title||"");a.gov();a.dr=dr;a.ab=(!al||al=="en")&&(a.bro.ffx||a.bro.msi)&&!a.ibt()?"ps-"+(window.addthis_ab!==undefined?addthis_ab:(a.tamp>0?Math.min(4,Math.floor(Math.random()*4+1)):0)):"~";var _8c=(a.swf&&!_atc.xfl&&!(a.loc())&&!_atc.abf&&(f||a.uid===null||(a.uid!=="anonymous"&&a.oot&&((new Date()).getTime()-a.oot>60480000))));_85+="#swfp="+(_8c&&msi?1:0);if(!msi&&_8c){var _8d=function(o,n,v){var c=d.ce("param");c.name=n;c.value=v;o.appendChild(c);},div=d.ce("div"),o=d.ce("object");o.id="atff";o.data=a.swf;o.width=o.height="1px";o.quality="high";o.type="application/x-shockwave-flash";_8d(o,"wmode","transparent");_8d(o,"allowScriptAccess","always");div.appendChild(o);d.body.insertBefore(div,d.body.firstChild);}if(dl.href.indexOf(_atr)==-1&&ifr){ifr.id="_atssh";a.opp(ifr.style);ifr.width=ifr.height=1;ifr.frameborder=ifr.style.border=0;ifr.style.top=ifr.style.left=0;if(w.postMessage){ifr.src=_85;if(msi){w.attachEvent("onmessage",a.pmh);}else{w.addEventListener("message",a.pmh,false);}ifr=d.body.appendChild(ifr);}else{if(false&&_86&&!_atc.xic&&a.bro.msi&&window==top){ifr.onload=_87;ifr.src=_86;ifr=d.body.appendChild(ifr);ifr.src=_85+"&wpl="+_euc(_86);}}a.sifr=ifr;}if(!f){if(_8c){a.uoo();if(a.bro.ie6||a.bro.ie7){a.sto("if (_ate.xld) _ate.xld()",5000);}else{a.sto("_ate.xld()",5000);}}else{a.guid=1;a.xld();}if(si>-1&&du.indexOf(_atd+"book")==-1){var sm=du.substr(si);sm=sm.split("&").shift().split("#").shift().split("=").pop();if(a.vamp>=0&&!a.sub&&sm.length){a.cev("plv",Math.round(1/_atc.vamp));a.cev("rsc",sm);}}}if(a.plo.length>0){a.jlo();}}catch(e){}},kck:function(k){var d=document;if(d.cookie){d.cookie=k+"= ; expires=Tue, 31 Mar 2009 05:47:11 UTC; path=/";}},rck:function(k){var d=document;if(d.cookie){var ck=d.cookie.split(";");for(var i=0;i<ck.length;i++){var c=ck[i],x=c.indexOf(k+"=");if(x>=0){return c.substring(x+(k.length+1));}}}return;},uoo:function(){_33.sck("_csoot",(new Date().getTime()));},coo:function(f){if(_33.uid=="anonymous"&&!_33.oot){_33.xck=1;_33.uoo();}},dck:function(c){_33.uid=c;_33.sck("_csuid",c);_33.coo();},gov:function(){var h=_33.dl?_33.dl.hostname:"";if(h.indexOf(".gov")>-1||h.indexOf(".mil")>-1){_atc.xck=1;_atc.xfl=1;}var p=_33.pub(),x=["usarmymedia","govdelivery"];for(i in x){if(p==x[i]){_atc.xck=1;_atc.xfl=1;break;}}},sck:function(u,v,s){_33.gov();if(!_atc.xck){d.cookie=u+"="+v+(!s?"; expires=Wed, 04 Oct 2028 03:19:53 GMT":"")+"; path=/";}},asetup:function(x){var a=_33;try{if(!a.guid){a.guid=1;if(x!==null&&x!==_atu){a.dck(x);}a.xld();}}catch(e){}return x;},ao:function(elt,_a8,_a9,_aa,_ab,_ac){_33.lad(["open",elt,_a8,_a9,_aa,_ab,_ac]);_33.jlo();return false;},ac:function(){},as:function(s,cf,sh){_33.lad(["send",s,cf,sh]);_33.jlo();}},a=_33;w._ate=a;w._adr=r;d.ce=d.createElement;d.gn=d.getElementsByTagName;r.bindReady();if(!_atc.ost){if(!w.addthis_conf){w.addthis_conf={};}for(var i in addthis_conf){_atc[i]=addthis_conf[i];}_atc.ost=1;}r.append(a.lod);if(d.cookie){var ck=d.cookie.split(";");for(var i=0;i<ck.length;i++){var c=ck[i],x=c.indexOf("_csuid="),y=c.indexOf("_csoot=");if(x>=0){_33.uid=c.substring(x+7);}else{if(y>=0){_33.oot=c.substring(y+7);}}}}try{var l=d.ce("link");l.rel="stylesheet";l.type="text/css";l.href=_atr+"static/r07/widget22.css";l.media="all";d.gn("head")[0].appendChild(l);}catch(e){}var ss=d.gn("script"),s=ss[ss.length-1],q=s.src.indexOf("#")>-1?s.src.replace(/^[^\#]+\#?/,""):s.src.replace(/^[^\?]+\??/,""),p=_2b(q);if(p.pub){w.addthis_pub=_duc(p.pub);}else{if(p.username){w.addthis_pub=_duc(p.username);}}if(w.addthis_pub&&w.addthis_config){w.addthis_config.username=w.addthis_pub;}if(p.domready){_atc.dr=1;}try{if(_atc.ver===120){var rc="atb"+w._ate.cuid();d.write("<span id=\""+rc+"\"></span>");w._ate.igv();w._ate.lad(["span",rc,addthis_share.url||"[url]",addthis_share.title||"[title]"]);}if(w.addthis_clickout){_33.lad(["cout"]);}}catch(e){}})();function addthis_open(elt,_bb,_bc,_bd,_be,_bf){if(typeof _be=="string"){_be=null;}return _ate.ao(elt,_bb,_bc,_bd,_be,_bf);}function addthis_close(){_ate.ac();}function addthis_sendto(s,cf,sh){_ate.as(s,cf,sh);return false;}if(_atc.dr){_adr.onReady();}}else{_ate.inst++;}if(_atc.abf){addthis_open(document.getElementById("ab"),"emailab",window.addthis_url||"[URL]",window.addthis_title||"[TITLE]");}if(!window.addthis||window.addthis.nodeType!==undefined){window.addthis={ost:0,cache:{},plo:[],links:[],ems:[],button:function(){this.plo.push({call:"button",args:arguments});},toolbox:function(){this.plo.push({call:"toolbox",args:arguments});},update:function(){this.plo.push({call:"update",args:arguments});}};}_adr.append((function(){if(!window.addthis.ost){var d=document,u=undefined,w=window,_4={},_5=w.addthis_config,_6=w.addthis_share,_7={},_8={},_9=d.gn("body").item(0),_a=function(o,n){if(n&&o!==n){for(var k in n){if(o[k]===u){o[k]=n[k];}}}},_e=function(o,n){var r={};for(var k in o){if(n[k]){r[k]=n[k];}else{r[k]=o[k];}}return r;},_13=window.addthis,_14=function(_15){return"mailto:?subject="+(_15.title?_15.title:"%20")+"&body="+(_15.title?_15.title+"%0D%0A":"")+(_15.url)+"%0D%0A%0D%0AShared via AddThis.com";},_16=function(_17,tag,_19,_1a,_1b){tag=tag.toUpperCase();var els=(_17==_9&&_13.cache[tag]?_13.cache[tag]:(_17||_9).getElementsByTagName(tag)),rv=[],i,o;if(_17==_9){_13.cache[tag]=els;}if(_1b){for(i=0;i<els.length;i++){o=els[i];if(o.className.indexOf(_19)>-1){rv.push(o);}}}else{_19=_19.replace(/\-/g,"\\-");var rx=new RegExp("(^|\\s)"+_19+(_1a?"\\w*":"")+"(\\s|$)");for(i=0;i<els.length;i++){o=els[i];if(rx.test(o.className)){rv.push(o);}}}return(rv);},_21={"aim":"AIM","kirtsy":"kIRTSY","linkagogo":"Link-a-Gogo","meneame":"Men&eacute;ame","misterwong":"Mister Wong","myaol":"myAOL","myspace":"MySpace","yahoobkm":"Y! Bookmarks","typepad":"TypePad","wordpress":"WordPress"},_22={email:"Email",print:"Print",favorites:"Save to Favorites",twitter:"Tweet This",digg:"Digg This"},_23={services_custom:1},_24={more:1,email:1},_25={email:1,print:1,more:1,favorites:1},_26=["username","services_custom","services_custom_name","services_custom_url","services_custom_title","services_exclude","services_compact","services_expanded","ui_click","ui_hide_embed","ui_delay","ui_hover_direction","ui_language","ui_offset_top","ui_offset_left","ui_header_color","ui_header_background","ui_use_embeddable_services_beta","ui_icons","ui_cobrand","data_use_flash","data_use_cookies","data_track_linkback"],_27=["url","title","swfurl","width","height","html","screenshot","author","templates","email_template","email_vars","description","content"],_28=d.getElementsByClassname||_16,_29=function(_2a,_2b){var sv=_2a.services instanceof Array?_2a.services[0]:_2a.services||"";return"http://"+_atd+"bookmark.php?v="+_atc.ver+"&pub="+_euc(_ate.pub())+"&s="+sv+(_2b.url?"&url="+_euc(_2b.url):"")+(_2b.title?"&title="+_euc(_2b.title):"");},_2d=function(_2e){if(typeof _2e=="string"){var c=_2e.substr(0,1);if(c=="#"){_2e=d.getElementById(_2e.substr(1));}else{if(c=="."){_2e=_28(_9,"*",_2e.substr(1));}else{}}}if(!(_2e instanceof Array)){_2e=[_2e];}return _2e;},_30=function(el,_32,_33,_34){var rv={};_33=_33||{};for(var i=0;i<_32.length;i++){if(_33[_32[i]]&&!_34){rv[_32[i]]=_33[_32[i]];}else{if(el){var p="addthis:"+_32[i],v=el.getAttribute?el.getAttribute(p)||el[p]:el[p];if(v){rv[_32[i]]=v;}else{if(_33[_32[i]]){rv[_32[i]]=_33[_32[i]];}}if(rv[_32[i]]==="true"){rv[_32[i]]=true;}else{if(rv[_32[i]]==="false"){rv[_32[i]]=false;}}}}if(rv[_32[i]]!==undefined&&_23[_32[i]]&&(typeof rv[_32[i]]=="string")){eval("var e = "+rv[_32[i]]);rv[_32[i]]=e;}}return rv;},_39=function(_3a){var acs=(_3a||{}).services_custom;if(!acs){return;}if(!(acs instanceof Array)){acs=[acs];}for(var i=0;i<acs.length;i++){var _3d=acs[i];if(_3d.name&&_3d.icon&&_3d.url){_3d.code=_3d.url=_3d.url.replace(/ /g,"");if(_3d.code.indexOf("http")===0){_3d.code=_3d.code.substr((_3d.code.indexOf("https")===0?8:7));}_3d.code=_3d.code.split("?").shift().split("/").shift().toLowerCase();_4[_3d.code]=_3d;}}},_3e=function(ss,_40){return _4[ss]||{};},_41=function(el,_43,_44,_45){var rv={conf:_43||{},share:_44||{}};rv.conf=_30(el,_26,_43,_45);rv.share=_30(el,_27,_44,_45);return rv;},_47=function(_48,_49,_4a){if(_48){_49=_49||{};_4a=_4a||{};var _4b=_49.conf||_5,_4c=_49.share||_6;var _4d=_4a.onmouseover,_4e=_4a.onmouseout,_4f=_4a.onclick,_50=_4a.internal,ss=_4a.singleservice;if(ss){_4b.product="tbx-"+_atc.ver;if(_4f===u){_4f=_24[ss]?function(el,_53,_54){var s=_e(_54,_8);return addthis_open(el,ss,s.url,s.title,_e(_53,_7),s);}:_25[ss]?function(el,_57,_58){var s=_e(_58,_8);return addthis_sendto(ss,_e(_57,_7),s);}:null;}}else{if(!_4a.noevents){if(!_4a.nohover&&(!_4b||!_4b.ui_click)){if(_4d===u){_4d=function(el,_5b,_5c){return addthis_open(el,"",null,null,_5b,_5c);};}if(_4e===u){_4e=function(el){return addthis_close();};}if(_4f===u){_4f=function(el,_5f,_60){return addthis_sendto("more",_5f,_60);};}}else{if(!_4b||!_4b.ui_click){if(_4f===u){_4f=function(el,_62,_63){return addthis_open(el,"more");};}}else{if(_4f===u){_4f=function(el,_65,_66){return addthis_open(el,"",null,null,_65,_66);};}}}}}_48=_2d(_48);for(var i=0;i<_48.length;i++){var o=_48[i],_69=_41(o,_4b,_4c,true)||{};_a(_69.conf,_5);_a(_69.share,_6);o.conf=_69.conf;o.share=_69.share;if(o.conf.ui_language){_ate.lng(o.conf.ui_language);}_39(o.conf);if(_4d){o.onmouseover=function(){return _4d(this,this.conf,this.share);};}if(_4e){o.onmouseout=function(){return _4e(this);};}if(_4f){o.onclick=function(){return _4f(this,this.conf,this.share);};}if(o.tagName.toLowerCase()=="a"){if(ss){var _6a=_3e(ss,o.conf);o.conf.product="tbx-"+_atc.ver;if(_6a&&_6a.code&&_6a.icon){if(o.firstChild&&o.firstChild.className.indexOf("at300bs")>-1){o.firstChild.style.background="url("+_6a.icon+") no-repeat top left";}}if((_ate.bro.ffx||_ate.bro.saf||_ate.bro.chr||_ate.bro.iph)&&!_25[ss]){var _6b=o.share.templates&&o.share.templates[ss]?o.share.templates[ss]:"",_6c=o.share.swfurl||addthis_share.swfurl,_6d=o.share.width||addthis_share.width,_6e=o.share.height||addthis_share.height,_6f=o.share.screenshot||addthis_share.screenshot;o.href="//"+_atd+"bookmark.php?pub="+_euc(addthis_config.username||o.conf.username||_ate.pub())+"&v="+_atc.ver+"&source=tbx-"+_atc.ver+"&s="+ss+"&url="+_euc(_69.share.url||addthis_share.url||"")+"&title="+_euc(_69.share.title||addthis_share.title||"")+"&content="+_euc(_69.share.content||addthis_share.content||"")+(_6b?"&template="+_euc(_6b):"")+(o.conf.data_track_linkback?"&sms_ss=1":"")+(_6c?"&swfurl="+_euc(_6c):"")+(_6d?"&width="+_euc(_6d):"")+(_6e?"&height="+_euc(_6e):"")+(_6f?"&screenshot="+_euc(_6f):"")+(_6a&&_6a.url?"&acn="+_euc(_6a.name)+"&acc="+_euc(_6a.code)+"&acu="+_euc(_6a.url):"");o.target="_blank";_13.links.push(o);}else{if(!_25[ss]){o.onclick=function(){return addthis_sendto.call(this,ss,_e(this.conf,_7),_e(this.share,_8));};}else{if(ss=="email"&&(o.conf.ui_use_mailto||_ate.bro.iph)){o.href=_14(o.share);o.onclick=null;_13.ems.push(o);}}}if(!o.title){o.title=_22[ss]?_22[ss]:"Send to "+(_21[ss]?_21[ss]:ss.substr(0,1).toUpperCase()+ss.substr(1));}}}if(_50){var app=_50;if(!o.hasChildNodes()){if(_50=="img"){var img=d.ce("img");img.width=125;img.height=16;img.border=0;img.alt="Share";img.src="//s7.addthis.com/static/btn/v2/lg-share-en.gif";app=img;}o.appendChild(app);}}}}},_72=_16(_9,"A","addthis_button_",true,true),_73=function(_74,_75,_76,_77){for(var i=0;i<_74.length;i++){var b=_74[i];if(b==null){continue;}if(_77!==false||!b.ost){var _75=_75||_5,_76=_76||_6,_7a=_41(b,_75,_76,true),hc=0,a="at300",c=b.className||"",s=c.match(/addthis_button_([\w\.]+)(?:\s|$)/),_7f=u,sv=s&&s.length?s[1]:0;if(sv){if(!b.childNodes.length){var sp=d.ce("span");b.appendChild(sp);sp.className=a+"bs at15t_"+sv;}else{if(b.childNodes.length==1){var cn=b.childNodes[0];if(cn.nodeType==3){var sp=d.ce("span"),tv=cn.nodeValue;b.insertBefore(sp,cn);sp.className=a+"bs at15t_"+sv;}}else{hc=1;}}if(sv==="compact"){if(!hc&&c.indexOf(a)==-1){b.className+=" "+a+"m";}}else{if(sv==="expanded"){if(!hc&&c.indexOf(a)==-1){b.className+=" "+a+"m";}_7f={nohover:true};}else{if(!hc&&c.indexOf(a)==-1){b.className+=" "+a+"b";}_7f={singleservice:sv};}}_47([b],_7a,_7f);b.ost=1;}}}};_13.update=function(_84,_85,_86){if(_84=="share"){if(!window.addthis_share){window.addthis_share={};}window.addthis_share[_85]=_86;_8[_85]=_86;for(var i in _13.links){var o=_13.links[i],rx=new RegExp("&"+_85+"=(.*)&"),ns="&"+_85+"="+_euc(_86)+"&";o.href=o.href.replace(rx,ns);if(o.href.indexOf(_85)==-1){o.href+=ns;}}for(var i in _13.ems){var o=_13.ems[i];o.href=_14(addthis_share);}}else{if(_84=="config"){if(!window.addthis_config){window.addthis_config={};}window.addthis_config[_85]=_86;_7[_85]=_86;}}};_13.button=function(_8b,_8c,_8d){_47(_8b,{conf:_8c,share:_8d},{internal:"img"});};_13.toolbox=function(_8e,_8f,_90){var _91=_2d(_8e);for(var i=0;i<_91.length;i++){var tb=_91[i],_94=_41(tb,_8f,_90),sp=d.ce("div"),c=tb.getElementsByTagName("a");if(c){_73(c,_94.conf,_94.share);}tb.appendChild(sp);sp.className="atclear";}};_13.ready=function(){if(this.ost){return;}this.ost=1;var a=".addthis_";_13.toolbox(a+"toolbox");_13.button(a+"button");_73(_72,null,null,false);for(var i=0;i<this.plo.length;i++){_13[this.plo[i].call].apply(this,this.plo[i].args);}};window.addthis=_13;window.addthis.ready();}}));