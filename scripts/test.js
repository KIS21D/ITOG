function check(){
    let yes = 0;
    let no = 0;
    const q1 = document.test.q1.value;
    const q2 = document.test.q2.value;
    const q3 = document.test.q3.value;
    const q4 = document.test.q4.value;
    const q5 = document.test.q5.value;
    const q6 = document.test.q6.value;
    let result1=document.getElementById('result1');
    let result2=document.getElementById('result2');
    let result3=document.getElementById('result3');
    let test=document.getElementById('test');
    if (q1 == 'yes') {yes++}
    else if (q1 == 'no') {no++};
    if (q2 == 'yes') {yes++}
    else if (q2 == 'no') {no++};
    if (q3 == 'yes') {yes++}
    else if (q3 == 'no') {no++};
    if (q4 == 'yes') {yes++}
    else if (q4== 'no') {no++};
    if (q5 == 'yes') {yes++}
    else if (q5 == 'no') {no++};
    if (q6 == 'yes') {yes++}
    else if (q6 == 'no') {no++};
    test.style.display = 'none';
    result1.textContent = `Правильные ответы: ${yes}.`;
    result2.textContent = `Неправильные ответы: ${no}.`;
    result3.textContent = `Обновите страницу, чтобы попробывать еще раз!`;
}