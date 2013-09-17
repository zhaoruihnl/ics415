// JavaScript Document


function getClasses ( elem ){
    if( elem )
	{
        var className = elem.className;
        var classNames = className.split(/\s+/);
        return classNames;
    }
    return [];
}


function addClass(elem, className) 
{
	if(!elem.className) 
	{
		elem.className = className;
	} else {
		newClassName = elem.className;
		newClassName+= " ";
		newClassName+= className;
		elem.className = newClassName;
	}
}

function validateForm () {
	<!--return state-->
    var para=document.createElement("div");
    para.id="return";
	
	<!--grab form input-->
    var form = document.getElementsByTagName("input");
    var errors = "";
    
	<!--check if all filled-->
    if (form.name.value.length == 0) 
    	{
    		form.name.style.border = "1px solid red";
     		form.name.style.backgroundColor = "#FFCCCC";
            errors += "<li>name missing</li>";
        }
	if (form.email.value.length == 0)
		{
			form.email.style.border = "1px solid red";
     		form.email.style.backgroundColor = "#FFCCCC";
            errors += "<li>email missing</li>";
        }		
	if (form.password.value.length == 0)
		{
			form.password.style.border = "1px solid red";
     		form.password.style.backgroundColor = "#FFCCCC";
            errors += "<li>password missing</li>";
        }	
	if (form.confirm.value.length == 0)
		{
			form.confirm.style.border = "1px solid red";
     		form.confirm.style.backgroundColor = "#FFCCCC";
            errors += "<li>confirm password missing</li>";
        }	
		
	<!--check password match-->
	if (form.password.value != form.confirm.value)
		{
			form.password.style.border = "1px solid red";
     		form.password.style.backgroundColor = "#FFCCCC";
			form.confirm.style.border = "1px solid red";
     		form.confirm.style.backgroundColor = "#FFCCCC";
			errors += "<li>password and confirm password not match</li>";
		}
		
	<!-- return false if any error occur-->
    if (errors.length > 0) 
	{
    	document.getElementById("return").innerHTML = "<ul>" + errors + "</ul>";
    	return false;
        }
    return true;
}