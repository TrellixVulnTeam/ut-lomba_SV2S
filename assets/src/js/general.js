// NAVBAR BUTTON
$(document).ready(function () {
    $(".nav-sublink").click(function () {
        $(this).children().toggleClass("active");
    });
});
$(document).mouseup(function (e) {
    var container = $(".nav-sublink");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        $(".sub-nav").removeClass("active");
    }
});

$(document).ready(function () {
    $(".goToStep1").click(function () {
        $("#register-step-2").removeClass("active");
        setTimeout(function () {
            $("#register-step-1").addClass("active");
        }, 700);
    });
    $(".goToStep2").click(function () {
        $("#register-step-1").removeClass("active");
        $("#register-step-3").removeClass("active");
        setTimeout(function () {
            $("#register-step-2").addClass("active");
        }, 700);
    });
    $(".goToStep3").click(function () {
        $("#register-step-2").removeClass("active");
        $("#register-step-4").removeClass("active");
        setTimeout(function () {
            $("#register-step-3").addClass("active");
        }, 700);
    });
    $(".goToStep4").click(function () {
        $("#register-step-3").removeClass("active");
        setTimeout(function () {
            $("#register-step-4").addClass("active");
        }, 700);
    });
});


$(document).ready(function () {
    $("#toggleSee").click(function () {
        $(".desc-text-container").toggleClass("active");
        $(".gradient-decor").toggleClass("inactive");
    });
});

$(document).ready(function () {
    $(".collapse-card").click(function () {
        $(this).toggleClass("active");
        $(this).siblings("div").toggleClass("active");
    });
});

$(".togglePassword").click(function () {
    $(this).toggleClass('inactive');
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
})



/*
Reference: http://jsfiddle.net/BB3JK/47/
*/

$('select').each(function () {
    var $this = $(this), numberOfOptions = $(this).children('option').length;

    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());

    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);

    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    var $listItems = $list.children('li');

    $styledSelect.click(function (e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function () {
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });

    $listItems.click(function (e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        //console.log($this.val());
    });

    $(document).click(function () {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});


$(document).ready(function () {
    $('#labelCV').hide();
    $("#cv").change(function () {
        filename = this.files[0].name;
        $('#labelCV').show();
        $('#labelCV i').text(filename);
        $('#buttonCV').hide();
    });
    $("#deleteCV").click(function () {
        $("#cv").val("");
        $('#labelCV').hide();
        $('#buttonCV').show();
    });
});
$(document).ready(function () {
    $('#labelPorto').hide();
    $("#porto").change(function () {
        filename = this.files[0].name;
        $('#labelPorto').show();
        $('#labelPorto i').text(filename);
        $('#buttonPorto').hide();
    });
    $("#deletePorto").click(function () {
        $("#porto").val("");
        $('#labelPorto').hide();
        $('#buttonPorto').show();
    });
});
$(document).ready(function () {
    $('#labelSertif1').hide();
    $("#sertif1").change(function () {
        filename = this.files[0].name;
        $('#labelSertif1').show();
        $('#labelSertif1 i').text(filename);
        $('#buttonSertif1').hide();
    });
    $("#deleteSertif1").click(function () {
        $("#sertif1").val("");
        $('#labelSertif1').hide();
        $('#buttonSertif1').show();
    });
});
$(document).ready(function () {
    $('#labelSertif2').hide();
    $("#sertif2").change(function () {
        filename = this.files[0].name;
        $('#labelSertif2').show();
        $('#labelSertif2 i').text(filename);
        $('#buttonSertif2').hide();
    });
    $("#deleteSertif2").click(function () {
        $("#sertif2").val("");
        $('#labelSertif2').hide();
        $('#buttonSertif2').show();
    });
});
$(document).ready(function () {
    $('#labelSertif3').hide();
    $("#sertif3").change(function () {
        filename = this.files[0].name;
        $('#labelSertif3').show();
        $('#labelSertif3 i').text(filename);
        $('#buttonSertif3').hide();
    });
    $("#deleteSertif3").click(function () {
        $("#sertif3").val("");
        $('#labelSertif3').hide();
        $('#buttonSertif3').show();
    });
});
$(document).ready(function () {
    $('#labelRekom').hide();
    $("#rekom").change(function () {
        filename = this.files[0].name;
        $('#labelRekom').show();
        $('#labelRekom i').text(filename);
        $('#buttonRekom').hide();
    });
    $("#deleteRekom").click(function () {
        $("#rekom").val("");
        $('#labelRekom').hide();
        $('#buttonRekom').show();
    });
});
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}