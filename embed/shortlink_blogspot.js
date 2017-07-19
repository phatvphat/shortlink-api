/**
	* Code by PvP Phát Nguyễn ^^ *
	* https://fb.me/pvp.phatnguyen *
**/


$(document).ready(function(){
	function detectMob(){
		if(navigator.userAgent.match(/Android/i)
			|| navigator.userAgent.match(/webOS/i)
			|| navigator.userAgent.match(/iPhone/i)
			|| navigator.userAgent.match(/iPad/i)
			|| navigator.userAgent.match(/iPod/i)
			|| navigator.userAgent.match(/BlackBerry/i)
			|| navigator.userAgent.match(/Windows Phone/i)
		){
			return true;
		}
		else{
			return false;
		}
	}
	// Shortlink
	function rand_shortlink(){
		var x = Math.floor((Math.random()*4));
	return x;
	}
	if(detectMob() == true){
		var pvp_arr_sl = ["adf","bc","adf","bc"];
	}else{
		var pvp_arr_sl = ["adf","shorte","bc","adhy"];
	}
	var pvp_arr = [], pvp_l = document.links;
	for(var i=0;i<pvp_l.length;i++) {
	//	arr.push(pvp_l[i].href.search("blogspot.com"));
		//if(pvp_l[i].href.search("blogspot.com")<0&&pvp_l[i].href.search("blogger.com")<0)
		if(pvp_l[i].href.search(/blogspot.com\/[0-9][0-9][0-9][0-9]\/[0-9][0-9]\//i)>=0&&pvp_l[i].href.search("blogger.com")<0)
		{
			y_rand = rand_shortlink();
			if(pvp_arr_sl[y_rand]=='adf')
			{
				pvp_l[i].setAttribute('href','http://adf.ly/'+adf_userid+'/'+pvp_l[i].href);
			}
			else if(pvp_arr_sl[y_rand]=='shorte')
			{
				pvp_l[i].setAttribute('href','http://sh.st/st/'+shorte_apitoken+'/'+pvp_l[i].href);
				
			}
			else if(pvp_arr_sl[y_rand]=='bc')
			{
				pvp_l[i].setAttribute('href','http://bc.vc/'+bc_userid+'/'+pvp_l[i].href);
				
			}
			else if(pvp_arr_sl[y_rand]=='adhy')
			{
				pvp_l[i].setAttribute('href','http://ah.pe/a/'+adhy_userid+'/'+pvp_l[i].href);
				
			}
			else
			{
				pvp_l[i].setAttribute('href','http://adf.ly/'+adf_userid+'/'+pvp_l[i].href);
			//	pvp_l[i].setAttribute('href',pvp_l[i].href);
			}
		}
	}
});
