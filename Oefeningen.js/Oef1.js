var fruits = ["banana", "apple", "pie", "strawberry", "kiwi"];

fruits.push();

fruits.pop();

fruits.shift();

fruits.unshift("peer");

console.log(fruits);
var newArray = fruits.slice(1,4);
console.log(newArray);

fruits.splice(1,4);

fruits.splice(1,2);

fruits.concat("apple");

fruits.join(',');

var lengthFruits = fruits.length;
console.log(lengthFruits);


console.log( Array.isArray(fruits) );

fruits.indexOf("peer");

fruits.includes("banana");


//console.log(fruits);