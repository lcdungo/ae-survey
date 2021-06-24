<nav class="sidebar">
    <a href="index.php">Users</a>
    <a href="user_reg.php">Register Users</a>
    <button class="drop-bttn">Reports<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-menu">
        <button class="drop-bttn">Raw Data<i class="fa fa-caret-down"></i></button>
        <div class="dropdown-menu">
            <a href="alum_raw.php">Alumni Survey</a>
            <a href="emp_raw.php">Employer Satisfaction Survey</a>
        </div>
        <button class="drop-bttn">Tally<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-menu">
                <a href="alum_tables.php">Alumni Survey</a>
                <a href="emp_tables.php">Employer Satisfaction Survey</a>
            </div>
        <button class="drop-bttn">Charts<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-menu">
                <a href="alum_charts.php">Alumni Survey</a>
                <a href="emp_charts.php">Employer Satisfaction Survey</a>
            </div>
    </div>
    <a href="contact_emp.php">Employer Contacts</a>
</nav>
        <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("drop-bttn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
          } else {
          dropdownContent.style.display = "block";
          }
          });
        }
        </script>