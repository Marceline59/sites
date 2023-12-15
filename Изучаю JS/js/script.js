'use strict';



/*
function aclean(arr){
	let map = new Map();

	for (let word of arr) {
		let sorted = word.toLowerCase().split("").sort().join("");
		map.set(sorted, word);
	}

	return Array.from(map.values());
}

let arr = ["nap", "teachers", "cheaters", "PAN", "ear", "era", "hectares"];

alert( aclean(arr) );
*/
/*
function unique(arr) {
  let set = Array.from(new Set(arr));
  return set;
}

let values = ["Hare", "Krishna", "Hare", "Krishna",
  "Krishna", "Krishna", "Hare", "Hare", ":-O"
];

alert( unique(values) );
*/
/*
function unique(arr){
	let result = [];

  for (let str of arr) {
    if (!result.includes(str)) {
      result.push(str);
    }
  }
}

let strings = ["кришна", "кришна", "харе", "харе",
  "харе", "харе", "кришна", "кришна", ":-O"
];

alert( unique(strings) );
*/
/*
function getAverageAge(users){
	let averageAge = users.reduce((sum, user) => sum + user.age, 0);
	return averageAge;
}

let vasya = { name: "Вася", age: 25 };
let petya = { name: "Петя", age: 30 };
let masha = { name: "Маша", age: 29 };

let arr = [ vasya, petya, masha ];

alert( getAverageAge(arr) );
*/
/* 
//Замечательное решение
//function shuffle(array) {
//  for (let i = array.length - 1; i > 0; i--) {
//    let j = Math.floor(Math.random() * (i + 1));
//    [array[i], array[j]] = [array[j], array[i]];
//  }
//}

//Простое, но плохое решение
//function shuffle(arr) {
//	arr.sort(() => Math.random() - 0.5);
//}

let arr = [1, 2, 3];

shuffle(arr);

shuffle(arr);

shuffle(arr);
/*
/*
function sortByAge(arr){
	arr.sort((a, b) => a.age > b.age ? 1 : -1);
}

let vasya = { name: "Вася", age: 25 };
let petya = { name: "Петя", age: 30 };
let masha = { name: "Маша", age: 28 };

let arr = [ vasya, petya, masha ];

sortByAge(arr);

alert(arr[0].name);
alert(arr[1].name);
alert(arr[2].name);
*/
/*
let vasya = { name: "Вася", surname: "Пупкин", id: 1 };
let petya = { name: "Петя", surname: "Иванов", id: 2 };
let masha = { name: "Маша", surname: "Петрова", id: 3 };

let users = [ vasya, petya, masha ];

let usersMapped = users.map(user => ({
	fullName: `${user.name} ${user.surname}`,
	id: user.id
}));

alert( usersMapped[0].id )
alert( usersMapped[0].fullName )
*/
/*
let vasya = { name: "Вася", age: 25 };
let petya = { name: "Петя", age: 30 };
let masha = { name: "Маша", age: 28 };

let users = [ vasya, petya, masha ];

let names = users.map(item => item.name);

alert( names );
*/
/*
function Calculator() {
  
    this.methods = {
      "-": (a, b) => a - b,
      "+": (a, b) => a + b
    };
  
    this.calculate = function(str) {
  
      let split = str.split(' '),
        a = +split[0],
        op = split[1],
        b = +split[2]
  
      if (!this.methods[op] || isNaN(a) || isNaN(b)) {
        return NaN;
      }
  
      return this.methods[op](a, b);
    }
  
    this.addMethod = function(name, func) {
      this.methods[name] = func;
    };
  }

let powerCalc = new Calculator;
powerCalc.addMethod("*", (a, b) => a * b);
powerCalc.addMethod("/", (a, b) => a / b);
powerCalc.addMethod("**", (a, b) => a ** b);

let result = powerCalc.calculate("2 ** 3");
alert( result );
*/
/*
function copySorted(arr) {
	return arr.slice().sort();
}

let arr = ["HTML", "JavaScript", "CSS"];

let sorted = copySorted(arr);

alert( sorted ); // CSS, HTML, JavaScript
alert( arr ); // HTML, JavaScript, CSS (без изменений)
*/
/*
let arr = [5, 2, 1, -10, 8];

arr.sort(function arrSort(a, b) {
	return (b - a);
})

alert( arr ); // 8, 5, 2, 1, -10
/*
/*
function filterRangeInPlace(arr, a, b){
	for (let i = 0; i < arr.length; i++) {
		let perem = arr[i];

		if (a > perem || perem > b) {
			arr.splice(i, 1);
			i--;
		}
	}
}

let arr = [5, 3, 8, 1, 8, 3, 9, 2, 10];

filterRangeInPlace(arr, 1, 4);

alert( arr );
*/
/*
function filterRange(arr, a, b) {
	let f_arr = arr.filter(item => (a <= item && item <= b));
	return f_arr;
}

let arr = [4, 3, 8, 1];
let filtered = filterRange(arr, 1, 4);

alert( filtered ); // 3,1 (совпадающие значения)
alert( arr ); // 5,3,8,1 (без изменений)
*/
/*
function camelize(str) {
	return str
		.split('-')
		.map(
			(word, index) => index == 0 ? word : word[0].toUpperCase() + word.slice(1)
			)
    .join('');
}

alert(camelize("background-color"));
alert(camelize("list-style-image"));
alert(camelize("-webkit-transition"));
*/
/*
let arr = [ 15, 5, 1 ];

arr.sort( function (a, b) { return a-b; });

alert(arr);
*/
/*
function getMaxSubSum(arr) {
  let maxSum = 0;
  let partialSum = 0;

  for (let item of arr) {
    partialSum += item;
    maxSum = Math.max(maxSum, partialSum);
    if (partialSum < 0) partialSum = 0;
  }

  return maxSum;
}

alert( getMaxSubSum([-1, 2, 3, -9]) ); // 5
alert( getMaxSubSum([-1, 2, 3, -9, 11]) ); // 11
alert( getMaxSubSum([-2, -1, 1, 2]) ); // 3
alert( getMaxSubSum([100, -9, 2, -3, 5]) ); // 100
alert( getMaxSubSum([1, 2, 3]) ); // 6
alert( getMaxSubSum([-1, -2, -3]) ); // 0
*/
/*
function sumInput() {
	
	let numbers = [];
	
	while (true) {
		
		let num = prompt("Введите число:", 0);

		if (num === "" || num === null || !isFinite(num)) break;

		numbers.push(+num);
	}
	let sum = 0;
	for (let number in numbers) {
		sum += number;
	}
	return sum;
}

alert( sumInput() );
*/
/*
let styles = ["Джаз", "Блюз"];
styles.push("Рок-н-ролл");
styles[Math.floor((styles.length - 1) / 2)] = "Классика";
alert(styles.shift());
styles.unshift("Рэп", "Регги");

alert(styles);
*/
/*
function extractCurrencyValue(str) {
	if (str.includes("$") || str.includes("Р")) {
			return +str.slice(1);
	} else { return +str };
}

alert( extractCurrencyValue('$120') === 120 );
*/
/*
function truncate(str, maxlength) {
	if (str.length > maxlength) {
		return (str.slice(0, maxlength-1) + "...");
	} else { return str; }
}

let message = prompt("Your message:", "");
alert(truncate(message, 20));
*/
/*
function checkSpam (str) {
	let newstr = str.toLowerCase();

	if (newstr.includes("xxx") || newstr.includes("viagra")){
		return true;
	} else { return false; }
}

let message = prompt("Your message:", "");
alert (checkSpam(message));
*/
/*
function ucFirst(str) {
	let newstr = str[0].toUpperCase() + str.slice(1);
	return newstr;
}

alert (ucFirst("squack"));
*/
/*
function randomInteger(min, max) {
	let rand = min + Math.random() * (max + 1 - min);
	return Math.floor(rand);
}

alert( randomInteger(1, 5) );
alert( randomInteger(1, 5) );
alert( randomInteger(1, 5) );
*/
/*
function random(min, max) {  //ошибка
	let rand;
	while (rand == undefined || rand < min || rand > max) {
		rand = Math.random() * 10;
	}

	return rand;
}

alert ( random(1, 10) );
*/
/*
function Accumulator(startingValue) {
	this.value = startingValue;
	this.read = function() {
		this.value += +prompt("Number?", 0);
	};
}

let accumulator = new Accumulator(1);

accumulator.read();
accumulator.read();

alert(accumulator.value);
*/
/*
function Calculator(){
	this.read = function() {
		this.a = +prompt("First num?", 0);
		this.b = +prompt("Second num?", 0);
	};

	this.sum = function() {
		return this.a + this.b;
	};

	this.mul = function() {
		return this.a * this.b;
	};

}

let calculator = new Calculator();
calculator.read();

alert( "Sum=" + calculator.sum() );
alert( "Mul=" + calculator.mul() );*/
/*
let ladder = {
  step: 0,
  up() {
    this.step++;
    return this;
  },
  down() {
    this.step--;
    return this;
  },
  showStep: function() { // показывает текущую ступеньку
    alert( this.step );
  	return this;
  }
};

ladder.up().up().down().showStep().down().showStep();
*/
/*
let calculator = {
  read() {
  	this.a = +prompt("First number?","");
  	this.b = +prompt("Second number?","");
  },
  sum() {
  	return (this.a + this.b);
  },
  mul() {
  	return (this.a * this.b);
  },
};

calculator.read();
alert( calculator.sum() );
alert( calculator.mul() );
*/
/*
function multiplyNumeric(obj) {
	for (let key in obj) {
		if (typeof(obj[key]) == "number") {
			obj[key] *= 2;
		}
	}
}

let menu = {
  width: 200,
  height: 300,
  title: "My menu"
};

multiplyNumeric(menu);

for (let key in menu) {
	alert (key);
	alert (menu[key]);
}
*/
/*
let user = {};
user.name = "John";
user.surname = "Smith";
user.name = "Pete";
delete user.name;


function isEmpty(obj) {
	for (let key in obj) {
		return false;
	}
	return true;
}
*/
/*
let schedule = {};

alert( isEmpty(schedule) ); // true

schedule["8:30"] = "get up";

alert( isEmpty(schedule) ); // false
*/
/*
let sum = 0;
let salaries = {
	John: 100,
 	Ann: 160,
  	Pete: 130
}
if (isEmpty(salaries)) {}
else 
	for (let key in salaries) {
		sum += salaries[key];
	}

alert(sum);
*/
