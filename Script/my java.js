console.log("name");

console.warn("textt msg");
console.error("error ");   


// alert(name);



// writing data in html body

document.write(" Mesaage in browser");
document.write(" <h1> Mesaage in browser </h1>");

var name="AJAY";
let age=21;
const pi=3.14;

document.write("name is ",name);
document.write("<br>",typeof(name));
document.write(pi);

name1="Ajay";
document.write(name1);



let Student={
    name2: "Akshay",
    age1: 23

}

console.log(Student.name2);


var Sum;

function Sum(x,y){
    var sum=x+y;
    document.write("<br> the function sum returns ", sum);
    console.log("sum = ",sum);
    Sum=sum;
}
Sum(5,10);

function Dis(){
    alert(Sum);
}

// Dis();






