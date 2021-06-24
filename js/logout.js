var modal = document.getElementById('logoutModal');

window.addEventListener('click', clickOutside);

function clickOutside(e){
	if(e.target == modal){
		modal.style.display = 'none';
	}
}