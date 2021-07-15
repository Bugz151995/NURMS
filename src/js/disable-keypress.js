function checkKey(e) {
    if (/\d/.test(e.key)) {
      e.preventDefault();
      e.stopPropagation();
    } 
  }
  
  const input = document.querySelector('#bidInputNumber');
  input.addEventListener('touchstart', checkKey);
  input.addEventListener('keydown', checkKey);