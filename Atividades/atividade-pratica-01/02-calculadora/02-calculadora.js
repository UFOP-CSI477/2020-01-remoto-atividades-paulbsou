function botoes (numero){

      if(numero=='='){
         document.calculadora.exibeTela.value = eval(document.calculadora.exibeTela.value);
      }else{
         document.calculadora.exibeTela.value = document.calculadora.exibeTela.value + numero;
      }
   }
