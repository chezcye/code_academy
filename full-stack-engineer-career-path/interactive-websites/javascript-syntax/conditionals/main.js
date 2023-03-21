// Utilizing Math.random, and Math.floor to ensure we have return whole numbers from 0 to 999. 
let raceNumber = Math.floor(Math.random() * 1000);
// Utilizing a boolean value to set registeredEarly variable. 
let registeredEarly =  false;
// Set as the runner's age and store in the runnerAge variable. 
let runnerAge = 18;
// A condition statement to verify the runner is a adult AND registered early. 
 if (runnerAge > 18 && registeredEarly === true ) {
  // Set and add 100 to their raceNNumber. 
   console.log(raceNumber += 100);
  // A condition statement that log for runners over 18 and did not reigeter early their race time and race number.
 } else if (runnerAge > 18 && registeredEarly != true){
   console.log(`Your race will start at 11:00 am. Your race number is: ${raceNumber}`);
 // A condition statement that will log for runners under 18 their race time and race number. 
 } else if (runnerAge < 18){
   console.log(`Your race will start at 12:30pm. Your race number ${raceNumber}`);
 } else {
   console.log('You need to go see the registration desk.');
 }
// A condition statement that will log for runners over 18 and registered early their race time and race number . 
 if (runnerAge > 18 && registeredEarly === true){
   console.log(`Your race will start at 9:30am. Your race number is: ${raceNumber}`);
 }
