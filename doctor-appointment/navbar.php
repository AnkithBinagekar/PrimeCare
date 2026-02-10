	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  		<!-- Brand -->
  		<a class="navbar-brand" href="#"><?php echo $_SESSION['patient_name']; ?></a>

  		<!-- Links -->
	  	<ul class="navbar-nav">
	    	<li class="nav-item">
	      		<a class="nav-link" href="profile.php">Profile</a>
	    	</li>
	    	<li class="nav-item">
	      		<a class="nav-link" href="pc_dashboard.php">Book Appointment</a>
	    	</li>
	    	<li class="nav-item">
	      		<a class="nav-link" href="pc_appointment.php">My Appointment</a>
	    	</li>
	    	<li class="nav-item">
	      		<a class="nav-link" href="pc_login.php">Logout</a>
	    	</li>
	  	</ul>
	</nav>