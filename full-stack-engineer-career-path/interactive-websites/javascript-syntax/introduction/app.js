// This is a constant variable to store the forecast for today weather in Kelvin.
const kelvin = 0;
// A constant variable to store kelvin variable in celsius. 
const celsius = kelvin - 273;
// Utilizing the fahrennheit formula to convert celsius into fahrenheit.  
let fahrenheit = celsius * (9/5) + 32;
// Using Math.floor to round the fahrenheit variable down to the nearest temperature.
fahrenheit = Math.floor(fahrenheit);
console.log(`The temperature is ${fahrenheit} degrees Fahrenheit.`);

let newton = celsius * (33/100);
newton = Math.floor(newton);
console.log(`The temperature is ${newton} degrees Newton.`);
