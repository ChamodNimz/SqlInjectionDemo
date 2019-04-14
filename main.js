let frontAlert;

$(document).ready(()=>{
	frontAlert = $("#frontAlert");
	frontAlert.hide();
});

function beforeSubmit(event){

if(!validate()){
	return false;
}

}

function validate(){

let username = $("#username");
let password = $("#password");

if(username.val().length > 0 && password.val().length > 0  ){

	if(regexMatch(username)){
		return true;
	}else{
		frontAlert.html("please enter 20 characters only without special characters ..").show();
		return false;
	}
	return true;
}else{
	frontAlert.html("please enter both username and a password ..").show();
	return false;
}

}


function regexMatch(input){

if(input.val().match(/^[A-Za-z0-9]{2,20}$/)){
	return true;
}else{
	return false;
}
}