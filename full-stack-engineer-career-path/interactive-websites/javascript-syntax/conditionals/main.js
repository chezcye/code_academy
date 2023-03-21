let raceNumber = Math.floor(Math.random() * 1000);
let registeredEarly =  false;
let runnerAge = 18;
 if (runnerAge > 18 && registeredEarly === true ) {
   console.log(raceNumber += 100);
 } else if (runnerAge > 18 && registeredEarly != true){
   console.log(`Your race will start at 11:00 am. Your race number is: ${raceNumber}`);
 } else if (runnerAge < 18){
   console.log(`Your race will start at 12:30pm. Your race number ${raceNumber}`);
 } else {
   console.log('You need to go see the registration desk.');
 }

 if (runnerAge > 18 && registeredEarly === true){
   console.log(`Your race will start at 9:30am. Your race number is: ${raceNumber}`);
 }
