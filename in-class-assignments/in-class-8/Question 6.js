// Question 1
let string = "Hello World ";
console.log(string + 1); 
// returns "Hello World 1" because JS performs type coercion and concatenates the string with the int 

// Question 2
console.log(Number(true)); // returns 1 b/c any num that is not zero is treated as true in JS 
console.log(Number(false)); // returns 0 b/c 0 is treated as false in JS 

// Question 3
console.log(Boolean(1)); // returns true b/c any num that is not zero is treated as true in JS 
console.log(Boolean(0)); // returns false b/c 0 is treated as false in JS 
console.log(Boolean("0")); // returns true b/c the string is not empty