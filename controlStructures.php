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
    // $income = readline("Enter your income: ");
    // $age = readline("Enter your age: ");
    // $tax;

    // if($income < 10000){
    //     echo "No tax applied";
    //     $tax = 0;
    // }

    // else if($income >= 10000 && $income <=20000){
    //     if($age<65){
    //         echo "10% tax is applied\n";
    //         $tax = $income*(0.10);
    //     }
    //     else{
    //         echo "5% tax is applied\n";
    //         $tax = $income*(0.05);
    //     }
    // }
    // else if($income > 20000){
    //     if($age<65){
    //         echo "20% tax is applied\n";
    //         $tax = $income*(0.20);
    //     }
    //     else{
    //         echo "15% tax is applied\n";
    //         $tax = $income*(0.15);
    //     }
    // }

    // echo "Tax to be paid is: ",$tax;

?>


<!-- 4 -->

<?php
    // $mealType  = readline("Enter your meal type: ");

    // switch($mealType){
    //     case "Breakfast":
    //         echo "Select any food Item: \n";
    //         echo "1. Paratha";
    //         echo "2. Idli";
    //         echo "3. Sandwich";
    //         echo "4. Cereal";
    //         switch($foodItem){
    //             case 1:
    //         }
    //         break;
    //     case "Lunch":
    //         "Select any food Item: \n";
    //         echo "1. Dal Rice";
    //         echo "2. Rajah Rice";
    //         echo "3. Thali";
    //         echo "4. Fired Rice";
    //         break;
    //     case "Dinner":
    //         echo "Select any food Item: \n";
    //         echo "1. abcd";
    //         echo "2. efgh";
    //         echo "3. ijkl";
    //         echo "4. mnop";
    //         switch($foodItem){

    //         }
    //         break;
        
    //     case "Snack":
    //         echo "Select any food Item: \n";
    //         echo "1. Chai pakoda";
    //         echo "2. Noodles";
    //         echo "3. Pav Bhaji";
    //         echo "4. Poha";
    //         $foodItem = intval(readline());
    //         switch($foodItem){

    //         }
    // }
?>


<!-- 5 -->

<?php
    $type = readline("Residential or Commercial: ");
    $utility = readline("Utility: ");
    $bill;

    if($type == "Residential"){
        if($utiltiy >=0 && $utility <=100){
            $bill = $utility * 50.5;
        }
    }
?>