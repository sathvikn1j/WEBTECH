function manage_comments(){
	var all_comments=document.querySelectorAll(".comment_button");
	for(var i in all_comments){
		all_comments[i].onclick=add_comment;
	}
	var alll=document.querySelectorAll(".like_button");
	for(var i in alll){
		alll[i].onclick=func2;
	}
}


function add_comment(event){
	//var com=document.createElement("tr");
	//com.colspan=3;
	var com=document.createElement("div");
	var data=prompt("enter comment");
	//var com1=document.createElement("td");
	//com1.innerHTML=localStorage.getItem('user')+" : "+data;
	//com1.style.border="1px solid black";
	//com1.style.width="300px";
	//com.appendChild(com1);
	com.innerHTML=localStorage.getItem('user')+" : "+data;
	com.width="300px";
	com.style.border="1px solid black";
	var x=event.target.parentNode.parentNode.parentNode.parentNode.parentNode;//.appendChild(com);
	x.appendChild(com);
	//console.log(x.previousSibling.previousSibling.children[0].children[0].children[0].children[1]);
	var y=x.previousSibling.previousSibling.children[0].children[0].children[0].children[1];
	var z=y.innerHTML.substr(0,1);
	z=parseInt(z)+1;
	y.innerHTML=z+" comments";
}
/*function manage_likes(){
	var alll=document.querySelectorAll(".like-button");
	for(var i in alll){
		alll[i].onclick=func2;
	}
}*/
function func2(event)
{
	var x=event.target.parentNode.parentNode.parentNode.parentNode.parentNode;
	console.log(x.previousSibling.previousSibling.children[0].children[0].children[0].children[1]);
	var y=x.previousSibling.previousSibling.children[0].children[0].children[0].children[0];
	var z=y.innerHTML.substr(0,1);
	z=parseInt(z)+1;
	y.innerHTML=z+" likes";
}
