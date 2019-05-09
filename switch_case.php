<?php
$size = "L";
switch (strtolower($size))
{
    case "s":
        echo "Small Size";
        break;
    case "m":
        echo "Medium Size";
        break;
    case "l":
        echo "Large Size";
        break;
    default:
        echo "Unknown Size";
        break;
}
