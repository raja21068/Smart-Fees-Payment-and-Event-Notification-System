
<?php
include("Database.php");
$facMember_id=mysql_real_escape_string($_GET['facMember_id']);
				$emp_query=mysql_query("SELECT `COURSE_TITLE`,`COURSE_NO`,COURSE_DISTRIBUITION_ID FROM `course_distribution` WHERE `MEMBER_ID_1`=$facMember_id");
                        ?> 
						
					<?php
						
						while($row=mysql_fetch_array($emp_query)){
						
						$COURSE_DISTRIBUITION_ID=$row['COURSE_DISTRIBUITION_ID'];
						$COURSE_TITLE=$row['COURSE_TITLE'];
						echo("<option value=$COURSE_DISTRIBUITION_ID>$COURSE_TITLE $COURSE_NO </option>");
						}
						

						
						
						?>

                       