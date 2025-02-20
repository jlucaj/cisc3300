// Question 6 
const cats = [
    {
        name: 'Charlie',
        adoptionStatus: 'available'
    },
    {
        name: 'Lily',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Coco',
        adoptionStatus: 'available'
    },
    {
        name: 'Oreo',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Luna',
        adoptionStatus: 'available'
    },
    {
        name: 'Milo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lola',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Leo',
        adoptionStatus: 'available'
    },
    {
        name: 'Willow',
        adoptionStatus: 'available'
    },
    {
        name: 'Bella',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Max',
        adoptionStatus: 'available'
    },
    {
        name: 'Cleo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lucy',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Daisy',
        adoptionStatus: 'available'
    },
];

availableCats = []; 
for (let i = 0; i < cats.length; i++) {
    if (cats[i].adoptionStatus === 'available') {
        availableCats.push(cats[i].name); 
    }
}

let availableCatsStr = "The available cats are: " + availableCats.join(" and ") + "!"; 
console.log(availableCatsStr); 

// Question 7 
const random = Math.random() * 10; 
const ternary = random > 5 ? "greater than five!" : "less than five!";  
console.log(random); 
console.log(ternary); 

// Question 8 
const cat = { name: "Pinecone", age: 13, type: 'Munchkin', cuteness: 9001 };

for (const i in cat) {
    console.log(i + ": " + cat[i]); 
}

// Question 9 
if ('1' == 1) {
    console.log("== evaluates to true if value is equal after type conversion"); 
}

if ('1' === 1) {
    console.log("this statement will not run");
} else console.log("=== evaluates to false if type and/or value are inequal");

// Question 10 
cuteCats = cats.map(cuteCat => cuteCat.name + " is cute!"); 
console.log(cuteCats); 
