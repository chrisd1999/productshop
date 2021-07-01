<?php function validatePrice($price)
{
    return (floatval($price) == 0) or $price < 0;
};
