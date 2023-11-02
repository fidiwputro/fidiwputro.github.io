console.log("Hello World!");

class A {
  constructor() {
    this.a = 1;
  }

  A() {
    return this.a;
  }
}

let a = new A();

a.a = 2;

console.log(a.A());

const makename = prompt("Enter your name: ");

console.log(`Hello ${makename}!`);