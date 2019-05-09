<?php
$score = 105;

if ($score >= 80 && $score <= 100)
{
    echo "Grade A";
}
elseif ($score >= 70 && $score <= 79)
{
    echo "Grade B";
}
elseif ($score >= 60 && $score <= 69)
{
    echo "Grade C";
}
elseif ($score >= 50 && $score <= 59)
{
    echo "Grade D";
}
elseif ($score > 100 || $score < 0)
{
    echo "Score Invalid";
}
else
{
    echo "Grade F";
}
