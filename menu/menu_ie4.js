//script generated by SiteXpert (www.xtreeme.com)
//Copyright(C) 1998-2003 Xtreeme GmbH
function f33(p){
if(p&&p.indexOf(':/')==-1&&p.indexOf(':\\')==-1&&p.indexOf('/')!=0) return unescape(absPath)+p
else return p}
function addLoadHandler(lh){
if(lh){
if(!document.loadHandlers){
document.loadHandlers=new Array()
document.loadHandlers[0]=lh
document.lastLoadHandler=0}
else{
document.lastLoadHandler++
document.loadHandlers[document.lastLoadHandler]=lh}}}
addLoadHandler('f29')
addLoadHandler(window.onload)
window.onload=f31
function f32(){return true;}
window.onerror=f32
function f03(q,popup,id,v27,v26,v30,v09,bLast,v31,parent,target,icon){
var itemType=0
var itemWnd=createElementEx(q.v18.document,popup,"span","id",id,null,null,"width",q.v23-2*q.bord,null,null)
itemWnd.innerHTML=v26
f30(itemWnd,"mouseover",f22,false)
f30(itemWnd,"mouseout",f23,false)
f30(itemWnd,"mousedown",f20,false)
f30(itemWnd,"dblclick",f20,false)
itemWnd.owner=popup
with(itemWnd.style){
if(itemType==2)top=v31-q.scrollHeight
else top=v31
if(v27){cursor=(!IE4||version>=6)?"pointer":"hand";}
else{cursor="default";}
color=v09 [3]
if(!bLast){
borderBottomColor=q.borderCol
borderBottomWidth=q.sep
borderBottomStyle="solid"}
if(!itemType)padding=q.vertSpace
paddingLeft=q.popupLeftPad+q.vertSpace
paddingRight=(q.v01<q.iconSize?q.iconSize:q.v01)+q.vertSpace
fontSize=v09[0]
fontWeight=(v09[1])?"bold":"normal"
fontStyle=(v09[2])?"italic":"normal"
fontFamily=v09[6]}
if(v30)itemWnd.v30=v30
itemWnd.url=f33(v27)
itemWnd.dispText=v26
itemWnd.target=target
itemWnd.icon=icon
if(v30){
var leftImgPos=q.v23-q.bord-q.iconSize-5
var topImgPos=itemWnd.offsetHeight/2-q.iconSize/2+v31-2
txt="<div style='width:"+q.iconSize+";height:"+q.iconSize+";position:absolute;left:"+leftImgPos+";top:"+topImgPos+"'>"
txt+="<img src='"
txt+=f33(q.v21)+"/"+q.fnm+"ia.gif' border=0 width="+q.iconSize+" height="+q.iconSize+" align=right></span>"
itemWnd.insertAdjacentHTML("BeforeEnd",txt)}
return itemWnd.offsetHeight}
function f05(q,v12,level){
var popupName=v12+"popup"
var popup=getElementById(q.v18,popupName)
if(popup)return popup
if(q.v17&&q.v17.id==popupName)q.v17=null
var v09
if(level>q.maxlev){v09=eval("q.lev"+q.maxlev);}else{v09=eval("q.lev"+level);}
popup=createElementEx(q.v18.document,q.v18.document.body,"DIV","id",popupName,null,null,"position","absolute",null,null)
popup.level=level
popup.v05=v09[5]
popup.v06=v09[3]
popup.v07=v09[7]?v09[7]:'white'
popup.v08=v09[4]?v09[4]:'white'
popup.scrVis=false
popup.q=q
with(popup.style){
zIndex=maxZ
width=q.v23
borderColor=q.borderCol
backgroundColor=v09[4]?v09[4]:'white'
borderWidth=q.bord
borderStyle="solid"}
f30(popup,"mouseout",f15,false)
f30(popup,"mouseover",f14,false)
var v31=0
popup.style.backgroundColor=v09[4]?v09[4]:'white'
var array=eval(v12)
var v13
for(v13=0;v13<array.length/5;v13++){
var v30=(array[v13*5+2])?(v12+"_"+parseInt(v13+1)):null
v31+=f03(q,popup,null,array[v13*5+1],array[v13*5],v30,v09,(v13==array.length/5-1),v31,popup,array[v13*5+3],array[v13*5+4])}
popup.style.height=v31+q.bord*2
popup.maxHeight=v31+q.bord*2
var v28=0
return popup}
function f35(wnd,vis){
var i=1
while(true){
var eln='HideItem'
if(i>1)eln+=i
var hideWnd=getElementById(wnd,eln)
if(!hideWnd)break
hideWnd.style.display=vis ? '' : 'none'
i++}}
function f06(q,popupId){
if(popupId.indexOf('_')==-1)
f35(q.v18,0)
var popup=getElementById(q.v18,popupId)
if(popup){
if(popup.v14)f06(q,popup.v14.id)
popup.style.display="none"}
if(q.v17&&q.v17.id==popupId)q.v17=null}
function f07(rect,refx,refy){
var retval=new rct(rect.left-refx,rect.top-refy,rect.right-refx,rect.bottom-refy)
return retval}
function f08(q,popup,x,y,bDontMove,refWnd){
if(popup.id.indexOf('_')==-1)
f35(q.v18,1)
popup.style.left=x
popup.style.top=y
popup.style.display=""
var v15=f19(q,popup)
var v16=f17(q.v18)
var bResize=(popup.offsetHeight<popup.maxHeight)
if(x+q.v23>v16.right){
if(refWnd&&refWnd.id&&refWnd.id.indexOf('top')==-1)popup.style.left=Math.max(0,refWnd.offsetLeft-q.v23+q.levelOffset)
else popup.style.left=v16.right-popup.offsetWidth-5}}
function f13(q,popup){
var wnd=q.v17
while(wnd){
if(wnd.id==popup.id){
return true}
wnd=wnd.v14}
return false}
function f14(){
var q=this.q
if(q.v17&&f13(q,this))clearTimeout(q.v17Timeout)}
function f15(){
var q=this.q
f15Impl(q,this)}
function f15Impl(q,popup){
if(q.mout&&q.v17&&f13(q,popup)){
if(q.v17Timeout)clearTimeout(q.v17Timeout)
q.v17Timeout=setTimeout("f06("+q.name+",'"+q.v17.id+"');",q.closeDelay)}}
function rct(left,top,right,bottom){
this.left=left
this.top=top
this.right=right
this.bottom=bottom}
function f17(doc){
var left=0
var top=0
var right
var bottom
if(doc.pageXOffset)left=doc.pageXOffset
else if(doc.document.body.scrollLeft)left=doc.document.body.scrollLeft
if(doc.pageYOffset)top=doc.pageYOffset
else if(doc.document.body.scrollTop)top=doc.document.body.scrollTop
if(doc.innerWidth)right=left+doc.innerWidth
else if(doc.document.body.clientWidth)right=left+doc.document.body.clientWidth
if(doc.innerHeight)bottom=top+doc.innerHeight
else if(doc.document.body.clientHeight)bottom=top+doc.document.body.clientHeight
var retval=new rct(left,top,right,bottom)
return retval}
function f19(q,wnd){
var left=mac?document.body.leftMargin:0
var top=mac?document.body.topMargin:0
var right=0
var bottom=0
var par=wnd
while(par){
left+=par.offsetLeft
top+=par.offsetTop
if(par.offsetParent==par || par.offsetParent==q.v18.document.body)break
par=par.offsetParent}
right=left+wnd.offsetWidth
bottom=top+wnd.offsetHeight
var retval=new rct(left,top,right,bottom)
return retval}
function findFr(wn,fr){
if(wn.frames){
for(var i=0;i<wn.frames.length;i++){
if(wn.frames[i].name==fr)return wn.frames[i]
var ret=findFr(wn.frames[i],fr)
if(ret)return ret}}
return null}
function f20(){
var item=this
var q=this.owner.q
if(item.url){
var trgFrame=q.cntFrame
if(item.target)
trgFrame=item.target
if(trgFrame=="_self")
trgFrame=null
if(trgFrame){
if(trgFrame=="_blank")window.open(item.url)
else if(trgFrame=="_top")window.top.location.href=item.url
else if(trgFrame=="_parent")parent.location.href=item.url
else{
var fr=findFr(window.top,trgFrame)
if(fr)fr.location.href=item.url
else window.location.href=item.url}}
else{
var find=item.url.indexOf("javascript:")
if(find!=-1)
eval(item.url.substring(find))
else{
var mt=item.url.indexOf("mailto:")
if(mt!=-1)window.top.location=item.url.substring(mt)
else q.targetFrame.location=item.url}}
if(q.v17)f06(q,q.v17.id)}}
function f22(){
var item=this
var q=this.owner.q
if(item.owner.v14){
f06(q,item.owner.v14.id)}
if(item.url&&item.url.indexOf("javascript:")==-1)
window.status=item.url
else
window.status=""
item.style.color=item.owner.v05
item.style.backgroundColor=item.owner.v07
var items=getElementsByTagName(item.owner,"SPAN")
var i=0
for(;i<items.length;i++)
if(item!=items[i]&&(!items[i].id||items[i].id.indexOf("scroll")==-1)){
items[i].style.backgroundColor=item.owner.v08
items[i].style.color=item.owner.v06}
if(item.v30){
var rect=f19(q,item)
var x=rect.right-q.levelOffset
var y=rect.top
var popup=f05(q,item.v30,item.owner.level+1)
item.owner.v14=popup
f08(q,popup,x,y+2,false,item.owner)}}
function f23(){
var item=this
var q=this.owner.q
item.style.color=item.owner.v06
item.style.backgroundColor=item.owner.v08
window.status=""}
function createElementEx(ownerDocument,parent,tag,a1,av1,a2,av2,s1,sv1,s2,sv2){
var text="<"+tag+" "
if(a1)text+=a1+"="+av1+" "
if(a2)text+=a2+"="+av2+" "
if(s1||s2){
text+="style='"
if(s1)text+=s1+":"+sv1+";"
if(s2)text+=s2+":"+sv2+";"
text+="' "}
text+="></"+tag+">"
parent.insertAdjacentHTML("BeforeEnd",text)
return(parent.children[parent.children.length-1])}
function createElement(ownerDocument,parent,tag){
parent.insertAdjacentHTML("BeforeEnd","<"+tag+"/>")
return(parent.children[parent.children.length-1])}
function getElementById(wnd,id){
if(id&&wnd)return eval("wnd."+id)
else return null}
function getElementsByTagName(parent,name){
if(parent)return parent.all.tags(name)
else return null}
function exM(q,popupId,refWnd,dum,ml,mt,mr,mb){
if(!docLoaded)return
clearTimeout(q.v17Timeout)
if(q.v17&&q.v17.id!=popupId+"popup")
f06(q,q.v17.id)
if(popupId=='none')return
var rect
if(refWnd=='coords'){rect=f19(q,getElementById(window,q.name+"tl"));rect.left=rect.left+ml;rect.top=rect.top+mt;rect.right=rect.left+mr;rect.bottom=rect.top+mb;}else{rect=f19(q,getElementById(window,popupId+"top"));}
var x
var y
if(q.menuHorizontal){
x=rect.left
y=rect.bottom+q.popupOffset}
else{
x=rect.right+q.popupOffset
y=rect.top}
if(q.v19&&!q.v20){
var brRect=f17(q.v18)
var wRect=f17(window)
switch(q.menuPos){
case 0:
x=brRect.left+q.popupOffset
y+=brRect.top-wRect.top
break
case 1:
x=brRect.right-q.popupOffset
y+=brRect.top-wRect.top
break
case 2:
x+=brRect.left-wRect.left
y=brRect.top+q.popupOffset
break
case 3:
x+=brRect.left-wRect.left
y=brRect.bottom-q.popupOffset
break}}
var popup=f05(q,popupId,0)
f08(q,popup,x,y,true,null)
q.v17=popup}
function coM(q,popupId){
if(!docLoaded)return
var popup=getElementById(q.v18,popupId+"popup")
if(popup)f15Impl(q,popup)}
function exMNS(q,popupId,e,dItem){}
function coMNS(q,popupId){}
function f28(){
var nmn
for(nmn=1;nmn<=lastm;nmn++){
var q=eval("window.m"+nmn)
if(q&&q.v17)f06(q,q.v17.id)}}
function f29(){
if(docLoaded)return
var nmn
for(nmn=1;nmn<=lastm;nmn++){
var q=eval("window.m"+nmn)
if(q){
q.v18=(q.v19&&!q.v20)?findFr(window.top,q.v24):window
q.targetFrame=(q.v19)?findFr(window.top,q.cntFrame):window
if(!q.mout)f30(q.v18.document,"mousedown",f28,false)}}
docLoaded=true}
function f30(obj,event,fun,bubble){
if(obj.addEventListener)
obj.addEventListener(event,fun,bubble)
else{
eval("obj.on"+event+"="+fun)}}
function chgBg(q,item,color){
var el=getElementById(window,item)
if(!IE4)return
if(color==0){
if(!q.v25)el.style.background=q.tlmOrigBg
el.style.color=q.tlmOrigCol}
else{
if(!q.v25&&(color&1))el.style.background=q.tlmHlBg
if(color&2)el.style.color=q.tlmHlCol}}
function f31(){
var i
var l=document.lastLoadHandler
document.lastLoadHandler=-1
for(i=0;i<=l;i++){
var h=document.loadHandlers[i]
if(typeof(h)!='function'){
var bPar=(h.indexOf('(')==-1)
eval(h+(bPar ? '();' : ';'))}
else{
h()}}}
