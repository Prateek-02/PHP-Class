<!-- 1 -->

<?php
    // $customerType = readline("Enter the type of customer: ");
    // $purchaseAmount = readline("Enter amount: ");
    // $finalAmount;
    // if($customerType == "regular" && $purchaseAmount > 500){
    //     $finalAmount = $purchaseAmount - ($purchaseAmount*0.20);
    // }

    // else if($customerType == "regular" && $purchaseAmount <= 500){
    //     $finalAmount = $purchaseAmount - ($purchaseAmount*0.10);
    // }

    // else if($customerType != "regular" && $purchaseAmount >= 500){
    //     $finalAmount = $purchaseAmount - ($purchaseAmount*0.05);
    // }
    // else{
    //     $finalAmount = $finalAmount;
    // }

    // echo "Final Amount is: ",$finalAmount;
?>

<!-- 2 -->
<?php
/*
    $day = readline("Input day: ");
    $month = readline("Input month: ");
    $year = readline("Input year: ");

    if( ($year > 0) && ($month >= 1 && $month<=12)){
        switch($month){
            case 1:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 2:
                if($year%4==0){
                    if($day > 0 && $day <=29){
                        echo "Valid date";
                    }
                    else{
                        echo "Invalid date";
                    }
                }
                else{
                    if($day > 0 && $day <=28){
                        echo "Valid date";
                    }
                    else{
                        echo "Invalid date";
                    }
                }
                break;
            case 3:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 4:
                if($day > 0 && $day<=30){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 5:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 6:
                if($day > 0 && $day<=30){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 7:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 8:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 9:
                if($day > 0 && $day<=30){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 10:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 11:
                if($day > 0 && $day<=30){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            case 12:
                if($day > 0 && $day<=31){
                    echo "Valid Date";
                }
                else{
                    echo "Invalid date";
                }
                break;
            default:
                echo "Enter a valid month";
                break;
        }
    }
    else{
        echo "Invalid format";
    }
*/
?>


<!-- 3 -->

<?php
    $income = readline("Enter your income: ");
    $age = readline("Enter your age: ");
    $tax;

    if($income < 10000){
        echo "No tax applied";
        $tax = 0;
    }

    else if($income >= 10000 && $income <=20000){
        if($age<65){
            echo "10% tax is applied\n";
            $tax = $income*(0.10);
        }
        else{
            echo "5% tax is applied\n";
            $tax = $income*(0.05);
        }
    }
    else if($income > 20000){
        if($age<65){
            echo "20% tax is applied\n";
            $tax = $income*(0.20);
        }
        else{
            echo "15% tax is applied\n";
            $tax = $income*(0.15);
        }
    }

    echo "Tax to be paid is: ",$tax;

?>