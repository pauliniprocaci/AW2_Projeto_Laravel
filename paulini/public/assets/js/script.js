$(function () {
    
    $('.currency').maskMoney({
        //'prefix': 'R$ ',
        thousands: '.',
        decimal: ',',
        affixesStay: false
    });

    !function (a) {
        a.fn.datepicker.dates["pt-BR"] = {
            days: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"],
            daysShort: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
            daysMin: ["Do", "Se", "Te", "Qu", "Qu", "Se", "Sa"],
            months: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
            monthsShort: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
            today: "Hoje",
            monthsTitle: "Meses",
            clear: "Limpar",
            format: "dd/mm/yyyy"
        }
    }(jQuery);
    $('.date-picker').datepicker({
        'format': 'dd/mm/yyyy',
        'language': 'pt-BR',
        'todayHighlight': true
    });

    $('#modalExcluirTitulo').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var descricao = button.data('descricao');
        var modal = $(this);
        var form = modal.find('form');
        var baseUrl = form.data('baseurl');

        if(!baseUrl.endsWith('/'))
            baseUrl += '/';

        form.attr('action', baseUrl + id);
        modal.find('.modal-body span').html('ATENÇÃO! Você quer mesmo excluir o título <b>' + id + '</b>?');
    });

    $('.receber-titulo').click(function (event) {
        event.preventDefault();

        var buttonReceive = $(this);
        var urlReceive = buttonReceive.attr('href');
        var csrfToken = buttonReceive.data('token');

        var response = $.ajax({
            url: urlReceive,
            type: 'PUT',
            headers: {
                'X-CSRF-Token': csrfToken
            }
        });

        response.done(function (event) {
            var id = buttonReceive.data('id');
            $('[data-status = ' + id + ']').html('<span class="label label-success">' + event + '</span>');
            buttonReceive.hide();
        });

        response.fail(function (event) {
            alert('ATENÇÃO! Ocorreu uma falha ao receber título!');
        });
    });
});