<?php
function checkEligibilityToVote()
{
    $age = 20;
    $myname = "Bonga Charles Beltrone";
    if($age >=18)
    {
        echo "$myname You are eligible to vote";
    }
    else{
        echo "$myname You are not eligible to vote";
    }
}
//checkEligibilityToVote();

//garding
function gradingsytem()
{
    $marks=96;
if($marks >=80)
{
    $grade = "A (Plain)";
}
else if($marks >=75)
{
    $grade = "A- (Plain)";
}
else if($marks >=65)
{
    $grade = "B+";
}
else if($marks >=60)
{
    $grade = "B (Plain)";
}
else if($marks >=50)
{
    $grade = "c+";
}
else {
    $grade = "FAIL";
}
echo "Your score is: $grade";
}
gradingsytem();
?>