?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:

// Calculating annual salary after taxes.
$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1] + $incomeSegments[2][0] * $incomeSegments[2][1]);

// Calculating annual income after the Social Security tax.
$annualIncome = $netIncome - $socialSecurity; 
echo "Annual income after taxes:\n$annualIncome\n";

// Calculating annual expenses 
$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];
echo "\n";
echo "Annual income after annual expenses:\n$annualIncome";

// Calculating Monthly Income 
$monthlyIncome = $annualIncome / 12;
echo "\n";
echo "\nMonthly income before monthly expenses:\n$monthlyIncome\n";

// Calculating monthly expenses
$monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];
echo "\n Monthly Income after monthly expenses: \n$monthlyIncome\n";

// Calculating weekly income 
$weeklyIncome = $monthlyIncome / 4.33;
echo "\n $weeklyIncome";

// A weekly expenses array 
$weeklyExpenses = ["gas" => 25, 
"food" => 90, 
"entertainment" => 47];

// Calculating weekly expenses 
$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];$weeklyIncome -= $weeklyExpenses["entertainment"];

echo "\nWeekly Income after weekly expenses:\n$weeklyIncome";

//Calculate a year of savings 
$savings = $weeklyIncome * 52;
echo "\nYou can save $savings in a year based on your annual income and expenses.";
