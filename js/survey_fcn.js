$(document).ready(function() {
	// ques 1 other option display textbox
    $("input[name='ques1']").change(function() {
        if ($(this).val() == "Other") {
            $("#ques1_otxt").show();
        } else if (($(this).val() == "Public") || ($(this).val() == "Private")) {
            $("#ques1_otxt").hide();
        }
    });

    // ques 2 abroad option display ques2.1
    $("input[name='ques2']").change(function() {
        // abroad option to display question # 2.1
        if ($(this).val() == "Abroad") {
            $("#q2_1").show();
        } else if ($(this).val() == "Philippines") {
            $("#q2_1").hide();
        }
    });
});

// display password login
function showPass() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

// for other option in checkbox to display textbox
function show_hide(other) {
    var other_txt = document.getElementById('ques13_otxt');
    other_txt.style.display = other.checked ? "inline":  "none";
}

// for select to display textbox
function other_txt() {
    var selectBox = document.getElementById("ques3");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    if (selectedValue == "other") {
        $('#ques3_other').show();
    } else {
        $('#ques3_other').hide();
    }
}

// declare subregions under each region
var subreg_in_reg = { "Africa": ["Northern Africa", "Eastern Africa", "Middle Africa",
				"Southern Africa", "Western Africa"],
	"America": ["North America", "Central America", "South America"],
	"Asia": ["Central Asia", "Eastern Asia", "South Asia", "Southeast Asia",
			"West Asia"],
	"Europe": ["Eastern Europe", "Northern Europe", "Southern Europe",
				"Western Europe"],
	"Oceania": ["Australia and New Zealand", "Melanesia, Micronesia, Polynesia"]
};

// show subregions under region
function make_subreg(value) {
	if (value.length == 0) {
		document.getElementById("ques2_1_2").innerHTML = "<option></option>";
	}
	else {
		var subreg_options = "";
		for (subreg_id in subreg_in_reg[value]) {
			subreg_options+= "<option>" + subreg_in_reg[value][subreg_id] + "</option>";
		}
		document.getElementById("ques2_1_2").innerHTML = subreg_options;
	}
}

// for select to display textbox alum survey #5c
function other_txt5() {
    var selectBox = document.getElementById("ques5c");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    if (selectedValue == "other") {
        $('#ques5c_other').show();
    } else {
        $('#ques5c_other').hide();
    }
}