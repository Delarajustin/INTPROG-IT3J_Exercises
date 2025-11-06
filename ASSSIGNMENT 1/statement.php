Code
<?php
$score = 75;
if ($score >= 60) {
echo "Student passed the exam!\n";
}
$attendance = 85;
if ($attendance >= 75) {
echo "Good attendance. Eligible for final exam.\n";
} {
echo "Low attendance. Requires special permission for exam.\n";
}
$marks = 82;
if ($marks >= 90) {
echo "Grade: A (Excellent)\n";
} elseif ($marks >= 80) {
echo "Grade: B (Very Good)\n";
} elseif ($marks >= 70) {
echo "Grade: C (Good)\n";
} elseif ($marks >= 60) {
echo "Grade: D (Satisfactory)\n";
} else {
echo "Grade: F (Needs Improvement)\n";
}
$day = "Tuesday";
switch ($day) {
case "Monday":
case "Wednesday":
case "Friday":
echo "Today has System Integration and Human Computer Interaction classes\n";
break;
case "Tuesday":
case "Thursday":
echo "Today has Interactive Programming classes\n";
break;
default:
echo "No classes today - it's weekend!\n";
}
?>