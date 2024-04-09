// Magic 8 Ball program 
// This program is designed to answer "yes" or "no" questions with a different fortune each time.  

let player = "T'Cheznavia"
// Question for this program to answer 
let question = "Will I buy a car in 2024?"

// Generate a random number from  1 through 9 
let randomNumber = Int.random(in: 1...9)
print (randomNumber) 

// A empty string to store the different fortune answer
let eightball: String

// a switch statement to hold different fortune answers based on a selected random number.  
switch randomNumber {
  case 1: 
  eightball = "Yes - definitely"
  case 2:
  eightball = "It is decidedly so"
  case 3:
  eightball = "Without a doubt"
  case 4:
  eightball = "Reply hazy, try again"
  case 5: 
  eightball = "Ask again later"
  case 6: 
  eightball = "Better not tell you now"
  case 7:
  eightball = "My sources say no"
  case 8: 
  eightball = "Outllok not so good"
  case 9: 
  eightball = "very doubtful"
  default:
  eightball = "Error"
}
// 
 player == "" ?
  print("Question: \(question)") :
  print("\(player) asks: \(question)")

print("Magic 8 Ball's answer: \(eightball)")
