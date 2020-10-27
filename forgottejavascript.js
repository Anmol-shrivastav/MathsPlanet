function validform() {
	var name = document.getElementById("namedata").value;
	var dob = document.getElementById("dobdata").value;
	if(name.trim() ==""&&dob =="")
	{
		alert("Enter Details");
		document.getElementById("namedata").style.borderColor="red";
		document.getElementById("namedata").style.borderWidth="1px";
		document.getElementById("dobdata").style.borderColor="red";
		document.getElementById("dobdata").style.borderWidth="1px";
		return;
	}
	if(name.trim() =="")
	{
		alert("Enter Name");
		document.getElementById("namedata").style.borderColor="red";
		document.getElementById("namedata").style.borderWidth="2px";
		return;
	}
	if(dob =="")
	{
		alert("Enter Your Date of Birth");
		document.getElementById("dobdata").style.borderColor="red";
		document.getElementById("dobdata").style.borderWidth="2px";
		return;
	}
};

document.getElementById("submitdata").onclick=function() {
	validform();
}