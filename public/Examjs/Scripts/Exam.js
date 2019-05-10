$('document').ready(function () {
    $('#exam').addClass('active');
    $('.question:first-child').show();
    $('.questionsignals:first-child').show();

    $('.firstBtn').click(function () {
        if (!$(this).hasClass('disabled')) {
            $('.question:visible').hide();
            $('.question:first-child').show();
            $('.questionsignals:visible').hide();
            $('.questionsignals:first-child').show();
            $('.questionnum b').text('1');
            $('.examNav ul li a').removeClass('disabled');
            $('.firstBtn, .prevBtn').addClass('disabled');
        }
    });
    $('.prevBtn').click(function () {
        if (!$(this).hasClass('disabled')) {
            var curr1 = $('.question:visible');
            var curr2 = $('.questionsignals:visible');
            if (!curr1.is(':first-child')) {
                curr1.hide();
                curr1.prev().show();
                curr2.hide();
                curr2.prev().show();
                $('.questionnum b').text((parseInt($('.questionnum b').text(), 10) - 1));
                $('.examNav ul li a').removeClass('disabled');
                if (curr1.prev().is(':first-child')) {
                    $('.firstBtn, .prevBtn').addClass('disabled');
                }
            }
        }
    });
    $('.nextBtn').click(function () {
        if (!$(this).hasClass('disabled')) {
            var curr1 = $('.question:visible');
            var curr2 = $('.questionsignals:visible');
            if (!curr1.is(':last-child')) {
                curr1.hide();
                curr1.next().show();
                curr2.hide();
                curr2.next().show();
                $('.questionnum b').text((parseInt($('.questionnum b').text(), 10) + 1));
                $('.examNav ul li a').removeClass('disabled');
                if (curr1.next().is(':last-child')) {
                    $('.lastBtn, .nextBtn').addClass('disabled');
                }
            }
        }
    });
    $('.lastBtn').click(function () {
        if (!$(this).hasClass('disabled')) {
            $('.question:visible').hide();
            $('.question:last-child').show();
            $('.questionsignals:visible').hide();
            $('.questionsignals:last-child').show();
            $('.questionnum b').text('30');
            $('.examNav ul li a').removeClass('disabled');
            $('.lastBtn, .nextBtn').addClass('disabled');
        }
    });

    $('.reviewBtn').click(function () {
        if ($(this).is(':checked')) {
            $('.RevionQuestionNum b').text((parseInt($('.RevionQuestionNum b').text(), 10) + 1));
        }
        else {
            $('.RevionQuestionNum b').text((parseInt($('.RevionQuestionNum b').text(), 10) - 1));
        }
    });

    $.QueryString = (function (a) {
        if (a == "") return {};
        var b = {};
        for (var i = 0; i < a.length; ++i) {
            var p = a[i].split('=');
            if (p.length != 2) continue;
            b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
        }
        return b;
    })(window.location.search.substr(1).split('&'))

    $('#btnFinishExam').click(function () {
        if (confirm('هل أنت متأكد من أنك تود الإنهاء ؟')) {
			$('title').text("معهد الإشارات - مراجعة الإمتحان");
			var eduid = $.QueryString["EduID"];
			var result = 0;
			for (var i = 1; i <= 30; i++) {
				result += correctquestion(i);
			}

			var status = '<span class="statisticValue" style="color:Red;">راسب</span>';
			var resultstr = '<span class="statisticValue" style="color:red;">' + result + '</span>';

			if ((eduid == "1" && result > 25) || (eduid == "2" && result >= 25)) {
				var status = '<span class="statisticValue" style="color:green;">ناجح</span>';
				var resultstr = '<span class="statisticValue" style="color:green;">' + result + '</span>';
			}

			$('.EndExam').html('<div class="statistics"><div class="mainResult"><span class="statisticName">نتيجة الإمتحان : </span>' + resultstr + '<span class="statisticName"> من 30 </span>( ' + status + ' )</div></div>');
		}
    });

    function correctquestion(i) {
        var question = $('.examquestions .q' + i);
        var questionoption = question.children('.questionoption');
        var questionname = question.children('.questionname');
        var questionanswers = question.children('.questionanswers');

        var studentanswer = parseInt(questionanswers.children("input[type=radio]:checked").val(), 10);
        var correctanswer = parseInt(questionoption.children(".correctanswer").text(), 10);

        questionanswers.children(".answer" + correctanswer).css("color", "green");

        if (studentanswer) {
            if (studentanswer == correctanswer) {
                questionname.append('<img src="images/site/true.png" style="float: left;">');
                return 1;
            }
            else {
                questionname.append('<img src="images/site/false.png" style="float: left;">');
                questionanswers.children(".answer" + studentanswer).css("color", "red");
                return 0;
            }
        } else {
            questionname.append('<img src="images/site/false.png" style="float: left;">');
            return 0;
        }
    }
});