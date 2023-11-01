function HelloWorld() {
    alert("Hello World");
}

window.HelloWorld();

document.body.style.backgroundColor = "red";
setTimeout(() => document.body.style.backgroundColor = "", 5000);


function TestLoop() {
    for (let node of document.body.childNodes) {
        alert(node);
    }
}

TestLoop();