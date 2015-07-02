$(document).ready(function(){
//jQuery('#sucess').hide();
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
var count = 1;

$(".next").click(function(event){

	var fv=formValidation(event);
	if(fv){
	}else{

	return false;
	}

	if(animating) return false;
		animating = true;
		//current_fs = $(this).parent();
		//next_fs = $(this).parent().next();
		
		current_fs = $('#level'+count);
		count++;
		//console.log(current_fs);
		next_fs = $('#level' + count);
		
		//next_fs.show();
		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		
		//show the next fieldset
		next_fs.show(); 
		//hide the current fieldset with style
		
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'transform': 'scale('+scale+')'});
				next_fs.css({'left': left, 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_fs.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});


});


$(".next2").click(function(event){

	var fv=formValidation2(event);
	if(fv){

	}else{
		
	return false;
	}

	if(animating) return false;
		animating = true;
		//current_fs = $(this).parent();
		//next_fs = $(this).parent().next();
		
		current_fs = $('#level'+count);
		count++;
		//console.log(current_fs);
		next_fs = $('#level' + count);
		
		//next_fs.show();
		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		
		//show the next fieldset
		next_fs.show(); 
		//hide the current fieldset with style
		
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'transform': 'scale('+scale+')'});
				next_fs.css({'left': left, 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_fs.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});


});

	$(".previous").click(function(){
		if(animating) return false;
		animating = true;
		
		//current_fs 	= $(this).parent();
		//previous_fs = $(this).parent().prev();
		current_fs = $('#level'+count);
		count--;
		//console.log(current_fs);
		previous_fs = $('#level' + count);


		//de-activate current step on progressbar
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
		
		//show the previous fieldset
		previous_fs.show(); 
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale previous_fs from 80% to 100%
				scale = 0.8 + (1 - now) * 0.2;
				//2. take current_fs to the right(50%) - from 0%
				left = ((1-now) * 50)+"%";
				//3. increase opacity of previous_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'left': left});
				previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_fs.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});


$("#submit_member").click(function(event){
	
	var vf = formValidation3(event);
	if(vf){

	}else{
		return false;
	}

	return false;
});

$("#add_field").click(function(event){
	add_field();
});

$("#remove_field").click(function(event){
	remove_field();
});
/*
$("#msform").submit(function(){

var fname=jQuery('#fname').val();
if ($.trim(fname).length == 0) {
document.getElementById("fname").style.borderColor = "#E34234";
jQuery('.fs-error').html('<span style="color:red;"> Please Enter First Name !</span>');
jQuery('.fs-error').show();
return false;
}
else{
jQuery('.fs-error').hide();
 var serializedReturn = formData();

window.location = "http://localhost/multistepform/success.php";
	return false;
	
	}
});

*/
}); 

/*
function formData() {
    var serializedValues = jQuery("#msform").serialize();
		      var form_data = {
            action: 'ajax_data',
            type: 'post',
            data: serializedValues,
        };
        jQuery.post('insert.php', form_data, function(response) {
		 alert(response);
		// document.getElementById("sucess").style.color = "#006600";
		// jQuery('#sucess').show();
        });
	
    return serializedValues;
}
*/

