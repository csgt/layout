
(function($) {
  FormValidation.Validator.nit = {
    validate: function(validator, $field, options) {
      var value   = $field.val();
      
      if (value === '')   return true;
      if (value === 'CF') return true;

      var nitRegExp = /\d+(-)([0-9K])/i; ;
      
      if(!nitRegExp.test(value)) {
        return {
          valid: false,
          message: 'NIT incorrecto, debe llevar guión'
        }
      }

      var seccion = value.split('-');
 
      var nit         = seccion[0];
      var verificador = seccion[1]; 
      if ((verificador=='K')||(verificador=='k'))  verificador = 10;

      var factor = parseInt(nit.length)+1;

      var suma  = 0;
      var valor = 0;
      var fin   = factor;

      for (var i=0; i<=fin; i++) {
        valor = nit.charAt(i);
        suma  = suma + (valor*factor);
        factor--;
      };

      var mod11 = (11-(suma % 11)) % 11;
      if (mod11!=verificador) {
        return {
          valid: false,
          message: 'NIT inválido'
        }
      }
      return true;
    }
  };
}(window.jQuery));
