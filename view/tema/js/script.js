  $(document).ready(function() { 
    $('#cadcliente').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cli_nome: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Por favor, digite seu primeiro nome'
                    }
                }
            },
             cli_sobrenome: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Por favor, digite seu sobrenome'
                    }
                }
            },
            cli_cpf: {
                validators: {
                    callback: {
                        message: 'Por favor digite um CPF válido',
                        callback: function(value) {

                       cpf = value.replace(/[^\d]+/g,'');
                       if(cpf == '') return false;

                       if (cpf.length != 11) return false;

                       // testa se os 11 digitos são iguais, que não pode.
                       var valido = 0;
                       for (i=1; i < 11; i++){
                        if (cpf.charAt(0)!=cpf.charAt(i)) valido =1;
                       }
                       if (valido==0) return false;


                       aux = 0;
                       for (i=0; i < 9; i ++)
                        aux += parseInt(cpf.charAt(i)) * (10 - i);
                        check = 11 - (aux % 11);
                        if (check == 10 || check == 11)
                         check = 0;
                        if (check != parseInt(cpf.charAt(9)))
                         return false;

                       aux = 0;
                       for (i = 0; i < 10; i ++)
                        aux += parseInt(cpf.charAt(i)) * (11 - i);
                       check = 11 - (aux % 11);
                       if (check == 10 || check == 11)
                        check = 0;
                       if (check != parseInt(cpf.charAt(10)))
                        return false;
                       return true;


                        }
                   }
                }
           },
            cli_celular: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, digite seu número do whatsapp'
                    },
                    regexp: {
                        regexp: /^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/,
                        message: 'Por favor, digite um número de Whatsapp com DDD sem o zero, nesse formato 12981819956'
                    },
//                    phone: {
//                        country: 'BR',
//                        message: 'Por favor, digite um número de whatsapp válido com DDD'
//                    }
                }
            },

             cli_fone: {
                validators: {
//                    notEmpty: {
//                        message: 'Por favor, digite seu número do whatsapp'
//                    },
                    regexp: {
                        regexp: /^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/,
                        message: 'Por favor, digite um número de telefone com DDD sem o zero'
                    },
//                    phone: {
//                        country: 'BR',
//                        message: 'Por favor, digite um número de whatsapp válido com DDD'
//                    }
                }
            },
            cli_endereco: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Por favor, digite sua rua'
                    }
                }
            },
            cli_bairro: {
                validators: {
                     stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Por favor, digite seu bairro'
                    }
                }
            },
            cli_cidade: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Por favor, selecione sua cidade'
                    }
                }
            },
            cli_cep: {
                validators: {
//                    notEmpty: {
//                        message: 'Por favor, digite seu CEP'
//                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: 'Por favor, digite um CEP válido'
                    },

                }
            },
            cli_ponto_referencia: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Por favor insira mais informações'
                    },
                    notEmpty: {
                        message: 'Por favor digite um ponto de referência como comercio ou locais próximos a sua residencia'
                    }
                    }
                },
            senha: {
                validators: {
                    stringLength: {
                        min: 8,
                        max: 30,
                        message:'Por favor digite uma senha entre 8 e 30 cara'
                    }
                }
            },
            cli_senha: {
                validators: {
                    identical: {
                        field: 'senha',
                        message: 'A senha e sua confirmação não são as mesmas'
                    }
                }
            }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#cadcliente').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
