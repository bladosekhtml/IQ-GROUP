const sum = document.getElementById('sum');
const pay = document.getElementById('pay');
sum.addEventListener('input', () => {
   sum.value = sum.value.replace(/[^0-9]/g, '');
   if (parseInt(sum.value) < 1000) sum.value = '1000'
   else if (parseInt(sum.value) > 3000000) sum.value = '3000000';
   $("#sumRange").slider({
      value: sum.value
   });
});
pay.addEventListener('input', () => {
   pay.value = pay.value.replace(/[^0-9]/g, '');
   if (parseInt(pay.value) < 1000) pay.value = '1000'
   else if (parseInt(pay.value) > 3000000) pay.value = '3000000';
   $("#payRange").slider({
      value: pay.value
   });
})

$("#sumRange").slider({
   animate: 'slow',
   range: 'min',
   value: 10000,
   min: 1000,
   max: 3000000,
   slide: function (event, ui) {
      sum.value = ui.value;
   }
});
$("#payRange").slider({
   animate: 'slow',
   range: 'min',
   value: 10000,
   min: 1000,
   max: 3000000,
   slide: function (event, ui) {
      pay.value = ui.value;
   }
});
$("#datep").datepicker({
   dateFormat: "dd-mm-yy",
   changeMonth: true,
   changeYear: true,
});

document.addEventListener('submit', (e) => {
   e.preventDefault();
   const data = $('#datep').val();
   const term = $('#term').val();
   const radio = [...document.getElementsByClassName('radio')][0].checked ? false : true;
   $.ajax({
      url: 'calc.php',
      type: 'post',
      data: {
         data,
         sum: sum.value,
         term,
         radio,
         pay: pay.value,
      },
      success: function(res) {
         document.getElementById('result').innerHTML = ( `Результат: ${parseInt(res)} руб`);
      },
      error: function() {
         $('#result').html('Попробуйте попытку позже');
      }
   });
})