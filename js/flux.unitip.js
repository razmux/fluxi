var uniTipTag="*",uniTipClass="",uniTipX=0,uniTipY=15,offsetX=uniTipX,offsetY=uniTipY,elewidth=null,eleheight=null,tipid=null,tiptop=null,tipbot=null,tipcapin=null,tippointin=null,altText=!1,x=0,y=0,WinWidth=0,WinHeight=0,TipWidth=0,TipHeight=0,CapHeight=0,PointHeight=0;init=function(){for(var t=uniTipTag.split(","),i=0;i<t.length;i++){var e=document.getElementsByTagName(t[i]);if(e)for(var n=0;n<e.length;n++)if(""!=uniTipClass)for(var p=e[n].className,o=uniTipClass.split(","),d=0;d<o.length;d++)p.match(o[d])&&unitipize(e[n]);else unitipize(e[n])}},unitipize=function(t){var i=t,e=i.getAttribute("id");if(null==e||0!=e.indexOf("recaptcha_")){var n=i.getAttribute("title");n&&(i.onmouseover=function(){build(i,n)},i.onmouseout=function(){hide(i,n)})}},build=function(t,i){t.title&&(t.title=""),1==altText&&(t.alt="");var e=document.createElement("div");e.setAttribute("id","unitip"),document.body.appendChild(e);var n=document.createElement("div");n.setAttribute("id","unitippoint"),e.appendChild(n);var p=document.createElement("div");p.setAttribute("id","unitipmid"),e.appendChild(p);var o=document.createElement("div");if(o.setAttribute("id","unitipcap"),e.appendChild(o),tipid=document.getElementById("unitip"),tippoint=document.getElementById("unitippoint"),tipmid=document.getElementById("unitipmid"),tipcap=document.getElementById("unitipcap"),document.getElementById("unitipmid").innerHTML=i,tipid.style.display="block",elewidth=document.getElementById("unitipmid").offsetWidth,eleheight=document.getElementById("unitip").offsetHeight,WinWidth=document.body.offsetWidth,WinHeight=document.body.clientHeight<document.documentElement.clientHeight?document.body.clientHeight:document.documentElement.clientHeight,CapHeight=document.getElementById("unitipcap").offsetHeight,PointHeight=document.getElementById("unitippoint").offsetHeight,"function"==typeof pngfix){if(tippoint.currentStyle.backgroundImage.match(/\.png/gi)){var d=tippoint.innerHTML;tippoint.id="unitipP",tippoint.style.overflow="hidden",tippoint.style.height=PointHeight+"px",tippoint.style.width=elewidth+"px",tippoint.style.position="relative",tippoint.style.display="block",tippoint.innerHTML='<div id="unitippoint">'+d+"</div>",tippointin=document.getElementById("unitippoint"),tippointin.style.width=2*elewidth+"px",tippointin.style.height=2*PointHeight+"px",tippointin.style.backgroundImage=tippoint.style.backgroundImage,tippointin.style.position="absolute",tippoint.style.backgroundImage="none"}if(tipcap.currentStyle.backgroundImage.match(/\.png/gi)){tipcap.innerHTML;tipcap.id="unitipC",tipcap.style.overflow="hidden",tipcap.style.height=CapHeight+"px",tipcap.style.width=elewidth+"px",tipcap.style.position="relative",tipcap.style.display="block",tipcap.innerHTML='<div id="unitipcap">'+d+"</div>",tipcapin=document.getElementById("unitipcap"),tipcapin.style.height=2*CapHeight+"px",tipcapin.style.backgroundImage=tipcap.style.backgroundImage,tipcapin.style.position="absolute",tipcap.style.backgroundImage="none"}pngfix()}document.onmousemove=function(t){move(t)}},move=function(t){window.event?(x=window.event.clientX,y=window.event.clientY,document.documentElement.scrollLeft?tipid.style.left=TipWidth>=WinWidth?x-offsetX-elewidth+document.documentElement.scrollLeft+"px":x+offsetX+document.documentElement.scrollLeft+"px":tipid.style.left=TipWidth>=WinWidth?x-offsetX-elewidth+document.body.scrollLeft+"px":x+offsetX+document.body.scrollLeft+"px",document.documentElement.scrollTop?tipid.style.top=TipHeight>=WinHeight?y-offsetY-eleheight+document.documentElement.scrollTop+"px":y+offsetY+document.documentElement.scrollTop+"px":tipid.style.top=TipHeight>=WinHeight?y-offsetY-eleheight+document.body.scrollTop+"px":y+offsetY+document.body.scrollTop+"px"):(x=t.clientX,y=t.clientY,tipid.style.left=TipWidth>=WinWidth?x-offsetX-elewidth+window.scrollX+"px":x+offsetX+window.scrollX+"px",tipid.style.top=TipHeight>=WinHeight?y-offsetY-eleheight+window.scrollY+"px":y+offsetY+window.scrollY+"px"),TipWidth=x+elewidth+20,TipHeight=y+eleheight+20,TipHeight>=WinHeight?(tipid.removeChild(tippoint),tipid.removeChild(tipmid),tipid.removeChild(tipcap),tipid.appendChild(tipcap),tipid.appendChild(tipmid),tipid.appendChild(tippoint)):(tipid.removeChild(tippoint),tipid.removeChild(tipmid),tipid.removeChild(tipcap),tipid.appendChild(tippoint),tipid.appendChild(tipmid),tipid.appendChild(tipcap)),TipHeight>=WinHeight?(document.getElementById("uniTipP")?(tippointin.style.left=TipWidth>=WinWidth?"-"+elewidth+"px":"0px",tippointin.style.top="-"+PointHeight+"px"):tippoint.style.backgroundPosition=TipWidth>=WinWidth?"right bottom":"left bottom",document.getElementById("uniTipC")?tipcapin.style.top="-"+CapHeight+"px":tipcap.style.backgroundPosition="0 -"+CapHeight+"px"):(document.getElementById("uniTipP")?(tippointin.style.left=TipWidth>=WinWidth?"-"+elewidth+"px":"0px",tippointin.style.top="0px"):tippoint.style.backgroundPosition=TipWidth>=WinWidth?"right top":"left top",document.getElementById("uniTipC")?tipcapin.style.top="0px":tipcap.style.backgroundPosition="0 0")},hide=function(t,i){document.getElementById("unitipmid").innerHTML="",document.onmousemove="",document.body.removeChild(tipid),tipid.style.display="none",0==altText?t.setAttribute("title",i):t.setAttribute("alt",i),altText=!1},window.addEventListener&&window.addEventListener("load",init,!1),window.attachEvent&&window.attachEvent("onload",init);