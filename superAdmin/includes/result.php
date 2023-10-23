
<?php
$staffId = $_SESSION['staffId'];
$query = mysqli_query($con,"select * from tbladmin where staffId='$staffId'");
$row = mysqli_fetch_array($query);
$staffFullName = $row['firstName'].' '.$row['lastName'];
?>
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-title">Results and Grading</li>
                      <li class="menu-item-has-children dropdown <?php if($page=='result'){ echo 'active'; }?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Result</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i> <a href="studentList.php">Compute GPA</a></li>
                            <li><i class="fa fa-plus"></i> <a href="studentList2.php">Compute CGPA</a></li>
                            <li><i class="fa fa-plus"></i> <a href="studentList3.php">View/Print Result</a></li>                     
                            <li><i class="fa fa-plus"></i> <a href="gradingCriteria.php">View Grading Criteria</a></li>

                        </ul>
                    </li>

                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>