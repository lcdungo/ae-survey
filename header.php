<?php require_once 'controllers/logout.php'; ?>

<body onload="showSlides(0)">
<div class="main-container">
	<header>
		<div class = "logos">
			<img src = "images/UP_seal.png" id="up">		
			<img src = "images/CS_logo.png" id="cs">	
		</div>		
		<div class = "banner_lines">	
			<h3>Department of Mathematics and Computer Science</h3>
			<h4>College of Science</h4>
			<h6>University of the Philippines Baguio</h6>
		</div>
		<div class="log_out">
			<br>
			<img src = "images/logout.png" onclick = "document.getElementById('logoutModal').style.display='block'">
		</div>
		<div id="logoutModal" class="modal">
			<div class="modal-content" style="width:50%;">
				<div class="modal-header">
					<h4 style="color:#840038; text-transform:uppercase;">You are about to log out of the system.</h4>
				</div>
				<div class="modal-body">
					<p style="color:black;">(Click outside of the prompt to cancel.)</p>
				</div>
				<div class="modal-footer">		
					<div class="logout-modal">
						<a href="header.php?logout=1" class="logout" title="Continue">Continue</a>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/review.js"></script>
		<script type="text/javascript" src="js/logout.js"></script>
	</header>