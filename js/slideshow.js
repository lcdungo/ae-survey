// class of dot indicator = dot
// id of form = empForm
// div class of tab/slide = Slides
// for input tags add attribute: oninput="this.className = ''"
// id of prev bttn = prevBtn
// id of next bttn = nextBtn
// nextPrev = plusSlides
// currentTab = slideIndex
// currentSlide = showTab

var slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n){

	var x = document.getElementsByClassName("Slides");
	if (n == 1 && !validateEmpForm()) return false;
	x[slideIndex].style.display = "none";
	slideIndex = slideIndex + n;

	showSlides(slideIndex);
	document.body.scrollTop = 0;
  	document.documentElement.scrollTop = 0;
}

function currentSlide(n){
	var slides = document.getElementsByClassName("Slides");
	var dots = document.getElementsByClassName("dot");
	if ((!validateEmpForm() && n > slideIndex)) {
		return false; 
	} else {
		slides[slideIndex].style.display = "none";
	 	showSlides(slideIndex = n);
	 } 

}

function showSlides(n){

	var x = document.getElementsByClassName("Slides");
	x[n].style.display = "block";

	if (n == 0) {
		document.getElementById("prevBtn").style.display = "none";
	} else {
		document.getElementById("prevBtn").style.display = "inline";
	}
	if (n == (x.length - 1)) {
		document.getElementById("nextBtn").style.display = "none";
	} else {
		document.getElementById("nextBtn").style.display = "inline";
	}

	fixStepIndicator(n)
}

