// 1

var a1 = 5;
var b1 = 10;
if(a1>b1){
    console.log(a1+" est plus grand que "+b1);
}else if (a1<b1){
    console.log(b1+"est plus grand que "+a1);
}else{
    console.log(a1+" egal"+b1);
}

// 2

var a2 = 8;
var b2 = 12;
if(a2<b2){
    console.log(a2+" est plus petit que "+b2);
}else if (a2>b2){
    console.log(b2+"est plus petit que "+a2);
}else{
    console.log(a2+" egal"+b2);
}

// 3

var a3 = 3;
var b3 = 7;
var temp3 = 0;

var temp3 = b3;
var b3 = a3;
var a3 = temp3;

// 4

var a4 = 23;
var b4 = 34;
var add4 = a4+b4;

// exo 5

console.log(Math.floor((Math.random() * 100) + 1));

// exo 6

console.log(Math.floor((Math.random() * 5) + 6));

// exo 7

function addition(x7, y7) {

    var result7 = x7 + y7;

    return result7;
  }

 var a7 = 52;
 var b7 = 21;

 var resultat7 = addition(a7, b7);

 console.log(resultat7);

//  exo 8

var rand8 = Math.floor((Math.random() * 100) + 1);

if (rand8<50) {

    console.log(rand8, " donc je suis nul");
    }

    else {

        console.log(rand8, " donc je suis bon");
    }

// exo 9

var rand9 = Math.floor((Math.random() * 6) + 0);

function perruche(rand9) {

    if (rand9 == 1) {
        console.log("AAAA ( 1 )");
    }

        else if (rand9 == 2) {
            console.log("BBBB ( 2 )");
        }

        else if (rand9 == 3) {
            console.log("CCCC ( 3 )");
        }

        else if (rand9 == 4) {
            console.log("DDDD ( 4 )");
        }

        else {
            console.log("je suis une perruche");
        }

}

perruche(rand9);

// exo 9 bis

var rand9bis = Math.floor((Math.random() * 6) + 0);

switch (rand9bis) {

    case 1:
        console.log("AAAA ( 1 )");
    break;

    case 2:
        console.log("BBBB ( 2 )");
    break;

    case 3:
        console.log("CCCC ( 3 )");
    break;

    case 4:
        console.log("DDDD ( 4 )");
    break;

    case 5:
        console.log("je suis une perruche");
    break;

}

// exo 10

var array10 = [Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1)
];

console.log(array10);

// exo 11

var array11 = [];

array11.push(Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1), Math.floor((Math.random() * 100) + 1));

// exo 12

somme12 = 0;

array11.forEach(function(val) {
    somme12 = somme12 + val;
});
console.log("La somme des éléments de mon tableau est : " + somme12);