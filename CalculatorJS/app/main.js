
const AppForm = document.forms[0];

AppForm.addEventListener("submit", function(event){
    event.preventDefault();

    let firstrvalue = parseInt(AppForm.elements.firstNumb.value)
    let secondvalue = parseInt(AppForm.elements.secondNumb.value)
    CountResult(AppForm.elements.operation.value, firstrvalue, secondvalue);

})

function CountResult(value, num1, num2){
    switch(value){
        case "+":
            AddResult(num1 + num2)
            break;
        case "*":
            AddResult(num1 * num2)
            break;
        case "/":
            AddResult(num1 / num2)
            break;
        case "-":
            AddResult(num1 - num2)
            break;
    }
}

function AddResult(resultnumber){
    const result = document.getElementsByTagName("main")[0];
    result.insertAdjacentHTML("beforeend", `<h2 class="result">Результат операции: ${resultnumber}</h2>`)
}