function validateEmpForm() {
	var x, y, z, i, valid = true;
	x = document.getElementsByClassName("Slides");
	y = x[slideIndex].getElementsByTagName("span");
	z = x[slideIndex].getElementsByTagName("input");

	var validQues1 = validateRadioBtn("ques1"),
		otherQues1 = validateOtherRadioBtn("ques1"),
		otherTxtQues1 = validateTextbox("ques1_otxt");

	var	validQues2 = validateRadioBtn("ques2"),
		abroadQues2 = validateOtherRadioBtn("ques2"),
		regionQues2 = validateSelectOptions("ques2_1_1");

	var validQues3 = validateSelectOptions("ques3"),
		otherQues3 = validateOtherSelectOption("ques3"),
		otherTxtQues3 = validateTextbox("ques3_other");

	var validQues4 = validateRadioBtn("ques4"),
		validQues5 = validateTextbox("ques5"),
		validQues6 = validateRadioBtn("ques6");

	var validQues7_1 = validateRadioBtn("ques7_1"),
		validQues7_2 = validateRadioBtn("ques7_2"),
		validQues7_3 = validateRadioBtn("ques7_3"),
		validQues7_4 = validateRadioBtn("ques7_4"),
		validQues7_5 = validateRadioBtn("ques7_5"),
		validQues7_6 = validateRadioBtn("ques7_6"),
		validQues7_7 = validateRadioBtn("ques7_7"),
		validQues7_8 = validateRadioBtn("ques7_8"),
		validQues7_9 = validateRadioBtn("ques7_9"),
		validQues7_10 = validateRadioBtn("ques7_10"),
		validQues7_11 = validateRadioBtn("ques7_11"),
		validQues7_12 = validateRadioBtn("ques7_12"),
		validQues7_13 = validateRadioBtn("ques7_13"),
		validQues7_14 = validateRadioBtn("ques7_14"),
		validQues7_15 = validateRadioBtn("ques7_15"),
		validQues7_16 = validateRadioBtn("ques7_16"),
		validQues7_17 = validateRadioBtn("ques7_17");

	var validQues8_1 = validateRadioBtn("ques8_1"),
		validQues8_2 = validateRadioBtn("ques8_2"),
		validQues8_3 = validateRadioBtn("ques8_3"),
		validQues8_4 = validateRadioBtn("ques8_4"),
		validQues8_5 = validateRadioBtn("ques8_5"),
		validQues8_6 = validateRadioBtn("ques8_6"),
		validQues8_7 = validateRadioBtn("ques8_7"),
		validQues8_8 = validateRadioBtn("ques8_8"),
		validQues8_9 = validateRadioBtn("ques8_9"),
		validQues8_10 = validateRadioBtn("ques8_10"),
		validQues8_11 = validateRadioBtn("ques8_11"),
		validQues8_12 = validateRadioBtn("ques8_12"),
		validQues8_13 = validateRadioBtn("ques8_13"),
		validQues8_14 = validateRadioBtn("ques8_14"),
		validQues8_15 = validateRadioBtn("ques8_15"),
		validQues8_16 = validateRadioBtn("ques8_16"),
		validQues8_17 = validateRadioBtn("ques8_17");

	var validQues8_1 = validateRadioBtn("ques8_1");

	var validQues9 = validateRadioBtn("ques9"),
		validQues10 = validateRadioBtn("ques10");

	var validQues11_1 = validateRadioBtn("ques11_1"),
		validQues11_2 = validateRadioBtn("ques11_2"),
		validQues11_3 = validateRadioBtn("ques11_3"),
		validQues11_4 = validateRadioBtn("ques11_4"),
		validQues11_5 = validateRadioBtn("ques11_5"),
		validQues11_6 = validateRadioBtn("ques11_6"),
		validQues11_7 = validateRadioBtn("ques11_7"),
		validQues11_8 = validateRadioBtn("ques11_8"),
		validQues11_9 = validateRadioBtn("ques11_9"),
		validQues11_10 = validateRadioBtn("ques11_10"),
		validQues11_11 = validateRadioBtn("ques11_11");

	var validQues12_1 = validateRadioBtn("ques12_1"),
		validQues12_2 = validateRadioBtn("ques12_2"),
		validQues12_3 = validateRadioBtn("ques12_3"),
		validQues12_4 = validateRadioBtn("ques12_4"),
		validQues12_5 = validateRadioBtn("ques12_5"),
		validQues12_6 = validateRadioBtn("ques12_6"),
		validQues12_7 = validateRadioBtn("ques12_7"),
		validQues12_8 = validateRadioBtn("ques12_8"),
		validQues12_9 = validateRadioBtn("ques12_9"),
		validQues12_10 = validateRadioBtn("ques12_10"),
		validQues12_11 = validateRadioBtn("ques12_11");

	var validQues11_1 = validateRadioBtn("ques11_1");

	var validQues12_1 = validateRadioBtn("ques12_1");

	var validQues13 = validateCheckbox(),
		otherQues13 = validateOtherCheckbox(),
		otherTxtQues13 = validateTextbox("ques13_otxt"),
		validQues14 = validateRadioBtn("ques14");

	var validQues15 = validateRadioBtn("ques15"),
		validQues16 = validateRadioBtn("ques16"),
		validQues17 = validateRadioBtn("ques17");

	if (slideIndex == 0) {
		valid = validQues1 && validQues2;
		if (otherQues1) {
			valid = otherTxtQues1 && validQues1 && validQues2;
			if (otherTxtQues1 == false) {
				z[4].className += " invalid";
			}
		}
		if (validQues1 == false) {
			y[0].className += " invalid";
		}

		if (validQues2 == false) {
			y[4].className += " invalid";
		}
		if (abroadQues2) {
			valid = regionQues2 && validQues1 && validQues2;
			if (regionQues2 == false) {
				y[7].className += " invalid";
			}
		}

		if (otherQues1 && abroadQues2) {
			valid = otherTxtQues1 && regionQues2 && validQues1 && validQues2;
		}
		
	}


	if (slideIndex == 1) {
		valid = validQues3 && validQues4;
		if (otherQues3) {
			valid = validQues3 && validQues4 && otherTxtQues3;
			if (otherTxtQues3 == false) {
				z[1].className += " invalid";
			}
		}
		if (validQues3 == false) {
			y[0].className += " invalid";
		}
		if (validQues4 == false) {
			y[1].className += " invalid";
		}
	}

	if (slideIndex == 2) {
		valid = validQues5 && validQues6;
		if (validQues5 == false) {
			z[1].className += " invalid";
		}
		if (validQues6 == false) {
			y[1].className += " invalid";
		}
	}


	if (slideIndex == 3) {
		valid = validQues7_1 && validQues7_2 && validQues7_3 && validQues7_4 &&
				validQues7_5 && validQues7_6 && validQues7_7 && validQues7_8 &&
				validQues7_9 && validQues7_10 && validQues7_11 && validQues7_12 &&
				validQues7_13 && validQues7_14 && validQues7_15 && validQues7_16 &&
				validQues7_17;
		if (validQues7_1 == false) {
			y[0].className += " invalid"; y[1].className += " invalid"; y[2].className += " invalid"; y[3].className += " invalid";
		}
		if (validQues7_2 == false) {
			y[4].className += " invalid"; y[5].className += " invalid"; y[6].className += " invalid"; y[7].className += " invalid";
		}
		if (validQues7_3 == false) {
			y[8].className += " invalid"; y[9].className += " invalid"; y[10].className += " invalid"; y[11].className += " invalid";
		}
		if (validQues7_4 == false) {
			y[12].className += " invalid"; y[13].className += " invalid"; y[14].className += " invalid"; y[15].className += " invalid";
		}
		if (validQues7_5 == false) {
			y[16].className += " invalid"; y[19].className += " invalid"; y[17].className += " invalid"; y[18].className += " invalid";
		}
		if (validQues7_6 == false) {
			y[20].className += " invalid"; y[23].className += " invalid"; y[21].className += " invalid"; y[22].className += " invalid";
		}
		if (validQues7_7 == false) {
			y[24].className += " invalid"; y[27].className += " invalid"; y[25].className += " invalid"; y[26].className += " invalid";
		}
		if (validQues7_8 == false) {
			y[28].className += " invalid"; y[31].className += " invalid"; y[29].className += " invalid"; y[30].className += " invalid";
		}
		if (validQues7_9 == false) {
			y[32].className += " invalid"; y[35].className += " invalid"; y[33].className += " invalid"; y[34].className += " invalid";
		}
		if (validQues7_10 == false) {
			y[36].className += " invalid"; y[39].className += " invalid"; y[37].className += " invalid"; y[38].className += " invalid";
		}
		if (validQues7_11 == false) {
			y[40].className += " invalid"; y[43].className += " invalid"; y[41].className += " invalid"; y[42].className += " invalid";
		}
		if (validQues7_12 == false) {
			y[44].className += " invalid"; y[47].className += " invalid"; y[45].className += " invalid"; y[46].className += " invalid";
		}
		if (validQues7_13 == false) {
			y[48].className += " invalid"; y[51].className += " invalid"; y[49].className += " invalid"; y[50].className += " invalid";
		}
		if (validQues7_14 == false) {
			y[52].className += " invalid"; y[55].className += " invalid"; y[53].className += " invalid"; y[54].className += " invalid";
		}
		if (validQues7_15 == false) {
			y[56].className += " invalid"; y[59].className += " invalid"; y[57].className += " invalid"; y[58].className += " invalid";
		}
		if (validQues7_16 == false) {
			y[60].className += " invalid"; y[63].className += " invalid"; y[61].className += " invalid"; y[62].className += " invalid";
		}
		if (validQues7_17 == false) {
			y[64].className += " invalid"; y[65].className += " invalid"; y[66].className += " invalid"; y[67].className += " invalid";
		}
	}

	if (slideIndex == 4) {
		valid = validQues8_1 && validQues8_2 && validQues8_3 && validQues8_4 &&
				validQues8_5 && validQues8_6 && validQues8_7 && validQues8_8 &&
				validQues8_9 && validQues8_10 && validQues8_11 && validQues8_12 &&
				validQues8_13 && validQues8_14 && validQues8_15 && validQues8_16 &&
				validQues8_17;
		if (validQues8_1 == false) {
			y[0].className += " invalid"; y[1].className += " invalid"; y[2].className += " invalid"; y[3].className += " invalid";
		}
		if (validQues8_2 == false) {
			y[4].className += " invalid"; y[5].className += " invalid"; y[6].className += " invalid"; y[7].className += " invalid";
		}
		if (validQues8_3 == false) {
			y[8].className += " invalid"; y[9].className += " invalid"; y[10].className += " invalid"; y[11].className += " invalid";
		}
		if (validQues8_4 == false) {
			y[12].className += " invalid"; y[13].className += " invalid"; y[14].className += " invalid"; y[15].className += " invalid";
		}
		if (validQues8_5 == false) {
			y[16].className += " invalid"; y[19].className += " invalid"; y[17].className += " invalid"; y[18].className += " invalid";
		}
		if (validQues8_6 == false) {
			y[20].className += " invalid"; y[23].className += " invalid"; y[21].className += " invalid"; y[22].className += " invalid";
		}
		if (validQues8_7 == false) {
			y[24].className += " invalid"; y[27].className += " invalid"; y[25].className += " invalid"; y[26].className += " invalid";
		}
		if (validQues8_8 == false) {
			y[28].className += " invalid"; y[31].className += " invalid"; y[29].className += " invalid"; y[30].className += " invalid";
		}
		if (validQues8_9 == false) {
			y[32].className += " invalid"; y[35].className += " invalid"; y[33].className += " invalid"; y[34].className += " invalid";
		}
		if (validQues8_10 == false) {
			y[36].className += " invalid"; y[39].className += " invalid"; y[37].className += " invalid"; y[38].className += " invalid";
		}
		if (validQues8_11 == false) {
			y[40].className += " invalid"; y[43].className += " invalid"; y[41].className += " invalid"; y[42].className += " invalid";
		}
		if (validQues8_12 == false) {
			y[44].className += " invalid"; y[47].className += " invalid"; y[45].className += " invalid"; y[46].className += " invalid";
		}
		if (validQues8_13 == false) {
			y[48].className += " invalid"; y[51].className += " invalid"; y[49].className += " invalid"; y[50].className += " invalid";
		}
		if (validQues8_14 == false) {
			y[52].className += " invalid"; y[55].className += " invalid"; y[53].className += " invalid"; y[54].className += " invalid";
		}
		if (validQues8_15 == false) {
			y[56].className += " invalid"; y[59].className += " invalid"; y[57].className += " invalid"; y[58].className += " invalid";
		}
		if (validQues8_16 == false) {
			y[60].className += " invalid"; y[63].className += " invalid"; y[61].className += " invalid"; y[62].className += " invalid";
		}
		if (validQues8_17 == false) {
			y[64].className += " invalid"; y[65].className += " invalid"; y[66].className += " invalid"; y[67].className += " invalid";
		}
	}

	if (slideIndex == 5) {
		valid = validQues9 && validQues10;
		if (validQues9 == false) {
			y[0].className += " invalid";
		}
		if (validQues10 == false) {
			y[5].className += " invalid";
		}
	}

	if (slideIndex == 6) {
		valid = validQues11_1 && validQues11_2 && validQues11_3 && validQues11_4 &&
				validQues11_5 && validQues11_6 && validQues11_7 && validQues11_8 &&
				validQues11_9 && validQues11_10 && validQues11_11;
		if (validQues11_1 == false) {
			y[0].className += " invalid"; y[1].className += " invalid"; y[2].className += " invalid"; y[3].className += " invalid";
		}
		if (validQues11_2 == false) {
			y[4].className += " invalid"; y[5].className += " invalid"; y[6].className += " invalid"; y[7].className += " invalid";
		}
		if (validQues11_3 == false) {
			y[8].className += " invalid"; y[9].className += " invalid"; y[10].className += " invalid"; y[11].className += " invalid";
		}
		if (validQues11_4 == false) {
			y[12].className += " invalid"; y[13].className += " invalid"; y[14].className += " invalid"; y[15].className += " invalid";
		}
		if (validQues11_5 == false) {
			y[16].className += " invalid"; y[19].className += " invalid"; y[17].className += " invalid"; y[18].className += " invalid";
		}
		if (validQues11_6 == false) {
			y[20].className += " invalid"; y[23].className += " invalid"; y[21].className += " invalid"; y[22].className += " invalid";
		}
		if (validQues11_7 == false) {
			y[24].className += " invalid"; y[27].className += " invalid"; y[25].className += " invalid"; y[26].className += " invalid";
		}
		if (validQues11_8 == false) {
			y[28].className += " invalid"; y[31].className += " invalid"; y[29].className += " invalid"; y[30].className += " invalid";
		}
		if (validQues11_9 == false) {
			y[32].className += " invalid"; y[35].className += " invalid"; y[33].className += " invalid"; y[34].className += " invalid";
		}
		if (validQues11_10 == false) {
			y[36].className += " invalid"; y[39].className += " invalid"; y[37].className += " invalid"; y[38].className += " invalid";
		}
		if (validQues11_11 == false) {
			y[40].className += " invalid"; y[43].className += " invalid"; y[41].className += " invalid"; y[42].className += " invalid";
		}
	}

	if (slideIndex == 7) {
		valid = validQues12_1 && validQues12_2 && validQues12_3 && validQues12_4 &&
				validQues12_5 && validQues12_6 && validQues12_7 && validQues12_8 &&
				validQues12_9 && validQues12_10 && validQues12_11;
		if (validQues12_1 == false) {
			y[0].className += " invalid"; y[1].className += " invalid"; y[2].className += " invalid"; y[3].className += " invalid";
		}
		if (validQues12_2 == false) {
			y[4].className += " invalid"; y[5].className += " invalid"; y[6].className += " invalid"; y[7].className += " invalid";
		}
		if (validQues12_3 == false) {
			y[8].className += " invalid"; y[9].className += " invalid"; y[10].className += " invalid"; y[11].className += " invalid";
		}
		if (validQues12_4 == false) {
			y[12].className += " invalid"; y[13].className += " invalid"; y[14].className += " invalid"; y[15].className += " invalid";
		}
		if (validQues12_5 == false) {
			y[16].className += " invalid"; y[19].className += " invalid"; y[17].className += " invalid"; y[18].className += " invalid";
		}
		if (validQues12_6 == false) {
			y[20].className += " invalid"; y[23].className += " invalid"; y[21].className += " invalid"; y[22].className += " invalid";
		}
		if (validQues12_7 == false) {
			y[24].className += " invalid"; y[27].className += " invalid"; y[25].className += " invalid"; y[26].className += " invalid";
		}
		if (validQues12_8 == false) {
			y[28].className += " invalid"; y[31].className += " invalid"; y[29].className += " invalid"; y[30].className += " invalid";
		}
		if (validQues12_9 == false) {
			y[32].className += " invalid"; y[35].className += " invalid"; y[33].className += " invalid"; y[34].className += " invalid";
		}
		if (validQues12_10 == false) {
			y[36].className += " invalid"; y[39].className += " invalid"; y[37].className += " invalid"; y[38].className += " invalid";
		}
		if (validQues12_11 == false) {
			y[40].className += " invalid"; y[43].className += " invalid"; y[41].className += " invalid"; y[42].className += " invalid";
		}
	}

	if (slideIndex == 8) {
		valid = validQues13 && validQues14;
		if (otherQues13) {
			valid = validQues13 && validQues14 && otherTxtQues13;
			if (otherTxtQues13 == false) {
				z[6].className += " invalid";
			}
		}
		if (validQues13 == false) {
			y[0].className += " invalid";
		}
		if (validQues14 == false) {
			y[6].className += " invalid";
		}
	}

	if (slideIndex == 9) {
		valid = validQues15 && validQues16 && validQues17;
		if (validQues15 == false) {
			y[0].className += " invalid";
		}
		if (validQues16 == false) {
			y[3].className += " invalid";
		}
		if (validQues17 == false) {
			y[6].className += " invalid";
		}
	}

	if (valid) {
		document.getElementsByClassName("dot")[slideIndex].className += " finish";
	}

	return valid;
}

