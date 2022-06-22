/* Create an algorithm that runs through a one-dimensional array containing letters and numbers: [ “a”, 10, “b”, “hola”, 122, 15]
Get an array containing just the letters
Get an array containing just the numbers
Get the highest number from the array above */


// Get an array containing just the letters
let array = [ "a", 10, "b", "hola", 122, 15];

let array2 = array.filter(
    item => typeof(item) == "string"
);
console.log(array2)

// Get an array containing just the numbers
let array3 = array.filter(
    item => typeof(item) == "number"
);
console.log(array3)
// Get an array containing just the numbers
let max = Math.max(...array2);

console.log("El número más grande es ::", max)



