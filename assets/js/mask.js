//
// Add 'cssClass: X' to field config in a fields.yaml to apply masking
// Example: to mask a phone number input add new line cssClass: mask-phone_us
//

function initMask() {
    $('.mask-date .form-control').mask('00/00/0000');
    $('.mask-time .form-control').mask('00:00:00');
    $('.mask-hours .form-control').mask('00.0', {reverse: true});
    $('.mask-date_time .form-control').mask('00/00/0000 00:00:00');
    $('.mask-cep .form-control').mask('00000-000');
    $('.mask-phone .form-control').mask('0000-0000');
    $('.mask-phone_with_ddd .form-control').mask('(00) 0000-0000');
    $('.mask-phone_us .form-control').mask('(000) 000-0000 x0000');
    $('.mask-mixed .form-control').mask('AAA 000-S0S');
    $('.mask-cpf .form-control').mask('000.000.000-00', {reverse: true});
    $('.mask-cnpj .form-control').mask('00.000.000/0000-00', {reverse: true});
    $('.mask-money .form-control').mask('000.000.000.000.000,00', {reverse: true});
    $('.mask-money2 .form-control').mask("#.##0,00", {reverse: true});
    $('.mask-zip_code .form-control').mask("00000-0000");
    $('.mask-ip_address .form-control').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
        }
    });
    $('.mask-ip_address .form-control').mask('099.099.099.099');
    $('.mask-percent .form-control').mask('##0,00%', {reverse: true});
    $('.mask-clear-if-not-match .form-control').mask("00/00/0000", {clearIfNotMatch: true});
    $('.mask-placeholder .form-control').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.mask-fallback .form-control').mask("00r00r0000", {
        translation: {
            'r': {
                pattern: /[\/]/,
                fallback: '/'
            },
            placeholder: "__/__/____"
        }
    });
    $('.mask-selectonfocus .form-control').mask("00/00/0000", {selectOnFocus: true});
};

// if (oc.useTurbo && oc.useTurbo()) {
    addEventListener('page:loaded', function() {
        initMask();
    });
// } else {
    $(window).on("load", function() {
        initMask();
    });
// }