function fixStepIndicator(n) {
	var i, x = document.getElementsByClassName("dot");
	for (i = 0; i < x.length; i++) {
		x[i].className = x[i].className.replace(" active", "");
	}

	x[n].className += " active";
}

function validateReview() {
	if (!validateEmpForm()) {
		return false;
	}
	return true;
}

function validateTextbox(fieldId) {
	var text = document.getElementById(fieldId).value;

	if (text === "") {
		return false;
	}

	return true;
}

function validateRadioBtn(fieldName) {
	var radioBtn = document.getElementsByName(fieldName),
		isChecked = false,
		i;

	for (i = 0; i < radioBtn.length; i += 1) {
		if (radioBtn[i].checked) {
			isChecked = true;
			break;
		}
	}

	if (!isChecked) {
		return false;
	}

	return true;
}

function validateOtherRadioBtn(fieldName) {
	var radioBtn = document.getElementsByName(fieldName),
		isOther = false,
		i;

	for (i = 0; i < radioBtn.length; i += 1) {
		if (radioBtn[i].checked && radioBtn[i].value == "Other") {
			isOther = true;
			break;
		}
		else if (radioBtn[i].checked && radioBtn[i].value == "Abroad") {
			isOther = true;
			break;
		}
	}

	if (!isOther) {
		return false;
	}

	return true;
}

function validateCheckbox() {
	var x = document.getElementsByClassName("Slides"),
	inputElements = x[slideIndex].getElementsByTagName("input");

	for (var i = 0; i < inputElements.length; i++) {
		if (inputElements[i].type == "checkbox") {
			if (inputElements[i].checked) {
				return true;
			}
		}
	}
	return false;
}

function validateOtherCheckbox() {
	var x = document.getElementsByClassName("Slides"),
	inputElements = x[slideIndex].getElementsByTagName("input");

	for (var i = 0; i < inputElements.length; i++) {
		if (inputElements[i].type == "checkbox") {
			if (inputElements[i].checked) {
				if (inputElements[i].value == "other") {
					return true;
				}
			}
		}
	}
	return false;
}

function validateSelectOptions(fieldId) {
	var optionSelect = document.getElementById(fieldId),
		valOption = optionSelect.options[optionSelect.selectedIndex].value;

	if (valOption == 0) {
		return false;
	}
	return true;
}

function validateOtherSelectOption(fieldId) {
	var optionSelect = document.getElementById(fieldId),
		valOption = optionSelect.options[optionSelect.selectedIndex].value;

	if (valOption == "other") {
		return true;
	}

	return false;
}