function formValidation(e){
	var ok = true;
/*
	var emailval=jQuery('#email').val();
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	// Checking Empty Fields
	var vemail=mailformat.test(emailval)
	if ($.trim(emailval).length == 0 || vemail==false) {
	jQuery('.fs-error').html('<span style="color:red;"> Email is invalid !</span>');
	return false;
	}
	else{

		jQuery('.fs-error').hide();
	}


		var pass1 = document.getElementById("pass").value;
	    var pass2 = document.getElementById("cpass").value;
		
	    if (pass1 != pass2 || pass1 == '') {
	        //alert("Passwords Do not match");
	        document.getElementById("pass").style.borderColor = "#E34234";
	        document.getElementById("cpass").style.borderColor = "#E34234";
		jQuery('.fs-error').html('<span style="color:red;"> Passords do not match !</span>');
		jQuery('.fs-error').show();
	        return false
	    }
	    else {
	      document.getElementById("pass").style.borderColor = "#006600";
	        document.getElementById("cpass").style.borderColor = "#006600";
			jQuery('.fs-error').hide();
			return true;
	    }

	*/
	//return true;

	var firstname, marital_status, lastname, dob, gender, address, district, title, cellphone, email, occupation;

	title			= document.getElementById("title").value;
	firstname		= document.getElementById("firstname").value;
	lastname 		= document.getElementById("lastname").value;
	dob		 		= document.getElementById("dob").value;
	gender			= document.getElementById("gender").value;
	marital_status 	= document.getElementById("marital_status").value;
	address 		= document.getElementById("address").value;
	district		= document.getElementById("district").value;
	cellphone		= document.getElementById("cellphone").value;
	email 			= document.getElementById('email').value;
	occupation  	= document.getElementById('occupation').value;
	

	check_select(title, 'title');
	check_length(firstname, 'firstname');
	check_length(lastname, 'lastname');
	check_length(dob, 'dob');
	check_length(gender, 'gender');
	check_select(marital_status, 'marital_status');
	check_length(address, 'address');
	check_length(district, 'district');
	check_email(email, 'email');
	check_length(occupation, 'occupation');

	//cellphone
	if(cellphone.length != 0){
		
		if(isNaN(cellphone.substring(1))){
			document.getElementById('cellphone-error').innerText = "Enter digits only";
			document.getElementById('cellphone').style.borderColor = "red";
			//ok = false;
		}else if(!(cellphone.length == 10 || cellphone.substring(1).length == 12)){
			document.getElementById('cellphone-error').innerText = "Enter correct number of digits";
			document.getElementById('cellphone').style.borderColor = "red";
			//ok = false;
		}else {
			document.getElementById('cellphone-error').innerText = '';
			document.getElementById('cellphone').style.borderColor = "";
		}
		
	}else {
		document.getElementById('cellphone-error').innerText = '';
		document.getElementById('cellphone').style.borderColor = "";
	}


	//second page validation
	function check_select(value, item){
		//alert(item);
		if(value == 'select'){
			document.getElementById(item + '-error').innerText =  item.charAt(0).toUpperCase() + 
			item.substring(1) + " should not be empty";
			document.getElementById(item).style.borderColor = "red";
			ok = false;
		}else {
			document.getElementById(item + '-error').innerText = '';
			document.getElementById(item).style.borderColor = "";
		}
	}

	function check_length(value, item){
		if(value.length == 0){
			document.getElementById(item + '-error').innerText =  item.charAt(0).toUpperCase() + 
			item.substring(1) + " should not be empty";
			document.getElementById(item).style.borderColor = "red";
			//ok = false;
		}else {
			document.getElementById(item + '-error').innerText = '';
			document.getElementById(item).style.borderColor = "";
		}
	}

	function check_email(val, email){
		
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	// Checking Empty Fields
	var vemail=mailformat.test(val)
	if ($.trim(val).length == 0 || vemail==false) {
		document.getElementById(email + '-error').innerText =  email.charAt(0).toUpperCase() + 
		email.substring(1) + " should be valid";
		document.getElementById(email).style.borderColor = "red";
		//ok = false;
	}else {
		document.getElementById(email + '-error').innerText = '';
		document.getElementById(email).style.borderColor = "";
}
}

	//return ok;
	return true;
}

function formValidation2(){
	var ok = true;

	var homecell, membership, location, baptism, baptism_date, sunday_class, channel, ministry;

	//second page
	homecell		= document.getElementById('homecell').value;
	membership		= document.getElementById('membership').value;
	location		= document.getElementById('locations').value;
	baptism 		= document.getElementById('baptism').value;
	baptism_date	= document.getElementById('baptism_date').value;
	sunday_class	= document.getElementById('sunday_class').value;
	channel			= document.getElementById('channel').value;
	ministry		= document.getElementById('ministry').value;
	
	check_select(homecell, 'homecell');
	check_select(membership, 'membership');
	//alert(location);
	check_select(location, 'locations');
	check_length(baptism_date, 'baptism_date');
	check_select(baptism, 'baptism');
	check_select(sunday_class, 'sunday_class');
	check_select(channel, 'channel');
	check_select(ministry, 'ministry');


	//second page validation
	function check_select(value, item){
		//alert(item);
		if(value == 'select'){
			document.getElementById(item + '-error').innerText =  item.charAt(0).toUpperCase() + 
			item.substring(1) + " should not be empty";
			document.getElementById(item).style.borderColor = "red";
			ok = false;
		}else {
			document.getElementById(item + '-error').innerText = '';
			document.getElementById(item).style.borderColor = "";
		}
	}

	function check_length(value, item){
		if(value.length == 0){
			document.getElementById(item + '-error').innerText =  item.charAt(0).toUpperCase() + 
			item.substring(1) + " should not be empty";
			document.getElementById(item).style.borderColor = "red";
			//ok = false;
		}else {
			document.getElementById(item + '-error').innerText = '';
			document.getElementById(item).style.borderColor = "";
		}
	}

	//return ok;
	return true;

}

