let display = document.getElementById('display');

function appendCharacter(char) {
  display.value += char;
}

function clearDisplay() {
  display.value = '';
}

function clearLastDigit() {
  display.value = display.value.slice(0, -1);
}

function deleteDigit() {
  display.value = display.value.slice(0, -1);
}

function calculateResult() {
  try {
    display.value = eval(display.value);
  } catch (error) {
    display.value = 'Error';
  }
}
function changeSign() {
    if (display.value !== '') {
      display.value = -parseFloat(display.value);
    }
  }
  
  function calculateReciprocal() {
    if (display.value !== '' && display.value !== '0') {
      display.value = 1 / parseFloat(display.value);
    } else {
      display.value = 'Error';
    }
  }
  
  function calculateSquareRoot() {
    if (display.value !== '' && parseFloat(display.value) >= 0) {
      display.value = Math.sqrt(parseFloat(display.value));
    } else {
      display.value = 'Error';
    }
  }
  
  function calculatePercentage() {
    if (display.value !== '') {
      display.value = 0.01 * parseFloat(display.value);
    }
  }
  