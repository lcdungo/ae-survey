var modal = document.getElementById('reviewModal');
var modalBtn = document.getElementById('reviewBtn');

modalBtn.addEventListener('click', openModal);
window.addEventListener('click', clickOutside);

function openModal(){
	modal.style.display = 'block';
}

function clickOutside(e){
	if(e.target == modal){
		modal.style.display = 'none';
	}
}