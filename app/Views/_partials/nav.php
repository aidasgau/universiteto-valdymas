<ul class="nav nav-pills">
<li class="nav-item">
    <a class="nav-link<?=(get_controller()=='home')?' active':''?>" aria-current="page" href="home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link<?=(get_controller()=='courses')?' active':''?>" aria-current="page" href="courses">Courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link<?=(get_controller()=='enrollments')?' active':''?>" href="enrollments">Enrollments</a>
  </li>
  <li class="nav-item">
    <a class="nav-link<?=(get_controller()=='grades')?' active':''?>" href="grades">Grades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link<?=(get_controller()=='instructors')?' active':''?>" href="instructors">Instructors</a>
  </li>
  <li class="nav-item">
    <a class="nav-link<?=(get_controller()=='students')?' active':''?>" href="students">Students</a>
  </li>
</ul>
<?php