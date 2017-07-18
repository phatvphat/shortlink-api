/**
	* Code by PvP Phát Nguyễn ^^ *
	* https://fb.me/pvp.phatnguyen *
**/


$(document).ready(function(){
function rand_shortlink(){
    var x = Math.floor((Math.random()*2));
return x;
}
var pvp_arr_sl = ["adf","shorte"];
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
		else
		{
			pvp_l[i].setAttribute('href','http://sh.st/st/'+shorte_apitoken+'/'+pvp_l[i].href);
		//	pvp_l[i].setAttribute('href',pvp_l[i].href);
		}
	}
}
});