var txtBox = 0;

function formValidation3(){
	alert(txtBox);
	var ok = true;

	var family_member, relation, family_member1;
	//second page
	family_member		= document.getElementById('family_member').value;
	relation			= document.getElementById('relation').value;

	
	check_length(family_member, 'family_member');
	check_select(relation, 'relation');

	//validate dynamic fields
	//both have suffix of txtBox
	if(txtBox !== 0){
		for(var i = 1; i <= txtBox; i++ ){
			var  fam		= document.getElementById('fam_member' + i).value;
			var relation 	= document.getElementById('relation' + i).value;
			
			check_length(fam, 'fam_member' + i);
			check_select(relation, 'relation' + i);
		}
		
		
	}


	//second page validation
	function check_select(value, item){
		//alert(item);
		if(value == 'select'){
			document.getElementById(item + '-error').innerText =  "Select " + item;
			document.getElementById(item).style.borderColor = "red";
			ok = false;
		}else {
			document.getElementById(item + '-error').innerText = '';
			document.getElementById(item).style.borderColor = "";
		}
	}

	function check_length(value, item){
		if(value.length == 0){
			document.getElementById(item + '-error').innerText =  "Enter family member name";
			document.getElementById(item).style.borderColor = "red";
			ok = false;
		}else {
			document.getElementById(item + '-error').innerText = '';
			document.getElementById(item).style.borderColor = "";
		}
	}

	
	//return false;
	return ok;

}

var relationships = new Array();
relationships		= ['Mother', 'Father', 'Brother', 'Sister', 'Uncle', 'Cousin', 'Nephew', 'In-law', 'Son', 'Daughter'];

function add_field(){
	txtBox = txtBox + 1;
	var str, contentID, newTBDiv;
	var options = '';
	for(var i = 0; i < relationships.length; i++){
		options += "<option value="+relationships[i]+">"+relationships[i]+"</option>";
		//console.log(options);
	}

	str = "<div class=\"row\" id=\"dynamic_row\">" +

					"<div class=\"col-md-6 \" >"+

						"<div class=\"form-group\" >" +
							"<label class=\"col-md-4 control-label\" for=\"family_member\">Family Members: </label>" +  
							"<div class=\"col-md-8 \"  >" +
								"<input id=\"fam_member"+txtBox+"\" name=\"fam_member\" type=\"text\" style=\"width:200px; \" value=\"\""+ 
								 "placeholder=\"Enter family member\" class=\"form-control input-\" />" +
								"<span id=\"fam_member"+ txtBox+"-error\" class=\"help-block\" ></span>" +
							"</div>"+
						"</div>"+

					"</div>"+
							
				
		         "<div class=\"col-md-6\" >" +
					          "<div class=\"form-group\">" +
								"<label class=\"col-md-4 control-label\" for=\"relation\">Relationship</label> " + 
								"<div class=\"col-md-8\">"+
					            "<select  name=\"relation\" id=\"relation"+txtBox+"\" style=\"width:200px;  \""+
					            "class=\"form-control input\">"+
					            "<option value = \"select\"> - Select -</option>" +	options +			            		   
			                	"</select>"+
			                  	"<span id=\"relation"+txtBox+"-error\" class=\"help-block\"></span>"+
			                 "</div>"+
			                 "</div>"+
			                "</div>"+
			               "</div>"

				 contentID  = document.getElementById('dynamic_row');
				 newTBDiv 	= document.createElement('div');
				 newTBDiv.setAttribute('id', 'family_member' + txtBox);
				 newTBDiv.innerHTML = "&nbsp;&nbsp;" + str;
				 contentID.appendChild(newTBDiv);
		

}

function remove_field(){
	if(txtBox !== 0){
		var contentID = document.getElementById('dynamic_row');
		contentID.removeChild(document.getElementById('family_member' + txtBox));
		txtBox = txtBox - 1;
	}
}

